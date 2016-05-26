<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_577cf71630da3de4c9e91269206ab2a79f1e014e14761e65e8d1d030f29b06b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header_logo' => array($this, 'block_header_logo'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d33e526ee3397fdb3913c08ec1bfa0d2e0a9392265a2d3f5be6f68ce480c943c = $this->env->getExtension("native_profiler");
        $__internal_d33e526ee3397fdb3913c08ec1bfa0d2e0a9392265a2d3f5be6f68ce480c943c->enter($__internal_d33e526ee3397fdb3913c08ec1bfa0d2e0a9392265a2d3f5be6f68ce480c943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>


    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "</html>
";
        
        $__internal_d33e526ee3397fdb3913c08ec1bfa0d2e0a9392265a2d3f5be6f68ce480c943c->leave($__internal_d33e526ee3397fdb3913c08ec1bfa0d2e0a9392265a2d3f5be6f68ce480c943c_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f4b0050f12d419891ab561f9c04dc6c5d16991a716b4736e3ae61b94c68cfbe9 = $this->env->getExtension("native_profiler");
        $__internal_f4b0050f12d419891ab561f9c04dc6c5d16991a716b4736e3ae61b94c68cfbe9->enter($__internal_f4b0050f12d419891ab561f9c04dc6c5d16991a716b4736e3ae61b94c68cfbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f4b0050f12d419891ab561f9c04dc6c5d16991a716b4736e3ae61b94c68cfbe9->leave($__internal_f4b0050f12d419891ab561f9c04dc6c5d16991a716b4736e3ae61b94c68cfbe9_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_9d02891728704424ad0d16347f2ae3e66dd00521e4c7343ffe887cc8bca0a240 = $this->env->getExtension("native_profiler");
        $__internal_9d02891728704424ad0d16347f2ae3e66dd00521e4c7343ffe887cc8bca0a240->enter($__internal_9d02891728704424ad0d16347f2ae3e66dd00521e4c7343ffe887cc8bca0a240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_9d02891728704424ad0d16347f2ae3e66dd00521e4c7343ffe887cc8bca0a240->leave($__internal_9d02891728704424ad0d16347f2ae3e66dd00521e4c7343ffe887cc8bca0a240_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_9b9219b4b26740c6fb2764b4bae8030300498a7af82106b22298d5f29cb66a7e = $this->env->getExtension("native_profiler");
        $__internal_9b9219b4b26740c6fb2764b4bae8030300498a7af82106b22298d5f29cb66a7e->enter($__internal_9b9219b4b26740c6fb2764b4bae8030300498a7af82106b22298d5f29cb66a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_9b9219b4b26740c6fb2764b4bae8030300498a7af82106b22298d5f29cb66a7e->leave($__internal_9b9219b4b26740c6fb2764b4bae8030300498a7af82106b22298d5f29cb66a7e_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_bb15cf2101fe27bf6dad582e67ee91c7e5f685eaec07961f856e5a3f5fc3a2da = $this->env->getExtension("native_profiler");
        $__internal_bb15cf2101fe27bf6dad582e67ee91c7e5f685eaec07961f856e5a3f5fc3a2da->enter($__internal_bb15cf2101fe27bf6dad582e67ee91c7e5f685eaec07961f856e5a3f5fc3a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 30
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 43
        echo "        ";
        
        $__internal_bb15cf2101fe27bf6dad582e67ee91c7e5f685eaec07961f856e5a3f5fc3a2da->leave($__internal_bb15cf2101fe27bf6dad582e67ee91c7e5f685eaec07961f856e5a3f5fc3a2da_prof);

    }

    // line 30
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_dff583cc9f0ff44966c512c437fbd06ba5419969fc6196dc148329fdd784833f = $this->env->getExtension("native_profiler");
        $__internal_dff583cc9f0ff44966c512c437fbd06ba5419969fc6196dc148329fdd784833f->enter($__internal_dff583cc9f0ff44966c512c437fbd06ba5419969fc6196dc148329fdd784833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 31
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'fast',
                        sidebarExpandOnHover: true,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_dff583cc9f0ff44966c512c437fbd06ba5419969fc6196dc148329fdd784833f->leave($__internal_dff583cc9f0ff44966c512c437fbd06ba5419969fc6196dc148329fdd784833f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c5287a68b21f88f8b979f54e4a8379a4d8782fc04abfd61c0959176752c8071 = $this->env->getExtension("native_profiler");
        $__internal_9c5287a68b21f88f8b979f54e4a8379a4d8782fc04abfd61c0959176752c8071->enter($__internal_9c5287a68b21f88f8b979f54e4a8379a4d8782fc04abfd61c0959176752c8071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini fixed ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 121
        echo "        </div>

        ";
        // line 123
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 124
        echo "
        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 126
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
    </body>
    ";
        
        $__internal_9c5287a68b21f88f8b979f54e4a8379a4d8782fc04abfd61c0959176752c8071->leave($__internal_9c5287a68b21f88f8b979f54e4a8379a4d8782fc04abfd61c0959176752c8071_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ef23c208b2086373bc119b3fb126e23f5a4a612a734767b545d79299a961f477 = $this->env->getExtension("native_profiler");
        $__internal_ef23c208b2086373bc119b3fb126e23f5a4a612a734767b545d79299a961f477->enter($__internal_ef23c208b2086373bc119b3fb126e23f5a4a612a734767b545d79299a961f477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_ef23c208b2086373bc119b3fb126e23f5a4a612a734767b545d79299a961f477->leave($__internal_ef23c208b2086373bc119b3fb126e23f5a4a612a734767b545d79299a961f477_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8072a026befb5eca76767e81282579cafeb36fb4ac8746f22c22c7d8005e1b51 = $this->env->getExtension("native_profiler");
        $__internal_8072a026befb5eca76767e81282579cafeb36fb4ac8746f22c22c7d8005e1b51->enter($__internal_8072a026befb5eca76767e81282579cafeb36fb4ac8746f22c22c7d8005e1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_8072a026befb5eca76767e81282579cafeb36fb4ac8746f22c22c7d8005e1b51->leave($__internal_8072a026befb5eca76767e81282579cafeb36fb4ac8746f22c22c7d8005e1b51_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_9f53699c9e87c0e1e959fa39c03e8d4c920e350c54a8b7535767d4dcd48ce50e = $this->env->getExtension("native_profiler");
        $__internal_9f53699c9e87c0e1e959fa39c03e8d4c920e350c54a8b7535767d4dcd48ce50e->enter($__internal_9f53699c9e87c0e1e959fa39c03e8d4c920e350c54a8b7535767d4dcd48ce50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
                <div id=\"header-logo\">
                    ";
        // line 58
        $this->displayBlock('header_logo', $context, $blocks);
        // line 64
        echo "                </div>

                <nav class=\"navbar navbar-fixed-top\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 73
        $this->displayBlock('user_menu', $context, $blocks);
        // line 82
        echo "                            </li>
\t\t\t    <li ><a style=\"color: red;font-weight: bold;\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" title=\"logout\">logout</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 90
        $this->displayBlock('sidebar', $context, $blocks);
        // line 101
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 119
        echo "            </div>
        ";
        
        $__internal_9f53699c9e87c0e1e959fa39c03e8d4c920e350c54a8b7535767d4dcd48ce50e->leave($__internal_9f53699c9e87c0e1e959fa39c03e8d4c920e350c54a8b7535767d4dcd48ce50e_prof);

    }

    // line 58
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_38734e7243664559927f97274540fbb69e37d20a7cd65c4a994fecd1a11367d8 = $this->env->getExtension("native_profiler");
        $__internal_38734e7243664559927f97274540fbb69e37d20a7cd65c4a994fecd1a11367d8->enter($__internal_38734e7243664559927f97274540fbb69e37d20a7cd65c4a994fecd1a11367d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 59
        echo "                        <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                            <span class=\"logo-mini\">";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_first($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")))), "html", null, true);
        echo "</span>
                            <span class=\"logo-lg\">";
        // line 61
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "</span>
                        </a>
                    ";
        
        $__internal_38734e7243664559927f97274540fbb69e37d20a7cd65c4a994fecd1a11367d8->leave($__internal_38734e7243664559927f97274540fbb69e37d20a7cd65c4a994fecd1a11367d8_prof);

    }

    // line 73
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_095d5f82a40554801cabf8cbaf7e25909ed4b0e35a608d8d57fab81a9f9450c7 = $this->env->getExtension("native_profiler");
        $__internal_095d5f82a40554801cabf8cbaf7e25909ed4b0e35a608d8d57fab81a9f9450c7->enter($__internal_095d5f82a40554801cabf8cbaf7e25909ed4b0e35a608d8d57fab81a9f9450c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 74
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 76
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 77
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 79
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 81
        echo "                                ";
        
        $__internal_095d5f82a40554801cabf8cbaf7e25909ed4b0e35a608d8d57fab81a9f9450c7->leave($__internal_095d5f82a40554801cabf8cbaf7e25909ed4b0e35a608d8d57fab81a9f9450c7_prof);

    }

    // line 90
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3471a88ab862da008d3aee800046787deecf7958c6ba1ff2ef3d4313bd87d1c9 = $this->env->getExtension("native_profiler");
        $__internal_3471a88ab862da008d3aee800046787deecf7958c6ba1ff2ef3d4313bd87d1c9->enter($__internal_3471a88ab862da008d3aee800046787deecf7958c6ba1ff2ef3d4313bd87d1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 91
        echo "                <section class=\"sidebar\">
                    ";
        // line 92
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 99
        echo "                </section>
            ";
        
        $__internal_3471a88ab862da008d3aee800046787deecf7958c6ba1ff2ef3d4313bd87d1c9->leave($__internal_3471a88ab862da008d3aee800046787deecf7958c6ba1ff2ef3d4313bd87d1c9_prof);

    }

    // line 92
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_1b2913ca59c1223ff378fed543f398ceea65e9e11f66df6d68d0b54077ab9532 = $this->env->getExtension("native_profiler");
        $__internal_1b2913ca59c1223ff378fed543f398ceea65e9e11f66df6d68d0b54077ab9532->enter($__internal_1b2913ca59c1223ff378fed543f398ceea65e9e11f66df6d68d0b54077ab9532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 93
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 94
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 97
        echo "
                    ";
        
        $__internal_1b2913ca59c1223ff378fed543f398ceea65e9e11f66df6d68d0b54077ab9532->leave($__internal_1b2913ca59c1223ff378fed543f398ceea65e9e11f66df6d68d0b54077ab9532_prof);

    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b99cc84540c776ac54e4ab987636adfb3f1bc6a72842ae17d94e9ed0cb4e2e6 = $this->env->getExtension("native_profiler");
        $__internal_5b99cc84540c776ac54e4ab987636adfb3f1bc6a72842ae17d94e9ed0cb4e2e6->enter($__internal_5b99cc84540c776ac54e4ab987636adfb3f1bc6a72842ae17d94e9ed0cb4e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 105
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 108
        echo "
                <section class=\"content-header\">
                ";
        // line 110
        $this->displayBlock('content_header', $context, $blocks);
        // line 113
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 116
        $this->displayBlock('main', $context, $blocks);
        // line 117
        echo "                </section>
            ";
        
        $__internal_5b99cc84540c776ac54e4ab987636adfb3f1bc6a72842ae17d94e9ed0cb4e2e6->leave($__internal_5b99cc84540c776ac54e4ab987636adfb3f1bc6a72842ae17d94e9ed0cb4e2e6_prof);

    }

    // line 105
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_2cd94ee1203d59007b901986a8cd901447c0fe4e4095595945e2737cd580e6e1 = $this->env->getExtension("native_profiler");
        $__internal_2cd94ee1203d59007b901986a8cd901447c0fe4e4095595945e2737cd580e6e1->enter($__internal_2cd94ee1203d59007b901986a8cd901447c0fe4e4095595945e2737cd580e6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 106
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_2cd94ee1203d59007b901986a8cd901447c0fe4e4095595945e2737cd580e6e1->leave($__internal_2cd94ee1203d59007b901986a8cd901447c0fe4e4095595945e2737cd580e6e1_prof);

    }

    // line 110
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_126def08ed1d124084024c740af114bfb8fa2a3d31a8f2d604d175f1a248cf3a = $this->env->getExtension("native_profiler");
        $__internal_126def08ed1d124084024c740af114bfb8fa2a3d31a8f2d604d175f1a248cf3a->enter($__internal_126def08ed1d124084024c740af114bfb8fa2a3d31a8f2d604d175f1a248cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 111
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_126def08ed1d124084024c740af114bfb8fa2a3d31a8f2d604d175f1a248cf3a->leave($__internal_126def08ed1d124084024c740af114bfb8fa2a3d31a8f2d604d175f1a248cf3a_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c4028b3f6e3041aea09ad8ad8d192107de042f51959b3dc17c42c90bb907ecc9 = $this->env->getExtension("native_profiler");
        $__internal_c4028b3f6e3041aea09ad8ad8d192107de042f51959b3dc17c42c90bb907ecc9->enter($__internal_c4028b3f6e3041aea09ad8ad8d192107de042f51959b3dc17c42c90bb907ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_c4028b3f6e3041aea09ad8ad8d192107de042f51959b3dc17c42c90bb907ecc9->leave($__internal_c4028b3f6e3041aea09ad8ad8d192107de042f51959b3dc17c42c90bb907ecc9_prof);

    }

    // line 116
    public function block_main($context, array $blocks = array())
    {
        $__internal_10638a71a28bca27439f437d28d5db74f1e1dd90557b5b4dec609a3a34601509 = $this->env->getExtension("native_profiler");
        $__internal_10638a71a28bca27439f437d28d5db74f1e1dd90557b5b4dec609a3a34601509->enter($__internal_10638a71a28bca27439f437d28d5db74f1e1dd90557b5b4dec609a3a34601509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_10638a71a28bca27439f437d28d5db74f1e1dd90557b5b4dec609a3a34601509->leave($__internal_10638a71a28bca27439f437d28d5db74f1e1dd90557b5b4dec609a3a34601509_prof);

    }

    // line 123
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6da10b242ed202ca92257b3b0e502b384fb9350a5c934c78a14dd97d54a2485b = $this->env->getExtension("native_profiler");
        $__internal_6da10b242ed202ca92257b3b0e502b384fb9350a5c934c78a14dd97d54a2485b->enter($__internal_6da10b242ed202ca92257b3b0e502b384fb9350a5c934c78a14dd97d54a2485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_6da10b242ed202ca92257b3b0e502b384fb9350a5c934c78a14dd97d54a2485b->leave($__internal_6da10b242ed202ca92257b3b0e502b384fb9350a5c934c78a14dd97d54a2485b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 123,  512 => 116,  492 => 111,  486 => 110,  476 => 106,  470 => 105,  462 => 117,  460 => 116,  455 => 113,  453 => 110,  449 => 108,  446 => 105,  440 => 104,  432 => 97,  430 => 94,  428 => 93,  422 => 92,  414 => 99,  412 => 92,  409 => 91,  403 => 90,  396 => 81,  390 => 79,  384 => 77,  382 => 76,  376 => 74,  370 => 73,  360 => 61,  356 => 60,  347 => 59,  341 => 58,  333 => 119,  331 => 104,  326 => 101,  324 => 90,  314 => 83,  311 => 82,  309 => 73,  301 => 68,  295 => 64,  293 => 58,  289 => 56,  283 => 55,  262 => 53,  253 => 128,  244 => 126,  240 => 125,  237 => 124,  235 => 123,  231 => 121,  229 => 55,  219 => 53,  213 => 52,  195 => 31,  189 => 30,  182 => 43,  180 => 30,  174 => 28,  168 => 27,  156 => 24,  153 => 23,  147 => 22,  137 => 14,  131 => 12,  125 => 11,  113 => 9,  105 => 131,  103 => 52,  95 => 47,  91 => 46,  87 => 44,  85 => 27,  82 => 26,  80 => 22,  77 => 21,  68 => 19,  64 => 18,  61 => 17,  59 => 11,  54 => 9,  44 => 2,  41 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/* */
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'fast',*/
/*                         sidebarExpandOnHover: true,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/*         {% endblock head_javascript %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini fixed {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*                 <div id="header-logo">*/
/*                     {% block header_logo %}*/
/*                         <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                             <span class="logo-mini">{{ easyadmin_config('site_name')|striptags|first|upper }}</span>*/
/*                             <span class="logo-lg">{{ easyadmin_config('site_name')|raw }}</span>*/
/*                         </a>*/
/*                     {% endblock header_logo %}*/
/*                 </div>*/
/* */
/*                 <nav class="navbar navbar-fixed-top" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/* 			    <li ><a style="color: red;font-weight: bold;" href="{{ path('fos_user_security_logout') }}" title="logout">logout</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/* */
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */
