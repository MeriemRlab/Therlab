<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_fb9e826348c91afd0a4c5197be178541ad356a245d3014e24c16777bea6513af extends Twig_Template
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
        $__internal_d1d0fe6232eea971c46761ff9df5f3d134210daec6e0500424db6944701e794c = $this->env->getExtension("native_profiler");
        $__internal_d1d0fe6232eea971c46761ff9df5f3d134210daec6e0500424db6944701e794c->enter($__internal_d1d0fe6232eea971c46761ff9df5f3d134210daec6e0500424db6944701e794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d1d0fe6232eea971c46761ff9df5f3d134210daec6e0500424db6944701e794c->leave($__internal_d1d0fe6232eea971c46761ff9df5f3d134210daec6e0500424db6944701e794c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
