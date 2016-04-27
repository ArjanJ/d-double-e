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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 14
            echo "\t\t\t\t<li class=\"home-events-item\">
\t\t\t\t\t<div class=\"home-events-item__date\">
\t\t\t\t\t\t<span class=\"home-events-item__date-txt\">";
            // line 16
            echo twig_slice($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_date", array()), "F"), 0, 3);
            echo "</span>
\t\t\t\t\t\t<span class=\"home-events-item__date-txt\">";
            // line 17
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_date", array()), "j");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-events-item__about\">
\t\t\t\t\t\t<h2 class=\"home-events-item__about-name\">";
            // line 20
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_name", array());
            echo "</h2>
\t\t\t\t\t\t<h3 class=\"home-events-item__about-location ";
            // line 21
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "home-events-item__about-location--last";
            }
            echo "\">
\t\t\t\t\t\t\t<span>";
            // line 22
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_city", array());
            echo ",</span>
\t\t\t\t\t\t\t<span>";
            // line 23
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_country", array());
            echo "<span>
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t";
            // line 26
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 27
                echo "\t\t\t\t\t\t\t<a href=\"/shows\" class=\"home-events__more-btn\">
\t\t\t\t\t\t\t\tView all shows
\t\t\t\t\t\t\t\t<svg><use xlink:href=\"/svg/svg.svg#arrow-right\" /></svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-events-item__buy\">
\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_tickets", array());
            echo "\" class=\"home-events-item__buy-btn\">Tickets</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</ul>
\t</div>
\t<div class=\"home-events__bottom-mask\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"133\" viewBox=\"0 0 1920 133\" enable-background=\"new 0 0 1920 133\" xml:space=\"preserve\"><path d=\"M1094.4 0.9C1322.4 3.9 1459 133 1658.5 133c81.1 0 176.7-31.4 261.5-68.7V0H0v48.3c106.2 34.2 243.1 63 397 62.4C738.9 109.1 866.5-2.1 1094.4 0.9z\"/></svg>
\t</div>
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
        return array (  125 => 38,  107 => 34,  103 => 32,  96 => 27,  94 => 26,  88 => 23,  84 => 22,  78 => 21,  74 => 20,  68 => 17,  64 => 16,  60 => 14,  43 => 13,  39 => 11,  33 => 9,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
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
/* 			{% for event in events %}*/
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
/* */
/* 						{% if loop.last %}*/
/* 							<a href="/shows" class="home-events__more-btn">*/
/* 								View all shows*/
/* 								<svg><use xlink:href="/svg/svg.svg#arrow-right" /></svg>*/
/* 							</a>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="home-events-item__buy">*/
/* 						<a href="{{ event.header.event_tickets }}" class="home-events-item__buy-btn">Tickets</a>*/
/* 					</div>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="home-events__bottom-mask">*/
/* 		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="1920" height="133" viewBox="0 0 1920 133" enable-background="new 0 0 1920 133" xml:space="preserve"><path d="M1094.4 0.9C1322.4 3.9 1459 133 1658.5 133c81.1 0 176.7-31.4 261.5-68.7V0H0v48.3c106.2 34.2 243.1 63 397 62.4C738.9 109.1 866.5-2.1 1094.4 0.9z"/></svg>*/
/* 	</div>*/
/* </section>*/
