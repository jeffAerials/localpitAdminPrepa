<?php

namespace Locass\OrgaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocassOrgaBundle:Default:index.html.twig');
    }
    public function newbandAction()
    {
        return $this->render('LocassOrgaBundle:Group:new.html.twig');
    }
    public function newsalleAction()
    {
        return $this->render('LocassOrgaBundle:Salle:new.html.twig');
    }
    public function indexsalleAction()
    {
        return $this->render('LocassOrgaBundle:Salle:index.html.twig');
    }
}

