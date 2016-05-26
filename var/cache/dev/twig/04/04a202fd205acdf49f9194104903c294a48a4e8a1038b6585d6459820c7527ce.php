<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_52031be048c01e10045ca4fea919fe4fecc458b88aa3b7a18c18d2f3d5b37c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae30d18e375e71157082d3421bf38ccc5650ff6bb5ec7f1ecbe96666fc53e64c = $this->env->getExtension("native_profiler");
        $__internal_ae30d18e375e71157082d3421bf38ccc5650ff6bb5ec7f1ecbe96666fc53e64c->enter($__internal_ae30d18e375e71157082d3421bf38ccc5650ff6bb5ec7f1ecbe96666fc53e64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae30d18e375e71157082d3421bf38ccc5650ff6bb5ec7f1ecbe96666fc53e64c->leave($__internal_ae30d18e375e71157082d3421bf38ccc5650ff6bb5ec7f1ecbe96666fc53e64c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_551353e734b01cb3c3cede92907a730967b2760c80b47b3f73775223c0ab2049 = $this->env->getExtension("native_profiler");
        $__internal_551353e734b01cb3c3cede92907a730967b2760c80b47b3f73775223c0ab2049->enter($__internal_551353e734b01cb3c3cede92907a730967b2760c80b47b3f73775223c0ab2049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    The \"R\" Lab - 3D Models
  ";
        
        $__internal_551353e734b01cb3c3cede92907a730967b2760c80b47b3f73775223c0ab2049->leave($__internal_551353e734b01cb3c3cede92907a730967b2760c80b47b3f73775223c0ab2049_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_bc98ca68b2bfaeb4249133ef0ebbcafcbe74730dcf6ba6f7ce22f00720eaa71c = $this->env->getExtension("native_profiler");
        $__internal_bc98ca68b2bfaeb4249133ef0ebbcafcbe74730dcf6ba6f7ce22f00720eaa71c->enter($__internal_bc98ca68b2bfaeb4249133ef0ebbcafcbe74730dcf6ba6f7ce22f00720eaa71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t
  ";
        
        $__internal_bc98ca68b2bfaeb4249133ef0ebbcafcbe74730dcf6ba6f7ce22f00720eaa71c->leave($__internal_bc98ca68b2bfaeb4249133ef0ebbcafcbe74730dcf6ba6f7ce22f00720eaa71c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f0c8905bf62b548aa0dc93b08611cf20011114b2de537635cbb8eb3fe789ff = $this->env->getExtension("native_profiler");
        $__internal_a3f0c8905bf62b548aa0dc93b08611cf20011114b2de537635cbb8eb3fe789ff->enter($__internal_a3f0c8905bf62b548aa0dc93b08611cf20011114b2de537635cbb8eb3fe789ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div>
            ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 20
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 27
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 28
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        // line 33
        echo "
        <div>
            ";
        // line 35
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "        </div>


";
        
        $__internal_a3f0c8905bf62b548aa0dc93b08611cf20011114b2de537635cbb8eb3fe789ff->leave($__internal_a3f0c8905bf62b548aa0dc93b08611cf20011114b2de537635cbb8eb3fe789ff_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_506883e93603d36a5ce4c66687975a0f1a67a80e4072c41031a34d4c7fb3a2b6 = $this->env->getExtension("native_profiler");
        $__internal_506883e93603d36a5ce4c66687975a0f1a67a80e4072c41031a34d4c7fb3a2b6->enter($__internal_506883e93603d36a5ce4c66687975a0f1a67a80e4072c41031a34d4c7fb3a2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "            ";
        
        $__internal_506883e93603d36a5ce4c66687975a0f1a67a80e4072c41031a34d4c7fb3a2b6->leave($__internal_506883e93603d36a5ce4c66687975a0f1a67a80e4072c41031a34d4c7fb3a2b6_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_413230ac96e232302b4b2c1ee002c99a43ba47635278e2ae6381829eef47049d = $this->env->getExtension("native_profiler");
        $__internal_413230ac96e232302b4b2c1ee002c99a43ba47635278e2ae6381829eef47049d->enter($__internal_413230ac96e232302b4b2c1ee002c99a43ba47635278e2ae6381829eef47049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"></script>
";
        
        $__internal_413230ac96e232302b4b2c1ee002c99a43ba47635278e2ae6381829eef47049d->leave($__internal_413230ac96e232302b4b2c1ee002c99a43ba47635278e2ae6381829eef47049d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  173 => 42,  166 => 36,  160 => 35,  150 => 37,  148 => 35,  144 => 33,  141 => 32,  135 => 31,  126 => 28,  121 => 27,  116 => 26,  111 => 25,  109 => 24,  105 => 22,  97 => 20,  91 => 17,  87 => 16,  82 => 15,  80 => 14,  75 => 12,  69 => 11,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/*  {% block title %}*/
/*     The "R" Lab - 3D Models*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/* 	*/
/*   {% endblock %}*/
/* {% block body %}*/
/* {{ parent()}}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>*/
/* {% endblock %}*/
/* */
