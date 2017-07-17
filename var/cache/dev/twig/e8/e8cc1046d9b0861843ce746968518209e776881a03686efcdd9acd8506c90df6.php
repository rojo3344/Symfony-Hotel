<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b0e597429c731b3070868b11cab3ec0a85729ec4f4c2c09ff853962e246f5f5b extends Twig_Template
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
        $__internal_68afbd02ed9106139b8dbb5f807a9316951ebb7af884c472d050e7b96c3a93db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68afbd02ed9106139b8dbb5f807a9316951ebb7af884c472d050e7b96c3a93db->enter($__internal_68afbd02ed9106139b8dbb5f807a9316951ebb7af884c472d050e7b96c3a93db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_247fd9524f0e708bdf28df64f80cbc11d109f272210aaa3b0a5c39aa0efaed10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247fd9524f0e708bdf28df64f80cbc11d109f272210aaa3b0a5c39aa0efaed10->enter($__internal_247fd9524f0e708bdf28df64f80cbc11d109f272210aaa3b0a5c39aa0efaed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_68afbd02ed9106139b8dbb5f807a9316951ebb7af884c472d050e7b96c3a93db->leave($__internal_68afbd02ed9106139b8dbb5f807a9316951ebb7af884c472d050e7b96c3a93db_prof);

        
        $__internal_247fd9524f0e708bdf28df64f80cbc11d109f272210aaa3b0a5c39aa0efaed10->leave($__internal_247fd9524f0e708bdf28df64f80cbc11d109f272210aaa3b0a5c39aa0efaed10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
