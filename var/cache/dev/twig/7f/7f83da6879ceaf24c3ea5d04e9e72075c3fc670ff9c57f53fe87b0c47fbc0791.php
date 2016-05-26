<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5b70a3127c5d53c2b48925be172ab21b2aaff3a42f2860929dd813280b1ae679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ba75ba31dc35b7ca34bdf065e339f38e43198bc481e64627779670ffa21487d8 = $this->env->getExtension("native_profiler");
        $__internal_ba75ba31dc35b7ca34bdf065e339f38e43198bc481e64627779670ffa21487d8->enter($__internal_ba75ba31dc35b7ca34bdf065e339f38e43198bc481e64627779670ffa21487d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba75ba31dc35b7ca34bdf065e339f38e43198bc481e64627779670ffa21487d8->leave($__internal_ba75ba31dc35b7ca34bdf065e339f38e43198bc481e64627779670ffa21487d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b782249f7e81237809bf3a3b6512752dfc57b536eeb412c8fb1dd76f1fdd8b3 = $this->env->getExtension("native_profiler");
        $__internal_6b782249f7e81237809bf3a3b6512752dfc57b536eeb412c8fb1dd76f1fdd8b3->enter($__internal_6b782249f7e81237809bf3a3b6512752dfc57b536eeb412c8fb1dd76f1fdd8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6b782249f7e81237809bf3a3b6512752dfc57b536eeb412c8fb1dd76f1fdd8b3->leave($__internal_6b782249f7e81237809bf3a3b6512752dfc57b536eeb412c8fb1dd76f1fdd8b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
