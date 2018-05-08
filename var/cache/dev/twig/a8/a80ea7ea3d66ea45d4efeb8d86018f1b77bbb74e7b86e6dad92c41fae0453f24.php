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
        $__internal_65e745672395a5e063205d3322a9c2694db1567fb0dfa5760b2290dda65df43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e745672395a5e063205d3322a9c2694db1567fb0dfa5760b2290dda65df43a->enter($__internal_65e745672395a5e063205d3322a9c2694db1567fb0dfa5760b2290dda65df43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0775749994f88f2754b1e8eb4fb70b08687f4b056813a1bb076957ec15639bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0775749994f88f2754b1e8eb4fb70b08687f4b056813a1bb076957ec15639bb0->enter($__internal_0775749994f88f2754b1e8eb4fb70b08687f4b056813a1bb076957ec15639bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e745672395a5e063205d3322a9c2694db1567fb0dfa5760b2290dda65df43a->leave($__internal_65e745672395a5e063205d3322a9c2694db1567fb0dfa5760b2290dda65df43a_prof);

        
        $__internal_0775749994f88f2754b1e8eb4fb70b08687f4b056813a1bb076957ec15639bb0->leave($__internal_0775749994f88f2754b1e8eb4fb70b08687f4b056813a1bb076957ec15639bb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1e9c4be24d85bfccd8999f3947f09c257268026f60c40f08b55b3b4f4a7c96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e9c4be24d85bfccd8999f3947f09c257268026f60c40f08b55b3b4f4a7c96b->enter($__internal_b1e9c4be24d85bfccd8999f3947f09c257268026f60c40f08b55b3b4f4a7c96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1296548ccf62759de46a5495106c159bf68007bb5b99398e74e2dc2fa4a784b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1296548ccf62759de46a5495106c159bf68007bb5b99398e74e2dc2fa4a784b->enter($__internal_d1296548ccf62759de46a5495106c159bf68007bb5b99398e74e2dc2fa4a784b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d1296548ccf62759de46a5495106c159bf68007bb5b99398e74e2dc2fa4a784b->leave($__internal_d1296548ccf62759de46a5495106c159bf68007bb5b99398e74e2dc2fa4a784b_prof);

        
        $__internal_b1e9c4be24d85bfccd8999f3947f09c257268026f60c40f08b55b3b4f4a7c96b->leave($__internal_b1e9c4be24d85bfccd8999f3947f09c257268026f60c40f08b55b3b4f4a7c96b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a18fdddce481a930ae514851f326434c75ad7bc46867980c58f1004ff338adec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18fdddce481a930ae514851f326434c75ad7bc46867980c58f1004ff338adec->enter($__internal_a18fdddce481a930ae514851f326434c75ad7bc46867980c58f1004ff338adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57389c6797b4490a6f525bbd5b3f28a387a7250abe391fdda384c2ad5cffa690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57389c6797b4490a6f525bbd5b3f28a387a7250abe391fdda384c2ad5cffa690->enter($__internal_57389c6797b4490a6f525bbd5b3f28a387a7250abe391fdda384c2ad5cffa690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_57389c6797b4490a6f525bbd5b3f28a387a7250abe391fdda384c2ad5cffa690->leave($__internal_57389c6797b4490a6f525bbd5b3f28a387a7250abe391fdda384c2ad5cffa690_prof);

        
        $__internal_a18fdddce481a930ae514851f326434c75ad7bc46867980c58f1004ff338adec->leave($__internal_a18fdddce481a930ae514851f326434c75ad7bc46867980c58f1004ff338adec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0d878b63ea9aa4b72c95c1d1693e8f4f305f28c9b1477e1eb76ebcf63d9c1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d878b63ea9aa4b72c95c1d1693e8f4f305f28c9b1477e1eb76ebcf63d9c1a1->enter($__internal_c0d878b63ea9aa4b72c95c1d1693e8f4f305f28c9b1477e1eb76ebcf63d9c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d85d6837cd51953c810ff25932fbc3bacc990b1fb3aa83b509deeb4b260849a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85d6837cd51953c810ff25932fbc3bacc990b1fb3aa83b509deeb4b260849a3->enter($__internal_d85d6837cd51953c810ff25932fbc3bacc990b1fb3aa83b509deeb4b260849a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d85d6837cd51953c810ff25932fbc3bacc990b1fb3aa83b509deeb4b260849a3->leave($__internal_d85d6837cd51953c810ff25932fbc3bacc990b1fb3aa83b509deeb4b260849a3_prof);

        
        $__internal_c0d878b63ea9aa4b72c95c1d1693e8f4f305f28c9b1477e1eb76ebcf63d9c1a1->leave($__internal_c0d878b63ea9aa4b72c95c1d1693e8f4f305f28c9b1477e1eb76ebcf63d9c1a1_prof);

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
