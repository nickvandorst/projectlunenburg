<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96ca9fee15492a50af3fefb63cb2f87c4841ed0ff24ca13fdc128d07fb3203c8 extends Twig_Template
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
        $__internal_931d0b8a3d9b948713776c61876901a3d721cf46b970c00b76e625e71fba53ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931d0b8a3d9b948713776c61876901a3d721cf46b970c00b76e625e71fba53ae->enter($__internal_931d0b8a3d9b948713776c61876901a3d721cf46b970c00b76e625e71fba53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7098f0d1fdd1e765c6b3342679938181c82002c9fab942dcbd1a7b4d793c0ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7098f0d1fdd1e765c6b3342679938181c82002c9fab942dcbd1a7b4d793c0ba7->enter($__internal_7098f0d1fdd1e765c6b3342679938181c82002c9fab942dcbd1a7b4d793c0ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931d0b8a3d9b948713776c61876901a3d721cf46b970c00b76e625e71fba53ae->leave($__internal_931d0b8a3d9b948713776c61876901a3d721cf46b970c00b76e625e71fba53ae_prof);

        
        $__internal_7098f0d1fdd1e765c6b3342679938181c82002c9fab942dcbd1a7b4d793c0ba7->leave($__internal_7098f0d1fdd1e765c6b3342679938181c82002c9fab942dcbd1a7b4d793c0ba7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b224a35fa9cdadad2957db275ee1924dae0da01686902884135313b1a0ac210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b224a35fa9cdadad2957db275ee1924dae0da01686902884135313b1a0ac210->enter($__internal_5b224a35fa9cdadad2957db275ee1924dae0da01686902884135313b1a0ac210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28410ef2979ca02f72214179401cfdd6e2c292b550acde32b177777195939391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28410ef2979ca02f72214179401cfdd6e2c292b550acde32b177777195939391->enter($__internal_28410ef2979ca02f72214179401cfdd6e2c292b550acde32b177777195939391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_28410ef2979ca02f72214179401cfdd6e2c292b550acde32b177777195939391->leave($__internal_28410ef2979ca02f72214179401cfdd6e2c292b550acde32b177777195939391_prof);

        
        $__internal_5b224a35fa9cdadad2957db275ee1924dae0da01686902884135313b1a0ac210->leave($__internal_5b224a35fa9cdadad2957db275ee1924dae0da01686902884135313b1a0ac210_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d0ff5fae76f8f6e0f98252d05ec3f84ebfadb41b77ae3dd0ffb40951b6f711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d0ff5fae76f8f6e0f98252d05ec3f84ebfadb41b77ae3dd0ffb40951b6f711->enter($__internal_f2d0ff5fae76f8f6e0f98252d05ec3f84ebfadb41b77ae3dd0ffb40951b6f711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3db78b76b7ac58714645fcf6dc82f14170ec653ccd3bd13cda6e95548e47fb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db78b76b7ac58714645fcf6dc82f14170ec653ccd3bd13cda6e95548e47fb51->enter($__internal_3db78b76b7ac58714645fcf6dc82f14170ec653ccd3bd13cda6e95548e47fb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3db78b76b7ac58714645fcf6dc82f14170ec653ccd3bd13cda6e95548e47fb51->leave($__internal_3db78b76b7ac58714645fcf6dc82f14170ec653ccd3bd13cda6e95548e47fb51_prof);

        
        $__internal_f2d0ff5fae76f8f6e0f98252d05ec3f84ebfadb41b77ae3dd0ffb40951b6f711->leave($__internal_f2d0ff5fae76f8f6e0f98252d05ec3f84ebfadb41b77ae3dd0ffb40951b6f711_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c32c7ff9debbbfde4aa44cfe2d64dcc2453f7db596b6e61c7abf6317c8c2d9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32c7ff9debbbfde4aa44cfe2d64dcc2453f7db596b6e61c7abf6317c8c2d9ed->enter($__internal_c32c7ff9debbbfde4aa44cfe2d64dcc2453f7db596b6e61c7abf6317c8c2d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e133d35330f57e3678f1060f39711ecb7e99d7745a6ccd6e598cdf4760be3660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e133d35330f57e3678f1060f39711ecb7e99d7745a6ccd6e598cdf4760be3660->enter($__internal_e133d35330f57e3678f1060f39711ecb7e99d7745a6ccd6e598cdf4760be3660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e133d35330f57e3678f1060f39711ecb7e99d7745a6ccd6e598cdf4760be3660->leave($__internal_e133d35330f57e3678f1060f39711ecb7e99d7745a6ccd6e598cdf4760be3660_prof);

        
        $__internal_c32c7ff9debbbfde4aa44cfe2d64dcc2453f7db596b6e61c7abf6317c8c2d9ed->leave($__internal_c32c7ff9debbbfde4aa44cfe2d64dcc2453f7db596b6e61c7abf6317c8c2d9ed_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
