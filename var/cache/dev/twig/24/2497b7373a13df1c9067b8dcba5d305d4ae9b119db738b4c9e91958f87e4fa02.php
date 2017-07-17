<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cf3d4b2554e3ec295d307bbede5f35aa5bd9acda17ce1419164cd38eef2e4233 extends Twig_Template
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
        $__internal_8a0ae33ec976d15abd76a2a104368d1b3575516275bdd36485560e534b8cf573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0ae33ec976d15abd76a2a104368d1b3575516275bdd36485560e534b8cf573->enter($__internal_8a0ae33ec976d15abd76a2a104368d1b3575516275bdd36485560e534b8cf573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7daf1c78fb123badbaa01cf6b312b38903e923b62424a596afd3f0bb42883ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daf1c78fb123badbaa01cf6b312b38903e923b62424a596afd3f0bb42883ea1->enter($__internal_7daf1c78fb123badbaa01cf6b312b38903e923b62424a596afd3f0bb42883ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8a0ae33ec976d15abd76a2a104368d1b3575516275bdd36485560e534b8cf573->leave($__internal_8a0ae33ec976d15abd76a2a104368d1b3575516275bdd36485560e534b8cf573_prof);

        
        $__internal_7daf1c78fb123badbaa01cf6b312b38903e923b62424a596afd3f0bb42883ea1->leave($__internal_7daf1c78fb123badbaa01cf6b312b38903e923b62424a596afd3f0bb42883ea1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
