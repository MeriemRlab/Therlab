<?php

/* therlab/3D-Model.html.twig */
class __TwigTemplate_9a548db0a4e527bf0c04f38bc49684492ee1d8177e52af844d28c132e52a7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/3D-Model.html.twig", 3);
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
        $__internal_e9f450e6e747e3ca3a75432ee4b5babf645791c76c68e6e004d21ad2064e0c10 = $this->env->getExtension("native_profiler");
        $__internal_e9f450e6e747e3ca3a75432ee4b5babf645791c76c68e6e004d21ad2064e0c10->enter($__internal_e9f450e6e747e3ca3a75432ee4b5babf645791c76c68e6e004d21ad2064e0c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/3D-Model.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9f450e6e747e3ca3a75432ee4b5babf645791c76c68e6e004d21ad2064e0c10->leave($__internal_e9f450e6e747e3ca3a75432ee4b5babf645791c76c68e6e004d21ad2064e0c10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e453f6a35122693b21ff1e3cf05414825b569d4414a589e7747ef9439caf38 = $this->env->getExtension("native_profiler");
        $__internal_97e453f6a35122693b21ff1e3cf05414825b569d4414a589e7747ef9439caf38->enter($__internal_97e453f6a35122693b21ff1e3cf05414825b569d4414a589e7747ef9439caf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - 3D Models
  ";
        
        $__internal_97e453f6a35122693b21ff1e3cf05414825b569d4414a589e7747ef9439caf38->leave($__internal_97e453f6a35122693b21ff1e3cf05414825b569d4414a589e7747ef9439caf38_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_69f6e8d275a8d7228ef44309e14cbbb56b61a01365da1d468711028595c3c911 = $this->env->getExtension("native_profiler");
        $__internal_69f6e8d275a8d7228ef44309e14cbbb56b61a01365da1d468711028595c3c911->enter($__internal_69f6e8d275a8d7228ef44309e14cbbb56b61a01365da1d468711028595c3c911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_69f6e8d275a8d7228ef44309e14cbbb56b61a01365da1d468711028595c3c911->leave($__internal_69f6e8d275a8d7228ef44309e14cbbb56b61a01365da1d468711028595c3c911_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c0b6d52b760b6bfb2349617568f50f4276af2e02014fef504bd13b9c188a730 = $this->env->getExtension("native_profiler");
        $__internal_4c0b6d52b760b6bfb2349617568f50f4276af2e02014fef504bd13b9c188a730->enter($__internal_4c0b6d52b760b6bfb2349617568f50f4276af2e02014fef504bd13b9c188a730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t\tOther informations: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "disclaimer", array()), "html", null, true);
        echo "
                    </li>
                  </ul>
  </div>
  <div id=\"cleared\"></div>
</div>
        <!-- /.container -->
      </section>
           \t\t\t
  

  ";
        
        $__internal_4c0b6d52b760b6bfb2349617568f50f4276af2e02014fef504bd13b9c188a730->leave($__internal_4c0b6d52b760b6bfb2349617568f50f4276af2e02014fef504bd13b9c188a730_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_371d9b62219124e092b6f8725942c48776ceddee9c32cc45d471cb4ccd1e892a = $this->env->getExtension("native_profiler");
        $__internal_371d9b62219124e092b6f8725942c48776ceddee9c32cc45d471cb4ccd1e892a->enter($__internal_371d9b62219124e092b6f8725942c48776ceddee9c32cc45d471cb4ccd1e892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <!-- Initialize the viewer -->
 <script type=\"text/javascript\" src=\"https://d2f25wgezub9nf.cloudfront.net/api/sketchfab-viewer-1.0.0.js\"></script>
<script type=\"text/javascript\">
    var iframe = document.getElementById( 'api-frame' );
    var version = '1.0.0';
    var urlid = '";
        // line 89
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
        
        $__internal_371d9b62219124e092b6f8725942c48776ceddee9c32cc45d471cb4ccd1e892a->leave($__internal_371d9b62219124e092b6f8725942c48776ceddee9c32cc45d471cb4ccd1e892a_prof);

    }

    public function getTemplateName()
    {
        return "therlab/3D-Model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  177 => 83,  171 => 82,  152 => 67,  148 => 66,  144 => 65,  140 => 64,  134 => 61,  128 => 58,  121 => 54,  115 => 51,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/* 								Other informations: {{ model.disclaimer }}*/
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
