<?php

/* MachouilleProduitBundle:Produit/Modules:toolbar.html.twig */
class __TwigTemplate_6608f4f1fccb92106c9e49e8971079feab86a0406c4d54be43bde30dd7d8a51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"toolbar\">
\t<div id=\"top-spliter\"></div>
\t<a href=\"\">langue</a>
";
        // line 4
        if (array_key_exists("Username", $context)) {
            // line 5
            echo "\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("machouille_login_logout");
            echo "\">Déconnexion</a>
\t<a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("machouille_produit_panier");
            echo "\">Panier</a>
\t<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("machouille_produit_panier");
            echo "\">Bienvenue  ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["Username"]) ? $context["Username"] : $this->getContext($context, "Username"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 9
            echo "\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("machouille_login_register");
            echo "\">Inscription</a> 
\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("machouille_login_homepage");
            echo "\">Connexion</a>
";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit/Modules:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  47 => 10,  42 => 9,  35 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
