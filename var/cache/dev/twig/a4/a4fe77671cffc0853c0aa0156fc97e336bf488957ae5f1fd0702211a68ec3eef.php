<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b92cee0d3dcaafba82ac8784b75c906a47838f1245539ed02aee25f0383bb302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87f6ded7f29b1b1b82c1e190eca09d15d27f1fd0951296599e85965184fcda2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f6ded7f29b1b1b82c1e190eca09d15d27f1fd0951296599e85965184fcda2d->enter($__internal_87f6ded7f29b1b1b82c1e190eca09d15d27f1fd0951296599e85965184fcda2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_85dc3da7eb6b8e243b4a4975aaed3899caa084ff48bc89c81c9c525eb338b54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc3da7eb6b8e243b4a4975aaed3899caa084ff48bc89c81c9c525eb338b54a->enter($__internal_85dc3da7eb6b8e243b4a4975aaed3899caa084ff48bc89c81c9c525eb338b54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f6ded7f29b1b1b82c1e190eca09d15d27f1fd0951296599e85965184fcda2d->leave($__internal_87f6ded7f29b1b1b82c1e190eca09d15d27f1fd0951296599e85965184fcda2d_prof);

        
        $__internal_85dc3da7eb6b8e243b4a4975aaed3899caa084ff48bc89c81c9c525eb338b54a->leave($__internal_85dc3da7eb6b8e243b4a4975aaed3899caa084ff48bc89c81c9c525eb338b54a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78bde87de9cd4d292572d12f5bec65a2645173b05086a650663c43270d20918b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bde87de9cd4d292572d12f5bec65a2645173b05086a650663c43270d20918b->enter($__internal_78bde87de9cd4d292572d12f5bec65a2645173b05086a650663c43270d20918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6cdfb9397aeb5e4845b66ae430f5a96795a0e0e0a99973cb4478118abc7baeb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdfb9397aeb5e4845b66ae430f5a96795a0e0e0a99973cb4478118abc7baeb9->enter($__internal_6cdfb9397aeb5e4845b66ae430f5a96795a0e0e0a99973cb4478118abc7baeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6cdfb9397aeb5e4845b66ae430f5a96795a0e0e0a99973cb4478118abc7baeb9->leave($__internal_6cdfb9397aeb5e4845b66ae430f5a96795a0e0e0a99973cb4478118abc7baeb9_prof);

        
        $__internal_78bde87de9cd4d292572d12f5bec65a2645173b05086a650663c43270d20918b->leave($__internal_78bde87de9cd4d292572d12f5bec65a2645173b05086a650663c43270d20918b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dec33ebb67ff012dabb12d0a9c29951a2aea8bf04a3f5eed0f9905df040980f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec33ebb67ff012dabb12d0a9c29951a2aea8bf04a3f5eed0f9905df040980f6->enter($__internal_dec33ebb67ff012dabb12d0a9c29951a2aea8bf04a3f5eed0f9905df040980f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2b2ac079c44d1af4335c360fcea3923d2dd540cc29509d87dd069c20a41e8b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2ac079c44d1af4335c360fcea3923d2dd540cc29509d87dd069c20a41e8b3f->enter($__internal_2b2ac079c44d1af4335c360fcea3923d2dd540cc29509d87dd069c20a41e8b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b2ac079c44d1af4335c360fcea3923d2dd540cc29509d87dd069c20a41e8b3f->leave($__internal_2b2ac079c44d1af4335c360fcea3923d2dd540cc29509d87dd069c20a41e8b3f_prof);

        
        $__internal_dec33ebb67ff012dabb12d0a9c29951a2aea8bf04a3f5eed0f9905df040980f6->leave($__internal_dec33ebb67ff012dabb12d0a9c29951a2aea8bf04a3f5eed0f9905df040980f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf135fb171ad890f5ac13cf734c870ae267fe5a0bc2966e448c5c82b2c101d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf135fb171ad890f5ac13cf734c870ae267fe5a0bc2966e448c5c82b2c101d9e->enter($__internal_bf135fb171ad890f5ac13cf734c870ae267fe5a0bc2966e448c5c82b2c101d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fec62b1192979786c9ff6e3d98f5e30f8362db365cef7b43ad547dff3204a98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec62b1192979786c9ff6e3d98f5e30f8362db365cef7b43ad547dff3204a98e->enter($__internal_fec62b1192979786c9ff6e3d98f5e30f8362db365cef7b43ad547dff3204a98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fec62b1192979786c9ff6e3d98f5e30f8362db365cef7b43ad547dff3204a98e->leave($__internal_fec62b1192979786c9ff6e3d98f5e30f8362db365cef7b43ad547dff3204a98e_prof);

        
        $__internal_bf135fb171ad890f5ac13cf734c870ae267fe5a0bc2966e448c5c82b2c101d9e->leave($__internal_bf135fb171ad890f5ac13cf734c870ae267fe5a0bc2966e448c5c82b2c101d9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
