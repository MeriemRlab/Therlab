<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ac21541f70ab3a9894ea2b650781c5534deacebc571210838570093e9ca50259 extends Twig_Template
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
        $__internal_e9ae259796553a1140b976000b2df748797306b449045eab7cff3a1205e7389d = $this->env->getExtension("native_profiler");
        $__internal_e9ae259796553a1140b976000b2df748797306b449045eab7cff3a1205e7389d->enter($__internal_e9ae259796553a1140b976000b2df748797306b449045eab7cff3a1205e7389d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e9ae259796553a1140b976000b2df748797306b449045eab7cff3a1205e7389d->leave($__internal_e9ae259796553a1140b976000b2df748797306b449045eab7cff3a1205e7389d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
