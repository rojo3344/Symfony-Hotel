<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5b9da9a7cafeae9291cbf46a6e1d74f08e0ca3a25966a06b9b8f8321d05763e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5fb62160cf771d7a2f66e881cb2125a246b5713006e6a1884057c23b90fb230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fb62160cf771d7a2f66e881cb2125a246b5713006e6a1884057c23b90fb230->enter($__internal_f5fb62160cf771d7a2f66e881cb2125a246b5713006e6a1884057c23b90fb230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_14af6fbd6a086f26c2d295063acff84e994ec56b8f293222a73da785813bec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14af6fbd6a086f26c2d295063acff84e994ec56b8f293222a73da785813bec72->enter($__internal_14af6fbd6a086f26c2d295063acff84e994ec56b8f293222a73da785813bec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5fb62160cf771d7a2f66e881cb2125a246b5713006e6a1884057c23b90fb230->leave($__internal_f5fb62160cf771d7a2f66e881cb2125a246b5713006e6a1884057c23b90fb230_prof);

        
        $__internal_14af6fbd6a086f26c2d295063acff84e994ec56b8f293222a73da785813bec72->leave($__internal_14af6fbd6a086f26c2d295063acff84e994ec56b8f293222a73da785813bec72_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a19fc6a92197fa4787d70cef39af8c95183472c362f42bd2809a840cb369ad08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19fc6a92197fa4787d70cef39af8c95183472c362f42bd2809a840cb369ad08->enter($__internal_a19fc6a92197fa4787d70cef39af8c95183472c362f42bd2809a840cb369ad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b8a3fe03a775fab8d6f7a758112a9ca27e20d8c22c5a858756dba693d5a26d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a3fe03a775fab8d6f7a758112a9ca27e20d8c22c5a858756dba693d5a26d86->enter($__internal_b8a3fe03a775fab8d6f7a758112a9ca27e20d8c22c5a858756dba693d5a26d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b8a3fe03a775fab8d6f7a758112a9ca27e20d8c22c5a858756dba693d5a26d86->leave($__internal_b8a3fe03a775fab8d6f7a758112a9ca27e20d8c22c5a858756dba693d5a26d86_prof);

        
        $__internal_a19fc6a92197fa4787d70cef39af8c95183472c362f42bd2809a840cb369ad08->leave($__internal_a19fc6a92197fa4787d70cef39af8c95183472c362f42bd2809a840cb369ad08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
