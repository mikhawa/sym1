<?php

namespace Michael\Test\SlugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($atransformer)
    {
        // appel de notre classe CreateSlug et de la méthode slugify
        $slug = $this->get('app.slug')->slugify($atransformer);
        return $this->render('MichaelTestSlugBundle:Default:index.html.twig', array('monslug' => $slug));
    }
}
