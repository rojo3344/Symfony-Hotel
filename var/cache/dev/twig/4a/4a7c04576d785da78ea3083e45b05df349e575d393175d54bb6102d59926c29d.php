<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_57c86c2c57f364ae28d4943d0d64974cb699410ac09d4b00d63aa02babb17885 extends Twig_Template
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
        $__internal_480c2e3d7be8bba04de918e551089e778c57670fb7ac060101b8aac17e962a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480c2e3d7be8bba04de918e551089e778c57670fb7ac060101b8aac17e962a09->enter($__internal_480c2e3d7be8bba04de918e551089e778c57670fb7ac060101b8aac17e962a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d6fdcf81991336694aaabf66aca72acd30782b37ebe4a44ceff51630b42eef55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fdcf81991336694aaabf66aca72acd30782b37ebe4a44ceff51630b42eef55->enter($__internal_d6fdcf81991336694aaabf66aca72acd30782b37ebe4a44ceff51630b42eef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_480c2e3d7be8bba04de918e551089e778c57670fb7ac060101b8aac17e962a09->leave($__internal_480c2e3d7be8bba04de918e551089e778c57670fb7ac060101b8aac17e962a09_prof);

        
        $__internal_d6fdcf81991336694aaabf66aca72acd30782b37ebe4a44ceff51630b42eef55->leave($__internal_d6fdcf81991336694aaabf66aca72acd30782b37ebe4a44ceff51630b42eef55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
