<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_14605e780f28331c9fdf88fe374a612989ffb834d9f6b84a015e29b9eb923e60 extends Twig_Template
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
        $__internal_28441756f8b261600bded69df0ab7d38a74b5716de1d03aa0ef1705b63b26d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28441756f8b261600bded69df0ab7d38a74b5716de1d03aa0ef1705b63b26d36->enter($__internal_28441756f8b261600bded69df0ab7d38a74b5716de1d03aa0ef1705b63b26d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f48deef123c04848feabd4be8da3db2d12f22b4f1de4cfa5557cc75609e3a996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48deef123c04848feabd4be8da3db2d12f22b4f1de4cfa5557cc75609e3a996->enter($__internal_f48deef123c04848feabd4be8da3db2d12f22b4f1de4cfa5557cc75609e3a996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_28441756f8b261600bded69df0ab7d38a74b5716de1d03aa0ef1705b63b26d36->leave($__internal_28441756f8b261600bded69df0ab7d38a74b5716de1d03aa0ef1705b63b26d36_prof);

        
        $__internal_f48deef123c04848feabd4be8da3db2d12f22b4f1de4cfa5557cc75609e3a996->leave($__internal_f48deef123c04848feabd4be8da3db2d12f22b4f1de4cfa5557cc75609e3a996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
