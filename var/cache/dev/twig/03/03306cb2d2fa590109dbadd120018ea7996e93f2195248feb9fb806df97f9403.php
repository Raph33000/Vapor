<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_020badee4068537d0e6824b2950a19b43460f4443f3fc000ed1fe4dd517952ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c97210adce942e313216f2826645b8634b25860f166ebb7e091fdcddd021f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c97210adce942e313216f2826645b8634b25860f166ebb7e091fdcddd021f9->enter($__internal_e6c97210adce942e313216f2826645b8634b25860f166ebb7e091fdcddd021f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_4f50d591b70d8f66e4e5cfcc40b627b9ea745457766cc6919fae5b1ff4f4d47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f50d591b70d8f66e4e5cfcc40b627b9ea745457766cc6919fae5b1ff4f4d47d->enter($__internal_4f50d591b70d8f66e4e5cfcc40b627b9ea745457766cc6919fae5b1ff4f4d47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c97210adce942e313216f2826645b8634b25860f166ebb7e091fdcddd021f9->leave($__internal_e6c97210adce942e313216f2826645b8634b25860f166ebb7e091fdcddd021f9_prof);

        
        $__internal_4f50d591b70d8f66e4e5cfcc40b627b9ea745457766cc6919fae5b1ff4f4d47d->leave($__internal_4f50d591b70d8f66e4e5cfcc40b627b9ea745457766cc6919fae5b1ff4f4d47d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc59256fd1ba8a9bddcdef9d85b7944857dc29f150b9c7fc4ad9c96e49312d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc59256fd1ba8a9bddcdef9d85b7944857dc29f150b9c7fc4ad9c96e49312d2b->enter($__internal_bc59256fd1ba8a9bddcdef9d85b7944857dc29f150b9c7fc4ad9c96e49312d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c8bd52945e95662149c032add999ff473eb0db0d048c1dd4f53ad1003f6eb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8bd52945e95662149c032add999ff473eb0db0d048c1dd4f53ad1003f6eb6a->enter($__internal_2c8bd52945e95662149c032add999ff473eb0db0d048c1dd4f53ad1003f6eb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1>User sucessfully created</h1>

";
        
        $__internal_2c8bd52945e95662149c032add999ff473eb0db0d048c1dd4f53ad1003f6eb6a->leave($__internal_2c8bd52945e95662149c032add999ff473eb0db0d048c1dd4f53ad1003f6eb6a_prof);

        
        $__internal_bc59256fd1ba8a9bddcdef9d85b7944857dc29f150b9c7fc4ad9c96e49312d2b->leave($__internal_bc59256fd1ba8a9bddcdef9d85b7944857dc29f150b9c7fc4ad9c96e49312d2b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}

\t<h1>User sucessfully created</h1>

{% endblock %}", "UserBundle:Default:index.html.twig", "/home/raphael/boutique/Vapor/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
