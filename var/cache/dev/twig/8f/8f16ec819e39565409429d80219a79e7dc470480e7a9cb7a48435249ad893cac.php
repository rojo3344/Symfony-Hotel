<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_984505c96580befa6e2a4f9b70e9221843e0cf5ee344f7c8b9b816f1b848a354 extends Twig_Template
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
        $__internal_0ca2838055abc4c625dfc94b39e692416df81ebb38efc5dbc0a781b5d3ec5daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca2838055abc4c625dfc94b39e692416df81ebb38efc5dbc0a781b5d3ec5daf->enter($__internal_0ca2838055abc4c625dfc94b39e692416df81ebb38efc5dbc0a781b5d3ec5daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e627917807c13299d4555fb64e95c713010623c365327d913117e888d46f8f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e627917807c13299d4555fb64e95c713010623c365327d913117e888d46f8f67->enter($__internal_e627917807c13299d4555fb64e95c713010623c365327d913117e888d46f8f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0ca2838055abc4c625dfc94b39e692416df81ebb38efc5dbc0a781b5d3ec5daf->leave($__internal_0ca2838055abc4c625dfc94b39e692416df81ebb38efc5dbc0a781b5d3ec5daf_prof);

        
        $__internal_e627917807c13299d4555fb64e95c713010623c365327d913117e888d46f8f67->leave($__internal_e627917807c13299d4555fb64e95c713010623c365327d913117e888d46f8f67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
