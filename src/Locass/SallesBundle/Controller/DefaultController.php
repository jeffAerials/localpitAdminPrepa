<?php

namespace Locass\SallesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocassSallesBundle:Default:index.html.twig');
    }
}
