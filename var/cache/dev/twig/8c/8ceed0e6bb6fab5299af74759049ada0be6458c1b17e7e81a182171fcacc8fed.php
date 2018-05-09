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
        $__internal_80ea4fa53ed308dc1646b159c51958145389b41093744ebbba00d1137eb0b453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ea4fa53ed308dc1646b159c51958145389b41093744ebbba00d1137eb0b453->enter($__internal_80ea4fa53ed308dc1646b159c51958145389b41093744ebbba00d1137eb0b453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de8c29acfa17c07d2232edca47b38a90308b5aaab21fa32bf7d7f5257eb8fd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8c29acfa17c07d2232edca47b38a90308b5aaab21fa32bf7d7f5257eb8fd0e->enter($__internal_de8c29acfa17c07d2232edca47b38a90308b5aaab21fa32bf7d7f5257eb8fd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80ea4fa53ed308dc1646b159c51958145389b41093744ebbba00d1137eb0b453->leave($__internal_80ea4fa53ed308dc1646b159c51958145389b41093744ebbba00d1137eb0b453_prof);

        
        $__internal_de8c29acfa17c07d2232edca47b38a90308b5aaab21fa32bf7d7f5257eb8fd0e->leave($__internal_de8c29acfa17c07d2232edca47b38a90308b5aaab21fa32bf7d7f5257eb8fd0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6b03a997eb058946ce076089ffa6bf9a1425eed432f4fa3403c1d450d448469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b03a997eb058946ce076089ffa6bf9a1425eed432f4fa3403c1d450d448469->enter($__internal_c6b03a997eb058946ce076089ffa6bf9a1425eed432f4fa3403c1d450d448469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d07373288c21f9abc507dfa98b83c7c63c5a5e26037962b400767194d0ba764b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07373288c21f9abc507dfa98b83c7c63c5a5e26037962b400767194d0ba764b->enter($__internal_d07373288c21f9abc507dfa98b83c7c63c5a5e26037962b400767194d0ba764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d07373288c21f9abc507dfa98b83c7c63c5a5e26037962b400767194d0ba764b->leave($__internal_d07373288c21f9abc507dfa98b83c7c63c5a5e26037962b400767194d0ba764b_prof);

        
        $__internal_c6b03a997eb058946ce076089ffa6bf9a1425eed432f4fa3403c1d450d448469->leave($__internal_c6b03a997eb058946ce076089ffa6bf9a1425eed432f4fa3403c1d450d448469_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f89b18830069c96aec0efa5282a98e1ee455af5d1a8301fa52c1142519fa1ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89b18830069c96aec0efa5282a98e1ee455af5d1a8301fa52c1142519fa1ef6->enter($__internal_f89b18830069c96aec0efa5282a98e1ee455af5d1a8301fa52c1142519fa1ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7152027d4066c03dbfbfee89f2f44c957440dcd1eb430291df4a177abcc7a5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7152027d4066c03dbfbfee89f2f44c957440dcd1eb430291df4a177abcc7a5ec->enter($__internal_7152027d4066c03dbfbfee89f2f44c957440dcd1eb430291df4a177abcc7a5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7152027d4066c03dbfbfee89f2f44c957440dcd1eb430291df4a177abcc7a5ec->leave($__internal_7152027d4066c03dbfbfee89f2f44c957440dcd1eb430291df4a177abcc7a5ec_prof);

        
        $__internal_f89b18830069c96aec0efa5282a98e1ee455af5d1a8301fa52c1142519fa1ef6->leave($__internal_f89b18830069c96aec0efa5282a98e1ee455af5d1a8301fa52c1142519fa1ef6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc2e1aed1b6901506443d72b461098e330d46a05b9e27c96a782fb0963fc313f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2e1aed1b6901506443d72b461098e330d46a05b9e27c96a782fb0963fc313f->enter($__internal_bc2e1aed1b6901506443d72b461098e330d46a05b9e27c96a782fb0963fc313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7cf174d03a5fc61912c97a435ea21f35830c0ad8e653fa2e1545aecb88eff5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf174d03a5fc61912c97a435ea21f35830c0ad8e653fa2e1545aecb88eff5bb->enter($__internal_7cf174d03a5fc61912c97a435ea21f35830c0ad8e653fa2e1545aecb88eff5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7cf174d03a5fc61912c97a435ea21f35830c0ad8e653fa2e1545aecb88eff5bb->leave($__internal_7cf174d03a5fc61912c97a435ea21f35830c0ad8e653fa2e1545aecb88eff5bb_prof);

        
        $__internal_bc2e1aed1b6901506443d72b461098e330d46a05b9e27c96a782fb0963fc313f->leave($__internal_bc2e1aed1b6901506443d72b461098e330d46a05b9e27c96a782fb0963fc313f_prof);

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
