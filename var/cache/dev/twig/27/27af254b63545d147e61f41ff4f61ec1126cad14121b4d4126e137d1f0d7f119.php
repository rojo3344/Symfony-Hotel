<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86cda109e0a43481b81de71e28009450ee4106893438f474d4ec522b759214ff extends Twig_Template
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
        $__internal_fa7fc4c6e66f2d9dcf38bbd55e709c3b73d725d102b89aa9b74225dfa3956479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7fc4c6e66f2d9dcf38bbd55e709c3b73d725d102b89aa9b74225dfa3956479->enter($__internal_fa7fc4c6e66f2d9dcf38bbd55e709c3b73d725d102b89aa9b74225dfa3956479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_af5e3e6ab73646bb7b5de36f998e4dba9930a05d2fe7c013c5b0db302c59da28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5e3e6ab73646bb7b5de36f998e4dba9930a05d2fe7c013c5b0db302c59da28->enter($__internal_af5e3e6ab73646bb7b5de36f998e4dba9930a05d2fe7c013c5b0db302c59da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fa7fc4c6e66f2d9dcf38bbd55e709c3b73d725d102b89aa9b74225dfa3956479->leave($__internal_fa7fc4c6e66f2d9dcf38bbd55e709c3b73d725d102b89aa9b74225dfa3956479_prof);

        
        $__internal_af5e3e6ab73646bb7b5de36f998e4dba9930a05d2fe7c013c5b0db302c59da28->leave($__internal_af5e3e6ab73646bb7b5de36f998e4dba9930a05d2fe7c013c5b0db302c59da28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
