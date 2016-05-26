<?php

/* formComment.html.twig~ */
class __TwigTemplate_3372ccfec2449281b39351ed39d8c7c3449044c710c8039e73caa493707b8e82 extends Twig_Template
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
        $__internal_9a48b9a4cf21ed8afd6064c6d29e07b767c8d0051029fc40b22860ee59c86d9e = $this->env->getExtension("native_profiler");
        $__internal_9a48b9a4cf21ed8afd6064c6d29e07b767c8d0051029fc40b22860ee59c86d9e->enter($__internal_9a48b9a4cf21ed8afd6064c6d29e07b767c8d0051029fc40b22860ee59c86d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formComment.html.twig~"));

        // line 1
        echo "<h4 class=\"mar-top-md\">Add a comment.</h4>
                      <span class=\"line-sep-gray\"></span>
                      <p>All the inputs are required.</p>
\t\t\t";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal mar-top-sm wow fadeIn", "data-wow-duration" => "1s", "data-wow-delay" => ".3s", "name" => "commentForm")));
        echo "
\t\t\t<p>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>
                        <div class=\"row\">
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "First Name* :")));
        echo "
                              ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Last Name* :")));
        echo "
                               ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                            <div class=\"form-group control-group\">
\t\t\t       ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "E-mail* :")));
        echo "
                              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
                          </div>
                          <div class=\"col-md-6 col-sm-6\">
                            <div class=\"form-group control-group\">
\t\t\t      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Comment* :")));
        echo "
                              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                              <p class=\"help-block\"></p>
                            </div>
\t\t\t    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "submit btn btn-primary pull-right")));
        echo "
                          </div>
                        </div>
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <!-- /.row -->
\t\t\t  ";
        // line 36
        echo "\t\t\t  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9a48b9a4cf21ed8afd6064c6d29e07b767c8d0051029fc40b22860ee59c86d9e->leave($__internal_9a48b9a4cf21ed8afd6064c6d29e07b767c8d0051029fc40b22860ee59c86d9e_prof);

    }

    public function getTemplateName()
    {
        return "formComment.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  89 => 33,  83 => 30,  77 => 27,  73 => 26,  64 => 20,  60 => 19,  53 => 15,  49 => 14,  42 => 10,  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h4 class="mar-top-md">Add a comment.</h4>*/
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
/* */
