<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_bb9ac298c2e1b800229ebc14e58c0ae0550cae76052ca03ef7df5c5aa8d63198 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_ddd429561b42e2d83ae9c716726015d7ade8aaf83c906b3c6020b2c0323d483f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd429561b42e2d83ae9c716726015d7ade8aaf83c906b3c6020b2c0323d483f->enter($__internal_ddd429561b42e2d83ae9c716726015d7ade8aaf83c906b3c6020b2c0323d483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_3c9dad9c0c82860207c4393f29eb4d59bd4ff37ae9b6c748c6ebd4f275ab8bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9dad9c0c82860207c4393f29eb4d59bd4ff37ae9b6c748c6ebd4f275ab8bb5->enter($__internal_3c9dad9c0c82860207c4393f29eb4d59bd4ff37ae9b6c748c6ebd4f275ab8bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_eb7065d74e1b17bcffcaa45243835302df5c3c756312584585f00b838266332e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7065d74e1b17bcffcaa45243835302df5c3c756312584585f00b838266332e->enter($__internal_eb7065d74e1b17bcffcaa45243835302df5c3c756312584585f00b838266332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_1cce7ad45a8a4cdae1b028363ee337949d961f5b60213e5810cbf3a13a65ea57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cce7ad45a8a4cdae1b028363ee337949d961f5b60213e5810cbf3a13a65ea57->enter($__internal_1cce7ad45a8a4cdae1b028363ee337949d961f5b60213e5810cbf3a13a65ea57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< HEAD
        $__internal_ddd429561b42e2d83ae9c716726015d7ade8aaf83c906b3c6020b2c0323d483f->leave($__internal_ddd429561b42e2d83ae9c716726015d7ade8aaf83c906b3c6020b2c0323d483f_prof);

        
        $__internal_3c9dad9c0c82860207c4393f29eb4d59bd4ff37ae9b6c748c6ebd4f275ab8bb5->leave($__internal_3c9dad9c0c82860207c4393f29eb4d59bd4ff37ae9b6c748c6ebd4f275ab8bb5_prof);
=======
        $__internal_eb7065d74e1b17bcffcaa45243835302df5c3c756312584585f00b838266332e->leave($__internal_eb7065d74e1b17bcffcaa45243835302df5c3c756312584585f00b838266332e_prof);

        
        $__internal_1cce7ad45a8a4cdae1b028363ee337949d961f5b60213e5810cbf3a13a65ea57->leave($__internal_1cce7ad45a8a4cdae1b028363ee337949d961f5b60213e5810cbf3a13a65ea57_prof);
>>>>>>> 65779e7a918d622a16361db4bb1ea28111dfdf8d

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "C:\\xampp\\htdocs\\projectlunenburg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
