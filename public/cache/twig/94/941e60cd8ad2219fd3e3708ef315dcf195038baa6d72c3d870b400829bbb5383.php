<?php

/* modular/hero.html.twig */
class __TwigTemplate_a24a3dc7a33f8aa66175a77b74399b48364ddb21556d0be7a5acb6b0f7f7c44c extends Twig_Template
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
        echo "<section class=\"home-hero\">
\t<div class=\"u-wrapper\">
\t\t<div class=\"home-hero__img\">
\t\t\t<img width=\"485\" height=\"655\" class=\"home-hero__img-img\" src=\"/images/d-double-e-home.svg\" alt=\"\">
\t\t\t<div class=\"home-hero__svgs\">
\t\t\t\t";
        // line 6
        $this->loadTemplate("./partials/logo.html.twig", "modular/hero.html.twig", 6)->display(array_merge($context, array("id" => "homeLogo1")));
        // line 7
        echo "\t\t\t\t";
        $this->loadTemplate("./partials/logo.html.twig", "modular/hero.html.twig", 7)->display(array_merge($context, array("id" => "homeLogo2")));
        // line 8
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-hero__spotify\">
\t\t\t<iframe src=\"https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0\" width=\"200\" height=\"25\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowtransparency=\"true\"></iframe>
\t\t</div>
\t</div>

\t<div class=\"home-hero__bg\">
\t\t<svg preserveAspectRatio=\"xMidYMin\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"900\" viewBox=\"0 0 1920 900\" enable-background=\"new 0 0 1920 900\" xml:space=\"preserve\">
\t\t\t<defs>
\t\t    <filter id=\"dropShadow\" x=\"0\" y=\"0\" width=\"200%\" height=\"200%\">
\t\t    \t<feGaussianBlur result=\"blurOut\" in=\"SourceAlpha\" stdDeviation=\"8\" />
\t\t      <feOffset result=\"offOut\" in=\"blurOut\" dx=\"0\" dy=\"15\" />
\t\t      <feColorMatrix in=\"offOut\" result=\"color-out\" type=\"matrix\"
            values=\"0 0 0 0   0
                    0 0 0 0   0 
                    0 0 0 0   0 
                    0 0 0 .7 0\"/>
\t\t      <feBlend in=\"SourceGraphic\" in2=\"color-out\" mode=\"normal\" />
\t\t    </filter>
\t\t\t </defs>
\t\t  <path filter=\"url(#dropShadow)\" d=\"M261.5 767.9c199.5 0 336 129.1 564 132.1 228 3 355.5-108.2 697.5-109.7 153.9-0.7 290.8 28.2 397 62.4V0H0v836.6C84.9 799.3 180.4 767.9 261.5 767.9z\"/>
\t\t</svg>
\t</div>

\t<div class=\"home-hero__bg home-hero__bg--camo\">
\t\t";
        // line 34
        $this->loadTemplate("./partials/camo.html.twig", "modular/hero.html.twig", 34)->display($context);
        // line 35
        echo "\t</div>

\t<div class=\"home-hero__paint-drips\">
\t\t";
        // line 38
        $this->loadTemplate("./partials/paint-drips.html.twig", "modular/hero.html.twig", 38)->display($context);
        // line 39
        echo "\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  66 => 38,  61 => 35,  59 => 34,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <section class="home-hero">*/
/* 	<div class="u-wrapper">*/
/* 		<div class="home-hero__img">*/
/* 			<img width="485" height="655" class="home-hero__img-img" src="/images/d-double-e-home.svg" alt="">*/
/* 			<div class="home-hero__svgs">*/
/* 				{% include "./partials/logo.html.twig" with {'id': 'homeLogo1'} %}*/
/* 				{% include "./partials/logo.html.twig" with {'id': 'homeLogo2'} %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="home-hero__spotify">*/
/* 			<iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0" width="200" height="25" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="home-hero__bg">*/
/* 		<svg preserveAspectRatio="xMidYMin" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="1920" height="900" viewBox="0 0 1920 900" enable-background="new 0 0 1920 900" xml:space="preserve">*/
/* 			<defs>*/
/* 		    <filter id="dropShadow" x="0" y="0" width="200%" height="200%">*/
/* 		    	<feGaussianBlur result="blurOut" in="SourceAlpha" stdDeviation="8" />*/
/* 		      <feOffset result="offOut" in="blurOut" dx="0" dy="15" />*/
/* 		      <feColorMatrix in="offOut" result="color-out" type="matrix"*/
/*             values="0 0 0 0   0*/
/*                     0 0 0 0   0 */
/*                     0 0 0 0   0 */
/*                     0 0 0 .7 0"/>*/
/* 		      <feBlend in="SourceGraphic" in2="color-out" mode="normal" />*/
/* 		    </filter>*/
/* 			 </defs>*/
/* 		  <path filter="url(#dropShadow)" d="M261.5 767.9c199.5 0 336 129.1 564 132.1 228 3 355.5-108.2 697.5-109.7 153.9-0.7 290.8 28.2 397 62.4V0H0v836.6C84.9 799.3 180.4 767.9 261.5 767.9z"/>*/
/* 		</svg>*/
/* 	</div>*/
/* */
/* 	<div class="home-hero__bg home-hero__bg--camo">*/
/* 		{% include './partials/camo.html.twig' %}*/
/* 	</div>*/
/* */
/* 	<div class="home-hero__paint-drips">*/
/* 		{% include './partials/paint-drips.html.twig' %}*/
/* 	</div>*/
/* </section>*/
