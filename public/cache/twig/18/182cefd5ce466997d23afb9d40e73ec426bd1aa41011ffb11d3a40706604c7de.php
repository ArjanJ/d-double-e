<?php

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_e7d0518eed51fb1d48e95b5300f6a8e1d447dd33b60aaa24323cde2668adb9b1 extends Twig_Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "1772817292")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed \"forms/fields/select/select.html.twig\" %}
    {% if not field.options and value %}
        {% set field = field|merge({options: {(value): value}}) %}
    {% endif %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
";
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_e7d0518eed51fb1d48e95b5300f6a8e1d447dd33b60aaa24323cde2668adb9b1_1772817292 extends Twig_Template
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
        // line 2
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()) && (isset($context["value"]) ? $context["value"] : null))) {
            // line 3
            $context["field"] = twig_array_merge((isset($context["field"]) ? $context["field"] : null), array("options" => array((isset($context["value"]) ? $context["value"] : null) => (isset($context["value"]) ? $context["value"] : null))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 7
        echo "        data-grav-filepicker
        data-name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "preview_images", array())) {
            echo "data-preview-images";
        }
        // line 10
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
        ";
        // line 11
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
        return array (  101 => 11,  96 => 10,  92 => 9,  88 => 8,  85 => 7,  82 => 6,  78 => 1,  75 => 3,  73 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed \"forms/fields/select/select.html.twig\" %}
    {% if not field.options and value %}
        {% set field = field|merge({options: {(value): value}}) %}
    {% endif %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
";
    }
}
