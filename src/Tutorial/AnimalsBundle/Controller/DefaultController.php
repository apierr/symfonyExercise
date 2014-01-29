<?php

namespace Tutorial\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tutorial\AnimalsBundle\Entity\Animal;

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
        $animal = new Animal();

        $animal->setTitle("A cat")
            ->setDescription("This cat is beautiful")
            ->setUrl("data:image/jpeg;base64,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")
            ->setDate(new \DateTime());
        $em->persist($animal);
        $em->flush();

        return $this->render('TutorialAnimalsBundle:Default:add.html.twig', array(
        ));
    }
}
