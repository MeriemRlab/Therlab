<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_5441fd1aa1e2224296d844144dd23a1e5db6c7301fdecde59318e3ebcecf5b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea87442aa27ebe79c92a8e8fc6134e51e40ccc7bdf8c958654ce3b96305587b = $this->env->getExtension("native_profiler");
        $__internal_6ea87442aa27ebe79c92a8e8fc6134e51e40ccc7bdf8c958654ce3b96305587b->enter($__internal_6ea87442aa27ebe79c92a8e8fc6134e51e40ccc7bdf8c958654ce3b96305587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea87442aa27ebe79c92a8e8fc6134e51e40ccc7bdf8c958654ce3b96305587b->leave($__internal_6ea87442aa27ebe79c92a8e8fc6134e51e40ccc7bdf8c958654ce3b96305587b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_985b0c723caf359b43d77390d882fba046a972a66469f6f4ebd11b9db6680e0f = $this->env->getExtension("native_profiler");
        $__internal_985b0c723caf359b43d77390d882fba046a972a66469f6f4ebd11b9db6680e0f->enter($__internal_985b0c723caf359b43d77390d882fba046a972a66469f6f4ebd11b9db6680e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_985b0c723caf359b43d77390d882fba046a972a66469f6f4ebd11b9db6680e0f->leave($__internal_985b0c723caf359b43d77390d882fba046a972a66469f6f4ebd11b9db6680e0f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7564efe49e145e91228e9c561c7f8030b9dcdde50ced39f0ca633c2002e3db1f = $this->env->getExtension("native_profiler");
        $__internal_7564efe49e145e91228e9c561c7f8030b9dcdde50ced39f0ca633c2002e3db1f->enter($__internal_7564efe49e145e91228e9c561c7f8030b9dcdde50ced39f0ca633c2002e3db1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7564efe49e145e91228e9c561c7f8030b9dcdde50ced39f0ca633c2002e3db1f->leave($__internal_7564efe49e145e91228e9c561c7f8030b9dcdde50ced39f0ca633c2002e3db1f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e42922108bacb1b27bf687bc2ae8d03dade32b9f15b39bec23c089953adee32 = $this->env->getExtension("native_profiler");
        $__internal_5e42922108bacb1b27bf687bc2ae8d03dade32b9f15b39bec23c089953adee32->enter($__internal_5e42922108bacb1b27bf687bc2ae8d03dade32b9f15b39bec23c089953adee32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_5e42922108bacb1b27bf687bc2ae8d03dade32b9f15b39bec23c089953adee32->leave($__internal_5e42922108bacb1b27bf687bc2ae8d03dade32b9f15b39bec23c089953adee32_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6f2071b0d187ef3c17bc2020b37799e9376ebfe4f893d398dbfaaa80e8227ba = $this->env->getExtension("native_profiler");
        $__internal_a6f2071b0d187ef3c17bc2020b37799e9376ebfe4f893d398dbfaaa80e8227ba->enter($__internal_a6f2071b0d187ef3c17bc2020b37799e9376ebfe4f893d398dbfaaa80e8227ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_a6f2071b0d187ef3c17bc2020b37799e9376ebfe4f893d398dbfaaa80e8227ba->leave($__internal_a6f2071b0d187ef3c17bc2020b37799e9376ebfe4f893d398dbfaaa80e8227ba_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 45,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  115 => 25,  111 => 24,  107 => 23,  103 => 21,  97 => 17,  92 => 16,  86 => 15,  78 => 12,  75 => 11,  69 => 10,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreSphereConsoleBundle::base.html.twig'  %}*/
/* */
/* {% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/console.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}*/
/*     {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/coresphereconsole/js/console.js') }}"></script>*/
/*     <script>*/
/*         jQuery(function () {*/
/*             {% autoescape 'js' %}*/
/*             var coresphere_console = new CoreSphereConsole(*/
/*                 jQuery("#coresphere_consolebundle_console"), {*/
/*                 "commands" : {{ commands|keys|json_encode|raw }}.sort(),*/
/*                 "post_path" : "{{ path('console_exec') }}",*/
/*                 "environment" : "{{ environment }}",*/
/*                 "lang" : {*/
/*                     "loading" : "{{ 'coresphere_console.loading'|trans }}",*/
/*                     "suggestion_head" : "{{ 'coresphere_console.suggestion_head'|trans }}",*/
/*                     "environment" : "{{ 'coresphere_console.environment'|trans }}",*/
/*                     "empty_response" : "{{ 'coresphere_console.empty_response'|trans }}",*/
/*                     "welcome_message" : "{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\"console_command\">list</code>'}) }}"*/
/*                 },*/
/*                 "templates" : {*/
/*                     "error" : $("#template_console_error").text(),*/
/*                     "command" : $("#template_console_command").text(),*/
/*                     "environment" : $("#template_console_environment").text(),*/
/*                     "suggestion_list" : $('#template_suggestion_list').text(),*/
/*                     "loading" : $('#template_console_loading').text(),*/
/*                     "suggestion_item_active" : $('#suggestion_item_active').text(),*/
/*                     "suggestion_item" : $('#suggestion_item').text(),*/
/*                     "highlight" : $('#template_console_highlight').text().trim()*/
/*                 }*/
/*             });*/
/*             {% endautoescape %}*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
