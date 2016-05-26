<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f0a1bb16eb3a1311cfb8698ea723d6585be0237d1cd922dfd9f8dfb11f49c0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b1abdefc646fce379071909d609e7ecacc111713c07d8bffc764aaa63f039333 = $this->env->getExtension("native_profiler");
        $__internal_b1abdefc646fce379071909d609e7ecacc111713c07d8bffc764aaa63f039333->enter($__internal_b1abdefc646fce379071909d609e7ecacc111713c07d8bffc764aaa63f039333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1abdefc646fce379071909d609e7ecacc111713c07d8bffc764aaa63f039333->leave($__internal_b1abdefc646fce379071909d609e7ecacc111713c07d8bffc764aaa63f039333_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9abaf3e1b1e6ede85910322b7d7f0d827af1e8eaea4dd76dd4c9ddc1a4517eb8 = $this->env->getExtension("native_profiler");
        $__internal_9abaf3e1b1e6ede85910322b7d7f0d827af1e8eaea4dd76dd4c9ddc1a4517eb8->enter($__internal_9abaf3e1b1e6ede85910322b7d7f0d827af1e8eaea4dd76dd4c9ddc1a4517eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9abaf3e1b1e6ede85910322b7d7f0d827af1e8eaea4dd76dd4c9ddc1a4517eb8->leave($__internal_9abaf3e1b1e6ede85910322b7d7f0d827af1e8eaea4dd76dd4c9ddc1a4517eb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
