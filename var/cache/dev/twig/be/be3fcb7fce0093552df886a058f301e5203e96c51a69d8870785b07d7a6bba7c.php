<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_0c5f9ccdbcfbd7d4841f042911384acaf5f3f1cb2bcae22f27fc682c6c61be6f extends Twig_Template
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
        $__internal_88243de2eef478d1722bdb6a1c0b310dd5a3904e22a0971bda8a64cc6d43e2a3 = $this->env->getExtension("native_profiler");
        $__internal_88243de2eef478d1722bdb6a1c0b310dd5a3904e22a0971bda8a64cc6d43e2a3->enter($__internal_88243de2eef478d1722bdb6a1c0b310dd5a3904e22a0971bda8a64cc6d43e2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_88243de2eef478d1722bdb6a1c0b310dd5a3904e22a0971bda8a64cc6d43e2a3->leave($__internal_88243de2eef478d1722bdb6a1c0b310dd5a3904e22a0971bda8a64cc6d43e2a3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */
