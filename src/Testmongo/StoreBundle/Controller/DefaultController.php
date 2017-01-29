<?php

namespace Testmongo\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Testmongo\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestmongoStoreBundle:Default:index.html.twig');
    }
    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id '.$product->getId());
    }
}
