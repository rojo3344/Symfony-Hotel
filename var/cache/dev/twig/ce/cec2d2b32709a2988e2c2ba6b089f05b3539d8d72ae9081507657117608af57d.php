<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_593d10979dc0f4b40c5c0b703e830a9ccfe2bafa9fdabf362ad5f4f2640ed424 extends Twig_Template
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
        $__internal_e5f6f29aa9aa9c620b9e1331d1cd40c49a6394daba65770c34a33ab55f83afd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f6f29aa9aa9c620b9e1331d1cd40c49a6394daba65770c34a33ab55f83afd2->enter($__internal_e5f6f29aa9aa9c620b9e1331d1cd40c49a6394daba65770c34a33ab55f83afd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_798a8d85b1ddc0043df23904b0789edd6fd63f56de55f541effdb752f3ac4890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798a8d85b1ddc0043df23904b0789edd6fd63f56de55f541effdb752f3ac4890->enter($__internal_798a8d85b1ddc0043df23904b0789edd6fd63f56de55f541effdb752f3ac4890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_e5f6f29aa9aa9c620b9e1331d1cd40c49a6394daba65770c34a33ab55f83afd2->leave($__internal_e5f6f29aa9aa9c620b9e1331d1cd40c49a6394daba65770c34a33ab55f83afd2_prof);

        
        $__internal_798a8d85b1ddc0043df23904b0789edd6fd63f56de55f541effdb752f3ac4890->leave($__internal_798a8d85b1ddc0043df23904b0789edd6fd63f56de55f541effdb752f3ac4890_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
