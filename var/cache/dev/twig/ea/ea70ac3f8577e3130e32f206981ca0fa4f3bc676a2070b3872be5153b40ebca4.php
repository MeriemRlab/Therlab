<?php

/* therlab/publications.html.twig~ */
class __TwigTemplate_4342ca1cea372c0d259494507d76d25bd0bd71763470a92472b50a47e3a03982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/publications.html.twig~", 3);
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
        $__internal_daae364a8d2666ac0b95601df97ff19cbc1723afc32ef5da8f6b7396bd25d8a2 = $this->env->getExtension("native_profiler");
        $__internal_daae364a8d2666ac0b95601df97ff19cbc1723afc32ef5da8f6b7396bd25d8a2->enter($__internal_daae364a8d2666ac0b95601df97ff19cbc1723afc32ef5da8f6b7396bd25d8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/publications.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daae364a8d2666ac0b95601df97ff19cbc1723afc32ef5da8f6b7396bd25d8a2->leave($__internal_daae364a8d2666ac0b95601df97ff19cbc1723afc32ef5da8f6b7396bd25d8a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90b1c3f73fb4d31007edd20db3d2d3160fbe10303177f281e61f53975b0505d8 = $this->env->getExtension("native_profiler");
        $__internal_90b1c3f73fb4d31007edd20db3d2d3160fbe10303177f281e61f53975b0505d8->enter($__internal_90b1c3f73fb4d31007edd20db3d2d3160fbe10303177f281e61f53975b0505d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Publications
  ";
        
        $__internal_90b1c3f73fb4d31007edd20db3d2d3160fbe10303177f281e61f53975b0505d8->leave($__internal_90b1c3f73fb4d31007edd20db3d2d3160fbe10303177f281e61f53975b0505d8_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_b9c44a18c124766ce0743db017f18d1f6691f029ca0824059051ba4ee98ed549 = $this->env->getExtension("native_profiler");
        $__internal_b9c44a18c124766ce0743db017f18d1f6691f029ca0824059051ba4ee98ed549->enter($__internal_b9c44a18c124766ce0743db017f18d1f6691f029ca0824059051ba4ee98ed549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_b9c44a18c124766ce0743db017f18d1f6691f029ca0824059051ba4ee98ed549->leave($__internal_b9c44a18c124766ce0743db017f18d1f6691f029ca0824059051ba4ee98ed549_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bf8c05d0b211e9804ecc3632d707be17f8e2b66511f97fbf5d653e00539d2fc = $this->env->getExtension("native_profiler");
        $__internal_8bf8c05d0b211e9804ecc3632d707be17f8e2b66511f97fbf5d653e00539d2fc->enter($__internal_8bf8c05d0b211e9804ecc3632d707be17f8e2b66511f97fbf5d653e00539d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"cover-8\" data-type=\"sprite\" data-offsetY=\"-250\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"#\">Datasets</a></li>
                <li><a class=\"link\" href=\"#\">Publications</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
      <section>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 50
            echo "\t\t  ";
            if ((($this->getAttribute($context["loop"], "index", array()) >= 1) && ($this->getAttribute($context["loop"], "index", array()) <= 4))) {
                echo " 
                  <h1 class=\"text-primary wow fadeInDown text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">Books</h1>
                  <ul>
                    <li>
                      <h2  class=\"text-pub wow fadeInRight text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "type", array()), "html", null, true);
                echo "</h2>
                      <ul class=\"pub-li\">
\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "pub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["publ"]) {
                    // line 57
                    echo "                       \t <li>
                           ";
                    // line 58
                    echo twig_escape_filter($this->env, $context["publ"], "html", null, true);
                    echo "
                       \t </li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publ'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                      </ul>
                    </li>
                   </ul>
\t\t  ";
            } else {
                // line 65
                echo "\t\t   <h1 class=\"text-primary wow fadeInDown text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "type", array()), "html", null, true);
                echo "</h1>
\t\t     <ul class=\"pub-li\">
\t\t     ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "pub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["publ"]) {
                    // line 68
                    echo "                       \t <li>
                           ";
                    // line 69
                    echo twig_escape_filter($this->env, $context["publ"], "html", null, true);
                    echo "
                       \t </li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publ'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t     </ul>
                 ";
            }
            // line 73
            echo " 
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
  ";
        
        $__internal_8bf8c05d0b211e9804ecc3632d707be17f8e2b66511f97fbf5d653e00539d2fc->leave($__internal_8bf8c05d0b211e9804ecc3632d707be17f8e2b66511f97fbf5d653e00539d2fc_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f8af993d52cd073fa6f143fc6b00731c77648b5a6b585964638f9908f71fd5f = $this->env->getExtension("native_profiler");
        $__internal_4f8af993d52cd073fa6f143fc6b00731c77648b5a6b585964638f9908f71fd5f->enter($__internal_4f8af993d52cd073fa6f143fc6b00731c77648b5a6b585964638f9908f71fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_4f8af993d52cd073fa6f143fc6b00731c77648b5a6b585964638f9908f71fd5f->leave($__internal_4f8af993d52cd073fa6f143fc6b00731c77648b5a6b585964638f9908f71fd5f_prof);

    }

    public function getTemplateName()
    {
        return "therlab/publications.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 86,  220 => 85,  206 => 75,  191 => 73,  187 => 72,  178 => 69,  175 => 68,  171 => 67,  165 => 65,  159 => 61,  150 => 58,  147 => 57,  143 => 56,  138 => 54,  130 => 50,  113 => 49,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# publications.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Publications*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/*   {% endblock %}*/
/* */
/*   {% block body%}*/
/*   */
/*   {{ parent() }}*/
/*  */
/*  <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-8" data-type="sprite" data-offsetY="-250" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="#">Datasets</a></li>*/
/*                 <li><a class="link" href="#">Publications</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/*       <section>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 {% for publication in publications %}*/
/* 		  {% if loop.index >=1 and loop.index<=4 %} */
/*                   <h1 class="text-primary wow fadeInDown text-uppercase"  data-wow-duration="1s" data-wow-delay=".3s">Books</h1>*/
/*                   <ul>*/
/*                     <li>*/
/*                       <h2  class="text-pub wow fadeInRight text-uppercase"  data-wow-duration="1s" data-wow-delay=".3s">{{ publication.type }}</h2>*/
/*                       <ul class="pub-li">*/
/* 			{% for publ in publication.pub %}*/
/*                        	 <li>*/
/*                            {{ publ }}*/
/*                        	 </li>*/
/* 			{% endfor %}*/
/*                       </ul>*/
/*                     </li>*/
/*                    </ul>*/
/* 		  {% else %}*/
/* 		   <h1 class="text-primary wow fadeInDown text-uppercase"  data-wow-duration="1s" data-wow-delay=".3s">{{ publication.type }}</h1>*/
/* 		     <ul class="pub-li">*/
/* 		     {% for publ in publication.pub %}*/
/*                        	 <li>*/
/*                            {{ publ }}*/
/*                        	 </li>*/
/* 			{% endfor %}*/
/* 		     </ul>*/
/*                  {% endif %} */
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*   {% endblock %}    */
/* */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
