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
        $__internal_b37c23a070f60d94fd25844b3957dcdc7d2f01a0f82439e574b78492347197aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37c23a070f60d94fd25844b3957dcdc7d2f01a0f82439e574b78492347197aa->enter($__internal_b37c23a070f60d94fd25844b3957dcdc7d2f01a0f82439e574b78492347197aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_008cc90c1f83df030d76debeee8aba2f8eb9a18eae71875ea36f528e40372e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008cc90c1f83df030d76debeee8aba2f8eb9a18eae71875ea36f528e40372e3f->enter($__internal_008cc90c1f83df030d76debeee8aba2f8eb9a18eae71875ea36f528e40372e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37c23a070f60d94fd25844b3957dcdc7d2f01a0f82439e574b78492347197aa->leave($__internal_b37c23a070f60d94fd25844b3957dcdc7d2f01a0f82439e574b78492347197aa_prof);

        
        $__internal_008cc90c1f83df030d76debeee8aba2f8eb9a18eae71875ea36f528e40372e3f->leave($__internal_008cc90c1f83df030d76debeee8aba2f8eb9a18eae71875ea36f528e40372e3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aeb5fb3e9babc81e726224ce43e018cf7f9f92788f4398d4b569b09386c2429c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb5fb3e9babc81e726224ce43e018cf7f9f92788f4398d4b569b09386c2429c->enter($__internal_aeb5fb3e9babc81e726224ce43e018cf7f9f92788f4398d4b569b09386c2429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a6d0af9019b45059449e749a82ed98ca26e37e3ae9e33aff7d937cbe95859d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6d0af9019b45059449e749a82ed98ca26e37e3ae9e33aff7d937cbe95859d9->enter($__internal_5a6d0af9019b45059449e749a82ed98ca26e37e3ae9e33aff7d937cbe95859d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a6d0af9019b45059449e749a82ed98ca26e37e3ae9e33aff7d937cbe95859d9->leave($__internal_5a6d0af9019b45059449e749a82ed98ca26e37e3ae9e33aff7d937cbe95859d9_prof);

        
        $__internal_aeb5fb3e9babc81e726224ce43e018cf7f9f92788f4398d4b569b09386c2429c->leave($__internal_aeb5fb3e9babc81e726224ce43e018cf7f9f92788f4398d4b569b09386c2429c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8735980684712237e942000630913e8dcae298d61cc20d6a52326a0f04df26cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8735980684712237e942000630913e8dcae298d61cc20d6a52326a0f04df26cc->enter($__internal_8735980684712237e942000630913e8dcae298d61cc20d6a52326a0f04df26cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aeccb546378e7edb36099a810dc5c450c09cb88cbb6b3c9cf21ca634a3b84808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeccb546378e7edb36099a810dc5c450c09cb88cbb6b3c9cf21ca634a3b84808->enter($__internal_aeccb546378e7edb36099a810dc5c450c09cb88cbb6b3c9cf21ca634a3b84808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_aeccb546378e7edb36099a810dc5c450c09cb88cbb6b3c9cf21ca634a3b84808->leave($__internal_aeccb546378e7edb36099a810dc5c450c09cb88cbb6b3c9cf21ca634a3b84808_prof);

        
        $__internal_8735980684712237e942000630913e8dcae298d61cc20d6a52326a0f04df26cc->leave($__internal_8735980684712237e942000630913e8dcae298d61cc20d6a52326a0f04df26cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b066bd916eebc2bea12bf7be55471760eb6a0945e84de0202f76cfed2652a6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b066bd916eebc2bea12bf7be55471760eb6a0945e84de0202f76cfed2652a6a5->enter($__internal_b066bd916eebc2bea12bf7be55471760eb6a0945e84de0202f76cfed2652a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9259c8089814722f60ce5da8c31f0b67794475b94af18717f4881ee25663c270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9259c8089814722f60ce5da8c31f0b67794475b94af18717f4881ee25663c270->enter($__internal_9259c8089814722f60ce5da8c31f0b67794475b94af18717f4881ee25663c270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9259c8089814722f60ce5da8c31f0b67794475b94af18717f4881ee25663c270->leave($__internal_9259c8089814722f60ce5da8c31f0b67794475b94af18717f4881ee25663c270_prof);

        
        $__internal_b066bd916eebc2bea12bf7be55471760eb6a0945e84de0202f76cfed2652a6a5->leave($__internal_b066bd916eebc2bea12bf7be55471760eb6a0945e84de0202f76cfed2652a6a5_prof);

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
