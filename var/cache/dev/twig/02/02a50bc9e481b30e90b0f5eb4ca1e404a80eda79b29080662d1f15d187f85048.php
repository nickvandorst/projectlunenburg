<?php

/* alle_artikelen_inkoper.html.twig */
class __TwigTemplate_d7845de4ccd08f425421fff58806f698e3ef85c01296f3c8707c1ee8d9958097 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_artikelen_inkoper.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_artikelen_inkoper.html.twig"));

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
  <h2>Artikeloverzicht</h2>
  <div class=\"pull-left\" style=\"width: 8%\">
  <h4><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperhome");
        echo "\"><font color=\"white\"> Home</font></a><br/></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 23%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\"></span><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperzoekartikel");
        echo "\"><font color=\"white\"> Zoek een artikel op artikelnummer</font></a></button></br></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 22%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\"></span><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperzoekomschrijving");
        echo "\"><font color=\"white\"> Zoek een artikel op omschrijving</font></a></button></br></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 22%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkopernieuwartikel");
        echo "\"><font color=\"white\"> Nieuw artikel</font></a></button></br></h4>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>Artikelnummer</th>
        <th>Omschrijving</th>
        <th>Technische specificaties</th>
        <th>Minimumvoorraad</th>
        <th>Voorraad</th>
        <th>Code vervangend artikel</th>
        <th>Bestelserie</th>
        <th>Inkoopprijs</th>
        <th>Artikelinformatie wijzigen:</th>
       </tr>
    </thead>
    <tbody>
     ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artikelen"] ?? $this->getContext($context, "artikelen")));
        foreach ($context['_seq'] as $context["_key"] => $context["artikel"]) {
            // line 46
            echo "      <tr>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "artikelnummer", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "omschrijving", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "technischespecificaties", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "minimumvoorraad", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "voorraadaantal", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "codevervangendartikel", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "bestelserie", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["artikel"], "inkoopprijs", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperwijzigartikel", array("artikelnummer" => $this->getAttribute($context["artikel"], "artikelnummer", array()))), "html", null, true);
            echo "\">Wijzigen</a></td></td>
      </tr>
    </tbody>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artikel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        return "alle_artikelen_inkoper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 59,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 49,  94 => 48,  90 => 47,  87 => 46,  83 => 45,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  25 => 1,);
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
  <h2>Artikeloverzicht</h2>
  <div class=\"pull-left\" style=\"width: 8%\">
  <h4><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"{{ path('inkoperhome') }}\"><font color=\"white\"> Home</font></a><br/></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 23%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\"></span><a href=\"{{ path('inkoperzoekartikel') }}\"><font color=\"white\"> Zoek een artikel op artikelnummer</font></a></button></br></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 22%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-search\"></span><a href=\"{{ path('inkoperzoekomschrijving') }}\"><font color=\"white\"> Zoek een artikel op omschrijving</font></a></button></br></h4>
  </div>

  <div class=\"pull-left\" style=\"width: 22%\">
  <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"{{ path('inkopernieuwartikel') }}\"><font color=\"white\"> Nieuw artikel</font></a></button></br></h4>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>Artikelnummer</th>
        <th>Omschrijving</th>
        <th>Technische specificaties</th>
        <th>Minimumvoorraad</th>
        <th>Voorraad</th>
        <th>Code vervangend artikel</th>
        <th>Bestelserie</th>
        <th>Inkoopprijs</th>
        <th>Artikelinformatie wijzigen:</th>
       </tr>
    </thead>
    <tbody>
     {% for artikel in artikelen %}
      <tr>
        <td>{{ artikel.artikelnummer }}</td>
        <td>{{ artikel.omschrijving }}</td>
        <td>{{ artikel.technischespecificaties }}</td>
        <td>{{ artikel.minimumvoorraad }}</td>
        <td>{{ artikel.voorraadaantal }}</td>
        <td>{{ artikel.codevervangendartikel }}</td>
        <td>{{ artikel.bestelserie }}</td>
        <td>{{ artikel.inkoopprijs }}</td>
        <td><a href=\"{{ path('inkoperwijzigartikel',{'artikelnummer':artikel.artikelnummer}) }}\">Wijzigen</a></td></td>
      </tr>
    </tbody>
    {% endfor %}
  </table>
</div>

</body>
</html>
", "alle_artikelen_inkoper.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\alle_artikelen_inkoper.html.twig");
    }
}
