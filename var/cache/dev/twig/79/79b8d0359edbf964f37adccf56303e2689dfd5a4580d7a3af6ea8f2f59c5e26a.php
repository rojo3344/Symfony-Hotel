<?php

/* reservations/index.html.twig */
class __TwigTemplate_c7cba6309dfbbf1258af328073ab7a4f7db01fb53a85c8eb96dc0452886960c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_9874f3f70ae352b19e1823c2bfe16c29432e6d9bc63425248fb203ea5503c378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9874f3f70ae352b19e1823c2bfe16c29432e6d9bc63425248fb203ea5503c378->enter($__internal_9874f3f70ae352b19e1823c2bfe16c29432e6d9bc63425248fb203ea5503c378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_63b0031f88e19086f7a0da26f5ce611bca096b0a16ef6df7b142c9508dcfa35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b0031f88e19086f7a0da26f5ce611bca096b0a16ef6df7b142c9508dcfa35a->enter($__internal_63b0031f88e19086f7a0da26f5ce611bca096b0a16ef6df7b142c9508dcfa35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9874f3f70ae352b19e1823c2bfe16c29432e6d9bc63425248fb203ea5503c378->leave($__internal_9874f3f70ae352b19e1823c2bfe16c29432e6d9bc63425248fb203ea5503c378_prof);

        
        $__internal_63b0031f88e19086f7a0da26f5ce611bca096b0a16ef6df7b142c9508dcfa35a->leave($__internal_63b0031f88e19086f7a0da26f5ce611bca096b0a16ef6df7b142c9508dcfa35a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_11dcf5c5887754e3d17465daa713bb7255eb7ecb84ad014ff5cefa6e1ef3e514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11dcf5c5887754e3d17465daa713bb7255eb7ecb84ad014ff5cefa6e1ef3e514->enter($__internal_11dcf5c5887754e3d17465daa713bb7255eb7ecb84ad014ff5cefa6e1ef3e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cff529ad1ea3970157d824fc72dc94c2732bdf32607f597ac64ef9d25443ed50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff529ad1ea3970157d824fc72dc94c2732bdf32607f597ac64ef9d25443ed50->enter($__internal_cff529ad1ea3970157d824fc72dc94c2732bdf32607f597ac64ef9d25443ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
";
        
        $__internal_cff529ad1ea3970157d824fc72dc94c2732bdf32607f597ac64ef9d25443ed50->leave($__internal_cff529ad1ea3970157d824fc72dc94c2732bdf32607f597ac64ef9d25443ed50_prof);

        
        $__internal_11dcf5c5887754e3d17465daa713bb7255eb7ecb84ad014ff5cefa6e1ef3e514->leave($__internal_11dcf5c5887754e3d17465daa713bb7255eb7ecb84ad014ff5cefa6e1ef3e514_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>
{% endblock %}
", "reservations/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/app/Resources/views/reservations/index.html.twig");
    }
}
