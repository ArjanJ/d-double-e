<?php

/* shows.html.twig */
class __TwigTemplate_7cbc36b2a0a8e51446fbb34281b6e3fe5066d1698b200ae2b7a073949f1ad334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "shows.html.twig", 1);
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
        echo "\t<section class=\"blog\">
\t\t<h1>Shows</h1>
\t\t
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "\t\t\t<div>
\t\t\t\t<h2>";
            // line 9
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "event_name", array());
            echo "</h2>
\t\t\t\t<h3>";
            // line 10
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "event_location", array());
            echo "</h2>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t</section>
";
    }

    public function getTemplateName()
    {
        return "shows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="blog">*/
/* 		<h1>Shows</h1>*/
/* 		*/
/* 		{% for child in page.collection() %}*/
/* 			<div>*/
/* 				<h2>{{ child.header.event_name }}</h2>*/
/* 				<h3>{{ child.header.event_location }}</h2>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* */
/* 	</section>*/
/* {% endblock %}*/
