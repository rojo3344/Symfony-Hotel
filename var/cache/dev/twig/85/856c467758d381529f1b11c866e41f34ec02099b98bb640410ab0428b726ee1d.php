<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ae7acb4356b5c747d5404a6353a41d154cb3e60bd96c88db51142b092c2f6079 extends Twig_Template
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
        $__internal_c69a427dffcf5c3edc04e30824897f2e018048e3a8e7d6a3efbc468b5de82b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69a427dffcf5c3edc04e30824897f2e018048e3a8e7d6a3efbc468b5de82b87->enter($__internal_c69a427dffcf5c3edc04e30824897f2e018048e3a8e7d6a3efbc468b5de82b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_889d4518ed798365f74e7b680356f4287ad82be7187f1dde001193684a27bb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889d4518ed798365f74e7b680356f4287ad82be7187f1dde001193684a27bb50->enter($__internal_889d4518ed798365f74e7b680356f4287ad82be7187f1dde001193684a27bb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c69a427dffcf5c3edc04e30824897f2e018048e3a8e7d6a3efbc468b5de82b87->leave($__internal_c69a427dffcf5c3edc04e30824897f2e018048e3a8e7d6a3efbc468b5de82b87_prof);

        
        $__internal_889d4518ed798365f74e7b680356f4287ad82be7187f1dde001193684a27bb50->leave($__internal_889d4518ed798365f74e7b680356f4287ad82be7187f1dde001193684a27bb50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
