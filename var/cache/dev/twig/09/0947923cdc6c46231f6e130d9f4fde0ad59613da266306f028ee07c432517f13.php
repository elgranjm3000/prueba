<?php

/* PaginaPageBundle:Default:index.html.twig */
class __TwigTemplate_689e2ee251bb07db038333a7743efdee42a24d3281e4497fc75a44dcc3c51d5e extends Twig_Template
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
        $__internal_7d2212d43ab40ee8d849d57e69fbba6502f8ddab7a4ea6c76a8345405c85b5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2212d43ab40ee8d849d57e69fbba6502f8ddab7a4ea6c76a8345405c85b5a2->enter($__internal_7d2212d43ab40ee8d849d57e69fbba6502f8ddab7a4ea6c76a8345405c85b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginaPageBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7d2212d43ab40ee8d849d57e69fbba6502f8ddab7a4ea6c76a8345405c85b5a2->leave($__internal_7d2212d43ab40ee8d849d57e69fbba6502f8ddab7a4ea6c76a8345405c85b5a2_prof);

    }

    public function getTemplateName()
    {
        return "PaginaPageBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
", "PaginaPageBundle:Default:index.html.twig", "/var/www/html/turmeropage/src/Pagina/PageBundle/Resources/views/Default/index.html.twig");
    }
}
