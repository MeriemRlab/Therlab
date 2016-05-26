<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_93348418943e4c071e87276e0d2e89fe3504d89bfecafe4272ab5e628d8a748e extends Twig_Template
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
        $__internal_82f5cc708ad6551d0070a7a216fe645abfdbce98cd822eadacfd00136301f8d6 = $this->env->getExtension("native_profiler");
        $__internal_82f5cc708ad6551d0070a7a216fe645abfdbce98cd822eadacfd00136301f8d6->enter($__internal_82f5cc708ad6551d0070a7a216fe645abfdbce98cd822eadacfd00136301f8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_82f5cc708ad6551d0070a7a216fe645abfdbce98cd822eadacfd00136301f8d6->leave($__internal_82f5cc708ad6551d0070a7a216fe645abfdbce98cd822eadacfd00136301f8d6_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */
