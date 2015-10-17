<?php

namespace Michael\Test\SlugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MichaelTestSlugBundle:Default:index.html.twig', array('name' => $name));
    }
}
