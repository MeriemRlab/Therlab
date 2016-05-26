<?php

/* :therlab:projects.html.twig */
class __TwigTemplate_5c4dc63b9755299d0eb8a2bab91e47ba94b05e63a497b8c93b8cfdaa1bd3e574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:projects.html.twig", 3);
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
        $__internal_8696340f59e10911bf617c8f482490ad748e18a6f38ae6c8bb24f6f69d9d4d05 = $this->env->getExtension("native_profiler");
        $__internal_8696340f59e10911bf617c8f482490ad748e18a6f38ae6c8bb24f6f69d9d4d05->enter($__internal_8696340f59e10911bf617c8f482490ad748e18a6f38ae6c8bb24f6f69d9d4d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:projects.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8696340f59e10911bf617c8f482490ad748e18a6f38ae6c8bb24f6f69d9d4d05->leave($__internal_8696340f59e10911bf617c8f482490ad748e18a6f38ae6c8bb24f6f69d9d4d05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db3974ca4eb620dd0af987bd3ea7ba392c02ba76abc0e982d6ab0150369f2ae1 = $this->env->getExtension("native_profiler");
        $__internal_db3974ca4eb620dd0af987bd3ea7ba392c02ba76abc0e982d6ab0150369f2ae1->enter($__internal_db3974ca4eb620dd0af987bd3ea7ba392c02ba76abc0e982d6ab0150369f2ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Projects
  ";
        
        $__internal_db3974ca4eb620dd0af987bd3ea7ba392c02ba76abc0e982d6ab0150369f2ae1->leave($__internal_db3974ca4eb620dd0af987bd3ea7ba392c02ba76abc0e982d6ab0150369f2ae1_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_e8462da457d02eaca1f32bd000f83dd161e8a11af434ba252d473262dfaa2caf = $this->env->getExtension("native_profiler");
        $__internal_e8462da457d02eaca1f32bd000f83dd161e8a11af434ba252d473262dfaa2caf->enter($__internal_e8462da457d02eaca1f32bd000f83dd161e8a11af434ba252d473262dfaa2caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_e8462da457d02eaca1f32bd000f83dd161e8a11af434ba252d473262dfaa2caf->leave($__internal_e8462da457d02eaca1f32bd000f83dd161e8a11af434ba252d473262dfaa2caf_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fab86537c5ee3068ebaaed49229593b98cfe4a8228309c9648809d46b3eaede3 = $this->env->getExtension("native_profiler");
        $__internal_fab86537c5ee3068ebaaed49229593b98cfe4a8228309c9648809d46b3eaede3->enter($__internal_fab86537c5ee3068ebaaed49229593b98cfe4a8228309c9648809d46b3eaede3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo " 
   ";
        // line 15
        $this->displayParentBlock("body", $context, $blocks);
        echo "

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
        // line 41
        $context["classes"] = array(0 => "blue", 1 => "pattern-3", 2 => "white");
        // line 42
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
            // line 43
            echo "\t\t<section class=\"";
            echo twig_escape_filter($this->env, twig_cycle((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
\t\t\t\t
\t\t\t";
            // line 45
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
        // line 49
        echo "      

  ";
        
        $__internal_fab86537c5ee3068ebaaed49229593b98cfe4a8228309c9648809d46b3eaede3->leave($__internal_fab86537c5ee3068ebaaed49229593b98cfe4a8228309c9648809d46b3eaede3_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fef3fc195666985c99a3e4447cfa31da47a6a09ee934f740cf7edac62ed7561 = $this->env->getExtension("native_profiler");
        $__internal_8fef3fc195666985c99a3e4447cfa31da47a6a09ee934f740cf7edac62ed7561->enter($__internal_8fef3fc195666985c99a3e4447cfa31da47a6a09ee934f740cf7edac62ed7561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_8fef3fc195666985c99a3e4447cfa31da47a6a09ee934f740cf7edac62ed7561->leave($__internal_8fef3fc195666985c99a3e4447cfa31da47a6a09ee934f740cf7edac62ed7561_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  158 => 55,  149 => 49,  131 => 45,  125 => 43,  107 => 42,  105 => 41,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
