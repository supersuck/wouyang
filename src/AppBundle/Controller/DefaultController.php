<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', array());
    }

    /**
     * @Route("/procure", name="procure")
     */
    public function procureAction()
    {
        return $this->render('default/procure.html.twig', array());
    }

    /**
     * @Route("/symfony", name="symfony_homepage")
     */
    public function symfonyAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/symfony.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
