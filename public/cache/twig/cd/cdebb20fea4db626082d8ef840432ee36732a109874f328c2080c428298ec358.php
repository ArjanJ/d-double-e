<?php

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_9b8ef00152db94b7f7fe2eb1aaad4a9276626aa8ea6568096109f0afc82d4749 extends Twig_Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "1749511435")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_9b8ef00152db94b7f7fe2eb1aaad4a9276626aa8ea6568096109f0afc82d4749_1749511435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 3
        echo "        data-grav-filepicker
        data-name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 5
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "preview_images", array())) {
            echo "data-preview-images";
        }
        // line 6
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
        ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 7,  72 => 6,  68 => 5,  64 => 4,  61 => 3,  58 => 2,  19 => 1,);
    }
}
/* {% embed "forms/fields/select/select.html.twig" %}*/
/*     {% block global_attributes %}*/
/*         data-grav-filepicker*/
/*         data-name="{{field.name}}"*/
/*         {% if field.preview_images %}data-preview-images{% endif %}*/
/*         data-value="{{value}}"*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
