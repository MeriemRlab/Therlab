<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7536de19938e94cd63a8f34e254b4061363d01f432f6269a59325c4a0a9458e0 extends Twig_Template
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
        $__internal_d4c267e4da52aa0737d8de7540917fea2d1bd9b9b21020da24ad86144afe9028 = $this->env->getExtension("native_profiler");
        $__internal_d4c267e4da52aa0737d8de7540917fea2d1bd9b9b21020da24ad86144afe9028->enter($__internal_d4c267e4da52aa0737d8de7540917fea2d1bd9b9b21020da24ad86144afe9028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d4c267e4da52aa0737d8de7540917fea2d1bd9b9b21020da24ad86144afe9028->leave($__internal_d4c267e4da52aa0737d8de7540917fea2d1bd9b9b21020da24ad86144afe9028_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
