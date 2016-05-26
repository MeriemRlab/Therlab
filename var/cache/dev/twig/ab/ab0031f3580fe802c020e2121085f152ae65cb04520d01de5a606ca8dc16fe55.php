<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e3f4a948deeb16cf6c5c23da6b717cb0124f17fe05e5c6bb97d5489edc2070b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_7db175ef9f9c206a6a2ffccd5657168f8dcf865bf37401f142fcef6117003df6 = $this->env->getExtension("native_profiler");
        $__internal_7db175ef9f9c206a6a2ffccd5657168f8dcf865bf37401f142fcef6117003df6->enter($__internal_7db175ef9f9c206a6a2ffccd5657168f8dcf865bf37401f142fcef6117003df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db175ef9f9c206a6a2ffccd5657168f8dcf865bf37401f142fcef6117003df6->leave($__internal_7db175ef9f9c206a6a2ffccd5657168f8dcf865bf37401f142fcef6117003df6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08d9ade441c565ce00802a4bc8ac4f7cf789b34ee1a5fdf23a242c06d91a1453 = $this->env->getExtension("native_profiler");
        $__internal_08d9ade441c565ce00802a4bc8ac4f7cf789b34ee1a5fdf23a242c06d91a1453->enter($__internal_08d9ade441c565ce00802a4bc8ac4f7cf789b34ee1a5fdf23a242c06d91a1453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_08d9ade441c565ce00802a4bc8ac4f7cf789b34ee1a5fdf23a242c06d91a1453->leave($__internal_08d9ade441c565ce00802a4bc8ac4f7cf789b34ee1a5fdf23a242c06d91a1453_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
