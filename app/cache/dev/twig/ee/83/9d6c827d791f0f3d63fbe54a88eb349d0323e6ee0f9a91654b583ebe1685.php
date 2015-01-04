<?php

/* MachouilleProduitBundle:Produit:Modules/header.html.twig */
class __TwigTemplate_ee839d6c827d791f0f3d63fbe54a88eb349d0323e6ee0f9a91654b583ebe1685 extends Twig_Template
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
        echo "<header>
\t<div id=\"logo\">
\t\t<h1>Machouille Chewing Gum</h1>
\t\t<h4>Le meilleur Chewing Gum du monde</h4>
\t\t<div class=\"right\">
\t\t\t<form id=\"recherche\" action=\"\" method=\"get\">
\t\t\t\t<input type=\"text\">
\t\t\t\t<input type=\"submit\" value=\"Recherche\">
\t\t\t</form>
\t\t</div>
\t</div>
\t<div id='cssmenu'>
\t\t<ul class=\"container cssmenu\">
\t\t\t<li><a href='";
        // line 14
        echo $this->env->getExtension('routing')->getPath("machouille_produit_homepage");
        echo "'><span>Accueil</span></a></li>
\t\t\t<li class='has-sub'><a href='";
        // line 15
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue");
        echo "'><span>Catalogue</span></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href='";
        // line 17
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Tri-goût"));
        echo "'><span>Trigoût</span></a></li>
\t\t\t\t\t<li><a href='";
        // line 18
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Crémeux"));
        echo "'><span>Crémeux</span></a></li>
\t\t\t\t\t<li><a href='";
        // line 19
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Fruités"));
        echo "'><span>Fruités</span></a></li>
\t\t\t\t</ul></li>
\t\t\t<li><a href='";
        // line 21
        echo $this->env->getExtension('routing')->getPath("machouille_produit_special");
        echo "'><span>Offre Spécial</span></a></li>
\t\t\t<li><a href='";
        // line 22
        echo $this->env->getExtension('routing')->getPath("machouille_produit_jeu");
        echo "'><span>Jouer avec nous</span></a></li>
\t\t\t<li><a href='";
        // line 23
        echo $this->env->getExtension('routing')->getPath("machouille_produit_contact");
        echo "'><span>Contact</span></a></li>
\t\t</ul>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:Modules/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  60 => 22,  56 => 21,  51 => 19,  47 => 18,  43 => 17,  38 => 15,  34 => 14,  19 => 1,);
    }
}
