<?php

/* MachouillePortailBundle::layout.html.twig */
class __TwigTemplate_99f2b988f029f1467eeba01d56e115d22cf3d1dde24036a3db0963ea9aa16467 extends Twig_Template
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
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
        echo "\">

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
        echo "<body>
";
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
        $this->env->loadTemplate("MachouillePortailBundle:Portail:toolbar.html.twig")->display($context);
        // line 21
        echo "\t";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "\t\t";
        $this->env->loadTemplate("MachouillePortailBundle:Portail:header.html.twig")->display($context);
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
        $this->env->loadTemplate("MachouillePortailBundle:Portail:footer.html.twig")->display($context);
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  159 => 34,  156 => 33,  153 => 32,  149 => 29,  146 => 28,  142 => 25,  139 => 24,  136 => 23,  132 => 21,  129 => 20,  126 => 19,  120 => 34,  118 => 32,  114 => 30,  112 => 28,  108 => 26,  106 => 23,  103 => 22,  101 => 19,  97 => 17,  94 => 16,  88 => 12,  82 => 9,  77 => 8,  74 => 7,  68 => 12,  65 => 11,  63 => 7,  57 => 5,  54 => 4,  49 => 40,  47 => 38,  44 => 37,  42 => 16,  38 => 14,  36 => 4,  31 => 2,  28 => 1,);
    }
}
