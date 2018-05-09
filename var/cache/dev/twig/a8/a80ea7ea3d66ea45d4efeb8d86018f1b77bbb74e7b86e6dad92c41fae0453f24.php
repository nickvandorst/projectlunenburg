<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_37e4bc140bb5f6de54161beddd3d3b1e6e1e5507fa9f55f4528ac4fc0ddb30c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0f6bc8e55e0a8be615080d578dd6d6d84cd8399bac7e6ec73c3612b39c0bc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f6bc8e55e0a8be615080d578dd6d6d84cd8399bac7e6ec73c3612b39c0bc60->enter($__internal_c0f6bc8e55e0a8be615080d578dd6d6d84cd8399bac7e6ec73c3612b39c0bc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9f44b9565ac8a570a7e9f24fccef2203056dd03c9c757ba6f4d8d851b8d77658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f44b9565ac8a570a7e9f24fccef2203056dd03c9c757ba6f4d8d851b8d77658->enter($__internal_9f44b9565ac8a570a7e9f24fccef2203056dd03c9c757ba6f4d8d851b8d77658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f6bc8e55e0a8be615080d578dd6d6d84cd8399bac7e6ec73c3612b39c0bc60->leave($__internal_c0f6bc8e55e0a8be615080d578dd6d6d84cd8399bac7e6ec73c3612b39c0bc60_prof);

        
        $__internal_9f44b9565ac8a570a7e9f24fccef2203056dd03c9c757ba6f4d8d851b8d77658->leave($__internal_9f44b9565ac8a570a7e9f24fccef2203056dd03c9c757ba6f4d8d851b8d77658_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3639bef8c62f9204c6d333728ffa07d23400670566d2c20dfc5152ea399f4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3639bef8c62f9204c6d333728ffa07d23400670566d2c20dfc5152ea399f4e2->enter($__internal_f3639bef8c62f9204c6d333728ffa07d23400670566d2c20dfc5152ea399f4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_111eb377b7eef9690ecf399fe92e45d3f13389e19f6308c3d29f4bb85fb7693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111eb377b7eef9690ecf399fe92e45d3f13389e19f6308c3d29f4bb85fb7693d->enter($__internal_111eb377b7eef9690ecf399fe92e45d3f13389e19f6308c3d29f4bb85fb7693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_111eb377b7eef9690ecf399fe92e45d3f13389e19f6308c3d29f4bb85fb7693d->leave($__internal_111eb377b7eef9690ecf399fe92e45d3f13389e19f6308c3d29f4bb85fb7693d_prof);

        
        $__internal_f3639bef8c62f9204c6d333728ffa07d23400670566d2c20dfc5152ea399f4e2->leave($__internal_f3639bef8c62f9204c6d333728ffa07d23400670566d2c20dfc5152ea399f4e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4ecca1339f26577478f8a6851064dd27d36bc619dbc3aaf05f4bb153c66fdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ecca1339f26577478f8a6851064dd27d36bc619dbc3aaf05f4bb153c66fdbe->enter($__internal_b4ecca1339f26577478f8a6851064dd27d36bc619dbc3aaf05f4bb153c66fdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4928758e0999829417d5dd710b7dc296691511218d2044a08b6bcd1cac9faae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4928758e0999829417d5dd710b7dc296691511218d2044a08b6bcd1cac9faae5->enter($__internal_4928758e0999829417d5dd710b7dc296691511218d2044a08b6bcd1cac9faae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4928758e0999829417d5dd710b7dc296691511218d2044a08b6bcd1cac9faae5->leave($__internal_4928758e0999829417d5dd710b7dc296691511218d2044a08b6bcd1cac9faae5_prof);

        
        $__internal_b4ecca1339f26577478f8a6851064dd27d36bc619dbc3aaf05f4bb153c66fdbe->leave($__internal_b4ecca1339f26577478f8a6851064dd27d36bc619dbc3aaf05f4bb153c66fdbe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af5da87688725e06d8ff0fe590ce9b9b71481da05bd326b388744e0be3ae0575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5da87688725e06d8ff0fe590ce9b9b71481da05bd326b388744e0be3ae0575->enter($__internal_af5da87688725e06d8ff0fe590ce9b9b71481da05bd326b388744e0be3ae0575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cfa2d7014780a872f5a1149f37159ce575f86a4ac20b4d5d5884afd411dfdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfa2d7014780a872f5a1149f37159ce575f86a4ac20b4d5d5884afd411dfdf3->enter($__internal_6cfa2d7014780a872f5a1149f37159ce575f86a4ac20b4d5d5884afd411dfdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6cfa2d7014780a872f5a1149f37159ce575f86a4ac20b4d5d5884afd411dfdf3->leave($__internal_6cfa2d7014780a872f5a1149f37159ce575f86a4ac20b4d5d5884afd411dfdf3_prof);

        
        $__internal_af5da87688725e06d8ff0fe590ce9b9b71481da05bd326b388744e0be3ae0575->leave($__internal_af5da87688725e06d8ff0fe590ce9b9b71481da05bd326b388744e0be3ae0575_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
