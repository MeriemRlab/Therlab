<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_9790a6c0c1c51a8c5e28b8db1067a7f99084f7489733e9a6ee96f313c45f32bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f2d4e3349f6dbb7dc70b4d2f745fb177f82d45d6d3458ed5ba47322564e6fa5 = $this->env->getExtension("native_profiler");
        $__internal_8f2d4e3349f6dbb7dc70b4d2f745fb177f82d45d6d3458ed5ba47322564e6fa5->enter($__internal_8f2d4e3349f6dbb7dc70b4d2f745fb177f82d45d6d3458ed5ba47322564e6fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2d4e3349f6dbb7dc70b4d2f745fb177f82d45d6d3458ed5ba47322564e6fa5->leave($__internal_8f2d4e3349f6dbb7dc70b4d2f745fb177f82d45d6d3458ed5ba47322564e6fa5_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5061988815cc99e978874647085351b635e4923cf873613911c8d077998972d2 = $this->env->getExtension("native_profiler");
        $__internal_5061988815cc99e978874647085351b635e4923cf873613911c8d077998972d2->enter($__internal_5061988815cc99e978874647085351b635e4923cf873613911c8d077998972d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_5061988815cc99e978874647085351b635e4923cf873613911c8d077998972d2->leave($__internal_5061988815cc99e978874647085351b635e4923cf873613911c8d077998972d2_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_70704f8b774b580505cce9e313d487b34df56157b1d82d09140167a2d5fcd94c = $this->env->getExtension("native_profiler");
        $__internal_70704f8b774b580505cce9e313d487b34df56157b1d82d09140167a2d5fcd94c->enter($__internal_70704f8b774b580505cce9e313d487b34df56157b1d82d09140167a2d5fcd94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_70704f8b774b580505cce9e313d487b34df56157b1d82d09140167a2d5fcd94c->leave($__internal_70704f8b774b580505cce9e313d487b34df56157b1d82d09140167a2d5fcd94c_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5b7d6189ed3d6b936ca16503ca887a8f46c1cee55652757183d8f0f4fc662ac3 = $this->env->getExtension("native_profiler");
        $__internal_5b7d6189ed3d6b936ca16503ca887a8f46c1cee55652757183d8f0f4fc662ac3->enter($__internal_5b7d6189ed3d6b936ca16503ca887a8f46c1cee55652757183d8f0f4fc662ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5b7d6189ed3d6b936ca16503ca887a8f46c1cee55652757183d8f0f4fc662ac3->leave($__internal_5b7d6189ed3d6b936ca16503ca887a8f46c1cee55652757183d8f0f4fc662ac3_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_93439a86e83c82b03ce1aa7ef7cfd0c21a405064e8fb0611cfbe22e554cb14e7 = $this->env->getExtension("native_profiler");
        $__internal_93439a86e83c82b03ce1aa7ef7cfd0c21a405064e8fb0611cfbe22e554cb14e7->enter($__internal_93439a86e83c82b03ce1aa7ef7cfd0c21a405064e8fb0611cfbe22e554cb14e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_93439a86e83c82b03ce1aa7ef7cfd0c21a405064e8fb0611cfbe22e554cb14e7->leave($__internal_93439a86e83c82b03ce1aa7ef7cfd0c21a405064e8fb0611cfbe22e554cb14e7_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_0b9586a7336ea04da486251556e277af6f7469cb3961e8f17893f5a215e1157b = $this->env->getExtension("native_profiler");
        $__internal_0b9586a7336ea04da486251556e277af6f7469cb3961e8f17893f5a215e1157b->enter($__internal_0b9586a7336ea04da486251556e277af6f7469cb3961e8f17893f5a215e1157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_0b9586a7336ea04da486251556e277af6f7469cb3961e8f17893f5a215e1157b->leave($__internal_0b9586a7336ea04da486251556e277af6f7469cb3961e8f17893f5a215e1157b_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_cb9152416c5531f2861200659c028c858fb0fea7c456df543ec6c82579c4d3d3 = $this->env->getExtension("native_profiler");
        $__internal_cb9152416c5531f2861200659c028c858fb0fea7c456df543ec6c82579c4d3d3->enter($__internal_cb9152416c5531f2861200659c028c858fb0fea7c456df543ec6c82579c4d3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 25
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_cb9152416c5531f2861200659c028c858fb0fea7c456df543ec6c82579c4d3d3->leave($__internal_cb9152416c5531f2861200659c028c858fb0fea7c456df543ec6c82579c4d3d3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  126 => 25,  120 => 24,  110 => 20,  97 => 19,  91 => 18,  80 => 14,  77 => 13,  75 => 12,  69 => 11,  57 => 9,  45 => 8,  38 => 6,  36 => 4,  34 => 3,  32 => 1,  23 => 6,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
