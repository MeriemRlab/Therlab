<?php

/* therlab/consulting.html.twig~ */
class __TwigTemplate_2a4a1d58acce82bce4ef27910e2f8b45326769dd3f97f3654118beaf95041462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/consulting.html.twig~", 3);
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
        $__internal_b2a4a9650177c58847dc31db3d64545436856789aa87f71b7e65e160bb814b82 = $this->env->getExtension("native_profiler");
        $__internal_b2a4a9650177c58847dc31db3d64545436856789aa87f71b7e65e160bb814b82->enter($__internal_b2a4a9650177c58847dc31db3d64545436856789aa87f71b7e65e160bb814b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/consulting.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2a4a9650177c58847dc31db3d64545436856789aa87f71b7e65e160bb814b82->leave($__internal_b2a4a9650177c58847dc31db3d64545436856789aa87f71b7e65e160bb814b82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f850e5fc52de625964b2249218488aae8889412f1282ee0d0c6c6d929e38e9bf = $this->env->getExtension("native_profiler");
        $__internal_f850e5fc52de625964b2249218488aae8889412f1282ee0d0c6c6d929e38e9bf->enter($__internal_f850e5fc52de625964b2249218488aae8889412f1282ee0d0c6c6d929e38e9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Consulting
  ";
        
        $__internal_f850e5fc52de625964b2249218488aae8889412f1282ee0d0c6c6d929e38e9bf->leave($__internal_f850e5fc52de625964b2249218488aae8889412f1282ee0d0c6c6d929e38e9bf_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_6363102b86ce893691de75b220393ce487bd37f2706664e9b103957056f0c924 = $this->env->getExtension("native_profiler");
        $__internal_6363102b86ce893691de75b220393ce487bd37f2706664e9b103957056f0c924->enter($__internal_6363102b86ce893691de75b220393ce487bd37f2706664e9b103957056f0c924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_6363102b86ce893691de75b220393ce487bd37f2706664e9b103957056f0c924->leave($__internal_6363102b86ce893691de75b220393ce487bd37f2706664e9b103957056f0c924_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_22eae23a35d0db4f4651509291d4804d8edfa7c3ee37db560fa691fca29daa54 = $this->env->getExtension("native_profiler");
        $__internal_22eae23a35d0db4f4651509291d4804d8edfa7c3ee37db560fa691fca29daa54->enter($__internal_22eae23a35d0db4f4651509291d4804d8edfa7c3ee37db560fa691fca29daa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


\t\t<section class=\"";
        // line 102
        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array()) == 2)) {
            echo "blue";
        } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array()) == 4)) {
            echo "pattern-3";
        } else {
            echo "white";
        }
        echo "\">
\t\t\t\t
\t\t\t";
        // line 104
        echo twig_include($this->env, $context, "project.html.twig", array("project" => (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project"))), false);
        echo "
\t\t
\t\t</section>\t\t
\t
               
      <!-- /Logos section-->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      

  ";
        
        $__internal_22eae23a35d0db4f4651509291d4804d8edfa7c3ee37db560fa691fca29daa54->leave($__internal_22eae23a35d0db4f4651509291d4804d8edfa7c3ee37db560fa691fca29daa54_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_794d6b18a74bee32c105090cfe88e58017c35381b946b837e9f402a9708d107e = $this->env->getExtension("native_profiler");
        $__internal_794d6b18a74bee32c105090cfe88e58017c35381b946b837e9f402a9708d107e->enter($__internal_794d6b18a74bee32c105090cfe88e58017c35381b946b837e9f402a9708d107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_794d6b18a74bee32c105090cfe88e58017c35381b946b837e9f402a9708d107e->leave($__internal_794d6b18a74bee32c105090cfe88e58017c35381b946b837e9f402a9708d107e_prof);

    }

    public function getTemplateName()
    {
        return "therlab/consulting.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 124,  214 => 123,  191 => 104,  180 => 102,  174 => 98,  163 => 96,  159 => 95,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/* */
/* */
/* 		<section class="{% if loop.index == 2%}blue{% elseif loop.index ==4 %}pattern-3{% else %}white{% endif %}">*/
/* 				*/
/* 			{{ include ('project.html.twig' , {project: project}, with_context=false) }}*/
/* 		*/
/* 		</section>		*/
/* 	*/
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
