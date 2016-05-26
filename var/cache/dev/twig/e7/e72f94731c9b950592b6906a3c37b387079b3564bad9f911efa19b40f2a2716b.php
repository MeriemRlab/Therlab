<?php

/* :therlab:consulting.html.twig */
class __TwigTemplate_b8d3307a3ff9f90b2150d75616c77052ba71b978ce601d6c361b7f2ffbcefcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:consulting.html.twig", 3);
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
        $__internal_0e36e007333dc04d0a250dc83a3b613d788b81f0ba6734e8aa2efbf7f81dd9b5 = $this->env->getExtension("native_profiler");
        $__internal_0e36e007333dc04d0a250dc83a3b613d788b81f0ba6734e8aa2efbf7f81dd9b5->enter($__internal_0e36e007333dc04d0a250dc83a3b613d788b81f0ba6734e8aa2efbf7f81dd9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:consulting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e36e007333dc04d0a250dc83a3b613d788b81f0ba6734e8aa2efbf7f81dd9b5->leave($__internal_0e36e007333dc04d0a250dc83a3b613d788b81f0ba6734e8aa2efbf7f81dd9b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7709ce60207dfedab9f1daa2c5327d357b216436a599382da1f96a0d0e4b32e = $this->env->getExtension("native_profiler");
        $__internal_a7709ce60207dfedab9f1daa2c5327d357b216436a599382da1f96a0d0e4b32e->enter($__internal_a7709ce60207dfedab9f1daa2c5327d357b216436a599382da1f96a0d0e4b32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Consulting
  ";
        
        $__internal_a7709ce60207dfedab9f1daa2c5327d357b216436a599382da1f96a0d0e4b32e->leave($__internal_a7709ce60207dfedab9f1daa2c5327d357b216436a599382da1f96a0d0e4b32e_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_ed9f3744d258b731f0f290bc6c7615e8618654380a50eca30c6dd43306b6c859 = $this->env->getExtension("native_profiler");
        $__internal_ed9f3744d258b731f0f290bc6c7615e8618654380a50eca30c6dd43306b6c859->enter($__internal_ed9f3744d258b731f0f290bc6c7615e8618654380a50eca30c6dd43306b6c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_ed9f3744d258b731f0f290bc6c7615e8618654380a50eca30c6dd43306b6c859->leave($__internal_ed9f3744d258b731f0f290bc6c7615e8618654380a50eca30c6dd43306b6c859_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_5456156937da295ef444e3581a609f93e7bb4c9b5e64aff19e48ab2aa20af633 = $this->env->getExtension("native_profiler");
        $__internal_5456156937da295ef444e3581a609f93e7bb4c9b5e64aff19e48ab2aa20af633->enter($__internal_5456156937da295ef444e3581a609f93e7bb4c9b5e64aff19e48ab2aa20af633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"cover-11\" data-type=\"sprite\" data-offsetY=\"-650\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Science and Society</a></li>
                <li><a class=\"link\" href=\"consulting.html\">Consulting</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
      <!-- FEATURES INTRODUCTION SECTION -->
      <section>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Our consulting services</h1>
                  <div class=\"text-center\">
                    <span class=\"separator\">
                      <i class=\"icon icon-small iline2-ruler9 text-primary no-margin\"></i>
                    </span>
                  </div>
                  <p class=\"wow fadeInUp text-center\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    The \"R-Lab\" offers consulting services on biological imaging from optical device development 
                    to image processing and related techniques and technologies. We have worked with several companies 
                    ranging form biological surveys and advices on ecological impact to high throughtput systems. 
                    Our fields or expertise includes tissue engineering (e.g. 3D bioprinting), 3D biological imaging, 
                    marine life imaging, light sheet microscopy, laser nanosurgery and cell micromanipulation 
                    as well as physiology and taxonomyn of marine organisms.
                  </p>
                  <p class=\"text-center\">
                  We welcome inquiries from UCD faculty, staff, postdocs, and grad students at all levels of expertise. 
                  Our standard consulting services are free of charge for NGOs and UCD staff.
                  </p>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- FEATURES INTRODUCTION SECTION END -->
      <!-- FEATURES BODY SECTION -->
      <section class=\"pattern-3 no-padding-right\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
                <!-- Begin logos section-->
       
                  <!-- .logos -->
                  <ul class=\"logos\">
\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 96
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($context["image"], "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", array()), "html", null, true);
            echo "\"/></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                  </ul>
                  <!-- /.logos -->
               
      <!-- /Logos section-->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      

  ";
        
        $__internal_5456156937da295ef444e3581a609f93e7bb4c9b5e64aff19e48ab2aa20af633->leave($__internal_5456156937da295ef444e3581a609f93e7bb4c9b5e64aff19e48ab2aa20af633_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_982052f43a9e75d4d79e5701d4e616d514c7309d9a3962d4cf90d61eb98abf6b = $this->env->getExtension("native_profiler");
        $__internal_982052f43a9e75d4d79e5701d4e616d514c7309d9a3962d4cf90d61eb98abf6b->enter($__internal_982052f43a9e75d4d79e5701d4e616d514c7309d9a3962d4cf90d61eb98abf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_982052f43a9e75d4d79e5701d4e616d514c7309d9a3962d4cf90d61eb98abf6b->leave($__internal_982052f43a9e75d4d79e5701d4e616d514c7309d9a3962d4cf90d61eb98abf6b_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:consulting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 116,  194 => 115,  174 => 98,  163 => 96,  159 => 95,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# base-ngos-cons.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Consulting*/
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
/*     <!-- MAIN CONTAINER -->*/
/*     <div class="main-content">*/
/*       <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-11" data-type="sprite" data-offsetY="-650" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Science and Society</a></li>*/
/*                 <li><a class="link" href="consulting.html">Consulting</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/*       <!-- FEATURES INTRODUCTION SECTION -->*/
/*       <section>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Our consulting services</h1>*/
/*                   <div class="text-center">*/
/*                     <span class="separator">*/
/*                       <i class="icon icon-small iline2-ruler9 text-primary no-margin"></i>*/
/*                     </span>*/
/*                   </div>*/
/*                   <p class="wow fadeInUp text-center"  data-wow-duration="1s" data-wow-delay=".3s">*/
/*                     The "R-Lab" offers consulting services on biological imaging from optical device development */
/*                     to image processing and related techniques and technologies. We have worked with several companies */
/*                     ranging form biological surveys and advices on ecological impact to high throughtput systems. */
/*                     Our fields or expertise includes tissue engineering (e.g. 3D bioprinting), 3D biological imaging, */
/*                     marine life imaging, light sheet microscopy, laser nanosurgery and cell micromanipulation */
/*                     as well as physiology and taxonomyn of marine organisms.*/
/*                   </p>*/
/*                   <p class="text-center">*/
/*                   We welcome inquiries from UCD faculty, staff, postdocs, and grad students at all levels of expertise. */
/*                   Our standard consulting services are free of charge for NGOs and UCD staff.*/
/*                   </p>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- FEATURES INTRODUCTION SECTION END -->*/
/*       <!-- FEATURES BODY SECTION -->*/
/*       <section class="pattern-3 no-padding-right">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*                 <!-- Begin logos section-->*/
/*        */
/*                   <!-- .logos -->*/
/*                   <ul class="logos">*/
/* 			{% for image in images %}*/
/*                     <li><img src="{{ asset("" ~ image.url  ) }}" alt="{{ image.url }}"/></li>*/
/* 			{% endfor %}*/
/*                   </ul>*/
/*                   <!-- /.logos -->*/
/*                */
/*       <!-- /Logos section-->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
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
