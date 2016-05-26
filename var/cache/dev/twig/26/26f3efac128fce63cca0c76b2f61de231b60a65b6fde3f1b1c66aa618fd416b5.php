<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_afa2fb2ee05f62de95a676dace4a7d19f3e4e9a01b93e041389c2b90e9c676aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_87f353aa04e2b2b437431d5295467e14ff12c48f9f58d0fd6110fb701649bc15 = $this->env->getExtension("native_profiler");
        $__internal_87f353aa04e2b2b437431d5295467e14ff12c48f9f58d0fd6110fb701649bc15->enter($__internal_87f353aa04e2b2b437431d5295467e14ff12c48f9f58d0fd6110fb701649bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f353aa04e2b2b437431d5295467e14ff12c48f9f58d0fd6110fb701649bc15->leave($__internal_87f353aa04e2b2b437431d5295467e14ff12c48f9f58d0fd6110fb701649bc15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856099ae9954dfd068067746cee622154ddb2809466ef91a5651c6630108c762 = $this->env->getExtension("native_profiler");
        $__internal_856099ae9954dfd068067746cee622154ddb2809466ef91a5651c6630108c762->enter($__internal_856099ae9954dfd068067746cee622154ddb2809466ef91a5651c6630108c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_856099ae9954dfd068067746cee622154ddb2809466ef91a5651c6630108c762->leave($__internal_856099ae9954dfd068067746cee622154ddb2809466ef91a5651c6630108c762_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
