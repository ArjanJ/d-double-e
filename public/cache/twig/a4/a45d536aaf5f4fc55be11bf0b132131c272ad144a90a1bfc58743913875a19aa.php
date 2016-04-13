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
        echo "<section class=\"home-events\">
\t<h1>";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>

\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 5
            echo "\t\t";
            echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, $context["event"]);
            echo "
\t\t<div class=\"home-events__item\">
\t\t\t<div class=\"home-events-item__date\">
\t\t\t\t<p class=\"home-events-item__date-txt\">";
            // line 8
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_date", array()), "F j");
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"home-events-item__about\">
\t\t\t\t<h2 class=\"home-events-item__about-name\">";
            // line 11
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_name", array());
            echo "</h2>
\t\t\t\t<h3 class=\"home-events-item__about-location\">";
            // line 12
            echo $this->getAttribute($this->getAttribute($context["event"], "header", array()), "event_location", array());
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"home-events-item__buy\"></div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</section>";
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
        return array (  59 => 17,  48 => 12,  44 => 11,  38 => 8,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <section class="home-events">*/
/* 	<h1>{{ page.title }}</h1>*/
/* */
/* 	{% for event in page.collection() %}*/
/* 		{{ dump(event) }}*/
/* 		<div class="home-events__item">*/
/* 			<div class="home-events-item__date">*/
/* 				<p class="home-events-item__date-txt">{{ event.header.event_date|date("F j") }}</p>*/
/* 			</div>*/
/* 			<div class="home-events-item__about">*/
/* 				<h2 class="home-events-item__about-name">{{ event.header.event_name }}</h2>*/
/* 				<h3 class="home-events-item__about-location">{{ event.header.event_location }}</h3>*/
/* 			</div>*/
/* 			<div class="home-events-item__buy"></div>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* </section>*/
