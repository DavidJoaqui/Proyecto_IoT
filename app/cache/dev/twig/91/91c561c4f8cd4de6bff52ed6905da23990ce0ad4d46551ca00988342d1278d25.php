<?php

/* GestionBundle:Vehiculos:forms/form.html.twig */
class __TwigTemplate_eef72b492581b4bad60b743a3bd26d21b010d548df7464f7bb1cc6b504fc1558 extends Twig_Template
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
        $__internal_534581ad876822abfc714f93194dbd94ce944307e00ca9d2bbd2a07bee151c62 = $this->env->getExtension("native_profiler");
        $__internal_534581ad876822abfc714f93194dbd94ce944307e00ca9d2bbd2a07bee151c62->enter($__internal_534581ad876822abfc714f93194dbd94ce944307e00ca9d2bbd2a07bee151c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Vehiculos:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_delete_vehiculo"]) ? $context["form_delete_vehiculo"] : $this->getContext($context, "form_delete_vehiculo")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_delete_vehiculo"]) ? $context["form_delete_vehiculo"] : $this->getContext($context, "form_delete_vehiculo")), 'widget');
        echo "


";
        // line 6
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 7
            echo "
    <a type=\"button\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDeleteVehiculo()\">
        <span class=\"glyphicon glyphicon-trash\"> </span>
        ";
            // line 10
            echo "Eliminar Vehiculo..";
            echo "
    </a>
";
        }
        // line 13
        echo "

";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_delete_vehiculo"]) ? $context["form_delete_vehiculo"] : $this->getContext($context, "form_delete_vehiculo")), 'form_end');
        echo "

<script>

    var message = '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["mensaje_eliminacion"]) ? $context["mensaje_eliminacion"] : $this->getContext($context, "mensaje_eliminacion")), "html", null, true);
        echo "';

    function confirmDeleteVehiculo() {

        bootbox.confirm( message,function(result){
            if(result == true){
                document.form.submit();
            }

        });
    }

</script>";
        
        $__internal_534581ad876822abfc714f93194dbd94ce944307e00ca9d2bbd2a07bee151c62->leave($__internal_534581ad876822abfc714f93194dbd94ce944307e00ca9d2bbd2a07bee151c62_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Vehiculos:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  50 => 15,  46 => 13,  40 => 10,  35 => 7,  33 => 6,  27 => 3,  22 => 1,);
    }
}
/* {{ form_start(form_delete_vehiculo,{'attr': {'id':id |default('form') }} ) }}*/
/* */
/* {{ form_widget(form_delete_vehiculo) }}*/
/* */
/* */
/* {% if with_submit is not defined or with_submit == true %}*/
/* */
/*     <a type="button" class="btn btn-lg btn-block btn-danger" onclick="confirmDeleteVehiculo()">*/
/*         <span class="glyphicon glyphicon-trash"> </span>*/
/*         {{ 'Eliminar Vehiculo..' }}*/
/*     </a>*/
/* {% endif %}*/
/* */
/* */
/* {{ form_end(form_delete_vehiculo) }}*/
/* */
/* <script>*/
/* */
/*     var message = '{{ mensaje_eliminacion }}';*/
/* */
/*     function confirmDeleteVehiculo() {*/
/* */
/*         bootbox.confirm( message,function(result){*/
/*             if(result == true){*/
/*                 document.form.submit();*/
/*             }*/
/* */
/*         });*/
/*     }*/
/* */
/* </script>*/
