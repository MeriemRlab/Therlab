<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_e5710284a53ea7819640065b792249a5232ca55b9ae92ce90673da51bf1b8f62 extends Twig_Template
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
        $__internal_6e94a05cd6ff97315cfd5e1e4aabf988cca0e4542f222fb5f87e29ce69363cf2 = $this->env->getExtension("native_profiler");
        $__internal_6e94a05cd6ff97315cfd5e1e4aabf988cca0e4542f222fb5f87e29ce69363cf2->enter($__internal_6e94a05cd6ff97315cfd5e1e4aabf988cca0e4542f222fb5f87e29ce69363cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6e94a05cd6ff97315cfd5e1e4aabf988cca0e4542f222fb5f87e29ce69363cf2->leave($__internal_6e94a05cd6ff97315cfd5e1e4aabf988cca0e4542f222fb5f87e29ce69363cf2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
