<?php

/* client/index.html.twig */
class __TwigTemplate_a2908c22d4faedf8efb89963ca4ea9c8d46aaee3dc294b847adfb4753899e48d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion client";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div></div> </br>
<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-default alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span style=\"color: black;\" aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Serif; font-size: 12pt;color: #fff;\"> <b> NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </b> </p></marquee>
</div>
  </div> 
</h1>
 ";
        // line 17
        if ((isset($context["erreurForm"]) || array_key_exists("erreurForm", $context))) {
            // line 18
            echo " <div class=\"alert alert-danger text-center\" role=\"alert\">
  Erreur identifiants
</div>
";
        }
        // line 22
        echo "
<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\"> Connectez-vous</h2>
      </div>
      <div class=\"modal-body\"> 
      \t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
        <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client");
        echo "\" method=\"POST\">
          ";
        // line 34
        echo "          <div class=\"form-group\">
          \t<label for=\"username\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Numero de téléphone"), "html", null, true);
        echo "</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              ";
        // line 42
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "username", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group\">
          \t<label for=\"username\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mot de passe"), "html", null, true);
        echo "</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              ";
        // line 53
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "password", array()), 'widget');
        echo "
            </div>

          </div>
          <div class=\"form-group\">
           ";
        // line 59
        echo "           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "remenber", array()), 'widget');
        echo " 
           <label for=\"remember_me\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se souvenir de moi"), "html", null, true);
        echo "</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connexion"), "html", null, true);
        echo "\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          ";
        // line 73
        echo "          <p class=\"text-center\" > <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/orangeMTN.jpg"), "html", null, true);
        echo "\" alt=\"operateurs\"> </p>
        </form>
        ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>
 

</body>
</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 75,  168 => 73,  160 => 64,  153 => 60,  148 => 59,  139 => 53,  130 => 46,  122 => 42,  113 => 35,  110 => 34,  106 => 30,  102 => 29,  93 => 22,  87 => 18,  85 => 17,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion client{% endblock %}

{% block body %}
<div></div> </br>
<body id=\"LoginForm\">
<div class=\"container\">
<h1 class=\"form-heading\">
  <div class=\"row\">
  <div class=\"alert alert-default alert-dismissible\" role=\"alert\">
  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span style=\"color: black;\" aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
  <strong><i class=\"fa fa-warning\"></i>FLASH-CJOB! </strong> <marquee><p style=\"font-family: Serif; font-size: 12pt;color: #fff;\"> <b> NE PAYER JAMAIS A PERSONNE,SOUS AUCUN PRETEXTE,UNE QUELCONQUE SOMME D'ARGENT POUR UN TEST DE CANDIDATURE OU UNE ENTREVUE. (ALCALIS TECHNOLOGIES) </b> </p></marquee>
</div>
  </div> 
</h1>
 {% if  erreurForm is defined %}
 <div class=\"alert alert-danger text-center\" role=\"alert\">
  Erreur identifiants
</div>
{% endif %}

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\"> Connectez-vous</h2>
      </div>
      <div class=\"modal-body\"> 
      \t{{ form_start(form) }}
        <form action=\"{{ path(\"client\")}}\" method=\"POST\">
          {# {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
          {% endif %} #}
          <div class=\"form-group\">
          \t<label for=\"username\">{{ 'Numero de téléphone'|trans }}</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              {# <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"  id=\"username\" name=\"username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" /> #}
              {{ form_widget(form.username) }}
            </div>
          </div>
          <div class=\"form-group\">
          \t<label for=\"username\">{{ 'mot de passe'|trans }}</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              {# <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" id=\"password\" name=\"password\" required=\"required\" autocomplete=\"current-password\" /> #}
              {{ form_widget(form.password)}}
            </div>

          </div>
          <div class=\"form-group\">
           {#  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> #}
           {{ form_widget(form.remenber) }} 
           <label for=\"remember_me\">{{ 'Se souvenir de moi'|trans }}</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" value=\"{{ 'Connexion'|trans }}\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          {# {% if error %}
             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}
 #}
          <p class=\"text-center\" > <img src=\"{{asset('img/orangeMTN.jpg')}}\" alt=\"operateurs\"> </p>
        </form>
        {{ form_end(form) }}
      </div>
    </div>
  </div>
</div>
 

</body>
</html>


{% endblock %}

", "client/index.html.twig", "/var/www/lecjob/templates/client/index.html.twig");
    }
}
