<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0abc6f40acca74d673f20a22d3c643166dd1267fa9f90a808e54c32fd1361d6a extends Twig_Template
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
        $__internal_32aa4eb6be33dcf6e6ed4a1ae45f13a13061ee00c867127d80c19626263f45d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32aa4eb6be33dcf6e6ed4a1ae45f13a13061ee00c867127d80c19626263f45d4->enter($__internal_32aa4eb6be33dcf6e6ed4a1ae45f13a13061ee00c867127d80c19626263f45d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f4c92126bc66de838c8ca66f8cdaca4e2ea5164416b33285bdb0817abf9f82be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c92126bc66de838c8ca66f8cdaca4e2ea5164416b33285bdb0817abf9f82be->enter($__internal_f4c92126bc66de838c8ca66f8cdaca4e2ea5164416b33285bdb0817abf9f82be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_32aa4eb6be33dcf6e6ed4a1ae45f13a13061ee00c867127d80c19626263f45d4->leave($__internal_32aa4eb6be33dcf6e6ed4a1ae45f13a13061ee00c867127d80c19626263f45d4_prof);

        
        $__internal_f4c92126bc66de838c8ca66f8cdaca4e2ea5164416b33285bdb0817abf9f82be->leave($__internal_f4c92126bc66de838c8ca66f8cdaca4e2ea5164416b33285bdb0817abf9f82be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
