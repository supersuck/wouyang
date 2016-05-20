<?php

namespace Oyww\DictBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/dict")
     */
    public function indexAction()
    {
        return $this->render('DictBundle:Default:index.html.twig');
    }
}
