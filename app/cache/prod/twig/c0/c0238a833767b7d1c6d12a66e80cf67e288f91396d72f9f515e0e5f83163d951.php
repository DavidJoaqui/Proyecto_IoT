<?php

/* GestionBundle:Vehiculos:index.html.twig */
class __TwigTemplate_1e6e06518b68940656ddc36909e6efab3eff87718b90a4f96b801645b31f4bc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:Vehiculos:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58445be8c8698ce023e59c03728d29b4b20ea55e9e494d6c6d9bd19ee5a4942 = $this->env->getExtension("native_profiler");
        $__internal_c58445be8c8698ce023e59c03728d29b4b20ea55e9e494d6c6d9bd19ee5a4942->enter($__internal_c58445be8c8698ce023e59c03728d29b4b20ea55e9e494d6c6d9bd19ee5a4942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Vehiculos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58445be8c8698ce023e59c03728d29b4b20ea55e9e494d6c6d9bd19ee5a4942->leave($__internal_c58445be8c8698ce023e59c03728d29b4b20ea55e9e494d6c6d9bd19ee5a4942_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb22cdd29274b3aadd31643726a6700a2412bdb62837d0d4ab5c93fc1a717aba = $this->env->getExtension("native_profiler");
        $__internal_bb22cdd29274b3aadd31643726a6700a2412bdb62837d0d4ab5c93fc1a717aba->enter($__internal_bb22cdd29274b3aadd31643726a6700a2412bdb62837d0d4ab5c93fc1a717aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"progress no-border hidden\" id=\"delete-progress\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\"
             aria-valuemax=\"100\" style=\"width: 100%;\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    ";
        // line 11
        echo twig_include($this->env, $context, "GestionBundle:Vehiculos:mensajes/confirmacion.html.twig");
        echo "
    ";
        // line 12
        echo twig_include($this->env, $context, "GestionBundle:Vehiculos:mensajes/danger.html.twig");
        echo "

    <center>
        <h1>Gestion de Vehiculos</h1>
    </center>
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <div class=\"table-responsive\">
                     <table class=\"table table-hover table-striped table-bordered\">
                            <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Propietario</th>
                                <th>Acciones</th>

                            </tr>
                            </thead>

                            <tbody>

                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehiculos"]) ? $context["vehiculos"] : $this->getContext($context, "vehiculos")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehiculo"]) {
            // line 38
            echo "                                <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "id", array()), "html", null, true);
            echo "\">
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "tipo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "marca", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "modelo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "placa", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehiculo"], "color", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vehiculo"], "propietario", array()), "fullName", array()), "html", null, true);
            echo "</td>

                                    <td>

                                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehiculo_view", array("id" => $this->getAttribute($context["vehiculo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                            Ver
                                            <span class=\"glyphicon glyphicon-eye-open\"> </span>
                                        </a>

                                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehiculo_edit", array("id" => $this->getAttribute($context["vehiculo"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                            Editar
                                            <span class=\"glyphicon glyphicon-edit\"> </span>
                                        </a>
                                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                            Eliminar
                                            <span class=\"glyphicon glyphicon-trash\"> </span>
                                        </a>


                                    </td>

                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehiculo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 75
        echo twig_include($this->env, $context, "GestionBundle:Vehiculos:forms/form.html.twig", array("form_delete_vehiculo" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "mensaje_eliminacion" => "Seguro que desea eliminar el vehiculo..?", "id" => "form-delete", "with_submit" => false));
        echo "
";
        
        $__internal_bb22cdd29274b3aadd31643726a6700a2412bdb62837d0d4ab5c93fc1a717aba->leave($__internal_bb22cdd29274b3aadd31643726a6700a2412bdb62837d0d4ab5c93fc1a717aba_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbe3aac95304cbc2cdab8bc5cc44b971833e3608c37a802d2b1f9383a5ed77bf = $this->env->getExtension("native_profiler");
        $__internal_fbe3aac95304cbc2cdab8bc5cc44b971833e3608c37a802d2b1f9383a5ed77bf->enter($__internal_fbe3aac95304cbc2cdab8bc5cc44b971833e3608c37a802d2b1f9383a5ed77bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestion/delete-vehiculo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fbe3aac95304cbc2cdab8bc5cc44b971833e3608c37a802d2b1f9383a5ed77bf->leave($__internal_fbe3aac95304cbc2cdab8bc5cc44b971833e3608c37a802d2b1f9383a5ed77bf_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Vehiculos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 80,  173 => 79,  167 => 78,  158 => 75,  149 => 68,  128 => 53,  120 => 48,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  88 => 38,  84 => 37,  56 => 12,  52 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div class="progress no-border hidden" id="delete-progress">*/
/*         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0"*/
/*              aria-valuemax="100" style="width: 100%;">*/
/*             <span class="sr-only">Loading...</span>*/
/*         </div>*/
/*     </div>*/
/*     {{ include('GestionBundle:Vehiculos:mensajes/confirmacion.html.twig') }}*/
/*     {{ include('GestionBundle:Vehiculos:mensajes/danger.html.twig') }}*/
/* */
/*     <center>*/
/*         <h1>Gestion de Vehiculos</h1>*/
/*     </center>*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header margin-none">*/
/*                 <div class="table-responsive">*/
/*                      <table class="table table-hover table-striped table-bordered">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Tipo</th>*/
/*                                 <th>Marca</th>*/
/*                                 <th>Modelo</th>*/
/*                                 <th>Placa</th>*/
/*                                 <th>Color</th>*/
/*                                 <th>Propietario</th>*/
/*                                 <th>Acciones</th>*/
/* */
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/* */
/*                             {% for vehiculo in vehiculos %}*/
/*                                 <tr data-id="{{ vehiculo.id }}">*/
/*                                     <td>{{ vehiculo.tipo }}</td>*/
/*                                     <td>{{ vehiculo.marca }}</td>*/
/*                                     <td>{{ vehiculo.modelo }}</td>*/
/*                                     <td>{{ vehiculo.placa }}</td>*/
/*                                     <td>{{ vehiculo.color }}</td>*/
/*                                     <td>{{ vehiculo.propietario.fullName }}</td>*/
/* */
/*                                     <td>*/
/* */
/*                                         <a href="{{ path('vehiculo_view',{id:vehiculo.id}) }}" class="btn btn-sm btn-info">*/
/*                                             Ver*/
/*                                             <span class="glyphicon glyphicon-eye-open"> </span>*/
/*                                         </a>*/
/* */
/*                                         <a href="{{ path('vehiculo_edit',{id:vehiculo.id}) }}" class="btn btn-sm btn-primary">*/
/*                                             Editar*/
/*                                             <span class="glyphicon glyphicon-edit"> </span>*/
/*                                         </a>*/
/*                                         <a href="#" class="btn btn-sm btn-danger btn-delete">*/
/*                                             Eliminar*/
/*                                             <span class="glyphicon glyphicon-trash"> </span>*/
/*                                         </a>*/
/* */
/* */
/*                                     </td>*/
/* */
/*                                 </tr>*/
/* */
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                      </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ include('GestionBundle:Vehiculos:forms/form.html.twig',{form_delete_vehiculo: delete_form_ajax, mensaje_eliminacion:'Seguro que desea eliminar el vehiculo..?', id: 'form-delete', with_submit: false }) }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent()  }}*/
/*     <script src="{{ asset('bundles/gestion/delete-vehiculo.js')}}"></script>*/
/* {% endblock %}*/
