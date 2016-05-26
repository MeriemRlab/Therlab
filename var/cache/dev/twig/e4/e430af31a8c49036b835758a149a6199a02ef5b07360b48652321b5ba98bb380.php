<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_b5052e1485decccef82a1a248e8e922ecab785fc8719900dda71c9609f384972 extends Twig_Template
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
        $__internal_4510c32ae4ef4e685cbcfbaa86bc85014132f689bd7f40e93f73526875775733 = $this->env->getExtension("native_profiler");
        $__internal_4510c32ae4ef4e685cbcfbaa86bc85014132f689bd7f40e93f73526875775733->enter($__internal_4510c32ae4ef4e685cbcfbaa86bc85014132f689bd7f40e93f73526875775733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_4510c32ae4ef4e685cbcfbaa86bc85014132f689bd7f40e93f73526875775733->leave($__internal_4510c32ae4ef4e685cbcfbaa86bc85014132f689bd7f40e93f73526875775733_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
