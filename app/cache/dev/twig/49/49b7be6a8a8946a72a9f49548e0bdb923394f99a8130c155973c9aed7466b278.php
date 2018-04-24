<?php

/* layout.html.twig */
class __TwigTemplate_b8d9a5b0151d86079b60e6362c198f070c1465e85d53c5135ac268e217f957c9 extends Twig_Template
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
        $__internal_1d0b62c93e3f879550af7fb5bdd64c5855b9caa51a0720bd7860996ea6e0d686 = $this->env->getExtension("native_profiler");
        $__internal_1d0b62c93e3f879550af7fb5bdd64c5855b9caa51a0720bd7860996ea6e0d686->enter($__internal_1d0b62c93e3f879550af7fb5bdd64c5855b9caa51a0720bd7860996ea6e0d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_1d0b62c93e3f879550af7fb5bdd64c5855b9caa51a0720bd7860996ea6e0d686->leave($__internal_1d0b62c93e3f879550af7fb5bdd64c5855b9caa51a0720bd7860996ea6e0d686_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbc0937f7bd4a8ede04ccdbd0a1c4372add96b535a0ebe718a3fabff2bc63c22 = $this->env->getExtension("native_profiler");
        $__internal_fbc0937f7bd4a8ede04ccdbd0a1c4372add96b535a0ebe718a3fabff2bc63c22->enter($__internal_fbc0937f7bd4a8ede04ccdbd0a1c4372add96b535a0ebe718a3fabff2bc63c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Ubicacion de vehiculos
            ";
        
        $__internal_fbc0937f7bd4a8ede04ccdbd0a1c4372add96b535a0ebe718a3fabff2bc63c22->leave($__internal_fbc0937f7bd4a8ede04ccdbd0a1c4372add96b535a0ebe718a3fabff2bc63c22_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8557f3b362c97221c2a0d8d77f4d7fe42cbf48fd26b5b915f7aee394c05d88c6 = $this->env->getExtension("native_profiler");
        $__internal_8557f3b362c97221c2a0d8d77f4d7fe42cbf48fd26b5b915f7aee394c05d88c6->enter($__internal_8557f3b362c97221c2a0d8d77f4d7fe42cbf48fd26b5b915f7aee394c05d88c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8557f3b362c97221c2a0d8d77f4d7fe42cbf48fd26b5b915f7aee394c05d88c6->leave($__internal_8557f3b362c97221c2a0d8d77f4d7fe42cbf48fd26b5b915f7aee394c05d88c6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9b85fe1e2deff562d221fc8843137015088bf8528c0a0c04d1d95fb3d16bd87 = $this->env->getExtension("native_profiler");
        $__internal_f9b85fe1e2deff562d221fc8843137015088bf8528c0a0c04d1d95fb3d16bd87->enter($__internal_f9b85fe1e2deff562d221fc8843137015088bf8528c0a0c04d1d95fb3d16bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9b85fe1e2deff562d221fc8843137015088bf8528c0a0c04d1d95fb3d16bd87->leave($__internal_f9b85fe1e2deff562d221fc8843137015088bf8528c0a0c04d1d95fb3d16bd87_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e114527f4674103b828ca53f1abcdbcfa5efdb4ae96222518c52bf4433d37cca = $this->env->getExtension("native_profiler");
        $__internal_e114527f4674103b828ca53f1abcdbcfa5efdb4ae96222518c52bf4433d37cca->enter($__internal_e114527f4674103b828ca53f1abcdbcfa5efdb4ae96222518c52bf4433d37cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e114527f4674103b828ca53f1abcdbcfa5efdb4ae96222518c52bf4433d37cca->leave($__internal_e114527f4674103b828ca53f1abcdbcfa5efdb4ae96222518c52bf4433d37cca_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_20336ec9b52dd7f48f83eadc354d2c8156f85f9916bea5ce2df71d90626b26c9 = $this->env->getExtension("native_profiler");
        $__internal_20336ec9b52dd7f48f83eadc354d2c8156f85f9916bea5ce2df71d90626b26c9->enter($__internal_20336ec9b52dd7f48f83eadc354d2c8156f85f9916bea5ce2df71d90626b26c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_20336ec9b52dd7f48f83eadc354d2c8156f85f9916bea5ce2df71d90626b26c9->leave($__internal_20336ec9b52dd7f48f83eadc354d2c8156f85f9916bea5ce2df71d90626b26c9_prof);

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
