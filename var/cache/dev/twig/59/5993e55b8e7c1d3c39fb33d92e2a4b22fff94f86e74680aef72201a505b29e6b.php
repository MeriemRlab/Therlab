<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_eff9215d572d628d902edbc1b95b5b5a67fb56b20a630351dd4c85f991845c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ba7bbd745ced602b9486843fefde269da0dfdd1903f7680a1d205c91f17e9560 = $this->env->getExtension("native_profiler");
        $__internal_ba7bbd745ced602b9486843fefde269da0dfdd1903f7680a1d205c91f17e9560->enter($__internal_ba7bbd745ced602b9486843fefde269da0dfdd1903f7680a1d205c91f17e9560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7bbd745ced602b9486843fefde269da0dfdd1903f7680a1d205c91f17e9560->leave($__internal_ba7bbd745ced602b9486843fefde269da0dfdd1903f7680a1d205c91f17e9560_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_723173e13ef67df956e17c2ec4ea522bdc5936bdeb2c10a93bd9af0cc49e6e9b = $this->env->getExtension("native_profiler");
        $__internal_723173e13ef67df956e17c2ec4ea522bdc5936bdeb2c10a93bd9af0cc49e6e9b->enter($__internal_723173e13ef67df956e17c2ec4ea522bdc5936bdeb2c10a93bd9af0cc49e6e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_723173e13ef67df956e17c2ec4ea522bdc5936bdeb2c10a93bd9af0cc49e6e9b->leave($__internal_723173e13ef67df956e17c2ec4ea522bdc5936bdeb2c10a93bd9af0cc49e6e9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
