<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_c27179319b7d42a490dbdd192d3598d1e41c1d404ada49bf72c7ee0c155c792e extends Twig_Template
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
        echo "\" method=\"post\">
          ";
        // line 22
        if (($context["csrf_token"] ?? null)) {
            // line 23
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        if (($context["error"] ?? null)) {
            // line 56
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        return array (  107 => 58,  101 => 56,  99 => 55,  91 => 50,  83 => 45,  65 => 30,  58 => 25,  52 => 23,  50 => 22,  46 => 21,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
