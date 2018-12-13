<?php

/* cj_offres/show.html.twig */
class __TwigTemplate_98e1d05f723713be980147e1225c9d783eae32415f5555a7889312bcde42b9ee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cj_offres/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cj_offres/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cj_offres/show.html.twig"));

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

        echo "Cjob Offres";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section id=\"services\"> 
     <header class=\"section-header\">
        
    <h3>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 10, $this->source); })()), "type", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 10, $this->source); })()), "libelle", array()), "html", null, true);
        echo " </h3>
    </header>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"img\">
               <img src=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offres/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 16, $this->source); })()), "image", array()), "html", null, true);
        echo " \" alt=\"\" class=\"img-fluid\"> 
                <div class=\"icon\"><i class=\"ion-ios-speedometer-outline\"></i></div>
              </div>
        </div> 

        <div class=\"col-md-8\">
           <table class=\"table table-striped\">
        <tbody>
           
            <tr>
                <th>Metier/Secteur </th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 27, $this->source); })()), "metier", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau d'étude</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 31, $this->source); })()), "niveau", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expérience professionnelle</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 35, $this->source); })()), "experience", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lieu de travail</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 39, $this->source); })()), "lieu", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>Récruteur</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 44, $this->source); })()), "recruteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact du récruteur </th>
                <td>Tel :";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 48, $this->source); })()), "tel", array()), "html", null, true);
        echo " //  Email :";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 48, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            
                <th>Dossier à fournir</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 52, $this->source); })()), "dossier", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'Ajout</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 56, $this->source); })()), "dateAjout", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 56, $this->source); })()), "dateAjout", array()), "d-m-y H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date limite</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 60, $this->source); })()), "dateFin", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 60, $this->source); })()), "dateFin", array()), "d-m-y H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
        echo "\">  <button class=\"btn btn-primary\">  Retourner à la liste des offres</button> </a> 

   <div>
    ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "
    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 71, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"> <button class=\"btn btn-success\">Modifier cette offre</button>  </a> <br> <br> 
    ";
            // line 72
            echo twig_include($this->env, $context, "cj_offres/_delete_form.html.twig");
            echo "

";
        }
        // line 75
        echo "     
     ";
        // line 76
        if ((isset($context["recordMessage"]) || array_key_exists("recordMessage", $context))) {
            // line 77
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["recordMessage"]) || array_key_exists("recordMessage", $context) ? $context["recordMessage"] : (function () { throw new Twig_Error_Runtime('Variable "recordMessage" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "
     ";
        }
        // line 79
        echo "    
</section>
    
  
   </div> 
        </div>
    </div>
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Description de l'offre</h3>
          <div>
              <p>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cj_offre"]) || array_key_exists("cj_offre", $context) ? $context["cj_offre"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offre" does not exist.', 92, $this->source); })()), "description", array()), "html", null, true);
        echo "</p>
          </div>
          
        </header>
    </section> 

   
    ";
        // line 105
        echo "<!-- #clients -->

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cj_offres/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 105,  218 => 92,  203 => 79,  197 => 77,  195 => 76,  192 => 75,  186 => 72,  182 => 71,  179 => 70,  177 => 69,  171 => 66,  162 => 60,  155 => 56,  148 => 52,  139 => 48,  132 => 44,  124 => 39,  117 => 35,  110 => 31,  103 => 27,  88 => 16,  77 => 10,  72 => 7,  63 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Cjob Offres{% endblock %}


{% block body %}
<section id=\"services\"> 
     <header class=\"section-header\">
        
    <h3>{{ cj_offre.type }} : {{ cj_offre.libelle }} </h3>
    </header>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"img\">
               <img src=\" {{asset('img/offres/') }}{{ cj_offre.image }} \" alt=\"\" class=\"img-fluid\"> 
                <div class=\"icon\"><i class=\"ion-ios-speedometer-outline\"></i></div>
              </div>
        </div> 

        <div class=\"col-md-8\">
           <table class=\"table table-striped\">
        <tbody>
           
            <tr>
                <th>Metier/Secteur </th>
                <td>{{ cj_offre.metier }}</td>
            </tr>
            <tr>
                <th>Niveau d'étude</th>
                <td>{{ cj_offre.niveau }}</td>
            </tr>
            <tr>
                <th>Expérience professionnelle</th>
                <td>{{ cj_offre.experience }}</td>
            </tr>
            <tr>
                <th>Lieu de travail</th>
                <td>{{ cj_offre.lieu }}</td>
            </tr>
            
            <tr>
                <th>Récruteur</th>
                <td>{{ cj_offre.recruteur }}</td>
            </tr>
            <tr>
                <th>Contact du récruteur </th>
                <td>Tel :{{ cj_offre.tel }} //  Email :{{ cj_offre.email }}</td>
            </tr>
            
                <th>Dossier à fournir</th>
                <td>{{ cj_offre.dossier }}</td>
            </tr>
            <tr>
                <th>Date d'Ajout</th>
                <td>{{ cj_offre.dateAjout ? cj_offre.dateAjout|date('d-m-y H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Date limite</th>
                <td>{{ cj_offre.dateFin ? cj_offre.dateFin|date('d-m-y H:i:s') : '' }}</td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"{{ path('cj_offres_index') }}\">  <button class=\"btn btn-primary\">  Retourner à la liste des offres</button> </a> 

   <div>
    {% if is_granted('ROLE_ADMIN') %}

    <a href=\"{{ path('cj_offres_edit', {'id': cj_offre.id}) }}\"> <button class=\"btn btn-success\">Modifier cette offre</button>  </a> <br> <br> 
    {{ include('cj_offres/_delete_form.html.twig') }}

{% endif %}
     
     {% if recordMessage is defined %}
        {{ recordMessage }}
     {% endif %}
    
</section>
    
  
   </div> 
        </div>
    </div>
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Description de l'offre</h3>
          <div>
              <p>{{ cj_offre.description }}</p>
          </div>
          
        </header>
    </section> 

   
    {# <section >
      <div class=\"container\">
        <h3>Offres similaires</h3>
        

      </div>
    </section> #}<!-- #clients -->

   {#  {{ include('cj_offres/_delete_form.html.twig') }} #}
{% endblock %}
", "cj_offres/show.html.twig", "/var/www/lecjob/templates/cj_offres/show.html.twig");
    }
}
