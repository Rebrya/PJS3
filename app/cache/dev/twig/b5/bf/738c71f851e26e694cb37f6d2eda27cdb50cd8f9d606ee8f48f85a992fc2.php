<?php

/* MachouilleProduitBundle:Produit:paiement.html.twig */
class __TwigTemplate_b5bf738c71f851e26e694cb37f6d2eda27cdb50cd8f9d606ee8f48f85a992fc2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/formulaire.css"), "html", null, true);
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
\t<div id=\"paiement\" class=\"sub-container\">
\t\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("machouille_produit_payerCheck");
        echo "\" method=\"post\">
\t\t\t<label>Card number </label>
\t\t\t<input type=\"number\" maxlenght=19>
\t\t\t<label>Expiration </label>
\t\t\t<input type=\"date\">
\t\t\t<label>Card verification code </label>
\t\t\t<input type=\"number\" maxlenght=3>
\t\t\t<label>Name </label>
\t\t\t<input type=\"text\">
\t\t\t<input type=\"submit\" value=\"Confirmer\">
\t\t</form>
\t</div>
\t<div id=\"modepaiement\" class=\"sub-container\">
\t\t<img alt=\"\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/modes-paiement.png"), "html", null, true);
        echo "\">
\t</div>
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  59 => 10,  55 => 8,  52 => 7,  46 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }
}
