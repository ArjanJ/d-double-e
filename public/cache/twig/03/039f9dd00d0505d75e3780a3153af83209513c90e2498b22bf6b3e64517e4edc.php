<?php

/* ./partials/nav.html.twig */
class __TwigTemplate_2f5c4f640132bc621092c8ee14a647b55fe31fa44232718179907e043cb8b728 extends Twig_Template
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
        echo "<nav class=\"site-nav\" role=\"navigation\">
\t<ul class=\"site-nav__list\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "\t\t\t";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 5
                echo "\t\t\t\t<li class=\"site-nav__item\">
\t\t\t\t\t<a href=\"";
                // line 6
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"site-nav__link\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 9
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t<li class=\"site-nav__item\">
\t\t\t<a href=\"http://www.blukuwear.bigcartel.com/\" target=\"_blank\" class=\"site-nav__link\">Shop</a>
\t\t</li>
\t</ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "./partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  41 => 9,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<nav class=\"site-nav\" role=\"navigation\">
\t<ul class=\"site-nav__list\">
\t\t{% for page in pages.children %}
\t\t\t{% if page.visible %}
\t\t\t\t<li class=\"site-nav__item\">
\t\t\t\t\t<a href=\"{{ page.url }}\" class=\"site-nav__link\">{{ page.menu }}</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t{% endfor %}
\t\t<li class=\"site-nav__item\">
\t\t\t<a href=\"http://www.blukuwear.bigcartel.com/\" target=\"_blank\" class=\"site-nav__link\">Shop</a>
\t\t</li>
\t</ul>
</nav>";
    }
}
