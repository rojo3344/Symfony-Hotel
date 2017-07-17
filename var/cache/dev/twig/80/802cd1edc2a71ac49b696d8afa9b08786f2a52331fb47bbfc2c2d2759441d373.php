<?php

/* reservations/debug.html.twig */
class __TwigTemplate_637b234ed2c6e078d857fa8499ba04bd814834d487e8364a07d91766135f2ea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/debug.html.twig", 1);
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
        $__internal_09fc5a67a0fef0781529b9d58373f35c279f9d5df033f474e6cd3e166ac0cdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fc5a67a0fef0781529b9d58373f35c279f9d5df033f474e6cd3e166ac0cdd1->enter($__internal_09fc5a67a0fef0781529b9d58373f35c279f9d5df033f474e6cd3e166ac0cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/debug.html.twig"));

        $__internal_849065b41f7db36e091368f21b24dd22dc49150817cfc649c85429ca6ded9c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849065b41f7db36e091368f21b24dd22dc49150817cfc649c85429ca6ded9c44->enter($__internal_849065b41f7db36e091368f21b24dd22dc49150817cfc649c85429ca6ded9c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fc5a67a0fef0781529b9d58373f35c279f9d5df033f474e6cd3e166ac0cdd1->leave($__internal_09fc5a67a0fef0781529b9d58373f35c279f9d5df033f474e6cd3e166ac0cdd1_prof);

        
        $__internal_849065b41f7db36e091368f21b24dd22dc49150817cfc649c85429ca6ded9c44->leave($__internal_849065b41f7db36e091368f21b24dd22dc49150817cfc649c85429ca6ded9c44_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_228aa6d1db44d1d2cbafa5959ce7e8b113013107e23851cf9706a28758eaec69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228aa6d1db44d1d2cbafa5959ce7e8b113013107e23851cf9706a28758eaec69->enter($__internal_228aa6d1db44d1d2cbafa5959ce7e8b113013107e23851cf9706a28758eaec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac3b59caa22f72f162841cb0feff424c2bfadb8f33c45b60e6d0aac65b0f2b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac3b59caa22f72f162841cb0feff424c2bfadb8f33c45b60e6d0aac65b0f2b23->enter($__internal_ac3b59caa22f72f162841cb0feff424c2bfadb8f33c45b60e6d0aac65b0f2b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["debug"] ?? $this->getContext($context, "debug")));
        echo "
";
        
        $__internal_ac3b59caa22f72f162841cb0feff424c2bfadb8f33c45b60e6d0aac65b0f2b23->leave($__internal_ac3b59caa22f72f162841cb0feff424c2bfadb8f33c45b60e6d0aac65b0f2b23_prof);

        
        $__internal_228aa6d1db44d1d2cbafa5959ce7e8b113013107e23851cf9706a28758eaec69->leave($__internal_228aa6d1db44d1d2cbafa5959ce7e8b113013107e23851cf9706a28758eaec69_prof);

    }

    public function getTemplateName()
    {
        return "reservations/debug.html.twig";
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
    {{ dump(debug) }}
{% endblock %}
", "reservations/debug.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_09/final/app/Resources/views/reservations/debug.html.twig");
    }
}
