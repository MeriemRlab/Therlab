<?php

/* news.html.twig~ */
class __TwigTemplate_df7514709665d19729a9463ff112e8d44c521bf8a1b9986d52636c3f5a32bb78 extends Twig_Template
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
        $__internal_3978cfb3205ef18943a32aa2d185f0fbf8e431aca62b29fd733c802a0ac2d35f = $this->env->getExtension("native_profiler");
        $__internal_3978cfb3205ef18943a32aa2d185f0fbf8e431aca62b29fd733c802a0ac2d35f->enter($__internal_3978cfb3205ef18943a32aa2d185f0fbf8e431aca62b29fd733c802a0ac2d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news.html.twig~"));

        // line 2
        echo "

                    <!-- panel  -->
                    <div class=\"panel panel-default\">
                      <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
                        <div  class=\"side-tab\" data-target=\"#tab1\" data-toggle=\"tab\" role=\"tab\" aria-expanded=\"false\">
                          <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                              ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title", array()), "html", null, true);
        echo "
                            </a>
                          </h4>
                        </div>
                        <i class=\"icon iline2-arrow407\"></i>
                      </div>
                      <div id=\"collapseOne\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t<p class=\"panel-body no-margin-bottom\">
                          ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "content", array()), "html", null, true);
        echo "
                        </p>
                      </div>
                    </div>
                    <!-- /panel  -->


";
        
        $__internal_3978cfb3205ef18943a32aa2d185f0fbf8e431aca62b29fd733c802a0ac2d35f->leave($__internal_3978cfb3205ef18943a32aa2d185f0fbf8e431aca62b29fd733c802a0ac2d35f_prof);

    }

    public function getTemplateName()
    {
        return "news.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  32 => 10,  22 => 2,);
    }
}
/* {# news.html.twig #}*/
/* */
/* */
/*                     <!-- panel  -->*/
/*                     <div class="panel panel-default">*/
/*                       <div class="panel-heading" role="tab" id="headingOne">*/
/*                         <div  class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">*/
/*                           <h4 class="panel-title">*/
/*                             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">*/
/*                               {{ new.title }}*/
/*                             </a>*/
/*                           </h4>*/
/*                         </div>*/
/*                         <i class="icon iline2-arrow407"></i>*/
/*                       </div>*/
/*                       <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">*/
/* 			<p class="panel-body no-margin-bottom">*/
/*                           {{ new.content }}*/
/*                         </p>*/
/*                       </div>*/
/*                     </div>*/
/*                     <!-- /panel  -->*/
/* */
/* */
/* */
