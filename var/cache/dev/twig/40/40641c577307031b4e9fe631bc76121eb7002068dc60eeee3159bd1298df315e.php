<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_63d3c19d53acabf83246b15e5f0dee6cd3fbb95abab7acb744bab2466c060f3c extends Twig_Template
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
        $__internal_1b555b8190bcc0f894411ca165ef60abbc338b66da8780217c808247efb72712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b555b8190bcc0f894411ca165ef60abbc338b66da8780217c808247efb72712->enter($__internal_1b555b8190bcc0f894411ca165ef60abbc338b66da8780217c808247efb72712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ad4ff376d74936ee678f31748daab4e4c3bb3c57c21be715102a1267fc1ff25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4ff376d74936ee678f31748daab4e4c3bb3c57c21be715102a1267fc1ff25b->enter($__internal_ad4ff376d74936ee678f31748daab4e4c3bb3c57c21be715102a1267fc1ff25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1b555b8190bcc0f894411ca165ef60abbc338b66da8780217c808247efb72712->leave($__internal_1b555b8190bcc0f894411ca165ef60abbc338b66da8780217c808247efb72712_prof);

        
        $__internal_ad4ff376d74936ee678f31748daab4e4c3bb3c57c21be715102a1267fc1ff25b->leave($__internal_ad4ff376d74936ee678f31748daab4e4c3bb3c57c21be715102a1267fc1ff25b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
