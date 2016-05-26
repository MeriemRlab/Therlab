<?php

/* therlab/projects.html.twig~ */
class __TwigTemplate_36afda2880f8bd35765502e2d1cf64dd06cae1d6287072a7091e6c6145ce7b7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/projects.html.twig~", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a8f41822fad38e184ace63d3516599547a3de648da7a61cf4d5d43f8047150 = $this->env->getExtension("native_profiler");
        $__internal_09a8f41822fad38e184ace63d3516599547a3de648da7a61cf4d5d43f8047150->enter($__internal_09a8f41822fad38e184ace63d3516599547a3de648da7a61cf4d5d43f8047150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/projects.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a8f41822fad38e184ace63d3516599547a3de648da7a61cf4d5d43f8047150->leave($__internal_09a8f41822fad38e184ace63d3516599547a3de648da7a61cf4d5d43f8047150_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf39a5018acb934da468ace4229c5aad735a6f6a57614326f9974a0ab65a5f07 = $this->env->getExtension("native_profiler");
        $__internal_bf39a5018acb934da468ace4229c5aad735a6f6a57614326f9974a0ab65a5f07->enter($__internal_bf39a5018acb934da468ace4229c5aad735a6f6a57614326f9974a0ab65a5f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Projects
  ";
        
        $__internal_bf39a5018acb934da468ace4229c5aad735a6f6a57614326f9974a0ab65a5f07->leave($__internal_bf39a5018acb934da468ace4229c5aad735a6f6a57614326f9974a0ab65a5f07_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_9ba2f6f9cd966b5d42f2792d1255aa0fa94b295ad5fe286f94c56b9e90715a75 = $this->env->getExtension("native_profiler");
        $__internal_9ba2f6f9cd966b5d42f2792d1255aa0fa94b295ad5fe286f94c56b9e90715a75->enter($__internal_9ba2f6f9cd966b5d42f2792d1255aa0fa94b295ad5fe286f94c56b9e90715a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_9ba2f6f9cd966b5d42f2792d1255aa0fa94b295ad5fe286f94c56b9e90715a75->leave($__internal_9ba2f6f9cd966b5d42f2792d1255aa0fa94b295ad5fe286f94c56b9e90715a75_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c351afcb0c5be0e0a60d530bfda046df736c14419e22c982e9cef77b4be84d = $this->env->getExtension("native_profiler");
        $__internal_b9c351afcb0c5be0e0a60d530bfda046df736c14419e22c982e9cef77b4be84d->enter($__internal_b9c351afcb0c5be0e0a60d530bfda046df736c14419e22c982e9cef77b4be84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo " 
   ";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

     <!-- MAIN CONTAINER -->
    <div class=\"main-content\">
      <!-- HEADER TREE -->
      <section class=\"header-tree\" data-speed=\"8\" data-type=\"background\">
        <h2 class=\"hidden\">Header tree</h2>
        <!-- parallax background -->
        <div class=\"cover-7\" data-type=\"sprite\" data-offsetY=\"-250\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Projects</a></li>
                <li><a class=\"link\" href=\"#\">Current</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
        ";
        // line 43
        $context["classes"] = array(0 => "blue", 1 => "pattern-3", 2 => "white");
        // line 44
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 45
            echo "\t\t<section class=\"";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
\t\t\t\t
\t\t\t";
            // line 47
            echo twig_include($this->env, $context, "project.html.twig", array("project" => $context["project"]), false);
            echo "
\t\t
\t\t</section>\t\t
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "      

  ";
        
        $__internal_b9c351afcb0c5be0e0a60d530bfda046df736c14419e22c982e9cef77b4be84d->leave($__internal_b9c351afcb0c5be0e0a60d530bfda046df736c14419e22c982e9cef77b4be84d_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84fedff3d803ebd8853423cb553a15cd28902b25319f97dfed279c894a48dcf8 = $this->env->getExtension("native_profiler");
        $__internal_84fedff3d803ebd8853423cb553a15cd28902b25319f97dfed279c894a48dcf8->enter($__internal_84fedff3d803ebd8853423cb553a15cd28902b25319f97dfed279c894a48dcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_84fedff3d803ebd8853423cb553a15cd28902b25319f97dfed279c894a48dcf8->leave($__internal_84fedff3d803ebd8853423cb553a15cd28902b25319f97dfed279c894a48dcf8_prof);

    }

    public function getTemplateName()
    {
        return "therlab/projects.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  160 => 57,  151 => 51,  133 => 47,  127 => 45,  109 => 44,  107 => 43,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# projects.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Projects*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/*   {% endblock %}*/
/* */
/*   {% block body%}*/
/*  */
/*    {{ parent()}}*/
/* */
/*      <!-- MAIN CONTAINER -->*/
/*     <div class="main-content">*/
/*       <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-7" data-type="sprite" data-offsetY="-250" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Projects</a></li>*/
/*                 <li><a class="link" href="#">Current</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/*         {% set classes = ['blue', 'pattern-3', 'white'] %}*/
/*         {% for project in projects %}*/
/* 		<section class="{{ cycle(classes, loop.index) }}">*/
/* 				*/
/* 			{{ include ('project.html.twig' , {project: project}, with_context=false) }}*/
/* 		*/
/* 		</section>		*/
/* 	{% endfor %}*/
/*       */
/* */
/*   {% endblock %}*/
/*  */
/*     */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
