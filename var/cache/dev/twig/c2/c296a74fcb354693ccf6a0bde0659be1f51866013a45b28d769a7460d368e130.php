<?php

/* omschrijvingzoek.html.twig */
class __TwigTemplate_c0fe18cc83874915141c20433370d50ea0a8ddd280af29c867dcc8b5ccc7f5f2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omschrijvingzoek.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "omschrijvingzoek.html.twig"));

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
  <h2>Zoek op omschrijving</h2>
  <span class=\"glyphicon glyphicon-chevron-left\"></span><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperalleartikelen");
        echo "\"><font color=\"black\"> Terug</font></a></br>

  <form method=\"POST\">

    <input type='text' name=\"omschrijving\">

    <input class=\"btn btn-info\" type='submit', name='submit' value=\"zoeken\">

  </form>

  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Artikelnummer</th>
        <th>Omschrijving</th>
        <th>Bestelserie</th>
       </tr>
    </thead>
    <tbody>
     ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artikelen"] ?? $this->getContext($context, "artikelen")));
        foreach ($context['_seq'] as $context["_key"] => $context["artikel"]) {
            // line 34
            echo "      <tr>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "artikelnummer", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "omschrijving", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "bestelserie", array()), "html", null, true);
            echo "</td>
      </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artikel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "omschrijvingzoek.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 41,  77 => 37,  73 => 36,  69 => 35,  66 => 34,  62 => 33,  40 => 14,  25 => 1,);
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
  <h2>Zoek op omschrijving</h2>
  <span class=\"glyphicon glyphicon-chevron-left\"></span><a href=\"{{ path('inkoperalleartikelen') }}\"><font color=\"black\"> Terug</font></a></br>

  <form method=\"POST\">

    <input type='text' name=\"omschrijving\">

    <input class=\"btn btn-info\" type='submit', name='submit' value=\"zoeken\">

  </form>

  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>Artikelnummer</th>
        <th>Omschrijving</th>
        <th>Bestelserie</th>
       </tr>
    </thead>
    <tbody>
     {% for artikel in artikelen %}
      <tr>
        <td>{{ artikel.artikelnummer }}</td>
        <td>{{ artikel.omschrijving }}</td>
        <td>{{ artikel.bestelserie }}</td>
      </tr>
    </tbody>
    {% endfor %}
  </table>
</div>

</body>
</html>
", "omschrijvingzoek.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\omschrijvingzoek.html.twig");
    }
}
