<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9c3809bcad8c7acbb0b230f43b3edc42c361b5ebacaa8dbeae0297323497ec6d extends Twig_Template
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
        $__internal_97fead7fc84a017984f929e46055237ed9fb0ec180993c2ff74762397d1045fe = $this->env->getExtension("native_profiler");
        $__internal_97fead7fc84a017984f929e46055237ed9fb0ec180993c2ff74762397d1045fe->enter($__internal_97fead7fc84a017984f929e46055237ed9fb0ec180993c2ff74762397d1045fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97fead7fc84a017984f929e46055237ed9fb0ec180993c2ff74762397d1045fe->leave($__internal_97fead7fc84a017984f929e46055237ed9fb0ec180993c2ff74762397d1045fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
