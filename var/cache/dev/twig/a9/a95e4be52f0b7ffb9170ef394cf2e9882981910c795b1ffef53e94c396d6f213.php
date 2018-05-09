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
        $__internal_69ac7c551f76c8da99462d9d247217658b529677908f5a07ccf07d4db83c7bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ac7c551f76c8da99462d9d247217658b529677908f5a07ccf07d4db83c7bbd->enter($__internal_69ac7c551f76c8da99462d9d247217658b529677908f5a07ccf07d4db83c7bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7bad718edac5b16058e6cef49b2976de4aa3cc09ac29c22ab96d7eece195907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bad718edac5b16058e6cef49b2976de4aa3cc09ac29c22ab96d7eece195907d->enter($__internal_7bad718edac5b16058e6cef49b2976de4aa3cc09ac29c22ab96d7eece195907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69ac7c551f76c8da99462d9d247217658b529677908f5a07ccf07d4db83c7bbd->leave($__internal_69ac7c551f76c8da99462d9d247217658b529677908f5a07ccf07d4db83c7bbd_prof);

        
        $__internal_7bad718edac5b16058e6cef49b2976de4aa3cc09ac29c22ab96d7eece195907d->leave($__internal_7bad718edac5b16058e6cef49b2976de4aa3cc09ac29c22ab96d7eece195907d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30c0ce294827c33cd6fd54ef5adb74659994b901122fc00ae2928a55cddfba21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c0ce294827c33cd6fd54ef5adb74659994b901122fc00ae2928a55cddfba21->enter($__internal_30c0ce294827c33cd6fd54ef5adb74659994b901122fc00ae2928a55cddfba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d8cc240532c430ce5152beb05757ce5c8102d6f0f66bf035c481dff93fcdbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8cc240532c430ce5152beb05757ce5c8102d6f0f66bf035c481dff93fcdbf3->enter($__internal_8d8cc240532c430ce5152beb05757ce5c8102d6f0f66bf035c481dff93fcdbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8d8cc240532c430ce5152beb05757ce5c8102d6f0f66bf035c481dff93fcdbf3->leave($__internal_8d8cc240532c430ce5152beb05757ce5c8102d6f0f66bf035c481dff93fcdbf3_prof);

        
        $__internal_30c0ce294827c33cd6fd54ef5adb74659994b901122fc00ae2928a55cddfba21->leave($__internal_30c0ce294827c33cd6fd54ef5adb74659994b901122fc00ae2928a55cddfba21_prof);

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
