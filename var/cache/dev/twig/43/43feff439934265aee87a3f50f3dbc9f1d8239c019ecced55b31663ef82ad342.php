<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c9491781b15660cbdbc0ee9a0f66ed83202e3754243de39c9154c87d500a367e extends Twig_Template
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
        $__internal_15d75b1e10deed36a5ae6ed1a7b5a531ea206df0bfd0bfe9ea19c8a589b56b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d75b1e10deed36a5ae6ed1a7b5a531ea206df0bfd0bfe9ea19c8a589b56b45->enter($__internal_15d75b1e10deed36a5ae6ed1a7b5a531ea206df0bfd0bfe9ea19c8a589b56b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_43eec890eb96c170aff2f831b6293ccc503f6de820fca3cd9f8f665fbd1e8739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eec890eb96c170aff2f831b6293ccc503f6de820fca3cd9f8f665fbd1e8739->enter($__internal_43eec890eb96c170aff2f831b6293ccc503f6de820fca3cd9f8f665fbd1e8739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_15d75b1e10deed36a5ae6ed1a7b5a531ea206df0bfd0bfe9ea19c8a589b56b45->leave($__internal_15d75b1e10deed36a5ae6ed1a7b5a531ea206df0bfd0bfe9ea19c8a589b56b45_prof);

        
        $__internal_43eec890eb96c170aff2f831b6293ccc503f6de820fca3cd9f8f665fbd1e8739->leave($__internal_43eec890eb96c170aff2f831b6293ccc503f6de820fca3cd9f8f665fbd1e8739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
