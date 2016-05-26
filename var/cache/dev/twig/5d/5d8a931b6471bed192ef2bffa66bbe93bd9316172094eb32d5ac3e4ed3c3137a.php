<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_d5e8c24219e205e3683e3fe2e96159ab3ca0f7e8f30dd9798479e8b99d0f4e27 extends Twig_Template
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
        $__internal_1aba3b28a3e301a1b4505b95d45a1ef1484c2c36392030463fd65c1a789e1133 = $this->env->getExtension("native_profiler");
        $__internal_1aba3b28a3e301a1b4505b95d45a1ef1484c2c36392030463fd65c1a789e1133->enter($__internal_1aba3b28a3e301a1b4505b95d45a1ef1484c2c36392030463fd65c1a789e1133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_1aba3b28a3e301a1b4505b95d45a1ef1484c2c36392030463fd65c1a789e1133->leave($__internal_1aba3b28a3e301a1b4505b95d45a1ef1484c2c36392030463fd65c1a789e1133_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
