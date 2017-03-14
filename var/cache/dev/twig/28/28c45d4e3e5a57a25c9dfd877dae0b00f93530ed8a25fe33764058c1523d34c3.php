<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ff3633addd19d68f71cd343146cb1dd7310835e63f523512a2c106df228ddf2a extends Twig_Template
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
        $__internal_fb874b2820f6f6c4584bbe5daad0383094dc8e3c3eb66774a52d99fabc6d1e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb874b2820f6f6c4584bbe5daad0383094dc8e3c3eb66774a52d99fabc6d1e51->enter($__internal_fb874b2820f6f6c4584bbe5daad0383094dc8e3c3eb66774a52d99fabc6d1e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_12a0008da6af8338a81c786f93fe76c19e4e5cbd6556739aa2f92372a1bb6079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a0008da6af8338a81c786f93fe76c19e4e5cbd6556739aa2f92372a1bb6079->enter($__internal_12a0008da6af8338a81c786f93fe76c19e4e5cbd6556739aa2f92372a1bb6079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb874b2820f6f6c4584bbe5daad0383094dc8e3c3eb66774a52d99fabc6d1e51->leave($__internal_fb874b2820f6f6c4584bbe5daad0383094dc8e3c3eb66774a52d99fabc6d1e51_prof);

        
        $__internal_12a0008da6af8338a81c786f93fe76c19e4e5cbd6556739aa2f92372a1bb6079->leave($__internal_12a0008da6af8338a81c786f93fe76c19e4e5cbd6556739aa2f92372a1bb6079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d6c3787c5ea2b7c574f7b75184d3dfd7869cac2dc081f445cdfb125e4d27332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6c3787c5ea2b7c574f7b75184d3dfd7869cac2dc081f445cdfb125e4d27332->enter($__internal_4d6c3787c5ea2b7c574f7b75184d3dfd7869cac2dc081f445cdfb125e4d27332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_433b9a4b271ac82d48153c829b85f3325b28e820db3bd040fc4e0e98bd231ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433b9a4b271ac82d48153c829b85f3325b28e820db3bd040fc4e0e98bd231ac9->enter($__internal_433b9a4b271ac82d48153c829b85f3325b28e820db3bd040fc4e0e98bd231ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_433b9a4b271ac82d48153c829b85f3325b28e820db3bd040fc4e0e98bd231ac9->leave($__internal_433b9a4b271ac82d48153c829b85f3325b28e820db3bd040fc4e0e98bd231ac9_prof);

        
        $__internal_4d6c3787c5ea2b7c574f7b75184d3dfd7869cac2dc081f445cdfb125e4d27332->leave($__internal_4d6c3787c5ea2b7c574f7b75184d3dfd7869cac2dc081f445cdfb125e4d27332_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
