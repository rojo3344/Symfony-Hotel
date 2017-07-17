<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_07315ed7fef70b803afe8fd07cd80fa98465065bbe5944a6f719618ac0044594 extends Twig_Template
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
        $__internal_693139f62656551967ba8cf001dffc9975a7c82f3a278bcb5ff391623330f442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693139f62656551967ba8cf001dffc9975a7c82f3a278bcb5ff391623330f442->enter($__internal_693139f62656551967ba8cf001dffc9975a7c82f3a278bcb5ff391623330f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_997f777523b55e42ee45daaf3a1fe931e604e49fea7896bcf27d07e792a457c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997f777523b55e42ee45daaf3a1fe931e604e49fea7896bcf27d07e792a457c2->enter($__internal_997f777523b55e42ee45daaf3a1fe931e604e49fea7896bcf27d07e792a457c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_693139f62656551967ba8cf001dffc9975a7c82f3a278bcb5ff391623330f442->leave($__internal_693139f62656551967ba8cf001dffc9975a7c82f3a278bcb5ff391623330f442_prof);

        
        $__internal_997f777523b55e42ee45daaf3a1fe931e604e49fea7896bcf27d07e792a457c2->leave($__internal_997f777523b55e42ee45daaf3a1fe931e604e49fea7896bcf27d07e792a457c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
