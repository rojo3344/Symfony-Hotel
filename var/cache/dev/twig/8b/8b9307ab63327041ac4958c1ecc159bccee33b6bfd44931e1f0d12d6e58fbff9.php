<?php

/* base.html.twig */
class __TwigTemplate_22e52d6d7fd3e2eed62a344835c142a0a265e7682ff7a78028496d21a3b1e1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6a1714150817bece46ca3c22d7dc9667fbfef86e3d1a1b7c882a09d70bf442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6a1714150817bece46ca3c22d7dc9667fbfef86e3d1a1b7c882a09d70bf442->enter($__internal_7c6a1714150817bece46ca3c22d7dc9667fbfef86e3d1a1b7c882a09d70bf442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ab2fd4d0d87a99a984dd707b3083b498a88a8996649ce923ecaeb9cec7703d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2fd4d0d87a99a984dd707b3083b498a88a8996649ce923ecaeb9cec7703d20->enter($__internal_ab2fd4d0d87a99a984dd707b3083b498a88a8996649ce923ecaeb9cec7703d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 7
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>";
        
        $__internal_7c6a1714150817bece46ca3c22d7dc9667fbfef86e3d1a1b7c882a09d70bf442->leave($__internal_7c6a1714150817bece46ca3c22d7dc9667fbfef86e3d1a1b7c882a09d70bf442_prof);

        
        $__internal_ab2fd4d0d87a99a984dd707b3083b498a88a8996649ce923ecaeb9cec7703d20->leave($__internal_ab2fd4d0d87a99a984dd707b3083b498a88a8996649ce923ecaeb9cec7703d20_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_58dcbb3e4b646edee8dbaee7f0ae0ebee26b112390d561c7ce6aecfd1da4f3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dcbb3e4b646edee8dbaee7f0ae0ebee26b112390d561c7ce6aecfd1da4f3ff->enter($__internal_58dcbb3e4b646edee8dbaee7f0ae0ebee26b112390d561c7ce6aecfd1da4f3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6df42c8701250204e54f06de6d476b3deb2503f47134910eab02b78aa810cf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df42c8701250204e54f06de6d476b3deb2503f47134910eab02b78aa810cf58->enter($__internal_6df42c8701250204e54f06de6d476b3deb2503f47134910eab02b78aa810cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo " ";
        
        $__internal_6df42c8701250204e54f06de6d476b3deb2503f47134910eab02b78aa810cf58->leave($__internal_6df42c8701250204e54f06de6d476b3deb2503f47134910eab02b78aa810cf58_prof);

        
        $__internal_58dcbb3e4b646edee8dbaee7f0ae0ebee26b112390d561c7ce6aecfd1da4f3ff->leave($__internal_58dcbb3e4b646edee8dbaee7f0ae0ebee26b112390d561c7ce6aecfd1da4f3ff_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_902359252a55e68fd8d1255cc3b029dfe87c3751a9f821097e014c51b46b7bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902359252a55e68fd8d1255cc3b029dfe87c3751a9f821097e014c51b46b7bb6->enter($__internal_902359252a55e68fd8d1255cc3b029dfe87c3751a9f821097e014c51b46b7bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63b9b34fd131800265408644ccffde516978a43b4fd719f5629bf0bd3dd65cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b9b34fd131800265408644ccffde516978a43b4fd719f5629bf0bd3dd65cb7->enter($__internal_63b9b34fd131800265408644ccffde516978a43b4fd719f5629bf0bd3dd65cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_63b9b34fd131800265408644ccffde516978a43b4fd719f5629bf0bd3dd65cb7->leave($__internal_63b9b34fd131800265408644ccffde516978a43b4fd719f5629bf0bd3dd65cb7_prof);

        
        $__internal_902359252a55e68fd8d1255cc3b029dfe87c3751a9f821097e014c51b46b7bb6->leave($__internal_902359252a55e68fd8d1255cc3b029dfe87c3751a9f821097e014c51b46b7bb6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 32,  144 => 6,  122 => 52,  118 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  86 => 33,  84 => 32,  71 => 22,  67 => 21,  63 => 20,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  36 => 7,  34 => 6,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html data-whatinput=\"initial\" data-whatintent=\"mouse\" class=\" whatinput-types-initial\"><head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"UTF-8\">
        <title>Landon Hotel App</title>
        {% block stylesheet %} {% endblock %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    <meta class=\"foundation-mq\"></head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu=\"49qhhm-dropdown-menu\" role=\"menubar\">
            <li role=\"menuitem\"><a href=\"{{ path('home') }}\">Home</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('index_clients') }}\">Clients</a></li>
            <li role=\"menuitem\"><a href=\"{{ path('reservations') }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    {% block body %} {% endblock %}

    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>

    </body>
</html>", "base.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH04/04_08/start/app/Resources/views/base.html.twig");
    }
}
