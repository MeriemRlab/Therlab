<?php

/* :therlab:publications.html.twig */
class __TwigTemplate_9771730dd040cadc93018922a13695587b9c045b046bc0eb50e61a5babb1deb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:publications.html.twig", 3);
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
        $__internal_909504bfce4a5c47c2b3c99e102979c95d54b316644ba275c504107a62e172ad = $this->env->getExtension("native_profiler");
        $__internal_909504bfce4a5c47c2b3c99e102979c95d54b316644ba275c504107a62e172ad->enter($__internal_909504bfce4a5c47c2b3c99e102979c95d54b316644ba275c504107a62e172ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:publications.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909504bfce4a5c47c2b3c99e102979c95d54b316644ba275c504107a62e172ad->leave($__internal_909504bfce4a5c47c2b3c99e102979c95d54b316644ba275c504107a62e172ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c8e3e3c832a2ace02dacda2e13d32f41283f2e401c7bbac04bd400de2529fa6 = $this->env->getExtension("native_profiler");
        $__internal_4c8e3e3c832a2ace02dacda2e13d32f41283f2e401c7bbac04bd400de2529fa6->enter($__internal_4c8e3e3c832a2ace02dacda2e13d32f41283f2e401c7bbac04bd400de2529fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Publications
  ";
        
        $__internal_4c8e3e3c832a2ace02dacda2e13d32f41283f2e401c7bbac04bd400de2529fa6->leave($__internal_4c8e3e3c832a2ace02dacda2e13d32f41283f2e401c7bbac04bd400de2529fa6_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_8a2876807feca37ac1e92ce09c7e60c37da718cc61b2f183a027303e8af3098d = $this->env->getExtension("native_profiler");
        $__internal_8a2876807feca37ac1e92ce09c7e60c37da718cc61b2f183a027303e8af3098d->enter($__internal_8a2876807feca37ac1e92ce09c7e60c37da718cc61b2f183a027303e8af3098d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_8a2876807feca37ac1e92ce09c7e60c37da718cc61b2f183a027303e8af3098d->leave($__internal_8a2876807feca37ac1e92ce09c7e60c37da718cc61b2f183a027303e8af3098d_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78e16be2f940db78d28049947ae6376c6e0992aacd4ccc6fa44d4f5c30a868a = $this->env->getExtension("native_profiler");
        $__internal_b78e16be2f940db78d28049947ae6376c6e0992aacd4ccc6fa44d4f5c30a868a->enter($__internal_b78e16be2f940db78d28049947ae6376c6e0992aacd4ccc6fa44d4f5c30a868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t<h1 class=\"text-primary wow fadeInDown text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">Books</h1>
                ";
        // line 50
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
            // line 51
            echo "\t\t  ";
            if ((($this->getAttribute($context["loop"], "index", array()) >= 1) && ($this->getAttribute($context["loop"], "index", array()) <= 4))) {
                echo " 
                  
                  <ul>
                    <li>
                      <h2  class=\"text-pub wow fadeInRight text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "type", array()), "html", null, true);
                echo "</h2>
                      <ul class=\"pub-li\">
\t\t\t";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "pub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["publ"]) {
                    // line 58
                    echo "                       \t <li>
                           ";
                    // line 59
                    echo twig_escape_filter($this->env, $context["publ"], "html", null, true);
                    echo "
                       \t </li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publ'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                      </ul>
                    </li>
                   </ul>
\t\t  ";
            } else {
                // line 66
                echo "\t\t   <h1 class=\"text-primary wow fadeInDown text-uppercase\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "type", array()), "html", null, true);
                echo "</h1>
\t\t     <ul class=\"pub-li\">
\t\t     ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publication"], "pub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["publ"]) {
                    // line 69
                    echo "                       \t <li>
                           ";
                    // line 70
                    echo twig_escape_filter($this->env, $context["publ"], "html", null, true);
                    echo "
                       \t </li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publ'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t     </ul>
                 ";
            }
            // line 74
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
        // line 76
        echo "                </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
  ";
        
        $__internal_b78e16be2f940db78d28049947ae6376c6e0992aacd4ccc6fa44d4f5c30a868a->leave($__internal_b78e16be2f940db78d28049947ae6376c6e0992aacd4ccc6fa44d4f5c30a868a_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2709a8caa4c1dd969ce364228e4202cb270207eb7d2d18864e82997419ecf16 = $this->env->getExtension("native_profiler");
        $__internal_d2709a8caa4c1dd969ce364228e4202cb270207eb7d2d18864e82997419ecf16->enter($__internal_d2709a8caa4c1dd969ce364228e4202cb270207eb7d2d18864e82997419ecf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d2709a8caa4c1dd969ce364228e4202cb270207eb7d2d18864e82997419ecf16->leave($__internal_d2709a8caa4c1dd969ce364228e4202cb270207eb7d2d18864e82997419ecf16_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 87,  221 => 86,  207 => 76,  192 => 74,  188 => 73,  179 => 70,  176 => 69,  172 => 68,  166 => 66,  160 => 62,  151 => 59,  148 => 58,  144 => 57,  139 => 55,  131 => 51,  114 => 50,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/* 		<h1 class="text-primary wow fadeInDown text-uppercase"  data-wow-duration="1s" data-wow-delay=".3s">Books</h1>*/
/*                 {% for publication in publications %}*/
/* 		  {% if loop.index >=1 and loop.index<=4 %} */
/*                   */
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
