<?php

/* art-project.html.twig~ */
class __TwigTemplate_d1782d660bd9b222d99b2d911f8ac30a39c64101e5ed0def62aeb364e1cb1688 extends Twig_Template
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
        $__internal_bfc6006c55fc5de1980eacefd90eb7b9a06b3b434fecf4d20f3d4fdcbf4e09d3 = $this->env->getExtension("native_profiler");
        $__internal_bfc6006c55fc5de1980eacefd90eb7b9a06b3b434fecf4d20f3d4fdcbf4e09d3->enter($__internal_bfc6006c55fc5de1980eacefd90eb7b9a06b3b434fecf4d20f3d4fdcbf4e09d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "art-project.html.twig~"));

        // line 1
        echo " <!-- .container -->
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
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "url", array()))), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "image", array()), "url", array()), "html", null, true);
        echo "\" />                                
                      <div class=\"image-overlay\">
                        <p>
                          <a href=\"";
        // line 15
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
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "</h2>
                  <span class=\"line-sep-blue\"></span>
                  <p class=\"wow fadeInUp\"  data-wow-duration=\"1s\" data-wow-delay=\".4s\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "
                  </p>
                    <ul class=\"ic-list wow bounceInRight\"  data-wow-duration=\"1s\" data-wow-delay=\"1.4s\">
                    <li>
                      <i class=\"icon iline1-person180\"></i> Artist: ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "artists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["artist"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </li>
                    <li>
                      <i class=\"icon iline1-earth9\"></i>Website: <a href=\"project.website\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "</a>
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
        
        $__internal_bfc6006c55fc5de1980eacefd90eb7b9a06b3b434fecf4d20f3d4fdcbf4e09d3->leave($__internal_bfc6006c55fc5de1980eacefd90eb7b9a06b3b434fecf4d20f3d4fdcbf4e09d3_prof);

    }

    public function getTemplateName()
    {
        return "art-project.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  80 => 33,  69 => 32,  62 => 28,  56 => 25,  43 => 15,  35 => 12,  22 => 1,);
    }
}
/*  <!-- .container -->*/
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
/*                     <ul class="ic-list wow bounceInRight"  data-wow-duration="1s" data-wow-delay="1.4s">*/
/*                     <li>*/
/*                       <i class="icon iline1-person180"></i> Artist: {% for artist in project.artists %} {{ artist }} {% endfor %}*/
/*                     </li>*/
/*                     <li>*/
/*                       <i class="icon iline1-earth9"></i>Website: <a href="project.website">{{ project.title }}</a>*/
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
