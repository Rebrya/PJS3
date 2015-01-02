<?php

/* MachouilleProduitBundle:Produit:panier.html.twig */
class __TwigTemplate_d035e0f2b0162a66cf6b6825a59e9e361311c15a1cb0deb3250e4294b8fb0ac1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/css/panier.css"), "html", null, true);
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
\t<div id=\"panier\" class=\"sub-container\">
\t\t<h3>Panier</h3>
\t\t<div class=\"commande\">
\t\t\t\t<div class=\"ligne label\">
\t\t\t\t\t<p class=\"codeproduit elem\">Code produit</p>
\t\t\t\t\t<p class=\"designation elem\">Désignation</p>
\t\t\t\t\t<p class=\"quantite elem\">Quantité</p>
\t\t\t\t\t<p class=\"prix elem\">Prix unitaire</p>
\t\t\t\t\t<p class=\"prixtotal elem\">Prix total</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("machouille_produit_paiement");
        echo "\" method=\"post\">
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 22
            echo "\t\t\t\t\t<div class=\"ligne\">
\t\t\t\t\t\t<p class=\"codeproduit elem\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "codeproduit", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p class=\"designation elem\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "designation", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<input type=\"number\" value=";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "quantite", array()), "html", null, true);
            echo " class=\"quantite elem\" maxlength=\"5\" size=\"5\">
\t\t\t\t\t\t<p class=\"prix elem\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "prix", array()), "html", null, true);
            echo " €</p>
\t\t\t\t\t\t<p class=\"prixtotal elem\">";
            // line 27
            echo twig_escape_filter($this->env, ($this->getAttribute($context["commande"], "quantite", array()) * $this->getAttribute($context["commande"], "prix", array())), "html", null, true);
            echo " €</p>
\t\t\t\t\t\t<a href=\"\">Supprimer</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t<div id=\"total\" class=\"ligne\">Prix total de commande<p id=\"totalprix\">150 €</p></div>
\t\t\t\t
\t\t\t\t<input type=\"submit\" value=\"Valider Commande\">
\t\t\t\t</form>
\t\t</div>
\t</div>
\t<div id=\"Historique\" class=\"sub-container\">
\t\t<h3>Historique</h3>
\t\t";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")));
        foreach ($context['_seq'] as $context["_key"] => $context["his"]) {
            // line 40
            echo "\t\t\t<a href=\"\">Commande numéro : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["his"], "idcommande", array()), "html", null, true);
            echo ", date du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["his"], "date", array()), "Y-m-d"), "html", null, true);
            echo ",
\t\t\t produit acheté : ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["his"], "codeproduit", array()), "html", null, true);
            echo "
\t\t\t quantité : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["his"], "quantite", array()), "html", null, true);
            echo "</a>
\t\t\t<br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['his'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t
\t</div>
</div>

<script>
\$( \"input\" )
  .change(function () {
    var str = \"\";
    \$( \"select option:selected\" ).each(function() {
      str += \$( this ).text() + \" \";
    });
    \$( \"div\" ).text( str );
  })
  .change();
</script>

";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  131 => 42,  127 => 41,  120 => 40,  116 => 39,  106 => 31,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  77 => 22,  73 => 21,  69 => 20,  55 => 8,  52 => 7,  46 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }
}
