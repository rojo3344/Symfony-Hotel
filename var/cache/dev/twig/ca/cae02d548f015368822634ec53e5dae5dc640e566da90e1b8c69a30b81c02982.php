<?php

/* clients/form.html.twig */
class __TwigTemplate_ed04c7ff8dade4bbf2d3b7ff0cca4f602df0c277f9ecbed3ce19ea54ab8a48d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/form.html.twig", 1);
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
        $__internal_594353629e1efd66e567545af23bf66c0c7364a6d657149619e6219e07ce929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594353629e1efd66e567545af23bf66c0c7364a6d657149619e6219e07ce929d->enter($__internal_594353629e1efd66e567545af23bf66c0c7364a6d657149619e6219e07ce929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $__internal_be2fabe10274c69071a8974b9cc4d821bb62047f2b536e6477c15a6dfecf1428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2fabe10274c69071a8974b9cc4d821bb62047f2b536e6477c15a6dfecf1428->enter($__internal_be2fabe10274c69071a8974b9cc4d821bb62047f2b536e6477c15a6dfecf1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594353629e1efd66e567545af23bf66c0c7364a6d657149619e6219e07ce929d->leave($__internal_594353629e1efd66e567545af23bf66c0c7364a6d657149619e6219e07ce929d_prof);

        
        $__internal_be2fabe10274c69071a8974b9cc4d821bb62047f2b536e6477c15a6dfecf1428->leave($__internal_be2fabe10274c69071a8974b9cc4d821bb62047f2b536e6477c15a6dfecf1428_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d59c6125f2a5ad6767d89a42dad473776128630c2623aec31485349631ac2ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59c6125f2a5ad6767d89a42dad473776128630c2623aec31485349631ac2ba1->enter($__internal_d59c6125f2a5ad6767d89a42dad473776128630c2623aec31485349631ac2ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5480c5e595765ae45107000a56240c03624449f545a15d4e22e4529ae413602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5480c5e595765ae45107000a56240c03624449f545a15d4e22e4529ae413602->enter($__internal_d5480c5e595765ae45107000a56240c03624449f545a15d4e22e4529ae413602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>";
        // line 5
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new_client")) ? ("New Client") : ("Modify Client"));
        echo "</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["titles"] ?? $this->getContext($context, "titles")));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 11
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "\" ";
            echo ((($context["title"] == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["title"]), "html", null, true);
            echo ".</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "address", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "zip_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zip_code", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "city", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "state", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "email", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array())) : ("")), "html", null, true);
        echo "\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
";
        
        $__internal_d5480c5e595765ae45107000a56240c03624449f545a15d4e22e4529ae413602->leave($__internal_d5480c5e595765ae45107000a56240c03624449f545a15d4e22e4529ae413602_prof);

        
        $__internal_d59c6125f2a5ad6767d89a42dad473776128630c2623aec31485349631ac2ba1->leave($__internal_d59c6125f2a5ad6767d89a42dad473776128630c2623aec31485349631ac2ba1_prof);

    }

    public function getTemplateName()
    {
        return "clients/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  119 => 37,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  78 => 13,  65 => 11,  61 => 10,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        <h4>{{ mode == 'new_client' ? 'New Client' : 'Modify Client' }}</h4>
        <form action=\"\" method=\"post\">
          <div class=\"medium-4  columns\">
            <label>Title</label>
            <select name=\"form[title]\">
            {% for title in titles %}
              <option value=\"{{title}}\" {{ title == form.title ? 'selected' : '' }} >{{ title | capitalize }}.</option>
            {% endfor %}
            </select>
          </div>
          <div class=\"medium-4  columns\">
            <label>Name</label>
            <input name=\"form[name]\" value=\"{{ form.name is defined ? form.name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>Last Name</label>
            <input name=\"form[last_name]\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-8  columns\">
            <label>Address</label>
            <input name=\"form[address]\" value=\"{{ form.address is defined ? form.address : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>zip_code</label>
            <input name=\"form[zip_code]\" value=\"{{ form.zip_code is defined ? form.zip_code : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>City</label>
            <input name=\"form[city]\" value=\"{{ form.city is defined ? form.city : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-4  columns\">
            <label>State</label>
            <input name=\"form[state]\" value=\"{{ form.state is defined ? form.state : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <label>Email</label>
            <input name=\"form[email]\" value=\"{{ form.email is defined ? form.email : '' }}\" type=\"text\" />
          </div>
          <div class=\"medium-12  columns\">
            <input type=\"submit\" value=\"SAVE\" class=\"button success hollow\" />
          </div>
        </form>
      </div>
    </div>
{% endblock %}", "clients/form.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/app/Resources/views/clients/form.html.twig");
    }
}
