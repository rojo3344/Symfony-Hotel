<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_db67576ab13396060acbd6222717f8f87487f92492b5724a5ae606fb5f0f15b4 extends Twig_Template
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
        $__internal_548d8e43910f93da259f51351952261db3a893d92aaf5493fe8f41047faf7f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548d8e43910f93da259f51351952261db3a893d92aaf5493fe8f41047faf7f7e->enter($__internal_548d8e43910f93da259f51351952261db3a893d92aaf5493fe8f41047faf7f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ec38338bff193ce9c9706448412b27baaedd7fbc63c21ca67caaae5d619d4e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec38338bff193ce9c9706448412b27baaedd7fbc63c21ca67caaae5d619d4e24->enter($__internal_ec38338bff193ce9c9706448412b27baaedd7fbc63c21ca67caaae5d619d4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_548d8e43910f93da259f51351952261db3a893d92aaf5493fe8f41047faf7f7e->leave($__internal_548d8e43910f93da259f51351952261db3a893d92aaf5493fe8f41047faf7f7e_prof);

        
        $__internal_ec38338bff193ce9c9706448412b27baaedd7fbc63c21ca67caaae5d619d4e24->leave($__internal_ec38338bff193ce9c9706448412b27baaedd7fbc63c21ca67caaae5d619d4e24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
