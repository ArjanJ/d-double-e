<?php

/* shows.html.twig */
class __TwigTemplate_b280e29f2b478c89f42e7a7d89eb7e8da2a91aeab4a4f60e34b4870f65a7f517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./partials/base.html.twig", "shows.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<section class=\"shows\">
\t\t<div class=\"u-wrapper\">
\t\t\t<h1 class=\"home-events__heading shows__heading\">Upcoming Shows</h1>

\t\t\t<ul class=\"shows__list home-events__list\">

\t\t\t</ul>
\t\t\t";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"), "params", array()), "pagination", array()))) {
            // line 11
            echo "\t\t    ";
            $this->loadTemplate("./partials/pagination.html.twig", "shows.html.twig", 11)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"), "params", array()), "pagination", array()))));
            // line 12
            echo "\t\t\t";
        }
        // line 13
        echo "\t\t</div>
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
        return array (  48 => 13,  45 => 12,  42 => 11,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "./partials/base.html.twig" %}*/
/* {% block content %}*/
/* 	<section class="shows">*/
/* 		<div class="u-wrapper">*/
/* 			<h1 class="home-events__heading shows__heading">Upcoming Shows</h1>*/
/* */
/* 			<ul class="shows__list home-events__list">*/
/* */
/* 			</ul>*/
/* 			{% if config.plugins.pagination.enabled and page.collection().params.pagination %}*/
/* 		    {% include './partials/pagination.html.twig' with {'base_url':page.url, 'pagination':page.collection().params.pagination} %}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
/* */
