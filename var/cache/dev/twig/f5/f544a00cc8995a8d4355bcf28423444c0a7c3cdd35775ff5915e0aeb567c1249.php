<?php

/* cj_offres/index.html.twig */
class __TwigTemplate_29b832b03611ed511f648e348946f6d504fe4697d14b10a8b577453b94cbc9d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cj_offres/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cj_offres/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cj_offres/index.html.twig"));

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

        echo " Offres d'emploi";
        
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
        echo "  <div class=\"container-fluid\">

    
    <!--==========================
      About Us Section
    ============================--> 
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Emplois et stages </h3> 

    
          ";
        // line 39
        echo "        </header>
    ";
        // line 45
        echo "


    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "flashes", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
        <div class=\"alert alert-danger text-center\" role=\"alert\">
        ";
            // line 50
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " sur les offres <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo " \">connectez-vous ici</a>  
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
     
     ";
        // line 56
        echo "    

<div>
 

     
 
</div>


";
        // line 72
        echo "
  
   

   
      <div class=\"row about-cols\">
          
     ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cj_offre"]) {
            // line 80
            echo "          <div class=\"col-md-3 wow fadeInUp\"> 
            <div class=\"about-col\">
              <div class=\"img\">
               <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo "\"><img src=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/offres/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "image", array()), "html", null, true);
            echo " \" alt=\"\" class=\"img-fluid\"></a> 
               ";
            // line 85
            echo "              </div>
              <h2 class=\"title\"><a href=\" ";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo " \"> <b></b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "type", array()), "html", null, true);
            echo " </a></h2>
              <h2>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "libelle", array()), "html", null, true);
            echo "</h2> 
            
               <p>
                <b>Récruteur :</b> ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "recruteur", array()), "html", null, true);
            echo "
              </p>
              <p>
               ";
            // line 94
            echo "                <b>Date limite :</b> ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array()), "d-m-y")) : ("")), "html", null, true);
            echo "
              </p>
              <p><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo "\"> <button class=\"btn btn-primary\" >Suite</button> </a>  </p>

              ";
            // line 98
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 99
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-primary\" > Modifier cette offre</button> </a>         
              ";
            }
            // line 101
            echo "
              ";
            // line 104
            echo "              
            </div>
          </div>

     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cj_offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "      

          </div>
   
    <div class=\"col-md-2\">
      
    </div>
         




<div class=\"pagination\">
    ";
        // line 121
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 121, $this->source); })()));
        echo "
</div>
      </div>
    </section><!-- #about -->


 
              ";
        // line 128
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 129
            echo "  <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_new");
            echo "\">  <button class=\"btn btn-primary\" >Ajouter une offre</button> </a>             
            <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Libelle</th>
                <th>Metier</th>
                <th>Niveau</th>
                <th>Experience</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Recruteur</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Dossier</th>
                <th>DateAjout</th>
                <th>Date limite</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 152, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["cj_offre"]) {
                // line 153
                echo "            <tr>
                <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "type", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "libelle", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "metier", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "niveau", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "experience", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "lieu", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "description", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "recruteur", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "tel", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dossier", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 166
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateAjout", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateAjout", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
                echo "</td>
                <td>";
                // line 167
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
                echo "</td>
                <td>";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "image", array()), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\">Détails</a>
                    <a href=\"";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 175
                echo "            <tr>
                <td colspan=\"16\">Aucune donnée trouvée</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cj_offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "        </tbody>
    </table>

   <a href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_new");
            echo "\">  <button class=\"btn btn-primary\" >Ajouter une offre</button> </a>      
              ";
        }
        // line 184
        echo "   
  </div>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cj_offres/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 184,  357 => 182,  352 => 179,  343 => 175,  334 => 171,  330 => 170,  325 => 168,  321 => 167,  317 => 166,  313 => 165,  309 => 164,  305 => 163,  301 => 162,  297 => 161,  293 => 160,  289 => 159,  285 => 158,  281 => 157,  277 => 156,  273 => 155,  269 => 154,  266 => 153,  261 => 152,  234 => 129,  232 => 128,  222 => 121,  207 => 108,  197 => 104,  194 => 101,  188 => 99,  186 => 98,  181 => 96,  175 => 94,  169 => 90,  163 => 87,  157 => 86,  154 => 85,  147 => 83,  142 => 80,  138 => 79,  129 => 72,  117 => 56,  113 => 53,  102 => 50,  95 => 48,  90 => 45,  87 => 39,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Offres d'emploi{% endblock %}

{% block body %}
  <div class=\"container-fluid\">

    
    <!--==========================
      About Us Section
    ============================--> 
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Emplois et stages </h3> 

    
          {# <p>

           {% form_theme  formSearch 'bootstrap_4_layout.html.twig' %} 

              <form  action=\" {{ path('search') }} \" method=\"POST\">
                  {{ form_start(formSearch)}}
          <div class=\"row\">
            <div class=\" form-group col-md-4\"> {{ form_widget(formSearch.Type) }}</div>
            <div class=\" form-group col-md-4\">{{ form_widget(formSearch.Niveau) }}
</div>
            <div class=\" form-group col-md-4\">{{ form_widget(formSearch.Metier) }}
</div>
          </div>
                     {{ form_widget(formSearch) }}

                  {{ form_end(formSearch)}}
              
              </form>
              
          </p> #}
        </header>
    {# {% if \$session->get('user') == 'Nonabonne' %}
      <div>
        <p class=\"alert alert-danger text-center\" role=\"alert\">Connectez vous <a href=\"\">ici</a> pour bénéficier de plus de détails </p>
      </div>
    {% endif %}  #}



    {% for message in app.flashes('info') %} 
        <div class=\"alert alert-danger text-center\" role=\"alert\">
        {{ message }} sur les offres <a href=\"{{ path('fos_user_security_login')}} \">connectez-vous ici</a>  
      </div>
    {% endfor %}

     
     {#  <div> <p> {{ \$session->get('recordMessage') }}</p> </div>   #}
    

<div>
 

     
 
</div>


{# <div class=\"row about-cols\">
  <div class=\"col-md-12 wow fadeInUp\">
     <img src=\"http://tmottgogo.com/wp-content/uploads/2016/02/AbolitionOfSlavery-1100x150.jpg\" alt=\"pub\">
  </div>

</div>  #}

  
   

   
      <div class=\"row about-cols\">
          
     {% for cj_offre in cj_offres %}
          <div class=\"col-md-3 wow fadeInUp\"> 
            <div class=\"about-col\">
              <div class=\"img\">
               <a href=\"{{ path('cj_offres_show', {'id': cj_offre.id}) }}\"><img src=\" {{asset('img/offres/') }}{{ cj_offre.image }} \" alt=\"\" class=\"img-fluid\"></a> 
               {#  <div class=\"icon\"><i class=\"ion-chatbox-working\"> </i></div>#}
              </div>
              <h2 class=\"title\"><a href=\" {{ path('cj_offres_show', {'id': cj_offre.id}) }} \"> <b></b> {{ cj_offre.type }} </a></h2>
              <h2>{{ cj_offre.libelle }}</h2> 
            
               <p>
                <b>Récruteur :</b> {{ cj_offre.recruteur }}
              </p>
              <p>
               {#  <b>Date limite :</b> {{ cj_offre.dateFin ? cj_offre.dateFin|date('d-m-y H:i:s') : '' }} #}
                <b>Date limite :</b> {{ cj_offre.dateFin ? cj_offre.dateFin|date('d-m-y') : '' }}
              </p>
              <p><a href=\"{{ path('cj_offres_show', {'id': cj_offre.id}) }}\"> <button class=\"btn btn-primary\" >Suite</button> </a>  </p>

              {% if is_granted('ROLE_ADMIN')  %}
               <a href=\"{{ path('cj_offres_edit', {'id': cj_offre.id}) }}\"> <button class=\"btn btn-primary\" > Modifier cette offre</button> </a>         
              {% endif %}

              {# 
               <a href=\"{{ path('cj_offres_edit', {'id': cj_offre.id}) }}\">modifier</a> #}
              
            </div>
          </div>

     {% endfor %}      

          </div>
   
    <div class=\"col-md-2\">
      
    </div>
         




<div class=\"pagination\">
    {{ knp_pagination_render(cj_offres) }}
</div>
      </div>
    </section><!-- #about -->


 
              {% if is_granted('ROLE_ADMIN')  %}
  <a href=\"{{ path('cj_offres_new') }}\">  <button class=\"btn btn-primary\" >Ajouter une offre</button> </a>             
            <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Libelle</th>
                <th>Metier</th>
                <th>Niveau</th>
                <th>Experience</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Recruteur</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Dossier</th>
                <th>DateAjout</th>
                <th>Date limite</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cj_offre in cj_offres %}
            <tr>
                <td>{{ cj_offre.id }}</td>
                <td>{{ cj_offre.type }}</td>
                <td>{{ cj_offre.libelle }}</td>
                <td>{{ cj_offre.metier }}</td>
                <td>{{ cj_offre.niveau }}</td>
                <td>{{ cj_offre.experience }}</td>
                <td>{{ cj_offre.lieu }}</td>
                <td>{{ cj_offre.description }}</td>
                <td>{{ cj_offre.recruteur }}</td>
                <td>{{ cj_offre.tel }}</td>
                <td>{{ cj_offre.email }}</td>
                <td>{{ cj_offre.dossier }}</td>
                <td>{{ cj_offre.dateAjout ? cj_offre.dateAjout|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ cj_offre.dateFin ? cj_offre.dateFin|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ cj_offre.image }}</td>
                <td>
                    <a href=\"{{ path('cj_offres_show', {'id': cj_offre.id}) }}\">Détails</a>
                    <a href=\"{{ path('cj_offres_edit', {'id': cj_offre.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"16\">Aucune donnée trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   <a href=\"{{ path('cj_offres_new') }}\">  <button class=\"btn btn-primary\" >Ajouter une offre</button> </a>      
              {% endif %}
   
  </div>
 
{% endblock %}
", "cj_offres/index.html.twig", "/var/www/lecjob/templates/cj_offres/index.html.twig");
    }
}
