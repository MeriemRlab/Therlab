<?php

/* therlab/3D-Model.html.twig~ */
class __TwigTemplate_dbe5d66244d2fba9bf1bce6f1434817625dc3caea27078eb3a4ba5de137bd03d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/3D-Model.html.twig~", 3);
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
        $__internal_a1bb9aa7d6b9d92c9dfd50eeb1276f26030e17a3ab146f415a1161142d99915e = $this->env->getExtension("native_profiler");
        $__internal_a1bb9aa7d6b9d92c9dfd50eeb1276f26030e17a3ab146f415a1161142d99915e->enter($__internal_a1bb9aa7d6b9d92c9dfd50eeb1276f26030e17a3ab146f415a1161142d99915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/3D-Model.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bb9aa7d6b9d92c9dfd50eeb1276f26030e17a3ab146f415a1161142d99915e->leave($__internal_a1bb9aa7d6b9d92c9dfd50eeb1276f26030e17a3ab146f415a1161142d99915e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3857414c2442c846f611fe39131e570111dc8839a6b3e23082c1ab3d4ce4d59e = $this->env->getExtension("native_profiler");
        $__internal_3857414c2442c846f611fe39131e570111dc8839a6b3e23082c1ab3d4ce4d59e->enter($__internal_3857414c2442c846f611fe39131e570111dc8839a6b3e23082c1ab3d4ce4d59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - 3D Models
  ";
        
        $__internal_3857414c2442c846f611fe39131e570111dc8839a6b3e23082c1ab3d4ce4d59e->leave($__internal_3857414c2442c846f611fe39131e570111dc8839a6b3e23082c1ab3d4ce4d59e_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_4677392d872b4c69fbe414111a3d1ee8c1964031d302e62bee83ce4b8ccb0d70 = $this->env->getExtension("native_profiler");
        $__internal_4677392d872b4c69fbe414111a3d1ee8c1964031d302e62bee83ce4b8ccb0d70->enter($__internal_4677392d872b4c69fbe414111a3d1ee8c1964031d302e62bee83ce4b8ccb0d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_4677392d872b4c69fbe414111a3d1ee8c1964031d302e62bee83ce4b8ccb0d70->leave($__internal_4677392d872b4c69fbe414111a3d1ee8c1964031d302e62bee83ce4b8ccb0d70_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc7467568e33f680a89a414aaf5313f92c612019d7162b8081548f5373dcc00 = $this->env->getExtension("native_profiler");
        $__internal_ffc7467568e33f680a89a414aaf5313f92c612019d7162b8081548f5373dcc00->enter($__internal_ffc7467568e33f680a89a414aaf5313f92c612019d7162b8081548f5373dcc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo " 
   ";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t <!-- HEADER TREE -->
      <section class=\"header-tree\" data-speed=\"8\" data-type=\"background\">
        <h2 class=\"hidden\">Header tree</h2>
        <!-- parallax background -->
        <div class=\"cover-11\" data-type=\"sprite\" data-offsetY=\"-250\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Datasets</a></li>
                <li><a class=\"link\" href=\"#\">3D Models</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->

  
      <section class=\"pattern-3\">
        <!-- .container -->
        <div id=\"wrapper\">


  <div id=\"content\">
<iframe width=\"900\" height=\"520\" src=\"\" id=\"api-frame\" allowfullscreen mozallowfullscreen=\"true\" webkitallowfullscreen=\"true\"></iframe></div>
  <div id=\"sidebar\"> 
<h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name", array()), "html", null, true);
        echo "</h2>
                  <span class=\"line-sep-blue\"></span>
                  <p class=\"wow fadeInUp\"  data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "description", array()), "html", null, true);
        echo "
                  </p>
                   <ul class=\"ic-list wow bounceInRight\"  data-wow-duration=\"1s\" data-wow-delay=\"1.4s\">
                    <li>
                      <i class=\"icon iline2-id1\"></i> By ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "author", array()), "html", null, true);
        echo "
                    </li>
                    <li>
                      <i class=\"icon iline1-clock34\"></i> Published ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('date')->diff($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "date", array())), "html", null, true);
        echo "
                    </li>
                    <li>
                      <i class=\"icon iline1-information29\"></i> Model Quality: ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "modelQuality", array()), "html", null, true);
        echo " <br/> 
\t\t\t\t\t\t\t\tModel size: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "modelSize", array()), "html", null, true);
        echo " <br/> 
\t\t\t\t\t\t\t\t3D Model size: ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "model3dSize", array()), "html", null, true);
        echo " <br/>
                    </li>
                  </ul>
  </div>
  <div id=\"cleared\"></div>
</div>
        <!-- /.container -->
      </section>
           \t\t\t
  

  ";
        
        $__internal_ffc7467568e33f680a89a414aaf5313f92c612019d7162b8081548f5373dcc00->leave($__internal_ffc7467568e33f680a89a414aaf5313f92c612019d7162b8081548f5373dcc00_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5da4dfc675ad1adaede1da1c2bb70657f99da0f6fb581b7c65e7a61c3fc1bdbf = $this->env->getExtension("native_profiler");
        $__internal_5da4dfc675ad1adaede1da1c2bb70657f99da0f6fb581b7c65e7a61c3fc1bdbf->enter($__internal_5da4dfc675ad1adaede1da1c2bb70657f99da0f6fb581b7c65e7a61c3fc1bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- Initialize the viewer -->
 <script type=\"text/javascript\" src=\"https://d2f25wgezub9nf.cloudfront.net/api/sketchfab-viewer-1.0.0.js\"></script>
<script type=\"text/javascript\">
    var iframe = document.getElementById( 'api-frame' );
    var version = '1.0.0';
    var urlid = '";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "modelId", array()), "html", null, true);
        echo "';
    var client = new Sketchfab( version, iframe );

    client.init( urlid, {
        success: function onSuccess( api ){
            api.start();
            api.addEventListener( 'viewerready', function() {

                // API is ready to use
                // Insert your code here
                console.log( 'Viewer is ready' );

            } );
        },
        error: function onError() {
            console.log( 'Viewer error' );
        }
    } );
    </script>
";
        
        $__internal_5da4dfc675ad1adaede1da1c2bb70657f99da0f6fb581b7c65e7a61c3fc1bdbf->leave($__internal_5da4dfc675ad1adaede1da1c2bb70657f99da0f6fb581b7c65e7a61c3fc1bdbf_prof);

    }

    public function getTemplateName()
    {
        return "therlab/3D-Model.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 88,  173 => 82,  167 => 81,  148 => 66,  144 => 65,  140 => 64,  134 => 61,  128 => 58,  121 => 54,  115 => 51,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# blaschka.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - 3D Models*/
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
/* 	 <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-11" data-type="sprite" data-offsetY="-250" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Datasets</a></li>*/
/*                 <li><a class="link" href="#">3D Models</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/* */
/*   */
/*       <section class="pattern-3">*/
/*         <!-- .container -->*/
/*         <div id="wrapper">*/
/* */
/* */
/*   <div id="content">*/
/* <iframe width="900" height="520" src="" id="api-frame" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>*/
/*   <div id="sidebar"> */
/* <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">{{ model.name }}</h2>*/
/*                   <span class="line-sep-blue"></span>*/
/*                   <p class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".4s">*/
/*                     {{ model.description }}*/
/*                   </p>*/
/*                    <ul class="ic-list wow bounceInRight"  data-wow-duration="1s" data-wow-delay="1.4s">*/
/*                     <li>*/
/*                       <i class="icon iline2-id1"></i> By {{ model.author }}*/
/*                     </li>*/
/*                     <li>*/
/*                       <i class="icon iline1-clock34"></i> Published {{ model.date|time_diff  }}*/
/*                     </li>*/
/*                     <li>*/
/*                       <i class="icon iline1-information29"></i> Model Quality: {{ model.modelQuality }} <br/> */
/* 								Model size: {{ model.modelSize }} <br/> */
/* 								3D Model size: {{ model.model3dSize }} <br/>*/
/*                     </li>*/
/*                   </ul>*/
/*   </div>*/
/*   <div id="cleared"></div>*/
/* </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*            			*/
/*   */
/* */
/*   {% endblock %}*/
/*  */
/*     */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/*  <!-- Initialize the viewer -->*/
/*  <script type="text/javascript" src="https://d2f25wgezub9nf.cloudfront.net/api/sketchfab-viewer-1.0.0.js"></script>*/
/* <script type="text/javascript">*/
/*     var iframe = document.getElementById( 'api-frame' );*/
/*     var version = '1.0.0';*/
/*     var urlid = '{{ model.modelId  }}';*/
/*     var client = new Sketchfab( version, iframe );*/
/* */
/*     client.init( urlid, {*/
/*         success: function onSuccess( api ){*/
/*             api.start();*/
/*             api.addEventListener( 'viewerready', function() {*/
/* */
/*                 // API is ready to use*/
/*                 // Insert your code here*/
/*                 console.log( 'Viewer is ready' );*/
/* */
/*             } );*/
/*         },*/
/*         error: function onError() {*/
/*             console.log( 'Viewer error' );*/
/*         }*/
/*     } );*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
