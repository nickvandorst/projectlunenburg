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
        $__internal_2e652fa2fc2e8e92f5ef7d92c51eec5caf5d5bd584bd92c870bc7a7ec10a9a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e652fa2fc2e8e92f5ef7d92c51eec5caf5d5bd584bd92c870bc7a7ec10a9a75->enter($__internal_2e652fa2fc2e8e92f5ef7d92c51eec5caf5d5bd584bd92c870bc7a7ec10a9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f39fbdcd1b868082a30b088686253072062c4243919b83b9bb99e8ee144b3a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39fbdcd1b868082a30b088686253072062c4243919b83b9bb99e8ee144b3a74->enter($__internal_f39fbdcd1b868082a30b088686253072062c4243919b83b9bb99e8ee144b3a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e652fa2fc2e8e92f5ef7d92c51eec5caf5d5bd584bd92c870bc7a7ec10a9a75->leave($__internal_2e652fa2fc2e8e92f5ef7d92c51eec5caf5d5bd584bd92c870bc7a7ec10a9a75_prof);

        
        $__internal_f39fbdcd1b868082a30b088686253072062c4243919b83b9bb99e8ee144b3a74->leave($__internal_f39fbdcd1b868082a30b088686253072062c4243919b83b9bb99e8ee144b3a74_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5afea8a13bca63ed38f50b16859b0d568ecc5253609c271da2c93b3077f03308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5afea8a13bca63ed38f50b16859b0d568ecc5253609c271da2c93b3077f03308->enter($__internal_5afea8a13bca63ed38f50b16859b0d568ecc5253609c271da2c93b3077f03308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68fe8c4bd7ffe78732b8db277a1cc683a1da8e65f820064440fb1c368969356a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fe8c4bd7ffe78732b8db277a1cc683a1da8e65f820064440fb1c368969356a->enter($__internal_68fe8c4bd7ffe78732b8db277a1cc683a1da8e65f820064440fb1c368969356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68fe8c4bd7ffe78732b8db277a1cc683a1da8e65f820064440fb1c368969356a->leave($__internal_68fe8c4bd7ffe78732b8db277a1cc683a1da8e65f820064440fb1c368969356a_prof);

        
        $__internal_5afea8a13bca63ed38f50b16859b0d568ecc5253609c271da2c93b3077f03308->leave($__internal_5afea8a13bca63ed38f50b16859b0d568ecc5253609c271da2c93b3077f03308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c767d38277323416f03604a959c06a7670ece36e0dd02f9e2569b12c1d2421ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c767d38277323416f03604a959c06a7670ece36e0dd02f9e2569b12c1d2421ae->enter($__internal_c767d38277323416f03604a959c06a7670ece36e0dd02f9e2569b12c1d2421ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ef2e761da81ab8588527a65a9a58d798731726f4c9c9c0920b6e63d830103b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef2e761da81ab8588527a65a9a58d798731726f4c9c9c0920b6e63d830103b0->enter($__internal_2ef2e761da81ab8588527a65a9a58d798731726f4c9c9c0920b6e63d830103b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ef2e761da81ab8588527a65a9a58d798731726f4c9c9c0920b6e63d830103b0->leave($__internal_2ef2e761da81ab8588527a65a9a58d798731726f4c9c9c0920b6e63d830103b0_prof);

        
        $__internal_c767d38277323416f03604a959c06a7670ece36e0dd02f9e2569b12c1d2421ae->leave($__internal_c767d38277323416f03604a959c06a7670ece36e0dd02f9e2569b12c1d2421ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc249770f22a4b0bca40975a9ac0f157df77a7847b85688f3363bca00273c361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc249770f22a4b0bca40975a9ac0f157df77a7847b85688f3363bca00273c361->enter($__internal_cc249770f22a4b0bca40975a9ac0f157df77a7847b85688f3363bca00273c361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a44abd5927ed37846b3d65ba2b20a03e571c91037fbc5973b1886d14c3a84b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a44abd5927ed37846b3d65ba2b20a03e571c91037fbc5973b1886d14c3a84b0->enter($__internal_9a44abd5927ed37846b3d65ba2b20a03e571c91037fbc5973b1886d14c3a84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a44abd5927ed37846b3d65ba2b20a03e571c91037fbc5973b1886d14c3a84b0->leave($__internal_9a44abd5927ed37846b3d65ba2b20a03e571c91037fbc5973b1886d14c3a84b0_prof);

        
        $__internal_cc249770f22a4b0bca40975a9ac0f157df77a7847b85688f3363bca00273c361->leave($__internal_cc249770f22a4b0bca40975a9ac0f157df77a7847b85688f3363bca00273c361_prof);

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
