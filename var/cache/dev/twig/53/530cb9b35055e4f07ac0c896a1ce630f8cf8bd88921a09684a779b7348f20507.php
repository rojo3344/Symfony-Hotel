<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f47758b81b780728bd11dfacb317071f5b53ed424713bacdcf6828c1702b1982 extends Twig_Template
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
        $__internal_8fa73c5e126a82034b0aa9afb9f1ff51124ffe3b269cf29f17604ab9defd5640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa73c5e126a82034b0aa9afb9f1ff51124ffe3b269cf29f17604ab9defd5640->enter($__internal_8fa73c5e126a82034b0aa9afb9f1ff51124ffe3b269cf29f17604ab9defd5640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_67fffe5690a34b80444c7f747232ff9e52ddc139db2dbc5e2d1d88c61be4e5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fffe5690a34b80444c7f747232ff9e52ddc139db2dbc5e2d1d88c61be4e5ab->enter($__internal_67fffe5690a34b80444c7f747232ff9e52ddc139db2dbc5e2d1d88c61be4e5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8fa73c5e126a82034b0aa9afb9f1ff51124ffe3b269cf29f17604ab9defd5640->leave($__internal_8fa73c5e126a82034b0aa9afb9f1ff51124ffe3b269cf29f17604ab9defd5640_prof);

        
        $__internal_67fffe5690a34b80444c7f747232ff9e52ddc139db2dbc5e2d1d88c61be4e5ab->leave($__internal_67fffe5690a34b80444c7f747232ff9e52ddc139db2dbc5e2d1d88c61be4e5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
