<?php

namespace Tutorial\AnimalsBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class PageController extends FOSRestController
{
	public function getPageAction($id)
	{
	    return $this->container->get('doctrine.entity_manager')->getRepository('Page')->find($id);
	}
}
