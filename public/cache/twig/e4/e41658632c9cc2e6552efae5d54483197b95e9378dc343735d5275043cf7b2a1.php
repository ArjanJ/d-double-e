<?php

/* modular/news.html.twig */
class __TwigTemplate_ad3300fc6a7dd8f337f0e152907f6856594cdbd3fc8a3771676dd671999f76cc extends Twig_Template
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
        $context["news"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 2
        echo "
<section class=\"home-news\">
\t<div class=\"u-wrapper\">
\t\t<ul class=\"home-news__list\">
\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "\t\t\t\t";
            echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, $context["post"]);
            echo "
\t\t\t\t<li class=\"home-news-post\" style=\"background-image: url(";
            // line 8
            echo $this->getAttribute($context["post"], "route", array());
            echo "/";
            echo $this->getAttribute($this->getAttribute($context["post"], "header", array()), "cover_image", array());
            echo ")\">
\t\t\t\t\t<a href=\"";
            // line 9
            echo $this->getAttribute($context["post"], "route", array());
            echo "\" class=\"home-news-post__link\">
\t\t\t\t\t\t<h2 class=\"home-news-post__heading\">";
            // line 10
            echo $this->getAttribute($context["post"], "title", array());
            echo "</h2>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t\t\t<li class=\"home-news-post home-news-post--last\">
\t\t\t\t<a href=\"/news\" class=\"home-news-post__link\">
\t\t\t\t\t<h2 class=\"home-news-post__heading home-news-post__heading--last\">
\t\t\t\t\t\tMore News
\t\t\t\t\t\t<svg><use xlink:href=\"/svg/svg.svg#arrow-right\" /></svg>
\t\t\t\t\t</h2>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  46 => 10,  42 => 9,  36 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% set news = page.collection() %}*/
/* */
/* <section class="home-news">*/
/* 	<div class="u-wrapper">*/
/* 		<ul class="home-news__list">*/
/* 			{% for post in news %}*/
/* 				{{ dump(post) }}*/
/* 				<li class="home-news-post" style="background-image: url({{ post.route }}/{{ post.header.cover_image }})">*/
/* 					<a href="{{ post.route }}" class="home-news-post__link">*/
/* 						<h2 class="home-news-post__heading">{{ post.title }}</h2>*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* */
/* 			<li class="home-news-post home-news-post--last">*/
/* 				<a href="/news" class="home-news-post__link">*/
/* 					<h2 class="home-news-post__heading home-news-post__heading--last">*/
/* 						More News*/
/* 						<svg><use xlink:href="/svg/svg.svg#arrow-right" /></svg>*/
/* 					</h2>*/
/* 				</a>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* </section>*/
