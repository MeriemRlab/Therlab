<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_032c2ef21b90d1d06f208fedb45802cfe6f8cebbfd8ee0ed5c3bec2eba68517f extends Twig_Template
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
        $__internal_e7141edb7be08fbeb9785acd9d941bcd4e9d76749dcab05acb46d72cae0e1065 = $this->env->getExtension("native_profiler");
        $__internal_e7141edb7be08fbeb9785acd9d941bcd4e9d76749dcab05acb46d72cae0e1065->enter($__internal_e7141edb7be08fbeb9785acd9d941bcd4e9d76749dcab05acb46d72cae0e1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e7141edb7be08fbeb9785acd9d941bcd4e9d76749dcab05acb46d72cae0e1065->leave($__internal_e7141edb7be08fbeb9785acd9d941bcd4e9d76749dcab05acb46d72cae0e1065_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
