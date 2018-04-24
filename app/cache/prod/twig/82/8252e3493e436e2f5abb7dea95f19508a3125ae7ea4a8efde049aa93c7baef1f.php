<?php

/* layout.html.twig */
class __TwigTemplate_3f12ef3aebadb71050dc929a2f8a8e1b66a70984d55ee48e6479d23dfe2360d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcdd6d778a50e5e5bedd201d28fe4a64bea7bced23064f05dba75f1867ff509e = $this->env->getExtension("native_profiler");
        $__internal_dcdd6d778a50e5e5bedd201d28fe4a64bea7bced23064f05dba75f1867ff509e->enter($__internal_dcdd6d778a50e5e5bedd201d28fe4a64bea7bced23064f05dba75f1867ff509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "

</head>
<body>

";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
</body>

";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
</html>
";
        
        $__internal_dcdd6d778a50e5e5bedd201d28fe4a64bea7bced23064f05dba75f1867ff509e->leave($__internal_dcdd6d778a50e5e5bedd201d28fe4a64bea7bced23064f05dba75f1867ff509e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c55d3f67c866c9f79e87286542103fc0f9cf630a72e2c36b45ca98e6d5ce82ee = $this->env->getExtension("native_profiler");
        $__internal_c55d3f67c866c9f79e87286542103fc0f9cf630a72e2c36b45ca98e6d5ce82ee->enter($__internal_c55d3f67c866c9f79e87286542103fc0f9cf630a72e2c36b45ca98e6d5ce82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Ubicacion de vehiculos
            ";
        
        $__internal_c55d3f67c866c9f79e87286542103fc0f9cf630a72e2c36b45ca98e6d5ce82ee->leave($__internal_c55d3f67c866c9f79e87286542103fc0f9cf630a72e2c36b45ca98e6d5ce82ee_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_490c30cfb0767ca68fccd277b03b94151357898aeee4aab6038fe90077b10938 = $this->env->getExtension("native_profiler");
        $__internal_490c30cfb0767ca68fccd277b03b94151357898aeee4aab6038fe90077b10938->enter($__internal_490c30cfb0767ca68fccd277b03b94151357898aeee4aab6038fe90077b10938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_490c30cfb0767ca68fccd277b03b94151357898aeee4aab6038fe90077b10938->leave($__internal_490c30cfb0767ca68fccd277b03b94151357898aeee4aab6038fe90077b10938_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c90f34d3033e1c9dee3bbcc092bb1764c619c7d7a8125f37419c378d4c5b5671 = $this->env->getExtension("native_profiler");
        $__internal_c90f34d3033e1c9dee3bbcc092bb1764c619c7d7a8125f37419c378d4c5b5671->enter($__internal_c90f34d3033e1c9dee3bbcc092bb1764c619c7d7a8125f37419c378d4c5b5671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 22
            echo "        ";
            echo twig_include($this->env, $context, "menu.html.twig", array("user" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getFullName", array())));
            echo "
        <div style=\"padding: 40px\">&nbsp;</div>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje_error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "        <center>
        <div class=\"alert alert-danger\" role=\"alert\">
            <div class=\"container\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "

            </div>
        </div>
        </center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "

";
        
        $__internal_c90f34d3033e1c9dee3bbcc092bb1764c619c7d7a8125f37419c378d4c5b5671->leave($__internal_c90f34d3033e1c9dee3bbcc092bb1764c619c7d7a8125f37419c378d4c5b5671_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac161fcc842223dda94e1e3d4940414bf631b5b271002e036bff0b7ea42a9007 = $this->env->getExtension("native_profiler");
        $__internal_ac161fcc842223dda94e1e3d4940414bf631b5b271002e036bff0b7ea42a9007->enter($__internal_ac161fcc842223dda94e1e3d4940414bf631b5b271002e036bff0b7ea42a9007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://use.fontawesome.com/e403779434.js\"></script>

";
        
        $__internal_ac161fcc842223dda94e1e3d4940414bf631b5b271002e036bff0b7ea42a9007->leave($__internal_ac161fcc842223dda94e1e3d4940414bf631b5b271002e036bff0b7ea42a9007_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b19b9fba81770b3bb8d2096097233a9c67a6542202010a566b5022738ba74421 = $this->env->getExtension("native_profiler");
        $__internal_b19b9fba81770b3bb8d2096097233a9c67a6542202010a566b5022738ba74421->enter($__internal_b19b9fba81770b3bb8d2096097233a9c67a6542202010a566b5022738ba74421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "
";
        // line 52
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            echo "    <center>
        <footer  class=\"fixed-bottom\">
            <strong>
                <p class=\"container\">Fundacion Universitaria de Popayan<br>
                    Facultad de Ingenierias
                </p>
            </strong>
        </footer>
    </center>
";
        }
        
        $__internal_b19b9fba81770b3bb8d2096097233a9c67a6542202010a566b5022738ba74421->leave($__internal_b19b9fba81770b3bb8d2096097233a9c67a6542202010a566b5022738ba74421_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 53,  195 => 52,  192 => 51,  186 => 50,  175 => 43,  171 => 42,  166 => 41,  160 => 40,  151 => 36,  139 => 30,  134 => 27,  130 => 26,  127 => 25,  120 => 22,  118 => 21,  115 => 20,  109 => 19,  100 => 12,  96 => 11,  91 => 10,  85 => 9,  77 => 6,  71 => 5,  62 => 64,  60 => 50,  55 => 47,  53 => 40,  50 => 39,  48 => 19,  41 => 14,  39 => 9,  35 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}*/
/*             Ubicacion de vehiculos*/
/*             {% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     {% endblock %}*/
/* */
/* */
/* </head>*/
/* <body>*/
/* */
/* {% block body %}*/
/* */
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {{ include('menu.html.twig',{user: app.user.getFullName }) }}*/
/*         <div style="padding: 40px">&nbsp;</div>*/
/*     {% endif %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('mensaje_error') %}*/
/*         <center>*/
/*         <div class="alert alert-danger" role="alert">*/
/*             <div class="container">*/
/*                 {{ flashMessage }}*/
/* */
/*             </div>*/
/*         </div>*/
/*         </center>*/
/*     {% endfor %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/bootbox.min.js') }}"></script>*/
/*     <script src="https://use.fontawesome.com/e403779434.js"></script>*/
/* */
/* {% endblock %}*/
/* */
/* </body>*/
/* */
/* {% block footer %}*/
/* */
/* {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*     <center>*/
/*         <footer  class="fixed-bottom">*/
/*             <strong>*/
/*                 <p class="container">Fundacion Universitaria de Popayan<br>*/
/*                     Facultad de Ingenierias*/
/*                 </p>*/
/*             </strong>*/
/*         </footer>*/
/*     </center>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* </html>*/
/* */
