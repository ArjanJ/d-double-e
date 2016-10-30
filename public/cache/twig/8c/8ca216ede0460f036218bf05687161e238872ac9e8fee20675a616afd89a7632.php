<?php

/* modular/hero.html.twig */
class __TwigTemplate_509cd6a7cfbfc91b5577f391a6b3ad579e3086592b13321e3b56d49a6ebf7da0 extends Twig_Template
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
\t<div class=\"home-hero__fixed-bg\"></div>
\t<div class=\"u-wrapper\">
\t\t<div class=\"home-hero__music\">
\t\t\t<img width=\"600\" height=\"600\" src=\"";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "/";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "album_art", array());
        echo "\" alt=\"\" class=\"home-hero__music-img\">
\t\t\t<h1 class=\"home-hero__music-title\">";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "album_text", array());
        echo "</h1>
\t\t\t";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "apple_music_link", array())) {
            // line 8
            echo "\t\t\t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "apple_music_link", array());
            echo "\" class=\"c-button home-hero__music-link home-hero__music-link--itunes\">
\t\t\t\t\t<div class=\"home-hero__music-link-icon\">
\t\t\t\t\t\t<svg width=\"24\" height=\"24\"><use xlink:href=\"/svg/svg.svg#apple\" /></svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-hero__music-link-text\">
\t\t\t\t\t\t<span class=\"c-button__sm-txt\">Listen on</span>
\t\t\t\t\t\t<span class=\"c-button__lg-txt\">Music</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        // line 18
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "spotify_link", array())) {
            // line 19
            echo "\t\t\t\t<a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "spotify_link", array());
            echo "\">
\t\t\t\t\t<div class=\"home-hero__music-link-icon\">
\t\t\t\t\t\t<svg width=\"24\" height=\"24\"><use xlink:href=\"/svg/svg.svg#spotify\" /></svg>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"home-hero__music-link-text\">
\t\t\t\t\t\t\t<span class=\"c-button__sm-txt\">Listen on</span>
\t\t\t\t\t\t\t<span class=\"c-button__lg-txt\">Spotify</span>
\t\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t";
        }
        // line 29
        echo "\t\t</div>
\t</div>
\t<div class=\"home-hero__spotify\">
\t\t<iframe src=\"https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0\" width=\"200\" height=\"25\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowtransparency=\"true\"></iframe>
\t</div>
\t<div class=\"home-hero__bottom-mask\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"133\" viewBox=\"0 0 1920 133\" enable-background=\"new 0 0 1920 133\" xml:space=\"preserve\"><path d=\"M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z\"/></svg>
\t</div>
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
        return array (  68 => 29,  54 => 19,  51 => 18,  37 => 8,  35 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"home-hero\">
\t<div class=\"home-hero__fixed-bg\"></div>
\t<div class=\"u-wrapper\">
\t\t<div class=\"home-hero__music\">
\t\t\t<img width=\"600\" height=\"600\" src=\"{{ page.route }}/{{ page.header.album_art }}\" alt=\"\" class=\"home-hero__music-img\">
\t\t\t<h1 class=\"home-hero__music-title\">{{ page.header.album_text }}</h1>
\t\t\t{% if page.header.apple_music_link %}
\t\t\t\t<a href=\"{{ page.header.apple_music_link }}\" class=\"c-button home-hero__music-link home-hero__music-link--itunes\">
\t\t\t\t\t<div class=\"home-hero__music-link-icon\">
\t\t\t\t\t\t<svg width=\"24\" height=\"24\"><use xlink:href=\"/svg/svg.svg#apple\" /></svg>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"home-hero__music-link-text\">
\t\t\t\t\t\t<span class=\"c-button__sm-txt\">Listen on</span>
\t\t\t\t\t\t<span class=\"c-button__lg-txt\">Music</span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t\t{% if page.header.spotify_link %}
\t\t\t\t<a href=\"{{ page.header.spotify_link }}\">
\t\t\t\t\t<div class=\"home-hero__music-link-icon\">
\t\t\t\t\t\t<svg width=\"24\" height=\"24\"><use xlink:href=\"/svg/svg.svg#spotify\" /></svg>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"home-hero__music-link-text\">
\t\t\t\t\t\t\t<span class=\"c-button__sm-txt\">Listen on</span>
\t\t\t\t\t\t\t<span class=\"c-button__lg-txt\">Spotify</span>
\t\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<div class=\"home-hero__spotify\">
\t\t<iframe src=\"https://embed.spotify.com/follow/1/?uri=spotify:artist:6bwkMlweHsBCpI2a0C5nnN&size=basic&theme=light&show-count=0\" width=\"200\" height=\"25\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden;\" allowtransparency=\"true\"></iframe>
\t</div>
\t<div class=\"home-hero__bottom-mask\">
\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0\" y=\"0\" width=\"1920\" height=\"133\" viewBox=\"0 0 1920 133\" enable-background=\"new 0 0 1920 133\" xml:space=\"preserve\"><path d=\"M825.6 132.1C597.6 129.1 461 0 261.5 0 180.4 0 84.9 31.4 0 68.7V133h1920V84.7c-106.2-34.2-243.1-63-397-62.4C1181.1 23.9 1053.5 135.1 825.6 132.1z\"/></svg>
\t</div>
</section>";
    }
}
