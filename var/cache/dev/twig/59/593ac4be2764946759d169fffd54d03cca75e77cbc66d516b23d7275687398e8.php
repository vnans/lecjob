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

        echo "Hello client";
        
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

        // line 7
        echo "<body id=\"LoginForm\">
<div class=\"container\">

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Espace admin</h2>
      </div>
      <div class=\"modal-body\"> 
      \t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client");
        echo "\" method=\"POST\">
          ";
        // line 21
        echo "          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              ";
        // line 27
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "username", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              ";
        // line 36
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "password", array()), 'widget');
        echo "
            </div>

          </div>
          <div class=\"form-group\">
           ";
        // line 42
        echo "           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "remenber", array()), 'widget');
        echo " 
           <label for=\"remember_me\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit"), "html", null, true);
        echo "\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          ";
        // line 56
        echo "          <p class=\"text-center\" > <img src=\"img/orangeMTN.jpg\" alt=\"operateurs\"> </p>
        </form>
        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
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
        return array (  143 => 58,  139 => 56,  131 => 47,  124 => 43,  119 => 42,  110 => 36,  98 => 27,  91 => 21,  87 => 17,  83 => 16,  72 => 7,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello client{% endblock %}

{% block body %}
{# {% trans_default_domain 'FOSUserBundle' %} #}
<body id=\"LoginForm\">
<div class=\"container\">

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\">Espace admin</h2>
      </div>
      <div class=\"modal-body\"> 
      \t{{ form_start(form) }}
        <form action=\"{{ path(\"client\")}}\" method=\"POST\">
          {# {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
          {% endif %} #}
          <div class=\"form-group\">
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              {# <input type=\"text\" class=\"form-control\" placeholder=\"Numéro de téléphone\"  id=\"username\" name=\"username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" /> #}
              {{ form_widget(form.username) }}
            </div>
          </div>
          <div class=\"form-group\">
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
           <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" value=\"{{ 'security.login.submit'|trans }}\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          {# {% if error %}
             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
          {% endif %}
 #}
          <p class=\"text-center\" > <img src=\"img/orangeMTN.jpg\" alt=\"operateurs\"> </p>
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
