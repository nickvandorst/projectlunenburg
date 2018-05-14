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
        $__internal_d71c28c3950fa70ab666ccbbd6cf8de05dd5e9db1042d3a73c806671805f5ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71c28c3950fa70ab666ccbbd6cf8de05dd5e9db1042d3a73c806671805f5ab2->enter($__internal_d71c28c3950fa70ab666ccbbd6cf8de05dd5e9db1042d3a73c806671805f5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5196957d1922ad19f0c5192cb8325bf78f51d49b9d0f82a570ea3d2daceb4c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5196957d1922ad19f0c5192cb8325bf78f51d49b9d0f82a570ea3d2daceb4c2e->enter($__internal_5196957d1922ad19f0c5192cb8325bf78f51d49b9d0f82a570ea3d2daceb4c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71c28c3950fa70ab666ccbbd6cf8de05dd5e9db1042d3a73c806671805f5ab2->leave($__internal_d71c28c3950fa70ab666ccbbd6cf8de05dd5e9db1042d3a73c806671805f5ab2_prof);

        
        $__internal_5196957d1922ad19f0c5192cb8325bf78f51d49b9d0f82a570ea3d2daceb4c2e->leave($__internal_5196957d1922ad19f0c5192cb8325bf78f51d49b9d0f82a570ea3d2daceb4c2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06f4e0914c943f02dc507c4fadaa594577d4f740820e4b196cbfb9ab5ef4e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f4e0914c943f02dc507c4fadaa594577d4f740820e4b196cbfb9ab5ef4e3c7->enter($__internal_06f4e0914c943f02dc507c4fadaa594577d4f740820e4b196cbfb9ab5ef4e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_37380fb580115066f81fd1992ea028c4b7fb0987327e8776fd5a4dcffe7c14d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37380fb580115066f81fd1992ea028c4b7fb0987327e8776fd5a4dcffe7c14d1->enter($__internal_37380fb580115066f81fd1992ea028c4b7fb0987327e8776fd5a4dcffe7c14d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37380fb580115066f81fd1992ea028c4b7fb0987327e8776fd5a4dcffe7c14d1->leave($__internal_37380fb580115066f81fd1992ea028c4b7fb0987327e8776fd5a4dcffe7c14d1_prof);

        
        $__internal_06f4e0914c943f02dc507c4fadaa594577d4f740820e4b196cbfb9ab5ef4e3c7->leave($__internal_06f4e0914c943f02dc507c4fadaa594577d4f740820e4b196cbfb9ab5ef4e3c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9843f5c236d51fe9c1f3be0ec986e1496e8eebe7c667d82ae85c13727ff34013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9843f5c236d51fe9c1f3be0ec986e1496e8eebe7c667d82ae85c13727ff34013->enter($__internal_9843f5c236d51fe9c1f3be0ec986e1496e8eebe7c667d82ae85c13727ff34013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eec69dc7c76fdcc9e20cb49afc006fdb60fa9bc85f5d7eb47fd3f11496e275f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec69dc7c76fdcc9e20cb49afc006fdb60fa9bc85f5d7eb47fd3f11496e275f1->enter($__internal_eec69dc7c76fdcc9e20cb49afc006fdb60fa9bc85f5d7eb47fd3f11496e275f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eec69dc7c76fdcc9e20cb49afc006fdb60fa9bc85f5d7eb47fd3f11496e275f1->leave($__internal_eec69dc7c76fdcc9e20cb49afc006fdb60fa9bc85f5d7eb47fd3f11496e275f1_prof);

        
        $__internal_9843f5c236d51fe9c1f3be0ec986e1496e8eebe7c667d82ae85c13727ff34013->leave($__internal_9843f5c236d51fe9c1f3be0ec986e1496e8eebe7c667d82ae85c13727ff34013_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc00116bfd1eb24dbde1c24c7c1b0a84fa1e21b747dabc23426b7fb341b45764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc00116bfd1eb24dbde1c24c7c1b0a84fa1e21b747dabc23426b7fb341b45764->enter($__internal_cc00116bfd1eb24dbde1c24c7c1b0a84fa1e21b747dabc23426b7fb341b45764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_85110cb7e5ec7fc1c438ee848097158f42c169d6c9e3da37d6889b1a50674222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85110cb7e5ec7fc1c438ee848097158f42c169d6c9e3da37d6889b1a50674222->enter($__internal_85110cb7e5ec7fc1c438ee848097158f42c169d6c9e3da37d6889b1a50674222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85110cb7e5ec7fc1c438ee848097158f42c169d6c9e3da37d6889b1a50674222->leave($__internal_85110cb7e5ec7fc1c438ee848097158f42c169d6c9e3da37d6889b1a50674222_prof);

        
        $__internal_cc00116bfd1eb24dbde1c24c7c1b0a84fa1e21b747dabc23426b7fb341b45764->leave($__internal_cc00116bfd1eb24dbde1c24c7c1b0a84fa1e21b747dabc23426b7fb341b45764_prof);

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
