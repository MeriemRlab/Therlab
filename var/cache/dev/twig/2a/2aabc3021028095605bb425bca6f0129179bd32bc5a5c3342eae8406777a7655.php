<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2fa5ae091d88176c22ad5d4a2c2e645d10c6aa2c7346bece2514d34cc13f9cdf extends Twig_Template
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
        $__internal_9a55ca1876408bac4ddc8392a5278ff117bb7b6ff964443bdd48852ebdb8863d = $this->env->getExtension("native_profiler");
        $__internal_9a55ca1876408bac4ddc8392a5278ff117bb7b6ff964443bdd48852ebdb8863d->enter($__internal_9a55ca1876408bac4ddc8392a5278ff117bb7b6ff964443bdd48852ebdb8863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9a55ca1876408bac4ddc8392a5278ff117bb7b6ff964443bdd48852ebdb8863d->leave($__internal_9a55ca1876408bac4ddc8392a5278ff117bb7b6ff964443bdd48852ebdb8863d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
