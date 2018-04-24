<?php

/* GestionBundle:propietarios:forms/form.html.twig */
class __TwigTemplate_3d7a9a2d3053d9f1be915f0bff5e620522c587e0980ea6ad020c13f4fff55789 extends Twig_Template
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
        $__internal_5581594acefaa5e8ef1d12bf8f390fe179dd58b37ef915877e7ac90241397771 = $this->env->getExtension("native_profiler");
        $__internal_5581594acefaa5e8ef1d12bf8f390fe179dd58b37ef915877e7ac90241397771->enter($__internal_5581594acefaa5e8ef1d12bf8f390fe179dd58b37ef915877e7ac90241397771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:forms/form.html.twig"));

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
        
        $__internal_5581594acefaa5e8ef1d12bf8f390fe179dd58b37ef915877e7ac90241397771->leave($__internal_5581594acefaa5e8ef1d12bf8f390fe179dd58b37ef915877e7ac90241397771_prof);

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
