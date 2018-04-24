<?php

/* GestionBundle:propietarios:mensajes/confirmacion.html.twig */
class __TwigTemplate_5cadb5e621f11994f849a953dd92ad40180ec2e52fb96a9ad7ebb5ba97c78dad extends Twig_Template
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
        $__internal_73a393a905f83aea2333c95654721f6faa5ea2a1eb3727bcd5fd99950a2a9faf = $this->env->getExtension("native_profiler");
        $__internal_73a393a905f83aea2333c95654721f6faa5ea2a1eb3727bcd5fd99950a2a9faf->enter($__internal_73a393a905f83aea2333c95654721f6faa5ea2a1eb3727bcd5fd99950a2a9faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:mensajes/confirmacion.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
        <span id=\"propietario-message\">

        </span>
        </div>

    </div>
";
        }
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <div class=\"container\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

";
        
        $__internal_73a393a905f83aea2333c95654721f6faa5ea2a1eb3727bcd5fd99950a2a9faf->leave($__internal_73a393a905f83aea2333c95654721f6faa5ea2a1eb3727bcd5fd99950a2a9faf_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:mensajes/confirmacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  46 => 15,  42 => 13,  38 => 12,  35 => 11,  24 => 2,  22 => 1,);
    }
}
/* {% if flashMessage is not defined  %}*/
/*     <div class="alert alert-success hidden" id="message" role="alert">*/
/*         <div class="container">*/
/*         <span id="propietario-message">*/
/* */
/*         </span>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endif %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container">*/
/*                 {{ flashMessage }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* */
/* */
