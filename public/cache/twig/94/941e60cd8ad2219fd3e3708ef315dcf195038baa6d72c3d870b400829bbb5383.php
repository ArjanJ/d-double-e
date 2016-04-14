<?php

/* modular/hero.html.twig */
class __TwigTemplate_a24a3dc7a33f8aa66175a77b74399b48364ddb21556d0be7a5acb6b0f7f7c44c extends Twig_Template
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
        echo "<section class=\"home-hero\">
\t<div class=\"u-wrapper\">
\t\t<div class=\"home-hero__img\">
\t\t\t<img width=\"400\" height=\"540\" class=\"home-hero__img-img\" src=\"/images/d-double-e-home.svg\" alt=\"\">
\t\t\t<div class=\"home-hero__svgs\">
\t\t\t\t";
        // line 6
        $this->loadTemplate("./partials/logo.html.twig", "modular/hero.html.twig", 6)->display($context);
        // line 7
        echo "\t\t\t\t";
        $this->loadTemplate("./partials/logo.html.twig", "modular/hero.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<svg class=\"home-hero__curve\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"331.1\" viewBox=\"0 0 1920 331.1\" enable-background=\"new 0 0 1920 331.144\" xml:space=\"preserve\"><path d=\"M261.5 199c199.5 0 336 129.1 564 132.1 228 3 355.5-108.2 697.5-109.7 153.9-0.7 290.8 28.2 397 62.3V0H0v267.7C84.9 230.4 180.4 199 261.5 199z\"/></svg>

\t<img class=\"home-hero__curve-shadow\" src=\"/images/paint-shadow.png\" alt=\"\">

\t";
        // line 19
        echo "\t
\t";
        // line 20
        $this->loadTemplate("./partials/paint-drips.html.twig", "modular/hero.html.twig", 20)->display($context);
        // line 21
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 21,  44 => 20,  41 => 19,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section class="home-hero">*/
/* 	<div class="u-wrapper">*/
/* 		<div class="home-hero__img">*/
/* 			<img width="400" height="540" class="home-hero__img-img" src="/images/d-double-e-home.svg" alt="">*/
/* 			<div class="home-hero__svgs">*/
/* 				{% include "./partials/logo.html.twig" %}*/
/* 				{% include "./partials/logo.html.twig" %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<svg class="home-hero__curve" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="1920" height="331.1" viewBox="0 0 1920 331.1" enable-background="new 0 0 1920 331.144" xml:space="preserve"><path d="M261.5 199c199.5 0 336 129.1 564 132.1 228 3 355.5-108.2 697.5-109.7 153.9-0.7 290.8 28.2 397 62.3V0H0v267.7C84.9 230.4 180.4 199 261.5 199z"/></svg>*/
/* */
/* 	<img class="home-hero__curve-shadow" src="/images/paint-shadow.png" alt="">*/
/* */
/* 	{# <svg class="home-hero__bottom"  version="1.1" x="0" y="0" width="2372" height="190.1" viewBox="0 0 2372 190.1" enable-background="new 0 0 2372 190.087" xml:space="preserve"><path d="M0 190.1C0 190.1 287.1 0 486.5 0c199.5 0 336 129.1 564 132.1 228 3 355.5-108.2 697.5-109.7S2348 165.1 2372 190.1C2307.5 190.1 0 190.1 0 190.1z"/>*/
/* 	</svg>*/
/*  #}*/
/* 	*/
/* 	{% include './partials/paint-drips.html.twig' %}*/
/* */
/* </section>*/
