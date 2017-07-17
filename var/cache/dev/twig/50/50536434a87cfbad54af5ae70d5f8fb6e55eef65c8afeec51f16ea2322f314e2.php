<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e4e8368a4163fce3e002b88c7620c51e3fd9222e22af08c406efcd3c5d322614 extends Twig_Template
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
        $__internal_376d823dd47e9932a7bdcc33e56df978f32ff25bb63589f268e26a7610ac48ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376d823dd47e9932a7bdcc33e56df978f32ff25bb63589f268e26a7610ac48ea->enter($__internal_376d823dd47e9932a7bdcc33e56df978f32ff25bb63589f268e26a7610ac48ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0792ec7e546d75dd83e2e5807e0500affbc5be264b56713e0e06f5cfdba81e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0792ec7e546d75dd83e2e5807e0500affbc5be264b56713e0e06f5cfdba81e96->enter($__internal_0792ec7e546d75dd83e2e5807e0500affbc5be264b56713e0e06f5cfdba81e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_376d823dd47e9932a7bdcc33e56df978f32ff25bb63589f268e26a7610ac48ea->leave($__internal_376d823dd47e9932a7bdcc33e56df978f32ff25bb63589f268e26a7610ac48ea_prof);

        
        $__internal_0792ec7e546d75dd83e2e5807e0500affbc5be264b56713e0e06f5cfdba81e96->leave($__internal_0792ec7e546d75dd83e2e5807e0500affbc5be264b56713e0e06f5cfdba81e96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
