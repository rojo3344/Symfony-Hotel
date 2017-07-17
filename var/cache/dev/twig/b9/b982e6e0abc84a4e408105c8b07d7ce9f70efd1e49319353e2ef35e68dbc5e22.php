<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_46fb94d3043ab9342a6bbe165e6ceb23c8071781b8811ff3096b37eed5b30bd5 extends Twig_Template
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
        $__internal_913fd9893db254132a53881f86dfadfe8226e076512d111c46d4118b9e7ae75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913fd9893db254132a53881f86dfadfe8226e076512d111c46d4118b9e7ae75e->enter($__internal_913fd9893db254132a53881f86dfadfe8226e076512d111c46d4118b9e7ae75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_50bc59458f72e1527161702cc5a9cfeed3f1fc000abc31c077ed4719fca9bbd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bc59458f72e1527161702cc5a9cfeed3f1fc000abc31c077ed4719fca9bbd0->enter($__internal_50bc59458f72e1527161702cc5a9cfeed3f1fc000abc31c077ed4719fca9bbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_913fd9893db254132a53881f86dfadfe8226e076512d111c46d4118b9e7ae75e->leave($__internal_913fd9893db254132a53881f86dfadfe8226e076512d111c46d4118b9e7ae75e_prof);

        
        $__internal_50bc59458f72e1527161702cc5a9cfeed3f1fc000abc31c077ed4719fca9bbd0->leave($__internal_50bc59458f72e1527161702cc5a9cfeed3f1fc000abc31c077ed4719fca9bbd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
