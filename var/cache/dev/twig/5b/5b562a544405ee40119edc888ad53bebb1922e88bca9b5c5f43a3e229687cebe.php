<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7996af2fe733a47ee2faa0646b65277b206d199d81e6ab628b2de4666f12eb7a extends Twig_Template
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
        $__internal_3c7c7fddfaa0ec8e10d11a28bbd88af0fd3a8f172c3319f53f1916afb0661a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7c7fddfaa0ec8e10d11a28bbd88af0fd3a8f172c3319f53f1916afb0661a0e->enter($__internal_3c7c7fddfaa0ec8e10d11a28bbd88af0fd3a8f172c3319f53f1916afb0661a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b54a4b4d878ada5976f124897a95d9ba8f43e534c489f9215ce2e2042a2845ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54a4b4d878ada5976f124897a95d9ba8f43e534c489f9215ce2e2042a2845ba->enter($__internal_b54a4b4d878ada5976f124897a95d9ba8f43e534c489f9215ce2e2042a2845ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c7c7fddfaa0ec8e10d11a28bbd88af0fd3a8f172c3319f53f1916afb0661a0e->leave($__internal_3c7c7fddfaa0ec8e10d11a28bbd88af0fd3a8f172c3319f53f1916afb0661a0e_prof);

        
        $__internal_b54a4b4d878ada5976f124897a95d9ba8f43e534c489f9215ce2e2042a2845ba->leave($__internal_b54a4b4d878ada5976f124897a95d9ba8f43e534c489f9215ce2e2042a2845ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cda79d808095fcd0c66cb934364e4e1bd1c34d515b6024b03894df6056c4456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cda79d808095fcd0c66cb934364e4e1bd1c34d515b6024b03894df6056c4456->enter($__internal_4cda79d808095fcd0c66cb934364e4e1bd1c34d515b6024b03894df6056c4456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b79e5f4ad1d318ff7665de0b60161d8b5c90f43e308ce73dc8a10dd370ecdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b79e5f4ad1d318ff7665de0b60161d8b5c90f43e308ce73dc8a10dd370ecdd1->enter($__internal_2b79e5f4ad1d318ff7665de0b60161d8b5c90f43e308ce73dc8a10dd370ecdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b79e5f4ad1d318ff7665de0b60161d8b5c90f43e308ce73dc8a10dd370ecdd1->leave($__internal_2b79e5f4ad1d318ff7665de0b60161d8b5c90f43e308ce73dc8a10dd370ecdd1_prof);

        
        $__internal_4cda79d808095fcd0c66cb934364e4e1bd1c34d515b6024b03894df6056c4456->leave($__internal_4cda79d808095fcd0c66cb934364e4e1bd1c34d515b6024b03894df6056c4456_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fad2b7351a04b025db833dda54e4a0ec16084a98b4b2de81260c777ee96dbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fad2b7351a04b025db833dda54e4a0ec16084a98b4b2de81260c777ee96dbac->enter($__internal_4fad2b7351a04b025db833dda54e4a0ec16084a98b4b2de81260c777ee96dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_74a15ecd5168b0f78719982202a273f8e222e67b41ccd1f34adf6e2f2cb43862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a15ecd5168b0f78719982202a273f8e222e67b41ccd1f34adf6e2f2cb43862->enter($__internal_74a15ecd5168b0f78719982202a273f8e222e67b41ccd1f34adf6e2f2cb43862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74a15ecd5168b0f78719982202a273f8e222e67b41ccd1f34adf6e2f2cb43862->leave($__internal_74a15ecd5168b0f78719982202a273f8e222e67b41ccd1f34adf6e2f2cb43862_prof);

        
        $__internal_4fad2b7351a04b025db833dda54e4a0ec16084a98b4b2de81260c777ee96dbac->leave($__internal_4fad2b7351a04b025db833dda54e4a0ec16084a98b4b2de81260c777ee96dbac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef341ae6285b47aeafc319d346f7220711116da3a3b56bc61c2a088d808c8a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef341ae6285b47aeafc319d346f7220711116da3a3b56bc61c2a088d808c8a75->enter($__internal_ef341ae6285b47aeafc319d346f7220711116da3a3b56bc61c2a088d808c8a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3efd586073f4e282e74c6dfba2e05c1d856feeabd298cb55c77f03ba4609b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3efd586073f4e282e74c6dfba2e05c1d856feeabd298cb55c77f03ba4609b96->enter($__internal_e3efd586073f4e282e74c6dfba2e05c1d856feeabd298cb55c77f03ba4609b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e3efd586073f4e282e74c6dfba2e05c1d856feeabd298cb55c77f03ba4609b96->leave($__internal_e3efd586073f4e282e74c6dfba2e05c1d856feeabd298cb55c77f03ba4609b96_prof);

        
        $__internal_ef341ae6285b47aeafc319d346f7220711116da3a3b56bc61c2a088d808c8a75->leave($__internal_ef341ae6285b47aeafc319d346f7220711116da3a3b56bc61c2a088d808c8a75_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
