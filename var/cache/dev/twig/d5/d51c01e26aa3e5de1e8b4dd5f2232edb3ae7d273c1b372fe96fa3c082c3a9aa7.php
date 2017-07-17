<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f890f91aa4ece7148ff97449cf724547af4f2e1ef94db308656cf7e1bfe3cfc3 extends Twig_Template
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
        $__internal_b7d4d384328030979f0b4df70a2594bff0d1335da3e52696d6e9e88446650e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d4d384328030979f0b4df70a2594bff0d1335da3e52696d6e9e88446650e32->enter($__internal_b7d4d384328030979f0b4df70a2594bff0d1335da3e52696d6e9e88446650e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_34cb0352eb192f7a2fb4564c6f35e5b0b440477af4eaf395e67023364f9dfc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cb0352eb192f7a2fb4564c6f35e5b0b440477af4eaf395e67023364f9dfc2e->enter($__internal_34cb0352eb192f7a2fb4564c6f35e5b0b440477af4eaf395e67023364f9dfc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b7d4d384328030979f0b4df70a2594bff0d1335da3e52696d6e9e88446650e32->leave($__internal_b7d4d384328030979f0b4df70a2594bff0d1335da3e52696d6e9e88446650e32_prof);

        
        $__internal_34cb0352eb192f7a2fb4564c6f35e5b0b440477af4eaf395e67023364f9dfc2e->leave($__internal_34cb0352eb192f7a2fb4564c6f35e5b0b440477af4eaf395e67023364f9dfc2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
