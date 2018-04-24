<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c89a65d0a460dff482b36218ce10f4d8b5d5704c2021ee898c260fcc8dcb7dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6419cdd9eebedaab296159d0caf2ed2573a234836bce2bf2f8d26ec339529d0 = $this->env->getExtension("native_profiler");
        $__internal_d6419cdd9eebedaab296159d0caf2ed2573a234836bce2bf2f8d26ec339529d0->enter($__internal_d6419cdd9eebedaab296159d0caf2ed2573a234836bce2bf2f8d26ec339529d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6419cdd9eebedaab296159d0caf2ed2573a234836bce2bf2f8d26ec339529d0->leave($__internal_d6419cdd9eebedaab296159d0caf2ed2573a234836bce2bf2f8d26ec339529d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f1370a73254efef827c01a8d9d3f5afb0629ee18ec31d95fa915bd1a37b2283 = $this->env->getExtension("native_profiler");
        $__internal_6f1370a73254efef827c01a8d9d3f5afb0629ee18ec31d95fa915bd1a37b2283->enter($__internal_6f1370a73254efef827c01a8d9d3f5afb0629ee18ec31d95fa915bd1a37b2283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f1370a73254efef827c01a8d9d3f5afb0629ee18ec31d95fa915bd1a37b2283->leave($__internal_6f1370a73254efef827c01a8d9d3f5afb0629ee18ec31d95fa915bd1a37b2283_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b02ed55a8fcfa6f8a9a622066b74652cc685df82d0d18f4dbee4a150a432f0e1 = $this->env->getExtension("native_profiler");
        $__internal_b02ed55a8fcfa6f8a9a622066b74652cc685df82d0d18f4dbee4a150a432f0e1->enter($__internal_b02ed55a8fcfa6f8a9a622066b74652cc685df82d0d18f4dbee4a150a432f0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b02ed55a8fcfa6f8a9a622066b74652cc685df82d0d18f4dbee4a150a432f0e1->leave($__internal_b02ed55a8fcfa6f8a9a622066b74652cc685df82d0d18f4dbee4a150a432f0e1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fa286e51680cfc99e6b31ca570d57ac2bab9fc90b182c1909e6a006563b933 = $this->env->getExtension("native_profiler");
        $__internal_89fa286e51680cfc99e6b31ca570d57ac2bab9fc90b182c1909e6a006563b933->enter($__internal_89fa286e51680cfc99e6b31ca570d57ac2bab9fc90b182c1909e6a006563b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_89fa286e51680cfc99e6b31ca570d57ac2bab9fc90b182c1909e6a006563b933->leave($__internal_89fa286e51680cfc99e6b31ca570d57ac2bab9fc90b182c1909e6a006563b933_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
