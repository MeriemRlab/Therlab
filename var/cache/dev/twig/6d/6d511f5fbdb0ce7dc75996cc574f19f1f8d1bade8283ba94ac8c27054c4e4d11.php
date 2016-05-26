<?php

/* ::project.html.twig */
class __TwigTemplate_5811f5b6db0499c6111782147deb3caee1fd7d5fc83ca2fba7dae2d3d4ad483c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a766ed2d1b79cf0866594ecd99dffe05faee6de8f0374fb1e6960ee07f6024 = $this->env->getExtension("native_profiler");
        $__internal_97a766ed2d1b79cf0866594ecd99dffe05faee6de8f0374fb1e6960ee07f6024->enter($__internal_97a766ed2d1b79cf0866594ecd99dffe05faee6de8f0374fb1e6960ee07f6024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::project.html.twig"));

        // line 1
        echo "
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"thumbnail\">
                    <figure>
                      <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "url", array()), "html", null, true);
        echo "\" />                                
                      <div class=\"image-overlay\">
                        <p>
                          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "url", array()))), "html", null, true);
        echo "\" class=\"show-image\">
                            <i class=\"iline2-arrows55\"></i>
                          </a>
                        </p>
                      </div><!--image overlay-->
                    </figure><!--/figure-->
                    
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "</h2>
                  <span class=\"line-sep-blue\"></span>
                  <p class=\"wow fadeInUp\"  data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "
                  </p>
                   <ul class=\"ic-list wow bounceInRight\"  data-wow-duration=\"1s\" data-wow-delay=\"1.4s\">
                    <li>
                      <i class=\"icon iline2-id1\"></i> Members
                    </li>
                    <li>
                      <i class=\"icon iline1-document45\"></i> Publications
                    </li>
                    <li>
                      <i class=\"icon iline1-group29\"></i> Collaborators
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- /Project item -->

";
        
        $__internal_97a766ed2d1b79cf0866594ecd99dffe05faee6de8f0374fb1e6960ee07f6024->leave($__internal_97a766ed2d1b79cf0866594ecd99dffe05faee6de8f0374fb1e6960ee07f6024_prof);

    }

    public function getTemplateName()
    {
        return "::project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  57 => 26,  44 => 16,  36 => 13,  22 => 1,);
    }
}
/* */
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-md-6">*/
/*                   <div class="thumbnail">*/
/*                     <figure>*/
/*                       <img src="{{ asset("" ~ project.image.url  ) }}" class="img-responsive" alt="{{  project.image.url }}" />                                */
/*                       <div class="image-overlay">*/
/*                         <p>*/
/*                           <a href="{{ asset("" ~ project.image.url  ) }}" class="show-image">*/
/*                             <i class="iline2-arrows55"></i>*/
/*                           </a>*/
/*                         </p>*/
/*                       </div><!--image overlay-->*/
/*                     </figure><!--/figure-->*/
/*                     */
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">{{ project.title }}</h2>*/
/*                   <span class="line-sep-blue"></span>*/
/*                   <p class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".4s">*/
/*                     {{ project.description }}*/
/*                   </p>*/
/*                    <ul class="ic-list wow bounceInRight"  data-wow-duration="1s" data-wow-delay="1.4s">*/
/*                     <li>*/
/*                       <i class="icon iline2-id1"></i> Members*/
/*                     </li>*/
/*                     <li>*/
/*                       <i class="icon iline1-document45"></i> Publications*/
/*                     </li>*/
/*                     <li>*/
/*                       <i class="icon iline1-group29"></i> Collaborators*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*         <!-- /Project item -->*/
/* */
/* */
