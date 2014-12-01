<?php

namespace Machouille\PortailBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Machouille\PortailBundle\Entity\Produit;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * 
 * @Route("/login", name="machouille_portail_login")
 *
 */
class UserController extends Controller {
	
	/**
	 * @Route("/", name="machouille_portail_login_index")
	 * @Template()
	 */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }
    

    /**
     * @Route("/login_check", name="machouille_portail_login_check")
     * @Template()
     */
    public function securityCheckAction()
    {
    	return new RedirectResponse($this->generateUrl('machouille_portail_login_index'));
    }
    
    /**
     * @Route("/logout", name="machouille_portail_logout")
     */
    public function logoutAction()
    {
    	// The security layer will intercept this request
    	return ("hoho");
    }
    
	
	
}
