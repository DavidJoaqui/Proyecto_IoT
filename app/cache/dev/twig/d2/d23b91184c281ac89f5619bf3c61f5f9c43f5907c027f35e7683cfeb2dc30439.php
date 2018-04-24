<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_ac8c70bb790077de377958edf4c81cc5e66835f9ef6a09d931e1af678c74ad3a extends Twig_Template
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
        $__internal_bceb7afe7d3526f22092467bef82877facedf810aa12f4117da9178ce1e0e2ce = $this->env->getExtension("native_profiler");
        $__internal_bceb7afe7d3526f22092467bef82877facedf810aa12f4117da9178ce1e0e2ce->enter($__internal_bceb7afe7d3526f22092467bef82877facedf810aa12f4117da9178ce1e0e2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

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
        
        $__internal_bceb7afe7d3526f22092467bef82877facedf810aa12f4117da9178ce1e0e2ce->leave($__internal_bceb7afe7d3526f22092467bef82877facedf810aa12f4117da9178ce1e0e2ce_prof);

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
