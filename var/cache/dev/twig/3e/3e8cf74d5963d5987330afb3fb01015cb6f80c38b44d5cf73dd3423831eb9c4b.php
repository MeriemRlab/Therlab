<?php

/* therlab/posts.html.twig~ */
class __TwigTemplate_7f47cc1ff2728e34c0c9f8a8735d14199e0d3ef3db7f8e65760ffac3fc2fb62f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/posts.html.twig~", 3);
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
        $__internal_9cbc50b990bb0d18aeadb9962076e9844d5a8d769cdd2ddb2d70cc0180b7b55f = $this->env->getExtension("native_profiler");
        $__internal_9cbc50b990bb0d18aeadb9962076e9844d5a8d769cdd2ddb2d70cc0180b7b55f->enter($__internal_9cbc50b990bb0d18aeadb9962076e9844d5a8d769cdd2ddb2d70cc0180b7b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/posts.html.twig~"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cbc50b990bb0d18aeadb9962076e9844d5a8d769cdd2ddb2d70cc0180b7b55f->leave($__internal_9cbc50b990bb0d18aeadb9962076e9844d5a8d769cdd2ddb2d70cc0180b7b55f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9435b4998ff18e2a004f6a5d55e5f149210955fd9786498a16a2ca497d0aad0d = $this->env->getExtension("native_profiler");
        $__internal_9435b4998ff18e2a004f6a5d55e5f149210955fd9786498a16a2ca497d0aad0d->enter($__internal_9435b4998ff18e2a004f6a5d55e5f149210955fd9786498a16a2ca497d0aad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Blog
  ";
        
        $__internal_9435b4998ff18e2a004f6a5d55e5f149210955fd9786498a16a2ca497d0aad0d->leave($__internal_9435b4998ff18e2a004f6a5d55e5f149210955fd9786498a16a2ca497d0aad0d_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_6b36b0a30794fb4b301730b456438ee980b0a0e52fadeede1433fc77e64d65af = $this->env->getExtension("native_profiler");
        $__internal_6b36b0a30794fb4b301730b456438ee980b0a0e52fadeede1433fc77e64d65af->enter($__internal_6b36b0a30794fb4b301730b456438ee980b0a0e52fadeede1433fc77e64d65af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_6b36b0a30794fb4b301730b456438ee980b0a0e52fadeede1433fc77e64d65af->leave($__internal_6b36b0a30794fb4b301730b456438ee980b0a0e52fadeede1433fc77e64d65af_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4375f43712177a98654220fd18a255bc1948b06f8f0bd6506c7044e6f2ad7e88 = $this->env->getExtension("native_profiler");
        $__internal_4375f43712177a98654220fd18a255bc1948b06f8f0bd6506c7044e6f2ad7e88->enter($__internal_4375f43712177a98654220fd18a255bc1948b06f8f0bd6506c7044e6f2ad7e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 32
        echo $this->env->getExtension('routing')->getPath("platform_posts");
        echo "\">Blog</a></li>
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
        <h2 class=\"hidden\">blog posts</h2>
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
                  <section  class=\"blog-post-list no-padding\">
                    <h2 class=\"hidden\">Last Posts</h2>
                    <!-- .blog-post -->
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPosts"]) ? $context["listPosts"] : $this->getContext($context, "listPosts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 59
            echo "                    <article class=\"blog-post wow fadeInUp\" data-wow-duration=\"1s\">
                      <span class=\"blog-date\">
\t\t\t";
            // line 61
            $context["dateTime"] = twig_date_converter($this->env, $this->getAttribute($context["post"], "createdAt", array()));
            // line 62
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateTime"]) ? $context["dateTime"] : $this->getContext($context, "dateTime")), "d"), "html", null, true);
            echo "
                        <small class=\"blog-month\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateTime"]) ? $context["dateTime"] : $this->getContext($context, "dateTime")), "M"), "html", null, true);
            echo "</small>
                      </span>
                      <span class=\"post-comments\">
                        <a class=\"iline2-rectangular22\"></a>
                        <small class=\"post-count\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post_commentsNb"]) ? $context["post_commentsNb"] : $this->getContext($context, "post_commentsNb")), $this->getAttribute($context["post"], "id", array()), array(), "array"), "id", array()), "html", null, true);
            echo "</small>
                      </span>
                      <div class=\"blog-body\">
                        <header class=\"entry-header\">
                          <a  href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute($context["post"], "image", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"post 1\" class=\"img-responsive img-full\" />
                            <div class=\"image-overlay\">
                              <p>
                                <span class=\"show-image\">
                                  <i class=\"iline2-arrow423\"></i>
                                </span>
                              </p>
                            </div>
                          </a>
                        </header>
                        <h4 class=\"text-primary text-center text-uppercase mar-top-sm\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h4>
                        <p>
                          ";
            // line 84
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["post"], "content", array()), 1000), "html", null, true);
            echo "
                        </p>
                        <a class=\"btn btn-primary text-uppercase\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\"  role=\"button\"> Read more</a>
                      </div>
                    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    <!-- /.blog-post -->
                   
                  </section>
                <!-- .navigation -->
                <nav class=\"navigation paging-navigation\">
                  <ul class=\"page-numbers pagination\">
\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 97
            echo "                    <li>
\t\t\t<a class=\"page-numbers pagination ";
            // line 98
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo "current";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_posts", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t    </li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  </ul>
                </nav><!-- /.navigation -->
                </div>
                <!-- /Left part -->
                <!-- /Right part -->
                <div class=\"col-md-4 blog-sidebar\">
                  <!-- Categories List -->
                  <div class=\"post-detail\">
                    <div class=\"post-detail-body sep-xs\">
                      <h3 class=\"text-primary text-uppercase text-center\">Categories</h3>
                      <ul class=\"text-capitalize sidebar\">
\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 113
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
        // line 115
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
";
        
        $__internal_4375f43712177a98654220fd18a255bc1948b06f8f0bd6506c7044e6f2ad7e88->leave($__internal_4375f43712177a98654220fd18a255bc1948b06f8f0bd6506c7044e6f2ad7e88_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9db5d728fdce8a9fb3bc7d884996c3f4538470e8cfecebefeab6c405c61b80a7 = $this->env->getExtension("native_profiler");
        $__internal_9db5d728fdce8a9fb3bc7d884996c3f4538470e8cfecebefeab6c405c61b80a7->enter($__internal_9db5d728fdce8a9fb3bc7d884996c3f4538470e8cfecebefeab6c405c61b80a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9db5d728fdce8a9fb3bc7d884996c3f4538470e8cfecebefeab6c405c61b80a7->leave($__internal_9db5d728fdce8a9fb3bc7d884996c3f4538470e8cfecebefeab6c405c61b80a7_prof);

    }

    public function getTemplateName()
    {
        return "therlab/posts.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 134,  271 => 133,  249 => 115,  238 => 113,  234 => 112,  221 => 101,  206 => 98,  203 => 97,  199 => 96,  191 => 90,  181 => 86,  176 => 84,  171 => 82,  158 => 72,  154 => 71,  147 => 67,  140 => 63,  135 => 62,  133 => 61,  129 => 59,  125 => 58,  96 => 32,  76 => 15,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# posts.html.twig #}*/
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
/*  */
/*   <!-- MAIN CONTAINER -->*/
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
/*         <h2 class="hidden">blog posts</h2>*/
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
/*                   <section  class="blog-post-list no-padding">*/
/*                     <h2 class="hidden">Last Posts</h2>*/
/*                     <!-- .blog-post -->*/
/* {% for post in listPosts %}*/
/*                     <article class="blog-post wow fadeInUp" data-wow-duration="1s">*/
/*                       <span class="blog-date">*/
/* 			{% set dateTime = date(post.createdAt) %}*/
/*                         {{ dateTime | date('d') }}*/
/*                         <small class="blog-month">{{ dateTime | date('M') }}</small>*/
/*                       </span>*/
/*                       <span class="post-comments">*/
/*                         <a class="iline2-rectangular22"></a>*/
/*                         <small class="post-count">{{ post_commentsNb[post.id].id }}</small>*/
/*                       </span>*/
/*                       <div class="blog-body">*/
/*                         <header class="entry-header">*/
/*                           <a  href="{{ path('platform_post', {'id': post.id}) }}">*/
/*                             <img src="{{asset("" ~ post.image.url  ) }}" alt="post 1" class="img-responsive img-full" />*/
/*                             <div class="image-overlay">*/
/*                               <p>*/
/*                                 <span class="show-image">*/
/*                                   <i class="iline2-arrow423"></i>*/
/*                                 </span>*/
/*                               </p>*/
/*                             </div>*/
/*                           </a>*/
/*                         </header>*/
/*                         <h4 class="text-primary text-center text-uppercase mar-top-sm">{{ post.title }}</h4>*/
/*                         <p>*/
/*                           {{ post.content | truncate(1000) }}*/
/*                         </p>*/
/*                         <a class="btn btn-primary text-uppercase" href="{{ path('platform_post', {'id': post.id}) }}"  role="button"> Read more</a>*/
/*                       </div>*/
/*                     </article>*/
/* {% endfor %}*/
/*                     <!-- /.blog-post -->*/
/*                    */
/*                   </section>*/
/*                 <!-- .navigation -->*/
/*                 <nav class="navigation paging-navigation">*/
/*                   <ul class="page-numbers pagination">*/
/* 			{% for p in range(1, nbPages) %}*/
/*                     <li>*/
/* 			<a class="page-numbers pagination {% if p == page %}current{% endif %}" href="{{ path('platform_posts', {'page': p}) }}">{{ p }}</a>*/
/* 		    </li>*/
/* 			{% endfor %}*/
/*                   </ul>*/
/*                 </nav><!-- /.navigation -->*/
/*                 </div>*/
/*                 <!-- /Left part -->*/
/*                 <!-- /Right part -->*/
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
/*                   */
/*                 </div>*/
/*                 <!-- /Right part -->*/
/*               </div>*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/* </section>*/
/* {% endblock %}    */
/* */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
