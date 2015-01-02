<?php

/* MachouilleProduitBundle:Produit:accueil.html.twig */
class __TwigTemplate_8361d807442bf976222ed5937898e6d5a5c16a178b2c570b9b43edbdd272d103 extends Twig_Template
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

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\"
\thref=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/accueil.css"), "html", null, true);
        echo "\"
\ttype=\"text/css\" media=\"screen and (min-width: 800px)\" />
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Le meilleur Chewing Gum du monde";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"main-page\" class=\"container\">
\t<div id=\"special\" class=\"sub-container\">
\t\t<h3>Les offres spécials</h3>
\t\t<div class=\"article\">
\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("machouille_produit_special");
        echo "\">
\t\t\t<img alt=\"maxq\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/maxq.png"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t</div>
\t</div>
\t
\t<div id=\"meilleur\" class=\"sub-container\">
\t\t<h3>Les meilleurs ventes</h3>
\t\t<div class=\"article\">
\t\t\t<img alt=\"meilleur\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/meilleurs.png"), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
\t
\t<div id=\"catalogue\" class=\"sub-container\">
\t\t<h3>Les familles de produit</h3>
\t\t<div class=\"article\">
\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Crémeux"));
        echo "\">
\t\t\t<img alt=\"cremeux\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/creme.png"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Fruités"));
        echo "\">
\t\t\t<img alt=\"fruite\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/fruit.png"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("machouille_produit_catalogue", array("famille" => "Tri-goût"));
        echo "\">
\t\t\t<img alt=\"trigout\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/trigout.png"), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t</div>
\t</div>
\t
\t<div id=\"divers\">
\t\t<div class=\"block\">Plus de 500 produits</div>
\t\t<div class=\"block\">Livraison gratuit sous 72 heures</div>
\t\t<div class=\"block\">Paiement securisé</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  104 => 34,  99 => 32,  95 => 31,  90 => 29,  86 => 28,  76 => 21,  65 => 13,  61 => 12,  55 => 8,  52 => 7,  46 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }
}
