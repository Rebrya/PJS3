<?php

/* MachouillePortailBundle::layout.html.twig */
class __TwigTemplate_b4b68a1eff1004c1f3610b3d62d1b91944b7ff828983f7fc475b9e7a49309972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'toolbar' => array($this, 'block_toolbar'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripte' => array($this, 'block_scripte'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('scripte', $context, $blocks);
        // line 40
        echo "</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
    ";
        // line 7
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 11
        echo "    
\t<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
    }

    // line 7
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 8
        echo "    \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleportail/css/bootstrap.css"), "html", null, true);
        echo "\" />
    \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleportail/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Le portail de Machouille";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
\t
\t";
        // line 19
        $this->displayBlock('toolbar', $context, $blocks);
        // line 22
        echo "\t
\t";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "\t
\t<div class=\"container\">
\t\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "\t</div>
\t
\t";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo " 
\t
";
    }

    // line 19
    public function block_toolbar($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
        $this->env->loadTemplate("MachouillePortailBundle:Portail:Module/toolbar.html.twig")->display($context);
        // line 21
        echo "\t";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
        $this->env->loadTemplate("MachouillePortailBundle:Portail:Module/header.html.twig")->display($context);
        // line 25
        echo "\t";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "\t\t";
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "\t \t";
        $this->env->loadTemplate("MachouillePortailBundle:Portail:Module/footer.html.twig")->display($context);
        // line 34
        echo "\t";
    }

    // line 38
    public function block_scripte($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MachouillePortailBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  160 => 38,  156 => 34,  153 => 33,  150 => 32,  146 => 29,  143 => 28,  139 => 25,  136 => 24,  133 => 23,  129 => 21,  126 => 20,  123 => 19,  117 => 34,  115 => 32,  111 => 30,  109 => 28,  105 => 26,  103 => 23,  100 => 22,  98 => 19,  94 => 17,  91 => 16,  85 => 12,  79 => 9,  74 => 8,  71 => 7,  65 => 12,  62 => 11,  60 => 7,  54 => 5,  51 => 4,  46 => 40,  44 => 38,  41 => 37,  39 => 16,  35 => 14,  33 => 4,  28 => 1,);
    }
}
