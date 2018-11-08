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
        echo "Accueil--CJOB!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"container-fluid\">
    
  
  <!-- Heading Row -->
      <div class=\"row my-4\">
        <div class=\"col-lg-2\">
          ";
        // line 15
        echo "          <img src=\"img/eal3.jpg\" alt=\"\"> 
        ";
        // line 17
        echo "        </div>
        <div class=\"col-lg-8\">
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
                <h2 style=\"color:#000 ;\">CJOB AU 98025</h2>
                <p style=\"color:#000;\"><b>Reçevez des offres d'emploi par SMS</b></p>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">POSTULER ICI</a>
                ";
        // line 49
        echo "                <p>
                   
                  
                </p>
                
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/4.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                ";
        // line 64
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">POSTULER ICI  </a>
                ";
        // line 74
        echo "                <p>
                    
                  
                </p>
              </div>
            </div>
          </div>

          <div class=\"carousel-item\">
            <div class=\"carousel-background\"><img src=\"img/intro-carousel/5.jpg\" alt=\"\"></div>
            <div class=\"carousel-container\">
              <div class=\"carousel-content\">
                ";
        // line 88
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\" class=\"btn-get-started scrollto\">POSTULER ICI  </a>
                ";
        // line 99
        echo "                <p>
                   
                  
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
        // line 128
        echo "<!-- #facts -->

    </div>
   
  </section><!-- #intro -->
        </div>
        <!-- /.col-lg-8 -->
        <div class=\"col-lg-2\">
           <img src=\"img/eal3.jpg\" alt=\"\">
        </div>
        <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->


   

</div>
  

  
    
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
        return array (  145 => 128,  121 => 99,  116 => 88,  102 => 74,  97 => 64,  82 => 49,  78 => 39,  54 => 17,  51 => 15,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/mosercic/cjob.alcalis.tech/templates/default/index.html.twig");
    }
}
