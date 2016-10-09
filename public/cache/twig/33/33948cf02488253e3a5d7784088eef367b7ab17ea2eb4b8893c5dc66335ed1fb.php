<?php

/* ./layouts/default.html.twig */
class __TwigTemplate_cf263591e09adce4f734f00cde059f55ba5038136335761b5c8b92a3861b7c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "\t</head>

\t<body>
\t\t";
        // line 27
        $this->loadTemplate("./partials/header.html.twig", "./layouts/default.html.twig", 27)->display($context);
        // line 28
        echo "
\t\t<main class=\"site-main ";
        // line 29
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo "\">
\t\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t\t</main>

\t\t";
        // line 33
        $this->loadTemplate("./partials/footer.html.twig", "./layouts/default.html.twig", 33)->display($context);
        // line 34
        echo "
\t\t";
        // line 35
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/build/bundle.js"), "method");
        // line 36
        echo "\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<meta charset=\"utf-8\" />
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

\t\t\t<title>";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        }
        echo "</title>
\t\t\t<meta name=\"description\" content=\"";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array()), "html");
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array())) {
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array(0 => 100), "method"));
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html");
        echo "\">

\t\t\t<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700,300' rel='stylesheet' type='text/css'>

\t\t\t";
        // line 14
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bluku.css"), "method");
        // line 15
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

\t\t\t<meta property=\"og:title\" content=\"";
        // line 17
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        }
        echo "\">
\t\t\t<meta property=\"og:description\" content=\"";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array()), "html");
        } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array())) {
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array(0 => 100), "method"));
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html");
        echo "\">
\t\t\t<meta property=\"og:image\" content=\"http://www.itsddoublee.com/images/d-double-e-splash-card.jpg\">
\t\t\t<meta property=\"og:url\" content=\"http://www.itsddoublee.com\">
\t\t\t<meta name=\"twitter:card\" content=\"summary_large_image\">

\t\t";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "./layouts/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  109 => 18,  101 => 17,  95 => 15,  93 => 14,  81 => 10,  73 => 9,  67 => 5,  64 => 4,  55 => 36,  53 => 35,  50 => 34,  48 => 33,  44 => 31,  42 => 30,  38 => 29,  35 => 28,  33 => 27,  28 => 24,  26 => 4,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		{% block head %}*/
/* 			<meta charset="utf-8" />*/
/* 			<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* 			<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/* 			<title>{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.title|e('html') }}{% endif %}</title>*/
/* 			<meta name="description" content="{% if header.description %}{{ header.description|e('html') }}{% elseif page.summary %}{{ page.summary(100)|striptags }}{% endif %}{{ site.description|e('html') }}">*/
/* */
/* 			<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700,300' rel='stylesheet' type='text/css'>*/
/* */
/* 			{% do assets.addCss('theme://css/bluku.css') %}*/
/* 			{{ assets.css() }}*/
/* */
/* 			<meta property="og:title" content="{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.title|e('html') }}{% endif %}">*/
/* 			<meta property="og:description" content="{% if header.description %}{{ header.description|e('html') }}{% elseif page.summary %}{{ page.summary(100)|striptags }}{% endif %}{{ site.description|e('html') }}">*/
/* 			<meta property="og:image" content="http://www.itsddoublee.com/images/d-double-e-splash-card.jpg">*/
/* 			<meta property="og:url" content="http://www.itsddoublee.com">*/
/* 			<meta name="twitter:card" content="summary_large_image">*/
/* */
/* 		{% endblock %}*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		{% include "./partials/header.html.twig" %}*/
/* */
/* 		<main class="site-main {{ page.menu }}">*/
/* 			{% block content %}{% endblock %}*/
/* 		</main>*/
/* */
/* 		{% include "./partials/footer.html.twig" %}*/
/* */
/* 		{% do assets.addJs('theme://js/build/bundle.js') %}*/
/* 		{{ assets.js() }}*/
/* 	</body>*/
/* </html>*/
/* */
