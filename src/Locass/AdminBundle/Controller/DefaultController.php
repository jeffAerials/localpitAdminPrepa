<?php

namespace Locass\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocassAdminBundle:Default:index.html.twig');
    }
}
