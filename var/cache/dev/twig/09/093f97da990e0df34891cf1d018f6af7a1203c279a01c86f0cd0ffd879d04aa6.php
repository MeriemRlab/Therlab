<?php

/* :therlab:art-science.html.twig */
class __TwigTemplate_bf6985c25769b91957b4c1d459adedec08b3d99ea3e3599c38273506a2063036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:art-science.html.twig", 3);
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
        $__internal_a693c208e4951b16e14f3ef392e4992d3fe10029ef82d4ae19ce9bb27e1ec0c9 = $this->env->getExtension("native_profiler");
        $__internal_a693c208e4951b16e14f3ef392e4992d3fe10029ef82d4ae19ce9bb27e1ec0c9->enter($__internal_a693c208e4951b16e14f3ef392e4992d3fe10029ef82d4ae19ce9bb27e1ec0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:art-science.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a693c208e4951b16e14f3ef392e4992d3fe10029ef82d4ae19ce9bb27e1ec0c9->leave($__internal_a693c208e4951b16e14f3ef392e4992d3fe10029ef82d4ae19ce9bb27e1ec0c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7744c6f475fe39cea52d0b0bb8be6b8674bca084305d506acc66e5caf5d583e7 = $this->env->getExtension("native_profiler");
        $__internal_7744c6f475fe39cea52d0b0bb8be6b8674bca084305d506acc66e5caf5d583e7->enter($__internal_7744c6f475fe39cea52d0b0bb8be6b8674bca084305d506acc66e5caf5d583e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Art & Science
  ";
        
        $__internal_7744c6f475fe39cea52d0b0bb8be6b8674bca084305d506acc66e5caf5d583e7->leave($__internal_7744c6f475fe39cea52d0b0bb8be6b8674bca084305d506acc66e5caf5d583e7_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_3edf7c983c0b3a59bf5ef7f4b97f48cea79448d9a1b9f5e6e296e987caf39e98 = $this->env->getExtension("native_profiler");
        $__internal_3edf7c983c0b3a59bf5ef7f4b97f48cea79448d9a1b9f5e6e296e987caf39e98->enter($__internal_3edf7c983c0b3a59bf5ef7f4b97f48cea79448d9a1b9f5e6e296e987caf39e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_3edf7c983c0b3a59bf5ef7f4b97f48cea79448d9a1b9f5e6e296e987caf39e98->leave($__internal_3edf7c983c0b3a59bf5ef7f4b97f48cea79448d9a1b9f5e6e296e987caf39e98_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc1049b8a4a0ac69ae2dedba95059cc35d47c8a76a0a9870d402abc5cba6948e = $this->env->getExtension("native_profiler");
        $__internal_cc1049b8a4a0ac69ae2dedba95059cc35d47c8a76a0a9870d402abc5cba6948e->enter($__internal_cc1049b8a4a0ac69ae2dedba95059cc35d47c8a76a0a9870d402abc5cba6948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"cover-12\" data-type=\"sprite\" data-offsetY=\"-250\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Science and Society</a></li>
                <li><a class=\"link\" href=\"#\">Art & Science</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
\t<section>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- Team introduction text -->
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Art & Science</h1>
                 
                  <div class=\"text-center\">
                    <span class=\"separator\">
                      <i class=\"icon icon-small iline1-bird9 text-primary no-margin\"></i>
                    </span>
                  </div>
                  <p class=\"wow fadeInUp text-center\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    The \"R\" lab (renaissance) is an interdisciplinary platform 
\t\t\t\t\tintegrating knowledge from Arts to Zoology to put Life Sciences into context.
\t\t\t\t\tWe follow circular economy approaches and move forward 
\t\t\t\t\ttowards a fully three dimensional view of the biological world. 
                  </p>
                </div>
              </div>
              <!-- /.row -->
              <!--/ Team introduction text -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
        ";
        // line 78
        $context["classes"] = array(0 => "blue", 1 => "pattern-3", 2 => "white");
        // line 79
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
            // line 80
            echo "\t\t<section class=\"";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
\t\t\t\t
\t\t\t";
            // line 82
            echo twig_include($this->env, $context, "art-project.html.twig", array("project" => $context["project"]), false);
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
        // line 86
        echo "      

  ";
        
        $__internal_cc1049b8a4a0ac69ae2dedba95059cc35d47c8a76a0a9870d402abc5cba6948e->leave($__internal_cc1049b8a4a0ac69ae2dedba95059cc35d47c8a76a0a9870d402abc5cba6948e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f541f4d521edad8014245c9c548a42484c5dfeaafd0266eee1b1603ea408ec8d = $this->env->getExtension("native_profiler");
        $__internal_f541f4d521edad8014245c9c548a42484c5dfeaafd0266eee1b1603ea408ec8d->enter($__internal_f541f4d521edad8014245c9c548a42484c5dfeaafd0266eee1b1603ea408ec8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f541f4d521edad8014245c9c548a42484c5dfeaafd0266eee1b1603ea408ec8d->leave($__internal_f541f4d521edad8014245c9c548a42484c5dfeaafd0266eee1b1603ea408ec8d_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:art-science.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 93,  195 => 92,  186 => 86,  168 => 82,  162 => 80,  144 => 79,  142 => 78,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# art-science.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Art & Science*/
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
/*         <div class="cover-12" data-type="sprite" data-offsetY="-250" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Science and Society</a></li>*/
/*                 <li><a class="link" href="#">Art & Science</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/* 	<section>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- Team introduction text -->*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Art & Science</h1>*/
/*                  */
/*                   <div class="text-center">*/
/*                     <span class="separator">*/
/*                       <i class="icon icon-small iline1-bird9 text-primary no-margin"></i>*/
/*                     </span>*/
/*                   </div>*/
/*                   <p class="wow fadeInUp text-center"  data-wow-duration="1s" data-wow-delay=".3s">*/
/*                     The "R" lab (renaissance) is an interdisciplinary platform */
/* 					integrating knowledge from Arts to Zoology to put Life Sciences into context.*/
/* 					We follow circular economy approaches and move forward */
/* 					towards a fully three dimensional view of the biological world. */
/*                   </p>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*               <!--/ Team introduction text -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*         {% set classes = ['blue', 'pattern-3', 'white'] %}*/
/*         {% for project in projects %}*/
/* 		<section class="{{ cycle(classes, loop.index) }}">*/
/* 				*/
/* 			{{ include ('art-project.html.twig' , {project: project}, with_context=false) }}*/
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
