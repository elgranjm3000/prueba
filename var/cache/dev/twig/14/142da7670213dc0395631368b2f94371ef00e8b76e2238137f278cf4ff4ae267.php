<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c21e6ca17fc0a094bf1a3bf4acdb822d74e1f7d4cbc5375b2d16d1e54e55063f extends Twig_Template
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
        $__internal_e80550b65972e32afbb90eef2001ce30bf469f9cad18a38c109e25633d088849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80550b65972e32afbb90eef2001ce30bf469f9cad18a38c109e25633d088849->enter($__internal_e80550b65972e32afbb90eef2001ce30bf469f9cad18a38c109e25633d088849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80550b65972e32afbb90eef2001ce30bf469f9cad18a38c109e25633d088849->leave($__internal_e80550b65972e32afbb90eef2001ce30bf469f9cad18a38c109e25633d088849_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ab3918fe89361e7f9b0dc6676d6f1f7ced493717fff87b80dffd8d140529f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab3918fe89361e7f9b0dc6676d6f1f7ced493717fff87b80dffd8d140529f45->enter($__internal_1ab3918fe89361e7f9b0dc6676d6f1f7ced493717fff87b80dffd8d140529f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ab3918fe89361e7f9b0dc6676d6f1f7ced493717fff87b80dffd8d140529f45->leave($__internal_1ab3918fe89361e7f9b0dc6676d6f1f7ced493717fff87b80dffd8d140529f45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88f76f1adbd4a4cc4013a03ebceb54a23e4fc041cc18c5e9e22fe42cb7f1fa98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f76f1adbd4a4cc4013a03ebceb54a23e4fc041cc18c5e9e22fe42cb7f1fa98->enter($__internal_88f76f1adbd4a4cc4013a03ebceb54a23e4fc041cc18c5e9e22fe42cb7f1fa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88f76f1adbd4a4cc4013a03ebceb54a23e4fc041cc18c5e9e22fe42cb7f1fa98->leave($__internal_88f76f1adbd4a4cc4013a03ebceb54a23e4fc041cc18c5e9e22fe42cb7f1fa98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f50477e5ffe7d562512214590bfdcec137a5416dfae02b6d532beaf670cc2ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50477e5ffe7d562512214590bfdcec137a5416dfae02b6d532beaf670cc2ed6->enter($__internal_f50477e5ffe7d562512214590bfdcec137a5416dfae02b6d532beaf670cc2ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f50477e5ffe7d562512214590bfdcec137a5416dfae02b6d532beaf670cc2ed6->leave($__internal_f50477e5ffe7d562512214590bfdcec137a5416dfae02b6d532beaf670cc2ed6_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/turmeropage/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
