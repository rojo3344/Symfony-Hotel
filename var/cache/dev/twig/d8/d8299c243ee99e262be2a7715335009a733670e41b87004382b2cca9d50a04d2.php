<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0695add5f3f24d007b936beff18a0f0dbc4cb2e66bc6aa9b69d17d9d0d2be8ba extends Twig_Template
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
        $__internal_3281707f767f4e4c910c08e1c143425c5f61771c015a5ca06272e1fa178098c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3281707f767f4e4c910c08e1c143425c5f61771c015a5ca06272e1fa178098c0->enter($__internal_3281707f767f4e4c910c08e1c143425c5f61771c015a5ca06272e1fa178098c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8fe4d4869b4856510a2b8242d249463a79e706f44ad29603ddd3213e3cb1a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe4d4869b4856510a2b8242d249463a79e706f44ad29603ddd3213e3cb1a800->enter($__internal_8fe4d4869b4856510a2b8242d249463a79e706f44ad29603ddd3213e3cb1a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3281707f767f4e4c910c08e1c143425c5f61771c015a5ca06272e1fa178098c0->leave($__internal_3281707f767f4e4c910c08e1c143425c5f61771c015a5ca06272e1fa178098c0_prof);

        
        $__internal_8fe4d4869b4856510a2b8242d249463a79e706f44ad29603ddd3213e3cb1a800->leave($__internal_8fe4d4869b4856510a2b8242d249463a79e706f44ad29603ddd3213e3cb1a800_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
