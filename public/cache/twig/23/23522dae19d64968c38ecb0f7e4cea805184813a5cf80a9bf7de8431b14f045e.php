<?php

/* blog.html.twig */
class __TwigTemplate_3004063b5d9bee464397aeacdc5132e6daa993aad3ed9dc2c25142d012695d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "blog.html.twig", 1);
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
\t\t<h1>Blog</h1>
\t\t
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "\t\t\t<p>
\t\t\t\t<a href=\"";
            // line 9
            echo $this->getAttribute($context["child"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["child"], "title", array());
            echo "</a>
\t\t\t</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t</section>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="blog">*/
/* 		<h1>Blog</h1>*/
/* 		*/
/* 		{% for child in page.collection() %}*/
/* 			<p>*/
/* 				<a href="{{ child.url }}">{{ child.title }}</a>*/
/* 			</p>*/
/* 		{% endfor %}*/
/* */
/* 	</section>*/
/* {% endblock %}*/
