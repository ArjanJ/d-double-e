<?php

/* news.html.twig */
class __TwigTemplate_429f5d925de29804d81f27d589af0f1e9b618824c96ecd81661d6cb434f63565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "news.html.twig", 1);
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
        echo "\t<section class=\"news\">
\t\t<div class=\"u-wrapper\">
\t\t\t<h1 class=\"news__heading\">Latest News</h1>
\t\t\t
\t\t\t<ul class=\"news__list\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "\t\t\t\t<li class=\"news-item\">
\t\t\t\t\t<a href=\"";
            // line 11
            echo $this->getAttribute($context["child"], "route", array());
            echo "\" class=\"news-item__link\">
\t\t\t\t\t\t<h2 class=\"news-item__title\">";
            // line 12
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "title", array());
            echo "</h2>
\t\t\t\t\t\t<p class=\"news-item__date\">";
            // line 13
            echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute($context["child"], "date", array()), false);
            echo "</p>
\t\t\t\t\t\t<div class=\"news-item__read-more\">Read article <svg><use xlink:href=\"/svg/svg.svg#arrow-right\" /></svg></div>
\t\t\t\t\t\t<div class=\"news-item__cover\" style=\"background-image: url(";
            // line 15
            echo $this->getAttribute($context["child"], "route", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute($context["child"], "header", array()), "cover_image", array());
            echo ")\"></div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</ul>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  58 => 15,  53 => 13,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="news">*/
/* 		<div class="u-wrapper">*/
/* 			<h1 class="news__heading">Latest News</h1>*/
/* 			*/
/* 			<ul class="news__list">*/
/* 			{% for child in page.collection() %}*/
/* 				<li class="news-item">*/
/* 					<a href="{{ child.route }}" class="news-item__link">*/
/* 						<h2 class="news-item__title">{{ child.header.title }}</h2>*/
/* 						<p class="news-item__date">{{ child.date|nicetime(false) }}</p>*/
/* 						<div class="news-item__read-more">Read article <svg><use xlink:href="/svg/svg.svg#arrow-right" /></svg></div>*/
/* 						<div class="news-item__cover" style="background-image: url({{ child.route }}/{{ child.header.cover_image }})"></div>*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
