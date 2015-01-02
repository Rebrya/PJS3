<?php

namespace Machouille\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Machouille\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Validator\Constraints\Length;

class LoginController extends Controller {
	public function indexAction() {
		if (isset ( $_SESSION ['msgErreur'] )) {
			session_destroy();
			return $this->render ( 'MachouilleLoginBundle::login.html.twig', array (
					"estCo" => $this->estConnecter (),
					"msgErreur" => $_SESSION ['msgErreur'] 
			) );
		} else {
			return $this->render ( 'MachouilleLoginBundle::login.html.twig', array (
					"estCo" => $this->estConnecter () 
			) );
		}
	}
	public function loginCheckAction() {
		$name =htmlspecialchars($_POST ["username"]) ;
		$pw =htmlspecialchars($_POST ["password"]) ;
		$pw = md5 ( $pw );
		$em = $this->getDoctrine ()->getEntityManager ();
		$repo = $em->getRepository ( 'MachouilleLoginBundle:Users' );
		
		$user = $repo->findOneBy ( array (
				'username' => $name,
				'password' => $pw 
		) );
		if ($user) {
			$user->setUpLastLogin ();
			$em->flush ();
			$_SESSION ['Username'] = $user->getUsername ();
			return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_produit_homepage' ) );
		} else {
			$_SESSION ['msgErreur'] = "Votre login ou mot de passe est incorrect";
			echo $_SESSION['msgErreur'];
			return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );
		}
	}
	public function registerAction(Request $request) {
		$user = new Users ();
		$form = $this->createFormBuilder ( $user )->setAction ( $this->generateUrl ( 'machouille_login_registerCheck' ) )->add ( "Firstname", 'text', array (
				'constraints' => new Length ( array (
						'min' => 3 
				) ) 
		) )->add ( "Lastname", 'text' )->add ( 'Email', 'email' )->add ( 'Birthday', 'birthday' )->add ( 'Address', 'text' )->add ( 'City', 'text' )->add ( 'Country', 'text' )->add ( 'Username', 'text' )->add ( 'Password', 'password' )->add ( 'Valider', 'submit' )->getForm ();
		
		return $this->render ( 'MachouilleLoginBundle::register.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	public function registerCheckAction() {
		$em = $this->getDoctrine ()->getEntityManager ();
		$form = $_POST['form'];
// 		$user = new Users();
// 		$user->setFirstname($form['Firstname']);
// 		$user->setLastname($form['Lastname']);
// 		$user->setEmail($form['Email']);
// 		$user->setBirthday(new \DateTime($form['Birthday']));
// 		$user->setCity($form['City']);
// 		$user->setCountry($form['Country']);
// 		$user->setUsername($form['Username']);
// 		$user->setPassword(md5($form['Password']));
//		$user->setAddress($form['Adresse']);
// 		$em->persist($user);
// 		$em->flush();

		$username = $form['Username'];
		$firstname = $form['Firstname'];
		$lastname = $form['Lastname'];
		$email = $form['Email'];
		$birthday = $form['Birthday'];
		$city = $form['City'];
		$country = $form['Country'];
		$adresse = $form['Address'];
		$password = md5($form['Password']);
		
		$sql = "INSERT INTO `users`(`username`, `firstname`, `lastname`, `birthday`,
				 `email`, `address`, `city`, `country`, `password`, `lastlogin`, `datesignin`,
				 `isactive`)
				 VALUES ('$username','$firstname','$lastname','5-5-5',
				'$email',
				'$adresse',
				'$city',
				'$country',
				'$password',
				 'now()',
				'now()','true');";
		
		$em->getConnection()->exec( $sql );
		$em->flush();
		
		return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_login_homepage' ) );
	}
	public function logoutAction() {
		session_destroy ();
		return new RedirectResponse ( $this->get ( 'router' )->generate ( 'machouille_produit_homepage' ) );
	}
	public function estConnecter() {
		if (isset ( $_SESSION ['Username'] )) {
			return true;
		}
		return false;
	}
}
