<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a58770b2443e3ce738fdd5918eedd72af8e981d023d03f1c8bee4e57685fef67 extends Twig_Template
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
        $__internal_fbb48ce2aa76f3458c11c3b5ea8f0282d9173bedf5538b2d265d4b39d2ac1c84 = $this->env->getExtension("native_profiler");
        $__internal_fbb48ce2aa76f3458c11c3b5ea8f0282d9173bedf5538b2d265d4b39d2ac1c84->enter($__internal_fbb48ce2aa76f3458c11c3b5ea8f0282d9173bedf5538b2d265d4b39d2ac1c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fbb48ce2aa76f3458c11c3b5ea8f0282d9173bedf5538b2d265d4b39d2ac1c84->leave($__internal_fbb48ce2aa76f3458c11c3b5ea8f0282d9173bedf5538b2d265d4b39d2ac1c84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
