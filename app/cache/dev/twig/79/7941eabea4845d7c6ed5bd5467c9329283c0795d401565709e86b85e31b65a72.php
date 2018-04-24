<?php

/* GestionBundle:propietarios:mensajes/danger.html.twig */
class __TwigTemplate_6f51a946b714f47bb0b040fea8dee21c469c660f45f00c8396a0986f7593d90a extends Twig_Template
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
        $__internal_5050814d84262010d8319fa7387f9764686130f9cc7a1710f6bfd8e37e47a344 = $this->env->getExtension("native_profiler");
        $__internal_5050814d84262010d8319fa7387f9764686130f9cc7a1710f6bfd8e37e47a344->enter($__internal_5050814d84262010d8319fa7387f9764686130f9cc7a1710f6bfd8e37e47a344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:mensajes/danger.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"propietario-message-danger\"></span>
        </div>

    </div>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>

    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5050814d84262010d8319fa7387f9764686130f9cc7a1710f6bfd8e37e47a344->leave($__internal_5050814d84262010d8319fa7387f9764686130f9cc7a1710f6bfd8e37e47a344_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:propietarios:mensajes/danger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  40 => 11,  36 => 10,  33 => 9,  24 => 2,  22 => 1,);
    }
}
/* {% if flashMessage is not defined  %}*/
/*     <div class="alert alert-danger hidden" id="message-danger" role="alert">*/
/*         <div class="container">*/
/*             <span id="propietario-message-danger"></span>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endif %}*/
/* */
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*     <div class="alert alert-danger" role="alert">*/
/*         <div class="container">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endfor %}*/
