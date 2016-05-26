<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_47f1d2827aa6f11e9c95577a79b3e242fa5f70466bc78b9b0b09ecccdd9764c8 extends Twig_Template
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
        $__internal_972f7db4b7cb8f4f19780e78a30f5d978ac77ab2e498e13ab7c61fe3b886a337 = $this->env->getExtension("native_profiler");
        $__internal_972f7db4b7cb8f4f19780e78a30f5d978ac77ab2e498e13ab7c61fe3b886a337->enter($__internal_972f7db4b7cb8f4f19780e78a30f5d978ac77ab2e498e13ab7c61fe3b886a337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_972f7db4b7cb8f4f19780e78a30f5d978ac77ab2e498e13ab7c61fe3b886a337->leave($__internal_972f7db4b7cb8f4f19780e78a30f5d978ac77ab2e498e13ab7c61fe3b886a337_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
