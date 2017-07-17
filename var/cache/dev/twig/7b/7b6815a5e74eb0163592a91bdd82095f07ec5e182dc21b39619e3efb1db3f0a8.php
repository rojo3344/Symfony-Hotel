<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4d19a1295302c2b1b7d3463e2707e37611808fd7815c55fed8b5c355d4cc6971 extends Twig_Template
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
        $__internal_9687da17f8ff50e3f0e659934aade03538835c222e363affe151a6cd701310a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9687da17f8ff50e3f0e659934aade03538835c222e363affe151a6cd701310a3->enter($__internal_9687da17f8ff50e3f0e659934aade03538835c222e363affe151a6cd701310a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_bfd14125a700f8955d3ecedb445817c5bd3e6982fed626c116e7bb0df6f15b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd14125a700f8955d3ecedb445817c5bd3e6982fed626c116e7bb0df6f15b32->enter($__internal_bfd14125a700f8955d3ecedb445817c5bd3e6982fed626c116e7bb0df6f15b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9687da17f8ff50e3f0e659934aade03538835c222e363affe151a6cd701310a3->leave($__internal_9687da17f8ff50e3f0e659934aade03538835c222e363affe151a6cd701310a3_prof);

        
        $__internal_bfd14125a700f8955d3ecedb445817c5bd3e6982fed626c116e7bb0df6f15b32->leave($__internal_bfd14125a700f8955d3ecedb445817c5bd3e6982fed626c116e7bb0df6f15b32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
