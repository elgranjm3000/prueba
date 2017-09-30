<?php

/* template.html.twig */
class __TwigTemplate_c4f36ef84056bc64baaa46fcb1058f61e8f098f3a94a4c9a6a28d60f697b882e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31bdf530b1c594d58d3498bdf5b7446d01b3c6321c94ad5cfb5c6ef4a04e93c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bdf530b1c594d58d3498bdf5b7446d01b3c6321c94ad5cfb5c6ef4a04e93c5->enter($__internal_31bdf530b1c594d58d3498bdf5b7446d01b3c6321c94ad5cfb5c6ef4a04e93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Clinica Turmero</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_homepage");
        echo "\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_about");
        echo "\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_services");
        echo "\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_contacto");
        echo "\">Contact</a>
            </li>
          <!--
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Portfolio
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                <a class=\"dropdown-item\" href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"blog-home-1.html\">Blog Home 1</a>
                <a class=\"dropdown-item\" href=\"blog-home-2.html\">Blog Home 2</a>
                <a class=\"dropdown-item\" href=\"blog-post.html\">Blog Post</a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Other Pages
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
                <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
                <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
                <a class=\"dropdown-item\" href=\"404.html\">404</a>
                <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
              </div>
            </li>
-->

          </ul>
        </div>
      </div>
    </nav>
";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo " 

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  </body>

</html>
";
        
        $__internal_31bdf530b1c594d58d3498bdf5b7446d01b3c6321c94ad5cfb5c6ef4a04e93c5->leave($__internal_31bdf530b1c594d58d3498bdf5b7446d01b3c6321c94ad5cfb5c6ef4a04e93c5_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2df49176f6a578d629bd02650693f7e0d6ea25f0b41c4484ecc44137dfe81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2df49176f6a578d629bd02650693f7e0d6ea25f0b41c4484ecc44137dfe81f->enter($__internal_ca2df49176f6a578d629bd02650693f7e0d6ea25f0b41c4484ecc44137dfe81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "

";
        
        $__internal_ca2df49176f6a578d629bd02650693f7e0d6ea25f0b41c4484ecc44137dfe81f->leave($__internal_ca2df49176f6a578d629bd02650693f7e0d6ea25f0b41c4484ecc44137dfe81f_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 83,  160 => 82,  147 => 99,  143 => 98,  139 => 97,  126 => 86,  124 => 82,  78 => 39,  72 => 36,  66 => 33,  56 => 26,  44 => 17,  38 => 14,  23 => 1,);
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
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Clinica Turmero</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{ asset('css/modern-business.css') }}\" rel=\"stylesheet\">

  </head>

  <body>

    <!-- Navigation -->
    <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('pagina_page_homepage') }}\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('pagina_page_about') }}\">About</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('pagina_page_services') }}\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('pagina_page_contacto') }}\">Contact</a>
            </li>
          <!--
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Portfolio
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                <a class=\"dropdown-item\" href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                <a class=\"dropdown-item\" href=\"portfolio-item.html\">Single Portfolio Item</a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Blog
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"blog-home-1.html\">Blog Home 1</a>
                <a class=\"dropdown-item\" href=\"blog-home-2.html\">Blog Home 2</a>
                <a class=\"dropdown-item\" href=\"blog-post.html\">Blog Post</a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Other Pages
              </a>
              <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
                <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
                <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
                <a class=\"dropdown-item\" href=\"404.html\">404</a>
                <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
              </div>
            </li>
-->

          </ul>
        </div>
      </div>
    </nav>
{% block body %}


{% endblock %}
 

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/popper/popper.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

  </body>

</html>
", "template.html.twig", "/var/www/html/turmeropage/app/Resources/views/template.html.twig");
    }
}
