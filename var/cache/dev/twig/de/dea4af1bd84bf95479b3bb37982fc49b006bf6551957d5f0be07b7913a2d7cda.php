<?php

/* admin/index.html.twig */
class __TwigTemplate_33ef5fbe9c8249dcc76eac0ff1b6462f0c888398d7f958dd1465802ff80640f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_369ba5e09643b1759d56da41b8f85fc2e8d6417eea773c5eba58e2c7934c8b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369ba5e09643b1759d56da41b8f85fc2e8d6417eea773c5eba58e2c7934c8b3e->enter($__internal_369ba5e09643b1759d56da41b8f85fc2e8d6417eea773c5eba58e2c7934c8b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_950f92226a7134f9def7cd6cfabd023c56cf1f7a56ba1c45cff7581175258481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950f92226a7134f9def7cd6cfabd023c56cf1f7a56ba1c45cff7581175258481->enter($__internal_950f92226a7134f9def7cd6cfabd023c56cf1f7a56ba1c45cff7581175258481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_369ba5e09643b1759d56da41b8f85fc2e8d6417eea773c5eba58e2c7934c8b3e->leave($__internal_369ba5e09643b1759d56da41b8f85fc2e8d6417eea773c5eba58e2c7934c8b3e_prof);

        
        $__internal_950f92226a7134f9def7cd6cfabd023c56cf1f7a56ba1c45cff7581175258481->leave($__internal_950f92226a7134f9def7cd6cfabd023c56cf1f7a56ba1c45cff7581175258481_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0cbefcc78fcbd282ce5d271f048e991106985f554ae41a0168fdf84d2cf69bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0cbefcc78fcbd282ce5d271f048e991106985f554ae41a0168fdf84d2cf69bb->enter($__internal_f0cbefcc78fcbd282ce5d271f048e991106985f554ae41a0168fdf84d2cf69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4657ac2d8b198789f6c4473d82cde6bf5b5aa4ed8b5e3365de0b703dc28fe996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4657ac2d8b198789f6c4473d82cde6bf5b5aa4ed8b5e3365de0b703dc28fe996->enter($__internal_4657ac2d8b198789f6c4473d82cde6bf5b5aa4ed8b5e3365de0b703dc28fe996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
";
        
        $__internal_4657ac2d8b198789f6c4473d82cde6bf5b5aa4ed8b5e3365de0b703dc28fe996->leave($__internal_4657ac2d8b198789f6c4473d82cde6bf5b5aa4ed8b5e3365de0b703dc28fe996_prof);

        
        $__internal_f0cbefcc78fcbd282ce5d271f048e991106985f554ae41a0168fdf84d2cf69bb->leave($__internal_f0cbefcc78fcbd282ce5d271f048e991106985f554ae41a0168fdf84d2cf69bb_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/app/Resources/views/admin/index.html.twig");
    }
}
