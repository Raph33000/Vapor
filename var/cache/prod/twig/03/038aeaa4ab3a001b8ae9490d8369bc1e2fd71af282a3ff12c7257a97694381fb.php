<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_1b22c0b949b6ae6c5e9e1d93f8b0737ff037ecee6e65f633d0dfc124b8e03349 extends Twig_Template
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
        echo "Hello world
";
    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:default:index.html.twig", "/home/raphael/boutique/Vapor/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
