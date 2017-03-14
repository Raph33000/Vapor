<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9eeb70d7a56c5c406734843bfe1b668ceac436c6eb13aedb17372f1514973073 extends Twig_Template
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
        $__internal_c5c37415a5d91a3a478dc32af481a271211069117c75d19059b0a9b6a3445468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c37415a5d91a3a478dc32af481a271211069117c75d19059b0a9b6a3445468->enter($__internal_c5c37415a5d91a3a478dc32af481a271211069117c75d19059b0a9b6a3445468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f81630089440ec0413207ff6dd258bdf1bc94426b877f74372890844b4990046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81630089440ec0413207ff6dd258bdf1bc94426b877f74372890844b4990046->enter($__internal_f81630089440ec0413207ff6dd258bdf1bc94426b877f74372890844b4990046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c37415a5d91a3a478dc32af481a271211069117c75d19059b0a9b6a3445468->leave($__internal_c5c37415a5d91a3a478dc32af481a271211069117c75d19059b0a9b6a3445468_prof);

        
        $__internal_f81630089440ec0413207ff6dd258bdf1bc94426b877f74372890844b4990046->leave($__internal_f81630089440ec0413207ff6dd258bdf1bc94426b877f74372890844b4990046_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32d5160940f5de9e6d332880fb724f30b07f3a2f9c67b68f61bd4ee01b7a2e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d5160940f5de9e6d332880fb724f30b07f3a2f9c67b68f61bd4ee01b7a2e6f->enter($__internal_32d5160940f5de9e6d332880fb724f30b07f3a2f9c67b68f61bd4ee01b7a2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19f780d87e4bb76668ed2e6d255de636f677c6180d0c9b5da798790801ea9f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f780d87e4bb76668ed2e6d255de636f677c6180d0c9b5da798790801ea9f68->enter($__internal_19f780d87e4bb76668ed2e6d255de636f677c6180d0c9b5da798790801ea9f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19f780d87e4bb76668ed2e6d255de636f677c6180d0c9b5da798790801ea9f68->leave($__internal_19f780d87e4bb76668ed2e6d255de636f677c6180d0c9b5da798790801ea9f68_prof);

        
        $__internal_32d5160940f5de9e6d332880fb724f30b07f3a2f9c67b68f61bd4ee01b7a2e6f->leave($__internal_32d5160940f5de9e6d332880fb724f30b07f3a2f9c67b68f61bd4ee01b7a2e6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19e6835e39e84f6a17eed569d6c0dfca2ea8d9bc3066ea18af8be60561c4adbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e6835e39e84f6a17eed569d6c0dfca2ea8d9bc3066ea18af8be60561c4adbf->enter($__internal_19e6835e39e84f6a17eed569d6c0dfca2ea8d9bc3066ea18af8be60561c4adbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2de5fc68cf3c0d3ed8a55e82078615ba505757e4109f3f7d9a1817ee3ca6c453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de5fc68cf3c0d3ed8a55e82078615ba505757e4109f3f7d9a1817ee3ca6c453->enter($__internal_2de5fc68cf3c0d3ed8a55e82078615ba505757e4109f3f7d9a1817ee3ca6c453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2de5fc68cf3c0d3ed8a55e82078615ba505757e4109f3f7d9a1817ee3ca6c453->leave($__internal_2de5fc68cf3c0d3ed8a55e82078615ba505757e4109f3f7d9a1817ee3ca6c453_prof);

        
        $__internal_19e6835e39e84f6a17eed569d6c0dfca2ea8d9bc3066ea18af8be60561c4adbf->leave($__internal_19e6835e39e84f6a17eed569d6c0dfca2ea8d9bc3066ea18af8be60561c4adbf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9bfe4160bef1d083d04d12b5f6b36b15700cfdc5777b2f46752e253dcec6228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bfe4160bef1d083d04d12b5f6b36b15700cfdc5777b2f46752e253dcec6228->enter($__internal_c9bfe4160bef1d083d04d12b5f6b36b15700cfdc5777b2f46752e253dcec6228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_997cf0744247c0deb6a49b099ac6cf500caceda3f46c39f303b5b00cd4e7fe61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997cf0744247c0deb6a49b099ac6cf500caceda3f46c39f303b5b00cd4e7fe61->enter($__internal_997cf0744247c0deb6a49b099ac6cf500caceda3f46c39f303b5b00cd4e7fe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_997cf0744247c0deb6a49b099ac6cf500caceda3f46c39f303b5b00cd4e7fe61->leave($__internal_997cf0744247c0deb6a49b099ac6cf500caceda3f46c39f303b5b00cd4e7fe61_prof);

        
        $__internal_c9bfe4160bef1d083d04d12b5f6b36b15700cfdc5777b2f46752e253dcec6228->leave($__internal_c9bfe4160bef1d083d04d12b5f6b36b15700cfdc5777b2f46752e253dcec6228_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
