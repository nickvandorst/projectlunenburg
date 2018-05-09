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
        $__internal_5ba14b0376dc1ced44ba1d0d68f33d6bdf8afd60b640743c6831696d060bc54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba14b0376dc1ced44ba1d0d68f33d6bdf8afd60b640743c6831696d060bc54f->enter($__internal_5ba14b0376dc1ced44ba1d0d68f33d6bdf8afd60b640743c6831696d060bc54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8bd34703961a58bd0e1641153c93bd2d055e2837b55e521825c9e4b53be06433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd34703961a58bd0e1641153c93bd2d055e2837b55e521825c9e4b53be06433->enter($__internal_8bd34703961a58bd0e1641153c93bd2d055e2837b55e521825c9e4b53be06433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba14b0376dc1ced44ba1d0d68f33d6bdf8afd60b640743c6831696d060bc54f->leave($__internal_5ba14b0376dc1ced44ba1d0d68f33d6bdf8afd60b640743c6831696d060bc54f_prof);

        
        $__internal_8bd34703961a58bd0e1641153c93bd2d055e2837b55e521825c9e4b53be06433->leave($__internal_8bd34703961a58bd0e1641153c93bd2d055e2837b55e521825c9e4b53be06433_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec5b8afca7b5b710f96425158a455f1187c1c15d5111fc23f026b4d6c59a11eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5b8afca7b5b710f96425158a455f1187c1c15d5111fc23f026b4d6c59a11eb->enter($__internal_ec5b8afca7b5b710f96425158a455f1187c1c15d5111fc23f026b4d6c59a11eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0984eb2d7cf0044a44399e4fc6fa4fa89ed4446f73239e4f7bb3380356c0183b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0984eb2d7cf0044a44399e4fc6fa4fa89ed4446f73239e4f7bb3380356c0183b->enter($__internal_0984eb2d7cf0044a44399e4fc6fa4fa89ed4446f73239e4f7bb3380356c0183b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0984eb2d7cf0044a44399e4fc6fa4fa89ed4446f73239e4f7bb3380356c0183b->leave($__internal_0984eb2d7cf0044a44399e4fc6fa4fa89ed4446f73239e4f7bb3380356c0183b_prof);

        
        $__internal_ec5b8afca7b5b710f96425158a455f1187c1c15d5111fc23f026b4d6c59a11eb->leave($__internal_ec5b8afca7b5b710f96425158a455f1187c1c15d5111fc23f026b4d6c59a11eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_78fe0685ee01a2e55710ac31a2345f660a882a4f1755155796d2e2960a44b0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fe0685ee01a2e55710ac31a2345f660a882a4f1755155796d2e2960a44b0d7->enter($__internal_78fe0685ee01a2e55710ac31a2345f660a882a4f1755155796d2e2960a44b0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cda3654019144790e2d6ecc33691559c9307111390bf4114ea57edc683d3667e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda3654019144790e2d6ecc33691559c9307111390bf4114ea57edc683d3667e->enter($__internal_cda3654019144790e2d6ecc33691559c9307111390bf4114ea57edc683d3667e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cda3654019144790e2d6ecc33691559c9307111390bf4114ea57edc683d3667e->leave($__internal_cda3654019144790e2d6ecc33691559c9307111390bf4114ea57edc683d3667e_prof);

        
        $__internal_78fe0685ee01a2e55710ac31a2345f660a882a4f1755155796d2e2960a44b0d7->leave($__internal_78fe0685ee01a2e55710ac31a2345f660a882a4f1755155796d2e2960a44b0d7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80bd9f49083298a0be2751ee4bac44c9ec0c79a98f87721be5860c59e95ea48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80bd9f49083298a0be2751ee4bac44c9ec0c79a98f87721be5860c59e95ea48->enter($__internal_c80bd9f49083298a0be2751ee4bac44c9ec0c79a98f87721be5860c59e95ea48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff30c3be3140edb71bdfdfb4b98803ef1b28f569e3b421dcefa106692b10735e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff30c3be3140edb71bdfdfb4b98803ef1b28f569e3b421dcefa106692b10735e->enter($__internal_ff30c3be3140edb71bdfdfb4b98803ef1b28f569e3b421dcefa106692b10735e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ff30c3be3140edb71bdfdfb4b98803ef1b28f569e3b421dcefa106692b10735e->leave($__internal_ff30c3be3140edb71bdfdfb4b98803ef1b28f569e3b421dcefa106692b10735e_prof);

        
        $__internal_c80bd9f49083298a0be2751ee4bac44c9ec0c79a98f87721be5860c59e95ea48->leave($__internal_c80bd9f49083298a0be2751ee4bac44c9ec0c79a98f87721be5860c59e95ea48_prof);

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
