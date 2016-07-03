<?php

/* bio.html.twig */
class __TwigTemplate_1ed68716b79c3e5c9005340777deae9f56dd53298db7c3c1f1d28f343006f084 extends Twig_Template
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
\t\t\t\t<h2 class=\"bio__subheading u-heading-3\">The Greatest of All Time</h2>
\t\t\t\t<p>D Double E, is a member of the Newham Generals, originating from the notorious Newham borough of London. Originally in the N.A.S.T.Y Crew, D Double E, Footsie, and DJ Tubby are the members, producers and MC's of the harsh, grime sounds of the Newham Generals. Monkstarr was also a member until he left to find god.</p>
\t\t\t\t<p>D Double E used to be a member of the 187 Crew, with Jammer and Armour. The group were invited to join Nasty Crew, and they accepted apart from Jammer, who did join later after N.A.S.T.Y were in contact with a record company and he was approached to work on the production. After being one of the earliest members of Nasty Crew, Double left the collective due to disagreements, which are thought to revolve around the fact that D Double E used the prestigious Nasty Crew name to secure solo bookings. Double also left the crew with Footsie and Monkstarr, and these MCs, along with DJ Tubby established the grime collective the Newham Generals.</p>
\t\t\t\t<p>The Newham Generals are currently signed to the label Dirtee Stank, a label established by former grime MC Dizzee Rascal, and their debut album Generally Speaking is due for imminent release. The Newham Generals have a regular slot on the pirate radio station Rinse FM.</p>
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "./layouts/default.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<section class="bio">*/
/* 		<div class="u-wrapper">*/
/* 			<article class="bio__content">*/
/* 				<h1 class="bio__heading">D Double E</h1>*/
/* 				<h2 class="bio__subheading u-heading-3">The Greatest of All Time</h2>*/
/* 				<p>D Double E, is a member of the Newham Generals, originating from the notorious Newham borough of London. Originally in the N.A.S.T.Y Crew, D Double E, Footsie, and DJ Tubby are the members, producers and MC's of the harsh, grime sounds of the Newham Generals. Monkstarr was also a member until he left to find god.</p>*/
/* 				<p>D Double E used to be a member of the 187 Crew, with Jammer and Armour. The group were invited to join Nasty Crew, and they accepted apart from Jammer, who did join later after N.A.S.T.Y were in contact with a record company and he was approached to work on the production. After being one of the earliest members of Nasty Crew, Double left the collective due to disagreements, which are thought to revolve around the fact that D Double E used the prestigious Nasty Crew name to secure solo bookings. Double also left the crew with Footsie and Monkstarr, and these MCs, along with DJ Tubby established the grime collective the Newham Generals.</p>*/
/* 				<p>The Newham Generals are currently signed to the label Dirtee Stank, a label established by former grime MC Dizzee Rascal, and their debut album Generally Speaking is due for imminent release. The Newham Generals have a regular slot on the pirate radio station Rinse FM.</p>*/
/* 			</article>*/
/* 		</div>*/
/* 		<div class="bio__fixed-bg">*/
/* 			<div class="bio__fixed-bg-left"></div>*/
/* 			<div class="bio__fixed-bg-right"></div>*/
/* 		</div>*/
/* 	</section>*/
/* {% endblock %}*/
