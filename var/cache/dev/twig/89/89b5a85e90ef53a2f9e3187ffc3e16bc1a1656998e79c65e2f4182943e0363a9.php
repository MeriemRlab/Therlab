<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_c9c9c18d46f3fcfa2422c98a1c30fa9abac92194ce383e7c2d11244381773524 extends Twig_Template
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
        $__internal_32f1b62617a20102fbb8edd357e751c0d654f67eaceb833c22c8ee3a0167b3f2 = $this->env->getExtension("native_profiler");
        $__internal_32f1b62617a20102fbb8edd357e751c0d654f67eaceb833c22c8ee3a0167b3f2->enter($__internal_32f1b62617a20102fbb8edd357e751c0d654f67eaceb833c22c8ee3a0167b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_32f1b62617a20102fbb8edd357e751c0d654f67eaceb833c22c8ee3a0167b3f2->leave($__internal_32f1b62617a20102fbb8edd357e751c0d654f67eaceb833c22c8ee3a0167b3f2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */
