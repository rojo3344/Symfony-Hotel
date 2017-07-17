<?php

/* reservations/book.html.twig */
class __TwigTemplate_69b8bcf138a4a1e52de5dd20fc6b080feaef25114a25ef267462b26d541e2945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_5f93c2fffd9d4eeb0d020a0836e46476fc38448578b0e56587cb12d39be4d4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f93c2fffd9d4eeb0d020a0836e46476fc38448578b0e56587cb12d39be4d4ad->enter($__internal_5f93c2fffd9d4eeb0d020a0836e46476fc38448578b0e56587cb12d39be4d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_bfbc6a91b356b6825f01795714512c1aa963e90e4306488a1391c989016a1e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbc6a91b356b6825f01795714512c1aa963e90e4306488a1391c989016a1e79->enter($__internal_bfbc6a91b356b6825f01795714512c1aa963e90e4306488a1391c989016a1e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f93c2fffd9d4eeb0d020a0836e46476fc38448578b0e56587cb12d39be4d4ad->leave($__internal_5f93c2fffd9d4eeb0d020a0836e46476fc38448578b0e56587cb12d39be4d4ad_prof);

        
        $__internal_bfbc6a91b356b6825f01795714512c1aa963e90e4306488a1391c989016a1e79->leave($__internal_bfbc6a91b356b6825f01795714512c1aa963e90e4306488a1391c989016a1e79_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb5973da3beea2dc650bd91677bbb3c1d1a148d632a90cedf29c0b07a0a8899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb5973da3beea2dc650bd91677bbb3c1d1a148d632a90cedf29c0b07a0a8899->enter($__internal_ddb5973da3beea2dc650bd91677bbb3c1d1a148d632a90cedf29c0b07a0a8899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc3a7bd8984d97bfeacd7c1f44464db80e6611f5c3170880c07e2b50e5a89551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3a7bd8984d97bfeacd7c1f44464db80e6611f5c3170880c07e2b50e5a89551->enter($__internal_dc3a7bd8984d97bfeacd7c1f44464db80e6611f5c3170880c07e2b50e5a89551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  </div>
        <div class=\"medium-2  columns\"><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "lastName", array()), "html", null, true);
        echo "</b></div>
        <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()), "html", null, true);
        echo "\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 27
            echo "              <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                  <div class=\"callout success\">
                      <h7>Available</h7>
                  </div>
                </td>
                <td>
                  <a class=\"hollow button warning\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_room", array("id_client" => $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()), "id_room" => $this->getAttribute($context["room"], "id", array()), "date_in" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "from", array()), "date_out" => $this->getAttribute(($context["dates"] ?? $this->getContext($context, "dates")), "to", array()))), "html", null, true);
            echo "\">BOOK NOW</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "          
          </tbody>
        </table>
      </div>
    </div>
";
        
        $__internal_dc3a7bd8984d97bfeacd7c1f44464db80e6611f5c3170880c07e2b50e5a89551->leave($__internal_dc3a7bd8984d97bfeacd7c1f44464db80e6611f5c3170880c07e2b50e5a89551_prof);

        
        $__internal_ddb5973da3beea2dc650bd91677bbb3c1d1a148d632a90cedf29c0b07a0a8899->leave($__internal_ddb5973da3beea2dc650bd91677bbb3c1d1a148d632a90cedf29c0b07a0a8899_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  105 => 35,  95 => 28,  92 => 27,  88 => 26,  71 => 12,  66 => 10,  61 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR:  </div>
        <div class=\"medium-2  columns\"><b>{{ client.name }} {{ client.lastName }}</b></div>
        <form action=\"{{ path('booking', {'id_client': client.id}) }}\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateFrom]\" value=\"{{dates.from}}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"form[dateTo]\" value=\"{{dates.to}}\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            {% for room in rooms %}
              <tr>
                <td>{{room.name}}</td>
                <td>
                  <div class=\"callout success\">
                      <h7>Available</h7>
                  </div>
                </td>
                <td>
                  <a class=\"hollow button warning\" href=\"{{ path('book_room', {'id_client': client.id, 'id_room': room.id, 'date_in': dates.from, 'date_out': dates.to}) }}\">BOOK NOW</a>
                </td>
              </tr>
            {% endfor %}
          
          </tbody>
        </table>
      </div>
    </div>
{% endblock %}", "reservations/book.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/app/Resources/views/reservations/book.html.twig");
    }
}
