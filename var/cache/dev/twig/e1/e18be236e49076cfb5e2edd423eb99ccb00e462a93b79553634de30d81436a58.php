<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f528734159d9e8de7dda58059cdaa2c71ba81da63a0d8a68263b8b13ece73fe2 extends Twig_Template
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
        $__internal_5bc889b43cb95bb31d8d0f0ef24c3ceed5a0db884a639d146eee72360a8121da = $this->env->getExtension("native_profiler");
        $__internal_5bc889b43cb95bb31d8d0f0ef24c3ceed5a0db884a639d146eee72360a8121da->enter($__internal_5bc889b43cb95bb31d8d0f0ef24c3ceed5a0db884a639d146eee72360a8121da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5bc889b43cb95bb31d8d0f0ef24c3ceed5a0db884a639d146eee72360a8121da->leave($__internal_5bc889b43cb95bb31d8d0f0ef24c3ceed5a0db884a639d146eee72360a8121da_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_782fd532904a0f669e8faea78887b1834ea13da55d7c07e4990948b836fd1e20 = $this->env->getExtension("native_profiler");
        $__internal_782fd532904a0f669e8faea78887b1834ea13da55d7c07e4990948b836fd1e20->enter($__internal_782fd532904a0f669e8faea78887b1834ea13da55d7c07e4990948b836fd1e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_782fd532904a0f669e8faea78887b1834ea13da55d7c07e4990948b836fd1e20->leave($__internal_782fd532904a0f669e8faea78887b1834ea13da55d7c07e4990948b836fd1e20_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_62ad10176488118c0dbccbf3caf9e2adf7f91c5659de3565c19f62d6792015a8 = $this->env->getExtension("native_profiler");
        $__internal_62ad10176488118c0dbccbf3caf9e2adf7f91c5659de3565c19f62d6792015a8->enter($__internal_62ad10176488118c0dbccbf3caf9e2adf7f91c5659de3565c19f62d6792015a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_62ad10176488118c0dbccbf3caf9e2adf7f91c5659de3565c19f62d6792015a8->leave($__internal_62ad10176488118c0dbccbf3caf9e2adf7f91c5659de3565c19f62d6792015a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4085951b44237996741f51233c61ab7179bb758bcfdb166a03270243713cd542 = $this->env->getExtension("native_profiler");
        $__internal_4085951b44237996741f51233c61ab7179bb758bcfdb166a03270243713cd542->enter($__internal_4085951b44237996741f51233c61ab7179bb758bcfdb166a03270243713cd542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4085951b44237996741f51233c61ab7179bb758bcfdb166a03270243713cd542->leave($__internal_4085951b44237996741f51233c61ab7179bb758bcfdb166a03270243713cd542_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
