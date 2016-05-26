<?php

/* :therlab:light-sheet.html.twig */
class __TwigTemplate_2b366f6def10dd16bafd05cd192a4f90d8e82974234cbb423d103a413fe9eec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:light-sheet.html.twig", 3);
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
        $__internal_858cfd0fe8ab4809b807e0b7f70889105cdf974c11d222a367e012700be41ef9 = $this->env->getExtension("native_profiler");
        $__internal_858cfd0fe8ab4809b807e0b7f70889105cdf974c11d222a367e012700be41ef9->enter($__internal_858cfd0fe8ab4809b807e0b7f70889105cdf974c11d222a367e012700be41ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:light-sheet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_858cfd0fe8ab4809b807e0b7f70889105cdf974c11d222a367e012700be41ef9->leave($__internal_858cfd0fe8ab4809b807e0b7f70889105cdf974c11d222a367e012700be41ef9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fd9540a6617a8aa1a1fbf42b1af41910334e4a43795b4e4831e21a2818214b1 = $this->env->getExtension("native_profiler");
        $__internal_4fd9540a6617a8aa1a1fbf42b1af41910334e4a43795b4e4831e21a2818214b1->enter($__internal_4fd9540a6617a8aa1a1fbf42b1af41910334e4a43795b4e4831e21a2818214b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Light Sheet
  ";
        
        $__internal_4fd9540a6617a8aa1a1fbf42b1af41910334e4a43795b4e4831e21a2818214b1->leave($__internal_4fd9540a6617a8aa1a1fbf42b1af41910334e4a43795b4e4831e21a2818214b1_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_edf73ddbc8587e31c2edc72cb80f9026a6734cdb64ac3f82c7cd101d582c93ee = $this->env->getExtension("native_profiler");
        $__internal_edf73ddbc8587e31c2edc72cb80f9026a6734cdb64ac3f82c7cd101d582c93ee->enter($__internal_edf73ddbc8587e31c2edc72cb80f9026a6734cdb64ac3f82c7cd101d582c93ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_edf73ddbc8587e31c2edc72cb80f9026a6734cdb64ac3f82c7cd101d582c93ee->leave($__internal_edf73ddbc8587e31c2edc72cb80f9026a6734cdb64ac3f82c7cd101d582c93ee_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fa00be382870001bcd1a36c070d58efef495523a076392566d094145e77c072 = $this->env->getExtension("native_profiler");
        $__internal_1fa00be382870001bcd1a36c070d58efef495523a076392566d094145e77c072->enter($__internal_1fa00be382870001bcd1a36c070d58efef495523a076392566d094145e77c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <li><a class=\"link\" href=\"#\">Light Sheet</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
  
   ";
        // line 41
        $context["classes"] = array(0 => "blue", 1 => "pattern-3", 2 => "white");
        // line 42
        echo "     ";
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
            // line 43
            echo "      <section class=\"";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
                <!-- .row -->
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <h2 class=\"text-primary text-uppercase\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h2>
                  <span class=\"line-sep-blue\"></span>
                  <p class=\"wow fadeInUp\"  data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", array()), "html", null, true);
            echo "
                  </p>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"thumbnail\">
                    <figure>
                      <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute($context["project"], "image", array()), "url", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\" />                                
                      <div class=\"image-overlay\">
                        <p>
                          <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute($context["project"], "image", array()), "url", array()))), "html", null, true);
            echo "\" class=\"show-image\">
                            <i class=\"iline2-arrows55\"></i>
                          </a>
                        </p>
                      </div><!--image overlay-->
                    </figure><!--/figure-->
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- /Product item -->
      </section>
           \t\t\t
      ";
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
        // line 85
        echo "
  ";
        
        $__internal_1fa00be382870001bcd1a36c070d58efef495523a076392566d094145e77c072->leave($__internal_1fa00be382870001bcd1a36c070d58efef495523a076392566d094145e77c072_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68236afeb9d76bb7685427d895b098917d55de7d677d055b1073eabc16462efe = $this->env->getExtension("native_profiler");
        $__internal_68236afeb9d76bb7685427d895b098917d55de7d677d055b1073eabc16462efe->enter($__internal_68236afeb9d76bb7685427d895b098917d55de7d677d055b1073eabc16462efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_68236afeb9d76bb7685427d895b098917d55de7d677d055b1073eabc16462efe->leave($__internal_68236afeb9d76bb7685427d895b098917d55de7d677d055b1073eabc16462efe_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:light-sheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 91,  202 => 90,  194 => 85,  160 => 65,  154 => 62,  145 => 56,  139 => 53,  125 => 43,  107 => 42,  105 => 41,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# light-sheet.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Light Sheet*/
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
/*                 <li><a class="link" href="#">Light Sheet</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*   */
/*    {% set classes = ['blue', 'pattern-3', 'white'] %}*/
/*      {% for project in projects %}*/
/*       <section class="{{ cycle(classes, loop.index) }}">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*                 <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-md-6">*/
/*                   <h2 class="text-primary text-uppercase">{{ project.title }}</h2>*/
/*                   <span class="line-sep-blue"></span>*/
/*                   <p class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".4s">*/
/*                 {{ project.description }}*/
/*                   </p>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <div class="thumbnail">*/
/*                     <figure>*/
/*                       <img src="{{ asset("" ~ project.image.url  ) }}" class="img-responsive" alt="" />                                */
/*                       <div class="image-overlay">*/
/*                         <p>*/
/*                           <a href="{{ asset("" ~ project.image.url  ) }}" class="show-image">*/
/*                             <i class="iline2-arrows55"></i>*/
/*                           </a>*/
/*                         </p>*/
/*                       </div><!--image overlay-->*/
/*                     </figure><!--/figure-->*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*         <!-- /Product item -->*/
/*       </section>*/
/*            			*/
/*       {% endfor %}*/
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
