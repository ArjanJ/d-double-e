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
        echo "\t<section class=\"shows\">
\t\t<div class=\"u-wrapper\">
\t\t\t<h1 class=\"shows__heading\">Upcoming Shows</h1>
\t\t\t
\t\t\t<ul class=\"shows__list home-events__list\">
\t\t\t\t";
        // line 27
        echo "\t\t\t</ul>
\t\t\t";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"), "params", array()), "pagination", array()))) {
            // line 29
            echo "\t\t    ";
            $this->loadTemplate("./partials/pagination.html.twig", "shows.html.twig", 29)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"), "params", array()), "pagination", array()))));
            // line 30
            echo "\t\t\t";
        }
        // line 31
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
        return array (  49 => 31,  46 => 30,  43 => 29,  41 => 28,  38 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="shows">*/
/* 		<div class="u-wrapper">*/
/* 			<h1 class="shows__heading">Upcoming Shows</h1>*/
/* 			*/
/* 			<ul class="shows__list home-events__list">*/
/* 				{# {% for child in page.collection() %}*/
/* 					<li class="home-events-item">*/
/* 						<div class="home-events-item__date">*/
/* 							<span class="home-events-item__date-txt">{{ child.header.date|date("F")|slice(0, 3) }}</span>*/
/* 							<span class="home-events-item__date-txt">{{ child.header.date|date("j") }}</span>*/
/* 						</div>*/
/* 						<div class="home-events-item__about">*/
/* 							<h2 class="home-events-item__about-name">{{ child.header.event_name }}</h2>*/
/* 							<h3 class="home-events-item__about-location {% if loop.last %}home-events-item__about-location--last{% endif %}">*/
/* 								<span>{{ child.header.event_city }},</span>*/
/* 								<span>{{ child.header.event_country }}<span>*/
/* 							</h3>*/
/* 						</div>*/
/* 						<div class="home-events-item__buy">*/
/* 							<a href="{{ child.header.event_tickets }}" class="home-events-item__buy-btn">Tickets</a>*/
/* 						</div>*/
/* 					</li>*/
/* 				{% endfor %} #}*/
/* 			</ul>*/
/* 			{% if config.plugins.pagination.enabled and page.collection().params.pagination %}*/
/* 		    {% include './partials/pagination.html.twig' with {'base_url':page.url, 'pagination':page.collection().params.pagination} %}*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
