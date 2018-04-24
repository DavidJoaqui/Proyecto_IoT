<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_85b2407615a86fdd85cef32bf2eb195cc4a2b7871c2d090f4591ffea32671e75 extends Twig_Template
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
        $__internal_66bcf1972a62833880e1ad6784c19da0ca6037d28fca6d3e63d6c035cff55983 = $this->env->getExtension("native_profiler");
        $__internal_66bcf1972a62833880e1ad6784c19da0ca6037d28fca6d3e63d6c035cff55983->enter($__internal_66bcf1972a62833880e1ad6784c19da0ca6037d28fca6d3e63d6c035cff55983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_66bcf1972a62833880e1ad6784c19da0ca6037d28fca6d3e63d6c035cff55983->leave($__internal_66bcf1972a62833880e1ad6784c19da0ca6037d28fca6d3e63d6c035cff55983_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
