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
        $__internal_3daeebb155b0ef4c1935a59408aecccb774b2b97fc512449e5bafc99d8ceee55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3daeebb155b0ef4c1935a59408aecccb774b2b97fc512449e5bafc99d8ceee55->enter($__internal_3daeebb155b0ef4c1935a59408aecccb774b2b97fc512449e5bafc99d8ceee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e97ad60435cd0c9fe06502e4c918cffd4e600ecee55f3cbaa9c7ec14b3fb771f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97ad60435cd0c9fe06502e4c918cffd4e600ecee55f3cbaa9c7ec14b3fb771f->enter($__internal_e97ad60435cd0c9fe06502e4c918cffd4e600ecee55f3cbaa9c7ec14b3fb771f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3daeebb155b0ef4c1935a59408aecccb774b2b97fc512449e5bafc99d8ceee55->leave($__internal_3daeebb155b0ef4c1935a59408aecccb774b2b97fc512449e5bafc99d8ceee55_prof);

        
        $__internal_e97ad60435cd0c9fe06502e4c918cffd4e600ecee55f3cbaa9c7ec14b3fb771f->leave($__internal_e97ad60435cd0c9fe06502e4c918cffd4e600ecee55f3cbaa9c7ec14b3fb771f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2de5feb81fbc43fc380c80ec24e586c0de3b95148192e397cc08c69d3968e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2de5feb81fbc43fc380c80ec24e586c0de3b95148192e397cc08c69d3968e45->enter($__internal_d2de5feb81fbc43fc380c80ec24e586c0de3b95148192e397cc08c69d3968e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7feb6e4860fc11f3d95fc5b4fc1ce07377484aa57f440ecc6e84516d60bbc982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7feb6e4860fc11f3d95fc5b4fc1ce07377484aa57f440ecc6e84516d60bbc982->enter($__internal_7feb6e4860fc11f3d95fc5b4fc1ce07377484aa57f440ecc6e84516d60bbc982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7feb6e4860fc11f3d95fc5b4fc1ce07377484aa57f440ecc6e84516d60bbc982->leave($__internal_7feb6e4860fc11f3d95fc5b4fc1ce07377484aa57f440ecc6e84516d60bbc982_prof);

        
        $__internal_d2de5feb81fbc43fc380c80ec24e586c0de3b95148192e397cc08c69d3968e45->leave($__internal_d2de5feb81fbc43fc380c80ec24e586c0de3b95148192e397cc08c69d3968e45_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4bf7788879bf75cb08b506d990aa72b10857868121e9ed2a6ea1500ceb1686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4bf7788879bf75cb08b506d990aa72b10857868121e9ed2a6ea1500ceb1686->enter($__internal_1b4bf7788879bf75cb08b506d990aa72b10857868121e9ed2a6ea1500ceb1686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dd5263c587dafadcf90ca2ceefcb562eaebfbfb1c138bc91bf1cde295b3a29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd5263c587dafadcf90ca2ceefcb562eaebfbfb1c138bc91bf1cde295b3a29c->enter($__internal_4dd5263c587dafadcf90ca2ceefcb562eaebfbfb1c138bc91bf1cde295b3a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4dd5263c587dafadcf90ca2ceefcb562eaebfbfb1c138bc91bf1cde295b3a29c->leave($__internal_4dd5263c587dafadcf90ca2ceefcb562eaebfbfb1c138bc91bf1cde295b3a29c_prof);

        
        $__internal_1b4bf7788879bf75cb08b506d990aa72b10857868121e9ed2a6ea1500ceb1686->leave($__internal_1b4bf7788879bf75cb08b506d990aa72b10857868121e9ed2a6ea1500ceb1686_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1a6d05d1da128b35e9e757ce0cc3080b3f8bb915d3240de1970958b5ca8c294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a6d05d1da128b35e9e757ce0cc3080b3f8bb915d3240de1970958b5ca8c294->enter($__internal_c1a6d05d1da128b35e9e757ce0cc3080b3f8bb915d3240de1970958b5ca8c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_422220e95970e45d61a83138435aef22bcff9035495522c674e40c2180db8745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422220e95970e45d61a83138435aef22bcff9035495522c674e40c2180db8745->enter($__internal_422220e95970e45d61a83138435aef22bcff9035495522c674e40c2180db8745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_422220e95970e45d61a83138435aef22bcff9035495522c674e40c2180db8745->leave($__internal_422220e95970e45d61a83138435aef22bcff9035495522c674e40c2180db8745_prof);

        
        $__internal_c1a6d05d1da128b35e9e757ce0cc3080b3f8bb915d3240de1970958b5ca8c294->leave($__internal_c1a6d05d1da128b35e9e757ce0cc3080b3f8bb915d3240de1970958b5ca8c294_prof);

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
