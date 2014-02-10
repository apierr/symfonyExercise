<?php

namespace Acme\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeBookBundle:Default:index.html.twig', array('name' => $name));
    }
}
