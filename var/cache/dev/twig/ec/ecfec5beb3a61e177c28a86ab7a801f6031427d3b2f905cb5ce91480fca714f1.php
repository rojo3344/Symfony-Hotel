<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_21324357a1d9085b902510ae61ab7ff3ed65e0d28998bcb2d3a20e55f71f5c6d extends Twig_Template
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
        $__internal_460394b0972c4c6465c2743a283609c5a10285ad50a59fa86f86b045fbcd61f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460394b0972c4c6465c2743a283609c5a10285ad50a59fa86f86b045fbcd61f7->enter($__internal_460394b0972c4c6465c2743a283609c5a10285ad50a59fa86f86b045fbcd61f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_96da4cb4f3690658d854622d6c507b441024a79cfa66cabcb6ca4a5948ce14b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96da4cb4f3690658d854622d6c507b441024a79cfa66cabcb6ca4a5948ce14b8->enter($__internal_96da4cb4f3690658d854622d6c507b441024a79cfa66cabcb6ca4a5948ce14b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_460394b0972c4c6465c2743a283609c5a10285ad50a59fa86f86b045fbcd61f7->leave($__internal_460394b0972c4c6465c2743a283609c5a10285ad50a59fa86f86b045fbcd61f7_prof);

        
        $__internal_96da4cb4f3690658d854622d6c507b441024a79cfa66cabcb6ca4a5948ce14b8->leave($__internal_96da4cb4f3690658d854622d6c507b441024a79cfa66cabcb6ca4a5948ce14b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
