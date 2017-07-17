<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_46bca856752666aa29e762dfff6fc9cbc54ccaec7c6750d5e92b14931c38f00d extends Twig_Template
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
        $__internal_8a5e8d2efc0c669f1eb62d7b72cf4548c36f226f69baf6f3f91125d1effeb458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5e8d2efc0c669f1eb62d7b72cf4548c36f226f69baf6f3f91125d1effeb458->enter($__internal_8a5e8d2efc0c669f1eb62d7b72cf4548c36f226f69baf6f3f91125d1effeb458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f51c9688e590fb912e41f418959e600da4a6becd7cff4847754cf3d7665a5289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51c9688e590fb912e41f418959e600da4a6becd7cff4847754cf3d7665a5289->enter($__internal_f51c9688e590fb912e41f418959e600da4a6becd7cff4847754cf3d7665a5289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8a5e8d2efc0c669f1eb62d7b72cf4548c36f226f69baf6f3f91125d1effeb458->leave($__internal_8a5e8d2efc0c669f1eb62d7b72cf4548c36f226f69baf6f3f91125d1effeb458_prof);

        
        $__internal_f51c9688e590fb912e41f418959e600da4a6becd7cff4847754cf3d7665a5289->leave($__internal_f51c9688e590fb912e41f418959e600da4a6becd7cff4847754cf3d7665a5289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
