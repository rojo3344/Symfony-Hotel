<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37c4aab3eadd7c2e4543107c44abce7341ac883bf6c341e9e99233861695d5d7 extends Twig_Template
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
        $__internal_e28c55c627f576ad2cd5ef339e0c76da74d29ad7d419c30bb460e2ba90075156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28c55c627f576ad2cd5ef339e0c76da74d29ad7d419c30bb460e2ba90075156->enter($__internal_e28c55c627f576ad2cd5ef339e0c76da74d29ad7d419c30bb460e2ba90075156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_08ca2f1c559b5bc5106e612f0975a68941c66e4d48768c972064c2f8654f09ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ca2f1c559b5bc5106e612f0975a68941c66e4d48768c972064c2f8654f09ef->enter($__internal_08ca2f1c559b5bc5106e612f0975a68941c66e4d48768c972064c2f8654f09ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e28c55c627f576ad2cd5ef339e0c76da74d29ad7d419c30bb460e2ba90075156->leave($__internal_e28c55c627f576ad2cd5ef339e0c76da74d29ad7d419c30bb460e2ba90075156_prof);

        
        $__internal_08ca2f1c559b5bc5106e612f0975a68941c66e4d48768c972064c2f8654f09ef->leave($__internal_08ca2f1c559b5bc5106e612f0975a68941c66e4d48768c972064c2f8654f09ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
