<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d30f13ce4d035319a153f8d5663395b462f03ac399d3a88c026fc1a21d9489bb extends Twig_Template
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
        $__internal_25b669292ae048521bb5b492583b16d1caa1d5442b3e6d0028c57ced12db6496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b669292ae048521bb5b492583b16d1caa1d5442b3e6d0028c57ced12db6496->enter($__internal_25b669292ae048521bb5b492583b16d1caa1d5442b3e6d0028c57ced12db6496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_515cd04cc550c7d80d4d70d69e009bc8590431bf95980ce8e5e9c5b99bdddaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515cd04cc550c7d80d4d70d69e009bc8590431bf95980ce8e5e9c5b99bdddaf0->enter($__internal_515cd04cc550c7d80d4d70d69e009bc8590431bf95980ce8e5e9c5b99bdddaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_25b669292ae048521bb5b492583b16d1caa1d5442b3e6d0028c57ced12db6496->leave($__internal_25b669292ae048521bb5b492583b16d1caa1d5442b3e6d0028c57ced12db6496_prof);

        
        $__internal_515cd04cc550c7d80d4d70d69e009bc8590431bf95980ce8e5e9c5b99bdddaf0->leave($__internal_515cd04cc550c7d80d4d70d69e009bc8590431bf95980ce8e5e9c5b99bdddaf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
