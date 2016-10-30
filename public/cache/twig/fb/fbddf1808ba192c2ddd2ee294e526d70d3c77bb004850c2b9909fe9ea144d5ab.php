<?php

/* ./partials/base.html.twig */
class __TwigTemplate_74252bef473d4292f3154e69f2ea30157e503ac45b5f960c4c52f42290508f34 extends Twig_Template
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
        // line 36
        echo "\t</head>

\t<body>
\t\t";
        // line 39
        $this->loadTemplate("./partials/header.html.twig", "./partials/base.html.twig", 39)->display($context);
        // line 40
        echo "
\t\t<main class=\"site-main ";
        // line 41
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo "\">
\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t</main>

\t\t";
        // line 45
        $this->loadTemplate("./partials/footer.html.twig", "./partials/base.html.twig", 45)->display($context);
        // line 46
        echo "
\t\t";
        // line 47
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/build/bundle.js"), "method");
        // line 48
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

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-85427840-1', 'auto');
        ga('send', 'pageview');
      </script>

      ";
        // line 33
        $this->loadTemplate("./partials/favicons.html.twig", "./partials/base.html.twig", 33)->display($context);
        // line 34
        echo "
\t\t";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "./partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  134 => 34,  132 => 33,  109 => 18,  101 => 17,  95 => 15,  93 => 14,  81 => 10,  73 => 9,  67 => 5,  64 => 4,  55 => 48,  53 => 47,  50 => 46,  48 => 45,  44 => 43,  42 => 42,  38 => 41,  35 => 40,  33 => 39,  28 => 36,  26 => 4,  21 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t{% block head %}
\t\t\t<meta charset=\"utf-8\" />
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

\t\t\t<title>{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.title|e('html') }}{% endif %}</title>
\t\t\t<meta name=\"description\" content=\"{% if header.description %}{{ header.description|e('html') }}{% elseif page.summary %}{{ page.summary(100)|striptags }}{% endif %}{{ site.description|e('html') }}\">

\t\t\t<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700,300' rel='stylesheet' type='text/css'>

\t\t\t{% do assets.addCss('theme://css/bluku.css') %}
\t\t\t{{ assets.css() }}

\t\t\t<meta property=\"og:title\" content=\"{% if header.title %}{{ header.title|e('html') }}{% else %}{{ site.title|e('html') }}{% endif %}\">
\t\t\t<meta property=\"og:description\" content=\"{% if header.description %}{{ header.description|e('html') }}{% elseif page.summary %}{{ page.summary(100)|striptags }}{% endif %}{{ site.description|e('html') }}\">
\t\t\t<meta property=\"og:image\" content=\"http://www.itsddoublee.com/images/d-double-e-splash-card.jpg\">
\t\t\t<meta property=\"og:url\" content=\"http://www.itsddoublee.com\">
\t\t\t<meta name=\"twitter:card\" content=\"summary_large_image\">

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-85427840-1', 'auto');
        ga('send', 'pageview');
      </script>

      {% include \"./partials/favicons.html.twig\" %}

\t\t{% endblock %}
\t</head>

\t<body>
\t\t{% include \"./partials/header.html.twig\" %}

\t\t<main class=\"site-main {{ page.menu }}\">
\t\t\t{% block content %}{% endblock %}
\t\t</main>

\t\t{% include \"./partials/footer.html.twig\" %}

\t\t{% do assets.addJs('theme://js/build/bundle.js') %}
\t\t{{ assets.js() }}
\t</body>
</html>
";
    }
}
