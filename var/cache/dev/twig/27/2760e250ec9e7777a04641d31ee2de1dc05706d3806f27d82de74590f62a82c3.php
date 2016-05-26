<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c0b93471a8bd26b6ec8dfafae872be15bd531e817169f93bdb72a44ac257a8dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3af657e9464077c3d2639f68b134fabd97c57eb9aa5f2b50020497f9c477c4b8 = $this->env->getExtension("native_profiler");
        $__internal_3af657e9464077c3d2639f68b134fabd97c57eb9aa5f2b50020497f9c477c4b8->enter($__internal_3af657e9464077c3d2639f68b134fabd97c57eb9aa5f2b50020497f9c477c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af657e9464077c3d2639f68b134fabd97c57eb9aa5f2b50020497f9c477c4b8->leave($__internal_3af657e9464077c3d2639f68b134fabd97c57eb9aa5f2b50020497f9c477c4b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71688dc94166ff7d0ef9330c933a366a57df27feda77aa111cf043a1651a5186 = $this->env->getExtension("native_profiler");
        $__internal_71688dc94166ff7d0ef9330c933a366a57df27feda77aa111cf043a1651a5186->enter($__internal_71688dc94166ff7d0ef9330c933a366a57df27feda77aa111cf043a1651a5186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_71688dc94166ff7d0ef9330c933a366a57df27feda77aa111cf043a1651a5186->leave($__internal_71688dc94166ff7d0ef9330c933a366a57df27feda77aa111cf043a1651a5186_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
