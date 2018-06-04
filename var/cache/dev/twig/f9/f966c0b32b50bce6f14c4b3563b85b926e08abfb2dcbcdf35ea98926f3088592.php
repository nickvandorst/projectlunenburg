<?php

/* frontpage.html.twig */
class __TwigTemplate_5fd3cf57f27609ffe9d024e2b9f1a07a8df38885277988cfffc9bd5b3fb071a3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontpage.html.twig"));

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
<div class=\"container\">

  <h2 style = \"text-align:center; font-size: 30px\">Welkom</h2>
  <div class=\"row\">
      <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Inkoper:</h3>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inkoperhome");
        echo "\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
      <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Magazijnmeester:</h3>
        <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("magazijnmeesterhome");
        echo "\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
  <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Administrator:</h3>
        <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administratorhome");
        echo "\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
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
        return "frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 29,  54 => 25,  47 => 21,  25 => 1,);
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
<div class=\"container\">

  <h2 style = \"text-align:center; font-size: 30px\">Welkom</h2>
  <div class=\"row\">
      <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Inkoper:</h3>
      <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"{{ path('inkoperhome') }}\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
      <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Magazijnmeester:</h3>
        <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"{{ path('magazijnmeesterhome') }}\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
  <div class=\"pull-left\" style=\"width: 33%\">
      <h3>Administrator:</h3>
        <h4><button class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-log-in\"></span><a href=\"{{ path('administratorhome') }}\"><font color=\"white\"> Inloggen</font></a></button></br></h4>
    </div>
  </div>
</div>

</body>
</html>
", "frontpage.html.twig", "C:\\xampp\\htdocs\\vmslunenburg\\app\\Resources\\views\\frontpage.html.twig");
    }
}
