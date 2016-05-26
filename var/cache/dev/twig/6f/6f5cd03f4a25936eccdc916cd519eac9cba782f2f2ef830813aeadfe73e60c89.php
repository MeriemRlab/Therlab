<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f3f27c64dd95d7de5a789809c5a32169a28bf14eab9be0374777d28c10ba837d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e9f8858a9f1db62a2f6781a5f0972d11dd08019a9bde03e0faa60326e6db793 = $this->env->getExtension("native_profiler");
        $__internal_6e9f8858a9f1db62a2f6781a5f0972d11dd08019a9bde03e0faa60326e6db793->enter($__internal_6e9f8858a9f1db62a2f6781a5f0972d11dd08019a9bde03e0faa60326e6db793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9f8858a9f1db62a2f6781a5f0972d11dd08019a9bde03e0faa60326e6db793->leave($__internal_6e9f8858a9f1db62a2f6781a5f0972d11dd08019a9bde03e0faa60326e6db793_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae1bd539a55c2739dd4ae796c85ad9a648783a66532f5da87c8c7bec7fa3e6e3 = $this->env->getExtension("native_profiler");
        $__internal_ae1bd539a55c2739dd4ae796c85ad9a648783a66532f5da87c8c7bec7fa3e6e3->enter($__internal_ae1bd539a55c2739dd4ae796c85ad9a648783a66532f5da87c8c7bec7fa3e6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ae1bd539a55c2739dd4ae796c85ad9a648783a66532f5da87c8c7bec7fa3e6e3->leave($__internal_ae1bd539a55c2739dd4ae796c85ad9a648783a66532f5da87c8c7bec7fa3e6e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fd58ca28aa02614535c4a6cbef11525219f51e7d9d75aad71e72a5ca35a6d1 = $this->env->getExtension("native_profiler");
        $__internal_f1fd58ca28aa02614535c4a6cbef11525219f51e7d9d75aad71e72a5ca35a6d1->enter($__internal_f1fd58ca28aa02614535c4a6cbef11525219f51e7d9d75aad71e72a5ca35a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1fd58ca28aa02614535c4a6cbef11525219f51e7d9d75aad71e72a5ca35a6d1->leave($__internal_f1fd58ca28aa02614535c4a6cbef11525219f51e7d9d75aad71e72a5ca35a6d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c13180e8eea34b651c700b6b751cb422fd8b3480e30098e5fa3c4257c885a4ba = $this->env->getExtension("native_profiler");
        $__internal_c13180e8eea34b651c700b6b751cb422fd8b3480e30098e5fa3c4257c885a4ba->enter($__internal_c13180e8eea34b651c700b6b751cb422fd8b3480e30098e5fa3c4257c885a4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c13180e8eea34b651c700b6b751cb422fd8b3480e30098e5fa3c4257c885a4ba->leave($__internal_c13180e8eea34b651c700b6b751cb422fd8b3480e30098e5fa3c4257c885a4ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
