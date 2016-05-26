<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_3c91dcf6e9f3c78b91bdafa4a6f409242e28f2115683e1cd6a1785814e4c91b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f84bebc77627618743579ad87e2d8aabb55c0af8082231d10b3d6223d5ff3c = $this->env->getExtension("native_profiler");
        $__internal_c4f84bebc77627618743579ad87e2d8aabb55c0af8082231d10b3d6223d5ff3c->enter($__internal_c4f84bebc77627618743579ad87e2d8aabb55c0af8082231d10b3d6223d5ff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_c4f84bebc77627618743579ad87e2d8aabb55c0af8082231d10b3d6223d5ff3c->leave($__internal_c4f84bebc77627618743579ad87e2d8aabb55c0af8082231d10b3d6223d5ff3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9201f133aa33e87d81f469bf1bde5949258e507ca000948afb4133bed88a59d9 = $this->env->getExtension("native_profiler");
        $__internal_9201f133aa33e87d81f469bf1bde5949258e507ca000948afb4133bed88a59d9->enter($__internal_9201f133aa33e87d81f469bf1bde5949258e507ca000948afb4133bed88a59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_9201f133aa33e87d81f469bf1bde5949258e507ca000948afb4133bed88a59d9->leave($__internal_9201f133aa33e87d81f469bf1bde5949258e507ca000948afb4133bed88a59d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca4e810b9dfaab5f4355b3133cc1fab6ce52e735a77843ef4393e6d56ab81624 = $this->env->getExtension("native_profiler");
        $__internal_ca4e810b9dfaab5f4355b3133cc1fab6ce52e735a77843ef4393e6d56ab81624->enter($__internal_ca4e810b9dfaab5f4355b3133cc1fab6ce52e735a77843ef4393e6d56ab81624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_ca4e810b9dfaab5f4355b3133cc1fab6ce52e735a77843ef4393e6d56ab81624->leave($__internal_ca4e810b9dfaab5f4355b3133cc1fab6ce52e735a77843ef4393e6d56ab81624_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab1adbf6b101b5d9eacc92345bf45eb612fa83d8b9d79e55ad7e60a8dcbb17f = $this->env->getExtension("native_profiler");
        $__internal_1ab1adbf6b101b5d9eacc92345bf45eb612fa83d8b9d79e55ad7e60a8dcbb17f->enter($__internal_1ab1adbf6b101b5d9eacc92345bf45eb612fa83d8b9d79e55ad7e60a8dcbb17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_1ab1adbf6b101b5d9eacc92345bf45eb612fa83d8b9d79e55ad7e60a8dcbb17f->leave($__internal_1ab1adbf6b101b5d9eacc92345bf45eb612fa83d8b9d79e55ad7e60a8dcbb17f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_261749b85f88ad750c7d424d65646ac2228b1e6317879a907c06472a9555706a = $this->env->getExtension("native_profiler");
        $__internal_261749b85f88ad750c7d424d65646ac2228b1e6317879a907c06472a9555706a->enter($__internal_261749b85f88ad750c7d424d65646ac2228b1e6317879a907c06472a9555706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_261749b85f88ad750c7d424d65646ac2228b1e6317879a907c06472a9555706a->leave($__internal_261749b85f88ad750c7d424d65646ac2228b1e6317879a907c06472a9555706a_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title 'CoreSphere Console' %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/coresphereconsole/css/base.css') }}" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body '' %}*/
/*         {% block javascripts %}*/
/*             {# Load jQuery from Google CDN with a local fallback when not laded yet #}*/
/*             <script>*/
/*             window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"><\/script>')*/
/*             </script>*/
/*             <script>*/
/*             window.jQuery || document.write("<script src=\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\"><\/script>");*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
