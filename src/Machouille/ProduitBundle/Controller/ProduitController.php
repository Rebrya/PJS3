<?php

namespace Machouille\ProduitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Machouille\ProduitBundle\Entity\Produit;
use Machouille\ProduitBundle\Entity\Famille;
use Assetic\Factory\AssetFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Machouille\ProduitBundle\Entity\Commande;
use Machouille\ProduitBundle\Entity\Contient;

class ProduitController extends Controller {
	public function indexAction() {
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:accueil.html.twig', array (
					"Username" => $_SESSION ['Username'] 
			) );
		else
			return $this->render ( 'MachouilleProduitBundle:Produit:accueil.html.twig', array () );
	}
	public function catalogueAction($famille) {
		$produits = new Produit ();
		
		$em = $this->getDoctrine ()->getManager ();
		$query = $em->createQuery ( "Select P.id, P.codeproduit, P.designation, P.prix, P.quantite, P.vendu
				from MachouilleProduitBundle:Produit P, MachouilleProduitBundle:Famille F, MachouilleProduitBundle:AppartientFamille AF
				where F.nom = '$famille'
				and AF.idFamille = F.id
				and AF.idProduit = P.id
				" );
		$produits = $query->getResult ();
		
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:catalogue.html.twig', array (
					"famille" => $famille,
					"Username" => $_SESSION ['Username'],
					"Produits" => $produits 
			) );
		else
			return $this->render ( 'MachouilleProduitBundle:Produit:catalogue.html.twig', array (
					"famille" => $famille,
					"Produits" => $produits 
			) );
	}
	public function specialAction() {
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:speciale.html.twig', array (
					"Username" => $_SESSION ['Username'] 
			) );
		else
			return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );
	}
	public function jeuAction() {
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:jeu.html.twig', array (
					"Username" => $_SESSION ['Username'] 
			) );
		else
			return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );
	}
	public function contactAction() {
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:contactnous.html.twig', array (
					"Username" => $_SESSION ['Username'] 
			) );
		else
			return $this->render ( 'MachouilleProduitBundle:Produit:contactnous.html.twig', array (
			) );
	}
	public function panierAction() {
		if ($this->estConnecter ()) {
			$em = $this->getDoctrine ()->getManager ();
			$username = $_SESSION ['Username'];
			$query = $em->createQuery ( "select p.id as id, p.designation as designation, p.codeproduit as codeproduit, p.prix as prix, ct.quantite as quantite, c.id as idcommande
					from MachouilleProduitBundle:Produit p, MachouilleProduitBundle:Commande c, MachouilleProduitBundle:Contient ct, MachouilleLoginBundle:Users u
					where ct.idProduit = p.id
					and ct.idCommande = c.id
					and c.idUser = u.id
					and c.valider = false
					and u.username = '$username'
					order by p.codeproduit" );
			$commandes = $query->getResult ();
			
			$query = $em->createQuery ( "select p.id as id, p.designation as designation, p.codeproduit as codeproduit, p.prix as prix, ct.quantite as quantite, c.id as idcommande, c.date as date
					from MachouilleProduitBundle:Produit p, MachouilleProduitBundle:Commande c, MachouilleProduitBundle:Contient ct, MachouilleLoginBundle:Users u
					where ct.idProduit = p.id
					and ct.idCommande = c.id
					and c.idUser = u.id
					and c.valider = true
					and u.username = '$username'" );
			$historiques = $query->getResult ();
			return $this->render ( 'MachouilleProduitBundle:Produit:panier.html.twig', array (
					"Username" => $_SESSION ['Username'],
					"commandes" => $commandes,
					"historique" => $historiques
			) );
		} else
		return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );	
	}

	public function addpanierAction($code) {
		if ($this->estConnecter ()) {
			$em = $this->getDoctrine ()->getManager ();
			$username = $_SESSION ['Username'];
			
			$query = $em->createQuery (
					"select u.id
					from MachouilleLoginBundle:Users u
					where u.username = '$username'");
			$users = $query->getSingleResult();
			foreach($users as $u){
				$idUser = $u;
			}
			
			$query = $em->createQuery ( "select c.id
					from MachouilleProduitBundle:Commande c, MachouilleLoginBundle:Users u
					where c.idUser = $idUser
					and c.valider = false");
			$commandes = $query->getResult();
			
			if(count($commandes) <= 0){
				$commande = new Commande();
				$commande->setValider(false);
				$commande->setIdUser($idUser);
				$em->persist($commande);
				$em->flush();
				$query = $em->createQuery ( "select c.id
						from MachouilleProduitBundle:Commande c, MachouilleLoginBundle:Users u
						where c.valider = false
						and c.idUser = $idUser");
				$commandes = $query->getResult();
			}
			foreach($commandes as $cmd){
				$idCommande = $cmd['id'];
			}
						
			$query = $em->createQuery (
					"select p.id
					from MachouilleProduitBundle:Produit p
					where p.codeproduit = '$code'");
			$produit = $query->getSingleResult();
			foreach($produit as $p){
				$idProduit = $p;
			}
			
			$query = $em->createQuery (
				"select p.id
				from MachouilleProduitBundle:Produit p, MachouilleProduitBundle:Commande c, MachouilleProduitBundle:Contient ct
				where ct.idProduit = $idProduit
				and ct.idCommande = $idCommande");
			$contient = $query->getResult();
			if (count($contient) == 0){
				$contient = new Contient();
				$contient->setIdCommande($idCommande);
				$contient->setIdProduit($idProduit);
				$contient->setQuantite(1);
				$em->persist($contient);
				$em->flush();
			}
			return new RedirectResponse ( $_SERVER ['HTTP_REFERER'] );
		} 
		else {
			return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );
		}
	}
	
	public function payerAction(){
		if ($this->estConnecter ())
			return $this->render ( 'MachouilleProduitBundle:Produit:paiement.html.twig', array (
					"Username" => $_SESSION ['Username']
			) );
		else
			return new RedirectResponse($this->get ( 'router' )->generate ( 'machouille_login_homepage' ));
	}
	
	public function payerConfirmeAction(){
		if ($this->estConnecter ()){
			$em = $this->getDoctrine ()->getManager ();
			$username = $_SESSION ['Username'];
			
			
			$query = $em->createQuery ( "select p.id as id, ct.quantite as quantite
					from MachouilleProduitBundle:Produit p, MachouilleProduitBundle:Commande c, MachouilleProduitBundle:Contient ct, MachouilleLoginBundle:Users u
					where ct.idProduit = p.id
					and ct.idCommande = c.id
					and c.idUser = u.id
					and c.valider = false
					and u.username = '$username'
					order by p.codeproduit" );
			$produits = $query->getResult ();
			foreach($produits as $p){
				$repo = $em->getRepository('MachouilleProduitBundle:Produit');
					
				$produit = $repo->findOneBy(array('id' => $p['id']));
					
				$produit->setQuantite($produit->getQuantite() - $p['quantite']);
				$produit->setVendu($produit->getVendu() + $p['quantite']);
				$em->flush();
			}
			
			$query = $em->createQuery ( "select c.id as idcommande
					from MachouilleProduitBundle:Commande c, MachouilleLoginBundle:Users u
					where c.idUser = u.id
					and c.valider = false
					and u.username = '$username'" );
			$commandes = $query->getResult ();
			foreach($commandes as $cmd){
				$idCommande = $cmd;
			}
			
			if(isset($idCommande)){
				$repo = $em->getRepository('MachouilleProduitBundle:Commande');
				
				$commande = $repo->findOneBy(array('id' => $idCommande));
				
				$commande->setValider(true);
				$em->flush();
			}
			
			return new RedirectResponse($this->get ( 'router' )->generate ( 'machouille_produit_homepage' ));
		}
		else
			return new RedirectResponse($this->get ( 'router' )->generate ( 'machouille_login_homepage' ));
	}
	
	public function estConnecter() {
		if (isset ( $_SESSION ['Username'] )) {
			return true;
		}
		return false;
	}
}
