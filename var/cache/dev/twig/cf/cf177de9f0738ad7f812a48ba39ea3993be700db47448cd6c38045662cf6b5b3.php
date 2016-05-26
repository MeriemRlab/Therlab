<?php

/* :therlab:post.html.twig */
class __TwigTemplate_3a6818ef335679b2e4fd7b3b0a5179cb6ba8537f588fd8b31aa9690a77ed6862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":therlab:post.html.twig", 3);
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
        $__internal_1b1535a364f224fcad1c47ab55fa65a22471fb742b62803f7cdc3153084d252a = $this->env->getExtension("native_profiler");
        $__internal_1b1535a364f224fcad1c47ab55fa65a22471fb742b62803f7cdc3153084d252a->enter($__internal_1b1535a364f224fcad1c47ab55fa65a22471fb742b62803f7cdc3153084d252a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":therlab:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b1535a364f224fcad1c47ab55fa65a22471fb742b62803f7cdc3153084d252a->leave($__internal_1b1535a364f224fcad1c47ab55fa65a22471fb742b62803f7cdc3153084d252a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1293eb52844cda1508128e67c940fd391c3c39a90a5f8251efa1472bf0b7ec4f = $this->env->getExtension("native_profiler");
        $__internal_1293eb52844cda1508128e67c940fd391c3c39a90a5f8251efa1472bf0b7ec4f->enter($__internal_1293eb52844cda1508128e67c940fd391c3c39a90a5f8251efa1472bf0b7ec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Blog
  ";
        
        $__internal_1293eb52844cda1508128e67c940fd391c3c39a90a5f8251efa1472bf0b7ec4f->leave($__internal_1293eb52844cda1508128e67c940fd391c3c39a90a5f8251efa1472bf0b7ec4f_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_c04e25da3402d46d7df67d9b4f68b71dbeb4f5e466ad6437fc2a2591e6951590 = $this->env->getExtension("native_profiler");
        $__internal_c04e25da3402d46d7df67d9b4f68b71dbeb4f5e466ad6437fc2a2591e6951590->enter($__internal_c04e25da3402d46d7df67d9b4f68b71dbeb4f5e466ad6437fc2a2591e6951590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_c04e25da3402d46d7df67d9b4f68b71dbeb4f5e466ad6437fc2a2591e6951590->leave($__internal_c04e25da3402d46d7df67d9b4f68b71dbeb4f5e466ad6437fc2a2591e6951590_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b9a53cd55f93efeea2e1e20b59092dceb6401790dc78766405c64fa898eb68 = $this->env->getExtension("native_profiler");
        $__internal_70b9a53cd55f93efeea2e1e20b59092dceb6401790dc78766405c64fa898eb68->enter($__internal_70b9a53cd55f93efeea2e1e20b59092dceb6401790dc78766405c64fa898eb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                        <li class=\"media\">
                          <div class=\"media-body\">
                            <h4 class=\"media-heading text-primary\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "firstName", array()), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "lastName", array()), "html", null, true);
                echo " </h4>
                            <p>
                               ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "content", array()), "html", null, true);
                echo "
                            </p>
                          </div>
                        </li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t
                      </ul>
\t\t";
        }
        // line 91
        echo "                      <h4 class=\"mar-top-md\">Add a comment.</h4>
                      <span class=\"line-sep-gray\"></span>
                      <p>All the inputs are required.</p>
\t\t\t";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal mar-top-sm wow fadeIn", "data-wow-duration" => "1s", "data-wow-delay" => ".3s", "name" => "commentForm")));
        echo "
\t\t\t<p>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
                        <div class=\"row\">
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "First Name* :")));
        echo "
                              ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Last Name* :")));
        echo "
                               ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "E-mail* :")));
        echo "
                              ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                          </div>
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Comment* :")));
        echo "
                              ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
\t\t\t    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "submit btn btn-primary pull-right")));
        echo "
                          </div>
                        </div>
\t\t\t";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <!-- /.row -->
\t\t\t  ";
        // line 126
        echo "\t\t\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 129
            echo "\t\t    <div class=\"alert alert-warning\">
\t\t\t";
            // line 130
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                  </div>
                  <div class=\"nav-links mar-top-md\">
                    <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_post", array("id" =>  - -$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"text-uppercase pull-left\" ><i class=\"iline1-arrowhead2\"></i> Preview Post</a>
                    <a href=\"";
        // line 136
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
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
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
        // line 150
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
        
        $__internal_70b9a53cd55f93efeea2e1e20b59092dceb6401790dc78766405c64fa898eb68->leave($__internal_70b9a53cd55f93efeea2e1e20b59092dceb6401790dc78766405c64fa898eb68_prof);

    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5df9441d236bce6f3967120d9678c1fd4bc060ac03bd1245b7fc3ffc856a627c = $this->env->getExtension("native_profiler");
        $__internal_5df9441d236bce6f3967120d9678c1fd4bc060ac03bd1245b7fc3ffc856a627c->enter($__internal_5df9441d236bce6f3967120d9678c1fd4bc060ac03bd1245b7fc3ffc856a627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 173
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_5df9441d236bce6f3967120d9678c1fd4bc060ac03bd1245b7fc3ffc856a627c->leave($__internal_5df9441d236bce6f3967120d9678c1fd4bc060ac03bd1245b7fc3ffc856a627c_prof);

    }

    public function getTemplateName()
    {
        return ":therlab:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 173,  352 => 172,  326 => 150,  315 => 148,  311 => 147,  297 => 136,  293 => 135,  289 => 133,  280 => 130,  277 => 129,  273 => 128,  267 => 126,  262 => 123,  256 => 120,  250 => 117,  246 => 116,  237 => 110,  233 => 109,  226 => 105,  222 => 104,  215 => 100,  211 => 99,  204 => 95,  200 => 94,  195 => 91,  190 => 88,  179 => 84,  172 => 82,  168 => 80,  164 => 79,  157 => 75,  146 => 67,  142 => 66,  136 => 63,  131 => 61,  125 => 58,  97 => 33,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
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
/*                         <li class="media">*/
/*                           <div class="media-body">*/
/*                             <h4 class="media-heading text-primary">{{ value.firstName }}  {{ value.lastName }} </h4>*/
/*                             <p>*/
/*                                {{ value.content }}*/
/*                             </p>*/
/*                           </div>*/
/*                         </li>*/
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
