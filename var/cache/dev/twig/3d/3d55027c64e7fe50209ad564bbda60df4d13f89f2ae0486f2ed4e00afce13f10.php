<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_96e155f865da9cfa53881b47a6823d8c9b6d7b77ecffd9429da4529bc1ffb035 extends Twig_Template
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
        $__internal_0fc5d78d230f5c49c8f04d8f2e6a06dbda1403affaa4ee30179a4eeacb8a82fe = $this->env->getExtension("native_profiler");
        $__internal_0fc5d78d230f5c49c8f04d8f2e6a06dbda1403affaa4ee30179a4eeacb8a82fe->enter($__internal_0fc5d78d230f5c49c8f04d8f2e6a06dbda1403affaa4ee30179a4eeacb8a82fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0fc5d78d230f5c49c8f04d8f2e6a06dbda1403affaa4ee30179a4eeacb8a82fe->leave($__internal_0fc5d78d230f5c49c8f04d8f2e6a06dbda1403affaa4ee30179a4eeacb8a82fe_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
