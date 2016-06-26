<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_dfa2f15f783cd34912f6d50cbf5f26e11023fcd0a5b06a4dd6c7cf76ba3fc451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["defaults"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "form", array());
        // line 3
        $context["files"] = twig_array_merge($this->getAttribute((isset($context["defaults"]) ? $context["defaults"] : null), "files", array()), ((array_key_exists("field", $context)) ? (_twig_default_filter((isset($context["field"]) ? $context["field"] : null), array())) : (array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_input($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if (( !(isset($context["plugin"]) ? $context["plugin"] : null) &&  !(isset($context["theme"]) ? $context["theme"] : null))) {
            // line 8
            echo "        The \"file\" input field cannot be used in Pages Blueprints. It's intended to be used for Plugins and Themes blueprints.
        Use the \"pagemediaselect\" type instead.
    ";
        } else {
            // line 11
            echo "        ";
            if ((isset($context["value"]) ? $context["value"] : null)) {
                // line 12
                echo "            <img src=\"";
                echo ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) == "/")) ? ("/") : (($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "rootUrl", array()) . "/")));
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\" alt=\"";
                echo twig_replace_filter((isset($context["value"]) ? $context["value"] : null), array(($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "destination", array()) . "/") => ""));
                echo "\" />
            <a href=\"";
                // line 13
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((((((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/media/") . base64_encode(((                // line 14
(isset($context["base_path"]) ? $context["base_path"] : null) . "/") . (isset($context["value"]) ? $context["value"] : null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 15
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "removeFileFromBlueprint") . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 16
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "blueprint", array())) . "/field") . $this->getAttribute($this->getAttribute(                // line 17
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $this->getAttribute((isset($context["files"]) ? $context["files"] : null), "name", array())) . "/redirect") . $this->getAttribute($this->getAttribute(                // line 18
(isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . base64_encode($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "path", array()))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\">
                <i class=\"fa fa-close\"></i>
            </a>
        ";
            }
            // line 22
            echo "
        <div class=\"form-input-wrapper ";
            // line 23
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
            echo "\">
            <input
                ";
            // line 26
            echo "                name=\"";
            echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "[]");
            echo "\"
                ";
            // line 27
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 32
            echo "             />
        </div>
    ";
        }
    }

    // line 27
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 28
        echo "                    type=\"file\"
                    ";
        // line 29
        if ($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array())) {
            echo "accept=\"";
            echo twig_join_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), "accept", array()), ",");
            echo "\"";
        }
        // line 30
        echo "                    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  98 => 29,  95 => 28,  92 => 27,  85 => 32,  83 => 27,  78 => 26,  73 => 23,  70 => 22,  63 => 18,  62 => 17,  61 => 16,  60 => 15,  59 => 14,  58 => 13,  50 => 12,  47 => 11,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* {% set defaults = config.plugins.form %}*/
/* {% set files = defaults.files|merge(field|default([])) %}*/
/* */
/* {% block input %}*/
/* */
/*     {% if not plugin and not theme %}*/
/*         The "file" input field cannot be used in Pages Blueprints. It's intended to be used for Plugins and Themes blueprints.*/
/*         Use the "pagemediaselect" type instead.*/
/*     {% else %}*/
/*         {% if value %}*/
/*             <img src="{{ uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/'}}{{ value }}" alt="{{ value|replace({(files.destination ~ '/'): ''}) }}" />*/
/*             <a href="{{ uri.addNonce(base_url_relative ~*/
/*                 '/media/' ~ base64_encode(base_path ~ '/' ~ value) ~*/
/*                 '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~*/
/*                 '/blueprint' ~ config.system.param_sep ~ files.blueprint ~*/
/*                 '/field' ~ config.system.param_sep ~ files.name ~*/
/*                 '/redirect' ~ config.system.param_sep ~ base64_encode(uri.path), 'admin-form', 'admin-nonce') }}">*/
/*                 <i class="fa fa-close"></i>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         <div class="form-input-wrapper {{ field.size }}">*/
/*             <input*/
/*                 {# required attribute structures #}*/
/*                 name="{{ (scope ~ field.name)|fieldName ~ '[]' }}"*/
/*                 {% block input_attributes %}*/
/*                     type="file"*/
/*                     {% if files.accept %}accept="{{ files.accept|join(',') }}"{% endif %}*/
/*                     {{ parent() }}*/
/*                 {% endblock %}*/
/*              />*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
