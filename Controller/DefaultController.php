<?php

namespace Petkopara\TritonCrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TritonCrudBundle:Default:index.html.twig');
    }
}
