<?php

/* GestionBundle:propietarios:home.html.twig */
class __TwigTemplate_b62b71280dfc1e94105447a551858d50ff5c4bc70a22febd5819f5a3781a54eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:propietarios:home.html.twig", 1);
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
        $__internal_e12a6a32cac2a3edf5743885f017d6fb8f295731e58db16cc168add8ac93423a = $this->env->getExtension("native_profiler");
        $__internal_e12a6a32cac2a3edf5743885f017d6fb8f295731e58db16cc168add8ac93423a->enter($__internal_e12a6a32cac2a3edf5743885f017d6fb8f295731e58db16cc168add8ac93423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12a6a32cac2a3edf5743885f017d6fb8f295731e58db16cc168add8ac93423a->leave($__internal_e12a6a32cac2a3edf5743885f017d6fb8f295731e58db16cc168add8ac93423a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c9f8013b10cf11ac058223cddf1339a8c5720a425eed050b3ca39b26c1ab82d = $this->env->getExtension("native_profiler");
        $__internal_2c9f8013b10cf11ac058223cddf1339a8c5720a425eed050b3ca39b26c1ab82d->enter($__internal_2c9f8013b10cf11ac058223cddf1339a8c5720a425eed050b3ca39b26c1ab82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <center>
    <div class=\"text-success container text-center\" style=\"padding-bottom: 30px\">

        <div class=\"container\">
        <h2 class=\"text-success text-center\">
            <span class=\"glyphicon glyphicon-ok\"></span>
            Bienvenido!
            ";
        // line 13
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullName", array()), "html", null, true);
            echo "
            ";
        }
        // line 16
        echo "        </h2>

            ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 19
            echo "                Administrador
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_USER")) {
            // line 21
            echo "                Usuario
            ";
        }
        // line 23
        echo "            :
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullName", array()), "html", null, true);
        echo "


            <center>
            <div style=\"padding-top: 30px\">
                <table>
                    <thead><h1>Fundación Universitaria de Popayán</h1>
                        <h2>Proyecto de Geolocalizacion</h2>
                    </thead>

                    <th>
                        <center>
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/fup.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" width=\"200\" height=\"200\">
                        </center>
                    </th>

                </table>
            </div>

            <div>
                <br>
                <p>
                   <strong> Proyecto Desarrollado por:<br/>
                          Darwin Ferney Vergara<br>
                          Wilmer Jair Fernandez<br>
                          Jose David Joaqui

                   </strong>

                </p>
            </div>
            </center>

        </div>

    </div>
    </center>
";
        
        $__internal_2c9f8013b10cf11ac058223cddf1339a8c5720a425eed050b3ca39b26c1ab82d->leave($__internal_2c9f8013b10cf11ac058223cddf1339a8c5720a425eed050b3ca39b26c1ab82d_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  79 => 24,  76 => 23,  72 => 21,  70 => 20,  67 => 19,  65 => 18,  61 => 16,  55 => 14,  53 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/*     <center>*/
/*     <div class="text-success container text-center" style="padding-bottom: 30px">*/
/* */
/*         <div class="container">*/
/*         <h2 class="text-success text-center">*/
/*             <span class="glyphicon glyphicon-ok"></span>*/
/*             Bienvenido!*/
/*             {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN') %}*/
/*                 {{ app.user.getFullName }}*/
/*             {% endif %}*/
/*         </h2>*/
/* */
/*             {% if app.user.role == 'ROLE_ADMIN' %}*/
/*                 Administrador*/
/*             {% elseif app.user.role == 'ROLE_USER' %}*/
/*                 Usuario*/
/*             {% endif %}*/
/*             :*/
/*             {{ app.user.getFullName }}*/
/* */
/* */
/*             <center>*/
/*             <div style="padding-top: 30px">*/
/*                 <table>*/
/*                     <thead><h1>Fundación Universitaria de Popayán</h1>*/
/*                         <h2>Proyecto de Geolocalizacion</h2>*/
/*                     </thead>*/
/* */
/*                     <th>*/
/*                         <center>*/
/*                             <img src="{{ asset('public/images/fup.jpg') }}" class="img-thumbnail" width="200" height="200">*/
/*                         </center>*/
/*                     </th>*/
/* */
/*                 </table>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 <br>*/
/*                 <p>*/
/*                    <strong> Proyecto Desarrollado por:<br/>*/
/*                           Darwin Ferney Vergara<br>*/
/*                           Wilmer Jair Fernandez<br>*/
/*                           Jose David Joaqui*/
/* */
/*                    </strong>*/
/* */
/*                 </p>*/
/*             </div>*/
/*             </center>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     </center>*/
/* {% endblock %}*/
/* */
