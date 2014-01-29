<?php

namespace Tutorial\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tutorial\AnimalsBundle\Entity\Animal;
use Tutorial\AnimalsBundle\Form\AnimalType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $animals = $em->getRepository("TutorialAnimalsBundle:Animal")->findAll();

        return $this->render('TutorialAnimalsBundle:Default:index.html.twig', array(
            'animals' => $animals,
        ));
    }

    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new AnimalType());

        return $this->render('TutorialAnimalsBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
