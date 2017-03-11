<?php

namespace Locass\BandsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // On récupère le service
        $isEnableSociety = $this->container->get('locass_user.check_email_society');
        $user = $this->getUser();
        $idmongo = $user->getIdmongo();
        $enable = $isEnableSociety->isEmailsocietyenabled($idmongo);

        if ($enable == true) {
            throw new \Exception('Votre message a été détecté comme spam !');
        }

        return $this->render('LocassBandsBundle:Default:index.html.twig');
    }
}
