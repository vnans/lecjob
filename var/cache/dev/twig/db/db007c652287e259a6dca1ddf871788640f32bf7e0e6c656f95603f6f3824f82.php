<?php

/* default/contact.html.twig */
class __TwigTemplate_4670a9cef5c9f39608aa64844ab09fef017689a3018240454a4c72cd8f546cfa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil--CJOB!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <!--==========================
      Contact Section
    ============================-->
    <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Contactez nous</h3>
        ";
        // line 15
        echo "        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
              <i class=\"ion-ios-location-outline\"></i>
              <h3>Adresse</h3>
              <address>Residence le Valerie,Cocody 2 plateaux-vallon,Cote d'Ivoire</address>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Téléphone</h3>
              <p><a href=\"tel:+155895548855\">+225 89 22 82 01</a></p>
              <p><a href=\"tel:+155895548855\">+225 89 22 43 22</a></p>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
              <i class=\"ion-ios-email-outline\"></i>
              <h3>Email</h3>
              <p><a href=\"mailto:info@example.com\">alcalis@alcalis.tech</a></p>
            </div>
          </div>

        </div>
         <div class=\"col-md-12\">
             <iframe class=\"col-md-12\" src=\"https://www.google.com/maps/d/embed?mid=1FfICRDuhYh6oBQAaruB8CNg8kR5aUZRi\" width=\"640\" height=\"480\"></iframe>
          </div>
        

      </div>
    </section><!-- #contact -->
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'base.html.twig' %}

{% block title %}Accueil--CJOB!{% endblock %}

{% block body %}
 <!--==========================
      Contact Section
    ============================-->
    <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Contactez nous</h3>
        {#   <p></p> #}
        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
              <i class=\"ion-ios-location-outline\"></i>
              <h3>Adresse</h3>
              <address>Residence le Valerie,Cocody 2 plateaux-vallon,Cote d'Ivoire</address>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Téléphone</h3>
              <p><a href=\"tel:+155895548855\">+225 89 22 82 01</a></p>
              <p><a href=\"tel:+155895548855\">+225 89 22 43 22</a></p>
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
              <i class=\"ion-ios-email-outline\"></i>
              <h3>Email</h3>
              <p><a href=\"mailto:info@example.com\">alcalis@alcalis.tech</a></p>
            </div>
          </div>

        </div>
         <div class=\"col-md-12\">
             <iframe class=\"col-md-12\" src=\"https://www.google.com/maps/d/embed?mid=1FfICRDuhYh6oBQAaruB8CNg8kR5aUZRi\" width=\"640\" height=\"480\"></iframe>
          </div>
        

      </div>
    </section><!-- #contact -->
  {% endblock %} ", "default/contact.html.twig", "/var/www/lecjob/templates/default/contact.html.twig");
    }
}
