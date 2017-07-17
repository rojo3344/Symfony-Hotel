<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fb72a5674f47256ca99e52304878b15f7aba8bdfddc1733d6586d6815f4d3271 extends Twig_Template
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
        $__internal_80461a0b2effddd089b26c096de26d5de3b30a86da6b85636df7b8f90d7d170d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80461a0b2effddd089b26c096de26d5de3b30a86da6b85636df7b8f90d7d170d->enter($__internal_80461a0b2effddd089b26c096de26d5de3b30a86da6b85636df7b8f90d7d170d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9a0d870a24b113581fa4c22d0f4129d866f9f5a77333181b65baba30845b8380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0d870a24b113581fa4c22d0f4129d866f9f5a77333181b65baba30845b8380->enter($__internal_9a0d870a24b113581fa4c22d0f4129d866f9f5a77333181b65baba30845b8380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80461a0b2effddd089b26c096de26d5de3b30a86da6b85636df7b8f90d7d170d->leave($__internal_80461a0b2effddd089b26c096de26d5de3b30a86da6b85636df7b8f90d7d170d_prof);

        
        $__internal_9a0d870a24b113581fa4c22d0f4129d866f9f5a77333181b65baba30845b8380->leave($__internal_9a0d870a24b113581fa4c22d0f4129d866f9f5a77333181b65baba30845b8380_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
