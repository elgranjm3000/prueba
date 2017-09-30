<?php

/* PaginaPageBundle:Default:services.html.twig */
class __TwigTemplate_8672a7f0a6e43b96d33a7ffb8054723b55aae53022fc1b90018de1eed4d88395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "PaginaPageBundle:Default:services.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a9c012c3a2f15b77de97fc80d81232197c06defe6a6b1edaf5c75ac210cfcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9c012c3a2f15b77de97fc80d81232197c06defe6a6b1edaf5c75ac210cfcae->enter($__internal_3a9c012c3a2f15b77de97fc80d81232197c06defe6a6b1edaf5c75ac210cfcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginaPageBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9c012c3a2f15b77de97fc80d81232197c06defe6a6b1edaf5c75ac210cfcae->leave($__internal_3a9c012c3a2f15b77de97fc80d81232197c06defe6a6b1edaf5c75ac210cfcae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1084151188db4fb19dd57ebf571777f93db7637f9e9ebec69b56572055a3777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1084151188db4fb19dd57ebf571777f93db7637f9e9ebec69b56572055a3777->enter($__internal_d1084151188db4fb19dd57ebf571777f93db7637f9e9ebec69b56572055a3777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Services
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_homepage");
        echo "\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">Services</li>
      </ol>

      <!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/1200x300\" alt=\"\">

      <!-- Marketing Icons Section -->
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

";
        
        $__internal_d1084151188db4fb19dd57ebf571777f93db7637f9e9ebec69b56572055a3777->leave($__internal_d1084151188db4fb19dd57ebf571777f93db7637f9e9ebec69b56572055a3777_prof);

    }

    public function getTemplateName()
    {
        return "PaginaPageBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.html.twig' %}

{% block body %}


    <!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Services
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('pagina_page_homepage') }}\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">Services</li>
      </ol>

      <!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/1200x300\" alt=\"\">

      <!-- Marketing Icons Section -->
      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100\">
            <h4 class=\"card-header\">Card Title</h4>
            <div class=\"card-body\">
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

{% endblock %}", "PaginaPageBundle:Default:services.html.twig", "/var/www/html/turmeropage/src/Pagina/PageBundle/Resources/views/Default/services.html.twig");
    }
}
