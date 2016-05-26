<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0785023e6131f880a0345d3544d2fcc704dc8bb23d57db4dba7951a76d7149ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c811ab6512fa38993e621f7e1ded53330288eb276f6418fbe68b131fc493a6 = $this->env->getExtension("native_profiler");
        $__internal_36c811ab6512fa38993e621f7e1ded53330288eb276f6418fbe68b131fc493a6->enter($__internal_36c811ab6512fa38993e621f7e1ded53330288eb276f6418fbe68b131fc493a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_36c811ab6512fa38993e621f7e1ded53330288eb276f6418fbe68b131fc493a6->leave($__internal_36c811ab6512fa38993e621f7e1ded53330288eb276f6418fbe68b131fc493a6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4298eefaa123dcc41fe6e08d51499ba06724fa2c9b7093cb37fa6c16137c916c = $this->env->getExtension("native_profiler");
        $__internal_4298eefaa123dcc41fe6e08d51499ba06724fa2c9b7093cb37fa6c16137c916c->enter($__internal_4298eefaa123dcc41fe6e08d51499ba06724fa2c9b7093cb37fa6c16137c916c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4298eefaa123dcc41fe6e08d51499ba06724fa2c9b7093cb37fa6c16137c916c->leave($__internal_4298eefaa123dcc41fe6e08d51499ba06724fa2c9b7093cb37fa6c16137c916c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ef1d5d17b3507b3759b18a3f5c33f5b2b81a9ffb8d118565c5aac16619e24fa2 = $this->env->getExtension("native_profiler");
        $__internal_ef1d5d17b3507b3759b18a3f5c33f5b2b81a9ffb8d118565c5aac16619e24fa2->enter($__internal_ef1d5d17b3507b3759b18a3f5c33f5b2b81a9ffb8d118565c5aac16619e24fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ef1d5d17b3507b3759b18a3f5c33f5b2b81a9ffb8d118565c5aac16619e24fa2->leave($__internal_ef1d5d17b3507b3759b18a3f5c33f5b2b81a9ffb8d118565c5aac16619e24fa2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1bb14bd458984c72acad0c365faf2a7b6366eab89028963b4c59d5486c94bf44 = $this->env->getExtension("native_profiler");
        $__internal_1bb14bd458984c72acad0c365faf2a7b6366eab89028963b4c59d5486c94bf44->enter($__internal_1bb14bd458984c72acad0c365faf2a7b6366eab89028963b4c59d5486c94bf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1bb14bd458984c72acad0c365faf2a7b6366eab89028963b4c59d5486c94bf44->leave($__internal_1bb14bd458984c72acad0c365faf2a7b6366eab89028963b4c59d5486c94bf44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
