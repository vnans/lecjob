<?php

/* @FOSUser/Security/login_content.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-default alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span style=\"color: black;\" aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt;color: #fff;\">NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </p></marquee>
</div>
  </div>
</h1>

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Connectez-vous</h2>
      </div>
      <div class=\"modal-body\">
        <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
          ";
        // line 20
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" />
          ";
        }
        // line 23
        echo "          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"  id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
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
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-lg\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          ";
        // line 52
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 53, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 53, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
          ";
        }
        // line 55
        echo "
          <p class=\"text-center\" > <img src=\"img/orangeMTN.jpg\" alt=\"operateurs\"> </p>
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
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  102 => 53,  100 => 52,  92 => 47,  85 => 43,  67 => 28,  60 => 23,  54 => 21,  52 => 20,  48 => 19,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-default alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span style=\"color: black;\" aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt;color: #fff;\">NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </p></marquee>
</div>
  </div>
</h1>

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Connectez-vous</h2>
      </div>
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
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-lg\" value=\"{{ 'security.login.submit'|trans }}\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          {% if error %}
             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}

          <p class=\"text-center\" > <img src=\"img/orangeMTN.jpg\" alt=\"operateurs\"> </p>
        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>

", "@FOSUser/Security/login_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
