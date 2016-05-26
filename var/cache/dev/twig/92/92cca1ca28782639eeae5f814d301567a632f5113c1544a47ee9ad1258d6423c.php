<?php

/* project.html.twig~ */
class __TwigTemplate_3c8d5baf4162632d7cb1d516276d53af59f4d73579c45d5b25f7ac7831cfd9ca extends Twig_Template
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
        $__internal_c6ceca7fa78e284253c1fd291247f06ab4ec7d2bf8108401fa7ab44e583f4652 = $this->env->getExtension("native_profiler");
        $__internal_c6ceca7fa78e284253c1fd291247f06ab4ec7d2bf8108401fa7ab44e583f4652->enter($__internal_c6ceca7fa78e284253c1fd291247f06ab4ec7d2bf8108401fa7ab44e583f4652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project.html.twig~"));

        // line 1
        echo "      <section class=\"blue\">
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
      </section>
";
        
        $__internal_c6ceca7fa78e284253c1fd291247f06ab4ec7d2bf8108401fa7ab44e583f4652->leave($__internal_c6ceca7fa78e284253c1fd291247f06ab4ec7d2bf8108401fa7ab44e583f4652_prof);

    }

    public function getTemplateName()
    {
        return "project.html.twig~";
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
/*       <section class="blue">*/
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
/*       </section>*/
/* */
