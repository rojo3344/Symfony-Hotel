<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_03a982e6b5c7fdb7e5c79dbb157f3147291b113dd45da85fd30323be72d311e6 extends Twig_Template
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
        $__internal_02c0758d6e8abf0c1038cc59fc3ec04d44bf42f175aa4cef96a63693415b3a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c0758d6e8abf0c1038cc59fc3ec04d44bf42f175aa4cef96a63693415b3a1e->enter($__internal_02c0758d6e8abf0c1038cc59fc3ec04d44bf42f175aa4cef96a63693415b3a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c19b979d3b83e9b45b217bac6262cdc229c704813e8542dc1c4a2c0182e4c0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19b979d3b83e9b45b217bac6262cdc229c704813e8542dc1c4a2c0182e4c0a6->enter($__internal_c19b979d3b83e9b45b217bac6262cdc229c704813e8542dc1c4a2c0182e4c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_02c0758d6e8abf0c1038cc59fc3ec04d44bf42f175aa4cef96a63693415b3a1e->leave($__internal_02c0758d6e8abf0c1038cc59fc3ec04d44bf42f175aa4cef96a63693415b3a1e_prof);

        
        $__internal_c19b979d3b83e9b45b217bac6262cdc229c704813e8542dc1c4a2c0182e4c0a6->leave($__internal_c19b979d3b83e9b45b217bac6262cdc229c704813e8542dc1c4a2c0182e4c0a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
