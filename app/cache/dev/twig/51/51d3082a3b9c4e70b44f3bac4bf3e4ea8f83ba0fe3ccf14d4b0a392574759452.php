<?php

/* GestionBundle:Vehiculos:mensajes/danger.html.twig */
class __TwigTemplate_419579a111e5269e99d99fbc4675f0aa0d09d1bd7f26fde41a1618b934544de5 extends Twig_Template
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
        $__internal_1d9669a01a1bf4f1b5eb4d61815ef1a6b6586099f66db01b1ccb1746feb279f7 = $this->env->getExtension("native_profiler");
        $__internal_1d9669a01a1bf4f1b5eb4d61815ef1a6b6586099f66db01b1ccb1746feb279f7->enter($__internal_1d9669a01a1bf4f1b5eb4d61815ef1a6b6586099f66db01b1ccb1746feb279f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Vehiculos:mensajes/danger.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"vehiculo-message-danger\"></span>
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
        
        $__internal_1d9669a01a1bf4f1b5eb4d61815ef1a6b6586099f66db01b1ccb1746feb279f7->leave($__internal_1d9669a01a1bf4f1b5eb4d61815ef1a6b6586099f66db01b1ccb1746feb279f7_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Vehiculos:mensajes/danger.html.twig";
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
/*             <span id="vehiculo-message-danger"></span>*/
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
