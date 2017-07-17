<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_67f9e125f076553221793dd94335bed6df7f3f4e480309f5ff9c56b49d6248ea extends Twig_Template
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
        $__internal_9b6712f4c19400be344b5b9ca23bac8a29e25a945273335c29e95c468c443185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6712f4c19400be344b5b9ca23bac8a29e25a945273335c29e95c468c443185->enter($__internal_9b6712f4c19400be344b5b9ca23bac8a29e25a945273335c29e95c468c443185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_bdf0b2853e86fcbfc45d57f0440f99f9a8f3af12fbf152dd624b497e035b92e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf0b2853e86fcbfc45d57f0440f99f9a8f3af12fbf152dd624b497e035b92e2->enter($__internal_bdf0b2853e86fcbfc45d57f0440f99f9a8f3af12fbf152dd624b497e035b92e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9b6712f4c19400be344b5b9ca23bac8a29e25a945273335c29e95c468c443185->leave($__internal_9b6712f4c19400be344b5b9ca23bac8a29e25a945273335c29e95c468c443185_prof);

        
        $__internal_bdf0b2853e86fcbfc45d57f0440f99f9a8f3af12fbf152dd624b497e035b92e2->leave($__internal_bdf0b2853e86fcbfc45d57f0440f99f9a8f3af12fbf152dd624b497e035b92e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
