<?php

/* ::art-project.html.twig */
class __TwigTemplate_c7386e7e771be638e5cbbfa94e8be1f15193b6e1237c4f4518e610e7b885f263 extends Twig_Template
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
        $__internal_69d9b00b0047a347530b0cbfb7cce7304278f454273ae06f36311ed25b19cbd0 = $this->env->getExtension("native_profiler");
        $__internal_69d9b00b0047a347530b0cbfb7cce7304278f454273ae06f36311ed25b19cbd0->enter($__internal_69d9b00b0047a347530b0cbfb7cce7304278f454273ae06f36311ed25b19cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::art-project.html.twig"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["artist"], "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            echo " ";
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
        
        $__internal_69d9b00b0047a347530b0cbfb7cce7304278f454273ae06f36311ed25b19cbd0->leave($__internal_69d9b00b0047a347530b0cbfb7cce7304278f454273ae06f36311ed25b19cbd0_prof);

    }

    public function getTemplateName()
    {
        return "::art-project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  104 => 33,  69 => 32,  62 => 28,  56 => 25,  43 => 15,  35 => 12,  22 => 1,);
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
/*                       <i class="icon iline1-person180"></i> Artist: {% for artist in project.artists %} {{ artist }}{% if not loop.last %}, {% endif %} {% endfor %}*/
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
