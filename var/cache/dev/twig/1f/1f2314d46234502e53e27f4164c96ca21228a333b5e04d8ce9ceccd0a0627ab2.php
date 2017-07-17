<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_18507effff441833af85445150a74c1d1984c4052e4e3d9c05f3f8b8e83ddc7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_691fe89684a19cc7518f06365373f605a3f7c3ba94fe319705b7ccc3645a399f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691fe89684a19cc7518f06365373f605a3f7c3ba94fe319705b7ccc3645a399f->enter($__internal_691fe89684a19cc7518f06365373f605a3f7c3ba94fe319705b7ccc3645a399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0501b982d29dec211248aecbc445a00e993b80faeb21d5b446734ddd5982d49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0501b982d29dec211248aecbc445a00e993b80faeb21d5b446734ddd5982d49a->enter($__internal_0501b982d29dec211248aecbc445a00e993b80faeb21d5b446734ddd5982d49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691fe89684a19cc7518f06365373f605a3f7c3ba94fe319705b7ccc3645a399f->leave($__internal_691fe89684a19cc7518f06365373f605a3f7c3ba94fe319705b7ccc3645a399f_prof);

        
        $__internal_0501b982d29dec211248aecbc445a00e993b80faeb21d5b446734ddd5982d49a->leave($__internal_0501b982d29dec211248aecbc445a00e993b80faeb21d5b446734ddd5982d49a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f75cfc28f940c7b7f2685bb705d599610f35ed368d7c9be867bdab5e6683dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f75cfc28f940c7b7f2685bb705d599610f35ed368d7c9be867bdab5e6683dd6->enter($__internal_3f75cfc28f940c7b7f2685bb705d599610f35ed368d7c9be867bdab5e6683dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fd2ca53258615867cde9eb033c28a60a08bbb446eb3149572dc3f3e58db7fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd2ca53258615867cde9eb033c28a60a08bbb446eb3149572dc3f3e58db7fed->enter($__internal_7fd2ca53258615867cde9eb033c28a60a08bbb446eb3149572dc3f3e58db7fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7fd2ca53258615867cde9eb033c28a60a08bbb446eb3149572dc3f3e58db7fed->leave($__internal_7fd2ca53258615867cde9eb033c28a60a08bbb446eb3149572dc3f3e58db7fed_prof);

        
        $__internal_3f75cfc28f940c7b7f2685bb705d599610f35ed368d7c9be867bdab5e6683dd6->leave($__internal_3f75cfc28f940c7b7f2685bb705d599610f35ed368d7c9be867bdab5e6683dd6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b7f41ef7984dde9bc4d42e5ffa74b6f5acc4b9a43efd78914ff2e6f27a981a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7f41ef7984dde9bc4d42e5ffa74b6f5acc4b9a43efd78914ff2e6f27a981a3->enter($__internal_9b7f41ef7984dde9bc4d42e5ffa74b6f5acc4b9a43efd78914ff2e6f27a981a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63a45022d05a304ead2b2983f7d57b3434069c45d83df665ff8025339dcffa13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a45022d05a304ead2b2983f7d57b3434069c45d83df665ff8025339dcffa13->enter($__internal_63a45022d05a304ead2b2983f7d57b3434069c45d83df665ff8025339dcffa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63a45022d05a304ead2b2983f7d57b3434069c45d83df665ff8025339dcffa13->leave($__internal_63a45022d05a304ead2b2983f7d57b3434069c45d83df665ff8025339dcffa13_prof);

        
        $__internal_9b7f41ef7984dde9bc4d42e5ffa74b6f5acc4b9a43efd78914ff2e6f27a981a3->leave($__internal_9b7f41ef7984dde9bc4d42e5ffa74b6f5acc4b9a43efd78914ff2e6f27a981a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a221c8a7b8f4303653ff5175b403bf2cc4047e6d69bf2eb856c67da627fc482a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a221c8a7b8f4303653ff5175b403bf2cc4047e6d69bf2eb856c67da627fc482a->enter($__internal_a221c8a7b8f4303653ff5175b403bf2cc4047e6d69bf2eb856c67da627fc482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37c0a07955b84fb1ebda0e9bcb47c6c55b3117384df6576b15f5f6d2214acca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c0a07955b84fb1ebda0e9bcb47c6c55b3117384df6576b15f5f6d2214acca5->enter($__internal_37c0a07955b84fb1ebda0e9bcb47c6c55b3117384df6576b15f5f6d2214acca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_37c0a07955b84fb1ebda0e9bcb47c6c55b3117384df6576b15f5f6d2214acca5->leave($__internal_37c0a07955b84fb1ebda0e9bcb47c6c55b3117384df6576b15f5f6d2214acca5_prof);

        
        $__internal_a221c8a7b8f4303653ff5175b403bf2cc4047e6d69bf2eb856c67da627fc482a->leave($__internal_a221c8a7b8f4303653ff5175b403bf2cc4047e6d69bf2eb856c67da627fc482a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
