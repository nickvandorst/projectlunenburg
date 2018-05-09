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
        $__internal_79b431ddbc8de2b9b5ea100be91554de7e4a89ac62fa53e4765d8a6f45cb812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b431ddbc8de2b9b5ea100be91554de7e4a89ac62fa53e4765d8a6f45cb812f->enter($__internal_79b431ddbc8de2b9b5ea100be91554de7e4a89ac62fa53e4765d8a6f45cb812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b71125692741fcfaf9062f76b2f30d5f0db2b401cc2546e4c30aaee310b2f202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71125692741fcfaf9062f76b2f30d5f0db2b401cc2546e4c30aaee310b2f202->enter($__internal_b71125692741fcfaf9062f76b2f30d5f0db2b401cc2546e4c30aaee310b2f202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b431ddbc8de2b9b5ea100be91554de7e4a89ac62fa53e4765d8a6f45cb812f->leave($__internal_79b431ddbc8de2b9b5ea100be91554de7e4a89ac62fa53e4765d8a6f45cb812f_prof);

        
        $__internal_b71125692741fcfaf9062f76b2f30d5f0db2b401cc2546e4c30aaee310b2f202->leave($__internal_b71125692741fcfaf9062f76b2f30d5f0db2b401cc2546e4c30aaee310b2f202_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a45bc17a7b4033d7ba75a2db2afaefd320b0e10c94ef4f1d1da9847db7b2721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a45bc17a7b4033d7ba75a2db2afaefd320b0e10c94ef4f1d1da9847db7b2721->enter($__internal_9a45bc17a7b4033d7ba75a2db2afaefd320b0e10c94ef4f1d1da9847db7b2721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7561c453b65abf7f3519aae82d94d2f2f5439aae360a28cf1e7c8e1cc759aafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7561c453b65abf7f3519aae82d94d2f2f5439aae360a28cf1e7c8e1cc759aafa->enter($__internal_7561c453b65abf7f3519aae82d94d2f2f5439aae360a28cf1e7c8e1cc759aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7561c453b65abf7f3519aae82d94d2f2f5439aae360a28cf1e7c8e1cc759aafa->leave($__internal_7561c453b65abf7f3519aae82d94d2f2f5439aae360a28cf1e7c8e1cc759aafa_prof);

        
        $__internal_9a45bc17a7b4033d7ba75a2db2afaefd320b0e10c94ef4f1d1da9847db7b2721->leave($__internal_9a45bc17a7b4033d7ba75a2db2afaefd320b0e10c94ef4f1d1da9847db7b2721_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_429f6fe4b19692325ccff2a40d29d4b39de7b47067e55417f41167a7c1bc67ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429f6fe4b19692325ccff2a40d29d4b39de7b47067e55417f41167a7c1bc67ba->enter($__internal_429f6fe4b19692325ccff2a40d29d4b39de7b47067e55417f41167a7c1bc67ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f33f0454bf1fa1be72c6d318ba8a64962a498babb6093ac9233a85f0ac84ab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33f0454bf1fa1be72c6d318ba8a64962a498babb6093ac9233a85f0ac84ab83->enter($__internal_f33f0454bf1fa1be72c6d318ba8a64962a498babb6093ac9233a85f0ac84ab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f33f0454bf1fa1be72c6d318ba8a64962a498babb6093ac9233a85f0ac84ab83->leave($__internal_f33f0454bf1fa1be72c6d318ba8a64962a498babb6093ac9233a85f0ac84ab83_prof);

        
        $__internal_429f6fe4b19692325ccff2a40d29d4b39de7b47067e55417f41167a7c1bc67ba->leave($__internal_429f6fe4b19692325ccff2a40d29d4b39de7b47067e55417f41167a7c1bc67ba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f6db15a31bfff167c85c12eb298dc17705ecbfd4e4ad8b7190ea089d95ea9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6db15a31bfff167c85c12eb298dc17705ecbfd4e4ad8b7190ea089d95ea9e8->enter($__internal_3f6db15a31bfff167c85c12eb298dc17705ecbfd4e4ad8b7190ea089d95ea9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87b11e78b8bf47b5a6032613d87f2e25a6a83a37fcbe2cf1aace2d73b7682905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b11e78b8bf47b5a6032613d87f2e25a6a83a37fcbe2cf1aace2d73b7682905->enter($__internal_87b11e78b8bf47b5a6032613d87f2e25a6a83a37fcbe2cf1aace2d73b7682905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_87b11e78b8bf47b5a6032613d87f2e25a6a83a37fcbe2cf1aace2d73b7682905->leave($__internal_87b11e78b8bf47b5a6032613d87f2e25a6a83a37fcbe2cf1aace2d73b7682905_prof);

        
        $__internal_3f6db15a31bfff167c85c12eb298dc17705ecbfd4e4ad8b7190ea089d95ea9e8->leave($__internal_3f6db15a31bfff167c85c12eb298dc17705ecbfd4e4ad8b7190ea089d95ea9e8_prof);

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
