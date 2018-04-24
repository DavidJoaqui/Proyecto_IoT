<?php

/* GestionBundle:Security:login.html.twig */
class __TwigTemplate_054741356aab532051af5c68be80a79145fc838109bab3e0bcda40e2c130ed7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "GestionBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d23436cd1526a6e24e83cfb0c396f34bfaa8eb5a0113e13065b17629b67c6378 = $this->env->getExtension("native_profiler");
        $__internal_d23436cd1526a6e24e83cfb0c396f34bfaa8eb5a0113e13065b17629b67c6378->enter($__internal_d23436cd1526a6e24e83cfb0c396f34bfaa8eb5a0113e13065b17629b67c6378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23436cd1526a6e24e83cfb0c396f34bfaa8eb5a0113e13065b17629b67c6378->leave($__internal_d23436cd1526a6e24e83cfb0c396f34bfaa8eb5a0113e13065b17629b67c6378_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b850171f28bce08c4266d404c019bd3d32e6a683612cd31fc2c451c68ca0cc4a = $this->env->getExtension("native_profiler");
        $__internal_b850171f28bce08c4266d404c019bd3d32e6a683612cd31fc2c451c68ca0cc4a->enter($__internal_b850171f28bce08c4266d404c019bd3d32e6a683612cd31fc2c451c68ca0cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b850171f28bce08c4266d404c019bd3d32e6a683612cd31fc2c451c68ca0cc4a->leave($__internal_b850171f28bce08c4266d404c019bd3d32e6a683612cd31fc2c451c68ca0cc4a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ad7b703a4564dde02fd982b62e4aa344ffa91edf23e3c191c48b61bb4eff15 = $this->env->getExtension("native_profiler");
        $__internal_d5ad7b703a4564dde02fd982b62e4aa344ffa91edf23e3c191c48b61bb4eff15->enter($__internal_d5ad7b703a4564dde02fd982b62e4aa344ffa91edf23e3c191c48b61bb4eff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\" class=\"form-signin\">
            <h2 class=\"form-signin-heading\">";
        // line 14
        echo "Iniciar Sesion";
        echo "</h2>

            ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "                <div class=\"text-warning\">
                    <p>
                        <strong>
                           <div style=\"color: #ffffff\"> ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array())), "html", null, true);
            echo "</div>
                        </strong>
                    </p>
                </div>
            ";
        }
        // line 25
        echo "

            <div class=\"row well\">
                <label for=\"username\" id=\"credenciales\"><span class=\"glyphicon glyphicon-user\"></span> Nombre de Usuario:</label>

                <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\"
                       value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"ingrese su nombre de usuario\" required autofocus/><br>

                <label for=\"passsword\" id=\"credenciales\"><span class=\"glyphicon glyphicon-lock\"></span> Contraseña:</label><br>

                <input type=\"password\" id=\"passsword\" class=\"form-control\" name=\"_password\"

                       placeholder=\"ingresa tu contraseña\" required/><br>

                <input type=\"hidden\" name=\"_target_path\" value=\"user_homepage\"/>

                <button type=\"submit\" class=\"btn btn-md btn-primary btn-block\">Iniciar Sesion</button>

            </div>
        </form>
    </div>


";
        
        $__internal_d5ad7b703a4564dde02fd982b62e4aa344ffa91edf23e3c191c48b61bb4eff15->leave($__internal_d5ad7b703a4564dde02fd982b62e4aa344ffa91edf23e3c191c48b61bb4eff15_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  94 => 25,  86 => 20,  81 => 17,  79 => 16,  74 => 14,  70 => 13,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/css/signin.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {{ parent() }}*/
/* */
/*     <div class="container">*/
/*         <form action="{{ path('login_check') }}" method="POST" class="form-signin">*/
/*             <h2 class="form-signin-heading">{{ 'Iniciar Sesion' }}</h2>*/
/* */
/*             {% if error %}*/
/*                 <div class="text-warning">*/
/*                     <p>*/
/*                         <strong>*/
/*                            <div style="color: #ffffff"> {{ error.messageKey | trans}}</div>*/
/*                         </strong>*/
/*                     </p>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/* */
/*             <div class="row well">*/
/*                 <label for="username" id="credenciales"><span class="glyphicon glyphicon-user"></span> Nombre de Usuario:</label>*/
/* */
/*                 <input type="text" id="username" class="form-control" name="_username"*/
/*                        value="{{ last_username }}" placeholder="ingrese su nombre de usuario" required autofocus/><br>*/
/* */
/*                 <label for="passsword" id="credenciales"><span class="glyphicon glyphicon-lock"></span> Contraseña:</label><br>*/
/* */
/*                 <input type="password" id="passsword" class="form-control" name="_password"*/
/* */
/*                        placeholder="ingresa tu contraseña" required/><br>*/
/* */
/*                 <input type="hidden" name="_target_path" value="user_homepage"/>*/
/* */
/*                 <button type="submit" class="btn btn-md btn-primary btn-block">Iniciar Sesion</button>*/
/* */
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
