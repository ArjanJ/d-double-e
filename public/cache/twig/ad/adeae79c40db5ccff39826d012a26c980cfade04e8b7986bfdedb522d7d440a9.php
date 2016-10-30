<?php

/* ./partials/header.html.twig */
class __TwigTemplate_7438df01c6b60ffb5fc92d48e6c3e9810754d26e6eb499df53c744a9f9051e6c extends Twig_Template
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
\t<div class=\"site-header__hamburger\">
\t\t<button type=\"button\" class=\"c-hamburger\">
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t</button>
\t</div>
\t<div class=\"site-header__overlay\"></div>
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

    public function getSource()
    {
        return "<header class=\"site-header\">
\t<a href=\"/\" class=\"site-header__logo\">
\t\t{% include \"./partials/logo.html.twig\" with {'id': 'header-logo'} %}
\t</a>
\t<div class=\"site-header__nav\">
\t\t{% include \"./partials/nav.html.twig\" %}
\t</div>
\t<div class=\"site-header__hamburger\">
\t\t<button type=\"button\" class=\"c-hamburger\">
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t\t<div class=\"c-hamburger__patty\"></div>
\t\t</button>
\t</div>
\t<div class=\"site-header__overlay\"></div>
</header>";
    }
}
