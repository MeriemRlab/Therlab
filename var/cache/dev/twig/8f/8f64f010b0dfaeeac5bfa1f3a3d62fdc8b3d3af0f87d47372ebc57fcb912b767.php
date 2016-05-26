<?php

/* therlab/members.html.twig~ */
class __TwigTemplate_25c55d52d6c2b390ec3ba616142e1ee60a94c78ece9881e8ce7cd451ea3bd5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/members.html.twig~", 3);
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
        $__internal_2184973a45c30575519e01577479c51474187e94056d64b278a20cc25a3c7211 = $this->env->getExtension("native_profiler");
        $__internal_2184973a45c30575519e01577479c51474187e94056d64b278a20cc25a3c7211->enter($__internal_2184973a45c30575519e01577479c51474187e94056d64b278a20cc25a3c7211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/members.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2184973a45c30575519e01577479c51474187e94056d64b278a20cc25a3c7211->leave($__internal_2184973a45c30575519e01577479c51474187e94056d64b278a20cc25a3c7211_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5892c1887f0713c209274525a46028ee2c78fdb1eeec1bfa62ea0608a17dead9 = $this->env->getExtension("native_profiler");
        $__internal_5892c1887f0713c209274525a46028ee2c78fdb1eeec1bfa62ea0608a17dead9->enter($__internal_5892c1887f0713c209274525a46028ee2c78fdb1eeec1bfa62ea0608a17dead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Members
  ";
        
        $__internal_5892c1887f0713c209274525a46028ee2c78fdb1eeec1bfa62ea0608a17dead9->leave($__internal_5892c1887f0713c209274525a46028ee2c78fdb1eeec1bfa62ea0608a17dead9_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_176565cc6d382db9657440dbcfca278d55dfc271ea738523414cf2bc57cebe2e = $this->env->getExtension("native_profiler");
        $__internal_176565cc6d382db9657440dbcfca278d55dfc271ea738523414cf2bc57cebe2e->enter($__internal_176565cc6d382db9657440dbcfca278d55dfc271ea738523414cf2bc57cebe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_176565cc6d382db9657440dbcfca278d55dfc271ea738523414cf2bc57cebe2e->leave($__internal_176565cc6d382db9657440dbcfca278d55dfc271ea738523414cf2bc57cebe2e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_850ffa87c3b94981c0948ee4cf6b430fcdd5394248a2a92b2b44f6974f465d55 = $this->env->getExtension("native_profiler");
        $__internal_850ffa87c3b94981c0948ee4cf6b430fcdd5394248a2a92b2b44f6974f465d55->enter($__internal_850ffa87c3b94981c0948ee4cf6b430fcdd5394248a2a92b2b44f6974f465d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <li><a class=\"link\" href=\"members.html\">Current</a></li>
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
        
        $__internal_850ffa87c3b94981c0948ee4cf6b430fcdd5394248a2a92b2b44f6974f465d55->leave($__internal_850ffa87c3b94981c0948ee4cf6b430fcdd5394248a2a92b2b44f6974f465d55_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c9761cc289196f7ec44ea72c99308bb43b74e850c1ecaff8ce7e5efcad35493 = $this->env->getExtension("native_profiler");
        $__internal_3c9761cc289196f7ec44ea72c99308bb43b74e850c1ecaff8ce7e5efcad35493->enter($__internal_3c9761cc289196f7ec44ea72c99308bb43b74e850c1ecaff8ce7e5efcad35493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        
        $__internal_3c9761cc289196f7ec44ea72c99308bb43b74e850c1ecaff8ce7e5efcad35493->leave($__internal_3c9761cc289196f7ec44ea72c99308bb43b74e850c1ecaff8ce7e5efcad35493_prof);

    }

    public function getTemplateName()
    {
        return "therlab/members.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 118,  207 => 117,  186 => 100,  176 => 96,  171 => 94,  165 => 93,  162 => 92,  158 => 91,  97 => 33,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/*                 <li><a class="link" href="members.html">Current</a></li>*/
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
