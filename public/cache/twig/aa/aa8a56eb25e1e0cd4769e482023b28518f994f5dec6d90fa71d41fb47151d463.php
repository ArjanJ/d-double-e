<?php

/* bio.html.twig */
class __TwigTemplate_456d83e412b0d3bc5357c60e330f061649d41881528d7bb9857885e8652417dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./layouts/default.html.twig", "bio.html.twig", 1);
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
        echo "\t<section class=\"bio\">
\t\t<div class=\"u-wrapper\">
\t\t\t<article class=\"bio__content\">
\t\t\t\t<h1 class=\"bio__heading\">D Double E</h1>
\t\t\t\t<h2 class=\"bio__subheading u-heading-4\">The Greatest of All Time</h2>
\t\t\t\t";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</article>
\t\t</div>
\t\t<div class=\"bio__fixed-bg\">
\t\t\t<div class=\"bio__fixed-bg-left\"></div>
\t\t\t<div class=\"bio__fixed-bg-right\"></div>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="bio">*/
/* 		<div class="u-wrapper">*/
/* 			<article class="bio__content">*/
/* 				<h1 class="bio__heading">D Double E</h1>*/
/* 				<h2 class="bio__subheading u-heading-4">The Greatest of All Time</h2>*/
/* 				{{ page.content }}*/
/* 			</article>*/
/* 		</div>*/
/* 		<div class="bio__fixed-bg">*/
/* 			<div class="bio__fixed-bg-left"></div>*/
/* 			<div class="bio__fixed-bg-right"></div>*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
/* */
