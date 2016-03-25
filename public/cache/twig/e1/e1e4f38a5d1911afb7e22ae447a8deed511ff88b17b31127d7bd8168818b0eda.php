<?php

/* default.html.twig */
class __TwigTemplate_633d205b8a3fb240afe67f659814b7ce93ea3a7d2a9df1b609eea5631698e3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "default.html.twig", 1);
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
        echo "
\t";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* 	{{ page.content }}*/
/* 	*/
/* {% endblock %}*/
