<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c5b12845d2c7997eb5db85a4d42bdacf27ff5e20b94ccb50c8cea2b7f208254e extends Twig_Template
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
        $__internal_0ad308cd0b72b2f627215ea56b32619f1ad30f52130b028ba736438c3aa7f9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad308cd0b72b2f627215ea56b32619f1ad30f52130b028ba736438c3aa7f9d9->enter($__internal_0ad308cd0b72b2f627215ea56b32619f1ad30f52130b028ba736438c3aa7f9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0f6cb745f258bb3572fd8bce9a5d8f794333aa1fd8a666e5b492febeb5fc9c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6cb745f258bb3572fd8bce9a5d8f794333aa1fd8a666e5b492febeb5fc9c95->enter($__internal_0f6cb745f258bb3572fd8bce9a5d8f794333aa1fd8a666e5b492febeb5fc9c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_0ad308cd0b72b2f627215ea56b32619f1ad30f52130b028ba736438c3aa7f9d9->leave($__internal_0ad308cd0b72b2f627215ea56b32619f1ad30f52130b028ba736438c3aa7f9d9_prof);

        
        $__internal_0f6cb745f258bb3572fd8bce9a5d8f794333aa1fd8a666e5b492febeb5fc9c95->leave($__internal_0f6cb745f258bb3572fd8bce9a5d8f794333aa1fd8a666e5b492febeb5fc9c95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
