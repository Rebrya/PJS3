<?php

/* MachouilleLoginBundle::login.html.twig */
class __TwigTemplate_097f9214664918dc4191ab41ac991bf6054817739453bf975e6831846e472c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MachouilleProduitBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MachouilleProduitBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/formulaire.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen and (min-width: 800px)\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Le meilleur Chewing Gum du monde";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t<div id=\"main-page\" class=\"container\">
\t\t<div id=\"login\" class=\"sub-container\">
\t\t\t<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("machouille_login_check");
        echo "\" method=\"post\">
\t\t\t\t";
        // line 14
        if (array_key_exists("msgErreur", $context)) {
            // line 15
            echo "\t\t\t\t<label class=\"erreur\">";
            echo twig_escape_filter($this->env, (isset($context["msgErreur"]) ? $context["msgErreur"] : $this->getContext($context, "msgErreur")), "html", null, true);
            echo "</label>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t<label>Nom d'utilisateur</label>
\t\t\t\t<input type=\"text\" name=\"username\">
\t\t\t\t<label>Mot de passe</label>
\t\t\t\t<input type=\"password\" name=\"password\">
\t\t\t\t<input type=\"submit\" value=\"Connecter\">
\t\t\t</form>
\t\t\t<a href=\"\">Mot de passe oublié ?</a>
\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("machouille_login_register");
        echo "\">Voulez-vous inscrire ?</a>
\t\t</div>
\t\t
\t\t<div class=\"sub-container\">
\t\t\t<img alt=\"\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/login.jpg"), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleLoginBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  78 => 24,  69 => 17,  63 => 15,  61 => 14,  57 => 13,  53 => 11,  50 => 10,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
