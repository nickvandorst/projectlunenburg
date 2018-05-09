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
        $__internal_d352edb127d03d66206d40024bad3924f04610869768b4403daa05f0ff595d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d352edb127d03d66206d40024bad3924f04610869768b4403daa05f0ff595d09->enter($__internal_d352edb127d03d66206d40024bad3924f04610869768b4403daa05f0ff595d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d103e3d998ac7f52f70dcf4606220b7b0541a1a7c14508b49f3237d18d02c132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d103e3d998ac7f52f70dcf4606220b7b0541a1a7c14508b49f3237d18d02c132->enter($__internal_d103e3d998ac7f52f70dcf4606220b7b0541a1a7c14508b49f3237d18d02c132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d352edb127d03d66206d40024bad3924f04610869768b4403daa05f0ff595d09->leave($__internal_d352edb127d03d66206d40024bad3924f04610869768b4403daa05f0ff595d09_prof);

        
        $__internal_d103e3d998ac7f52f70dcf4606220b7b0541a1a7c14508b49f3237d18d02c132->leave($__internal_d103e3d998ac7f52f70dcf4606220b7b0541a1a7c14508b49f3237d18d02c132_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c98f1594fbb7d3c36daf6b473abdc20b4eb07454e448ee4fd85a2a57ec694d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c98f1594fbb7d3c36daf6b473abdc20b4eb07454e448ee4fd85a2a57ec694d6->enter($__internal_4c98f1594fbb7d3c36daf6b473abdc20b4eb07454e448ee4fd85a2a57ec694d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92b2f47a9e4e14a0332eefec8ca892552f2b9d254b2960084213279940629d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b2f47a9e4e14a0332eefec8ca892552f2b9d254b2960084213279940629d43->enter($__internal_92b2f47a9e4e14a0332eefec8ca892552f2b9d254b2960084213279940629d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92b2f47a9e4e14a0332eefec8ca892552f2b9d254b2960084213279940629d43->leave($__internal_92b2f47a9e4e14a0332eefec8ca892552f2b9d254b2960084213279940629d43_prof);

        
        $__internal_4c98f1594fbb7d3c36daf6b473abdc20b4eb07454e448ee4fd85a2a57ec694d6->leave($__internal_4c98f1594fbb7d3c36daf6b473abdc20b4eb07454e448ee4fd85a2a57ec694d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_470a248ff864d7fd6a6cdd52f3150db4402cb8fff8b0c560e6c6055193cb1924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470a248ff864d7fd6a6cdd52f3150db4402cb8fff8b0c560e6c6055193cb1924->enter($__internal_470a248ff864d7fd6a6cdd52f3150db4402cb8fff8b0c560e6c6055193cb1924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa2187da5895443d7d74b1da780d1e29d5af69d10eb3512e54942e5e11c44573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2187da5895443d7d74b1da780d1e29d5af69d10eb3512e54942e5e11c44573->enter($__internal_aa2187da5895443d7d74b1da780d1e29d5af69d10eb3512e54942e5e11c44573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa2187da5895443d7d74b1da780d1e29d5af69d10eb3512e54942e5e11c44573->leave($__internal_aa2187da5895443d7d74b1da780d1e29d5af69d10eb3512e54942e5e11c44573_prof);

        
        $__internal_470a248ff864d7fd6a6cdd52f3150db4402cb8fff8b0c560e6c6055193cb1924->leave($__internal_470a248ff864d7fd6a6cdd52f3150db4402cb8fff8b0c560e6c6055193cb1924_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e70c05a98e0fb05a63099237cdf1d03e65cc5fdb4952c4710d1825a120cf220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e70c05a98e0fb05a63099237cdf1d03e65cc5fdb4952c4710d1825a120cf220->enter($__internal_7e70c05a98e0fb05a63099237cdf1d03e65cc5fdb4952c4710d1825a120cf220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_744467a883083d9e85f838664789688a179dd159414e9ed9295ed9f2cf8e0910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744467a883083d9e85f838664789688a179dd159414e9ed9295ed9f2cf8e0910->enter($__internal_744467a883083d9e85f838664789688a179dd159414e9ed9295ed9f2cf8e0910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_744467a883083d9e85f838664789688a179dd159414e9ed9295ed9f2cf8e0910->leave($__internal_744467a883083d9e85f838664789688a179dd159414e9ed9295ed9f2cf8e0910_prof);

        
        $__internal_7e70c05a98e0fb05a63099237cdf1d03e65cc5fdb4952c4710d1825a120cf220->leave($__internal_7e70c05a98e0fb05a63099237cdf1d03e65cc5fdb4952c4710d1825a120cf220_prof);

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
