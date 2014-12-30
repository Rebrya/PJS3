<?php

namespace Machouille\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function indexAction()
    {
        return $this->render('MachouilleProduitBundle:Produit:accueil.html.twig');
    }
}
