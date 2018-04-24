<?php

/* GestionBundle:propietarios:mensajes/confirmacion.html.twig */
class __TwigTemplate_a2b477d72269aa09293701e6a1fac874899bc959272922f5419c28006daba41a extends Twig_Template
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
        $__internal_560e23a9a08bf0001d601b7b22ecfecbd3c0350989667867b4fccc2e461a2198 = $this->env->getExtension("native_profiler");
        $__internal_560e23a9a08bf0001d601b7b22ecfecbd3c0350989667867b4fccc2e461a2198->enter($__internal_560e23a9a08bf0001d601b7b22ecfecbd3c0350989667867b4fccc2e461a2198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:propietarios:mensajes/confirmacion.html.twig"));

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
        
        $__internal_560e23a9a08bf0001d601b7b22ecfecbd3c0350989667867b4fccc2e461a2198->leave($__internal_560e23a9a08bf0001d601b7b22ecfecbd3c0350989667867b4fccc2e461a2198_prof);

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
