<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1a28aad38c2a0a558b5c1f9d5f041de7b4a894a7e947a885322555ef62888838 extends Twig_Template
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
        $__internal_bb54e665bf2ead82af48389717c56aa68738eb6b774c25370748b4769badd268 = $this->env->getExtension("native_profiler");
        $__internal_bb54e665bf2ead82af48389717c56aa68738eb6b774c25370748b4769badd268->enter($__internal_bb54e665bf2ead82af48389717c56aa68738eb6b774c25370748b4769badd268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bb54e665bf2ead82af48389717c56aa68738eb6b774c25370748b4769badd268->leave($__internal_bb54e665bf2ead82af48389717c56aa68738eb6b774c25370748b4769badd268_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
