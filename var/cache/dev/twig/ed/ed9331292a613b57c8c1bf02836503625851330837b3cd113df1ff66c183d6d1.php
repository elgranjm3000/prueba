<?php

/* PaginaPageBundle:Default:inicio.html.twig */
class __TwigTemplate_2d68114a6a6251885f95abadd373eeac05f8f1628c8886809b70650de3910194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "PaginaPageBundle:Default:inicio.html.twig", 1);
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
        $__internal_938e13190b8c730b39f75e4c277cb2f0e1cddffd0ed27965c273a82b5243788a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938e13190b8c730b39f75e4c277cb2f0e1cddffd0ed27965c273a82b5243788a->enter($__internal_938e13190b8c730b39f75e4c277cb2f0e1cddffd0ed27965c273a82b5243788a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginaPageBundle:Default:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_938e13190b8c730b39f75e4c277cb2f0e1cddffd0ed27965c273a82b5243788a->leave($__internal_938e13190b8c730b39f75e4c277cb2f0e1cddffd0ed27965c273a82b5243788a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b278dcfd26def816b917bb2df8a582e46311e727aeca8001e1030708891768a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b278dcfd26def816b917bb2df8a582e46311e727aeca8001e1030708891768a3->enter($__internal_b278dcfd26def816b917bb2df8a582e46311e727aeca8001e1030708891768a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

      <h1 class=\"my-4\">Welcome to Modern Business</h1>

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

      <!-- Portfolio Section -->
      <h2>Portfolio Heading</h2>

      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project One</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Two</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Three</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Four</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Five</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Six</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class=\"col-lg-6\">
          <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class=\"row mb-4\">
        <div class=\"col-md-8\">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class=\"col-md-4\">
          <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
        </div>
      </div>

    </div>
    <!-- /.container -->
";
        
        $__internal_b278dcfd26def816b917bb2df8a582e46311e727aeca8001e1030708891768a3->leave($__internal_b278dcfd26def816b917bb2df8a582e46311e727aeca8001e1030708891768a3_prof);

    }

    public function getTemplateName()
    {
        return "PaginaPageBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
   <header>
      <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class=\"carousel-item active\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

      <h1 class=\"my-4\">Welcome to Modern Business</h1>

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

      <!-- Portfolio Section -->
      <h2>Portfolio Heading</h2>

      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project One</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Two</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Three</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Four</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Five</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-6 portfolio-item\">
          <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
            <div class=\"card-body\">
              <h4 class=\"card-title\">
                <a href=\"#\">Project Six</a>
              </h4>
              <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class=\"col-lg-6\">
          <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class=\"row mb-4\">
        <div class=\"col-md-8\">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class=\"col-md-4\">
          <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
        </div>
      </div>

    </div>
    <!-- /.container -->
{% endblock %}", "PaginaPageBundle:Default:inicio.html.twig", "/var/www/html/turmeropage/src/Pagina/PageBundle/Resources/views/Default/inicio.html.twig");
    }
}
