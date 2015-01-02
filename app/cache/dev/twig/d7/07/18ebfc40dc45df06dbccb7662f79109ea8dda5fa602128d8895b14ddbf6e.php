<?php

/* MachouilleProduitBundle:Produit:catalogue.html.twig */
class __TwigTemplate_d70718ebfc40dc45df06dbccb7662f79109ea8dda5fa602128d8895b14ddbf6e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/catalogue.css"), "html", null, true);
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
\t<h4>Voici les produits de famille ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille")), "html", null, true);
        echo "</h4>
\t<div class=\"articles\">
\t \t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produits"]) ? $context["Produits"] : $this->getContext($context, "Produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 12
            echo "\t\t<div class=\"article\">
\t\t\t<form action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("machouille_produit_addpanier", array("code" => $this->getAttribute($context["produit"], "codeproduit", array()))), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t<img alt=\"\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/machouilleproduit/images/" . (isset($context["famille"]) ? $context["famille"] : $this->getContext($context, "famille"))) . ".png")), "html", null, true);
            echo "\">
\t\t\t\t<p class=\"gout\">Goût : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "designation", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p>En stock ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo " </p>
\t\t\t\t<p>Prix : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</p>
\t\t\t\t<input type=\"submit\" value=\"Ajouter Au Panier\">
\t\t\t</form>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  67 => 12,  63 => 11,  58 => 9,  55 => 8,  52 => 7,  46 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }
}
