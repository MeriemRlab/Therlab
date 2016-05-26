<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_733e8df15a49deac528a8797b010f43af9629f36e413eb1811dca02ad4c672ee extends Twig_Template
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
        $__internal_0287ea1a43b3b32bcecdd74df9ab0eb340e4ae786904036489db54318ed98a33 = $this->env->getExtension("native_profiler");
        $__internal_0287ea1a43b3b32bcecdd74df9ab0eb340e4ae786904036489db54318ed98a33->enter($__internal_0287ea1a43b3b32bcecdd74df9ab0eb340e4ae786904036489db54318ed98a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_0287ea1a43b3b32bcecdd74df9ab0eb340e4ae786904036489db54318ed98a33->leave($__internal_0287ea1a43b3b32bcecdd74df9ab0eb340e4ae786904036489db54318ed98a33_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if value == true %}*/
/*     <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/* {% else %}*/
/*     <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/* {% endif %}*/
/* */
