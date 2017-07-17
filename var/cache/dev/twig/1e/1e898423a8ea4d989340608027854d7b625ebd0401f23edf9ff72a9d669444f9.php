<?php

/* debug.html.twig */
class __TwigTemplate_c00ba50a038a5298d05b4c2386b3bed9cfeefd8d29a3d23c81c143b45ee72499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "debug.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9519c356fbe05d68492fd72c013e5be1cef856b80ec55e5b3bb0debac250db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9519c356fbe05d68492fd72c013e5be1cef856b80ec55e5b3bb0debac250db->enter($__internal_7a9519c356fbe05d68492fd72c013e5be1cef856b80ec55e5b3bb0debac250db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "debug.html.twig"));

        $__internal_61d48d576b9d7839a841348b5c2dabbd0089864b46e58dde4dd25f5ae48cbbe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d48d576b9d7839a841348b5c2dabbd0089864b46e58dde4dd25f5ae48cbbe6->enter($__internal_61d48d576b9d7839a841348b5c2dabbd0089864b46e58dde4dd25f5ae48cbbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9519c356fbe05d68492fd72c013e5be1cef856b80ec55e5b3bb0debac250db->leave($__internal_7a9519c356fbe05d68492fd72c013e5be1cef856b80ec55e5b3bb0debac250db_prof);

        
        $__internal_61d48d576b9d7839a841348b5c2dabbd0089864b46e58dde4dd25f5ae48cbbe6->leave($__internal_61d48d576b9d7839a841348b5c2dabbd0089864b46e58dde4dd25f5ae48cbbe6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c70729bb328076d6cc32412d9884caf1de6ac788688ee53e7f6ee6be8d2cf0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c70729bb328076d6cc32412d9884caf1de6ac788688ee53e7f6ee6be8d2cf0e->enter($__internal_3c70729bb328076d6cc32412d9884caf1de6ac788688ee53e7f6ee6be8d2cf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b40070c351602456bf232dfb55966269cb99eb689fcc085063f8fcaacbf0d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b40070c351602456bf232dfb55966269cb99eb689fcc085063f8fcaacbf0d8d->enter($__internal_6b40070c351602456bf232dfb55966269cb99eb689fcc085063f8fcaacbf0d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["debug"] ?? $this->getContext($context, "debug")));
        echo "
";
        
        $__internal_6b40070c351602456bf232dfb55966269cb99eb689fcc085063f8fcaacbf0d8d->leave($__internal_6b40070c351602456bf232dfb55966269cb99eb689fcc085063f8fcaacbf0d8d_prof);

        
        $__internal_3c70729bb328076d6cc32412d9884caf1de6ac788688ee53e7f6ee6be8d2cf0e->leave($__internal_3c70729bb328076d6cc32412d9884caf1de6ac788688ee53e7f6ee6be8d2cf0e_prof);

    }

    public function getTemplateName()
    {
        return "debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    {{ dump( debug ) }}
{% endblock %}
", "debug.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_09/final/app/Resources/views/debug.html.twig");
    }
}
