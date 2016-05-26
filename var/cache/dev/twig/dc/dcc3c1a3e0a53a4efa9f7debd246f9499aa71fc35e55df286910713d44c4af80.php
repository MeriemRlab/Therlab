<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3ed7c9d1fa674e5e20e3e0e5fd038de52dcd1faf21050d4e5b8bdce88993b400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5b091e1608b8baa8d03c7c9de099f01080404c778452902dedd3c0ca46344aae = $this->env->getExtension("native_profiler");
        $__internal_5b091e1608b8baa8d03c7c9de099f01080404c778452902dedd3c0ca46344aae->enter($__internal_5b091e1608b8baa8d03c7c9de099f01080404c778452902dedd3c0ca46344aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b091e1608b8baa8d03c7c9de099f01080404c778452902dedd3c0ca46344aae->leave($__internal_5b091e1608b8baa8d03c7c9de099f01080404c778452902dedd3c0ca46344aae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca2f26b50c5bbf807b9913b8032a81d967578eca4816e28b4b3edd1ed76ec9a0 = $this->env->getExtension("native_profiler");
        $__internal_ca2f26b50c5bbf807b9913b8032a81d967578eca4816e28b4b3edd1ed76ec9a0->enter($__internal_ca2f26b50c5bbf807b9913b8032a81d967578eca4816e28b4b3edd1ed76ec9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ca2f26b50c5bbf807b9913b8032a81d967578eca4816e28b4b3edd1ed76ec9a0->leave($__internal_ca2f26b50c5bbf807b9913b8032a81d967578eca4816e28b4b3edd1ed76ec9a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
