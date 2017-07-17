<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d0a29947ef8f666dc10c5c8729bb05163e550bdd442241cb1b2433913623fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08f566cd6c9bbb430c52cd53d4fcc054ce9427ec64052116eb4eb077c49a1f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f566cd6c9bbb430c52cd53d4fcc054ce9427ec64052116eb4eb077c49a1f48->enter($__internal_08f566cd6c9bbb430c52cd53d4fcc054ce9427ec64052116eb4eb077c49a1f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2fcae570f7129e3645205b76853be3f7d587f698836d02c4ae3ddb01906f793a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fcae570f7129e3645205b76853be3f7d587f698836d02c4ae3ddb01906f793a->enter($__internal_2fcae570f7129e3645205b76853be3f7d587f698836d02c4ae3ddb01906f793a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f566cd6c9bbb430c52cd53d4fcc054ce9427ec64052116eb4eb077c49a1f48->leave($__internal_08f566cd6c9bbb430c52cd53d4fcc054ce9427ec64052116eb4eb077c49a1f48_prof);

        
        $__internal_2fcae570f7129e3645205b76853be3f7d587f698836d02c4ae3ddb01906f793a->leave($__internal_2fcae570f7129e3645205b76853be3f7d587f698836d02c4ae3ddb01906f793a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d677a37099574e9b6dd7cc7a7ed1fc9fc2a44709b5d36b2b21b34e2e4fe9077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d677a37099574e9b6dd7cc7a7ed1fc9fc2a44709b5d36b2b21b34e2e4fe9077->enter($__internal_8d677a37099574e9b6dd7cc7a7ed1fc9fc2a44709b5d36b2b21b34e2e4fe9077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2086ca7753b3fc1a86666124215980502b050fb39374a752ec75d0e7f0ce5902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2086ca7753b3fc1a86666124215980502b050fb39374a752ec75d0e7f0ce5902->enter($__internal_2086ca7753b3fc1a86666124215980502b050fb39374a752ec75d0e7f0ce5902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2086ca7753b3fc1a86666124215980502b050fb39374a752ec75d0e7f0ce5902->leave($__internal_2086ca7753b3fc1a86666124215980502b050fb39374a752ec75d0e7f0ce5902_prof);

        
        $__internal_8d677a37099574e9b6dd7cc7a7ed1fc9fc2a44709b5d36b2b21b34e2e4fe9077->leave($__internal_8d677a37099574e9b6dd7cc7a7ed1fc9fc2a44709b5d36b2b21b34e2e4fe9077_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe6b690c698c3d1450cfe63f47f63fd6b66a1b75e44eb8c65c3f8fa8fc003efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6b690c698c3d1450cfe63f47f63fd6b66a1b75e44eb8c65c3f8fa8fc003efe->enter($__internal_fe6b690c698c3d1450cfe63f47f63fd6b66a1b75e44eb8c65c3f8fa8fc003efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77749e0bcdb830c985b23619da4e4c5eec066607b7a7df584f4e70288475c22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77749e0bcdb830c985b23619da4e4c5eec066607b7a7df584f4e70288475c22c->enter($__internal_77749e0bcdb830c985b23619da4e4c5eec066607b7a7df584f4e70288475c22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77749e0bcdb830c985b23619da4e4c5eec066607b7a7df584f4e70288475c22c->leave($__internal_77749e0bcdb830c985b23619da4e4c5eec066607b7a7df584f4e70288475c22c_prof);

        
        $__internal_fe6b690c698c3d1450cfe63f47f63fd6b66a1b75e44eb8c65c3f8fa8fc003efe->leave($__internal_fe6b690c698c3d1450cfe63f47f63fd6b66a1b75e44eb8c65c3f8fa8fc003efe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_437e5990e2e604513da212fef190d1b98c81366db01d4c36c9fc4e7eda8e093d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437e5990e2e604513da212fef190d1b98c81366db01d4c36c9fc4e7eda8e093d->enter($__internal_437e5990e2e604513da212fef190d1b98c81366db01d4c36c9fc4e7eda8e093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_803a2d51741be4073a98b41475a81ecc3a61a621ae4bb502d69c9481e38aaef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803a2d51741be4073a98b41475a81ecc3a61a621ae4bb502d69c9481e38aaef6->enter($__internal_803a2d51741be4073a98b41475a81ecc3a61a621ae4bb502d69c9481e38aaef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_803a2d51741be4073a98b41475a81ecc3a61a621ae4bb502d69c9481e38aaef6->leave($__internal_803a2d51741be4073a98b41475a81ecc3a61a621ae4bb502d69c9481e38aaef6_prof);

        
        $__internal_437e5990e2e604513da212fef190d1b98c81366db01d4c36c9fc4e7eda8e093d->leave($__internal_437e5990e2e604513da212fef190d1b98c81366db01d4c36c9fc4e7eda8e093d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
