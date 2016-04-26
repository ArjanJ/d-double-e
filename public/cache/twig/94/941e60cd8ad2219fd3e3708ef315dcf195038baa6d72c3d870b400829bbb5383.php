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
\t\t";
        // line 10
        echo "\t\t<div class=\"home-hero__music\">
\t\t\t<img width=\"600\" height=\"600\" src=\"/images/home-music-cover.jpg\" alt=\"\" class=\"home-hero__music-img\">
\t\t\t<h1 class=\"home-hero__music-title\">Grim Reaper — single out now</h1>
\t\t</div>
\t</div>
\t<div class=\"home-hero__spotify\">
\t\t<iframe src=\"https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0\" width=\"200\" height=\"25\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowtransparency=\"true\"></iframe>
\t</div>
\t<div class=\"home-hero__bg\">
\t\t<img width=\"1920\" height=\"1080\" src=\"/images/home-bg-1.jpg\" alt=\"\">
\t</div>
\t<div class=\"home-hero__bottom-mask\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"133\" viewBox=\"0 0 1920 133\" enable-background=\"new 0 0 1920 133\" xml:space=\"preserve\"><path d=\"M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z\"/></svg>
\t</div>

\t";
        // line 42
        echo "
\t";
        // line 46
        echo "
\t";
        // line 50
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 50,  43 => 46,  40 => 42,  23 => 10,  19 => 1,);
    }
}
/* <section class="home-hero">*/
/* 	<div class="u-wrapper">*/
/* 		{# <div class="home-hero__img">*/
/* 			<img width="485" height="655" class="home-hero__img-img" src="/images/d-double-e-home.svg" alt="">*/
/* 		</div>*/
/* 		<div class="home-hero__svgs">*/
/* 			{% include "./partials/logo.html.twig" with {'id': 'homeLogo1'} %}*/
/* 			{% include "./partials/logo.html.twig" with {'id': 'homeLogo2'} %}*/
/* 		</div> #}*/
/* 		<div class="home-hero__music">*/
/* 			<img width="600" height="600" src="/images/home-music-cover.jpg" alt="" class="home-hero__music-img">*/
/* 			<h1 class="home-hero__music-title">Grim Reaper — single out now</h1>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="home-hero__spotify">*/
/* 		<iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0" width="200" height="25" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>*/
/* 	</div>*/
/* 	<div class="home-hero__bg">*/
/* 		<img width="1920" height="1080" src="/images/home-bg-1.jpg" alt="">*/
/* 	</div>*/
/* 	<div class="home-hero__bottom-mask">*/
/* 		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="1920" height="133" viewBox="0 0 1920 133" enable-background="new 0 0 1920 133" xml:space="preserve"><path d="M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z"/></svg>*/
/* 	</div>*/
/* */
/* 	{# <div class="home-hero__bg">*/
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
/* 	</div> #}*/
/* */
/* 	{# <div class="home-hero__bg home-hero__bg--camo">*/
/* 		{% include './partials/camo.html.twig' %}*/
/* 	</div> #}*/
/* */
/* 	{# <div class="home-hero__paint-drips">*/
/* 		{% include './partials/paint-drips.html.twig' %}*/
/* 	</div> #}*/
/* </section>*/
