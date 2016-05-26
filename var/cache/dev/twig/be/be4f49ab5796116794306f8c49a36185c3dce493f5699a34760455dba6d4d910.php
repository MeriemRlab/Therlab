<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_487fd0c8536c1213604ed4e287a83b81c96ee54164e850cb6193432ba50cbd6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ce44b47a7e4f694d4d8925183370a43286704ec1d0b61faf73f051b9917a97 = $this->env->getExtension("native_profiler");
        $__internal_f9ce44b47a7e4f694d4d8925183370a43286704ec1d0b61faf73f051b9917a97->enter($__internal_f9ce44b47a7e4f694d4d8925183370a43286704ec1d0b61faf73f051b9917a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f9ce44b47a7e4f694d4d8925183370a43286704ec1d0b61faf73f051b9917a97->leave($__internal_f9ce44b47a7e4f694d4d8925183370a43286704ec1d0b61faf73f051b9917a97_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_006eb93d39c55da92965115d22580b42195fe16eb211d4a268155afed6104d3a = $this->env->getExtension("native_profiler");
        $__internal_006eb93d39c55da92965115d22580b42195fe16eb211d4a268155afed6104d3a->enter($__internal_006eb93d39c55da92965115d22580b42195fe16eb211d4a268155afed6104d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_006eb93d39c55da92965115d22580b42195fe16eb211d4a268155afed6104d3a->leave($__internal_006eb93d39c55da92965115d22580b42195fe16eb211d4a268155afed6104d3a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
