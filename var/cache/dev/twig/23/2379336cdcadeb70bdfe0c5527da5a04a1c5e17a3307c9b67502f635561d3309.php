<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a5addcb54f99011d5f2b86be9d2a3538feca8d20055e5a8cf0a7913c969c761a extends Twig_Template
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
        $__internal_c176e5489165c440d2f07ed6963190940e8d4bd91fe1c1053fd165c4774e47d2 = $this->env->getExtension("native_profiler");
        $__internal_c176e5489165c440d2f07ed6963190940e8d4bd91fe1c1053fd165c4774e47d2->enter($__internal_c176e5489165c440d2f07ed6963190940e8d4bd91fe1c1053fd165c4774e47d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c176e5489165c440d2f07ed6963190940e8d4bd91fe1c1053fd165c4774e47d2->leave($__internal_c176e5489165c440d2f07ed6963190940e8d4bd91fe1c1053fd165c4774e47d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
