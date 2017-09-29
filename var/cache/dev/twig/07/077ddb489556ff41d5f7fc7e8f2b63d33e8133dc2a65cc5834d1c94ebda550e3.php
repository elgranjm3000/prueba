<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23b79546110a031f23bedd7a4057abf310864a999ecf9bcdb8113006229b76f1 extends Twig_Template
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
        $__internal_ace52f0b83ad68486c24a2843c8d0260c561c5b2f40cd3c8ae392c71828c155e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace52f0b83ad68486c24a2843c8d0260c561c5b2f40cd3c8ae392c71828c155e->enter($__internal_ace52f0b83ad68486c24a2843c8d0260c561c5b2f40cd3c8ae392c71828c155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ace52f0b83ad68486c24a2843c8d0260c561c5b2f40cd3c8ae392c71828c155e->leave($__internal_ace52f0b83ad68486c24a2843c8d0260c561c5b2f40cd3c8ae392c71828c155e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_562bfefd90e7fd473eebd797b8ef38ff44d50efbb889b557007d269916bea644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562bfefd90e7fd473eebd797b8ef38ff44d50efbb889b557007d269916bea644->enter($__internal_562bfefd90e7fd473eebd797b8ef38ff44d50efbb889b557007d269916bea644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_562bfefd90e7fd473eebd797b8ef38ff44d50efbb889b557007d269916bea644->leave($__internal_562bfefd90e7fd473eebd797b8ef38ff44d50efbb889b557007d269916bea644_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_971877ff7a8f2236f72bd9bfc71ae0fe10bc29fc2f5c2d7cfcc61645644bcee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971877ff7a8f2236f72bd9bfc71ae0fe10bc29fc2f5c2d7cfcc61645644bcee8->enter($__internal_971877ff7a8f2236f72bd9bfc71ae0fe10bc29fc2f5c2d7cfcc61645644bcee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_971877ff7a8f2236f72bd9bfc71ae0fe10bc29fc2f5c2d7cfcc61645644bcee8->leave($__internal_971877ff7a8f2236f72bd9bfc71ae0fe10bc29fc2f5c2d7cfcc61645644bcee8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e38d50700622aeb5e69267a038281e56b05c59985b8d564daf29dbd96367a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e38d50700622aeb5e69267a038281e56b05c59985b8d564daf29dbd96367a3->enter($__internal_36e38d50700622aeb5e69267a038281e56b05c59985b8d564daf29dbd96367a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36e38d50700622aeb5e69267a038281e56b05c59985b8d564daf29dbd96367a3->leave($__internal_36e38d50700622aeb5e69267a038281e56b05c59985b8d564daf29dbd96367a3_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/turmeropage/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
