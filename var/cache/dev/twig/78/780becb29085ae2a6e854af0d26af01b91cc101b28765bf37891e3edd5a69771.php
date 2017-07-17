<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7aa6d4422d6e0063ef0f946bb0989114d7527a013665471ffa76bd6626429e18 extends Twig_Template
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
        $__internal_8310faa70e311e63b1aaac51bad2f2ad82170e32cc46660cfdc7eab9464a6484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8310faa70e311e63b1aaac51bad2f2ad82170e32cc46660cfdc7eab9464a6484->enter($__internal_8310faa70e311e63b1aaac51bad2f2ad82170e32cc46660cfdc7eab9464a6484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4e422e083af020b1478f2999b08e55ef556cc4f11a889df3cbaed2f256ed963c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e422e083af020b1478f2999b08e55ef556cc4f11a889df3cbaed2f256ed963c->enter($__internal_4e422e083af020b1478f2999b08e55ef556cc4f11a889df3cbaed2f256ed963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8310faa70e311e63b1aaac51bad2f2ad82170e32cc46660cfdc7eab9464a6484->leave($__internal_8310faa70e311e63b1aaac51bad2f2ad82170e32cc46660cfdc7eab9464a6484_prof);

        
        $__internal_4e422e083af020b1478f2999b08e55ef556cc4f11a889df3cbaed2f256ed963c->leave($__internal_4e422e083af020b1478f2999b08e55ef556cc4f11a889df3cbaed2f256ed963c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
