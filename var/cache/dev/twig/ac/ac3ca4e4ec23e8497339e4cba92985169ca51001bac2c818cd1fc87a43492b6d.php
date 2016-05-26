<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5816c249c3d97087c14ecbdbe2b21419bcb612c0a0833485c3273c5f0d7241e9 extends Twig_Template
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
        $__internal_e3a3c9586b56135bfa260f808454f06ee99432d837cab9b24cdd10b60efe01ff = $this->env->getExtension("native_profiler");
        $__internal_e3a3c9586b56135bfa260f808454f06ee99432d837cab9b24cdd10b60efe01ff->enter($__internal_e3a3c9586b56135bfa260f808454f06ee99432d837cab9b24cdd10b60efe01ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e3a3c9586b56135bfa260f808454f06ee99432d837cab9b24cdd10b60efe01ff->leave($__internal_e3a3c9586b56135bfa260f808454f06ee99432d837cab9b24cdd10b60efe01ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
