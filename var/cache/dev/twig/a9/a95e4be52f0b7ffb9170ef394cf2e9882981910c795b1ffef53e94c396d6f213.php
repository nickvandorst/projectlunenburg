<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_efdecb74904b06511a3f821bb5e9754088d48166303869348a7de7f83b241a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f8a21a17cc8d0ccb686e97ddffc711d172057593fe30af07aa9bd37a2fa7e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8a21a17cc8d0ccb686e97ddffc711d172057593fe30af07aa9bd37a2fa7e17->enter($__internal_3f8a21a17cc8d0ccb686e97ddffc711d172057593fe30af07aa9bd37a2fa7e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_91b02b4cd9516e5483b0c7770e6309689d6adf7a1f4c87901e6ca0fcb772d22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b02b4cd9516e5483b0c7770e6309689d6adf7a1f4c87901e6ca0fcb772d22f->enter($__internal_91b02b4cd9516e5483b0c7770e6309689d6adf7a1f4c87901e6ca0fcb772d22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8a21a17cc8d0ccb686e97ddffc711d172057593fe30af07aa9bd37a2fa7e17->leave($__internal_3f8a21a17cc8d0ccb686e97ddffc711d172057593fe30af07aa9bd37a2fa7e17_prof);

        
        $__internal_91b02b4cd9516e5483b0c7770e6309689d6adf7a1f4c87901e6ca0fcb772d22f->leave($__internal_91b02b4cd9516e5483b0c7770e6309689d6adf7a1f4c87901e6ca0fcb772d22f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90c8473a376bd8154fca2a765f8f56a1d79f5f1580e1317bbc58ee083efb8fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c8473a376bd8154fca2a765f8f56a1d79f5f1580e1317bbc58ee083efb8fd0->enter($__internal_90c8473a376bd8154fca2a765f8f56a1d79f5f1580e1317bbc58ee083efb8fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e7e9206ac4b3753972e1b75d652ab75acd0f153725253d4320429a78ee993afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e9206ac4b3753972e1b75d652ab75acd0f153725253d4320429a78ee993afc->enter($__internal_e7e9206ac4b3753972e1b75d652ab75acd0f153725253d4320429a78ee993afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e7e9206ac4b3753972e1b75d652ab75acd0f153725253d4320429a78ee993afc->leave($__internal_e7e9206ac4b3753972e1b75d652ab75acd0f153725253d4320429a78ee993afc_prof);

        
        $__internal_90c8473a376bd8154fca2a765f8f56a1d79f5f1580e1317bbc58ee083efb8fd0->leave($__internal_90c8473a376bd8154fca2a765f8f56a1d79f5f1580e1317bbc58ee083efb8fd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
