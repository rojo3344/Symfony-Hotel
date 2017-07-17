<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c2235d6ba490bd656348bd182d3d5cab093af3dc94d6de04793b0bb1c9e65a03 extends Twig_Template
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
        $__internal_f9f2e63a668e05dcfc0d4db9fde4ba5bf9d5ea728490546a14c6631c081acbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f2e63a668e05dcfc0d4db9fde4ba5bf9d5ea728490546a14c6631c081acbf1->enter($__internal_f9f2e63a668e05dcfc0d4db9fde4ba5bf9d5ea728490546a14c6631c081acbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c56e23a828f5865658666bf1d2fcdec9eee2dcd8cd0da0fef654a9a70df10d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56e23a828f5865658666bf1d2fcdec9eee2dcd8cd0da0fef654a9a70df10d95->enter($__internal_c56e23a828f5865658666bf1d2fcdec9eee2dcd8cd0da0fef654a9a70df10d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f9f2e63a668e05dcfc0d4db9fde4ba5bf9d5ea728490546a14c6631c081acbf1->leave($__internal_f9f2e63a668e05dcfc0d4db9fde4ba5bf9d5ea728490546a14c6631c081acbf1_prof);

        
        $__internal_c56e23a828f5865658666bf1d2fcdec9eee2dcd8cd0da0fef654a9a70df10d95->leave($__internal_c56e23a828f5865658666bf1d2fcdec9eee2dcd8cd0da0fef654a9a70df10d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
