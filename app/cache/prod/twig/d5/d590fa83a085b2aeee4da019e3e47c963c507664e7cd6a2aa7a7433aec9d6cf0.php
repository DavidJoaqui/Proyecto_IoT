<?php

/* GestionBundle:propietarios:index.html.twig */
class __TwigTemplate_787907af33dbb070b220804a4d0d690e79bd9458da89809adae3a0c1d147d152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:propietarios:index.html.twig", 1);
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
        $__internal_a2c8cc95a4b079ae5679151a696d7a9f8bdacddbb107db2f0fa5b2db1465b796 = $this->env->getExtension("native_profiler");
        $__internal_a2c8cc95a4b079ae5679151a696d7a9f8bdacddbb107db2f0fa5b2db1465b796->enter($__internal_a2c8cc95a4b079ae5679151a696d7a9f8bdacddbb107db2f0fa5b2db1465b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c8cc95a4b079ae5679151a696d7a9f8bdacddbb107db2f0fa5b2db1465b796->leave($__internal_a2c8cc95a4b079ae5679151a696d7a9f8bdacddbb107db2f0fa5b2db1465b796_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d45c499939460db8324cf8c1ec10b479def025b76ea0430ba125d915168faefb = $this->env->getExtension("native_profiler");
        $__internal_d45c499939460db8324cf8c1ec10b479def025b76ea0430ba125d915168faefb->enter($__internal_d45c499939460db8324cf8c1ec10b479def025b76ea0430ba125d915168faefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <center>
        ";
        // line 6
        echo twig_include($this->env, $context, "GestionBundle:propietarios:mensajes/confirmacion.html.twig");
        echo "
        ";
        // line 7
        echo twig_include($this->env, $context, "GestionBundle:propietarios:mensajes/danger.html.twig");
        echo "

        <h1>Propietarios</h1>
        <div class=\"progress no-border hidden\" id=\"delete-progress\">
            <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\"
                 aria-valuemax=\"100\" style=\"width: 100%;\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>

    </center>
    <div class=\"container\">
        <div class=\"col-md-12 col-xs-12 col-lg-12\">
            <div class=\"page-header margin-none\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped table-bordered\">
                        ";
        // line 24
        echo "                         <thead>
                            <tr>
                                <th>Estado</th>
                                <th>No.identificacion</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Rol</th>
                                <th>telefono</th>
                                <th>Acciones</th>

                             </tr>
                         </thead>

                        <tbody>

                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propietarios"]) ? $context["propietarios"] : $this->getContext($context, "propietarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "                                <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                                    <td>
                                        ";
            // line 42
            if (($this->getAttribute($context["user"], "isActive", array()) == 1)) {
                // line 43
                echo "                                            <span class=\"text-success\"><span class=\"glyphicon glyphicon-ok\"></span> Activo</span>
                                        ";
            } elseif (($this->getAttribute(            // line 44
$context["user"], "isActive", array()) == 0)) {
                // line 45
                echo "                                            <span class=\"text-danger\"><span class=\"glyphicon glyphicon-remove\"></span> Inactivo</span>

                                        ";
            }
            // line 48
            echo "                                    </td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "documento", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nombres", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "apellidos", array()), "html", null, true);
            echo "</td>
                                    <td>
                                    ";
            // line 53
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_USER")) {
                // line 54
                echo "                                            ";
                echo "Usuario";
                echo "
                                    ";
            } elseif (($this->getAttribute(            // line 55
$context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 56
                echo "                                            ";
                echo "Administrador";
                echo "
                                    ";
            }
            // line 58
            echo "                                    </td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telefono", array()), "html", null, true);
            echo "</td>

                                    <td>

                                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">
                                            Ver
                                            <span class=\"glyphicon glyphicon-eye-open\"> </span>
                                        </a>
                                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("propietario_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 88
        echo twig_include($this->env, $context, "GestionBundle:propietarios:forms/form.html.twig", array("form_delete_propietario" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "mensaje_eliminacion" => "Seguro que desea eliminar el propietario.?", "id" => "form-delete", "with_submit" => false));
        echo "
";
        
        $__internal_d45c499939460db8324cf8c1ec10b479def025b76ea0430ba125d915168faefb->leave($__internal_d45c499939460db8324cf8c1ec10b479def025b76ea0430ba125d915168faefb_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32a166709a0b4c3fc9efb0c32e99451785181dfcf3cee2ae138350b8f918ea8e = $this->env->getExtension("native_profiler");
        $__internal_32a166709a0b4c3fc9efb0c32e99451785181dfcf3cee2ae138350b8f918ea8e->enter($__internal_32a166709a0b4c3fc9efb0c32e99451785181dfcf3cee2ae138350b8f918ea8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/gestion/delete-propietario.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_32a166709a0b4c3fc9efb0c32e99451785181dfcf3cee2ae138350b8f918ea8e->leave($__internal_32a166709a0b4c3fc9efb0c32e99451785181dfcf3cee2ae138350b8f918ea8e_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 93,  201 => 92,  195 => 91,  186 => 88,  176 => 80,  157 => 67,  150 => 63,  143 => 59,  140 => 58,  134 => 56,  132 => 55,  127 => 54,  125 => 53,  120 => 51,  116 => 50,  112 => 49,  109 => 48,  104 => 45,  102 => 44,  99 => 43,  97 => 42,  91 => 40,  87 => 39,  70 => 24,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <center>*/
/*         {{ include('GestionBundle:propietarios:mensajes/confirmacion.html.twig') }}*/
/*         {{ include('GestionBundle:propietarios:mensajes/danger.html.twig') }}*/
/* */
/*         <h1>Propietarios</h1>*/
/*         <div class="progress no-border hidden" id="delete-progress">*/
/*             <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0"*/
/*                  aria-valuemax="100" style="width: 100%;">*/
/*                 <span class="sr-only">Loading...</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </center>*/
/*     <div class="container">*/
/*         <div class="col-md-12 col-xs-12 col-lg-12">*/
/*             <div class="page-header margin-none">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table table-hover table-striped table-bordered">*/
/*                         {#total registros:{{ usuarios }}#}*/
/*                          <thead>*/
/*                             <tr>*/
/*                                 <th>Estado</th>*/
/*                                 <th>No.identificacion</th>*/
/*                                 <th>Nombres</th>*/
/*                                 <th>Apellidos</th>*/
/*                                 <th>Rol</th>*/
/*                                 <th>telefono</th>*/
/*                                 <th>Acciones</th>*/
/* */
/*                              </tr>*/
/*                          </thead>*/
/* */
/*                         <tbody>*/
/* */
/*                             {% for user in propietarios %}*/
/*                                 <tr data-id="{{ user.id }}">*/
/*                                     <td>*/
/*                                         {% if user.isActive == 1 %}*/
/*                                             <span class="text-success"><span class="glyphicon glyphicon-ok"></span> Activo</span>*/
/*                                         {% elseif user.isActive == 0 %}*/
/*                                             <span class="text-danger"><span class="glyphicon glyphicon-remove"></span> Inactivo</span>*/
/* */
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td>{{ user.documento }}</td>*/
/*                                     <td>{{ user.nombres }}</td>*/
/*                                     <td>{{ user.apellidos }}</td>*/
/*                                     <td>*/
/*                                     {% if user.role == 'ROLE_USER' %}*/
/*                                             {{ 'Usuario' }}*/
/*                                     {% elseif user.role == 'ROLE_ADMIN' %}*/
/*                                             {{ 'Administrador' }}*/
/*                                     {% endif %}*/
/*                                     </td>*/
/*                                     <td>{{ user.telefono }}</td>*/
/* */
/*                                     <td>*/
/* */
/*                                         <a href="{{ path('propietario_view',{id:user.id}) }}" class="btn btn-sm btn-info">*/
/*                                             Ver*/
/*                                             <span class="glyphicon glyphicon-eye-open"> </span>*/
/*                                         </a>*/
/*                                         <a href="{{ path('propietario_edit',{id:user.id}) }}" class="btn btn-sm btn-primary">*/
/*                                             Editar*/
/*                                             <span class="glyphicon glyphicon-edit"> </span>*/
/*                                         </a>*/
/*                                         <a href="#" class="btn btn-sm btn-danger btn-delete">*/
/*                                             Eliminar*/
/*                                             <span class="glyphicon glyphicon-trash"> </span>*/
/*                                         </a>*/
/* */
/*                                     </td>*/
/* */
/*                                 </tr>*/
/*                             {% endfor %}*/
/* */
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ include('GestionBundle:propietarios:forms/form.html.twig',{form_delete_propietario: delete_form_ajax, mensaje_eliminacion:'Seguro que desea eliminar el propietario.?', id: 'form-delete', with_submit: false }) }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent()  }}*/
/*     <script src="{{ asset('bundles/gestion/delete-propietario.js')}}"></script>*/
/* {% endblock %}*/
