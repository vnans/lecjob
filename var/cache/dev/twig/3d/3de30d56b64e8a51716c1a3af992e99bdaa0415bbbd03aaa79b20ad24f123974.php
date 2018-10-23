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
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li>  <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo "\" >A propos</a></li>
          ";
        // line 46
        echo "          <li>
          ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 48
            echo "            Bonjour Admin !
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 50
            echo "             Salut !
          ";
        } else {
            // line 52
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" >Se connecter</a>
          ";
        }
        // line 54
        echo "          </li>
        
            ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "            <li class=\"menu-has-children\"><a href=\"\">Mon Profil</a>
              <ul>
                <li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes infos.</a></li>
                <li><a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Modifier mon mot de passe</a></li>
                <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">se déconnecter</a></li>
              </ul>
          </li>
         
          ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 66
            echo "           <li class=\"menu-has-children\"><a href=\"\">Mon Profile</a>
              <ul>
                <li><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes infos.</a></li>
                <li><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Modifier mon mot de passe</a></li>
                <li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">se déconnecter</a></li>
              </ul>
          </li>  
          ";
        } else {
            // line 74
            echo "           
          ";
        }
        // line 76
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
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 99
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 99, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 104
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 106
        echo "        </div>

        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->source); })()), "request", array()), "hasPreviousSession", array())) {
            // line 109
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 110
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 111
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 112
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        ";
        }
        // line 117
        echo "
        <div>
            ";
        // line 119
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 121
        echo "        </div>
    </body>
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

    // line 119
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 120
        echo "            ";
        
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
        return array (  334 => 120,  325 => 119,  313 => 30,  307 => 27,  303 => 26,  299 => 25,  295 => 24,  291 => 23,  285 => 20,  279 => 17,  272 => 12,  263 => 11,  245 => 6,  232 => 121,  230 => 119,  226 => 117,  223 => 116,  217 => 115,  208 => 112,  203 => 111,  198 => 110,  193 => 109,  191 => 108,  187 => 106,  179 => 104,  173 => 101,  169 => 100,  164 => 99,  162 => 98,  138 => 76,  134 => 74,  127 => 70,  123 => 69,  119 => 68,  115 => 66,  107 => 61,  103 => 60,  99 => 59,  95 => 57,  93 => 56,  89 => 54,  83 => 52,  79 => 50,  75 => 48,  73 => 47,  70 => 46,  66 => 44,  56 => 37,  49 => 32,  47 => 11,  39 => 6,  32 => 1,);
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
</html>
", "@FOSUser/layout.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
