<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_eaadee272b327ba010f5b8444c7018db1e8c765a69df2eefb82cd379fa29fec2 extends Twig_Template
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
        $__internal_6936f6d2c227bdac8e107bbd5a44981f97bcd5aa4eb46dd3a912c0aa13880d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6936f6d2c227bdac8e107bbd5a44981f97bcd5aa4eb46dd3a912c0aa13880d39->enter($__internal_6936f6d2c227bdac8e107bbd5a44981f97bcd5aa4eb46dd3a912c0aa13880d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c7330d19158b3aa3fba608e341a35612a20d3e35ec11f24af120edc4fc07f144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7330d19158b3aa3fba608e341a35612a20d3e35ec11f24af120edc4fc07f144->enter($__internal_c7330d19158b3aa3fba608e341a35612a20d3e35ec11f24af120edc4fc07f144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
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
        
        $__internal_6936f6d2c227bdac8e107bbd5a44981f97bcd5aa4eb46dd3a912c0aa13880d39->leave($__internal_6936f6d2c227bdac8e107bbd5a44981f97bcd5aa4eb46dd3a912c0aa13880d39_prof);

        
        $__internal_c7330d19158b3aa3fba608e341a35612a20d3e35ec11f24af120edc4fc07f144->leave($__internal_c7330d19158b3aa3fba608e341a35612a20d3e35ec11f24af120edc4fc07f144_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
