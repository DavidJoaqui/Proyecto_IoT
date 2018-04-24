<?php

/* GestionBundle:Ubicaciones:index.html.twig */
class __TwigTemplate_acba8be2c2fc18585f3ca0ea95cbb35287ccf1199dfb070a826e7ee811365820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:Ubicaciones:index.html.twig", 1);
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
        $__internal_93b2e21f2bff17aae04b0c847a565e5d10e72079c21291cb2c83dc772cd8525a = $this->env->getExtension("native_profiler");
        $__internal_93b2e21f2bff17aae04b0c847a565e5d10e72079c21291cb2c83dc772cd8525a->enter($__internal_93b2e21f2bff17aae04b0c847a565e5d10e72079c21291cb2c83dc772cd8525a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Ubicaciones:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b2e21f2bff17aae04b0c847a565e5d10e72079c21291cb2c83dc772cd8525a->leave($__internal_93b2e21f2bff17aae04b0c847a565e5d10e72079c21291cb2c83dc772cd8525a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09742c20014f1fcf432ad396763d31d88644e87af7737f754000b1f6c3efcf22 = $this->env->getExtension("native_profiler");
        $__internal_09742c20014f1fcf432ad396763d31d88644e87af7737f754000b1f6c3efcf22->enter($__internal_09742c20014f1fcf432ad396763d31d88644e87af7737f754000b1f6c3efcf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <center>
        <h1 style=\"color: #1b6d85\">Registro de Ubicaciones</h1>
    </center>

    <div class=\"container\">
        <div class=\"col-md-12 col-xs-12 col-lg-12\">
            <div class=\"page-header margin-none\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-striped table-bordered\">
                        total registros:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "getTotalItemCount", array()), "html", null, true);
        echo "
                            <thead>
                            <tr>
                                <th>Estado</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>placa vehiculo</th>
                                <th>Tipo</th>
                                <th>Propietario</th>
                                <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")), "Fecha Ubicación", "u.createdAt");
        echo "</th>

                            </tr>
                            </thead>

                         <tbody>

                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["ubicacion"]) {
            // line 31
            echo "
                                <tr data-id=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["ubicacion"], "id", array()), "html", null, true);
            echo "\">

                                    ";
            // line 34
            if (($this->getAttribute($context["ubicacion"], "isActive", array()) == "1")) {
                // line 35
                echo "
                                        <td><span class=\"glyphicon glyphicon-ok text-success\">Valida</span> </td>

                                    ";
            } elseif (($this->getAttribute(            // line 38
$context["ubicacion"], "isActive", array()) == "0")) {
                // line 39
                echo "
                                        <td><span class=\"glyphicon glyphicon-remove text-danger\">Invalida</span> </td>

                                    ";
            }
            // line 43
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ubicacion"], "latitud", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ubicacion"], "longitud", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ubicacion"], "vehiculo", array()), "placa", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ubicacion"], "vehiculo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ubicacion"], "vehiculo", array()), "propietario", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ubicacion"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>


                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ubicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                         </tbody>
                    </table>
                </div>

                <div class=\"navigation\">
                    ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["paginacion"]) ? $context["paginacion"] : $this->getContext($context, "paginacion")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_09742c20014f1fcf432ad396763d31d88644e87af7737f754000b1f6c3efcf22->leave($__internal_09742c20014f1fcf432ad396763d31d88644e87af7737f754000b1f6c3efcf22_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Ubicaciones:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  136 => 54,  124 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 44,  103 => 43,  97 => 39,  95 => 38,  90 => 35,  88 => 34,  83 => 32,  80 => 31,  76 => 30,  66 => 23,  54 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <center>*/
/*         <h1 style="color: #1b6d85">Registro de Ubicaciones</h1>*/
/*     </center>*/
/* */
/*     <div class="container">*/
/*         <div class="col-md-12 col-xs-12 col-lg-12">*/
/*             <div class="page-header margin-none">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table table-hover table-striped table-bordered">*/
/*                         total registros:{{ paginacion.getTotalItemCount }}*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Estado</th>*/
/*                                 <th>Latitud</th>*/
/*                                 <th>Longitud</th>*/
/*                                 <th>placa vehiculo</th>*/
/*                                 <th>Tipo</th>*/
/*                                 <th>Propietario</th>*/
/*                                 <th>{{ knp_pagination_sortable(paginacion,'Fecha Ubicación','u.createdAt') }}</th>*/
/* */
/*                             </tr>*/
/*                             </thead>*/
/* */
/*                          <tbody>*/
/* */
/*                             {% for ubicacion in paginacion %}*/
/* */
/*                                 <tr data-id="{{ ubicacion.id }}">*/
/* */
/*                                     {% if ubicacion.isActive == "1" %}*/
/* */
/*                                         <td><span class="glyphicon glyphicon-ok text-success">Valida</span> </td>*/
/* */
/*                                     {% elseif ubicacion.isActive == "0" %}*/
/* */
/*                                         <td><span class="glyphicon glyphicon-remove text-danger">Invalida</span> </td>*/
/* */
/*                                     {% endif %}*/
/*                                     <td>{{ ubicacion.latitud }}</td>*/
/*                                     <td>{{ ubicacion.longitud }}</td>*/
/*                                     <td>{{ ubicacion.vehiculo.placa }}</td>*/
/*                                     <td>{{ ubicacion.vehiculo.tipo }}</td>*/
/*                                     <td>{{ ubicacion.vehiculo.propietario.fullName }}</td>*/
/*                                     <td>{{ ubicacion.createdAt  | date('d-m-Y H:i') }}</td>*/
/* */
/* */
/*                                 </tr>*/
/* */
/*                             {% endfor %}*/
/*                          </tbody>*/
/*                     </table>*/
/*                 </div>*/
/* */
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(paginacion) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
