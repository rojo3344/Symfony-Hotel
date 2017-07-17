<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_17a554e40bd3d9db1981ef15a9247be3530b67b3cd5626e7874f8804576ff299 extends Twig_Template
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
        $__internal_611f3264ada3772f4ce0822915f41171b4fb9dc3ac5d930f34642aa2c4252558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611f3264ada3772f4ce0822915f41171b4fb9dc3ac5d930f34642aa2c4252558->enter($__internal_611f3264ada3772f4ce0822915f41171b4fb9dc3ac5d930f34642aa2c4252558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8592e77448d800ff76a2f6372f81f98a91967631a7754f07759dee5ec66a53ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8592e77448d800ff76a2f6372f81f98a91967631a7754f07759dee5ec66a53ca->enter($__internal_8592e77448d800ff76a2f6372f81f98a91967631a7754f07759dee5ec66a53ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_611f3264ada3772f4ce0822915f41171b4fb9dc3ac5d930f34642aa2c4252558->leave($__internal_611f3264ada3772f4ce0822915f41171b4fb9dc3ac5d930f34642aa2c4252558_prof);

        
        $__internal_8592e77448d800ff76a2f6372f81f98a91967631a7754f07759dee5ec66a53ca->leave($__internal_8592e77448d800ff76a2f6372f81f98a91967631a7754f07759dee5ec66a53ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
