<?php

/* :therlab:ngos.html.twig */
class __TwigTemplate_15bf7bb5c033a75385319bd23f43d5cfcd692fe7f599e9ec20eac3982aa08816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:ngos.html.twig", 3);
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
        $__internal_45be2874b6a13d78743888600bc1177f1bfab0632cf0479df6b710a375a07b7f = $this->env->getExtension("native_profiler");
        $__internal_45be2874b6a13d78743888600bc1177f1bfab0632cf0479df6b710a375a07b7f->enter($__internal_45be2874b6a13d78743888600bc1177f1bfab0632cf0479df6b710a375a07b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:ngos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45be2874b6a13d78743888600bc1177f1bfab0632cf0479df6b710a375a07b7f->leave($__internal_45be2874b6a13d78743888600bc1177f1bfab0632cf0479df6b710a375a07b7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3faeadf1f6f8aace0297c854e888fb902d815b302e97c8f208fba7aff25954d7 = $this->env->getExtension("native_profiler");
        $__internal_3faeadf1f6f8aace0297c854e888fb902d815b302e97c8f208fba7aff25954d7->enter($__internal_3faeadf1f6f8aace0297c854e888fb902d815b302e97c8f208fba7aff25954d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - NGos
  ";
        
        $__internal_3faeadf1f6f8aace0297c854e888fb902d815b302e97c8f208fba7aff25954d7->leave($__internal_3faeadf1f6f8aace0297c854e888fb902d815b302e97c8f208fba7aff25954d7_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_210cd984d492cec346c630defb26437a5901e4b1c91c0896a98d94890c4f301c = $this->env->getExtension("native_profiler");
        $__internal_210cd984d492cec346c630defb26437a5901e4b1c91c0896a98d94890c4f301c->enter($__internal_210cd984d492cec346c630defb26437a5901e4b1c91c0896a98d94890c4f301c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_210cd984d492cec346c630defb26437a5901e4b1c91c0896a98d94890c4f301c->leave($__internal_210cd984d492cec346c630defb26437a5901e4b1c91c0896a98d94890c4f301c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4b873322c22f0ece00f069d549ac53e760eae592691098160db235a65585b19 = $this->env->getExtension("native_profiler");
        $__internal_b4b873322c22f0ece00f069d549ac53e760eae592691098160db235a65585b19->enter($__internal_b4b873322c22f0ece00f069d549ac53e760eae592691098160db235a65585b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"cover-9\" data-type=\"sprite\" data-offsetY=\"-650\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Science and Society</a></li>
                <li><a class=\"link\" href=\"consulting.html\">Ngos</a></li>
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
                  <h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">NGos</h1>
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
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 95
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
        // line 97
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
      <!-- FEATURES BODY SECTION END -->
      

  ";
        
        $__internal_b4b873322c22f0ece00f069d549ac53e760eae592691098160db235a65585b19->leave($__internal_b4b873322c22f0ece00f069d549ac53e760eae592691098160db235a65585b19_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89b0311cea9a24570882897253a41a7975da698448af118c97d6eafbd93cd366 = $this->env->getExtension("native_profiler");
        $__internal_89b0311cea9a24570882897253a41a7975da698448af118c97d6eafbd93cd366->enter($__internal_89b0311cea9a24570882897253a41a7975da698448af118c97d6eafbd93cd366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_89b0311cea9a24570882897253a41a7975da698448af118c97d6eafbd93cd366->leave($__internal_89b0311cea9a24570882897253a41a7975da698448af118c97d6eafbd93cd366_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:ngos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 116,  194 => 115,  173 => 97,  162 => 95,  158 => 94,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# base-ngos-cons.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - NGos*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/*   {% endblock %}*/
/* */
/*   {% block body%}*/
/*  */
/*    {{ parent()}}*/
/*  <!-- MAIN CONTAINER -->*/
/*     <div class="main-content">*/
/*       <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-9" data-type="sprite" data-offsetY="-650" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Science and Society</a></li>*/
/*                 <li><a class="link" href="consulting.html">Ngos</a></li>*/
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
/*                   <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">NGos</h1>*/
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
/*                     {% for image in images %}*/
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
/*       <!-- FEATURES BODY SECTION END -->*/
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
