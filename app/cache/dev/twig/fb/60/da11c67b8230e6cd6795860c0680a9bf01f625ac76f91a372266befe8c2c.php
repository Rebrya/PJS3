<?php

/* MachouilleProduitBundle::layout.html.twig */
class __TwigTemplate_fb60da11c67b8230e6cd6795860c0680a9bf01f625ac76f91a372266befe8c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t";
        // line 13
        $this->env->loadTemplate("MachouilleProduitBundle:Produit:Modules/toolbar.html.twig")->display($context);
        // line 14
        echo "\t";
        $this->env->loadTemplate("MachouilleProduitBundle:Produit:Modules/header.html.twig")->display($context);
        // line 15
        echo "\t
\t";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "\t
\t";
        // line 18
        $this->env->loadTemplate("MachouilleProduitBundle:Produit:Modules/footer.html.twig")->display($context);
        // line 19
        echo "\t
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Machouille";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen and (min-width: 800px)\" />
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/js/jquery-2.1.1.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/js/menu.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/js/navnav.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  99 => 22,  94 => 21,  91 => 20,  86 => 16,  79 => 7,  76 => 6,  70 => 5,  63 => 25,  61 => 20,  58 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  43 => 13,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
