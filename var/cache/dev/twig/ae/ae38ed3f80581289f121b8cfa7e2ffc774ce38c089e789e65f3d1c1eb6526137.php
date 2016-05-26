<?php

/* therlab/ngos.html.twig~ */
class __TwigTemplate_31fe112afdac31e12d2ea587c0c810332a38fb290d01d6c8eb156af5f734aa91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/ngos.html.twig~", 3);
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
        $__internal_08cc8fa7efe8ba0c2a598249915c9492b32db747f21705be884cc79d74dc4fcf = $this->env->getExtension("native_profiler");
        $__internal_08cc8fa7efe8ba0c2a598249915c9492b32db747f21705be884cc79d74dc4fcf->enter($__internal_08cc8fa7efe8ba0c2a598249915c9492b32db747f21705be884cc79d74dc4fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/ngos.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08cc8fa7efe8ba0c2a598249915c9492b32db747f21705be884cc79d74dc4fcf->leave($__internal_08cc8fa7efe8ba0c2a598249915c9492b32db747f21705be884cc79d74dc4fcf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1480fc30adefa63bf2ae86c71ac9e9d467d69b56b649581b0ad83a06b287eb7d = $this->env->getExtension("native_profiler");
        $__internal_1480fc30adefa63bf2ae86c71ac9e9d467d69b56b649581b0ad83a06b287eb7d->enter($__internal_1480fc30adefa63bf2ae86c71ac9e9d467d69b56b649581b0ad83a06b287eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - NGos
  ";
        
        $__internal_1480fc30adefa63bf2ae86c71ac9e9d467d69b56b649581b0ad83a06b287eb7d->leave($__internal_1480fc30adefa63bf2ae86c71ac9e9d467d69b56b649581b0ad83a06b287eb7d_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_df500045f1810998a2588c704879b321fd09fc133f7ef799b199140e6cde5726 = $this->env->getExtension("native_profiler");
        $__internal_df500045f1810998a2588c704879b321fd09fc133f7ef799b199140e6cde5726->enter($__internal_df500045f1810998a2588c704879b321fd09fc133f7ef799b199140e6cde5726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_df500045f1810998a2588c704879b321fd09fc133f7ef799b199140e6cde5726->leave($__internal_df500045f1810998a2588c704879b321fd09fc133f7ef799b199140e6cde5726_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c598bf75ae4b79706e3d760739679ec6d5bb43927da43e5769b9c2519aa83253 = $this->env->getExtension("native_profiler");
        $__internal_c598bf75ae4b79706e3d760739679ec6d5bb43927da43e5769b9c2519aa83253->enter($__internal_c598bf75ae4b79706e3d760739679ec6d5bb43927da43e5769b9c2519aa83253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c598bf75ae4b79706e3d760739679ec6d5bb43927da43e5769b9c2519aa83253->leave($__internal_c598bf75ae4b79706e3d760739679ec6d5bb43927da43e5769b9c2519aa83253_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_947f560df1141f4bd61c0f108f92c0d949e668cbf5da378cc1c84b533643da20 = $this->env->getExtension("native_profiler");
        $__internal_947f560df1141f4bd61c0f108f92c0d949e668cbf5da378cc1c84b533643da20->enter($__internal_947f560df1141f4bd61c0f108f92c0d949e668cbf5da378cc1c84b533643da20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_947f560df1141f4bd61c0f108f92c0d949e668cbf5da378cc1c84b533643da20->leave($__internal_947f560df1141f4bd61c0f108f92c0d949e668cbf5da378cc1c84b533643da20_prof);

    }

    public function getTemplateName()
    {
        return "therlab/ngos.html.twig~";
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
