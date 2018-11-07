<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_016d7a3a541eec6f8bf45a8dfec80e74c3d8854aced159e063d3ddf982676400 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
   <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Modifier mon mot de passe</h3>
        ";
        // line 9
        echo "        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-1\">
            <div class=\"contact-address\">
             ";
        // line 16
        echo "              <h3></h3>
              <address></address>
            </div>
          </div> 

          <div class=\"col-md-10\">
            <div class=\"contact-phone\">
             
             
             <p>
              \t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        echo "
\t\t\t    <div>
\t\t\t        <input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t    </div>
\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
\t\t\t</p>
            
            </div>
          </div>

          <div class=\"col-md-1\">
            <div class=\"contact-email\">
             ";
        // line 42
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
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 42,  71 => 31,  66 => 29,  61 => 27,  57 => 26,  45 => 16,  37 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

   <section id=\"contact\" class=\"section-bg wow fadeInUp\">
      <div class=\"container\">

        <div class=\"section-header\">
          <h3>Modifier mon mot de passe</h3>
        {#   <p></p> #}
        </div>

        <div class=\"row contact-info\">

          <div class=\"col-md-1\">
            <div class=\"contact-address\">
             {#  <i class=\"ion-ios-location-outline\"></i> #}
              <h3></h3>
              <address></address>
            </div>
          </div> 

          <div class=\"col-md-10\">
            <div class=\"contact-phone\">
             
             
             <p>
              \t{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
                {{ form_widget(form) }}
\t\t\t    <div>
\t\t\t        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
\t\t\t    </div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</p>
            
            </div>
          </div>

          <div class=\"col-md-1\">
            <div class=\"contact-email\">
             {#  <i class=\"ion-ios-email-outline\"></i> 
              <h3>Service</h3>
              <p>CJOB</p>#}
            </div>
          </div>

        </div>
        

      </div> 
    </section><!-- #contact --> 

", "@FOSUser/ChangePassword/change_password_content.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
