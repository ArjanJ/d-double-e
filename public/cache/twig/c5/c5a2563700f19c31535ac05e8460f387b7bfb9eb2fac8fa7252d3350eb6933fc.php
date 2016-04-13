<?php

/* ./partials/header.html.twig */
class __TwigTemplate_60da923f0c9c7dc0f1d7578b91750e0c059bd33359f5b6582156226d31fb0652 extends Twig_Template
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
        echo "<header class=\"site-header\">
\t<a href=\"/\" class=\"site-header__logo\">
\t\t<svg class=\"c-logo\"><use xlink:href=\"/svg/svg.svg#logo\" /></svg>
\t</a>
\t<div class=\"site-header__nav\">
\t\t";
        // line 6
        $this->loadTemplate("./partials/nav.html.twig", "./partials/header.html.twig", 6)->display($context);
        // line 7
        echo "\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "./partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <header class="site-header">*/
/* 	<a href="/" class="site-header__logo">*/
/* 		<svg class="c-logo"><use xlink:href="/svg/svg.svg#logo" /></svg>*/
/* 	</a>*/
/* 	<div class="site-header__nav">*/
/* 		{% include "./partials/nav.html.twig" %}*/
/* 	</div>*/
/* </header>*/
