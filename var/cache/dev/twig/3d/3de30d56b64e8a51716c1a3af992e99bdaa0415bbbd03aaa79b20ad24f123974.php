<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4ab4af3fb4cac0b61d77173feb0dadc8bba6f8609b9e902aace27941602cf706 extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

          <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
          
          <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
          <meta content=\"\" name=\"keywords\">
          <meta content=\"\" name=\"description\">
         ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    </head>
    <header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" class=\"scrollto\">CJOB</a></h1>
         <h6  style=\"color:#fff\"> L'emploi à portée de main </h4> 
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li>  <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo "\" >A propos</a></li>
          ";
        // line 47
        echo "          <li>
          ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "            Bonjour Admin !
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 51
            echo "             Salut !
          ";
        } else {
            // line 53
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" >Se connecter</a>
          ";
        }
        // line 55
        echo "          </li>
        
            ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "            <li class=\"menu-has-children\"><a href=\"\">Mon Profil</a>
              <ul>
                <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes infos.</a></li>
                <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Modifier mon mot de passe</a></li>
                <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">se déconnecter</a></li>
              </ul>
          </li>
         
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 67
            echo "           <li class=\"menu-has-children\"><a href=\"\">Mon Profile</a>
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
        } else {
            // line 75
            echo "           
          ";
        }
        // line 77
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
        <div>
            ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 100
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 100, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 105
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 107
        echo "        </div>

        ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", array()), "hasPreviousSession", array())) {
            // line 110
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 110, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 111
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 112
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 113
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "        ";
        }
        // line 118
        echo "
        <div>
            ";
        // line 120
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 122
        echo "        </div>
    </body>
    ";
        // line 124
        $this->displayBlock('footer', $context, $blocks);
        // line 138
        echo "
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cjob ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <!-- Favicons -->
          <link href=\"img/favicon.png\" rel=\"icon\">
          <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

          <!-- Google Fonts -->
          <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"), "html", null, true);
        echo "\" rel=\"stylesheet\">

          <!-- Bootstrap CSS File -->
          <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

          <!-- Libraries CSS Files -->
          <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
          <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

          <!-- Main Stylesheet File -->
          <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 121
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " 

  <!--==========================
    Footer
  ============================-->
  <footer id=\"footer\">
   
      <div class=\"credits\"> 
        
      copyright &copy; 2018  <a href=\"https://alcalis.tech\"> Alcalis Technologies</a>
      </div>
    </div>
  </footer><!-- #footer -->       
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 124,  342 => 121,  333 => 120,  321 => 30,  315 => 27,  311 => 26,  307 => 25,  303 => 24,  299 => 23,  293 => 20,  287 => 17,  280 => 12,  271 => 11,  253 => 6,  240 => 138,  238 => 124,  234 => 122,  232 => 120,  228 => 118,  225 => 117,  219 => 116,  210 => 113,  205 => 112,  200 => 111,  195 => 110,  193 => 109,  189 => 107,  181 => 105,  175 => 102,  171 => 101,  166 => 100,  164 => 99,  140 => 77,  136 => 75,  129 => 71,  125 => 70,  121 => 69,  117 => 67,  109 => 62,  105 => 61,  101 => 60,  97 => 58,  95 => 57,  91 => 55,  85 => 53,  81 => 51,  77 => 49,  75 => 48,  72 => 47,  68 => 45,  57 => 37,  50 => 32,  48 => 11,  40 => 6,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

          <title>{% block title %} Cjob {% endblock %}</title>
          
          <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
          <meta content=\"\" name=\"keywords\">
          <meta content=\"\" name=\"description\">
         {% block stylesheets %}
            <!-- Favicons -->
          <link href=\"img/favicon.png\" rel=\"icon\">
          <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

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
    </head>
    <header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"{{ path('default') }}\" class=\"scrollto\">CJOB</a></h1>
         <h6  style=\"color:#fff\"> L'emploi à portée de main </h4> 
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li>  <a href=\"{{ path('apropos')}}\" >A propos</a></li>
          {# <li><a href=\"#about\">C'est quoi CJOB ?</a></li> #}
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
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
    {% block footer %} 

  <!--==========================
    Footer
  ============================-->
  <footer id=\"footer\">
   
      <div class=\"credits\"> 
        
      copyright &copy; 2018  <a href=\"https://alcalis.tech\"> Alcalis Technologies</a>
      </div>
    </div>
  </footer><!-- #footer -->       
       {% endblock %}

</html>

", "@FOSUser/layout.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
