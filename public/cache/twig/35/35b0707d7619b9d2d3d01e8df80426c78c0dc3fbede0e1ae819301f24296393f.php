<?php

/* post.html.twig */
class __TwigTemplate_6f61d00b21b8bcf1cc85251821c7bbd0cbd516063d1f44e675f58dbba56fdfe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./partials/base.html.twig", "post.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<section class=\"post\">
\t\t<header class=\"post-header\" style=\"background-image: url(";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cover_image", array());
        echo ")\">
\t\t\t<div class=\"u-wrapper\">
\t\t\t\t<h1 class=\"post-header__heading\">";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
\t\t\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "publish_date", array())) {
            // line 10
            echo "\t\t\t\t\t<p class=\"post-header__date\">";
            echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "publish_date", array()), false);
            echo "</p>
\t\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t\t<p class=\"post-header__date\">";
            echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), false);
            echo "</p>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</div>
\t\t\t<div class=\"home-hero__bottom-mask\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"133\" viewBox=\"0 0 1920 133\" enable-background=\"new 0 0 1920 133\" xml:space=\"preserve\"><path d=\"M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z\"/></svg>
\t\t\t</div>
\t\t</header>
\t\t<article class=\"post-article\">
\t\t\t<div class=\"u-wrapper post-article__wrapper\">
\t\t\t\t";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</div>
\t\t</article>
\t\t<footer class=\"post-footer\">
\t\t\t<div class=\"u-wrapper\">
\t\t\t\t<h5 class=\"post-footer__heading\">Share this article</h5>
\t\t\t\t<div class=\"site-footer__social-links\">
\t\t\t\t\t<div class=\"fb-share-button\" data-href=\"https://www.itsddoublee.com/";
        // line 28
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "\" data-layout=\"button\" data-size=\"small\" data-mobile-iframe=\"true\"><a class=\"fb-xfbml-parse-ignore\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\">Share</a></div>
\t\t\t\t\t<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a><script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</section>
\t<div id=\"fb-root\"></div>
\t<script>(function(d, s, id) {
\t  var js, fjs = d.getElementsByTagName(s)[0];
\t  if (d.getElementById(id)) return;
\t  js = d.createElement(s); js.id = id;
\t  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=245365548958249\";
\t  fjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));</script>

";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  69 => 21,  60 => 14,  54 => 12,  48 => 10,  46 => 9,  42 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./partials/base.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/* 	<section class="post">*/
/* 		<header class="post-header" style="background-image: url({{ page.route }}/{{ page.header.cover_image }})">*/
/* 			<div class="u-wrapper">*/
/* 				<h1 class="post-header__heading">{{ page.header.title }}</h1>*/
/* 				{% if page.header.publish_date %}*/
/* 					<p class="post-header__date">{{ page.header.publish_date|nicetime(false) }}</p>*/
/* 				{% else %}*/
/* 					<p class="post-header__date">{{ page.date|nicetime(false) }}</p>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="home-hero__bottom-mask">*/
/* 				<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="1920" height="133" viewBox="0 0 1920 133" enable-background="new 0 0 1920 133" xml:space="preserve"><path d="M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z"/></svg>*/
/* 			</div>*/
/* 		</header>*/
/* 		<article class="post-article">*/
/* 			<div class="u-wrapper post-article__wrapper">*/
/* 				{{ page.content }}*/
/* 			</div>*/
/* 		</article>*/
/* 		<footer class="post-footer">*/
/* 			<div class="u-wrapper">*/
/* 				<h5 class="post-footer__heading">Share this article</h5>*/
/* 				<div class="site-footer__social-links">*/
/* 					<div class="fb-share-button" data-href="https://www.itsddoublee.com/{{ page.route }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>*/
/* 					<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>*/
/* 				</div>*/
/* 			</div>*/
/* 		</footer>*/
/* 	</section>*/
/* 	<div id="fb-root"></div>*/
/* 	<script>(function(d, s, id) {*/
/* 	  var js, fjs = d.getElementsByTagName(s)[0];*/
/* 	  if (d.getElementById(id)) return;*/
/* 	  js = d.createElement(s); js.id = id;*/
/* 	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=245365548958249";*/
/* 	  fjs.parentNode.insertBefore(js, fjs);*/
/* 	}(document, 'script', 'facebook-jssdk'));</script>*/
/* */
/* {% endblock %}*/
/* */
