<?php

namespace Locass\OrgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocassOrgaBundle:Default:index.html.twig');
    }
}
