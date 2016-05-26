<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_848607289208d5dece7e6978685378ff10cec870d10f2a96cb2f52c6a1e1227d extends Twig_Template
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
        $__internal_d1686d88584b1c873dc50aff8dfdfbf534f2ad5978797d0c93c4aec132a2b650 = $this->env->getExtension("native_profiler");
        $__internal_d1686d88584b1c873dc50aff8dfdfbf534f2ad5978797d0c93c4aec132a2b650->enter($__internal_d1686d88584b1c873dc50aff8dfdfbf534f2ad5978797d0c93c4aec132a2b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_d1686d88584b1c873dc50aff8dfdfbf534f2ad5978797d0c93c4aec132a2b650->leave($__internal_d1686d88584b1c873dc50aff8dfdfbf534f2ad5978797d0c93c4aec132a2b650_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */
