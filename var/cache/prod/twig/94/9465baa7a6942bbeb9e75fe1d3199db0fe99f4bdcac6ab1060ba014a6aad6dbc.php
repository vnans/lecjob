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
        echo "
";
        // line 3
        if (($context["error"] ?? null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>

  </head>
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
 
<div class=\"login-form\">
<div class=\"main-div\">

    <div class=\"panel\">
   <h2>Connectez vous</h2>
   </div>
<div class=\"row\">
  <div class=\"col-md-12 col-sm-12\">

    <form action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 33
        if (($context["csrf_token"] ?? null)) {
            // line 34
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 36
        echo "
    <label for=\"username\">Numéro de téléphone</label>
    <div class=\"form-group\">
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
    </div>
    

    <label for=\"password\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"form-group\">
       <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
    </div>
   <div class=\"form-group\">
     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
     <label for=\"remember_me\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> </br>
   </div>    
    
     <p class=\"text-primary\" >Vous n'avez pas de compte ? envoyer simplement <mark>CJOB au 98025</mark> par SMS. </p>
     <p class=\"text-pri\">206 Fcfa/15 jr</p>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
  </div>
</div>

    
    </div>

</div></div></div>


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
        return array (  104 => 55,  95 => 49,  86 => 43,  79 => 39,  74 => 36,  68 => 34,  66 => 33,  62 => 32,  34 => 6,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
