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
        $__internal_5c209ffebd559c12e238007180be8634da0feb02ce94bf2f35c8eb50735f3cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c209ffebd559c12e238007180be8634da0feb02ce94bf2f35c8eb50735f3cf7->enter($__internal_5c209ffebd559c12e238007180be8634da0feb02ce94bf2f35c8eb50735f3cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4a239367d4322cb9c6e88b86d7fd1dfeb55cbf96a46b185c7394694dde26b116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a239367d4322cb9c6e88b86d7fd1dfeb55cbf96a46b185c7394694dde26b116->enter($__internal_4a239367d4322cb9c6e88b86d7fd1dfeb55cbf96a46b185c7394694dde26b116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c209ffebd559c12e238007180be8634da0feb02ce94bf2f35c8eb50735f3cf7->leave($__internal_5c209ffebd559c12e238007180be8634da0feb02ce94bf2f35c8eb50735f3cf7_prof);

        
        $__internal_4a239367d4322cb9c6e88b86d7fd1dfeb55cbf96a46b185c7394694dde26b116->leave($__internal_4a239367d4322cb9c6e88b86d7fd1dfeb55cbf96a46b185c7394694dde26b116_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc737f1873c005097325191e9512c9b68d8a23b371773f60d020d498e51918ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc737f1873c005097325191e9512c9b68d8a23b371773f60d020d498e51918ef->enter($__internal_dc737f1873c005097325191e9512c9b68d8a23b371773f60d020d498e51918ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4d3663a91857579dde23e9c7a3b3b86fd15f843ce8e8534bc1f415177cbae34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d3663a91857579dde23e9c7a3b3b86fd15f843ce8e8534bc1f415177cbae34->enter($__internal_e4d3663a91857579dde23e9c7a3b3b86fd15f843ce8e8534bc1f415177cbae34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4d3663a91857579dde23e9c7a3b3b86fd15f843ce8e8534bc1f415177cbae34->leave($__internal_e4d3663a91857579dde23e9c7a3b3b86fd15f843ce8e8534bc1f415177cbae34_prof);

        
        $__internal_dc737f1873c005097325191e9512c9b68d8a23b371773f60d020d498e51918ef->leave($__internal_dc737f1873c005097325191e9512c9b68d8a23b371773f60d020d498e51918ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cedc84d2500e02357237e7caf16b4520da1ca7d4263ccffa739274ffb6f4c30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedc84d2500e02357237e7caf16b4520da1ca7d4263ccffa739274ffb6f4c30b->enter($__internal_cedc84d2500e02357237e7caf16b4520da1ca7d4263ccffa739274ffb6f4c30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3c195b775854d6498437ccc9ba40e1abe7494705f65585044f5356789bea945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c195b775854d6498437ccc9ba40e1abe7494705f65585044f5356789bea945->enter($__internal_e3c195b775854d6498437ccc9ba40e1abe7494705f65585044f5356789bea945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3c195b775854d6498437ccc9ba40e1abe7494705f65585044f5356789bea945->leave($__internal_e3c195b775854d6498437ccc9ba40e1abe7494705f65585044f5356789bea945_prof);

        
        $__internal_cedc84d2500e02357237e7caf16b4520da1ca7d4263ccffa739274ffb6f4c30b->leave($__internal_cedc84d2500e02357237e7caf16b4520da1ca7d4263ccffa739274ffb6f4c30b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7b0ffa30e85528dad3460704fa58c3f00c7551e2125bfea41e17eb1281606ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b0ffa30e85528dad3460704fa58c3f00c7551e2125bfea41e17eb1281606ca->enter($__internal_f7b0ffa30e85528dad3460704fa58c3f00c7551e2125bfea41e17eb1281606ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76a9bc5a131224193bb323cf7a1ed9313bd831cb5b482a9405e1634db07b2501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a9bc5a131224193bb323cf7a1ed9313bd831cb5b482a9405e1634db07b2501->enter($__internal_76a9bc5a131224193bb323cf7a1ed9313bd831cb5b482a9405e1634db07b2501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76a9bc5a131224193bb323cf7a1ed9313bd831cb5b482a9405e1634db07b2501->leave($__internal_76a9bc5a131224193bb323cf7a1ed9313bd831cb5b482a9405e1634db07b2501_prof);

        
        $__internal_f7b0ffa30e85528dad3460704fa58c3f00c7551e2125bfea41e17eb1281606ca->leave($__internal_f7b0ffa30e85528dad3460704fa58c3f00c7551e2125bfea41e17eb1281606ca_prof);

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
