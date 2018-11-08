<?php

/* @FOSUser/Security/login_content.html.twig */
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
        echo "<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-default alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span style=\"color: black;\" aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Serif; font-size: 12pt;color: #fff;\"> <b> NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </b> </p></marquee>
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
        if (($context["csrf_token"] ?? null)) {
            // line 21
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        if (($context["error"] ?? null)) {
            // line 53
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        return array (  102 => 55,  96 => 53,  94 => 52,  86 => 47,  79 => 43,  61 => 28,  54 => 23,  48 => 21,  46 => 20,  42 => 19,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "/home/mosercic/cjob.alcalis.tech/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
