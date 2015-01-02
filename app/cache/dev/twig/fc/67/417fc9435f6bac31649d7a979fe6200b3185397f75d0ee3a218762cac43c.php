<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_fc67417fc9435f6bac31649d7a979fe6200b3185397f75d0ee3a218762cac43c extends Twig_Template
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
        echo "<div id=\"error_page\">
    <h1>Oups! Une erreur est survenue</h1> <br>
    <h2>Le serveur a retourné une erreur :</h2>
    <h3>\"";
        // line 4
        echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true)));
        echo "\"</h3>
</div>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
