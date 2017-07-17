<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c372ea0fc2037994edc2295b1a9f70375efec7f903c4ecf5c33b51de3d19df29 extends Twig_Template
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
        $__internal_e75c2d723497412d8e986fcef3b94614cf68427bc356321370f6da88c41b57b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75c2d723497412d8e986fcef3b94614cf68427bc356321370f6da88c41b57b7->enter($__internal_e75c2d723497412d8e986fcef3b94614cf68427bc356321370f6da88c41b57b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e7ee9c8c52ecd2abe3e4b31342c4194074a42ada864ba81fb45f115c8de6f5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ee9c8c52ecd2abe3e4b31342c4194074a42ada864ba81fb45f115c8de6f5b2->enter($__internal_e7ee9c8c52ecd2abe3e4b31342c4194074a42ada864ba81fb45f115c8de6f5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e75c2d723497412d8e986fcef3b94614cf68427bc356321370f6da88c41b57b7->leave($__internal_e75c2d723497412d8e986fcef3b94614cf68427bc356321370f6da88c41b57b7_prof);

        
        $__internal_e7ee9c8c52ecd2abe3e4b31342c4194074a42ada864ba81fb45f115c8de6f5b2->leave($__internal_e7ee9c8c52ecd2abe3e4b31342c4194074a42ada864ba81fb45f115c8de6f5b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
