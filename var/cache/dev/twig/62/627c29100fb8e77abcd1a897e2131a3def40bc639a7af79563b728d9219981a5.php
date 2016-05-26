<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_a95ed79822819c866d8a51c889d92709be22f267d86f2e744b9fff1370468718 extends Twig_Template
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
        $__internal_e96bd9afe27137a37107b287a65f581c1e501ad9e8b892571f880a4d5ae972d2 = $this->env->getExtension("native_profiler");
        $__internal_e96bd9afe27137a37107b287a65f581c1e501ad9e8b892571f880a4d5ae972d2->enter($__internal_e96bd9afe27137a37107b287a65f581c1e501ad9e8b892571f880a4d5ae972d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_e96bd9afe27137a37107b287a65f581c1e501ad9e8b892571f880a4d5ae972d2->leave($__internal_e96bd9afe27137a37107b287a65f581c1e501ad9e8b892571f880a4d5ae972d2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  43 => 10,  36 => 7,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* {% if view == 'show' %}*/
/*     {% if value == true %}*/
/*         <span class="label label-success">{{ 'label.true'|trans }}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{{ 'label.false'|trans }}</span>*/
/*     {% endif %}*/
/* {% else %}*/
/*     <input type="checkbox" {{ value == true ? 'checked' : '' }}*/
/*        data-toggle="toggle" data-size="mini"*/
/*        data-onstyle="success" data-offstyle="danger"*/
/*        data-on="{{ 'label.true'|trans }}" data-off="{{ 'label.false'|trans }}">*/
/* {% endif %}*/
/* */
