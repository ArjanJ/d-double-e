<?php

/* modular/events.html.twig */
class __TwigTemplate_b7453fb951e2e107a2e9e0b2c6fce7cc7dc9e028cc9cf6868f0b74669d1a5d54 extends Twig_Template
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

\t\t";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : null)) < 1)) {
            // line 7
            echo "\t\t\t<h1 class=\"home-events__heading home-events__heading--no-margin\">No upcoming shows</h1>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<h1 class=\"home-events__heading\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</h1>
\t\t";
        }
        // line 11
        echo "
\t\t<ul class=\"home-events__list\">
\t\t\t";
        // line 31
        echo "\t\t</ul>
\t\t";
        // line 38
        echo "\t</div>
</section>";
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
        return array (  46 => 38,  43 => 31,  39 => 11,  33 => 9,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% set events = page.collection() %}*/
/* */
/* <section class="home-events">*/
/* 	<div class="u-wrapper">*/
/* */
/* 		{% if events|length < 1 %}*/
/* 			<h1 class="home-events__heading home-events__heading--no-margin">No upcoming shows</h1>*/
/* 		{% else %}*/
/* 			<h1 class="home-events__heading">{{ page.title }}</h1>*/
/* 		{% endif %}*/
/* */
/* 		<ul class="home-events__list">*/
/* 			{# {% for event in events %}*/
/* 				<li class="home-events-item">*/
/* 					<div class="home-events-item__date">*/
/* 						<span class="home-events-item__date-txt">{{ event.header.event_date|date("F")|slice(0, 3) }}</span>*/
/* 						<span class="home-events-item__date-txt">{{ event.header.event_date|date("j") }}</span>*/
/* 					</div>*/
/* 					<div class="home-events-item__about">*/
/* 						<h2 class="home-events-item__about-name">{{ event.header.event_name }}</h2>*/
/* 						<h3 class="home-events-item__about-location {% if loop.last %}home-events-item__about-location--last{% endif %}">*/
/* 							<span>{{ event.header.event_city }},</span>*/
/* 							<span>{{ event.header.event_country }}<span>*/
/* 						</h3>*/
/* 					</div>*/
/* 					<div class="home-events-item__buy">*/
/* 						<a href="{{ event.header.event_tickets }}" class="home-events-item__buy-btn">Tickets</a>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %} #}*/
/* 		</ul>*/
/* 		{# <div class="home-events__more">*/
/* 			<a href="/shows" class="home-events__more-btn">*/
/* 				View all shows*/
/* 				<svg><use xlink:href="/svg/svg.svg#arrow-right" /></svg>*/
/* 			</a>*/
/* 		</div> #}*/
/* 	</div>*/
/* </section>*/
