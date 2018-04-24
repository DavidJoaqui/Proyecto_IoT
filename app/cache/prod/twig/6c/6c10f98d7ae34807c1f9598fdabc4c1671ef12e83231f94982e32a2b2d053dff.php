<?php

/* GestionBundle:Vehiculos:mensajes/confirmacion.html.twig */
class __TwigTemplate_f88fc1d3cb415a03de1f2ff4b7ed0bb7363df00e71d7d7ea06943da4c5ad5968 extends Twig_Template
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
        $__internal_4f6290c51851f34c0ef710a35ec92c3c0e1268be1477d5f6f5f007e38966fee1 = $this->env->getExtension("native_profiler");
        $__internal_4f6290c51851f34c0ef710a35ec92c3c0e1268be1477d5f6f5f007e38966fee1->enter($__internal_4f6290c51851f34c0ef710a35ec92c3c0e1268be1477d5f6f5f007e38966fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionBundle:Vehiculos:mensajes/confirmacion.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
        <span id=\"vehiculo-message\">

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
        
        $__internal_4f6290c51851f34c0ef710a35ec92c3c0e1268be1477d5f6f5f007e38966fee1->leave($__internal_4f6290c51851f34c0ef710a35ec92c3c0e1268be1477d5f6f5f007e38966fee1_prof);

    }

    public function getTemplateName()
    {
        return "GestionBundle:Vehiculos:mensajes/confirmacion.html.twig";
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
/*         <span id="vehiculo-message">*/
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
