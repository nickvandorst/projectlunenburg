<?php

/* frontpagemagazijnmeester.html.twig */
class __TwigTemplate_eb03341471c3b44d2f935bbb92fe327ea41b39349ecb7b43c9a002e79bf172d4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpagemagazijnmeester.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpagemagazijnmeester.html.twig"));

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


  <h2 style = \"text-align:center; font-size: 30px\">Welkom magazijnmeester</h2>
  <!--<h5 style =\"text-align:right\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><font color=\"black\"> Home</font></a></br></h5>-->
  <div class=\"row\">
      <div class=\"col-sm-4\">
      <h3>Artikelen</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazijnmeesteralleartikelen");
        echo "\"><font color=\"white\">Alle artikelen </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
</div>
      <div class=\"col-sm-4\">
      <h3>Goederenontvangst</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazijnmeesterontvangstmelding");
        echo "\"><font color=\"white\">Ontvangstmeldingen </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazijnmeesternieuwleverancier");
        echo "\"><font color=\"white\"> Goederenontvangst registreren</font></a></button></br></h4>
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
        return "frontpagemagazijnmeester.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  67 => 32,  60 => 28,  53 => 24,  43 => 17,  25 => 1,);
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


  <h2 style = \"text-align:center; font-size: 30px\">Welkom magazijnmeester</h2>
  <!--<h5 style =\"text-align:right\"><span class=\"glyphicon glyphicon-home\"></span><a href=\"{{ path('home') }}\"><font color=\"black\"> Home</font></a></br></h5>-->
  <div class=\"row\">
      <div class=\"col-sm-4\">
      <h3>Artikelen</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"{{ path('magazijnmeesteralleartikelen') }}\"><font color=\"white\">Alle artikelen </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
</div>
      <div class=\"col-sm-4\">
      <h3>Goederenontvangst</h3>
      <h4><button class=\"btn btn-info btn-lg\"><a href=\"{{ path('magazijnmeesterontvangstmelding') }}\"><font color=\"white\">Ontvangstmeldingen </font></a><span class=\"glyphicon glyphicon-chevron-right\"></span></button></br></h4>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-plus\"></span><a href=\"{{ path('magazijnmeesternieuwleverancier') }}\"><font color=\"white\"> Goederenontvangst registreren</font></a></button></br></h4>
    </div>
</div>

</body>
</html>
", "frontpagemagazijnmeester.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\app\\Resources\\views\\frontpagemagazijnmeester.html.twig");
    }
}
