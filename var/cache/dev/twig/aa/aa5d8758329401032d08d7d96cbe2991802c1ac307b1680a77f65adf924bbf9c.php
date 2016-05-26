<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_a3373a96ea9720e5f97c0bb4346078f8176c8a1ed2d7fdaa0411fa706ded797c extends Twig_Template
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
        $__internal_9524472a7fda5f0e06af1ea20ceafe93dc605b056938d133d2a0241de8aa09ea = $this->env->getExtension("native_profiler");
        $__internal_9524472a7fda5f0e06af1ea20ceafe93dc605b056938d133d2a0241de8aa09ea->enter($__internal_9524472a7fda5f0e06af1ea20ceafe93dc605b056938d133d2a0241de8aa09ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_9524472a7fda5f0e06af1ea20ceafe93dc605b056938d133d2a0241de8aa09ea->leave($__internal_9524472a7fda5f0e06af1ea20ceafe93dc605b056938d133d2a0241de8aa09ea_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
