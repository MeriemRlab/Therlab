<?php

/* therlab/3D-Models.html.twig~ */
class __TwigTemplate_74e765944f5fa99fb3e5e71040343cabc7eb9764cbca8c4984d19aa11e17b1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/3D-Models.html.twig~", 3);
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
        $__internal_c72aebe24d31852f74340af8661845ea096e8f1cbca8c606af23b3c4447fac1d = $this->env->getExtension("native_profiler");
        $__internal_c72aebe24d31852f74340af8661845ea096e8f1cbca8c606af23b3c4447fac1d->enter($__internal_c72aebe24d31852f74340af8661845ea096e8f1cbca8c606af23b3c4447fac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/3D-Models.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72aebe24d31852f74340af8661845ea096e8f1cbca8c606af23b3c4447fac1d->leave($__internal_c72aebe24d31852f74340af8661845ea096e8f1cbca8c606af23b3c4447fac1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b423e27e531032624087790afe94e37dca4374d11b3873abe7bc8d812cdfc5ae = $this->env->getExtension("native_profiler");
        $__internal_b423e27e531032624087790afe94e37dca4374d11b3873abe7bc8d812cdfc5ae->enter($__internal_b423e27e531032624087790afe94e37dca4374d11b3873abe7bc8d812cdfc5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - 3D Models
  ";
        
        $__internal_b423e27e531032624087790afe94e37dca4374d11b3873abe7bc8d812cdfc5ae->leave($__internal_b423e27e531032624087790afe94e37dca4374d11b3873abe7bc8d812cdfc5ae_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_3a3fde49f2b27b9756336ca749371616e82dbf46f286689d5b21b5ac72755457 = $this->env->getExtension("native_profiler");
        $__internal_3a3fde49f2b27b9756336ca749371616e82dbf46f286689d5b21b5ac72755457->enter($__internal_3a3fde49f2b27b9756336ca749371616e82dbf46f286689d5b21b5ac72755457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t<link href=\"https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"https:////code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
 \t<style>
.dataTables_wrapper {
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    position: relative;
    clear: both;
    *zoom: 1;
    zoom: 1;
}
table.dataTable thead th, table.dataTable thead td {
  padding: 15px;
  border-bottom: 1px solid #111;
}
</style>
  ";
        
        $__internal_3a3fde49f2b27b9756336ca749371616e82dbf46f286689d5b21b5ac72755457->leave($__internal_3a3fde49f2b27b9756336ca749371616e82dbf46f286689d5b21b5ac72755457_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_7291ef6c0e844e6bd5f8a5c36471e51e1feb5985f17d1bcc4ad4613f6e5affd3 = $this->env->getExtension("native_profiler");
        $__internal_7291ef6c0e844e6bd5f8a5c36471e51e1feb5985f17d1bcc4ad4613f6e5affd3->enter($__internal_7291ef6c0e844e6bd5f8a5c36471e51e1feb5985f17d1bcc4ad4613f6e5affd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo " 
   ";
        // line 31
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
                  <h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Our 3D Models</h1>
                  <div class=\"text-center\">
                    <span class=\"separator\">
                      <i class=\"icon icon-small iline2-black179 text-primary no-margin\"></i>
                    </span>
                  </div>
                  <p class=\"wow fadeInUp text-center\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est.
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
      <section class=\"pattern-3\">
        <!-- .container -->
        <div id=\"container\" style=\"width: 80%; margin: auto;\">
    <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\">
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 108
            echo "            <tr href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_model", array("id" => $this->getAttribute($context["model"], "id", array()))), "html", null, true);
            echo "\">
                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["model"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</td>
            </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        
        </tbody>
    </table>

        </div>
        <!-- /.container -->
</div>
</div>
      </section>
      <!-- FEATURES BODY SECTION END -->
  

  ";
        
        $__internal_7291ef6c0e844e6bd5f8a5c36471e51e1feb5985f17d1bcc4ad4613f6e5affd3->leave($__internal_7291ef6c0e844e6bd5f8a5c36471e51e1feb5985f17d1bcc4ad4613f6e5affd3_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04d5581fcb901115367e27bdcb185097fe8d86552af929d76877d74027a1d778 = $this->env->getExtension("native_profiler");
        $__internal_04d5581fcb901115367e27bdcb185097fe8d86552af929d76877d74027a1d778->enter($__internal_04d5581fcb901115367e27bdcb185097fe8d86552af929d76877d74027a1d778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/table-datasets.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\"></script>

https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js
";
        
        $__internal_04d5581fcb901115367e27bdcb185097fe8d86552af929d76877d74027a1d778->leave($__internal_04d5581fcb901115367e27bdcb185097fe8d86552af929d76877d74027a1d778_prof);

    }

    public function getTemplateName()
    {
        return "therlab/3D-Models.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 131,  222 => 130,  216 => 129,  197 => 113,  188 => 111,  184 => 110,  180 => 109,  175 => 108,  171 => 107,  92 => 31,  89 => 30,  83 => 29,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# light-sheet.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - 3D Models*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/* 	<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />*/
/* 	<link href="https:////code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />*/
/*  	<style>*/
/* .dataTables_wrapper {*/
/*     font-family: 'Lato', sans-serif;*/
/*     font-size: 18px;*/
/*     position: relative;*/
/*     clear: both;*/
/*     *zoom: 1;*/
/*     zoom: 1;*/
/* }*/
/* table.dataTable thead th, table.dataTable thead td {*/
/*   padding: 15px;*/
/*   border-bottom: 1px solid #111;*/
/* }*/
/* </style>*/
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
/*   */
/*     <section>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Our 3D Models</h1>*/
/*                   <div class="text-center">*/
/*                     <span class="separator">*/
/*                       <i class="icon icon-small iline2-black179 text-primary no-margin"></i>*/
/*                     </span>*/
/*                   </div>*/
/*                   <p class="wow fadeInUp text-center"  data-wow-duration="1s" data-wow-delay=".3s">*/
/*                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed */
/*                     do eiusmod tempor incididunt ut labore et dolore magna aliqua. */
/*                     Ut enim ad minim veniam, quis nostrud exercitation ullamco */
/*                     laboris nisi ut aliquip ex ea commodo consequat. Duis aute */
/*                     irure dolor in reprehenderit in voluptate velit esse cillum */
/*                     dolore eu fugiat nulla pariatur. Excepteur sint occaecat */
/*                     cupidatat non proident, sunt in culpa qui officia deserunt */
/*                     mollit anim id est.*/
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
/*       <section class="pattern-3">*/
/*         <!-- .container -->*/
/*         <div id="container" style="width: 80%; margin: auto;">*/
/*     <table id="example" class="display" cellspacing="0" width="100%">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Author</th>*/
/*                 <th>Date</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*     {% for model in models %}*/
/*             <tr href="{{ path('platform_model', {'id': model.id}) }}">*/
/*                 <td>{{ model.name }}</td>*/
/*                 <td>{{ model.author }}</td>*/
/*                 <td>{{ model.date|date("m/d/Y") }}</td>*/
/*             </tr>*/
/*    {% endfor %}        */
/*         </tbody>*/
/*     </table>*/
/* */
/*         </div>*/
/*         <!-- /.container -->*/
/* </div>*/
/* </div>*/
/*       </section>*/
/*       <!-- FEATURES BODY SECTION END -->*/
/*   */
/* */
/*   {% endblock %}*/
/*  */
/*     */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script src="{{ asset('js/table-datasets.js') }}"></script>*/
/* <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>*/
/* <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>*/
/* */
/* https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js*/
/* {% endblock %}*/
/* */
