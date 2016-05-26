<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3540d5f9aa4a29d54e309796d6807c761ed19d90ac838a7b49d7fb114d67973d extends Twig_Template
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
        $__internal_2d93d2d4f2218eaf8495453c3e70113548b80fb3d026a7c88c3facdbb8ddfb68 = $this->env->getExtension("native_profiler");
        $__internal_2d93d2d4f2218eaf8495453c3e70113548b80fb3d026a7c88c3facdbb8ddfb68->enter($__internal_2d93d2d4f2218eaf8495453c3e70113548b80fb3d026a7c88c3facdbb8ddfb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2d93d2d4f2218eaf8495453c3e70113548b80fb3d026a7c88c3facdbb8ddfb68->leave($__internal_2d93d2d4f2218eaf8495453c3e70113548b80fb3d026a7c88c3facdbb8ddfb68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
