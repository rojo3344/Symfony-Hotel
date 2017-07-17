<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_d067c62a5bbc1ec14fd02d391d467c703b148e2eeeec4f1145815825b1a8a1fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9881fb858d41d818cb5b0a631e67e104219bb7dd29ffc1a33e29223318f9c7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9881fb858d41d818cb5b0a631e67e104219bb7dd29ffc1a33e29223318f9c7ef->enter($__internal_9881fb858d41d818cb5b0a631e67e104219bb7dd29ffc1a33e29223318f9c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_53bcf870fa16935a18928d8e653e128cd77c97250934d24590642e1ae72bcde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bcf870fa16935a18928d8e653e128cd77c97250934d24590642e1ae72bcde7->enter($__internal_53bcf870fa16935a18928d8e653e128cd77c97250934d24590642e1ae72bcde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9881fb858d41d818cb5b0a631e67e104219bb7dd29ffc1a33e29223318f9c7ef->leave($__internal_9881fb858d41d818cb5b0a631e67e104219bb7dd29ffc1a33e29223318f9c7ef_prof);

        
        $__internal_53bcf870fa16935a18928d8e653e128cd77c97250934d24590642e1ae72bcde7->leave($__internal_53bcf870fa16935a18928d8e653e128cd77c97250934d24590642e1ae72bcde7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f099f712dcfa125920be3bcc21c36b3a1c417123a27442553ad586f3c514062b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f099f712dcfa125920be3bcc21c36b3a1c417123a27442553ad586f3c514062b->enter($__internal_f099f712dcfa125920be3bcc21c36b3a1c417123a27442553ad586f3c514062b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0d61a8208b090660700239cd2d23719ee0c3c4882b63cc203643840c8a44dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d61a8208b090660700239cd2d23719ee0c3c4882b63cc203643840c8a44dab->enter($__internal_c0d61a8208b090660700239cd2d23719ee0c3c4882b63cc203643840c8a44dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c0d61a8208b090660700239cd2d23719ee0c3c4882b63cc203643840c8a44dab->leave($__internal_c0d61a8208b090660700239cd2d23719ee0c3c4882b63cc203643840c8a44dab_prof);

        
        $__internal_f099f712dcfa125920be3bcc21c36b3a1c417123a27442553ad586f3c514062b->leave($__internal_f099f712dcfa125920be3bcc21c36b3a1c417123a27442553ad586f3c514062b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3df828c122f84f1fb6659028a57a3be8446a597ad1da2535da52a3d93fb1ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3df828c122f84f1fb6659028a57a3be8446a597ad1da2535da52a3d93fb1ef4->enter($__internal_e3df828c122f84f1fb6659028a57a3be8446a597ad1da2535da52a3d93fb1ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f94d52a93678853099fcea999bab90dac1f8bb75827cbeaaed60fb93afdbd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f94d52a93678853099fcea999bab90dac1f8bb75827cbeaaed60fb93afdbd4d->enter($__internal_3f94d52a93678853099fcea999bab90dac1f8bb75827cbeaaed60fb93afdbd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3f94d52a93678853099fcea999bab90dac1f8bb75827cbeaaed60fb93afdbd4d->leave($__internal_3f94d52a93678853099fcea999bab90dac1f8bb75827cbeaaed60fb93afdbd4d_prof);

        
        $__internal_e3df828c122f84f1fb6659028a57a3be8446a597ad1da2535da52a3d93fb1ef4->leave($__internal_e3df828c122f84f1fb6659028a57a3be8446a597ad1da2535da52a3d93fb1ef4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
