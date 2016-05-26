<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35a4172373749bc1c221aa97b3e3d2ab732259bab3253ab47a4ae03731b54eaa extends Twig_Template
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
        $__internal_79d0bcdb02c3a5d74d9f6bf2d0b308d20ab79bd91fc4cab4d47606fab7830362 = $this->env->getExtension("native_profiler");
        $__internal_79d0bcdb02c3a5d74d9f6bf2d0b308d20ab79bd91fc4cab4d47606fab7830362->enter($__internal_79d0bcdb02c3a5d74d9f6bf2d0b308d20ab79bd91fc4cab4d47606fab7830362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_79d0bcdb02c3a5d74d9f6bf2d0b308d20ab79bd91fc4cab4d47606fab7830362->leave($__internal_79d0bcdb02c3a5d74d9f6bf2d0b308d20ab79bd91fc4cab4d47606fab7830362_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
