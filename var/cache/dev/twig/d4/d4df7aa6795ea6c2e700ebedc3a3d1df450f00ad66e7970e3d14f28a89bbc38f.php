<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_65773f2fb3308618f65e2cddaa058e2419f8018913cdcb1d6d267f0294c9eba8 extends Twig_Template
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
        $__internal_f982ad2e94d402fe24f29d5f21fa8019473f43e3747171dc175d35e5a4fa5de2 = $this->env->getExtension("native_profiler");
        $__internal_f982ad2e94d402fe24f29d5f21fa8019473f43e3747171dc175d35e5a4fa5de2->enter($__internal_f982ad2e94d402fe24f29d5f21fa8019473f43e3747171dc175d35e5a4fa5de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f982ad2e94d402fe24f29d5f21fa8019473f43e3747171dc175d35e5a4fa5de2->leave($__internal_f982ad2e94d402fe24f29d5f21fa8019473f43e3747171dc175d35e5a4fa5de2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */
