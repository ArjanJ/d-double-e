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
\t<h1>";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
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
        return array (  22 => 2,  19 => 1,);
    }
}
/* <section class="home-hero">*/
/* 	<h1>{{ page.title }}</h1>*/
/* </section>*/
