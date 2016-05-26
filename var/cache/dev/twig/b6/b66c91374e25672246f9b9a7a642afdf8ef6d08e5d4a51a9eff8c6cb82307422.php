<?php

/* therlab/post.html.twig~ */
class __TwigTemplate_9d765acd85d28cd787754c6fd21bc21cfa6f2e91271efb48c8a127d7c99d93a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/post.html.twig~", 3);
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
        $__internal_ffa5db2a4a155f4eb8bdf51f4f8154b83fee1aebc301dc21b52feaf9baadaee8 = $this->env->getExtension("native_profiler");
        $__internal_ffa5db2a4a155f4eb8bdf51f4f8154b83fee1aebc301dc21b52feaf9baadaee8->enter($__internal_ffa5db2a4a155f4eb8bdf51f4f8154b83fee1aebc301dc21b52feaf9baadaee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/post.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa5db2a4a155f4eb8bdf51f4f8154b83fee1aebc301dc21b52feaf9baadaee8->leave($__internal_ffa5db2a4a155f4eb8bdf51f4f8154b83fee1aebc301dc21b52feaf9baadaee8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_797810a6e8902c389767b6bb7bcd84ad20fd32434411370154bdf789c69a315f = $this->env->getExtension("native_profiler");
        $__internal_797810a6e8902c389767b6bb7bcd84ad20fd32434411370154bdf789c69a315f->enter($__internal_797810a6e8902c389767b6bb7bcd84ad20fd32434411370154bdf789c69a315f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Blog
  ";
        
        $__internal_797810a6e8902c389767b6bb7bcd84ad20fd32434411370154bdf789c69a315f->leave($__internal_797810a6e8902c389767b6bb7bcd84ad20fd32434411370154bdf789c69a315f_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_e5ae4dfcd152d03936d9a2b343ab8100edc66bfd0f8719079dd7e0bb1c071fe7 = $this->env->getExtension("native_profiler");
        $__internal_e5ae4dfcd152d03936d9a2b343ab8100edc66bfd0f8719079dd7e0bb1c071fe7->enter($__internal_e5ae4dfcd152d03936d9a2b343ab8100edc66bfd0f8719079dd7e0bb1c071fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_e5ae4dfcd152d03936d9a2b343ab8100edc66bfd0f8719079dd7e0bb1c071fe7->leave($__internal_e5ae4dfcd152d03936d9a2b343ab8100edc66bfd0f8719079dd7e0bb1c071fe7_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e9d682e79c74ca12d4cec858cc672f8d2c8a71303473627705f2eaec36a362 = $this->env->getExtension("native_profiler");
        $__internal_d0e9d682e79c74ca12d4cec858cc672f8d2c8a71303473627705f2eaec36a362->enter($__internal_d0e9d682e79c74ca12d4cec858cc672f8d2c8a71303473627705f2eaec36a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("platform_posts");
        echo "\">Blog</a></li>
                <li><a class=\"link\" href=\"#\">Post</a></li>
              </ul>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- HEADER TREE END -->
      <!-- BLOG POST BODY SECTION -->
      <section class=\"pattern-3 no-padding-right\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- All blog posts -->
              <div class=\"mar-top-lg row\">
                <!-- Left part -->
                <div class=\"col-md-8 blog-main\">
                  <div class=\"post-detail sep-bottom-lg\">
                    <figure class=\"no-margin\">
                      <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "image", array()), "url", array()))), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\" />
                    </figure>
                    <div class=\"post-detail-body sep-xs\">
                      <h3 class=\"text-uppercase\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h3>
                      <span class=\"line-sep-gray\"></span>
                      <p> ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo " </p>
                    
                      <ul class=\"post-info pull-left\">
                        <li><i class=\"iline2-round27 text-primary\"></i> <a href=\"#\">";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "M d, Y"), "html", null, true);
        echo "</a></li>
                        <li><i class=\"iline2-rectangular22 text-success\"></i> <a href=\"#\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["commentsNumber"]) ? $context["commentsNumber"] : $this->getContext($context, "commentsNumber")), "html", null, true);
        echo " Comments</a></li>
                      </ul>
                      <span class=\"clearboth\">
                      </span>
                    </div>
                  </div>
                  <div class=\"post-detail mar-top-xs\">
                    <div class=\"post-detail-body sep-xs\">
\t\t";
        // line 75
        if ((twig_length_filter($this->env, (isset($context["listComments"]) ? $context["listComments"] : $this->getContext($context, "listComments"))) > 0)) {
            echo "\t
                      <h3>Comments</h3>
                      <span class=\"line-sep-gray\"></span>
                      <ul class=\"media-list\">
\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listComments"]) ? $context["listComments"] : $this->getContext($context, "listComments")));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 80
                echo "\t\t\t";
                if (($this->getAttribute($context["value"], "status", array()) == 1)) {
                    // line 81
                    echo "                        <li class=\"media\">
                          <div class=\"media-body\">
                            <h4 class=\"media-heading text-primary\">";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "firstName", array()), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "lastName", array()), "html", null, true);
                    echo " </h4>
                            <p>
                               ";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "content", array()), "html", null, true);
                    echo "
                            </p>
                          </div>
                        </li>
\t\t\t";
                }
                // line 90
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
                      </ul>
\t\t";
        }
        // line 93
        echo "                      <h4 class=\"mar-top-md\">Add a comment.</h4>
                      <span class=\"line-sep-gray\"></span>
                      <p>All the inputs are required.</p>
\t\t\t";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal mar-top-sm wow fadeIn", "data-wow-duration" => "1s", "data-wow-delay" => ".3s", "name" => "commentForm")));
        echo "
\t\t\t<p>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
                        <div class=\"row\">
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "First Name* :")));
        echo "
                              ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Last Name* :")));
        echo "
                               ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "E-mail* :")));
        echo "
                              ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                          </div>
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Comment* :")));
        echo "
                              ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
\t\t\t    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "submit btn btn-primary pull-right")));
        echo "
                          </div>
                        </div>
\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <!-- /.row -->
\t\t\t  ";
        // line 128
        echo "\t\t\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 131
            echo "\t\t    <div class=\"alert alert-warning\">
\t\t\t";
            // line 132
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                  </div>
                  <div class=\"nav-links mar-top-md\">
                    <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_post", array("id" =>  - -$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"text-uppercase pull-left\" ><i class=\"iline1-arrowhead2\"></i> Preview Post</a>
                    <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_post", array("id" =>  + +$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"text-uppercase pull-right\" >Next Post <i class=\"iline1-chevron15\"></i></a>
                  </div>
                </div>
                <!-- /Left part -->
                <!-- Right part -->
                <div class=\"col-md-4 blog-sidebar\">
                  <!-- Categories List -->
                  <div class=\"post-detail\">
                    <div class=\"post-detail-body sep-xs\">
                      <h3 class=\"text-primary text-uppercase text-center\">Categories</h3>
                      <ul class=\"text-capitalize sidebar\">
\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 150
            echo "\t\t\t\t <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_posts", array("categoryId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"iline1-spiral4\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                      </ul>
                    </div>
                  </div>
                  <!-- Categories List End -->
                </div>
                <!-- /Right part -->
              </div>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- BLOG POST BODY SECTION END -->




  ";
        
        $__internal_d0e9d682e79c74ca12d4cec858cc672f8d2c8a71303473627705f2eaec36a362->leave($__internal_d0e9d682e79c74ca12d4cec858cc672f8d2c8a71303473627705f2eaec36a362_prof);

    }

    // line 174
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2db02d5225445a6571777c466d99c68b4602988b5e7bcfdb96bed61bc6002f21 = $this->env->getExtension("native_profiler");
        $__internal_2db02d5225445a6571777c466d99c68b4602988b5e7bcfdb96bed61bc6002f21->enter($__internal_2db02d5225445a6571777c466d99c68b4602988b5e7bcfdb96bed61bc6002f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 175
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_2db02d5225445a6571777c466d99c68b4602988b5e7bcfdb96bed61bc6002f21->leave($__internal_2db02d5225445a6571777c466d99c68b4602988b5e7bcfdb96bed61bc6002f21_prof);

    }

    public function getTemplateName()
    {
        return "therlab/post.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 175,  357 => 174,  331 => 152,  320 => 150,  316 => 149,  302 => 138,  298 => 137,  294 => 135,  285 => 132,  282 => 131,  278 => 130,  272 => 128,  267 => 125,  261 => 122,  255 => 119,  251 => 118,  242 => 112,  238 => 111,  231 => 107,  227 => 106,  220 => 102,  216 => 101,  209 => 97,  205 => 96,  200 => 93,  190 => 90,  182 => 85,  175 => 83,  171 => 81,  168 => 80,  164 => 79,  157 => 75,  146 => 67,  142 => 66,  136 => 63,  131 => 61,  125 => 58,  97 => 33,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# post.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Blog*/
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
/* <!-- MAIN CONTAINER -->*/
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
/*                 <li><a class="link" href="{{ path('platform_posts') }}">Blog</a></li>*/
/*                 <li><a class="link" href="#">Post</a></li>*/
/*               </ul>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- HEADER TREE END -->*/
/*       <!-- BLOG POST BODY SECTION -->*/
/*       <section class="pattern-3 no-padding-right">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- All blog posts -->*/
/*               <div class="mar-top-lg row">*/
/*                 <!-- Left part -->*/
/*                 <div class="col-md-8 blog-main">*/
/*                   <div class="post-detail sep-bottom-lg">*/
/*                     <figure class="no-margin">*/
/*                       <img src="{{asset("" ~ post.image.url  ) }}" alt="" class="img-responsive" />*/
/*                     </figure>*/
/*                     <div class="post-detail-body sep-xs">*/
/*                       <h3 class="text-uppercase">{{ post.title }}</h3>*/
/*                       <span class="line-sep-gray"></span>*/
/*                       <p> {{ post.content }} </p>*/
/*                     */
/*                       <ul class="post-info pull-left">*/
/*                         <li><i class="iline2-round27 text-primary"></i> <a href="#">{{ post.createdAt | date('M d, Y') }}</a></li>*/
/*                         <li><i class="iline2-rectangular22 text-success"></i> <a href="#">{{ commentsNumber }} Comments</a></li>*/
/*                       </ul>*/
/*                       <span class="clearboth">*/
/*                       </span>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="post-detail mar-top-xs">*/
/*                     <div class="post-detail-body sep-xs">*/
/* 		{% if listComments|length > 0 %}	*/
/*                       <h3>Comments</h3>*/
/*                       <span class="line-sep-gray"></span>*/
/*                       <ul class="media-list">*/
/* 			{% for value in listComments %}*/
/* 			{% if value.status == 1 %}*/
/*                         <li class="media">*/
/*                           <div class="media-body">*/
/*                             <h4 class="media-heading text-primary">{{ value.firstName }}  {{ value.lastName }} </h4>*/
/*                             <p>*/
/*                                {{ value.content }}*/
/*                             </p>*/
/*                           </div>*/
/*                         </li>*/
/* 			{% endif %}*/
/* 			{% endfor %}	*/
/*                       </ul>*/
/* 		{% endif %}*/
/*                       <h4 class="mar-top-md">Add a comment.</h4>*/
/*                       <span class="line-sep-gray"></span>*/
/*                       <p>All the inputs are required.</p>*/
/* 			{{ form_start(form, {'attr': {'class': 'form-horizontal mar-top-sm wow fadeIn', 'data-wow-duration': '1s', 'data-wow-delay' : '.3s', 'name' : 'commentForm'}}) }}*/
/* 			<p>{# Les erreurs générales du formulaire. #}{{ form_errors(form) }}</p>*/
/*                         <div class="row">*/
/*                           <div class="col-md-6 col-sm-6">*/
/*                             <div class="form-group control-group">*/
/* 			      {{ form_widget(form.firstName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'First Name* :'}}) }}*/
/*                               {{ form_errors(form.firstName) }}*/
/*                               <p class="help-block"></p>*/
/*                             </div>*/
/*                             <div class="form-group control-group">*/
/* 			       {{ form_widget(form.lastName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Last Name* :'}}) }}*/
/*                                {{ form_errors(form.lastName) }}*/
/*                               <p class="help-block"></p>*/
/*                             </div>*/
/*                             <div class="form-group control-group">*/
/* 			       {{ form_widget(form.email, {'attr': {'class': 'form-control input-lg', 'placeholder': 'E-mail* :'}}) }}*/
/*                               {{ form_errors(form.email) }}*/
/*                               <p class="help-block"></p>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="col-md-6 col-sm-6">*/
/*                             <div class="form-group control-group">*/
/* 			      {{ form_widget(form.content, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Comment* :'}}) }}*/
/*                               {{ form_errors(form.content) }}*/
/*                               <p class="help-block"></p>*/
/*                             </div>*/
/* 			    {{ form_widget(form.save, {'attr': {'class': 'submit btn btn-primary pull-right'}}) }}*/
/*                           </div>*/
/*                         </div>*/
/* 			{{ form_rest(form) }}*/
/*                         <!-- /.row -->*/
/* 			  {# Fermeture de la balise <form> du formulaire HTML #}*/
/* 			  {{ form_end(form) }}*/
/*                     </div>*/
/* 		{% for flashMessage in app.session.flashbag.get('notice') %}*/
/* 		    <div class="alert alert-warning">*/
/* 			{{ flashMessage }}*/
/* 		    </div>*/
/* 		{% endfor %}*/
/*                   </div>*/
/*                   <div class="nav-links mar-top-md">*/
/*                     <a href="{{ path('platform_post', {'id': --(post.id)}) }}" class="text-uppercase pull-left" ><i class="iline1-arrowhead2"></i> Preview Post</a>*/
/*                     <a href="{{ path('platform_post', {'id': ++(post.id)}) }}" class="text-uppercase pull-right" >Next Post <i class="iline1-chevron15"></i></a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <!-- /Left part -->*/
/*                 <!-- Right part -->*/
/*                 <div class="col-md-4 blog-sidebar">*/
/*                   <!-- Categories List -->*/
/*                   <div class="post-detail">*/
/*                     <div class="post-detail-body sep-xs">*/
/*                       <h3 class="text-primary text-uppercase text-center">Categories</h3>*/
/*                       <ul class="text-capitalize sidebar">*/
/* 			{% for category in categories %}*/
/* 				 <li><a href="{{ path('platform_posts', {'categoryId':category.id}) }}" class="iline1-spiral4">{{ category.name }}</a></li>*/
/* 			{% endfor %}*/
/*                       </ul>*/
/*                     </div>*/
/*                   </div>*/
/*                   <!-- Categories List End -->*/
/*                 </div>*/
/*                 <!-- /Right part -->*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- BLOG POST BODY SECTION END -->*/
/* */
/* */
/* */
/* */
/*   {% endblock %}    */
/* */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
