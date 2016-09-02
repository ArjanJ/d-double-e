<?php

/* music.html.twig */
class __TwigTemplate_c1e497f68844f79c9d1ede38856c191228a301a1e6edccd9ecc0363c1b4ae609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "music.html.twig", 1);
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
        echo "\t<section class=\"music\">
\t\t<div class=\"music-wrapper\">
\t\t\t<h1 class=\"news__heading\">Music</h1>
\t\t\t<ul class=\"music-list\"></ul>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "music.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="music">*/
/* 		<div class="music-wrapper">*/
/* 			<h1 class="news__heading">Music</h1>*/
/* 			<ul class="music-list"></ul>*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
/* */
