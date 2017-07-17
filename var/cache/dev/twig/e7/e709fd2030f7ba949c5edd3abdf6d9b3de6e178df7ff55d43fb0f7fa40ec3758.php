<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_52ed7b09cc9bda4b07d6d85e453000b8f054f9ffb21a78f7e4a1516c0f793898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc7aa6d57f3c66162094d7b6594b94fe66d4e8b84ba8adca49e6240ba8a97fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7aa6d57f3c66162094d7b6594b94fe66d4e8b84ba8adca49e6240ba8a97fcd->enter($__internal_dc7aa6d57f3c66162094d7b6594b94fe66d4e8b84ba8adca49e6240ba8a97fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9507c005118385c8c389ad1b6dbedf3c5cbbd4df99ff05659b9b3d4ab9cfef60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9507c005118385c8c389ad1b6dbedf3c5cbbd4df99ff05659b9b3d4ab9cfef60->enter($__internal_9507c005118385c8c389ad1b6dbedf3c5cbbd4df99ff05659b9b3d4ab9cfef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dc7aa6d57f3c66162094d7b6594b94fe66d4e8b84ba8adca49e6240ba8a97fcd->leave($__internal_dc7aa6d57f3c66162094d7b6594b94fe66d4e8b84ba8adca49e6240ba8a97fcd_prof);

        
        $__internal_9507c005118385c8c389ad1b6dbedf3c5cbbd4df99ff05659b9b3d4ab9cfef60->leave($__internal_9507c005118385c8c389ad1b6dbedf3c5cbbd4df99ff05659b9b3d4ab9cfef60_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f9ca81e2366ac890214ceab6b85a54300b156986457deb095df10677dd3908f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9ca81e2366ac890214ceab6b85a54300b156986457deb095df10677dd3908f->enter($__internal_2f9ca81e2366ac890214ceab6b85a54300b156986457deb095df10677dd3908f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42a4b326d242c04d6136a00bd16e5f4857d2197072a51d95ee4d2f5386c3bd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a4b326d242c04d6136a00bd16e5f4857d2197072a51d95ee4d2f5386c3bd2d->enter($__internal_42a4b326d242c04d6136a00bd16e5f4857d2197072a51d95ee4d2f5386c3bd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_42a4b326d242c04d6136a00bd16e5f4857d2197072a51d95ee4d2f5386c3bd2d->leave($__internal_42a4b326d242c04d6136a00bd16e5f4857d2197072a51d95ee4d2f5386c3bd2d_prof);

        
        $__internal_2f9ca81e2366ac890214ceab6b85a54300b156986457deb095df10677dd3908f->leave($__internal_2f9ca81e2366ac890214ceab6b85a54300b156986457deb095df10677dd3908f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
