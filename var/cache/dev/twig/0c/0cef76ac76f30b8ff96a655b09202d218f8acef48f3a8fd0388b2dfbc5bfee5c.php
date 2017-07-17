<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b67aa2d7bad39db64ca9c69743272a3fb719189976ae487ab0ba93226c69c547 extends Twig_Template
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
        $__internal_f39b92693f81a9ebda90203a36d714ce8f957e36b21121c7fb9439eaa642fafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39b92693f81a9ebda90203a36d714ce8f957e36b21121c7fb9439eaa642fafd->enter($__internal_f39b92693f81a9ebda90203a36d714ce8f957e36b21121c7fb9439eaa642fafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7b664281725db5168fca74465f2f7d76e031dd4661fd5a04d489c96d9335af74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b664281725db5168fca74465f2f7d76e031dd4661fd5a04d489c96d9335af74->enter($__internal_7b664281725db5168fca74465f2f7d76e031dd4661fd5a04d489c96d9335af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f39b92693f81a9ebda90203a36d714ce8f957e36b21121c7fb9439eaa642fafd->leave($__internal_f39b92693f81a9ebda90203a36d714ce8f957e36b21121c7fb9439eaa642fafd_prof);

        
        $__internal_7b664281725db5168fca74465f2f7d76e031dd4661fd5a04d489c96d9335af74->leave($__internal_7b664281725db5168fca74465f2f7d76e031dd4661fd5a04d489c96d9335af74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
