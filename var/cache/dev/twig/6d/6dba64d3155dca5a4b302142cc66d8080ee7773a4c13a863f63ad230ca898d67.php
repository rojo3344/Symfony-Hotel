<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c6224273f808488cd51c5da42ab6da456434b908e52c9b98a2d187e6dda474fe extends Twig_Template
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
        $__internal_3006cf529d15196738254f1d226593667f8ac9b3fc4e4b5ca93d6cb5cd272bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3006cf529d15196738254f1d226593667f8ac9b3fc4e4b5ca93d6cb5cd272bb9->enter($__internal_3006cf529d15196738254f1d226593667f8ac9b3fc4e4b5ca93d6cb5cd272bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_bf56bf87dee5092099bd243d2f1f318b0e1de939da8bfc7680da747fb6ebbf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf56bf87dee5092099bd243d2f1f318b0e1de939da8bfc7680da747fb6ebbf5c->enter($__internal_bf56bf87dee5092099bd243d2f1f318b0e1de939da8bfc7680da747fb6ebbf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3006cf529d15196738254f1d226593667f8ac9b3fc4e4b5ca93d6cb5cd272bb9->leave($__internal_3006cf529d15196738254f1d226593667f8ac9b3fc4e4b5ca93d6cb5cd272bb9_prof);

        
        $__internal_bf56bf87dee5092099bd243d2f1f318b0e1de939da8bfc7680da747fb6ebbf5c->leave($__internal_bf56bf87dee5092099bd243d2f1f318b0e1de939da8bfc7680da747fb6ebbf5c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
