<?php

/* therlab/index.html.twig */
class __TwigTemplate_d33268db0cb24641a89b7bf0ffabde298d34812fbff96dc23002600f83a94e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "therlab/index.html.twig", 3);
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
        $__internal_027baf035c91d760003b51c3104b348f1494a5c6a029e0fd8cbc420eabb9814c = $this->env->getExtension("native_profiler");
        $__internal_027baf035c91d760003b51c3104b348f1494a5c6a029e0fd8cbc420eabb9814c->enter($__internal_027baf035c91d760003b51c3104b348f1494a5c6a029e0fd8cbc420eabb9814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "therlab/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027baf035c91d760003b51c3104b348f1494a5c6a029e0fd8cbc420eabb9814c->leave($__internal_027baf035c91d760003b51c3104b348f1494a5c6a029e0fd8cbc420eabb9814c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54a1f9c076e6bb77ac1c8f5e0b79ea75937d47f9c17cd6a0734c104bd86f79a = $this->env->getExtension("native_profiler");
        $__internal_a54a1f9c076e6bb77ac1c8f5e0b79ea75937d47f9c17cd6a0734c104bd86f79a->enter($__internal_a54a1f9c076e6bb77ac1c8f5e0b79ea75937d47f9c17cd6a0734c104bd86f79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    The \"R\" Lab - Home
  ";
        
        $__internal_a54a1f9c076e6bb77ac1c8f5e0b79ea75937d47f9c17cd6a0734c104bd86f79a->leave($__internal_a54a1f9c076e6bb77ac1c8f5e0b79ea75937d47f9c17cd6a0734c104bd86f79a_prof);

    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        $__internal_3d4a788779a81d380dc8ff9f82df0fc1e994a7822ac771053933c9980066a609 = $this->env->getExtension("native_profiler");
        $__internal_3d4a788779a81d380dc8ff9f82df0fc1e994a7822ac771053933c9980066a609->enter($__internal_3d4a788779a81d380dc8ff9f82df0fc1e994a7822ac771053933c9980066a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
  ";
        
        $__internal_3d4a788779a81d380dc8ff9f82df0fc1e994a7822ac771053933c9980066a609->leave($__internal_3d4a788779a81d380dc8ff9f82df0fc1e994a7822ac771053933c9980066a609_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc64de4a217da85e747051d18784b790b6995a07973824780d225244b8389059 = $this->env->getExtension("native_profiler");
        $__internal_bc64de4a217da85e747051d18784b790b6995a07973824780d225244b8389059->enter($__internal_bc64de4a217da85e747051d18784b790b6995a07973824780d225244b8389059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <!-- MAIN CONTAINER -->
    <div class=\"main-content\">
      <!-- Image Slider --> 
      <section class=\"slider-content\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-xs-12 no-padding\">
                  <div class=\"banner-model\">
                    
                        <iframe src=\"https://sketchfab.com/models/6911cb95564d49beaba52d8e9e62ffab/embed?ui_controls=0&amp;ui_watermark=0&amp;ui_stop=0&amp;autospin=0.2&amp;scrollwheel=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0&amp;transparent=1\" data-src=\"https://sketchfab.com/models/6911cb95564d49beaba52d8e9e62ffab/embed?ui_controls=0&amp;ui_watermark=0&amp;ui_stop=0&amp;autospin=0.2&amp;scrollwheel=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0&amp;transparent=1\" width=\"700\" height=\"500\" allowtransparency=\"true\" style=\"border:0;\" >
\t\t\t\t\t\t</iframe>
                        
                    </div>
                    <div class=\"slider-inner\">
                      <div class=\"boxed\">
                        <h1 class=\"text-primary wow fadeInDown text-uppercase\"  data-wow-duration=\"1.8s\" data-wow-delay=\".2s\">The \"R\" lab</h1>
                        <span class=\"line-sep-green\"></span>
                        <h3 class=\"text-white text-uppercase wow fadeInUp\" style=\"white-space: nowrap;\" data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                          The Integrative Biology Laboratory
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section> 
      <!-- /Image Slider --> 
      <section class=\"blue cut-ccw02\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-sm-6 col-xs-12\">
                  <h2 class=\"uppercase wow fadeInDown\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">The \"R\" Laboratory</h2>
                  <span class=\"line-sep-blue\"></span>
                  <p class=\"wow fadeInUp\"  data-wow-duration=\"1s\" data-wow-delay=\".3s\">
                    The \"R\" lab (renaissance) is an interdisciplinary platform 
\t\t\t\t\tintegrating knowledge from Arts to Zoology to put Life Sciences into context.
\t\t\t\t\tWe follow circular economy approaches and move forward 
\t\t\t\t\ttowards a fully three dimensional view of the biological world.  
                  </p>
                </div>
                <div class=\"col-sm-6 col-xs-12\">

                  <div class=\"thumbnail mar-auto wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    <figure>
                      <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/media/Copepod.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" />                                
                      <div class=\"image-overlay\">
                        <p>
                          <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/media/Copepod.jpg"), "html", null, true);
        echo "\" class=\"show-image\">
                            <i class=\"iline2-arrows55\"></i>
                          </a>
                        </p>
                      </div><!--image overlay-->
                    </figure><!--/figure-->
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
     <section class=\"pattern-3\">
\t\t\t<h1 class=\"text-uppercase text-primary wow fadeInDown text-center\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Latest News</h1>
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"panel-group panel-accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 109
            echo "\t\t<!-- panel  -->
                <div class=\"panel panel-default\">
\t\t\t\t   <div class=\"panel-heading\" role=\"tab\" id=\"";
            // line 111
            echo twig_escape_filter($this->env, ("heading" . $this->getAttribute((isset($context["tagClasses"]) ? $context["tagClasses"] : $this->getContext($context, "tagClasses")), $this->getAttribute($context["loop"], "index", array()), array(), "array")), "html", null, true);
            echo "\">
                        <div  class=\"side-tab\" data-target=\"";
            // line 112
            echo twig_escape_filter($this->env, ("#tab" . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\">
                          <h4 class=\"panel-title\">
                            <a ";
            // line 114
            if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                echo "class=\"collapsed\"";
            }
            echo " role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"";
            echo twig_escape_filter($this->env, ("#collapse" . $this->getAttribute((isset($context["tagClasses"]) ? $context["tagClasses"] : $this->getContext($context, "tagClasses")), $this->getAttribute($context["loop"], "index", array()), array(), "array")), "html", null, true);
            echo "\" aria-expanded=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"";
            echo twig_escape_filter($this->env, ("collapse" . $this->getAttribute((isset($context["tagClasses"]) ? $context["tagClasses"] : $this->getContext($context, "tagClasses")), $this->getAttribute($context["loop"], "index", array()), array(), "array")), "html", null, true);
            echo "\">
                              ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
                            </a>
                          </h4>
                        </div>
                        <i class=\"icon iline2-arrow407\"></i>
                      </div>
                      <div id=\"";
            // line 121
            echo twig_escape_filter($this->env, ("collapse" . $this->getAttribute((isset($context["tagClasses"]) ? $context["tagClasses"] : $this->getContext($context, "tagClasses")), $this->getAttribute($context["loop"], "index", array()), array(), "array")), "html", null, true);
            echo "\" class=\"panel-collapse collapse";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " in";
            }
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, ("heading" . $this->getAttribute((isset($context["tagClasses"]) ? $context["tagClasses"] : $this->getContext($context, "tagClasses")), $this->getAttribute($context["loop"], "index", array()), array(), "array")), "html", null, true);
            echo "\">
\t\t\t<p class=\"panel-body no-margin-bottom\">
                          ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "
                        </p>
                      </div>

\t\t</div>
                <!-- /panel  -->
 \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                
                  </div> <!-- /.panel-group -->
                </div> <!-- /.col-md-6 -->
                <div class=\"col-md-6 hidden-xs\">
                  <!-- begin notebook mockup -->
                  <div class=\"md-notebook md-glare\">
                    <div class=\"md-lid\">
                      <div class=\"md-camera\"></div>
                      <div class=\"md-screen\">
                        <!-- content goes here -->                
                        <div class=\"tab-featured-image\">
                          <div class=\"tab-content\">
                           ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 143
            echo "\t\t\t\t<div class=\"tab-pane ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "in active";
            } elseif ($this->getAttribute($context["loop"], "last", array())) {
                echo "fade";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ("tab" . $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" >
\t\t\t\t\t";
            // line 144
            echo twig_include($this->env, $context, "newspic.html.twig", array("new" => $context["new"]), false);
            echo "
\t\t\t\t</div>
\t \t\t   ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"md-base\"></div>
                  </div> <!-- end notebook mockup -->
                </div> <!-- /.col-md-6 -->
              </div> <!--/ .row -->
            </div>
          </div>
        </div>
        <!-- comment -->
      </section>
      <!-- Features -->
      <section class=\"white\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <div class=\"col-md-6 mar-bottom-md\">
                  <span class=\"icon icon-3DBio\"></span>
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">3D Biological Imaging</h2>
                  <span class=\"line-sep-gray\"></span>
                  <p class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    From light sheet microscopy to kite aerial photogrammetry, 
\t\t\t\t\tthe Rlab aims to image the biological world as it is.
                  </p>
                </div>
                <div class=\"col-md-6 mar-bottom-md\">
                  <span class=\"icon icon-tissEng\"></span>
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Tissue Engineering</h2>
                  <span class=\"line-sep-gray\"></span>
                  <p class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    Using microcarriers, microcontact printing or even 3D bioprinting,
\t\t\t\t\twe develop more realistic tissue model systems.
                  </p>
                </div>
                <div class=\"col-md-6 mar-bottom-md\">
                  <span class=\"icon icon-cellBio\"></span>
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Evolutionary Cell Biology</h2>
                  <span class=\"line-sep-gray\"></span>
                  <p class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    Understanding tissue functions requires a deeper understanding of
\t\t\t\t\tits origins and the deeper roots explaining its current complex compartmentalisation.
                  </p>
                </div>
                <div class=\"col-md-6 mar-bottom-md\">
                  <span class=\"icon icon-society\"></span>
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Science and Society</h2>
                  <span class=\"line-sep-gray\"></span>
                  <p class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    We work with schools, designers, artists, NGOs on specific biology 
\t\t\t\t\trelated projects and provide consultancy services to companies.
                  </p>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /Features -->
     
      <!-- Mission -->
      <section class=\"pattern-3\">
        <!-- .container -->
        <div class=\"container\">
          <!-- .row -->
          <div class=\"row\">
            <!-- .col-md-12 -->
            <div class=\"col-md-12\">
              <!-- .row -->
              <div class=\"row\">
                <!-- .col-md-12 -->
                <div class=\"col-md-12\">
                  <h2 class=\"wow fadeInDown text-uppercase\"  data-wow-duration=\".8s\" data-wow-delay=\".2s\">Our mission and vision</h2>
                  <span class=\"line-sep-gray\"></span>
                  <p class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\".5s\">
                    The Integrative Biology Laboratory or \"R\" Lab is a pluri-disciplinary laboratory 
                    focusing on the functions of epithelia. We use physics, chemistry, engineering, 
                    molecular and cell biology techniques to study the secretory process. 
                    We combine an evolutionary approach from Planctomycetes to Human to new biophysical 
                    and optical methods ranging from cell \"morphing\" to Light Sheet Microscopy for 3D imaging.
                    Our ultimate goal is to achieve a continuum of knowledge from single bacteria excretion capacity
                    to complex tissue secretion ability in an organism context. For example, we currently studide 
                    epithelia functions at the molecular level within artificial epithelial tissues (lung, kidney, gut) 
                    to create optimal conditions for cell biology and molecular approaches as well as drug screening 
                    on specifically targeted functions: protein expressing defect (cystic fibrosis, lung), 
                    water retention (kidney diseases), tumor formation (Epithelial Mesenchymal Transition EMT, metastasis..) or even infections.
                    We also provide advices and optical set-ups to research groups and collaborate extensively with 
                    the private sectors (Carl Zeiss Microscopy GmbH, Aquamarine Power Ltd, ANDOR Ltd, Aura Optik GmbH, Vornia Ltd...).
                  </p>
                 
                </div>
                <!-- /.col-md-12 -->
              </div>
              <!-- /.row -->
              <!-- .row -->
              <div class=\"row\">
                <!-- .col-md-12 -->
                <div class=\"col-md-12\">
                 
                </div>
                <!-- /.col-md-12 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /Mission -->

    <!-- Begin logos section-->
       <!-- /.row -->
              <div class=\"row\">
                <div class=\"\">
                  <!-- .logos -->
                  <ul class=\"logos\">
                   ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 276
            echo "                    <li><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("" . $this->getAttribute($context["image"], "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "url", array()), "html", null, true);
            echo "\"/></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                  </ul>
                  <!-- /.logos -->
                </div>
              </div>
              <!-- /.row -->
      <!-- /Logos section-->
";
        
        $__internal_bc64de4a217da85e747051d18784b790b6995a07973824780d225244b8389059->leave($__internal_bc64de4a217da85e747051d18784b790b6995a07973824780d225244b8389059_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fffc1930389fcb75533a22b3d97c4ebe64b7764a5da56e43491d2933a7ccc86f = $this->env->getExtension("native_profiler");
        $__internal_fffc1930389fcb75533a22b3d97c4ebe64b7764a5da56e43491d2933a7ccc86f->enter($__internal_fffc1930389fcb75533a22b3d97c4ebe64b7764a5da56e43491d2933a7ccc86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_fffc1930389fcb75533a22b3d97c4ebe64b7764a5da56e43491d2933a7ccc86f->leave($__internal_fffc1930389fcb75533a22b3d97c4ebe64b7764a5da56e43491d2933a7ccc86f_prof);

    }

    public function getTemplateName()
    {
        return "therlab/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 287,  481 => 286,  468 => 278,  457 => 276,  453 => 275,  323 => 147,  306 => 144,  295 => 143,  278 => 142,  264 => 130,  243 => 123,  232 => 121,  223 => 115,  207 => 114,  202 => 112,  198 => 111,  194 => 109,  177 => 108,  147 => 81,  141 => 78,  73 => 14,  67 => 13,  57 => 10,  51 => 9,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# index.html.twig #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/*   {% block title %}*/
/*     The "R" Lab - Home*/
/*   {% endblock %}*/
/* */
/*   {% block css %}*/
/* 	{{ parent() }}*/
/*   {% endblock %}*/
/* */
/*   {% block body%}*/
/*     {{ parent() }}*/
/*     <!-- MAIN CONTAINER -->*/
/*     <div class="main-content">*/
/*       <!-- Image Slider --> */
/*       <section class="slider-content">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-xs-12 no-padding">*/
/*                   <div class="banner-model">*/
/*                     */
/*                         <iframe src="https://sketchfab.com/models/6911cb95564d49beaba52d8e9e62ffab/embed?ui_controls=0&amp;ui_watermark=0&amp;ui_stop=0&amp;autospin=0.2&amp;scrollwheel=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0&amp;transparent=1" data-src="https://sketchfab.com/models/6911cb95564d49beaba52d8e9e62ffab/embed?ui_controls=0&amp;ui_watermark=0&amp;ui_stop=0&amp;autospin=0.2&amp;scrollwheel=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0&amp;transparent=1" width="700" height="500" allowtransparency="true" style="border:0;" >*/
/* 						</iframe>*/
/*                         */
/*                     </div>*/
/*                     <div class="slider-inner">*/
/*                       <div class="boxed">*/
/*                         <h1 class="text-primary wow fadeInDown text-uppercase"  data-wow-duration="1.8s" data-wow-delay=".2s">The "R" lab</h1>*/
/*                         <span class="line-sep-green"></span>*/
/*                         <h3 class="text-white text-uppercase wow fadeInUp" style="white-space: nowrap;" data-wow-duration="1s" data-wow-delay=".3s">*/
/*                           The Integrative Biology Laboratory*/
/*                         </h3>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section> */
/*       <!-- /Image Slider --> */
/*       <section class="blue cut-ccw02">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-sm-6 col-xs-12">*/
/*                   <h2 class="uppercase wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">The "R" Laboratory</h2>*/
/*                   <span class="line-sep-blue"></span>*/
/*                   <p class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">*/
/*                     The "R" lab (renaissance) is an interdisciplinary platform */
/* 					integrating knowledge from Arts to Zoology to put Life Sciences into context.*/
/* 					We follow circular economy approaches and move forward */
/* 					towards a fully three dimensional view of the biological world.  */
/*                   </p>*/
/*                 </div>*/
/*                 <div class="col-sm-6 col-xs-12">*/
/* */
/*                   <div class="thumbnail mar-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     <figure>*/
/*                       <img src="{{ asset('images/media/Copepod.jpg') }}" class="img-responsive" alt="" />                                */
/*                       <div class="image-overlay">*/
/*                         <p>*/
/*                           <a href="{{ asset('images/media/Copepod.jpg') }}" class="show-image">*/
/*                             <i class="iline2-arrows55"></i>*/
/*                           </a>*/
/*                         </p>*/
/*                       </div><!--image overlay-->*/
/*                     </figure><!--/figure-->*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*      <section class="pattern-3">*/
/* 			<h1 class="text-uppercase text-primary wow fadeInDown text-center"  data-wow-duration=".8s" data-wow-delay=".2s">Latest News</h1>*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <div class="col-md-12">*/
/*               <div class="row">*/
/*                 <div class="col-md-6">*/
/*                   <div class="panel-group panel-accordion" id="accordion" role="tablist" aria-multiselectable="true">*/
/* 			{% for new in news %}*/
/* 		<!-- panel  -->*/
/*                 <div class="panel panel-default">*/
/* 				   <div class="panel-heading" role="tab" id="{{ "heading"~tagClasses[loop.index] }}">*/
/*                         <div  class="side-tab" data-target="{{"#tab"~loop.index}}" data-toggle="tab" role="tab" aria-expanded="false">*/
/*                           <h4 class="panel-title">*/
/*                             <a {% if loop.first == false %}class="collapsed"{% endif %} role="button" data-toggle="collapse" data-parent="#accordion" href="{{ "#collapse"~tagClasses[loop.index] }}" aria-expanded="{% if loop.first %}true{% else %}false{% endif %}" aria-controls="{{ "collapse"~tagClasses[loop.index] }}">*/
/*                               {{ new.title }}*/
/*                             </a>*/
/*                           </h4>*/
/*                         </div>*/
/*                         <i class="icon iline2-arrow407"></i>*/
/*                       </div>*/
/*                       <div id="{{ "collapse"~tagClasses[loop.index] }}" class="panel-collapse collapse{% if loop.first %} in{%endif%}" role="tabpanel" aria-labelledby="{{ "heading"~tagClasses[loop.index] }}">*/
/* 			<p class="panel-body no-margin-bottom">*/
/*                           {{ new.content }}*/
/*                         </p>*/
/*                       </div>*/
/* */
/* 		</div>*/
/*                 <!-- /panel  -->*/
/*  			{% endfor %}*/
/*                 */
/*                   </div> <!-- /.panel-group -->*/
/*                 </div> <!-- /.col-md-6 -->*/
/*                 <div class="col-md-6 hidden-xs">*/
/*                   <!-- begin notebook mockup -->*/
/*                   <div class="md-notebook md-glare">*/
/*                     <div class="md-lid">*/
/*                       <div class="md-camera"></div>*/
/*                       <div class="md-screen">*/
/*                         <!-- content goes here -->                */
/*                         <div class="tab-featured-image">*/
/*                           <div class="tab-content">*/
/*                            {% for new in news %}*/
/* 				<div class="tab-pane {% if loop.first%}in active{% elseif loop.last %}fade{% endif %}" id="{{"tab"~loop.index }}" >*/
/* 					{{ include ('newspic.html.twig' , {new: new}, with_context=false) }}*/
/* 				</div>*/
/* 	 		   {% endfor %}*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="md-base"></div>*/
/*                   </div> <!-- end notebook mockup -->*/
/*                 </div> <!-- /.col-md-6 -->*/
/*               </div> <!--/ .row -->*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- comment -->*/
/*       </section>*/
/*       <!-- Features -->*/
/*       <section class="white">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <div class="col-md-6 mar-bottom-md">*/
/*                   <span class="icon icon-3DBio"></span>*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">3D Biological Imaging</h2>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     From light sheet microscopy to kite aerial photogrammetry, */
/* 					the Rlab aims to image the biological world as it is.*/
/*                   </p>*/
/*                 </div>*/
/*                 <div class="col-md-6 mar-bottom-md">*/
/*                   <span class="icon icon-tissEng"></span>*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">Tissue Engineering</h2>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     Using microcarriers, microcontact printing or even 3D bioprinting,*/
/* 					we develop more realistic tissue model systems.*/
/*                   </p>*/
/*                 </div>*/
/*                 <div class="col-md-6 mar-bottom-md">*/
/*                   <span class="icon icon-cellBio"></span>*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">Evolutionary Cell Biology</h2>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     Understanding tissue functions requires a deeper understanding of*/
/* 					its origins and the deeper roots explaining its current complex compartmentalisation.*/
/*                   </p>*/
/*                 </div>*/
/*                 <div class="col-md-6 mar-bottom-md">*/
/*                   <span class="icon icon-society"></span>*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">Science and Society</h2>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     We work with schools, designers, artists, NGOs on specific biology */
/* 					related projects and provide consultancy services to companies.*/
/*                   </p>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- /Features -->*/
/*      */
/*       <!-- Mission -->*/
/*       <section class="pattern-3">*/
/*         <!-- .container -->*/
/*         <div class="container">*/
/*           <!-- .row -->*/
/*           <div class="row">*/
/*             <!-- .col-md-12 -->*/
/*             <div class="col-md-12">*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <!-- .col-md-12 -->*/
/*                 <div class="col-md-12">*/
/*                   <h2 class="wow fadeInDown text-uppercase"  data-wow-duration=".8s" data-wow-delay=".2s">Our mission and vision</h2>*/
/*                   <span class="line-sep-gray"></span>*/
/*                   <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">*/
/*                     The Integrative Biology Laboratory or "R" Lab is a pluri-disciplinary laboratory */
/*                     focusing on the functions of epithelia. We use physics, chemistry, engineering, */
/*                     molecular and cell biology techniques to study the secretory process. */
/*                     We combine an evolutionary approach from Planctomycetes to Human to new biophysical */
/*                     and optical methods ranging from cell "morphing" to Light Sheet Microscopy for 3D imaging.*/
/*                     Our ultimate goal is to achieve a continuum of knowledge from single bacteria excretion capacity*/
/*                     to complex tissue secretion ability in an organism context. For example, we currently studide */
/*                     epithelia functions at the molecular level within artificial epithelial tissues (lung, kidney, gut) */
/*                     to create optimal conditions for cell biology and molecular approaches as well as drug screening */
/*                     on specifically targeted functions: protein expressing defect (cystic fibrosis, lung), */
/*                     water retention (kidney diseases), tumor formation (Epithelial Mesenchymal Transition EMT, metastasis..) or even infections.*/
/*                     We also provide advices and optical set-ups to research groups and collaborate extensively with */
/*                     the private sectors (Carl Zeiss Microscopy GmbH, Aquamarine Power Ltd, ANDOR Ltd, Aura Optik GmbH, Vornia Ltd...).*/
/*                   </p>*/
/*                  */
/*                 </div>*/
/*                 <!-- /.col-md-12 -->*/
/*               </div>*/
/*               <!-- /.row -->*/
/*               <!-- .row -->*/
/*               <div class="row">*/
/*                 <!-- .col-md-12 -->*/
/*                 <div class="col-md-12">*/
/*                  */
/*                 </div>*/
/*                 <!-- /.col-md-12 -->*/
/*               </div>*/
/*               <!-- /.row -->*/
/*             </div>*/
/*             <!-- /.col-md-12 -->*/
/*           </div>*/
/*           <!-- /.row -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*       </section>*/
/*       <!-- /Mission -->*/
/* */
/*     <!-- Begin logos section-->*/
/*        <!-- /.row -->*/
/*               <div class="row">*/
/*                 <div class="">*/
/*                   <!-- .logos -->*/
/*                   <ul class="logos">*/
/*                    {% for image in images %}*/
/*                     <li><img src="{{ asset("" ~ image.url  ) }}" alt="{{ image.url }}"/></li>*/
/* 			{% endfor %}*/
/*                   </ul>*/
/*                   <!-- /.logos -->*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.row -->*/
/*       <!-- /Logos section-->*/
/* {% endblock %} */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* */
