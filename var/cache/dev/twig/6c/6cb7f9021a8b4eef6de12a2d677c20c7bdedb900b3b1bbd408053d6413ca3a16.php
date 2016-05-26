<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_fa5866a49e564505596cfd6ba5ef2985c4e1af832233bfd56ff26f8bfceb1636 extends Twig_Template
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
        $__internal_57d7c12f9106de040f1faa8504130d1128dc1a35fc908c20926cc1c39c0e0b49 = $this->env->getExtension("native_profiler");
        $__internal_57d7c12f9106de040f1faa8504130d1128dc1a35fc908c20926cc1c39c0e0b49->enter($__internal_57d7c12f9106de040f1faa8504130d1128dc1a35fc908c20926cc1c39c0e0b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_57d7c12f9106de040f1faa8504130d1128dc1a35fc908c20926cc1c39c0e0b49->leave($__internal_57d7c12f9106de040f1faa8504130d1128dc1a35fc908c20926cc1c39c0e0b49_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */
