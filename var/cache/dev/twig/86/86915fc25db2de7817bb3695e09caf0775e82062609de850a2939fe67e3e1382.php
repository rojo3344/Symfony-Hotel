<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e11d5e8395d86d98b7d409d44045c48324109aadafb8e7ecd9848eedd142973d extends Twig_Template
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
        $__internal_e7f1b410c7e095b87961ed7313b1e39dd6147b6128a2e4918616e84eac1102cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f1b410c7e095b87961ed7313b1e39dd6147b6128a2e4918616e84eac1102cc->enter($__internal_e7f1b410c7e095b87961ed7313b1e39dd6147b6128a2e4918616e84eac1102cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f5fb2954a3ad8dd69748251b34b674eab1423f17165587d63cf7eba07cbd107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fb2954a3ad8dd69748251b34b674eab1423f17165587d63cf7eba07cbd107f->enter($__internal_f5fb2954a3ad8dd69748251b34b674eab1423f17165587d63cf7eba07cbd107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e7f1b410c7e095b87961ed7313b1e39dd6147b6128a2e4918616e84eac1102cc->leave($__internal_e7f1b410c7e095b87961ed7313b1e39dd6147b6128a2e4918616e84eac1102cc_prof);

        
        $__internal_f5fb2954a3ad8dd69748251b34b674eab1423f17165587d63cf7eba07cbd107f->leave($__internal_f5fb2954a3ad8dd69748251b34b674eab1423f17165587d63cf7eba07cbd107f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
