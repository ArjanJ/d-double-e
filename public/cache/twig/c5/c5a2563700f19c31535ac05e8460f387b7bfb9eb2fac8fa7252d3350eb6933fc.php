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
\t<p>Header</p>
\t<nav>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "\t\t\t<a href=\"";
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</nav>
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
        return array (  39 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <header class="site-header">*/
/* 	<p>Header</p>*/
/* 	<nav>*/
/* 		{% for page in pages.children.visible %}*/
/* 			<a href="{{ page.url }}">{{ page.menu }}</a>*/
/* 		{% endfor %}*/
/* 	</nav>*/
/* </header>*/
