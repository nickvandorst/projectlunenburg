<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_349a62dbcfbab987d7e04e2af69849c788429dfc6cb418ad3db73d760a8e3e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_adb3a2b3beb588c1c12c982e5e79f7fc5dfcba53d27be7f5fd4b6e53da59d0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb3a2b3beb588c1c12c982e5e79f7fc5dfcba53d27be7f5fd4b6e53da59d0d5->enter($__internal_adb3a2b3beb588c1c12c982e5e79f7fc5dfcba53d27be7f5fd4b6e53da59d0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9e18ab6e36cf04d2aa84d1399269424aade0629a1dfe8de92eedf07cf82d4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e18ab6e36cf04d2aa84d1399269424aade0629a1dfe8de92eedf07cf82d4f6->enter($__internal_f9e18ab6e36cf04d2aa84d1399269424aade0629a1dfe8de92eedf07cf82d4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb3a2b3beb588c1c12c982e5e79f7fc5dfcba53d27be7f5fd4b6e53da59d0d5->leave($__internal_adb3a2b3beb588c1c12c982e5e79f7fc5dfcba53d27be7f5fd4b6e53da59d0d5_prof);

        
        $__internal_f9e18ab6e36cf04d2aa84d1399269424aade0629a1dfe8de92eedf07cf82d4f6->leave($__internal_f9e18ab6e36cf04d2aa84d1399269424aade0629a1dfe8de92eedf07cf82d4f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3cb3ee5a76cc6a8bd6cb7be664f4c45c964eec77be6cc217fab6f7d3858e7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cb3ee5a76cc6a8bd6cb7be664f4c45c964eec77be6cc217fab6f7d3858e7c7->enter($__internal_f3cb3ee5a76cc6a8bd6cb7be664f4c45c964eec77be6cc217fab6f7d3858e7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_206efdc6f4eea1c5dd1f8bd78ed462e066c0da6d67b89be4f990a05f580238d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206efdc6f4eea1c5dd1f8bd78ed462e066c0da6d67b89be4f990a05f580238d2->enter($__internal_206efdc6f4eea1c5dd1f8bd78ed462e066c0da6d67b89be4f990a05f580238d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_206efdc6f4eea1c5dd1f8bd78ed462e066c0da6d67b89be4f990a05f580238d2->leave($__internal_206efdc6f4eea1c5dd1f8bd78ed462e066c0da6d67b89be4f990a05f580238d2_prof);

        
        $__internal_f3cb3ee5a76cc6a8bd6cb7be664f4c45c964eec77be6cc217fab6f7d3858e7c7->leave($__internal_f3cb3ee5a76cc6a8bd6cb7be664f4c45c964eec77be6cc217fab6f7d3858e7c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5738afe45b351c89900abdcdf1be4bb7f60a85aa2def10c84203ee454bc56ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5738afe45b351c89900abdcdf1be4bb7f60a85aa2def10c84203ee454bc56ae->enter($__internal_c5738afe45b351c89900abdcdf1be4bb7f60a85aa2def10c84203ee454bc56ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01c3c19d9eb08dbffcaf9ab7e5eb2c43c7540bf2abd51edef4fcd541908c113d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c3c19d9eb08dbffcaf9ab7e5eb2c43c7540bf2abd51edef4fcd541908c113d->enter($__internal_01c3c19d9eb08dbffcaf9ab7e5eb2c43c7540bf2abd51edef4fcd541908c113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01c3c19d9eb08dbffcaf9ab7e5eb2c43c7540bf2abd51edef4fcd541908c113d->leave($__internal_01c3c19d9eb08dbffcaf9ab7e5eb2c43c7540bf2abd51edef4fcd541908c113d_prof);

        
        $__internal_c5738afe45b351c89900abdcdf1be4bb7f60a85aa2def10c84203ee454bc56ae->leave($__internal_c5738afe45b351c89900abdcdf1be4bb7f60a85aa2def10c84203ee454bc56ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1255559e32e62b2946262e2d70d81ffcab49c29aae255831c718fc3153a14698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1255559e32e62b2946262e2d70d81ffcab49c29aae255831c718fc3153a14698->enter($__internal_1255559e32e62b2946262e2d70d81ffcab49c29aae255831c718fc3153a14698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d9d471a97b43f446a5a5cfd7cc28a28e20b3d61672db73d072402328070f32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9d471a97b43f446a5a5cfd7cc28a28e20b3d61672db73d072402328070f32a->enter($__internal_7d9d471a97b43f446a5a5cfd7cc28a28e20b3d61672db73d072402328070f32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d9d471a97b43f446a5a5cfd7cc28a28e20b3d61672db73d072402328070f32a->leave($__internal_7d9d471a97b43f446a5a5cfd7cc28a28e20b3d61672db73d072402328070f32a_prof);

        
        $__internal_1255559e32e62b2946262e2d70d81ffcab49c29aae255831c718fc3153a14698->leave($__internal_1255559e32e62b2946262e2d70d81ffcab49c29aae255831c718fc3153a14698_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
