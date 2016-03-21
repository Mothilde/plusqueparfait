<?php

namespace CreationplatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CreationplatBundle:Default:index.html.twig');
    }
}
