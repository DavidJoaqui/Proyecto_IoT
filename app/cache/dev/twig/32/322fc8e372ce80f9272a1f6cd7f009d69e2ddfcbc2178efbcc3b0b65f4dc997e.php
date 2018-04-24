<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be9ca93e38d1664a1c58a9ad2838076088bae231d78daa74cef64a9a9c0ac408 extends Twig_Template
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
        $__internal_751bc4bf134cf1e99224554d8166d72022aae45bee7a0dca2d9ec510c64b1449 = $this->env->getExtension("native_profiler");
        $__internal_751bc4bf134cf1e99224554d8166d72022aae45bee7a0dca2d9ec510c64b1449->enter($__internal_751bc4bf134cf1e99224554d8166d72022aae45bee7a0dca2d9ec510c64b1449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_751bc4bf134cf1e99224554d8166d72022aae45bee7a0dca2d9ec510c64b1449->leave($__internal_751bc4bf134cf1e99224554d8166d72022aae45bee7a0dca2d9ec510c64b1449_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_289de346daf68c2014c1047d1e75a214c93fdf442d6a373e08179430d575129e = $this->env->getExtension("native_profiler");
        $__internal_289de346daf68c2014c1047d1e75a214c93fdf442d6a373e08179430d575129e->enter($__internal_289de346daf68c2014c1047d1e75a214c93fdf442d6a373e08179430d575129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_289de346daf68c2014c1047d1e75a214c93fdf442d6a373e08179430d575129e->leave($__internal_289de346daf68c2014c1047d1e75a214c93fdf442d6a373e08179430d575129e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c42b861fcb36970ee0b1214d12d9b051213cc99f5a447d684080ca45f5dc1b72 = $this->env->getExtension("native_profiler");
        $__internal_c42b861fcb36970ee0b1214d12d9b051213cc99f5a447d684080ca45f5dc1b72->enter($__internal_c42b861fcb36970ee0b1214d12d9b051213cc99f5a447d684080ca45f5dc1b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c42b861fcb36970ee0b1214d12d9b051213cc99f5a447d684080ca45f5dc1b72->leave($__internal_c42b861fcb36970ee0b1214d12d9b051213cc99f5a447d684080ca45f5dc1b72_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4dc55d4651969f24543d6fd069ca317a38f37ccbe673c08ffb072967d91a05d = $this->env->getExtension("native_profiler");
        $__internal_f4dc55d4651969f24543d6fd069ca317a38f37ccbe673c08ffb072967d91a05d->enter($__internal_f4dc55d4651969f24543d6fd069ca317a38f37ccbe673c08ffb072967d91a05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f4dc55d4651969f24543d6fd069ca317a38f37ccbe673c08ffb072967d91a05d->leave($__internal_f4dc55d4651969f24543d6fd069ca317a38f37ccbe673c08ffb072967d91a05d_prof);

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
