<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_72bd7a9a8091eabda9d36c5bb3b50aec76661b8cea03bf9153abcbeeff0a659a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "<h3><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\">Accueil</a> </h3> 
<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt\">NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </p></marquee>
</div>
  </div>
</h1>

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Connectez-vous</h2>
      </div>
      <hr />
      <div class=\"modal-body\">
        <form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
          ";
        // line 22
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\" />
          ";
        }
        // line 25
        echo "          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"  id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

            </div>

          </div>
          <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
           <label for=\"remember_me\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          </div>
           

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-lg\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> </p>
          <p class=\"text-primary text-center\">206 Fcfa/15 jr</p>
          ";
        // line 55
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 56, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 56, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 58
        echo "

        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 58,  107 => 56,  105 => 55,  97 => 50,  89 => 45,  71 => 30,  64 => 25,  58 => 23,  56 => 22,  52 => 21,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<h3><a href=\"{{ path('cj_offres_index') }}\">Accueil</a> </h3> 
<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt\">NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </p></marquee>
</div>
  </div>
</h1>

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Connectez-vous</h2>
      </div>
      <hr />
      <div class=\"modal-body\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"POST\">
          {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
          {% endif %}
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"  id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

            </div>

          </div>
          <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
           <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
          </div>
           

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success btn-lg\" value=\"{{ 'security.login.submit'|trans }}\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> </p>
          <p class=\"text-primary text-center\">206 Fcfa/15 jr</p>
          {% if error %}
             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}


        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>

", "FOSUserBundle:Security:login_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
