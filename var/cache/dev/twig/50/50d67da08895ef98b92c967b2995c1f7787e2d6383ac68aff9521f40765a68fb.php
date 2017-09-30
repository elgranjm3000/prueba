<?php

/* PaginaPageBundle:Default:contact.html.twig */
class __TwigTemplate_fea527ced500304b92c85e21c298ac780dfe2e66f61eb1fb0c489fb32fab833d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.html.twig", "PaginaPageBundle:Default:contact.html.twig", 1);
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
        $__internal_dcfd4df0d564c2eef5eea61aeec27884f8505039590636d253b6b717e30e27b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfd4df0d564c2eef5eea61aeec27884f8505039590636d253b6b717e30e27b5->enter($__internal_dcfd4df0d564c2eef5eea61aeec27884f8505039590636d253b6b717e30e27b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PaginaPageBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcfd4df0d564c2eef5eea61aeec27884f8505039590636d253b6b717e30e27b5->leave($__internal_dcfd4df0d564c2eef5eea61aeec27884f8505039590636d253b6b717e30e27b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80c699fefe3371bb662de7b63ad4371e50e62300cb32e21139d031abd806da63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c699fefe3371bb662de7b63ad4371e50e62300cb32e21139d031abd806da63->enter($__internal_80c699fefe3371bb662de7b63ad4371e50e62300cb32e21139d031abd806da63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Contact
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_page_homepage");
        echo "\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class=\"row\">
        <!-- Map Column -->
        <div class=\"col-lg-8 mb-4\">
          <!-- Embedded Google Map -->
          <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed\"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class=\"col-lg-4 mb-4\">
          <h3>Contact Details</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title=\"Phone\">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title=\"Email\">E</abbr>:
            <a href=\"mailto:name@example.com\">name@example.com
            </a>
          </p>
          <p>
            <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class=\"row\">
        <div class=\"col-lg-8 mb-4\">
          <h3>Send us a Message</h3>
          <form name=\"sentMessage\" id=\"contactForm\" novalidate>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Full Name:</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                <p class=\"help-block\"></p>
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Phone Number:</label>
                <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Email Address:</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Message:</label>
                <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
              </div>
            </div>
            <div id=\"success\"></div>
            <!-- For success/fail messages -->
            <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
";
        
        $__internal_80c699fefe3371bb662de7b63ad4371e50e62300cb32e21139d031abd806da63->leave($__internal_80c699fefe3371bb662de7b63ad4371e50e62300cb32e21139d031abd806da63_prof);

    }

    public function getTemplateName()
    {
        return "PaginaPageBundle:Default:contact.html.twig";
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
      <h1 class=\"mt-4 mb-3\">Contact
        <small>Subheading</small>
      </h1>

      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"{{ path('pagina_page_homepage') }}\">Home</a>
        </li>
        <li class=\"breadcrumb-item active\">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class=\"row\">
        <!-- Map Column -->
        <div class=\"col-lg-8 mb-4\">
          <!-- Embedded Google Map -->
          <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed\"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class=\"col-lg-4 mb-4\">
          <h3>Contact Details</h3>
          <p>
            3481 Melrose Place
            <br>Beverly Hills, CA 90210
            <br>
          </p>
          <p>
            <abbr title=\"Phone\">P</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title=\"Email\">E</abbr>:
            <a href=\"mailto:name@example.com\">name@example.com
            </a>
          </p>
          <p>
            <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class=\"row\">
        <div class=\"col-lg-8 mb-4\">
          <h3>Send us a Message</h3>
          <form name=\"sentMessage\" id=\"contactForm\" novalidate>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Full Name:</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                <p class=\"help-block\"></p>
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Phone Number:</label>
                <input type=\"tel\" class=\"form-control\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Email Address:</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
              </div>
            </div>
            <div class=\"control-group form-group\">
              <div class=\"controls\">
                <label>Message:</label>
                <textarea rows=\"10\" cols=\"100\" class=\"form-control\" id=\"message\" required data-validation-required-message=\"Please enter your message\" maxlength=\"999\" style=\"resize:none\"></textarea>
              </div>
            </div>
            <div id=\"success\"></div>
            <!-- For success/fail messages -->
            <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
{% endblock %}", "PaginaPageBundle:Default:contact.html.twig", "/var/www/html/turmeropage/src/Pagina/PageBundle/Resources/views/Default/contact.html.twig");
    }
}
