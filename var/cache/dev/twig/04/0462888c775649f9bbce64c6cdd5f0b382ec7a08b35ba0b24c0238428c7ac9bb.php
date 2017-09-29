<?php

/* PaginaPageBundle:Default:about.html.twig */
class __TwigTemplate_1a5a1a5e15854673e9362c03fd946e8da22e0aaa3027a4dbe90cecaa53f205a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "PaginaPageBundle:Default:about.html.twig", 1);
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
        $__internal_7088be2451e74681536cfb628ceaf9755c260d55794f1d5c6f07b30e64b0aa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7088be2451e74681536cfb628ceaf9755c260d55794f1d5c6f07b30e64b0aa37->enter($__internal_7088be2451e74681536cfb628ceaf9755c260d55794f1d5c6f07b30e64b0aa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginaPageBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7088be2451e74681536cfb628ceaf9755c260d55794f1d5c6f07b30e64b0aa37->leave($__internal_7088be2451e74681536cfb628ceaf9755c260d55794f1d5c6f07b30e64b0aa37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94b55f090269aa74292070429a639b3061dbf319419fc06ac71d48e14dc85b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b55f090269aa74292070429a639b3061dbf319419fc06ac71d48e14dc85b7d->enter($__internal_94b55f090269aa74292070429a639b3061dbf319419fc06ac71d48e14dc85b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">About
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_homepage");
        echo "\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">About</li>
      </ol>

      <!-- Intro Content -->
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/750x450\" alt=\"\">
        </div>
        <div class=\"col-lg-6\">
          <h2>About Modern Business</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Our Customers -->
      <h2>Our Customers</h2>
      <div class=\"row\">
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  ";
        
        $__internal_94b55f090269aa74292070429a639b3061dbf319419fc06ac71d48e14dc85b7d->leave($__internal_94b55f090269aa74292070429a639b3061dbf319419fc06ac71d48e14dc85b7d_prof);

    }

    public function getTemplateName()
    {
        return "PaginaPageBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
      <h1 class=\"mt-4 mb-3\">About
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('pagina_page_homepage') }}\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">About</li>
      </ol>

      <!-- Intro Content -->
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid rounded mb-4\" src=\"http://placehold.it/750x450\" alt=\"\">
        </div>
        <div class=\"col-lg-6\">
          <h2>About Modern Business</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Team Members -->
      <h2>Our Team</h2>

      <div class=\"row\">
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 mb-4\">
          <div class=\"card h-100 text-center\">
            <img class=\"card-img-top\" src=\"http://placehold.it/750x450\" alt=\"\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Team Member</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Position</h6>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
            </div>
            <div class=\"card-footer\">
              <a href=\"#\">name@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Our Customers -->
      <h2>Our Customers</h2>
      <div class=\"row\">
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
        <div class=\"col-lg-2 col-sm-4 mb-4\">
          <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  {% endblock %}", "PaginaPageBundle:Default:about.html.twig", "/var/www/html/turmeropage/src/Pagina/PageBundle/Resources/views/Default/about.html.twig");
    }
}
