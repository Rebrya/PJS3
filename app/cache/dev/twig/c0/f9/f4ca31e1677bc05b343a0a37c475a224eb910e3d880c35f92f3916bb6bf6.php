<?php

/* MachouilleProduitBundle:Produit:contactnous.html.twig */
class __TwigTemplate_c0f9f4ca31e1677bc05b343a0a37c475a224eb910e3d880c35f92f3916bb6bf6 extends Twig_Template
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
\t<div id=message class=\"sub-container\">
\t\t<form action=\"\" method=post>
\t\t\t<h3>Vous pouvez nous envoyer un email</h3>
\t\t\t<label>Objet de votre message</label>
\t\t\t<input type=\"text\">
\t\t\t<label>Votre message</label>
\t\t\t<textarea rows=\"10\" cols=\"60\"></textarea>
\t\t\t<label>Votre email</label>
\t\t\t<input type=\"text\">
\t\t\t<input type=\"submit\" value=\"Envoyer\">
\t\t\t
\t\t\t<br><br><br><br>
\t\t\t<h3>Vous pouvez également nous rejoindre par téléphone</h3>
\t\t\t<br>
\t\t\t<p> Tél : 06 06 06 06 06</p>
\t\t\t<p> Fixe : 01 06 06 06 06</p>
\t\t\t<p> Fax : 01 06 06 06 07</p>
\t\t</form>
\t</div>
\t<div class=\"sub-container\">
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:contactnous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  52 => 7,  46 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }
}
