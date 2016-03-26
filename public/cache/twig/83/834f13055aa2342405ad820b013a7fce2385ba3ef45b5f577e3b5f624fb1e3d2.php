<?php

/* home.html.twig */
class __TwigTemplate_ad35abb3fd156b644d0adaea9f93a1beeab7e6bbcdfcfabc4f694e91aa89b6aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./layouts/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<section class=\"home\">
\t\t<div class=\"u-wrapper\">
\t\t\t";
        // line 7
        echo "\t\t\t<div class=\"home__logo\">
\t\t\t\t";
        // line 8
        $this->loadTemplate("./partials/logo.html.twig", "home.html.twig", 8)->display($context);
        // line 9
        echo "\t\t\t</div>
\t\t</div>
\t";
        // line 19
        echo "\t</section>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 19,  40 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="home">*/
/* 		<div class="u-wrapper">*/
/* 			{# <img id="img" src="/images/ddoublee-home.png" alt=""> #}*/
/* 			<div class="home__logo">*/
/* 				{% include "./partials/logo.html.twig" %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{# 	<div class="home__vid">*/
/* 			<video id="home-video" autoplay loop muted>*/
/* 				<source src="/videos/home.webm" type="video/webm">*/
/* 				<source src="/videos/home.mp4" type="video/mp4">*/
/* 				<source src="/videos/home.ogv" type="video/ogg">*/
/* 				Your browser doesn't support HTML5 video tag.*/
/* 			</video>*/
/* 		</div> #}*/
/* 	</section>*/
/* {% endblock %}*/
