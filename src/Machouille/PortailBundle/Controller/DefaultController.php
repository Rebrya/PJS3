<?php

namespace Machouille\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Machouille\PortailBundle\Entity\Produit;

class DefaultController extends Controller
{
    public function indexAction()
    {	
    	
    	//inserer un produit
//     	$produit = new Produit();
//     	$produit->setDesignation("chocolat");
//     	$produit->setCodeProduit("CD23165");
    	
//     	$em = $this->getDoctrine()->getManager();
//     	$em->persist($produit);
//     	$em->flush();
    	
    	//recuperer un produit
//     	$repository = $this->getDoctrine()
//     	->getRepository('MachouillePortailBundle:Produit');
    	
//     	$product = new Produit();
    	
//     	$product = $repository
//     		->findBy(
//     		array('designation' => 'chocolat')
//     	);
    	
//     	if (!$product) {
//     		throw $this->createNotFoundException(
//     				'Aucun produit trouvé pour cet id'
//     		);
//     	}
    	
        return $this->render('MachouillePortailBundle:Default:index.html.twig', array(
        	'produit' => $product
        ));
    }
}
