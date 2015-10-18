<?php

namespace Michael\Test\MonOrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// pour les requêtes
use Symfony\Component\HttpFoundation\Request;
// ma logique formulaire de droit
use Michael\Test\MonOrmBundle\Form\DroitType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('MichaelTestMonOrmBundle:Droit');
        $products = $repository->findAll();
        return $this->render('MichaelTestMonOrmBundle:Default:index.html.twig', array('name' => $products));
    }
    public function newDroitAction(Request $request)
    {

        $form = $this->createForm(new DroitType())->add('save', 'submit');
        
        $form->handleRequest($request);

    if ($form->isValid()) {
        // action;
    }

        return $this->render('MichaelTestMonOrmBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
