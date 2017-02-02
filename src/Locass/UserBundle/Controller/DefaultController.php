<?php

namespace Locass\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // 1 - Redéfinir le role en ROLE_USER ds RegistrationListener.php
        // 2 - Présenter la suite du formulaire d'inscription en fonction de getApplication UserBundle
        // 3 - Affecter le ROLE_.. correspondant après event formulaire succes (avant enregistrement update)
        // 4 - Enregistrer les data dans les entity correspondantes (Salle, Bands, Orga) + mongoDB
        // 5 - Rediriger vers la route correspondante à la variable application
        return $this->render('LocassUserBundle:Default:index.html.twig');
    }
}
