<?php

namespace Pagina\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PaginaPageBundle:Default:inicio.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('PaginaPageBundle:Default:about.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('PaginaPageBundle:Default:services.html.twig');
    }
    public function contactoAction()
    {
        return $this->render('PaginaPageBundle:Default:contact.html.twig');
    }
}
