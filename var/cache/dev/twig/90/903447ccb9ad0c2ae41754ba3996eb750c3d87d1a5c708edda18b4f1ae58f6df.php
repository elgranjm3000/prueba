<?php

/* base.html.twig */
class __TwigTemplate_acd9560b58d5e3bfa1fe606731e56f7ef86413283de3de5a098081b33ff72e5e extends Twig_Template
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
        $__internal_dc373357eb0be17743acd67d7fcb2ae3b42ead14ec4a517d4f2cc9c0438c8eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc373357eb0be17743acd67d7fcb2ae3b42ead14ec4a517d4f2cc9c0438c8eb5->enter($__internal_dc373357eb0be17743acd67d7fcb2ae3b42ead14ec4a517d4f2cc9c0438c8eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
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
        
        $__internal_dc373357eb0be17743acd67d7fcb2ae3b42ead14ec4a517d4f2cc9c0438c8eb5->leave($__internal_dc373357eb0be17743acd67d7fcb2ae3b42ead14ec4a517d4f2cc9c0438c8eb5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2888869ffb06b35a9e39bb3ebb8d2b3ee2d2bdf4c832d63448cb0d5f3532c6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2888869ffb06b35a9e39bb3ebb8d2b3ee2d2bdf4c832d63448cb0d5f3532c6d6->enter($__internal_2888869ffb06b35a9e39bb3ebb8d2b3ee2d2bdf4c832d63448cb0d5f3532c6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2888869ffb06b35a9e39bb3ebb8d2b3ee2d2bdf4c832d63448cb0d5f3532c6d6->leave($__internal_2888869ffb06b35a9e39bb3ebb8d2b3ee2d2bdf4c832d63448cb0d5f3532c6d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8174894887203fe8dfe6d1e7391cdce5e2ac3f550065344456772b137786a030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8174894887203fe8dfe6d1e7391cdce5e2ac3f550065344456772b137786a030->enter($__internal_8174894887203fe8dfe6d1e7391cdce5e2ac3f550065344456772b137786a030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8174894887203fe8dfe6d1e7391cdce5e2ac3f550065344456772b137786a030->leave($__internal_8174894887203fe8dfe6d1e7391cdce5e2ac3f550065344456772b137786a030_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0482135d747683a796308d94eecb60d841602eb65e869c53881b20ac6d77762d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0482135d747683a796308d94eecb60d841602eb65e869c53881b20ac6d77762d->enter($__internal_0482135d747683a796308d94eecb60d841602eb65e869c53881b20ac6d77762d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0482135d747683a796308d94eecb60d841602eb65e869c53881b20ac6d77762d->leave($__internal_0482135d747683a796308d94eecb60d841602eb65e869c53881b20ac6d77762d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f50c301071c927e9dd9811034ca9cd5a7e369a4113bad5c640fb6d513760a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f50c301071c927e9dd9811034ca9cd5a7e369a4113bad5c640fb6d513760a3e->enter($__internal_3f50c301071c927e9dd9811034ca9cd5a7e369a4113bad5c640fb6d513760a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f50c301071c927e9dd9811034ca9cd5a7e369a4113bad5c640fb6d513760a3e->leave($__internal_3f50c301071c927e9dd9811034ca9cd5a7e369a4113bad5c640fb6d513760a3e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/turmeropage/app/Resources/views/base.html.twig");
    }
}
