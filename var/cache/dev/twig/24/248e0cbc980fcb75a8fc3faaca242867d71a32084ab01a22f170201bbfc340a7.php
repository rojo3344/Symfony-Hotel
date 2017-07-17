<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f6c9f1d21f6be8cbcf703030e551d6b57066174db4e712408f29b6c3a539d4f7 extends Twig_Template
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
        $__internal_ee9606a501ef688dec0fb6dde802a53accdcdbef35156306704ee6a6505f9096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9606a501ef688dec0fb6dde802a53accdcdbef35156306704ee6a6505f9096->enter($__internal_ee9606a501ef688dec0fb6dde802a53accdcdbef35156306704ee6a6505f9096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_6c7e0d1cce3f3b69ced3647f5b5e94706b2a0e8417124cb0a37ca86e6c63e9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7e0d1cce3f3b69ced3647f5b5e94706b2a0e8417124cb0a37ca86e6c63e9a2->enter($__internal_6c7e0d1cce3f3b69ced3647f5b5e94706b2a0e8417124cb0a37ca86e6c63e9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ee9606a501ef688dec0fb6dde802a53accdcdbef35156306704ee6a6505f9096->leave($__internal_ee9606a501ef688dec0fb6dde802a53accdcdbef35156306704ee6a6505f9096_prof);

        
        $__internal_6c7e0d1cce3f3b69ced3647f5b5e94706b2a0e8417124cb0a37ca86e6c63e9a2->leave($__internal_6c7e0d1cce3f3b69ced3647f5b5e94706b2a0e8417124cb0a37ca86e6c63e9a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
