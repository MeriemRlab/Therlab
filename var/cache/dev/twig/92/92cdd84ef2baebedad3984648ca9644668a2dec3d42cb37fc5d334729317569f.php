<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d9faa7909cec3cc1eb1296486536dcd3722a9ff160a12b7a102ee3fdab55dd6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_208f46a38c0a06d4c2d44331bba86ab545ddc969a421f4e7986066d484f3bfd8 = $this->env->getExtension("native_profiler");
        $__internal_208f46a38c0a06d4c2d44331bba86ab545ddc969a421f4e7986066d484f3bfd8->enter($__internal_208f46a38c0a06d4c2d44331bba86ab545ddc969a421f4e7986066d484f3bfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_208f46a38c0a06d4c2d44331bba86ab545ddc969a421f4e7986066d484f3bfd8->leave($__internal_208f46a38c0a06d4c2d44331bba86ab545ddc969a421f4e7986066d484f3bfd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55ed23a57c3eb74de3c4c8c31ee2b1f508a9b7e95259f7b25c3e2b829d3d10fe = $this->env->getExtension("native_profiler");
        $__internal_55ed23a57c3eb74de3c4c8c31ee2b1f508a9b7e95259f7b25c3e2b829d3d10fe->enter($__internal_55ed23a57c3eb74de3c4c8c31ee2b1f508a9b7e95259f7b25c3e2b829d3d10fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_55ed23a57c3eb74de3c4c8c31ee2b1f508a9b7e95259f7b25c3e2b829d3d10fe->leave($__internal_55ed23a57c3eb74de3c4c8c31ee2b1f508a9b7e95259f7b25c3e2b829d3d10fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
