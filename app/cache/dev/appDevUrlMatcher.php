<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // machouille_produit_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'machouille_produit_homepage');
            }

            return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::indexAction',  '_route' => 'machouille_produit_homepage',);
        }

        // machouille_produit_catalogue
        if (0 === strpos($pathinfo, '/catalogue') && preg_match('#^/catalogue(?:/(?P<famille>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'machouille_produit_catalogue')), array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::catalogueAction',  'famille' => 'Tri-goût',));
        }

        // machouille_produit_special
        if ($pathinfo === '/special') {
            return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::specialAction',  '_route' => 'machouille_produit_special',);
        }

        // machouille_produit_jeu
        if ($pathinfo === '/jeu') {
            return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::jeuAction',  '_route' => 'machouille_produit_jeu',);
        }

        // machouille_produit_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::contactAction',  '_route' => 'machouille_produit_contact',);
        }

        if (0 === strpos($pathinfo, '/pa')) {
            // machouille_produit_panier
            if ($pathinfo === '/panier') {
                return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::panierAction',  '_route' => 'machouille_produit_panier',);
            }

            if (0 === strpos($pathinfo, '/paiement')) {
                // machouille_produit_paiement
                if ($pathinfo === '/paiement') {
                    return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::payerAction',  '_route' => 'machouille_produit_paiement',);
                }

                // machouille_produit_payerCheck
                if ($pathinfo === '/paiement_check') {
                    return array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::payerConfirmeAction',  '_route' => 'machouille_produit_payerCheck',);
                }

            }

        }

        // machouille_produit_addpanier
        if (0 === strpos($pathinfo, '/addpanier') && preg_match('#^/addpanier/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'machouille_produit_addpanier')), array (  '_controller' => 'Machouille\\ProduitBundle\\Controller\\ProduitController::addpanierAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // machouille_login_homepage
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Machouille\\LoginBundle\\Controller\\LoginController::indexAction',  '_route' => 'machouille_login_homepage',);
            }

            // machouille_login_check
            if ($pathinfo === '/login/check') {
                return array (  '_controller' => 'Machouille\\LoginBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'machouille_login_check',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // machouille_login_register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Machouille\\LoginBundle\\Controller\\LoginController::registerAction',  '_route' => 'machouille_login_register',);
            }

            // machouille_login_registerCheck
            if ($pathinfo === '/register_check') {
                return array (  '_controller' => 'Machouille\\LoginBundle\\Controller\\LoginController::registerCheckAction',  '_route' => 'machouille_login_registerCheck',);
            }

        }

        // machouille_login_logout
        if ($pathinfo === '/login/logout') {
            return array (  '_controller' => 'Machouille\\LoginBundle\\Controller\\LoginController::logoutAction',  '_route' => 'machouille_login_logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
