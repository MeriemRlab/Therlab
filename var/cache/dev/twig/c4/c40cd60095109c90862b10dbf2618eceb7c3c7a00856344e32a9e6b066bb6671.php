<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_549327ecba8236cf1cc50278e469c721e68f6ba97ed9c11115e1b6146588920e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_df6063a87df9e7ddbe942a2dfcbfbf71a591abe87b388b25559322a1a813ce05 = $this->env->getExtension("native_profiler");
        $__internal_df6063a87df9e7ddbe942a2dfcbfbf71a591abe87b388b25559322a1a813ce05->enter($__internal_df6063a87df9e7ddbe942a2dfcbfbf71a591abe87b388b25559322a1a813ce05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6063a87df9e7ddbe942a2dfcbfbf71a591abe87b388b25559322a1a813ce05->leave($__internal_df6063a87df9e7ddbe942a2dfcbfbf71a591abe87b388b25559322a1a813ce05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5be272a4f37366bc44ce0ac7fb135ea103659ace1a63749d0aead78986e43ab = $this->env->getExtension("native_profiler");
        $__internal_d5be272a4f37366bc44ce0ac7fb135ea103659ace1a63749d0aead78986e43ab->enter($__internal_d5be272a4f37366bc44ce0ac7fb135ea103659ace1a63749d0aead78986e43ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d5be272a4f37366bc44ce0ac7fb135ea103659ace1a63749d0aead78986e43ab->leave($__internal_d5be272a4f37366bc44ce0ac7fb135ea103659ace1a63749d0aead78986e43ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
