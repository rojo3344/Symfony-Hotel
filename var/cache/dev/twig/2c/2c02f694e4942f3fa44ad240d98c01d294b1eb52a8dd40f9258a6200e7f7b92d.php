<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_aaf1f5fbf0335be4addbe51c4d2b733c2ab49b7a52d1354b23da7af33ffbbd27 extends Twig_Template
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
        $__internal_a302e3d7b435ca1cc358969d697985299010cedb7fb7fd430f024fa94cb6862c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a302e3d7b435ca1cc358969d697985299010cedb7fb7fd430f024fa94cb6862c->enter($__internal_a302e3d7b435ca1cc358969d697985299010cedb7fb7fd430f024fa94cb6862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_db1b4e7d972537fc02f1274006209a014c0835e3244d31b12136b16ebd191cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1b4e7d972537fc02f1274006209a014c0835e3244d31b12136b16ebd191cc1->enter($__internal_db1b4e7d972537fc02f1274006209a014c0835e3244d31b12136b16ebd191cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a302e3d7b435ca1cc358969d697985299010cedb7fb7fd430f024fa94cb6862c->leave($__internal_a302e3d7b435ca1cc358969d697985299010cedb7fb7fd430f024fa94cb6862c_prof);

        
        $__internal_db1b4e7d972537fc02f1274006209a014c0835e3244d31b12136b16ebd191cc1->leave($__internal_db1b4e7d972537fc02f1274006209a014c0835e3244d31b12136b16ebd191cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
