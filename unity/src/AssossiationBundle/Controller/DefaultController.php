<?php

namespace AssossiationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AssossiationBundle:Default:index.html.twig');
    }
}
