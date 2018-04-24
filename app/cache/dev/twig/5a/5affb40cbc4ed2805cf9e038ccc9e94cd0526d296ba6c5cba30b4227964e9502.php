<?php

/* GestionBundle:propietarios:view.html.twig */
class __TwigTemplate_2295a225747b965843c1db1a2f2799ab0dc3c5f0604e3cfe57b6e483ea6f64b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:propietarios:view.html.twig", 1);
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
        $__internal_0b4768b296303ee0c60fbf0a66aae628e7be30c34d28f7e7e9008fc95dd68450 = $this->env->getExtension("native_profiler");
        $__internal_0b4768b296303ee0c60fbf0a66aae628e7be30c34d28f7e7e9008fc95dd68450->enter($__internal_0b4768b296303ee0c60fbf0a66aae628e7be30c34d28f7e7e9008fc95dd68450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4768b296303ee0c60fbf0a66aae628e7be30c34d28f7e7e9008fc95dd68450->leave($__internal_0b4768b296303ee0c60fbf0a66aae628e7be30c34d28f7e7e9008fc95dd68450_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf651d452abba40656affc77abe702a8c164a4d2dd6896bd63d402ab56d9be14 = $this->env->getExtension("native_profiler");
        $__internal_bf651d452abba40656affc77abe702a8c164a4d2dd6896bd63d402ab56d9be14->enter($__internal_bf651d452abba40656affc77abe702a8c164a4d2dd6896bd63d402ab56d9be14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"main container\" >
        <div class=\"row well\">
            <div class=\"col-md-9\">
                <div class=\"well hidden\" style=\"background-color: #f5b6a9; color: #ffffff\" id=\"notificacion\"></div>
                <h3 id=\"vistaUsuariotitle\">Informacion del Propietario</h3><br>

                <fieldset>

                    <div class=\"col-xs-12 col-sm-8 col-md-6 col-lg-4\" id=\"editar_view_user\">
                        <h3>Acciones</h3>

                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
                            <span class=\"glyphicon glyphicon-edit\"></span>
                            ";
        // line 22
        echo "Editar Propietario";
        echo "

                        </a>
                        &nbsp;
                        ";
        // line 26
        echo twig_include($this->env, $context, "GestionBundle:propietarios:forms/form.html.twig", array("form_delete_propietario" => (isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "mensaje_eliminacion" => "Seguro que desea eliminar el Usuario ?"));
        // line 27
        echo "

                    </div>

                    <h2> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "nombres", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "apellidos", array()), "html", null, true);
        echo "</h2><br>

                    <div class=\"form-group\">
                        <label>Nombre Usuario</label><br>
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "username", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label>Numero de documento</label><br>
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "documento", array()), "html", null, true);
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label>Nombre</label><br>
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "nombres", array()), "html", null, true);
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label>Apellido</label><br>
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "apellidos", array()), "html", null, true);
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label>Email</label><br>
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "email", array()), "html", null, true);
        echo "

                    </div>

                    <div class=\"form-group\">
                        <label>Rol</label><br>
                        ";
        // line 60
        if (($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "role", array()) == "ROLE_ADMIN")) {
            // line 61
            echo "                            Administrador
                        ";
        } elseif (($this->getAttribute(        // line 62
(isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "role", array()) == "ROLE_USER")) {
            // line 63
            echo "                            Usuario
                        ";
        }
        // line 65
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label>Telefono</label><br>
                        ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "telefono", array()), "html", null, true);
        echo "
                    </div>

                    <div class=\"form-group\">
                        <label>Estado</label><br>
                        ";
        // line 75
        if (($this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "isActive", array()) == 1)) {
            // line 76
            echo "                            <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok\"></span> Activo</span>
                        ";
        } elseif (($this->getAttribute(        // line 77
(isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "isActive", array()) == 0)) {
            // line 78
            echo "                            <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove\"></span> Inactivo</span>

                        ";
        }
        // line 81
        echo "                    </div>


                    <div class=\"form-group\">
                        <label>Creado</label><br>


                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "


                    </div>
                    <div class=\"form-group\">
                        <label>Modificado</label><br>

                        ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["propietario"]) ? $context["propietario"] : $this->getContext($context, "propietario")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "

                    </div>

                </fieldset>
            </div>
        </div>
    </div>
";
        
        $__internal_bf651d452abba40656affc77abe702a8c164a4d2dd6896bd63d402ab56d9be14->leave($__internal_bf651d452abba40656affc77abe702a8c164a4d2dd6896bd63d402ab56d9be14_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 95,  175 => 88,  166 => 81,  161 => 78,  159 => 77,  156 => 76,  154 => 75,  146 => 70,  139 => 65,  135 => 63,  133 => 62,  130 => 61,  128 => 60,  119 => 54,  111 => 49,  103 => 44,  95 => 39,  88 => 35,  79 => 31,  73 => 27,  71 => 26,  64 => 22,  59 => 20,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
/*     <div class="main container" >*/
/*         <div class="row well">*/
/*             <div class="col-md-9">*/
/*                 <div class="well hidden" style="background-color: #f5b6a9; color: #ffffff" id="notificacion"></div>*/
/*                 <h3 id="vistaUsuariotitle">Informacion del Propietario</h3><br>*/
/* */
/*                 <fieldset>*/
/* */
/*                     <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4" id="editar_view_user">*/
/*                         <h3>Acciones</h3>*/
/* */
/*                         <a href="{{ path('propietario_edit',{ id: propietario.id } ) }}" class="btn btn-primary btn-lg btn-block">*/
/*                             <span class="glyphicon glyphicon-edit"></span>*/
/*                             {{ 'Editar Propietario' }}*/
/* */
/*                         </a>*/
/*                         &nbsp;*/
/*                         {{ include('GestionBundle:propietarios:forms/form.html.twig',{form_delete_propietario: delete_form, mensaje_eliminacion:*/
/*                             'Seguro que desea eliminar el Usuario ?'}) }}*/
/* */
/*                     </div>*/
/* */
/*                     <h2> {{ propietario.nombres }} {{ propietario.apellidos }}</h2><br>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Nombre Usuario</label><br>*/
/*                         {{propietario.username}}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>Numero de documento</label><br>*/
/*                         {{propietario.documento}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Nombre</label><br>*/
/*                         {{ propietario.nombres }}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Apellido</label><br>*/
/*                         {{ propietario.apellidos }}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Email</label><br>*/
/*                         {{ propietario.email }}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Rol</label><br>*/
/*                         {% if propietario.role=='ROLE_ADMIN' %}*/
/*                             Administrador*/
/*                         {% elseif propietario.role=='ROLE_USER' %}*/
/*                             Usuario*/
/*                         {% endif %}*/
/* */
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Telefono</label><br>*/
/*                         {{ propietario.telefono }}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label>Estado</label><br>*/
/*                         {% if propietario.isActive == 1 %}*/
/*                             <span class="text-success"><span class="glyphicon glyphicon-ok"></span> Activo</span>*/
/*                         {% elseif propietario.isActive == 0 %}*/
/*                             <span class="text-danger"><span class="glyphicon glyphicon-remove"></span> Inactivo</span>*/
/* */
/*                         {% endif %}*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label>Creado</label><br>*/
/* */
/* */
/*                         {{ propietario.createdAt|date('d-m-Y H:i') }}*/
/* */
/* */
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label>Modificado</label><br>*/
/* */
/*                         {{ propietario.updatedAt|date('d-m-Y H:i')  }}*/
/* */
/*                     </div>*/
/* */
/*                 </fieldset>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
