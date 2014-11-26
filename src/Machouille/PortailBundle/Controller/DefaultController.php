<?php

namespace Machouille\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {	
    	$lang = "en";
        return $this->render('MachouillePortailBundle:Default:index.html.twig', array('lang' => $lang));
    }
}
