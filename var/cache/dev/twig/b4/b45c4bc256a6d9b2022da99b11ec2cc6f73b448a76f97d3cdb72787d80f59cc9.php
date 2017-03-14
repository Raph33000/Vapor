<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7dde696fc41b62a9fe087956448c1aac6099364a26be8aaeac0fba03336cdd55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6299b18f9a75816509434958f412f7407d4cf414af0074f8e59337e818d1d31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6299b18f9a75816509434958f412f7407d4cf414af0074f8e59337e818d1d31e->enter($__internal_6299b18f9a75816509434958f412f7407d4cf414af0074f8e59337e818d1d31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_757e5f7f132cdf1b5a1a57ca0a9ac9ad0e9ca9f26882df0fcae7d3b4683741ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757e5f7f132cdf1b5a1a57ca0a9ac9ad0e9ca9f26882df0fcae7d3b4683741ef->enter($__internal_757e5f7f132cdf1b5a1a57ca0a9ac9ad0e9ca9f26882df0fcae7d3b4683741ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6299b18f9a75816509434958f412f7407d4cf414af0074f8e59337e818d1d31e->leave($__internal_6299b18f9a75816509434958f412f7407d4cf414af0074f8e59337e818d1d31e_prof);

        
        $__internal_757e5f7f132cdf1b5a1a57ca0a9ac9ad0e9ca9f26882df0fcae7d3b4683741ef->leave($__internal_757e5f7f132cdf1b5a1a57ca0a9ac9ad0e9ca9f26882df0fcae7d3b4683741ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e67c5fcce50919d7b75c61b5d717f9c85b7bf6798e0997b276e21eb93425a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e67c5fcce50919d7b75c61b5d717f9c85b7bf6798e0997b276e21eb93425a25->enter($__internal_3e67c5fcce50919d7b75c61b5d717f9c85b7bf6798e0997b276e21eb93425a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a4520388231f0b57c44a10fe233d65ec30261d4cd343b8d6bcadc0f0899d67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4520388231f0b57c44a10fe233d65ec30261d4cd343b8d6bcadc0f0899d67b->enter($__internal_0a4520388231f0b57c44a10fe233d65ec30261d4cd343b8d6bcadc0f0899d67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0a4520388231f0b57c44a10fe233d65ec30261d4cd343b8d6bcadc0f0899d67b->leave($__internal_0a4520388231f0b57c44a10fe233d65ec30261d4cd343b8d6bcadc0f0899d67b_prof);

        
        $__internal_3e67c5fcce50919d7b75c61b5d717f9c85b7bf6798e0997b276e21eb93425a25->leave($__internal_3e67c5fcce50919d7b75c61b5d717f9c85b7bf6798e0997b276e21eb93425a25_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff256d4a92e5ba9f21d930fd755d5d5fe8c8caec2ef1061dd6712048c0d0af31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff256d4a92e5ba9f21d930fd755d5d5fe8c8caec2ef1061dd6712048c0d0af31->enter($__internal_ff256d4a92e5ba9f21d930fd755d5d5fe8c8caec2ef1061dd6712048c0d0af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ad5bfc659a874015fb6731eec8ac456deba42fe6afb545eda6abd42dc65ee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad5bfc659a874015fb6731eec8ac456deba42fe6afb545eda6abd42dc65ee2d->enter($__internal_5ad5bfc659a874015fb6731eec8ac456deba42fe6afb545eda6abd42dc65ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5ad5bfc659a874015fb6731eec8ac456deba42fe6afb545eda6abd42dc65ee2d->leave($__internal_5ad5bfc659a874015fb6731eec8ac456deba42fe6afb545eda6abd42dc65ee2d_prof);

        
        $__internal_ff256d4a92e5ba9f21d930fd755d5d5fe8c8caec2ef1061dd6712048c0d0af31->leave($__internal_ff256d4a92e5ba9f21d930fd755d5d5fe8c8caec2ef1061dd6712048c0d0af31_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_994963e436930baa6fe2f4e9a1f5fca9932eaf44a651fc43264c783828e17d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994963e436930baa6fe2f4e9a1f5fca9932eaf44a651fc43264c783828e17d05->enter($__internal_994963e436930baa6fe2f4e9a1f5fca9932eaf44a651fc43264c783828e17d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0018d89371c70adcdc430579a77e5f98ab9642fee224ae1140a27b897d0ab25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0018d89371c70adcdc430579a77e5f98ab9642fee224ae1140a27b897d0ab25f->enter($__internal_0018d89371c70adcdc430579a77e5f98ab9642fee224ae1140a27b897d0ab25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0018d89371c70adcdc430579a77e5f98ab9642fee224ae1140a27b897d0ab25f->leave($__internal_0018d89371c70adcdc430579a77e5f98ab9642fee224ae1140a27b897d0ab25f_prof);

        
        $__internal_994963e436930baa6fe2f4e9a1f5fca9932eaf44a651fc43264c783828e17d05->leave($__internal_994963e436930baa6fe2f4e9a1f5fca9932eaf44a651fc43264c783828e17d05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
