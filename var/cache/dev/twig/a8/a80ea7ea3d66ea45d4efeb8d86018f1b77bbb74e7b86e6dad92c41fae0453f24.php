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
        $__internal_f53212737fa4d1f7f586ac810dc7743192be21b56a26ceffc3aceda7d80f3b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53212737fa4d1f7f586ac810dc7743192be21b56a26ceffc3aceda7d80f3b80->enter($__internal_f53212737fa4d1f7f586ac810dc7743192be21b56a26ceffc3aceda7d80f3b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ac6fde5cc4e99c69a68494c2fad1d810c764dc15f1a4f50778de92130b01abf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6fde5cc4e99c69a68494c2fad1d810c764dc15f1a4f50778de92130b01abf3->enter($__internal_ac6fde5cc4e99c69a68494c2fad1d810c764dc15f1a4f50778de92130b01abf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f53212737fa4d1f7f586ac810dc7743192be21b56a26ceffc3aceda7d80f3b80->leave($__internal_f53212737fa4d1f7f586ac810dc7743192be21b56a26ceffc3aceda7d80f3b80_prof);

        
        $__internal_ac6fde5cc4e99c69a68494c2fad1d810c764dc15f1a4f50778de92130b01abf3->leave($__internal_ac6fde5cc4e99c69a68494c2fad1d810c764dc15f1a4f50778de92130b01abf3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76937e5d0a1a1677bffb076528471e5939390193dff6c54cb5ebe8189db4b165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76937e5d0a1a1677bffb076528471e5939390193dff6c54cb5ebe8189db4b165->enter($__internal_76937e5d0a1a1677bffb076528471e5939390193dff6c54cb5ebe8189db4b165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f23660ab82ff4ab5b96cb00eecc3d99eab1ecda26311754414317c201664d8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23660ab82ff4ab5b96cb00eecc3d99eab1ecda26311754414317c201664d8b3->enter($__internal_f23660ab82ff4ab5b96cb00eecc3d99eab1ecda26311754414317c201664d8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f23660ab82ff4ab5b96cb00eecc3d99eab1ecda26311754414317c201664d8b3->leave($__internal_f23660ab82ff4ab5b96cb00eecc3d99eab1ecda26311754414317c201664d8b3_prof);

        
        $__internal_76937e5d0a1a1677bffb076528471e5939390193dff6c54cb5ebe8189db4b165->leave($__internal_76937e5d0a1a1677bffb076528471e5939390193dff6c54cb5ebe8189db4b165_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e75902a6bb3408352f9af91f8b1ef691a963fe0f8517d326c7382bda779f0dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75902a6bb3408352f9af91f8b1ef691a963fe0f8517d326c7382bda779f0dd3->enter($__internal_e75902a6bb3408352f9af91f8b1ef691a963fe0f8517d326c7382bda779f0dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37af2c6406fce48ded0a3e13982b05ed705c982ea7a3afe98981c1b7ef5ff063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37af2c6406fce48ded0a3e13982b05ed705c982ea7a3afe98981c1b7ef5ff063->enter($__internal_37af2c6406fce48ded0a3e13982b05ed705c982ea7a3afe98981c1b7ef5ff063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_37af2c6406fce48ded0a3e13982b05ed705c982ea7a3afe98981c1b7ef5ff063->leave($__internal_37af2c6406fce48ded0a3e13982b05ed705c982ea7a3afe98981c1b7ef5ff063_prof);

        
        $__internal_e75902a6bb3408352f9af91f8b1ef691a963fe0f8517d326c7382bda779f0dd3->leave($__internal_e75902a6bb3408352f9af91f8b1ef691a963fe0f8517d326c7382bda779f0dd3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c37484574e0492b126ec9ffa4de8ee6b4a5339bb56d2585896e9a8c165475385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37484574e0492b126ec9ffa4de8ee6b4a5339bb56d2585896e9a8c165475385->enter($__internal_c37484574e0492b126ec9ffa4de8ee6b4a5339bb56d2585896e9a8c165475385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4461d1c672569f2547c46e9ee27c8e07cb918b36bf86bb8645dd2b3b9055960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4461d1c672569f2547c46e9ee27c8e07cb918b36bf86bb8645dd2b3b9055960->enter($__internal_e4461d1c672569f2547c46e9ee27c8e07cb918b36bf86bb8645dd2b3b9055960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e4461d1c672569f2547c46e9ee27c8e07cb918b36bf86bb8645dd2b3b9055960->leave($__internal_e4461d1c672569f2547c46e9ee27c8e07cb918b36bf86bb8645dd2b3b9055960_prof);

        
        $__internal_c37484574e0492b126ec9ffa4de8ee6b4a5339bb56d2585896e9a8c165475385->leave($__internal_c37484574e0492b126ec9ffa4de8ee6b4a5339bb56d2585896e9a8c165475385_prof);

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
