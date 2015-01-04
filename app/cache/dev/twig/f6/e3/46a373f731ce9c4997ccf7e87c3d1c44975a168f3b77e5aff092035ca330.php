<?php

/* MachouilleProduitBundle:Produit:Modules/footer.html.twig */
class __TwigTemplate_f6e346a373f731ce9c4997ccf7e87c3d1c44975a168f3b77e5aff092035ca330 extends Twig_Template
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
        echo "<footer>
\t<div id=\"footer-press\">
\t\t<div class=\"container\">
\t\t\t<div id=\"reseau\" class=\"block-footer\">
\t\t\t\t<h4>RETROUVEZ-NOUS AUSSI SUR</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"https://www.facebook.com\">
\t\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/logo/facebook-c.png"), "html", null, true);
        echo "\" width=\"30px\">
\t\t\t\t\t\t<p>Facebook</p>
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"https://plus.google.com/\">
\t\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/logo/google-c.png"), "html", null, true);
        echo "\" width=\"30px\">
\t\t\t\t\t\t<p>Google plus</p>
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a href=\"https://www.twitter.com\">
\t\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/logo/twitter-c.png"), "html", null, true);
        echo "\" width=\"30px\">
\t\t\t\t\t\t<p>Twitter</p>
\t\t\t\t\t</a></li>
\t\t\t\t\t<li><a>
\t\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/logo/rss-c.png"), "html", null, true);
        echo "\" width=\"30px\">
\t\t\t\t\t\t<p>Flux RSS</p>
\t\t\t\t\t\t</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"divers\" class=\"block-footer\">
\t\t\t\t<h4>DIVERS</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li>Livraison</li>
\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/ups.png"), "html", null, true);
        echo "\" width=\"30px\">
\t\t\t\t\t<br>
\t\t\t\t\t<li>Mode de paiement :\t<li>
\t\t\t\t\t<img alt=\"paiement\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/machouilleproduit/images/modes-paiement.png"), "html", null, true);
        echo "\">
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"apropos\" class=\"block-footer\">
\t\t\t\t<h4>A PROPOS</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li><a>Qui sommes-nous ?</a></li>
\t\t\t\t\t<li><a>Nos valeurs</a><li>
\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("machouille_produit_contact");
        echo "\">Nous contacter</a><li>
\t\t\t\t\t<li><a>FAQ (Foire aux questions)</a><li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"partenaire\" class=\"block-footer\">
\t\t\t\t<h4>PATERNAIRE</h4>
\t\t\t\t<a>Candy Crush Saga</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"mention\">
\t\t<div id=\"mention-container\">
\t\t\t<p>C.G.V.</p>
\t\t\t<p>Mentions légales</p>
\t\t\t<p>© 2014 - 2015 Machouille/Chewing Gum</p>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "MachouilleProduitBundle:Produit:Modules/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  67 => 32,  61 => 29,  49 => 20,  42 => 16,  35 => 12,  28 => 8,  19 => 1,);
    }
}
