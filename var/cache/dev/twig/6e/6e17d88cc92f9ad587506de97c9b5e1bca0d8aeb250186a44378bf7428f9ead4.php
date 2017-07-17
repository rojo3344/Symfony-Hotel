<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_78bc61b7fa32d623645140918cb3a325707ea274d199d3c1b456064915b75f3d extends Twig_Template
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
        $__internal_3d2afebd160760ae34d4b5d62aa07b415057780b6edd7130bad622f97e2f526a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2afebd160760ae34d4b5d62aa07b415057780b6edd7130bad622f97e2f526a->enter($__internal_3d2afebd160760ae34d4b5d62aa07b415057780b6edd7130bad622f97e2f526a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_805ba803b9b9be04c2a36d2e2eff3d7ad6074828b258001f98668bb17df5628a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805ba803b9b9be04c2a36d2e2eff3d7ad6074828b258001f98668bb17df5628a->enter($__internal_805ba803b9b9be04c2a36d2e2eff3d7ad6074828b258001f98668bb17df5628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3d2afebd160760ae34d4b5d62aa07b415057780b6edd7130bad622f97e2f526a->leave($__internal_3d2afebd160760ae34d4b5d62aa07b415057780b6edd7130bad622f97e2f526a_prof);

        
        $__internal_805ba803b9b9be04c2a36d2e2eff3d7ad6074828b258001f98668bb17df5628a->leave($__internal_805ba803b9b9be04c2a36d2e2eff3d7ad6074828b258001f98668bb17df5628a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
