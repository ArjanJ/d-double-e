<?php

/* forms/fields/pagemediaselect/pagemediaselect.html.twig */
class __TwigTemplate_58ca6f1a64049e0efb87618acf2afbfe28b38707110f67e5141355db269c17b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/pagemediaselect/pagemediaselect.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemediaselect/pagemediaselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "forms/fields/filepicker/filepicker.html.twig" %}*/
/* */
/* */
