<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3086b3a3fa6d27cd3a73129205c0575e944cbea0026efb6eee3d3a5af5cfd18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76b8f99c11fd963d29161903b0f8dabfd047b4a656f8dbc9284fc6883c7635be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b8f99c11fd963d29161903b0f8dabfd047b4a656f8dbc9284fc6883c7635be->enter($__internal_76b8f99c11fd963d29161903b0f8dabfd047b4a656f8dbc9284fc6883c7635be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f98c3d5b180415780377588db9be33ecdeff9412d0a0c16134b645a1a6f9913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98c3d5b180415780377588db9be33ecdeff9412d0a0c16134b645a1a6f9913f->enter($__internal_f98c3d5b180415780377588db9be33ecdeff9412d0a0c16134b645a1a6f9913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_76b8f99c11fd963d29161903b0f8dabfd047b4a656f8dbc9284fc6883c7635be->leave($__internal_76b8f99c11fd963d29161903b0f8dabfd047b4a656f8dbc9284fc6883c7635be_prof);

        
        $__internal_f98c3d5b180415780377588db9be33ecdeff9412d0a0c16134b645a1a6f9913f->leave($__internal_f98c3d5b180415780377588db9be33ecdeff9412d0a0c16134b645a1a6f9913f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
