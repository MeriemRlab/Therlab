<?php

/* :therlab:members.html.twig */
class __TwigTemplate_d6252b6128de497d2d635b29885379eb52da1dcdf5f61b0b71d2075b7ee754f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:members.html.twig", 3);
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
        $__internal_c3d4f6d03c99ec8ff0d3541a0194f4b42d43cf23682244c967c236e3a72e7913 = $this->env->getExtension("native_profiler");
        $__internal_c3d4f6d03c99ec8ff0d3541a0194f4b42d43cf23682244c967c236e3a72e7913->enter($__internal_c3d4f6d03c99ec8ff0d3541a0194f4b42d43cf23682244c967c236e3a72e7913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:members.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3d4f6d03c99ec8ff0d3541a0194f4b42d43cf23682244c967c236e3a72e7913->leave($__internal_c3d4f6d03c99ec8ff0d3541a0194f4b42d43cf23682244c967c236e3a72e7913_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3221947c01498c958ad8c1ae0d9743172eedbeaa335ba34f11afd795229707be = $this->env->getExtension("native_profiler");
        $__internal_3221947c01498c958ad8c1ae0d9743172eedbeaa335ba34f11afd795229707be->enter($__internal_3221947c01498c958ad8c1ae0d9743172eedbeaa335ba34f11afd795229707be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Members
  ";
        
        $__internal_3221947c01498c958ad8c1ae0d9743172eedbeaa335ba34f11afd795229707be->leave($__internal_3221947c01498c958ad8c1ae0d9743172eedbeaa335ba34f11afd795229707be_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_7e2feb3ff5969ce83b9399d5d600c626653557ec9ef30907f531fc5c8a0a9ae5 = $this->env->getExtension("native_profiler");
        $__internal_7e2feb3ff5969ce83b9399d5d600c626653557ec9ef30907f531fc5c8a0a9ae5->enter($__internal_7e2feb3ff5969ce83b9399d5d600c626653557ec9ef30907f531fc5c8a0a9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_7e2feb3ff5969ce83b9399d5d600c626653557ec9ef30907f531fc5c8a0a9ae5->leave($__internal_7e2feb3ff5969ce83b9399d5d600c626653557ec9ef30907f531fc5c8a0a9ae5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6ad68f1122dea30014267a2f10337d816187e482e1694617d10d7c5cfdc4c82 = $this->env->getExtension("native_profiler");
        $__internal_c6ad68f1122dea30014267a2f10337d816187e482e1694617d10d7c5cfdc4c82->enter($__internal_c6ad68f1122dea30014267a2f10337d816187e482e1694617d10d7c5cfdc4c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"cover-1\" data-type=\"sprite\" data-offsetY=\"-700\" data-Xposition=\"50%\" data-speed=\"-2\"></div>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <ul class=\"breadcrumb clearfix mar-top-3x\">
                <li><a class=\"link text-success\" href=\"/\">The \"R\" Lab</a></li>
                <li><a class=\"link\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("platform_members");
        echo "\">Members</a></li>
                <li><a class=\"link\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("platform_members");
        echo "\">Current</a></li>
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
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- Team introduction text -->
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-sm-12\">
                  <h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Our Members</h1>
                 
                  <div class=\"text-center\">
                    <span class=\"separator\">
                      <i class=\"icon icon-small iline1-multiple10 text-primary no-margin\"></i>
                    </span>
                  </div>
                  <p class=\"wow fadeInUp text-center\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    Our laboratory members present and past are listed below. They are interns from all around the world,
                     already 16 nationalities and counting; BSc 4th year projects, MSc students, PhDs, Database managers,
                     collaborators and artists. As an integrative laboratory we welcome physicists, mechanical and electronic engineers,
                     chemists, computing specialists, biologist, cell biologists as well as curious artists whatever their gender, 
                     religion or music taste (depending on the volume level reached during working hours!).
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
      <section class=\"pattern-3 no-padding-right\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- All team members -->
              <div class=\"member-body\">
\t\t\t\t\t  <ul class=\"isotope-member wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".9s\">
\t\t\t\t\t\t<!--team member-->
\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 92
            echo "\t\t\t\t\t\t<li class=\"member\">
\t\t\t\t\t\t\t  <img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute($context["member"], "image", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["member"], "image", array()), "alt", array()), "html", null, true);
            echo "\" class=\"img-responsive\">
\t\t\t\t\t\t\t  <h2 class=\"text-primary\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "name", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t  <p>
\t\t\t\t\t\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "bio", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t  </p>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t<!--/team member-->
\t\t\t\t\t  </ul>
\t\t\t  </div>
              <!-- /All team members -->
 \t\t </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>



  ";
        
        $__internal_c6ad68f1122dea30014267a2f10337d816187e482e1694617d10d7c5cfdc4c82->leave($__internal_c6ad68f1122dea30014267a2f10337d816187e482e1694617d10d7c5cfdc4c82_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e74c56f5a5f8f1e233eec319a6fcef20be212087d7f889ed87812b5ea100e37a = $this->env->getExtension("native_profiler");
        $__internal_e74c56f5a5f8f1e233eec319a6fcef20be212087d7f889ed87812b5ea100e37a->enter($__internal_e74c56f5a5f8f1e233eec319a6fcef20be212087d7f889ed87812b5ea100e37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        
        $__internal_e74c56f5a5f8f1e233eec319a6fcef20be212087d7f889ed87812b5ea100e37a->leave($__internal_e74c56f5a5f8f1e233eec319a6fcef20be212087d7f889ed87812b5ea100e37a_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 118,  210 => 117,  189 => 100,  179 => 96,  174 => 94,  168 => 93,  165 => 92,  161 => 91,  101 => 34,  97 => 33,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# members.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Members*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/*   {% endblock %}*/
/* */
/*   {% block body%}*/
/*   */
/*   {{ parent() }}*/
/* */
/* */
/*  <!-- MAIN CONTAINER -->*/
/*     <div class="main-content">*/
/*       <!-- HEADER TREE -->*/
/*       <section class="header-tree" data-speed="8" data-type="background">*/
/*         <h2 class="hidden">Header tree</h2>*/
/*         <!-- parallax background -->*/
/*         <div class="cover-1" data-type="sprite" data-offsetY="-700" data-Xposition="50%" data-speed="-2"></div>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <ul class="breadcrumb clearfix mar-top-3x">*/
/*                 <li><a class="link text-success" href="/">The "R" Lab</a></li>*/
/*                 <li><a class="link" href="{{ path('platform_members') }}">Members</a></li>*/
/*                 <li><a class="link" href="{{ path('platform_members') }}">Current</a></li>*/
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
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- Team introduction text -->*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                   <h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Our Members</h1>*/
/*                  */
/*                   <div class="text-center">*/
/*                     <span class="separator">*/
/*                       <i class="icon icon-small iline1-multiple10 text-primary no-margin"></i>*/
/*                     </span>*/
/*                   </div>*/
/*                   <p class="wow fadeInUp text-center"  data-wow-duration="1s" data-wow-delay=".3s">*/
/*                     Our laboratory members present and past are listed below. They are interns from all around the world,*/
/*                      already 16 nationalities and counting; BSc 4th year projects, MSc students, PhDs, Database managers,*/
/*                      collaborators and artists. As an integrative laboratory we welcome physicists, mechanical and electronic engineers,*/
/*                      chemists, computing specialists, biologist, cell biologists as well as curious artists whatever their gender, */
/*                      religion or music taste (depending on the volume level reached during working hours!).*/
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
/*       <section class="pattern-3 no-padding-right">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- All team members -->*/
/*               <div class="member-body">*/
/* 					  <ul class="isotope-member wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">*/
/* 						<!--team member-->*/
/* 						{% for member in members %}*/
/* 						<li class="member">*/
/* 							  <img src="{{ asset("" ~ member.image.url  ) }}" alt="{{ member.image.alt }}" class="img-responsive">*/
/* 							  <h2 class="text-primary">{{ member.name }}</h2>*/
/* 							  <p>*/
/* 								{{ member.bio }}*/
/* 							  </p>*/
/* 						</li>*/
/* 						{% endfor %}*/
/* 						<!--/team member-->*/
/* 					  </ul>*/
/* 			  </div>*/
/*               <!-- /All team members -->*/
/*  		 </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/* */
/* */
/* */
/*   {% endblock %}    */
/* */
/* */
/*   {% block javascripts %}*/
/*    {{ parent() }}*/
/*   {% endblock %}*/
/* */
/* */
