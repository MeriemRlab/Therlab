<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_624355aa4018d810b44ad0c3d70f56a6ccba5de1f0f848263353d5d2e78b4015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0e7562f3ef29fd9372e9a72bc74de6e8dadbb7765ea7e79753f8a5ab349ded76 = $this->env->getExtension("native_profiler");
        $__internal_0e7562f3ef29fd9372e9a72bc74de6e8dadbb7765ea7e79753f8a5ab349ded76->enter($__internal_0e7562f3ef29fd9372e9a72bc74de6e8dadbb7765ea7e79753f8a5ab349ded76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7562f3ef29fd9372e9a72bc74de6e8dadbb7765ea7e79753f8a5ab349ded76->leave($__internal_0e7562f3ef29fd9372e9a72bc74de6e8dadbb7765ea7e79753f8a5ab349ded76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a023be1b14acab87ba25e65f81365d9f09ad28c729563f83c076a31feb760576 = $this->env->getExtension("native_profiler");
        $__internal_a023be1b14acab87ba25e65f81365d9f09ad28c729563f83c076a31feb760576->enter($__internal_a023be1b14acab87ba25e65f81365d9f09ad28c729563f83c076a31feb760576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a023be1b14acab87ba25e65f81365d9f09ad28c729563f83c076a31feb760576->leave($__internal_a023be1b14acab87ba25e65f81365d9f09ad28c729563f83c076a31feb760576_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
