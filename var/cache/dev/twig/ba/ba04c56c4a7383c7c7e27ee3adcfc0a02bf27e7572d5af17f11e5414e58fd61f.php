<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1a8ea2f29b0e8fcd32a8fb732c69cce726093125e892d6435320cbbdf55006d6 extends Twig_Template
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
        $__internal_98d03bec11681b6ea8f65089d5a99db48803e3a831298ffc0e179a1d315c9bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d03bec11681b6ea8f65089d5a99db48803e3a831298ffc0e179a1d315c9bbb->enter($__internal_98d03bec11681b6ea8f65089d5a99db48803e3a831298ffc0e179a1d315c9bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_75e12f9880517597b0dff614b5b34dab758849c81ffe5bb2457cfa90186090fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e12f9880517597b0dff614b5b34dab758849c81ffe5bb2457cfa90186090fd->enter($__internal_75e12f9880517597b0dff614b5b34dab758849c81ffe5bb2457cfa90186090fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_98d03bec11681b6ea8f65089d5a99db48803e3a831298ffc0e179a1d315c9bbb->leave($__internal_98d03bec11681b6ea8f65089d5a99db48803e3a831298ffc0e179a1d315c9bbb_prof);

        
        $__internal_75e12f9880517597b0dff614b5b34dab758849c81ffe5bb2457cfa90186090fd->leave($__internal_75e12f9880517597b0dff614b5b34dab758849c81ffe5bb2457cfa90186090fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
