<?php

/* base.html.twig */
class __TwigTemplate_0867a2bed3eb2e74994f9f3a48ecebb0bd5ccd970b20f5512a3d3f9ff2920e2d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <h4  style=\"color:#fff\"> L'emploi à portée de main </h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">

         ";
        // line 54
        echo "          <li><a href=\" ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo " \">A propos</a></li> 
          <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contacts</a></li>
          <li>
          ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "            Bonjour Admin !
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 60
            echo "             Salut !
          ";
        } else {
            // line 62
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" >Se connecter</a>
          ";
        }
        // line 64
        echo "          </li>
        
            ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 67
            echo "            <li class=\"menu-has-children\"><a href=\"\">Mon Profil</a>
              <ul>
                <li><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes infos.</a></li>
                <li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Modifier mon mot de passe</a></li>
                <li><a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">se déconnecter</a></li>
              </ul>
          </li>
         
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 76
            echo "           <li class=\"menu-has-children\"><a href=\"\">Mon Profile</a>
              <ul>
                <li><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes infos.</a></li>
                <li><a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Modifier mon mot de passe</a></li>
                <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">se déconnecter</a></li>
              </ul>
          </li>  
          ";
        } else {
            // line 84
            echo "           
          ";
        }
        // line 86
        echo "            
         
         
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
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "

       ";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "
        

        ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CJOB-le portail de l'emploi";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "
  <!-- JavaScript Libraries -->
  <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/superfish/hoverIntent.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/superfish/superfish.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/touchSwipe/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contactform/contactform.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  398 => 142,  392 => 139,  387 => 137,  383 => 136,  379 => 135,  375 => 134,  371 => 133,  367 => 132,  363 => 131,  359 => 130,  355 => 129,  351 => 128,  347 => 127,  343 => 126,  339 => 125,  335 => 123,  326 => 122,  308 => 118,  290 => 115,  276 => 28,  270 => 25,  266 => 24,  262 => 23,  258 => 22,  254 => 21,  248 => 18,  242 => 15,  235 => 10,  226 => 9,  208 => 5,  196 => 144,  194 => 122,  189 => 119,  187 => 118,  183 => 116,  181 => 115,  150 => 86,  146 => 84,  139 => 80,  135 => 79,  131 => 78,  127 => 76,  119 => 71,  115 => 70,  111 => 69,  107 => 67,  105 => 66,  101 => 64,  95 => 62,  91 => 60,  87 => 58,  85 => 57,  80 => 55,  75 => 54,  63 => 44,  49 => 32,  47 => 9,  40 => 5,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <title>{% block title %}CJOB-le portail de l'emploi{% endblock %}</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">
 {% block stylesheets %}
 \t<!-- Favicons -->
  <link href=\"\" rel=\"icon\">
  <link href=\"\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700') }}\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"{{ asset('lib/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('lib/animate/animate.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('lib/ionicons/css/ionicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('lib/lightbox/css/lightbox.min.css')}}\" rel=\"stylesheet\">

  <!-- Main Stylesheet File -->
  <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">


  {% endblock %}
 <!-- chat scrips -->
<script type=\"text/javascript\">window.\$crisp=[];window.CRISP_WEBSITE_ID=\"84841eb2-febe-48ea-9012-43b0468e0ffd\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();</script>
<!--  fin chat scrips -->
  
</head>
<!--==========================
    Header
  ============================-->
  <header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"{{ path('default') }}\" class=\"scrollto\">CJOB</a></h1>
        <h4  style=\"color:#fff\"> L'emploi à portée de main </h4>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">

         {#  <li class=\"menu-active\"><a href=\"#\">Envoyer, CJOB au 98025 par SMS pour creer un compte </a></li> #}
          <li><a href=\" {{ path('apropos') }} \">A propos</a></li> 
          <li><a href=\"{{ path('contact') }}\">Contacts</a></li>
          <li>
          {% if is_granted('ROLE_ADMIN')  %}
            Bonjour Admin !
          {% elseif is_granted('ROLE_USER') %}
             Salut !
          {% else %}
            <a href=\"{{ path('fos_user_security_login')}}\" >Se connecter</a>
          {% endif %}
          </li>
        
            {% if is_granted('ROLE_ADMIN')  %}
            <li class=\"menu-has-children\"><a href=\"\">Mon Profil</a>
              <ul>
                <li><a href=\"{{ path('fos_user_profile_show') }}\">Mes infos.</a></li>
                <li><a href=\"{{ path('fos_user_change_password') }}\">Modifier mon mot de passe</a></li>
                <li><a href=\"{{ path('fos_user_security_logout')}}\">se déconnecter</a></li>
              </ul>
          </li>
         
          {% elseif is_granted('ROLE_USER') %}
           <li class=\"menu-has-children\"><a href=\"\">Mon Profile</a>
              <ul>
                <li><a href=\"{{ path('fos_user_profile_show') }}\">Mes infos.</a></li>
                <li><a href=\"{{ path('fos_user_change_password') }}\">Modifier mon mot de passe</a></li>
                <li><a href=\"{{ path('fos_user_security_logout')}}\">se déconnecter</a></li>
              </ul>
          </li>  
          {% else %}
           
          {% endif %}
            
         
         
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







        {% block body %} {% endblock %}


       {% block footer %} {% endblock %}

        

        {% block javascripts %}

  <!-- JavaScript Libraries -->
  <script src=\"{{asset('lib/jquery/jquery.min.js')}}\"></script>
  <script src=\"{{asset('lib/jquery/jquery-migrate.min.js')}}\"></script>
  <script src=\"{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
  <script src=\"{{asset('lib/superfish/hoverIntent.js')}}\"></script>
  <script src=\"{{asset('lib/superfish/superfish.min.js')}}\"></script>
  <script src=\"{{asset('lib/wow/wow.min.js')}}\"></script>
  <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
  <script src=\"{{asset('lib/counterup/counterup.min.js')}}\"></script>
  <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>
  <script src=\"{{asset('lib/isotope/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('lib/lightbox/js/lightbox.min.js')}}\"></script>
  <script src=\"{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"{{ asset('contactform/contactform.js')}}\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"{{ asset('js/main.js')}}\"></script>
 {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/lecjob/templates/base.html.twig");
    }
}
