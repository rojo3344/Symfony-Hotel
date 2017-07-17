<?php

/* clients/index.html.twig */
class __TwigTemplate_55a445c2be1382c4fdb054a7cf20d22f086983746d953b2c25dc02e5b1d8a529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_f8ea96d87a979f93a1848c58b0959f6ae181efefe96bf2a247c95f9b367af588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ea96d87a979f93a1848c58b0959f6ae181efefe96bf2a247c95f9b367af588->enter($__internal_f8ea96d87a979f93a1848c58b0959f6ae181efefe96bf2a247c95f9b367af588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_c14f5f54beefa7e5a36cafe70931935f562b300001f54004b02bb0cb722de628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14f5f54beefa7e5a36cafe70931935f562b300001f54004b02bb0cb722de628->enter($__internal_c14f5f54beefa7e5a36cafe70931935f562b300001f54004b02bb0cb722de628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ea96d87a979f93a1848c58b0959f6ae181efefe96bf2a247c95f9b367af588->leave($__internal_f8ea96d87a979f93a1848c58b0959f6ae181efefe96bf2a247c95f9b367af588_prof);

        
        $__internal_c14f5f54beefa7e5a36cafe70931935f562b300001f54004b02bb0cb722de628->leave($__internal_c14f5f54beefa7e5a36cafe70931935f562b300001f54004b02bb0cb722de628_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a18b9ee6dd0d61543ad1782c057445d2ff2cc603c15902415cf73816a556b36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18b9ee6dd0d61543ad1782c057445d2ff2cc603c15902415cf73816a556b36a->enter($__internal_a18b9ee6dd0d61543ad1782c057445d2ff2cc603c15902415cf73816a556b36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9ef1c8a91faf2f579cf19a8fbc1b07ef8e3dd67dcd03fe3c7224a58d9945663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ef1c8a91faf2f579cf19a8fbc1b07ef8e3dd67dcd03fe3c7224a58d9945663->enter($__internal_d9ef1c8a91faf2f579cf19a8fbc1b07ef8e3dd67dcd03fe3c7224a58d9945663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client");
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 17
            echo "              <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_d9ef1c8a91faf2f579cf19a8fbc1b07ef8e3dd67dcd03fe3c7224a58d9945663->leave($__internal_d9ef1c8a91faf2f579cf19a8fbc1b07ef8e3dd67dcd03fe3c7224a58d9945663_prof);

        
        $__internal_a18b9ee6dd0d61543ad1782c057445d2ff2cc603c15902415cf73816a556b36a->leave($__internal_a18b9ee6dd0d61543ad1782c057445d2ff2cc603c15902415cf73816a556b36a_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  91 => 22,  87 => 21,  82 => 19,  74 => 18,  71 => 17,  67 => 16,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"{{path('new_client')}}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          {% for client in clients %}
              <tr>
                <td>{{ client.title | capitalize }}. {{ client.name }} {{ client.lastName }}</td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"{{ path(\"modify_client\", { 'id_client': client.id }) }}\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': client.id }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}", "clients/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/app/Resources/views/clients/index.html.twig");
    }
}
