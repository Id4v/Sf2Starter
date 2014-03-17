<?php

namespace Stikair\Bundle\InitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StikairInitBundle:Default:index.html.twig', array('name' => $name));
    }
}
