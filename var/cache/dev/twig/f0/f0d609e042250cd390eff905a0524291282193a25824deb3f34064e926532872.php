<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4e29f8266a6732ce5a01d370cae84b2d10ef42c962370581ea58249b4824d783 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e5aa587d136adb820a0ddf47ef75a462f46fb5d12f8a73563c3c46d5ebc7346a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aa587d136adb820a0ddf47ef75a462f46fb5d12f8a73563c3c46d5ebc7346a->enter($__internal_e5aa587d136adb820a0ddf47ef75a462f46fb5d12f8a73563c3c46d5ebc7346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0e7de4f2b26aac2c0a8f4c90b3f12dae2eab53179c853a6125c35ebbe1c50e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7de4f2b26aac2c0a8f4c90b3f12dae2eab53179c853a6125c35ebbe1c50e8c->enter($__internal_0e7de4f2b26aac2c0a8f4c90b3f12dae2eab53179c853a6125c35ebbe1c50e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aa587d136adb820a0ddf47ef75a462f46fb5d12f8a73563c3c46d5ebc7346a->leave($__internal_e5aa587d136adb820a0ddf47ef75a462f46fb5d12f8a73563c3c46d5ebc7346a_prof);

        
        $__internal_0e7de4f2b26aac2c0a8f4c90b3f12dae2eab53179c853a6125c35ebbe1c50e8c->leave($__internal_0e7de4f2b26aac2c0a8f4c90b3f12dae2eab53179c853a6125c35ebbe1c50e8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b6eec46e0d275af6a3d1173ecda06455944399758ac3c1ef7ca7c1b60465fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6eec46e0d275af6a3d1173ecda06455944399758ac3c1ef7ca7c1b60465fa2->enter($__internal_8b6eec46e0d275af6a3d1173ecda06455944399758ac3c1ef7ca7c1b60465fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c3f2f20de268826470b84285bc78c9a18f62277d6752dab0025d1ff4c87919e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3f2f20de268826470b84285bc78c9a18f62277d6752dab0025d1ff4c87919e->enter($__internal_2c3f2f20de268826470b84285bc78c9a18f62277d6752dab0025d1ff4c87919e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c3f2f20de268826470b84285bc78c9a18f62277d6752dab0025d1ff4c87919e->leave($__internal_2c3f2f20de268826470b84285bc78c9a18f62277d6752dab0025d1ff4c87919e_prof);

        
        $__internal_8b6eec46e0d275af6a3d1173ecda06455944399758ac3c1ef7ca7c1b60465fa2->leave($__internal_8b6eec46e0d275af6a3d1173ecda06455944399758ac3c1ef7ca7c1b60465fa2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f3978a2f479ba381e3a59ca1b69110830c29267ebb5ed3e6d7ebd75f6445632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3978a2f479ba381e3a59ca1b69110830c29267ebb5ed3e6d7ebd75f6445632->enter($__internal_9f3978a2f479ba381e3a59ca1b69110830c29267ebb5ed3e6d7ebd75f6445632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5855a7cc31dbdeb4e60a3354bbfe18586d66c71e505d6e6a1cb2832c91b47c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5855a7cc31dbdeb4e60a3354bbfe18586d66c71e505d6e6a1cb2832c91b47c97->enter($__internal_5855a7cc31dbdeb4e60a3354bbfe18586d66c71e505d6e6a1cb2832c91b47c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5855a7cc31dbdeb4e60a3354bbfe18586d66c71e505d6e6a1cb2832c91b47c97->leave($__internal_5855a7cc31dbdeb4e60a3354bbfe18586d66c71e505d6e6a1cb2832c91b47c97_prof);

        
        $__internal_9f3978a2f479ba381e3a59ca1b69110830c29267ebb5ed3e6d7ebd75f6445632->leave($__internal_9f3978a2f479ba381e3a59ca1b69110830c29267ebb5ed3e6d7ebd75f6445632_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
