<?php

/* base.html.twig */
class __TwigTemplate_0f47f0185cbef07e68111a8280aafa3ffe8cd3716266a8876c10fc44a4e96280 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">
 ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo " <!-- chat scrips -->
<script type=\"text/javascript\">window.\$crisp=[];window.CRISP_WEBSITE_ID=\"84841eb2-febe-48ea-9012-43b0468e0ffd\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();</script>
<!--  fin chat scrips -->
  
</head>
<!--==========================
    Header
  ============================-->
  <header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" class=\"scrollto\">CJOB</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li class=\"menu-active\"><a href=\"#\">Envoyer, CJOB au 98025 par SMS pour creer un compte </a></li>
          ";
        // line 53
        echo "          <li>
          ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "            Bonjour Admin !
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 57
            echo "             Salut !
          ";
        } else {
            // line 59
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" >Se connecter</a>
          ";
        }
        // line 61
        echo "          </li>
          <li>
            ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>  
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 66
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a>  
          ";
        } else {
            // line 68
            echo "           
          ";
        }
        // line 70
        echo "            
          </li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<section id=\"featured-services\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-12 box\">      
          
          </div>
           
          </div>

        </div>
      </div>
    </section>

    <body>







        ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "

       ";
        // line 102
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "
        

        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "CJOB-le portail de l'emploi";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo " \t<!-- Favicons -->
  <link href=\"\" rel=\"icon\">
  <link href=\"\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


  ";
    }

    // line 99
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        // line 107
        echo "
  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/superfish/hoverIntent.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/superfish/superfish.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/touchSwipe/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contactform/contactform.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
 ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 126,  291 => 123,  286 => 121,  282 => 120,  278 => 119,  274 => 118,  270 => 117,  266 => 116,  262 => 115,  258 => 114,  254 => 113,  250 => 112,  246 => 111,  242 => 110,  238 => 109,  234 => 107,  231 => 106,  225 => 102,  219 => 99,  211 => 28,  205 => 25,  201 => 24,  197 => 23,  193 => 22,  189 => 21,  183 => 18,  177 => 15,  170 => 10,  167 => 9,  161 => 5,  155 => 128,  153 => 106,  148 => 103,  146 => 102,  142 => 100,  140 => 99,  109 => 70,  105 => 68,  99 => 66,  93 => 64,  91 => 63,  87 => 61,  81 => 59,  77 => 57,  73 => 55,  71 => 54,  68 => 53,  57 => 44,  43 => 32,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/lecjob/templates/base.html.twig");
    }
}
