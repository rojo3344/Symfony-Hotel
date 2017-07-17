<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_53b68d3799eaf0f81eb2f1a48ba98660ba6c2dee0f79b15c6e1a4306007d5995 extends Twig_Template
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
        $__internal_c8d7a25c53a11d8840f59ae49d54350dc4bca8bdcf0687448ae0757a13f7dd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d7a25c53a11d8840f59ae49d54350dc4bca8bdcf0687448ae0757a13f7dd4e->enter($__internal_c8d7a25c53a11d8840f59ae49d54350dc4bca8bdcf0687448ae0757a13f7dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4527882d5d52bb4922e16cb954785280da4b9794b66b6b2979d9a0c4a5474a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4527882d5d52bb4922e16cb954785280da4b9794b66b6b2979d9a0c4a5474a9c->enter($__internal_4527882d5d52bb4922e16cb954785280da4b9794b66b6b2979d9a0c4a5474a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c8d7a25c53a11d8840f59ae49d54350dc4bca8bdcf0687448ae0757a13f7dd4e->leave($__internal_c8d7a25c53a11d8840f59ae49d54350dc4bca8bdcf0687448ae0757a13f7dd4e_prof);

        
        $__internal_4527882d5d52bb4922e16cb954785280da4b9794b66b6b2979d9a0c4a5474a9c->leave($__internal_4527882d5d52bb4922e16cb954785280da4b9794b66b6b2979d9a0c4a5474a9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
