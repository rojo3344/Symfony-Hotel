<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1a193c62cbe481a8c7645801751021bc3b19cb16d08f1106e9e1ba8cc8694d3b extends Twig_Template
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
        $__internal_9925fd7ab61ac645050cd494d763252bc4702a9784190dce24c5d9d00fc0e91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9925fd7ab61ac645050cd494d763252bc4702a9784190dce24c5d9d00fc0e91f->enter($__internal_9925fd7ab61ac645050cd494d763252bc4702a9784190dce24c5d9d00fc0e91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_38b53ec5449c163026c44fbc9602b73585281c0f3d2d50c23ba7cd6b54ed0a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b53ec5449c163026c44fbc9602b73585281c0f3d2d50c23ba7cd6b54ed0a1e->enter($__internal_38b53ec5449c163026c44fbc9602b73585281c0f3d2d50c23ba7cd6b54ed0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9925fd7ab61ac645050cd494d763252bc4702a9784190dce24c5d9d00fc0e91f->leave($__internal_9925fd7ab61ac645050cd494d763252bc4702a9784190dce24c5d9d00fc0e91f_prof);

        
        $__internal_38b53ec5449c163026c44fbc9602b73585281c0f3d2d50c23ba7cd6b54ed0a1e->leave($__internal_38b53ec5449c163026c44fbc9602b73585281c0f3d2d50c23ba7cd6b54ed0a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
