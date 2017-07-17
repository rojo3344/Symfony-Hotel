<?php

/* @WebProfiler/Profiler/bag.html.twig */
class __TwigTemplate_edd5aca654789f6940fb26ff1cf9934b2d8df90c9a4b4eed19f4879820f8047f extends Twig_Template
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
        $__internal_6bb9965594b944434411e7628541a709c58e58908c6e13f9f9da24811125a590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb9965594b944434411e7628541a709c58e58908c6e13f9f9da24811125a590->enter($__internal_6bb9965594b944434411e7628541a709c58e58908c6e13f9f9da24811125a590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/bag.html.twig"));

        $__internal_e25908619e272ce511eb100e84757c56085b63115fb1ca2d3f743b905be805aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25908619e272ce511eb100e84757c56085b63115fb1ca2d3f743b905be805aa->enter($__internal_e25908619e272ce511eb100e84757c56085b63115fb1ca2d3f743b905be805aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/bag.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute(($context["labels"] ?? $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute(($context["bag"] ?? $this->getContext($context, "bag")), "keys", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["bag"] ?? $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method"), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter(($context["maxDepth"] ?? $this->getContext($context, "maxDepth")), 0)) : (0))));
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_6bb9965594b944434411e7628541a709c58e58908c6e13f9f9da24811125a590->leave($__internal_6bb9965594b944434411e7628541a709c58e58908c6e13f9f9da24811125a590_prof);

        
        $__internal_e25908619e272ce511eb100e84757c56085b63115fb1ca2d3f743b905be805aa->leave($__internal_e25908619e272ce511eb100e84757c56085b63115fb1ca2d3f743b905be805aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  63 => 15,  55 => 12,  51 => 11,  48 => 10,  43 => 9,  36 => 5,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"{{ class|default('') }}\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ labels is defined ? labels[0] : 'Key' }}</th>
            <th scope=\"col\">{{ labels is defined ? labels[1] : 'Value' }}</th>
        </tr>
    </thead>
    <tbody>
        {% for key in bag.keys|sort %}
            <tr>
                <th>{{ key }}</th>
                <td>{{ profiler_dump(bag.get(key), maxDepth=maxDepth|default(0)) }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@WebProfiler/Profiler/bag.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/bag.html.twig");
    }
}
