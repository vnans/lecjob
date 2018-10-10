<?php

/* default/index.html.twig */
class __TwigTemplate_95548766c3411bb4d6c9e828aa78b1aadfb352db61514b95ba22e2cea0f6ce8b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil-cjob!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo "\" class=\"btn-get-started scrollto\">Consulter toutes les offres </a>
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
                <p>Nous nous rapprochons de vous par notre boite de dialogue </p>
                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter les nouvelles offres </a>
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
        echo "\" class=\"btn-get-started scrollto\">Consulter les nouvelles offres </a>
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
        echo "\" class=\"btn-get-started scrollto\">Consulter les nouvelles offres </a>
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
                          <p> Stages  </p>
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
                <p>Le service qui lutte contre le chomage</p>
                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">Consulter les nouvelles offres </a>
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
                          <p> Stagess   </p>
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
        return array (  338 => 327,  281 => 265,  277 => 255,  228 => 208,  224 => 198,  175 => 151,  171 => 141,  121 => 93,  117 => 83,  67 => 35,  63 => 25,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/var/www/lecjob/templates/default/index.html.twig");
    }
}
