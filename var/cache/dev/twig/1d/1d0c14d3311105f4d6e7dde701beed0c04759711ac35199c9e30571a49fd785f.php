<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c8d1f2ffb959ccb917839180f1154d9f247134511fda2afb6690059085b68f3 extends Twig_Template
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
        $__internal_c62e0e8ec7567f1a1de00d67553bdb4315dc48d2b4c44332e9b8e8f3df6a6703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62e0e8ec7567f1a1de00d67553bdb4315dc48d2b4c44332e9b8e8f3df6a6703->enter($__internal_c62e0e8ec7567f1a1de00d67553bdb4315dc48d2b4c44332e9b8e8f3df6a6703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8075af7ee88538c19c93d867cb9af1921adb69dc615c9ac899ba4f178007509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8075af7ee88538c19c93d867cb9af1921adb69dc615c9ac899ba4f178007509d->enter($__internal_8075af7ee88538c19c93d867cb9af1921adb69dc615c9ac899ba4f178007509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c62e0e8ec7567f1a1de00d67553bdb4315dc48d2b4c44332e9b8e8f3df6a6703->leave($__internal_c62e0e8ec7567f1a1de00d67553bdb4315dc48d2b4c44332e9b8e8f3df6a6703_prof);

        
        $__internal_8075af7ee88538c19c93d867cb9af1921adb69dc615c9ac899ba4f178007509d->leave($__internal_8075af7ee88538c19c93d867cb9af1921adb69dc615c9ac899ba4f178007509d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
