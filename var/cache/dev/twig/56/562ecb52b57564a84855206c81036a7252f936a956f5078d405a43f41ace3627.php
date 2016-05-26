<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_a1f1564b79885f7f0c2d05d8486a220ae0e94c9b7d4bd2c92fd77b468ba405cf extends Twig_Template
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
        $__internal_57b3079d890e56b4be92bddfe4214e9e0f79153a6662f378af913022a439153f = $this->env->getExtension("native_profiler");
        $__internal_57b3079d890e56b4be92bddfe4214e9e0f79153a6662f378af913022a439153f->enter($__internal_57b3079d890e56b4be92bddfe4214e9e0f79153a6662f378af913022a439153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_57b3079d890e56b4be92bddfe4214e9e0f79153a6662f378af913022a439153f->leave($__internal_57b3079d890e56b4be92bddfe4214e9e0f79153a6662f378af913022a439153f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
