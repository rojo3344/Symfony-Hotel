<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_22c72c03391b2743217a7884bfd1a8d5f9aaee484a7326701662adb5833a948c extends Twig_Template
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
        $__internal_86c7ef78813dac4c6b396402ed497ca899d791e5f605037d2e6feaba6e318964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c7ef78813dac4c6b396402ed497ca899d791e5f605037d2e6feaba6e318964->enter($__internal_86c7ef78813dac4c6b396402ed497ca899d791e5f605037d2e6feaba6e318964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e1e14e2bd657b9a820e3025f599d8da14d57d965e0197d7ff8a4e25f8d85f4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e14e2bd657b9a820e3025f599d8da14d57d965e0197d7ff8a4e25f8d85f4d2->enter($__internal_e1e14e2bd657b9a820e3025f599d8da14d57d965e0197d7ff8a4e25f8d85f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86c7ef78813dac4c6b396402ed497ca899d791e5f605037d2e6feaba6e318964->leave($__internal_86c7ef78813dac4c6b396402ed497ca899d791e5f605037d2e6feaba6e318964_prof);

        
        $__internal_e1e14e2bd657b9a820e3025f599d8da14d57d965e0197d7ff8a4e25f8d85f4d2->leave($__internal_e1e14e2bd657b9a820e3025f599d8da14d57d965e0197d7ff8a4e25f8d85f4d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
