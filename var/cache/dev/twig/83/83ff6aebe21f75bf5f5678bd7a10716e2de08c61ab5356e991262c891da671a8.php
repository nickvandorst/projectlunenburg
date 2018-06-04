<?php

/* frontpageadministrator.html.twig */
class __TwigTemplate_c086ffc72fc8f374308a30b9f903aab85b1797bea9219e7001349a1fa4266e11 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpageadministrator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpageadministrator.html.twig"));

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
<div class=\"jumbotron text-center\">
<h1 style=\"font-size: 50px; font-family: 'Garamond', cursive;\"><font color=\"#DF0101\"><B>Lunenburg</B></font></P></h1>
</div>

<div class=\"pull-right\" style=\"width: 15%\">
<h4><span class=\"glyphicon glyphicon-chevron-left\"></span><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><font color=\"black\"> Terug naar inlogscherm</font></a></br></h4>
</div>

<div class=\"container\">
  <h2 style = \"text-align:center; font-size: 30px\">Welkom Administrator!</h2>
  <div class=\"row\">
      <div class=\"col-sm-4\">
      <h3>Beheren:</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("allegebruikers");
        echo "\"><font color=\"white\">Overzicht van alle gebruikers </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gebruikerregistreren");
        echo "\"><font color=\"white\"> Een nieuwe gebruiker toevoegen</font></a></button></br></h4>
    </div>
</div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontpageadministrator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  54 => 25,  43 => 17,  25 => 1,);
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
<div class=\"jumbotron text-center\">
<h1 style=\"font-size: 50px; font-family: 'Garamond', cursive;\"><font color=\"#DF0101\"><B>Lunenburg</B></font></P></h1>
</div>

<div class=\"pull-right\" style=\"width: 15%\">
<h4><span class=\"glyphicon glyphicon-chevron-left\"></span><a href=\"{{ path('home') }}\"><font color=\"black\"> Terug naar inlogscherm</font></a></br></h4>
</div>

<div class=\"container\">
  <h2 style = \"text-align:center; font-size: 30px\">Welkom Administrator!</h2>
  <div class=\"row\">
      <div class=\"col-sm-4\">
      <h3>Beheren:</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"{{ path('allegebruikers') }}\"><font color=\"white\">Overzicht van alle gebruikers </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"{{ path('gebruikerregistreren') }}\"><font color=\"white\"> Een nieuwe gebruiker toevoegen</font></a></button></br></h4>
    </div>
</div>

</body>
</html>
", "frontpageadministrator.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\frontpageadministrator.html.twig");
    }
}
