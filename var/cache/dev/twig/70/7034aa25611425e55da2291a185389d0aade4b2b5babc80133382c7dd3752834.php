<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_a09289882436bdc580340210d161f0639fdd51eaf288976eebd2d2592c9a0222 extends Twig_Template
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
        $__internal_bfc991f5e21b0ce352ca96a14bea2eb4564bf945b22e86c2c64b36dcd76c4eeb = $this->env->getExtension("native_profiler");
        $__internal_bfc991f5e21b0ce352ca96a14bea2eb4564bf945b22e86c2c64b36dcd76c4eeb->enter($__internal_bfc991f5e21b0ce352ca96a14bea2eb4564bf945b22e86c2c64b36dcd76c4eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_bfc991f5e21b0ce352ca96a14bea2eb4564bf945b22e86c2c64b36dcd76c4eeb->leave($__internal_bfc991f5e21b0ce352ca96a14bea2eb4564bf945b22e86c2c64b36dcd76c4eeb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
