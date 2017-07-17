<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a3286960c4937078cb3bfa8806f6bbbda96de6c6d8c7588076addbcf43cf3015 extends Twig_Template
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
        $__internal_8beac808b146fc7ddc2c5b732f1f8326192acf10fe0b85757521b845ea1a5a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8beac808b146fc7ddc2c5b732f1f8326192acf10fe0b85757521b845ea1a5a6b->enter($__internal_8beac808b146fc7ddc2c5b732f1f8326192acf10fe0b85757521b845ea1a5a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fc9ed59a0d4eb2b09b51c428db92ca8a0cf6fdf6ebdbbfd685010c4107cdb5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9ed59a0d4eb2b09b51c428db92ca8a0cf6fdf6ebdbbfd685010c4107cdb5df->enter($__internal_fc9ed59a0d4eb2b09b51c428db92ca8a0cf6fdf6ebdbbfd685010c4107cdb5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8beac808b146fc7ddc2c5b732f1f8326192acf10fe0b85757521b845ea1a5a6b->leave($__internal_8beac808b146fc7ddc2c5b732f1f8326192acf10fe0b85757521b845ea1a5a6b_prof);

        
        $__internal_fc9ed59a0d4eb2b09b51c428db92ca8a0cf6fdf6ebdbbfd685010c4107cdb5df->leave($__internal_fc9ed59a0d4eb2b09b51c428db92ca8a0cf6fdf6ebdbbfd685010c4107cdb5df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
