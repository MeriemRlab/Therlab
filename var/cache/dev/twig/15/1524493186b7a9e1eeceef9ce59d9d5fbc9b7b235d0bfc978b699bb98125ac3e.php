<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_910695f1f79d2ec8526fffde8e72cbb84c487665d00886176f1014cf71daddf6 extends Twig_Template
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
        $__internal_5d2c996a3fb0d6e69c7bca50e4f2d550a2626484ea43d2242e2d7552e39000fe = $this->env->getExtension("native_profiler");
        $__internal_5d2c996a3fb0d6e69c7bca50e4f2d550a2626484ea43d2242e2d7552e39000fe->enter($__internal_5d2c996a3fb0d6e69c7bca50e4f2d550a2626484ea43d2242e2d7552e39000fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_5d2c996a3fb0d6e69c7bca50e4f2d550a2626484ea43d2242e2d7552e39000fe->leave($__internal_5d2c996a3fb0d6e69c7bca50e4f2d550a2626484ea43d2242e2d7552e39000fe_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */
