<?php

/* ./layouts/default.html.twig */
class __TwigTemplate_31a4b98d0b2c6c7e0ebe8d60390485a3989921621539e3bc558c00af34a5ad4c extends Twig_Template
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
        // line 18
        echo "\t</head>

\t<body>
\t\t";
        // line 21
        $this->loadTemplate("./partials/header.html.twig", "./layouts/default.html.twig", 21)->display($context);
        // line 22
        echo "
\t\t<main class=\"site-main\">
\t\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t\t</main>

\t\t";
        // line 27
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/build/bundle.js"), "method");
        // line 28
        echo "\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t</body>
</html>";
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
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
\t\t\t<meta name=\"description\" content=\"";
        // line 10
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array()), "html");
        echo "\">
\t\t\t
\t\t\t<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700,300' rel='stylesheet' type='text/css'>

\t\t\t";
        // line 14
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bluku.css"), "method");
        // line 15
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

\t\t";
    }

    // line 24
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
        return array (  93 => 24,  85 => 15,  83 => 14,  72 => 10,  64 => 9,  58 => 5,  55 => 4,  47 => 28,  45 => 27,  41 => 25,  39 => 24,  35 => 22,  33 => 21,  28 => 18,  26 => 4,  21 => 1,);
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
/* 			<title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/* 			<meta name="description" content="{% if header.description %}{{ header.description|e('html') }} | {% endif %}{{ site.description|e('html') }}">*/
/* 			*/
/* 			<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700,300' rel='stylesheet' type='text/css'>*/
/* */
/* 			{% do assets.addCss('theme://css/bluku.css') %}*/
/* 			{{ assets.css() }}*/
/* */
/* 		{% endblock %}*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		{% include "./partials/header.html.twig" %}*/
/* */
/* 		<main class="site-main">*/
/* 			{% block content %}{% endblock %}*/
/* 		</main>*/
/* */
/* 		{% do assets.addJs('theme://js/build/bundle.js') %}*/
/* 		{{ assets.js() }}*/
/* 	</body>*/
/* </html>*/
