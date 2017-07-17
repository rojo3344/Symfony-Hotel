<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4707ec56c6adcc18f72bcb43e2ceb26e1e71a55b4258af700e78d1508960f128 extends Twig_Template
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
        $__internal_934e3c6a616ab2c4156f5e053953fc2d9ab5356a17bafef1e7fe345325068b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934e3c6a616ab2c4156f5e053953fc2d9ab5356a17bafef1e7fe345325068b8c->enter($__internal_934e3c6a616ab2c4156f5e053953fc2d9ab5356a17bafef1e7fe345325068b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_147016baadb190d7dc68965d75cbf0337d8872247a498d4b8824077054bef0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147016baadb190d7dc68965d75cbf0337d8872247a498d4b8824077054bef0fa->enter($__internal_147016baadb190d7dc68965d75cbf0337d8872247a498d4b8824077054bef0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_934e3c6a616ab2c4156f5e053953fc2d9ab5356a17bafef1e7fe345325068b8c->leave($__internal_934e3c6a616ab2c4156f5e053953fc2d9ab5356a17bafef1e7fe345325068b8c_prof);

        
        $__internal_147016baadb190d7dc68965d75cbf0337d8872247a498d4b8824077054bef0fa->leave($__internal_147016baadb190d7dc68965d75cbf0337d8872247a498d4b8824077054bef0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
