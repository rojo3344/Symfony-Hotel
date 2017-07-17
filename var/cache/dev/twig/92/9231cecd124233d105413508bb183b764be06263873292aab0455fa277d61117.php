<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_733b883909b66e4f0a2ec107c28cf1a36acbd9b45a13eb4b88b71ce8916391ca extends Twig_Template
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
        $__internal_e7ab7856638fefbf3d4fbdaeb8b5c9e90baafaa35c4990dcf32506204f4330dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7ab7856638fefbf3d4fbdaeb8b5c9e90baafaa35c4990dcf32506204f4330dd->enter($__internal_e7ab7856638fefbf3d4fbdaeb8b5c9e90baafaa35c4990dcf32506204f4330dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_407e572292b643063dfa7d8f952a89c4bccafdcc197ca17f10fde7dd9e898894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e572292b643063dfa7d8f952a89c4bccafdcc197ca17f10fde7dd9e898894->enter($__internal_407e572292b643063dfa7d8f952a89c4bccafdcc197ca17f10fde7dd9e898894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e7ab7856638fefbf3d4fbdaeb8b5c9e90baafaa35c4990dcf32506204f4330dd->leave($__internal_e7ab7856638fefbf3d4fbdaeb8b5c9e90baafaa35c4990dcf32506204f4330dd_prof);

        
        $__internal_407e572292b643063dfa7d8f952a89c4bccafdcc197ca17f10fde7dd9e898894->leave($__internal_407e572292b643063dfa7d8f952a89c4bccafdcc197ca17f10fde7dd9e898894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
