<?php

/* GestionBundle:Vehiculos:edit.html.twig */
class __TwigTemplate_2fb5ca89696101ec267361837b0f19b492253d578106841c7df5d474390dd2e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:Vehiculos:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0ae4be82f3a740a0cb4d41481c846fa27a1e8152b3302c82453676840abc227 = $this->env->getExtension("native_profiler");
        $__internal_e0ae4be82f3a740a0cb4d41481c846fa27a1e8152b3302c82453676840abc227->enter($__internal_e0ae4be82f3a740a0cb4d41481c846fa27a1e8152b3302c82453676840abc227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Vehiculos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ae4be82f3a740a0cb4d41481c846fa27a1e8152b3302c82453676840abc227->leave($__internal_e0ae4be82f3a740a0cb4d41481c846fa27a1e8152b3302c82453676840abc227_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c4166d9859bc941e47a62a683fc3a38732266133999fba8f5e5693dc622528 = $this->env->getExtension("native_profiler");
        $__internal_87c4166d9859bc941e47a62a683fc3a38732266133999fba8f5e5693dc622528->enter($__internal_87c4166d9859bc941e47a62a683fc3a38732266133999fba8f5e5693dc622528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <div class=\"main container\" style=\"margin-top: 20px\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("vehiculos_index");
        echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <button class=\"btn-md btn-primary\">
                        <--Atras
                    </button>
                </a>

                <div class=\"page-header\">
                    <h2>Edición del vehiculo</h2>

                </div>

                <fieldset>
                    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
                    <div class=\"form-group\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietario", array()), 'label');
        echo "
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietario", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietario", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'label');
        echo "
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Elija el tipo de vehiculo")));
        echo "

                        <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'errors');
        echo "</span>

                    </div>

                    <div class=\"form-group\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese la marca del vehiculo")));
        echo "

                        <span class=\"text-danger\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'errors');
        echo "</span>

                    </div>
                    <div class=\"form-group\">
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo", array()), 'label');
        echo "
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese el modelo del vehiculo")));
        echo "

                        <span class=\"text-danger\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modelo", array()), 'errors');
        echo "</span>

                    </div>

                    <div class=\"form-group\">
                        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placa", array()), 'label');
        echo "
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placa", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese la placa del vehiculo")));
        echo "

                        <span class=\"text-danger\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placa", array()), 'errors');
        echo "</span>

                    </div>


                    <div class=\"form-group\">
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'label');
        echo "
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ingrese el color del vehiculo")));
        echo "

                        <span class=\"text-danger\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "placa", array()), 'errors');
        echo "</span>

                    </div>



                </fieldset>
                <p>
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Actualizar Vehiculo", "attr" => array("class" => "btn btn-md btn-success")));
        echo "

                </p>

                ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_87c4166d9859bc941e47a62a683fc3a38732266133999fba8f5e5693dc622528->leave($__internal_87c4166d9859bc941e47a62a683fc3a38732266133999fba8f5e5693dc622528_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Vehiculos:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 85,  193 => 81,  182 => 73,  177 => 71,  173 => 70,  164 => 64,  159 => 62,  155 => 61,  147 => 56,  142 => 54,  138 => 53,  131 => 49,  126 => 47,  122 => 46,  114 => 41,  109 => 39,  105 => 38,  98 => 34,  94 => 33,  90 => 32,  85 => 30,  70 => 18,  64 => 14,  55 => 11,  52 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {% for flash_message in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="main container" style="margin-top: 20px">*/
/*         <div class="row well">*/
/*             <div class="col-md-6">*/
/*                 <a href="{{ path('vehiculos_index') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                     <button class="btn-md btn-primary">*/
/*                         <--Atras*/
/*                     </button>*/
/*                 </a>*/
/* */
/*                 <div class="page-header">*/
/*                     <h2>Edición del vehiculo</h2>*/
/* */
/*                 </div>*/
/* */
/*                 <fieldset>*/
/*                     {{ form_start (form,{'attr': {'role':'form'}}) }}*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.propietario) }}*/
/*                         {{ form_widget(form.propietario, {'attr':{'class':'form-control'}}) }}*/
/*                         <span class="text-danger">{{ form_errors(form.propietario)}}</span>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.tipo) }}*/
/*                         {{ form_widget(form.tipo, {'attr':{'class':'form-control','placeholder':'Elija el tipo de vehiculo' }})}}*/
/* */
/*                         <span class="text-danger">{{ form_errors(form.tipo) }}</span>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.marca) }}*/
/*                         {{ form_widget(form.marca, {'attr':{'class':'form-control','placeholder':'Ingrese la marca del vehiculo' }})}}*/
/* */
/*                         <span class="text-danger">{{ form_errors(form.marca) }}</span>*/
/* */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.modelo) }}*/
/*                         {{ form_widget(form.modelo, {'attr':{'class':'form-control','placeholder':'Ingrese el modelo del vehiculo' }})}}*/
/* */
/*                         <span class="text-danger">{{ form_errors(form.modelo) }}</span>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.placa) }}*/
/*                         {{ form_widget(form.placa, {'attr':{'class':'form-control','placeholder':'Ingrese la placa del vehiculo' }})}}*/
/* */
/*                         <span class="text-danger">{{ form_errors(form.placa) }}</span>*/
/* */
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.color) }}*/
/*                         {{ form_widget(form.color, {'attr':{'class':'form-control','placeholder':'Ingrese el color del vehiculo' }})}}*/
/* */
/*                         <span class="text-danger">{{ form_errors(form.placa) }}</span>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*                 </fieldset>*/
/*                 <p>*/
/*                     {{ form_widget(form.save, {'label' : 'Actualizar Vehiculo' , 'attr': {'class':'btn btn-md btn-success'}}) }}*/
/* */
/*                 </p>*/
/* */
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
