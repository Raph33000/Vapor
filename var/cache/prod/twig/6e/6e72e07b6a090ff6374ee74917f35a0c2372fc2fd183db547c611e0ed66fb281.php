<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_34a6451f4df2cd5095a5da6859a81e8047a4f157ff841b42ff77fdff521f7034 extends Twig_Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "class", array()) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "type", array())) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText(twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["trace"] ?? null), "line", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  33 => 6,  29 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:trace.txt.twig", "/home/raphael/boutique/Vapor/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
