<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_7210c2343001939ccb6436eabc903fc4ec9b9fc311abc28538812257d2f532c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_0725a3bb764c392f6aac8c610823f3b1162efbee5777676c0a0a9f0a3af6b0e6 = $this->env->getExtension("native_profiler");
        $__internal_0725a3bb764c392f6aac8c610823f3b1162efbee5777676c0a0a9f0a3af6b0e6->enter($__internal_0725a3bb764c392f6aac8c610823f3b1162efbee5777676c0a0a9f0a3af6b0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0725a3bb764c392f6aac8c610823f3b1162efbee5777676c0a0a9f0a3af6b0e6->leave($__internal_0725a3bb764c392f6aac8c610823f3b1162efbee5777676c0a0a9f0a3af6b0e6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35c06b8d0d9c12f6f9299a5b044e5df8d9bb3e7a8bb86090c8b7633880e58255 = $this->env->getExtension("native_profiler");
        $__internal_35c06b8d0d9c12f6f9299a5b044e5df8d9bb3e7a8bb86090c8b7633880e58255->enter($__internal_35c06b8d0d9c12f6f9299a5b044e5df8d9bb3e7a8bb86090c8b7633880e58255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_35c06b8d0d9c12f6f9299a5b044e5df8d9bb3e7a8bb86090c8b7633880e58255->leave($__internal_35c06b8d0d9c12f6f9299a5b044e5df8d9bb3e7a8bb86090c8b7633880e58255_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
