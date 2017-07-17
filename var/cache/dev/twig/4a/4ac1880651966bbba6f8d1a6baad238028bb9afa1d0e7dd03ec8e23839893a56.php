<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8197c3665eb54af64f2d7bd358fa5d553b9572695456ead28dc3b70c0752d3ea extends Twig_Template
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
        $__internal_f576b67071d79eea250a78a1bbc11338f2471a7691a597a1b3b6ce317cbc6b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f576b67071d79eea250a78a1bbc11338f2471a7691a597a1b3b6ce317cbc6b46->enter($__internal_f576b67071d79eea250a78a1bbc11338f2471a7691a597a1b3b6ce317cbc6b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_76f8a828d0565cc5159baaf70b6a8f119bd36091cfc509cc3d8530b9eb1a9ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f8a828d0565cc5159baaf70b6a8f119bd36091cfc509cc3d8530b9eb1a9ac3->enter($__internal_76f8a828d0565cc5159baaf70b6a8f119bd36091cfc509cc3d8530b9eb1a9ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f576b67071d79eea250a78a1bbc11338f2471a7691a597a1b3b6ce317cbc6b46->leave($__internal_f576b67071d79eea250a78a1bbc11338f2471a7691a597a1b3b6ce317cbc6b46_prof);

        
        $__internal_76f8a828d0565cc5159baaf70b6a8f119bd36091cfc509cc3d8530b9eb1a9ac3->leave($__internal_76f8a828d0565cc5159baaf70b6a8f119bd36091cfc509cc3d8530b9eb1a9ac3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
