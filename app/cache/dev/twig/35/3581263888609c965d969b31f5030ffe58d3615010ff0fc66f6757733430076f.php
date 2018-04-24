<?php

/* GestionBundle:propietarios:forms/form.html.twig */
class __TwigTemplate_b9be5d6f8d3decdca85f8eaa8d71f0d3c96eb6cf0b2ee87d1274e9d0857996a7 extends Twig_Template
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
        $__internal_426b7c9637c2a3a479de48278516dea3ce47f4797214bcb2772d8cdc51799edc = $this->env->getExtension("native_profiler");
        $__internal_426b7c9637c2a3a479de48278516dea3ce47f4797214bcb2772d8cdc51799edc->enter($__internal_426b7c9637c2a3a479de48278516dea3ce47f4797214bcb2772d8cdc51799edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_delete_propietario"]) ? $context["form_delete_propietario"] : $this->getContext($context, "form_delete_propietario")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_delete_propietario"]) ? $context["form_delete_propietario"] : $this->getContext($context, "form_delete_propietario")), 'widget');
        echo "

";
        // line 5
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 6
            echo "
    <a type=\"button\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\">
        <span class=\"glyphicon glyphicon-trash\"> </span>
        ";
            // line 9
            echo "Eliminar Propietario";
            echo "
    </a>
";
        }
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_delete_propietario"]) ? $context["form_delete_propietario"] : $this->getContext($context, "form_delete_propietario")), 'form_end');
        echo "

<script>

    var message='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["mensaje_eliminacion"]) ? $context["mensaje_eliminacion"] : $this->getContext($context, "mensaje_eliminacion")), "html", null, true);
        echo "';
    function confirmDelete() {
        bootbox.confirm( message,function(result){
            if(result == true){
                document.form.submit();
            }

        });
    }

</script>";
        
        $__internal_426b7c9637c2a3a479de48278516dea3ce47f4797214bcb2772d8cdc51799edc->leave($__internal_426b7c9637c2a3a479de48278516dea3ce47f4797214bcb2772d8cdc51799edc_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  45 => 12,  39 => 9,  34 => 6,  32 => 5,  27 => 3,  22 => 1,);
    }
}
/* {{ form_start(form_delete_propietario,{'attr': {'id':id |default('form') }} ) }}*/
/* */
/* {{ form_widget(form_delete_propietario) }}*/
/* */
/* {% if with_submit is not defined or with_submit == true %}*/
/* */
/*     <a type="button" class="btn btn-lg btn-block btn-danger" onclick="confirmDelete()">*/
/*         <span class="glyphicon glyphicon-trash"> </span>*/
/*         {{ 'Eliminar Propietario' }}*/
/*     </a>*/
/* {% endif %}*/
/* {{ form_end(form_delete_propietario) }}*/
/* */
/* <script>*/
/* */
/*     var message='{{ mensaje_eliminacion }}';*/
/*     function confirmDelete() {*/
/*         bootbox.confirm( message,function(result){*/
/*             if(result == true){*/
/*                 document.form.submit();*/
/*             }*/
/* */
/*         });*/
/*     }*/
/* */
/* </script>*/
