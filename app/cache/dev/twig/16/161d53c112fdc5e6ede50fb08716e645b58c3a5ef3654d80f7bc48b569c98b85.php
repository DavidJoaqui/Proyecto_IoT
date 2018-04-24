<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6feb233a1b2be8af7a795bef52f38b78201e352283ca02c6a233200ee87ca570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ca61e280abb246909aea0cd04c7920d552408a7017058cfd42d0b57fa4db824 = $this->env->getExtension("native_profiler");
        $__internal_2ca61e280abb246909aea0cd04c7920d552408a7017058cfd42d0b57fa4db824->enter($__internal_2ca61e280abb246909aea0cd04c7920d552408a7017058cfd42d0b57fa4db824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca61e280abb246909aea0cd04c7920d552408a7017058cfd42d0b57fa4db824->leave($__internal_2ca61e280abb246909aea0cd04c7920d552408a7017058cfd42d0b57fa4db824_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_174d3201b55b9a24651ccb4bfb8b315895b7a88b8552ef8f7bc5812fcd322b5e = $this->env->getExtension("native_profiler");
        $__internal_174d3201b55b9a24651ccb4bfb8b315895b7a88b8552ef8f7bc5812fcd322b5e->enter($__internal_174d3201b55b9a24651ccb4bfb8b315895b7a88b8552ef8f7bc5812fcd322b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_174d3201b55b9a24651ccb4bfb8b315895b7a88b8552ef8f7bc5812fcd322b5e->leave($__internal_174d3201b55b9a24651ccb4bfb8b315895b7a88b8552ef8f7bc5812fcd322b5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c7621f4e5f8fa83d39abd0be691aee3fb4e7ecac762e84a30aec83b9ba37995 = $this->env->getExtension("native_profiler");
        $__internal_6c7621f4e5f8fa83d39abd0be691aee3fb4e7ecac762e84a30aec83b9ba37995->enter($__internal_6c7621f4e5f8fa83d39abd0be691aee3fb4e7ecac762e84a30aec83b9ba37995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c7621f4e5f8fa83d39abd0be691aee3fb4e7ecac762e84a30aec83b9ba37995->leave($__internal_6c7621f4e5f8fa83d39abd0be691aee3fb4e7ecac762e84a30aec83b9ba37995_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aedfdc7ab186e1389b2f34bb58df9eff1c6f66899f0a009e1cd47d4a7f95667d = $this->env->getExtension("native_profiler");
        $__internal_aedfdc7ab186e1389b2f34bb58df9eff1c6f66899f0a009e1cd47d4a7f95667d->enter($__internal_aedfdc7ab186e1389b2f34bb58df9eff1c6f66899f0a009e1cd47d4a7f95667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aedfdc7ab186e1389b2f34bb58df9eff1c6f66899f0a009e1cd47d4a7f95667d->leave($__internal_aedfdc7ab186e1389b2f34bb58df9eff1c6f66899f0a009e1cd47d4a7f95667d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
