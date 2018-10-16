<?php

/* default/index.html.twig */
class __TwigTemplate_aeed3b5e634fc6effef78960777d064966ccb0f690d40834b3f745372f83db71 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
    Intro Section
  ============================-->
  <section id=\"intro\">
    <div class=\"intro-container\">
      <div id=\"introCarousel\" class=\"carousel  slide carousel-fade\" data-ride=\"carousel\">

        <ol class=\"carousel-indicators\"></ol>

        <div class=\"carousel-inner\" role=\"listbox\">


          <div class=\"carousel-item active\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/1.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>CJOB AU 98025</h2>
                <p>L'emploi à porté de main .</p>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                ";
        // line 35
        echo "                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stagess</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
                
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/2.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Votre assistance conseil </h2>
                <p>Nous nous rapprochons de vous par notre chat direct </p>
                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                ";
        // line 93
        echo "                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles</p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
              
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/3.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2> Insertion professionnelle </h2>
                <p>La plateforme de l'emploi et des stages</p>
                <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes nos offres </a>
                ";
        // line 151
        echo "                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401 </span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/4.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Merci CJOB</h2>
                <p>votre bien etre , notre priorité</p>
                <a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                ";
        // line 208
        echo "                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/5.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Des offres d'emplois publiées chaque jours</h2>
                <p>Le service qui lutte contre le chomage en Cote d'Ivoire</p>
                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                ";
        // line 265
        echo "                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

        </div>

        <a class=\"carousel-control-prev\" href=\"#introCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon ion-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>

        <a class=\"carousel-control-next\" href=\"#introCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon ion-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
 

      </div>
      ";
        // line 327
        echo "<!-- #facts -->

    </div>
  </section><!-- #intro -->

  
    
  </main> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 327,  311 => 265,  307 => 255,  258 => 208,  254 => 198,  205 => 151,  201 => 141,  151 => 93,  147 => 83,  97 => 35,  93 => 25,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Accueil--CJOB!{% endblock %}

{% block body %}

  <!--==========================
    Intro Section
  ============================-->
  <section id=\"intro\">
    <div class=\"intro-container\">
      <div id=\"introCarousel\" class=\"carousel  slide carousel-fade\" data-ride=\"carousel\">

        <ol class=\"carousel-indicators\"></ol>

        <div class=\"carousel-inner\" role=\"listbox\">


          <div class=\"carousel-item active\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/1.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>CJOB AU 98025</h2>
                <p>L'emploi à porté de main .</p>
                <a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                {# <p>
                  
                  <ul class=\"nav-menu\">
                  <li class=\"\"><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Informatique</a> </li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Banque</a></li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Communication</a></li>
         
                  </ul>
                </p> #}
                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stagess</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
                
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/2.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Votre assistance conseil </h2>
                <p>Nous nous rapprochons de vous par notre chat direct </p>
                <a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                {# <p>
                  
                  <ul class=\"nav-menu\">
                  <li class=\"\"><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Informatique</a> </li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">banque</a></li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Communication</a></li>
         
                  </ul>
                </p> #}
                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles</p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
              
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/3.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2> Insertion professionnelle </h2>
                <p>La plateforme de l'emploi et des stages</p>
                <a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Consulter toutes nos offres </a>
                {# <p>
                  
                  <ul class=\"nav-menu\">
                  <li class=\"\"><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Informatique</a> </li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">banque</a></li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Communication</a></li>
         
                  </ul>
                </p> #}
                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401 </span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/4.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Merci CJOB</h2>
                <p>votre bien etre , notre priorité</p>
                <a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                {# <p>
                  
                  <ul class=\"nav-menu\">
                  <li class=\"\"><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Informatique</a> </li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">banque</a></li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Communication</a></li>
         
                  </ul>
                </p> #}
                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/5.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                <h2>Des offres d'emplois publiées chaque jours</h2>
                <p>Le service qui lutte contre le chomage en Cote d'Ivoire</p>
                <a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Consulter toutes nos offres  </a>
                {# <p>
                  
                  <ul class=\"nav-menu\">
                  <li class=\"\"><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Informatique</a> </li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">banque</a></li>
                  <li><a href=\"{{ path('cj_offres_index') }}\" class=\"btn-get-started scrollto\">Communication</a></li>
         
                  </ul>
                </p> #}
                <p>
                    <section id=\"facts\"  class=\"wow fadeIn\">
                    <div class=\"container\">

                      <header class=\"section-header\">
                        
                      </header>

                      <div class=\"row counters\">

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">274</span>
                          <p>Entreprises partenaires</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">259</span>
                          <p>Emplois  </p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">320</span>
                          <p> Stages</p>
                        </div>

                        <div class=\"col-lg-3 col-6 text-center\">
                          <span data-toggle=\"counter-up\">401</span>
                          <p>Insertions professionnelles  </p>
                        </div>

                      </div>


                    </div>
                  </section><!-- #facts -->
                  
                </p>
              </div>
            </div>
          </div>

        </div>

        <a class=\"carousel-control-prev\" href=\"#introCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon ion-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>

        <a class=\"carousel-control-next\" href=\"#introCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon ion-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
 

      </div>
      {# <section id=\"facts\"  class=\"wow fadeIn\">
      <div class=\"container\">

       
        

      </div>
    </section> #}<!-- #facts -->

    </div>
  </section><!-- #intro -->

  
    
  </main> 
{% endblock %}
", "default/index.html.twig", "/var/www/lecjob/templates/default/index.html.twig");
    }
}
