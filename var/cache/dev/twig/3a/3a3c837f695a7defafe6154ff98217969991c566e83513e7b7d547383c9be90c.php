<?php

/* default/apropos.html.twig */
class __TwigTemplate_7238112b9091bc454285ac3d1ccebd88aa97cfd337c233f40bcf8dd335d7c620 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/apropos.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/apropos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/apropos.html.twig"));

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
        echo "
 <!--==========================
      About Us Section
    ============================-->
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\"> 
          <h3>QUI SOMMES NOUS ?</h3>
          <p>Le service <b>CJOB</b>  est un produit de la société <a href=\"http://alcalis.tech\"><b>ALCALIS TECHNOLOGIES CI</b> </a> , 
            qui a pour mission principale : la lutte contre le chômage en Côte d'Ivoire .

            C’est une plate-forme de diffusion d’offres d’emplois et de stages en ligne et par SMS pour les candidats en quête de nouvelles opportunités de carrière et pour les recruteurs à la recherche de nouveaux talents.

           <b> « CJOB »</b> offre à ses abonnés des informations dans tous les domaines d’activités et de tout niveau d’étude…..
          </p>
        </header>
      <header class=\"section-header\">
          <h3>QUELQUES  AVANTAGES …</h3>
        <div class=\"row about-cols\">

          <div class=\"col-md-3 wow fadeInUp\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/alerte2.jpg\" alt=\"\" class=\"img-fluid\">
                ";
        // line 32
        echo "              </div>
              <h2 class=\"title\"><a href=\"#\">ALERTE CJOB</a></h2>  
              <p>
                Recevez les dernières offres d’emploi par SMS et soyez parmi les premiers à postuler…
              </p>
            </div>
          </div>

          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/unclic.jpg\" alt=\"\" class=\"img-fluid\">
                ";
        // line 45
        echo "              </div>
              <h2 class=\"title\"><a href=\"#\">TROUVEZ UN JOB EN UN CLIC</a></h2>
              <p>
                Postulez aux offres d’emploi correspondant à votre profil en un clic…
              </p>
            </div>
          </div>

          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/CV.jpg\" alt=\"\" class=\"img-fluid\">
               ";
        // line 58
        echo "              </div>
              <h2 class=\"title\"><a href=\"#\">DEPOSEZ VOTRE CV</a></h2>
              <p>
                Importer votre cv word, pdf…ou encore créez-en un en quelque minute sur CJOB…
              </p>
            </div>
          </div>
          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.2s\">

            <div class=\"about-col\">

              <div class=\"img\">
                <img src=\"img/job.png\" alt=\"\" class=\"img-fluid\">
                ";
        // line 72
        echo "              </div>
              <h2 class=\"title\"><a href=\"#\">CJOB ASSISTANCE</a></h2>
              <p>
                - Dans l’élaboration de votre CV
                - Actualisation de votre CV
                - Coaching et Aide à l’Emploi & Stage
                - etc.

              </p>
            </div>
          </div>

        </div>
  
      </div>
    </section><!-- #about -->
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 72,  127 => 58,  113 => 45,  99 => 32,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'base.html.twig' %}

{% block title %}Accueil--CJOB!{% endblock %}

{% block body %}

 <!--==========================
      About Us Section
    ============================-->
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\"> 
          <h3>QUI SOMMES NOUS ?</h3>
          <p>Le service <b>CJOB</b>  est un produit de la société <a href=\"http://alcalis.tech\"><b>ALCALIS TECHNOLOGIES CI</b> </a> , 
            qui a pour mission principale : la lutte contre le chômage en Côte d'Ivoire .

            C’est une plate-forme de diffusion d’offres d’emplois et de stages en ligne et par SMS pour les candidats en quête de nouvelles opportunités de carrière et pour les recruteurs à la recherche de nouveaux talents.

           <b> « CJOB »</b> offre à ses abonnés des informations dans tous les domaines d’activités et de tout niveau d’étude…..
          </p>
        </header>
      <header class=\"section-header\">
          <h3>QUELQUES  AVANTAGES …</h3>
        <div class=\"row about-cols\">

          <div class=\"col-md-3 wow fadeInUp\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/alerte2.jpg\" alt=\"\" class=\"img-fluid\">
                {# <div class=\"icon\"></div> #}
              </div>
              <h2 class=\"title\"><a href=\"#\">ALERTE CJOB</a></h2>  
              <p>
                Recevez les dernières offres d’emploi par SMS et soyez parmi les premiers à postuler…
              </p>
            </div>
          </div>

          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/unclic.jpg\" alt=\"\" class=\"img-fluid\">
                {# <div class=\"icon\"><i class=\"ion-ios-list-outline\"></i></div> #}
              </div>
              <h2 class=\"title\"><a href=\"#\">TROUVEZ UN JOB EN UN CLIC</a></h2>
              <p>
                Postulez aux offres d’emploi correspondant à votre profil en un clic…
              </p>
            </div>
          </div>

          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"about-col\">
              <div class=\"img\">
                <img src=\"img/CV.jpg\" alt=\"\" class=\"img-fluid\">
               {#  <div class=\"icon\"><i class=\"ion-ios-eye-outline\"></i></div> #}
              </div>
              <h2 class=\"title\"><a href=\"#\">DEPOSEZ VOTRE CV</a></h2>
              <p>
                Importer votre cv word, pdf…ou encore créez-en un en quelque minute sur CJOB…
              </p>
            </div>
          </div>
          <div class=\"col-md-3 wow fadeInUp\" data-wow-delay=\"0.2s\">

            <div class=\"about-col\">

              <div class=\"img\">
                <img src=\"img/job.png\" alt=\"\" class=\"img-fluid\">
                {# <div class=\"icon\"><i class=\"ios-briefcase-outline\"></i></div> #}
              </div>
              <h2 class=\"title\"><a href=\"#\">CJOB ASSISTANCE</a></h2>
              <p>
                - Dans l’élaboration de votre CV
                - Actualisation de votre CV
                - Coaching et Aide à l’Emploi & Stage
                - etc.

              </p>
            </div>
          </div>

        </div>
  
      </div>
    </section><!-- #about -->
  {% endblock %}
", "default/apropos.html.twig", "/var/www/lecjob/templates/default/apropos.html.twig");
    }
}
