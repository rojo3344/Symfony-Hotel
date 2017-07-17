<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4e9f0cee3b1b5f79722802ae2a65aa8a386f85ce421231a98191fb15bd8db6ec extends Twig_Template
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
        $__internal_9671ed7be3f29ea7e52bec043a39857199ca0d044ad6121cd9c95dfba2d8f2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9671ed7be3f29ea7e52bec043a39857199ca0d044ad6121cd9c95dfba2d8f2d2->enter($__internal_9671ed7be3f29ea7e52bec043a39857199ca0d044ad6121cd9c95dfba2d8f2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_017660cf9b207ef03b754fa98dcf8695258e4ec5d2b15847f5d49600643da083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017660cf9b207ef03b754fa98dcf8695258e4ec5d2b15847f5d49600643da083->enter($__internal_017660cf9b207ef03b754fa98dcf8695258e4ec5d2b15847f5d49600643da083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9671ed7be3f29ea7e52bec043a39857199ca0d044ad6121cd9c95dfba2d8f2d2->leave($__internal_9671ed7be3f29ea7e52bec043a39857199ca0d044ad6121cd9c95dfba2d8f2d2_prof);

        
        $__internal_017660cf9b207ef03b754fa98dcf8695258e4ec5d2b15847f5d49600643da083->leave($__internal_017660cf9b207ef03b754fa98dcf8695258e4ec5d2b15847f5d49600643da083_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
