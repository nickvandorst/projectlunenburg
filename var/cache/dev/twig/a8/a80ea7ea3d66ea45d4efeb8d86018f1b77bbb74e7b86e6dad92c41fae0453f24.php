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
        $__internal_b14e39fc58a9450732aa7a39645d1b8c6319c59100701e151985c1ce16378290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14e39fc58a9450732aa7a39645d1b8c6319c59100701e151985c1ce16378290->enter($__internal_b14e39fc58a9450732aa7a39645d1b8c6319c59100701e151985c1ce16378290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9713958ac3494c796845a7d2079c0343229cdb7f5c3f3b19b555672d46a9a30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9713958ac3494c796845a7d2079c0343229cdb7f5c3f3b19b555672d46a9a30c->enter($__internal_9713958ac3494c796845a7d2079c0343229cdb7f5c3f3b19b555672d46a9a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14e39fc58a9450732aa7a39645d1b8c6319c59100701e151985c1ce16378290->leave($__internal_b14e39fc58a9450732aa7a39645d1b8c6319c59100701e151985c1ce16378290_prof);

        
        $__internal_9713958ac3494c796845a7d2079c0343229cdb7f5c3f3b19b555672d46a9a30c->leave($__internal_9713958ac3494c796845a7d2079c0343229cdb7f5c3f3b19b555672d46a9a30c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e57f19cfab0224eaad930cf8d5245db022e9d78d95182c07a86497cadc3181b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57f19cfab0224eaad930cf8d5245db022e9d78d95182c07a86497cadc3181b7->enter($__internal_e57f19cfab0224eaad930cf8d5245db022e9d78d95182c07a86497cadc3181b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d88b542f7b2cd0194d271501a053d4f098d781ee003094c6862d0227a1327bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88b542f7b2cd0194d271501a053d4f098d781ee003094c6862d0227a1327bd9->enter($__internal_d88b542f7b2cd0194d271501a053d4f098d781ee003094c6862d0227a1327bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d88b542f7b2cd0194d271501a053d4f098d781ee003094c6862d0227a1327bd9->leave($__internal_d88b542f7b2cd0194d271501a053d4f098d781ee003094c6862d0227a1327bd9_prof);

        
        $__internal_e57f19cfab0224eaad930cf8d5245db022e9d78d95182c07a86497cadc3181b7->leave($__internal_e57f19cfab0224eaad930cf8d5245db022e9d78d95182c07a86497cadc3181b7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d16cde3b4878ca1d9f18cf9b1f6f18b6650e54986222b46a61c7f0a36f4240c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d16cde3b4878ca1d9f18cf9b1f6f18b6650e54986222b46a61c7f0a36f4240c->enter($__internal_3d16cde3b4878ca1d9f18cf9b1f6f18b6650e54986222b46a61c7f0a36f4240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79a322120f7e65cb4ae99e850af01bd01acc1c929c37d4938040b93375516688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a322120f7e65cb4ae99e850af01bd01acc1c929c37d4938040b93375516688->enter($__internal_79a322120f7e65cb4ae99e850af01bd01acc1c929c37d4938040b93375516688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79a322120f7e65cb4ae99e850af01bd01acc1c929c37d4938040b93375516688->leave($__internal_79a322120f7e65cb4ae99e850af01bd01acc1c929c37d4938040b93375516688_prof);

        
        $__internal_3d16cde3b4878ca1d9f18cf9b1f6f18b6650e54986222b46a61c7f0a36f4240c->leave($__internal_3d16cde3b4878ca1d9f18cf9b1f6f18b6650e54986222b46a61c7f0a36f4240c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b06688aa00f032fd1225f0319948bf2f70103cb88c82bf86d740879e5c93f04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06688aa00f032fd1225f0319948bf2f70103cb88c82bf86d740879e5c93f04a->enter($__internal_b06688aa00f032fd1225f0319948bf2f70103cb88c82bf86d740879e5c93f04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75afdaf74419cf5913f47850a34a46e014064b57aa94c2f81116ce9f57228cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75afdaf74419cf5913f47850a34a46e014064b57aa94c2f81116ce9f57228cbe->enter($__internal_75afdaf74419cf5913f47850a34a46e014064b57aa94c2f81116ce9f57228cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_75afdaf74419cf5913f47850a34a46e014064b57aa94c2f81116ce9f57228cbe->leave($__internal_75afdaf74419cf5913f47850a34a46e014064b57aa94c2f81116ce9f57228cbe_prof);

        
        $__internal_b06688aa00f032fd1225f0319948bf2f70103cb88c82bf86d740879e5c93f04a->leave($__internal_b06688aa00f032fd1225f0319948bf2f70103cb88c82bf86d740879e5c93f04a_prof);

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
