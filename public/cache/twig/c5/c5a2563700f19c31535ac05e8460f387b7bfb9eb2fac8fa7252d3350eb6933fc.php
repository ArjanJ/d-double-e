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
\t\t";
        // line 3
        $this->loadTemplate("./partials/logo.html.twig", "./partials/header.html.twig", 3)->display(array_merge($context, array("id" => "header-logo")));
        // line 4
        echo "\t</a>
\t<div class=\"site-header__nav\">
\t\t";
        // line 6
        $this->loadTemplate("./partials/nav.html.twig", "./partials/header.html.twig", 6)->display($context);
        // line 7
        echo "\t</div>
\t<div class=\"site-header__overlay\"></div>
\t<div class=\"site-header__loader\">
\t 
\t</div>
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
        return array (  31 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <header class="site-header">*/
/* 	<a href="/" class="site-header__logo">*/
/* 		{% include "./partials/logo.html.twig" with {'id': 'header-logo'} %}*/
/* 	</a>*/
/* 	<div class="site-header__nav">*/
/* 		{% include "./partials/nav.html.twig" %}*/
/* 	</div>*/
/* 	<div class="site-header__overlay"></div>*/
/* 	<div class="site-header__loader">*/
/* 	 */
/* 	</div>*/
/* </header>*/
