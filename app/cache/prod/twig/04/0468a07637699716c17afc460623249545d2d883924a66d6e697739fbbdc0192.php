<?php

/* menu.html.twig */
class __TwigTemplate_5aadda1a8cf1d02ff44bb028ab135f88d4df40787b8cbc7c93fe845f6aeff3f8 extends Twig_Template
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
        $__internal_d7b0961b021089436d6181fff697ee5fb5a062a9efc713ec6660599fe6f8025e = $this->env->getExtension("native_profiler");
        $__internal_d7b0961b021089436d6181fff697ee5fb5a062a9efc713ec6660599fe6f8025e->enter($__internal_d7b0961b021089436d6181fff697ee5fb5a062a9efc713ec6660599fe6f8025e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "

<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"height: auto\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\"#example-navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>

</button>
<a class=\"navbar-brand\" href=\"#\">Proyecto de GeoPosicionamiento</a>
</div>
<div class=\"collapse navbar-collapse\" id=\"example-navbar-collapse\">
    <ul class=\"nav navbar-nav\" style=\"\">

        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\" style=\"color: #ffffff\"></i>
               Propietarios<b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("propietarios_index");
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span>&nbsp;Lista de Propietarios</a></li>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("propietario_add");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>&nbsp;Nuevo Propietario</a></li>

            </ul>
        </li>
    </ul>

    <ul class=\"nav navbar-nav\">

        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-car\" aria-hidden=\"true\" style=\"color: #ffffff\"></i>
                 Vehiculos<b class=\"caret\"></b>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("vehiculos_index");
        echo "\"><span class=\"glyphicon glyphicon-list-alt\"></span> &nbsp;Lista de Vehiculos</a></li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("vehiculos_add");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>&nbsp;Nuevo Vehiculo</a></li>

            </ul>
        </li>
    </ul>


    <ul class=\"nav navbar-nav\">

        <li class=\"dropdown\">


                <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ubicaciones_index");
        echo "\"> <i class=\"fa fa-map-marker\" style=\"color: red\" aria-hidden=\"true\"></i>&nbsp;Ubicaciones</a></li>

        </li>
    </ul>

    <ul class=\"nav navbar-nav navbar-right\">
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo " | <span class=\"glyphicon glyphicon-lock\"></span> Cerrar Sesion</a>
        </li>

    </ul>

</div>

</nav>
";
        
        $__internal_d7b0961b021089436d6181fff697ee5fb5a062a9efc713ec6660599fe6f8025e->leave($__internal_d7b0961b021089436d6181fff697ee5fb5a062a9efc713ec6660599fe6f8025e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 57,  85 => 50,  70 => 38,  66 => 37,  50 => 24,  46 => 23,  22 => 1,);
    }
}
/* */
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height: auto">*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                 data-target="#example-navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/* */
/* </button>*/
/* <a class="navbar-brand" href="#">Proyecto de GeoPosicionamiento</a>*/
/* </div>*/
/* <div class="collapse navbar-collapse" id="example-navbar-collapse">*/
/*     <ul class="nav navbar-nav" style="">*/
/* */
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true" style="color: #ffffff"></i>*/
/*                Propietarios<b class="caret"></b>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{ path('propietarios_index') }}"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Lista de Propietarios</a></li>*/
/*                 <li><a href="{{ path('propietario_add') }}"><span class="glyphicon glyphicon-user"></span>&nbsp;Nuevo Propietario</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <ul class="nav navbar-nav">*/
/* */
/*         <li class="dropdown">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-car" aria-hidden="true" style="color: #ffffff"></i>*/
/*                  Vehiculos<b class="caret"></b>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{ path('vehiculos_index') }}"><span class="glyphicon glyphicon-list-alt"></span> &nbsp;Lista de Vehiculos</a></li>*/
/*                 <li><a href="{{ path('vehiculos_add') }}"><span class="glyphicon glyphicon-plus"></span>&nbsp;Nuevo Vehiculo</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*     <ul class="nav navbar-nav">*/
/* */
/*         <li class="dropdown">*/
/* */
/* */
/*                 <li><a href="{{ path('ubicaciones_index') }}"> <i class="fa fa-map-marker" style="color: red" aria-hidden="true"></i>&nbsp;Ubicaciones</a></li>*/
/* */
/*         </li>*/
/*     </ul>*/
/* */
/*     <ul class="nav navbar-nav navbar-right">*/
/*         <li>*/
/*             <a href="{{ path('user_logout') }}"> {{ user }} | <span class="glyphicon glyphicon-lock"></span> Cerrar Sesion</a>*/
/*         </li>*/
/* */
/*     </ul>*/
/* */
/* </div>*/
/* */
/* </nav>*/
/* */
