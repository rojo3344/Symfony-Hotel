<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c02a4531965c8d193a8b1cab86cd62377bb671c85e8cc5b32fc79d88f6a2bc1f extends Twig_Template
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
        $__internal_4287070792657c942005b0bf0bf03cf4ce6be2aa110dc6dc094dcbacec56488b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4287070792657c942005b0bf0bf03cf4ce6be2aa110dc6dc094dcbacec56488b->enter($__internal_4287070792657c942005b0bf0bf03cf4ce6be2aa110dc6dc094dcbacec56488b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_84efb20e5201d84b98ba1641b6b9a48aec051ac428ec9dd6a37220813639077e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84efb20e5201d84b98ba1641b6b9a48aec051ac428ec9dd6a37220813639077e->enter($__internal_84efb20e5201d84b98ba1641b6b9a48aec051ac428ec9dd6a37220813639077e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4287070792657c942005b0bf0bf03cf4ce6be2aa110dc6dc094dcbacec56488b->leave($__internal_4287070792657c942005b0bf0bf03cf4ce6be2aa110dc6dc094dcbacec56488b_prof);

        
        $__internal_84efb20e5201d84b98ba1641b6b9a48aec051ac428ec9dd6a37220813639077e->leave($__internal_84efb20e5201d84b98ba1641b6b9a48aec051ac428ec9dd6a37220813639077e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
