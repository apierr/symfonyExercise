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
        $form = $this->createForm(new AnimalType(), new Animal());
        $request = $this->getRequest();

        if($request->isMethod("post")){
                $form->bind($request);
                $em->persist($form->getData());
                $em->flush();

                return $this->redirect($this->generateUrl("tutorial_animals_homepage"));
        }

        return $this->render('TutorialAnimalsBundle:Default:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
