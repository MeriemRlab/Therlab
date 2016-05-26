<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_dd706ebb6452e5c549ae14b3053c217cffbcb97d4350ede9f416fc73664a0df9 extends Twig_Template
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
        $__internal_d5a1628e31a8263eef6c059a0cbcc5b5678966ea02454468939c4055d5e87a1d = $this->env->getExtension("native_profiler");
        $__internal_d5a1628e31a8263eef6c059a0cbcc5b5678966ea02454468939c4055d5e87a1d->enter($__internal_d5a1628e31a8263eef6c059a0cbcc5b5678966ea02454468939c4055d5e87a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_d5a1628e31a8263eef6c059a0cbcc5b5678966ea02454468939c4055d5e87a1d->leave($__internal_d5a1628e31a8263eef6c059a0cbcc5b5678966ea02454468939c4055d5e87a1d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
