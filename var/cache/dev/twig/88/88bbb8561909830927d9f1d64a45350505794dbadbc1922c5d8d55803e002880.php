<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_57bad714a472417873565189410c23e3e924e630efadbfef6c2a83e6e3dda912 extends Twig_Template
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
        $__internal_35fe66240a5290d42138351d8c56a2c9cebf4152268e6f9923c7ae9de27a01af = $this->env->getExtension("native_profiler");
        $__internal_35fe66240a5290d42138351d8c56a2c9cebf4152268e6f9923c7ae9de27a01af->enter($__internal_35fe66240a5290d42138351d8c56a2c9cebf4152268e6f9923c7ae9de27a01af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_35fe66240a5290d42138351d8c56a2c9cebf4152268e6f9923c7ae9de27a01af->leave($__internal_35fe66240a5290d42138351d8c56a2c9cebf4152268e6f9923c7ae9de27a01af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
