<?php

namespace Locass\BandsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocassBandsBundle:Default:index.html.twig');
    }
}
