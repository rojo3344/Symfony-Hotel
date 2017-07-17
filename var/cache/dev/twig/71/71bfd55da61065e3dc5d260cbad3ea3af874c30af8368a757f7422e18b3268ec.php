<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f8dec6437b1a13b64c5e8a8c3a4c13f6a83881fd4deddb2755188ef54c7b594c extends Twig_Template
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
        $__internal_78dbbb8b9802bc903f5934e403986a9f8a88b5eebd55806c7cb25aa51426f41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78dbbb8b9802bc903f5934e403986a9f8a88b5eebd55806c7cb25aa51426f41e->enter($__internal_78dbbb8b9802bc903f5934e403986a9f8a88b5eebd55806c7cb25aa51426f41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3d8b155a409897b55d65da8576b13e2e3b88e59507397e3df52cad3bf7983779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8b155a409897b55d65da8576b13e2e3b88e59507397e3df52cad3bf7983779->enter($__internal_3d8b155a409897b55d65da8576b13e2e3b88e59507397e3df52cad3bf7983779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_78dbbb8b9802bc903f5934e403986a9f8a88b5eebd55806c7cb25aa51426f41e->leave($__internal_78dbbb8b9802bc903f5934e403986a9f8a88b5eebd55806c7cb25aa51426f41e_prof);

        
        $__internal_3d8b155a409897b55d65da8576b13e2e3b88e59507397e3df52cad3bf7983779->leave($__internal_3d8b155a409897b55d65da8576b13e2e3b88e59507397e3df52cad3bf7983779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
