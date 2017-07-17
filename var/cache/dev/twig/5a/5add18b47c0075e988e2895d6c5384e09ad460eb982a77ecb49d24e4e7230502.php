<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_59edfea8f1d771826c2593a362cd5e46072558d9c4640438a778810cc5f57d5d extends Twig_Template
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
        $__internal_b2c0f6427a6467f0274bb786cbf717b31362e5030808068eacf5ac5a9f1ba40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c0f6427a6467f0274bb786cbf717b31362e5030808068eacf5ac5a9f1ba40a->enter($__internal_b2c0f6427a6467f0274bb786cbf717b31362e5030808068eacf5ac5a9f1ba40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_69f4462e99dfafc1ca4997b7226ceeddceab75a4d96c3a98a22a88f04d61c73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4462e99dfafc1ca4997b7226ceeddceab75a4d96c3a98a22a88f04d61c73c->enter($__internal_69f4462e99dfafc1ca4997b7226ceeddceab75a4d96c3a98a22a88f04d61c73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b2c0f6427a6467f0274bb786cbf717b31362e5030808068eacf5ac5a9f1ba40a->leave($__internal_b2c0f6427a6467f0274bb786cbf717b31362e5030808068eacf5ac5a9f1ba40a_prof);

        
        $__internal_69f4462e99dfafc1ca4997b7226ceeddceab75a4d96c3a98a22a88f04d61c73c->leave($__internal_69f4462e99dfafc1ca4997b7226ceeddceab75a4d96c3a98a22a88f04d61c73c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
