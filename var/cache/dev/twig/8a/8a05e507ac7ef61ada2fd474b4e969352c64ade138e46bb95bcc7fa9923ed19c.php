<?php

/* alle_bestelorders.html.twig */
class __TwigTemplate_3ed451d38e3648820f28ac8018e1cfd93b3d1e5aed3c5415aa1840cd17c9f16a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_bestelorders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alle_bestelorders.html.twig"));

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
    <h2>Bestelorders:</h2>

    <div class=\"pull-left\" style=\"width: 8%\">
    <h4><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperhome");
        echo "\"><font color=\"white\"> Home</font></a><br/></h4>
    </div>

    <div class=\"pull-left\" style=\"width: 8%\">
    <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperbestelorder");
        echo "\"><font color=\"white\"> Nieuw bestelorder</font></a></button><br/></h4>
    </div>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Bestelordernummer</th>
            <th>Naam Leverancier</th>
            <th>Artikelnummer</th>
            <th>Omschrijving</th>
            <th>Hoeveelheid</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestelorders"] ?? $this->getContext($context, "bestelorders")));
        foreach ($context['_seq'] as $context["_key"] => $context["bestelorder"]) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestelorder"], "bestelordernummer", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestelorder"], "naamleverancier", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestelorder"], "artikelnummer", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestelorder"], "omschrijving", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["bestelorder"], "hoeveelheid", array()), "html", null, true);
            echo "</td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bestelorder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </table>
</div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "alle_bestelorders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 45,  90 => 41,  86 => 40,  82 => 39,  78 => 38,  74 => 37,  71 => 36,  67 => 35,  49 => 20,  42 => 16,  25 => 1,);
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
    <h2>Bestelorders:</h2>

    <div class=\"pull-left\" style=\"width: 8%\">
    <h4><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"{{ path('inkoperhome') }}\"><font color=\"white\"> Home</font></a><br/></h4>
    </div>

    <div class=\"pull-left\" style=\"width: 8%\">
    <h4><button class=\"btn btn-info\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"{{ path('inkoperbestelorder') }}\"><font color=\"white\"> Nieuw bestelorder</font></a></button><br/></h4>
    </div>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Bestelordernummer</th>
            <th>Naam Leverancier</th>
            <th>Artikelnummer</th>
            <th>Omschrijving</th>
            <th>Hoeveelheid</th>

        </tr>
        </thead>
        <tbody>
        {% for bestelorder in bestelorders %}
        <tr>
            <td>{{ bestelorder.bestelordernummer }}</td>
            <td>{{ bestelorder.naamleverancier }}</td>
            <td>{{ bestelorder.artikelnummer }}</td>
            <td>{{ bestelorder.omschrijving }}</td>
            <td>{{ bestelorder.hoeveelheid }}</td>
        </tr>
        </tbody>
        {% endfor %}
    </table>
</div>

</body>
</html>
", "alle_bestelorders.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\alle_bestelorders.html.twig");
    }
}
