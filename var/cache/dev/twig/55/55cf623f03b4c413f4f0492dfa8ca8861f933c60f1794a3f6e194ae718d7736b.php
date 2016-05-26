<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_4c90a092b3ecd481815322d52c9b2fd4b81d6fdea29aa422e1f2565162c39da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e60f454a92b0fdd357e2b0f0f9a77fae73643e726bd12896c8a3cc9a39aca14e = $this->env->getExtension("native_profiler");
        $__internal_e60f454a92b0fdd357e2b0f0f9a77fae73643e726bd12896c8a3cc9a39aca14e->enter($__internal_e60f454a92b0fdd357e2b0f0f9a77fae73643e726bd12896c8a3cc9a39aca14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e60f454a92b0fdd357e2b0f0f9a77fae73643e726bd12896c8a3cc9a39aca14e->leave($__internal_e60f454a92b0fdd357e2b0f0f9a77fae73643e726bd12896c8a3cc9a39aca14e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37533f2ca47f66fdcf7afa316f65eb444422e0aef9dc8cee023e4b7cf74bfb0f = $this->env->getExtension("native_profiler");
        $__internal_37533f2ca47f66fdcf7afa316f65eb444422e0aef9dc8cee023e4b7cf74bfb0f->enter($__internal_37533f2ca47f66fdcf7afa316f65eb444422e0aef9dc8cee023e4b7cf74bfb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_37533f2ca47f66fdcf7afa316f65eb444422e0aef9dc8cee023e4b7cf74bfb0f->leave($__internal_37533f2ca47f66fdcf7afa316f65eb444422e0aef9dc8cee023e4b7cf74bfb0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
