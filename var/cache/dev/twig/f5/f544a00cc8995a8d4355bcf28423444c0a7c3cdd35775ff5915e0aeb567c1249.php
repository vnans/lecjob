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
        echo " <!--==========================
      About Us Section
    ============================--> 
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Emplois et stages </h3> 
    
          <p>

           ";
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 17, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        echo " 

              <form  action=\" ";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo " \" method=\"POST\">
                  ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
          <div class=\"row\">
            <div class=\" form-group col-md-4\"> ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 22, $this->source); })()), "Type", array()), 'widget');
        echo "</div>
            <div class=\" form-group col-md-4\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 23, $this->source); })()), "Niveau", array()), 'widget');
        echo "
</div>
            <div class=\" form-group col-md-4\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 25, $this->source); })()), "Metier", array()), 'widget');
        echo "
</div>
          </div>
                     ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 28, $this->source); })()), 'widget');
        echo "

                  ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new Twig_Error_Runtime('Variable "formSearch" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
              
              </form>
              
          </p>
        </header>

<div>
 

     
 
</div>



        <div class=\"row about-cols\">
 ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cj_offre"]) {
            // line 48
            echo "          <div class=\"col-md-4 wow fadeInUp\">
            <div class=\"about-col\">
              <div class=\"img\">
               <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo "\"><img src=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/img/offres/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "image", array()), "html", null, true);
            echo " \" alt=\"\" class=\"img-fluid\"></a> 
               ";
            // line 53
            echo "              </div>
              <h2 class=\"title\"><a href=\" ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo " \"> <b>Type d'offre :</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "type", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "libelle", array()), "html", null, true);
            echo " </a></h2>
              <p>
                <b>Métier :</b> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "metier", array()), "html", null, true);
            echo "
              </p>
               <p>
                <b>Récruteur :</b> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "recruteur", array()), "html", null, true);
            echo "
              </p>
              <p>
                <b>Date limite :</b> ";
            // line 62
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "
              </p>
              <p><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
            echo "\"> <button class=\"btn btn-primary\" >Suite</button> </a>  </p>

              ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\"> <button class=\"btn btn-primary\" > Modifier cette offre</button> </a>         
              ";
            }
            // line 69
            echo "
              ";
            // line 72
            echo "              
            </div>
          </div>

     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cj_offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      

        </div>



<div class=\"pagination\">
    ";
        // line 83
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 83, $this->source); })()));
        echo "
</div>
      </div>
    </section><!-- #about -->


 
              ";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 91
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
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cj_offres"]) || array_key_exists("cj_offres", $context) ? $context["cj_offres"] : (function () { throw new Twig_Error_Runtime('Variable "cj_offres" does not exist.', 114, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["cj_offre"]) {
                // line 115
                echo "            <tr>
                <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "type", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "libelle", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "metier", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "niveau", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "experience", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "lieu", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "description", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "recruteur", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "tel", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dossier", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 128
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateAjout", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateAjout", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
                echo "</td>
                <td>";
                // line 129
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "dateFin", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
                echo "</td>
                <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cj_offre"], "image", array()), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\">Détails</a>
                    <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["cj_offre"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 137
                echo "            <tr>
                <td colspan=\"16\">Aucune donnée trouvée</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cj_offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "        </tbody>
    </table>

   <a href=\"";
            // line 144
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_new");
            echo "\">  <button class=\"btn btn-primary\" >Ajouter une offre</button> </a>      
              ";
        }
        // line 146
        echo "   
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
        return array (  359 => 146,  354 => 144,  349 => 141,  340 => 137,  331 => 133,  327 => 132,  322 => 130,  318 => 129,  314 => 128,  310 => 127,  306 => 126,  302 => 125,  298 => 124,  294 => 123,  290 => 122,  286 => 121,  282 => 120,  278 => 119,  274 => 118,  270 => 117,  266 => 116,  263 => 115,  258 => 114,  231 => 91,  229 => 90,  219 => 83,  210 => 76,  200 => 72,  197 => 69,  191 => 67,  189 => 66,  184 => 64,  179 => 62,  173 => 59,  167 => 56,  158 => 54,  155 => 53,  148 => 51,  143 => 48,  139 => 47,  119 => 30,  114 => 28,  108 => 25,  103 => 23,  99 => 22,  94 => 20,  90 => 19,  85 => 17,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Offres d'emploi{% endblock %}

{% block body %}
 <!--==========================
      About Us Section
    ============================--> 
    <section id=\"about\">
      <div class=\"container\">

        <header class=\"section-header\">
          <h3>Emplois et stages </h3> 
    
          <p>

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
              
          </p>
        </header>

<div>
 

     
 
</div>



        <div class=\"row about-cols\">
 {% for cj_offre in cj_offres %}
          <div class=\"col-md-4 wow fadeInUp\">
            <div class=\"about-col\">
              <div class=\"img\">
               <a href=\"{{ path('cj_offres_show', {'id': cj_offre.id}) }}\"><img src=\" {{asset('public/img/offres/') }}{{ cj_offre.image }} \" alt=\"\" class=\"img-fluid\"></a> 
               {#  <div class=\"icon\"><i class=\"ion-chatbox-working\"> </i></div>#}
              </div>
              <h2 class=\"title\"><a href=\" {{ path('cj_offres_show', {'id': cj_offre.id}) }} \"> <b>Type d'offre :</b> {{ cj_offre.type }}  {{ cj_offre.libelle }} </a></h2>
              <p>
                <b>Métier :</b> {{ cj_offre.metier }}
              </p>
               <p>
                <b>Récruteur :</b> {{ cj_offre.recruteur }}
              </p>
              <p>
                <b>Date limite :</b> {{ cj_offre.dateFin ? cj_offre.dateFin|date('Y-m-d H:i:s') : '' }}
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
   
{% endblock %}
", "cj_offres/index.html.twig", "/var/www/lecjob/templates/cj_offres/index.html.twig");
    }
}
