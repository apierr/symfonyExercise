<?php

namespace Tutorial\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutorialAnimalsBundle:Default:index.html.twig', array(
        ));
    }

    public function addAction()
    {
        return $this->render('TutorialAnimalsBundle:Default:add.html.twig', array(
        ));
    }
}
