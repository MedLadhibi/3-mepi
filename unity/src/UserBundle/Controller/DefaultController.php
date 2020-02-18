<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{


    public function indexAction()
    {

        return $this->render('@Assossiation/Default/index.html.twig');
    }


}