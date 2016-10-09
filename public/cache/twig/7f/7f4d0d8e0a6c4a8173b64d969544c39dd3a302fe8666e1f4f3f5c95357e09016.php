<?php

/* modular/events.html.twig */
class __TwigTemplate_0811060570a00d5db8d99ebbf4f12c2e139f143245098e555150d8e6b80bd521 extends Twig_Template
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
}
/* {% set events = page.collection() %}*/
/* */
/* <section class="home-events">*/
/* 	<div class="u-wrapper">*/
/* 		<h1 class="home-events__heading">Upcoming shows</h1>*/
/* 		<ul class="home-events__list"></ul>*/
/* 	</div>*/
/* </section>*/
/* */
