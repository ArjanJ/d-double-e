<?php

/* modular/events.html.twig */
class __TwigTemplate_322754dde8b96527c0722916b47d2a7847903d06c3f2cdaa2b3bfb4ac5f6ed59 extends Twig_Template
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
        $context["events"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 2
        echo "
<section class=\"home-events\">
\t<div class=\"u-wrapper\">
\t\t<h1 class=\"home-events__heading\">Upcoming shows</h1>
\t\t<ul class=\"home-events__list\"></ul>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set events = page.collection() %}

<section class=\"home-events\">
\t<div class=\"u-wrapper\">
\t\t<h1 class=\"home-events__heading\">Upcoming shows</h1>
\t\t<ul class=\"home-events__list\"></ul>
\t</div>
</section>
";
    }
}
