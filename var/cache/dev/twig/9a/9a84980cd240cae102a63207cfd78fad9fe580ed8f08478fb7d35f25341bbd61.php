<?php

/* ::base.html.twig */
class __TwigTemplate_46a15c8922a7ff222241ce6a104aacc403ba2e367db90031a4300d96a8025138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30be242f0449920deb5df05fddb589f18d43ef39e5a8faec798026018d61ff34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30be242f0449920deb5df05fddb589f18d43ef39e5a8faec798026018d61ff34->enter($__internal_30be242f0449920deb5df05fddb589f18d43ef39e5a8faec798026018d61ff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8c7461a0b9f4c1cca491f79e18f73edf2d2609940d9863b12198057a7a1c0a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7461a0b9f4c1cca491f79e18f73edf2d2609940d9863b12198057a7a1c0a3f->enter($__internal_8c7461a0b9f4c1cca491f79e18f73edf2d2609940d9863b12198057a7a1c0a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_30be242f0449920deb5df05fddb589f18d43ef39e5a8faec798026018d61ff34->leave($__internal_30be242f0449920deb5df05fddb589f18d43ef39e5a8faec798026018d61ff34_prof);

        
        $__internal_8c7461a0b9f4c1cca491f79e18f73edf2d2609940d9863b12198057a7a1c0a3f->leave($__internal_8c7461a0b9f4c1cca491f79e18f73edf2d2609940d9863b12198057a7a1c0a3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c93447a568f9d7dd2e15cc2472a95facd22a215fc00a6b903ca0a1bf085265d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c93447a568f9d7dd2e15cc2472a95facd22a215fc00a6b903ca0a1bf085265d->enter($__internal_9c93447a568f9d7dd2e15cc2472a95facd22a215fc00a6b903ca0a1bf085265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06b8806e3fd4e43379f58e7b4c6cab0defdc1f44d688f4d5ae430489fb39f277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b8806e3fd4e43379f58e7b4c6cab0defdc1f44d688f4d5ae430489fb39f277->enter($__internal_06b8806e3fd4e43379f58e7b4c6cab0defdc1f44d688f4d5ae430489fb39f277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06b8806e3fd4e43379f58e7b4c6cab0defdc1f44d688f4d5ae430489fb39f277->leave($__internal_06b8806e3fd4e43379f58e7b4c6cab0defdc1f44d688f4d5ae430489fb39f277_prof);

        
        $__internal_9c93447a568f9d7dd2e15cc2472a95facd22a215fc00a6b903ca0a1bf085265d->leave($__internal_9c93447a568f9d7dd2e15cc2472a95facd22a215fc00a6b903ca0a1bf085265d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6d70eae2187d0439f60949bb7459753d1caaf112f58d91b69e1fd76ecafacc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d70eae2187d0439f60949bb7459753d1caaf112f58d91b69e1fd76ecafacc8->enter($__internal_b6d70eae2187d0439f60949bb7459753d1caaf112f58d91b69e1fd76ecafacc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_abe5a6f5e8b2cd6fc0ae3dd21d664ccd1423ff8de824c21406051b27936fbd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe5a6f5e8b2cd6fc0ae3dd21d664ccd1423ff8de824c21406051b27936fbd90->enter($__internal_abe5a6f5e8b2cd6fc0ae3dd21d664ccd1423ff8de824c21406051b27936fbd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_abe5a6f5e8b2cd6fc0ae3dd21d664ccd1423ff8de824c21406051b27936fbd90->leave($__internal_abe5a6f5e8b2cd6fc0ae3dd21d664ccd1423ff8de824c21406051b27936fbd90_prof);

        
        $__internal_b6d70eae2187d0439f60949bb7459753d1caaf112f58d91b69e1fd76ecafacc8->leave($__internal_b6d70eae2187d0439f60949bb7459753d1caaf112f58d91b69e1fd76ecafacc8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c745fe8ab3ca6c3852a2a0ffda286eea78da26f2b0bd7e1ea59c819e15dff495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c745fe8ab3ca6c3852a2a0ffda286eea78da26f2b0bd7e1ea59c819e15dff495->enter($__internal_c745fe8ab3ca6c3852a2a0ffda286eea78da26f2b0bd7e1ea59c819e15dff495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bec83cb336bc492c7205e319d6b571042f5703b39ea83de279eb1c0455263a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec83cb336bc492c7205e319d6b571042f5703b39ea83de279eb1c0455263a70->enter($__internal_bec83cb336bc492c7205e319d6b571042f5703b39ea83de279eb1c0455263a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bec83cb336bc492c7205e319d6b571042f5703b39ea83de279eb1c0455263a70->leave($__internal_bec83cb336bc492c7205e319d6b571042f5703b39ea83de279eb1c0455263a70_prof);

        
        $__internal_c745fe8ab3ca6c3852a2a0ffda286eea78da26f2b0bd7e1ea59c819e15dff495->leave($__internal_c745fe8ab3ca6c3852a2a0ffda286eea78da26f2b0bd7e1ea59c819e15dff495_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcf980f8d3282984bac399e56d59b5fc76cd2c32ffe63377d9c4b59b8eb30d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf980f8d3282984bac399e56d59b5fc76cd2c32ffe63377d9c4b59b8eb30d62->enter($__internal_dcf980f8d3282984bac399e56d59b5fc76cd2c32ffe63377d9c4b59b8eb30d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c7b2bfda531802613a14755ce2795479b84bc5d6e56f97dc15f8288e2ffd511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b2bfda531802613a14755ce2795479b84bc5d6e56f97dc15f8288e2ffd511d->enter($__internal_c7b2bfda531802613a14755ce2795479b84bc5d6e56f97dc15f8288e2ffd511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7b2bfda531802613a14755ce2795479b84bc5d6e56f97dc15f8288e2ffd511d->leave($__internal_c7b2bfda531802613a14755ce2795479b84bc5d6e56f97dc15f8288e2ffd511d_prof);

        
        $__internal_dcf980f8d3282984bac399e56d59b5fc76cd2c32ffe63377d9c4b59b8eb30d62->leave($__internal_dcf980f8d3282984bac399e56d59b5fc76cd2c32ffe63377d9c4b59b8eb30d62_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 11,  103 => 10,  86 => 6,  68 => 5,  56 => 12,  53 => 11,  51 => 10,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/raphael/boutique/Vapor/app/Resources/views/base.html.twig");
    }
}
