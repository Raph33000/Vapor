<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_f5f86f6206230f3b7da0ae2dc74da20c684783b4d0815b5703354f11d5b26c90 extends Twig_Template
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
        $__internal_cfd8656f255e404a36e7b483734c87aa1a187898382ca271cc1d49e5146d1513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd8656f255e404a36e7b483734c87aa1a187898382ca271cc1d49e5146d1513->enter($__internal_cfd8656f255e404a36e7b483734c87aa1a187898382ca271cc1d49e5146d1513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Default:index.html.twig"));

        $__internal_0ed9f526cea752a5e7e1772176358a5bf0e03ca1160a41d35e762991b67f8a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed9f526cea752a5e7e1772176358a5bf0e03ca1160a41d35e762991b67f8a69->enter($__internal_0ed9f526cea752a5e7e1772176358a5bf0e03ca1160a41d35e762991b67f8a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cfd8656f255e404a36e7b483734c87aa1a187898382ca271cc1d49e5146d1513->leave($__internal_cfd8656f255e404a36e7b483734c87aa1a187898382ca271cc1d49e5146d1513_prof);

        
        $__internal_0ed9f526cea752a5e7e1772176358a5bf0e03ca1160a41d35e762991b67f8a69->leave($__internal_0ed9f526cea752a5e7e1772176358a5bf0e03ca1160a41d35e762991b67f8a69_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AccueilBundle:Default:index.html.twig", "/home/raphael/boutique/Vapor/src/AccueilBundle/Resources/views/Default/index.html.twig");
    }
}
