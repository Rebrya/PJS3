<?php

namespace Machouille\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Machouille\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints\Length;


class LoginController extends Controller
{
    public function indexAction()
    {
    	$name = "Ren";
    	$pw = "haha";
    	
    	$em = $this->getDoctrine()->getEntityManager();
    	$repo = $em->getRepository('MachouilleLoginBundle:Users');
    	
    	$user = $repo->findOneBy(array('username' => $name, 'password' => $pw));
    	if ($user) {
    		$user->setUpLastLogin();
    		$em->flush();
    		return $this->render('MachouilleLoginBundle::login.html.twig', array(
    				'name' => $user->getFirstname(),
    		));
    	}
    	else {
    		echo "Erreur !";
    		exit;
    	}
    }
    
    public function registerAction(Request $request){
    	$user = new Users();
    	
    	$form = $this->createFormBuilder($user)
    		->setAction($this->generateUrl('machouille_login_homepage'))
    		->add("Firstname", 'text', array(
    				'constraints' => new Length(array('min' => 3))
    		))
    		->add("Lastname", 'text')
    		->add('Email', 'text')
    		->add('Birthday', 'birthday')
    		->add('Address', 'text')
    		->add('City', 'text')
    		->add('Country', 'text')
    		->add('Username', 'text')
    		->add('Password', 'password')
    		->getForm();
    	
    	return $this->render('MachouilleLoginBundle::register.html.twig', array(
    			'form' => $form->createView(),
    			
    	));
    	
    }
}
