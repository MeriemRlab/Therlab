<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_ef55480fd417d1e3452f0eac4da714df6a1fbf6bd704d6e7951fbe25780084a1 extends Twig_Template
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
        $__internal_941fbdf3909a10edae7f571d46143334f3b5cba35bc03c7b07cc4ddf9a9e70b4 = $this->env->getExtension("native_profiler");
        $__internal_941fbdf3909a10edae7f571d46143334f3b5cba35bc03c7b07cc4ddf9a9e70b4->enter($__internal_941fbdf3909a10edae7f571d46143334f3b5cba35bc03c7b07cc4ddf9a9e70b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_941fbdf3909a10edae7f571d46143334f3b5cba35bc03c7b07cc4ddf9a9e70b4->leave($__internal_941fbdf3909a10edae7f571d46143334f3b5cba35bc03c7b07cc4ddf9a9e70b4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a href="mailto:{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a href="mailto:{{ value }}">{{ value|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */
