<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_803bd789bf8f4a5b3d1862aba2b3b870986040f2a159c25757bc8e3e3d1d2112 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo " 
   <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Mes infos</h3>
        ";
        // line 9
        echo "        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
             ";
        // line 16
        echo "              <h3></h3>
              <address></address>
            </div>
          </div> 

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Mon numero d'abonnement</h3>
              <p><a href=\"tel:";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "username", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "username", array()), "html", null, true);
        echo "</a></p>
            
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
             ";
        // line 35
        echo "            </div>
          </div>

        </div>
        

      </div> 
    </section><!-- #contact -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 35,  56 => 25,  45 => 16,  37 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
 
   <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Mes infos</h3>
        {#   <p></p> #}
        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-4\">
            <div class=\"contact-address\">
             {#  <i class=\"ion-ios-location-outline\"></i> #}
              <h3></h3>
              <address></address>
            </div>
          </div> 

          <div class=\"col-md-4\">
            <div class=\"contact-phone\">
              <i class=\"ion-ios-telephone-outline\"></i>
              <h3>Mon numero d'abonnement</h3>
              <p><a href=\"tel:{{ user.username }}\">{{ user.username }}</a></p>
            
            </div>
          </div>

          <div class=\"col-md-4\">
            <div class=\"contact-email\">
             {#  <i class=\"ion-ios-email-outline\"></i> 
              <h3>Service</h3>
              <p>CJOB</p>#}
            </div>
          </div>

        </div>
        

      </div> 
    </section><!-- #contact -->
{# <div class=\"fos_user_user_show\"> 
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
 #}", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
