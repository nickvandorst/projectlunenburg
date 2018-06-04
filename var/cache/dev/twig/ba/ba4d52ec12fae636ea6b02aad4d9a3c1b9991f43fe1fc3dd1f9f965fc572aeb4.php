<?php

/* alle_gebruikers.html.twig */
class __TwigTemplate_a9a3ebf2dd3a5eeace60401a66a5da1af4e7eac84023b14fbd6a23958dd2dbb8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_gebruikers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_gebruikers.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
  <title>Lunenburg</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>

<div class=\"container\">
  <h2>Gebruikersoverzicht</h2>
  <h5><button class=\"btn btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administratorhome");
        echo "\"><font color=\"white\"> Home</font></a><br/></button></h5>
  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>Gebruikersnaam</th>
        <th>Functie</th>
      </tr>
    </thead>
    <tbody>
     ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gebruikers"] ?? $this->getContext($context, "gebruikers")));
        foreach ($context['_seq'] as $context["_key"] => $context["gebruiker"]) {
            // line 24
            echo "      <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebruiker"], "gebruikersnaam", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebruiker"], "functie", array()), "html", null, true);
            echo "</td>
      </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gebruiker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </table>
</div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "alle_gebruikers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  63 => 26,  59 => 25,  56 => 24,  52 => 23,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html lang=\"en\">
<head>
  <title>Lunenburg</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>

<div class=\"container\">
  <h2>Gebruikersoverzicht</h2>
  <h5><button class=\"btn btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"{{ path('administratorhome') }}\"><font color=\"white\"> Home</font></a><br/></button></h5>
  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>Gebruikersnaam</th>
        <th>Functie</th>
      </tr>
    </thead>
    <tbody>
     {% for gebruiker in gebruikers %}
      <tr>
        <td>{{ gebruiker.gebruikersnaam }}</td>
        <td>{{ gebruiker.functie }}</td>
      </tr>
    </tbody>
    {% endfor %}
  </table>
</div>

</body>
</html>
", "alle_gebruikers.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\alle_gebruikers.html.twig");
    }
}
