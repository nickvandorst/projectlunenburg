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
        $__internal_9a1a3a742c3dc4dd2f91cf18efe842dd608e79c38249a87ff666f23c6906f538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1a3a742c3dc4dd2f91cf18efe842dd608e79c38249a87ff666f23c6906f538->enter($__internal_9a1a3a742c3dc4dd2f91cf18efe842dd608e79c38249a87ff666f23c6906f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d9599e82f3262cdf78ccc29b4ec624dbc70470e7a976676956a73244bb65d2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9599e82f3262cdf78ccc29b4ec624dbc70470e7a976676956a73244bb65d2b3->enter($__internal_d9599e82f3262cdf78ccc29b4ec624dbc70470e7a976676956a73244bb65d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1a3a742c3dc4dd2f91cf18efe842dd608e79c38249a87ff666f23c6906f538->leave($__internal_9a1a3a742c3dc4dd2f91cf18efe842dd608e79c38249a87ff666f23c6906f538_prof);

        
        $__internal_d9599e82f3262cdf78ccc29b4ec624dbc70470e7a976676956a73244bb65d2b3->leave($__internal_d9599e82f3262cdf78ccc29b4ec624dbc70470e7a976676956a73244bb65d2b3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_164f6514e52b7e070b345d1ee631580c2bb96803f10e1e582cdda8d05b9b77ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164f6514e52b7e070b345d1ee631580c2bb96803f10e1e582cdda8d05b9b77ae->enter($__internal_164f6514e52b7e070b345d1ee631580c2bb96803f10e1e582cdda8d05b9b77ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_40edf6e361bfff1ac0da450011b9d6eeb781016d0ecb5b6e1d4818c0467b9f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40edf6e361bfff1ac0da450011b9d6eeb781016d0ecb5b6e1d4818c0467b9f30->enter($__internal_40edf6e361bfff1ac0da450011b9d6eeb781016d0ecb5b6e1d4818c0467b9f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_40edf6e361bfff1ac0da450011b9d6eeb781016d0ecb5b6e1d4818c0467b9f30->leave($__internal_40edf6e361bfff1ac0da450011b9d6eeb781016d0ecb5b6e1d4818c0467b9f30_prof);

        
        $__internal_164f6514e52b7e070b345d1ee631580c2bb96803f10e1e582cdda8d05b9b77ae->leave($__internal_164f6514e52b7e070b345d1ee631580c2bb96803f10e1e582cdda8d05b9b77ae_prof);

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
