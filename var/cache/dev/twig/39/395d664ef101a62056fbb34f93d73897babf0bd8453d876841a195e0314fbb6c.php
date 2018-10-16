<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7ecf1f17e177246ef61458b19fc1a5a6cc37c4a38545f28c720f8e10f86fecf9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "            ";
            $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
            // line 6
            echo "          ";
        } else {
            // line 7
            echo "          \t<h1 class=\"form-heading\">
\t\t\t  <div class=\"row\">
\t\t\t  <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
\t\t\t  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
\t\t\t  <strong><i class=\"fa fa-warning\"></i>Zone privé ! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt\">Vous n'est pas le bienvenue ici ! </p> <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cj_offres_index");
            echo "\">Rétour à l'accueil</a> </marquee>
\t\t\t  </div>
\t\t\t  </div>
\t\t\t</h1>
 
          ";
        }
        // line 17
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  68 => 11,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
\t      {% if is_granted('ROLE_ADMIN')  %}
            {% include \"@FOSUser/Registration/register_content.html.twig\" %}
          {% else %}
          \t<h1 class=\"form-heading\">
\t\t\t  <div class=\"row\">
\t\t\t  <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
\t\t\t  <button type=\"button\" onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">×</span><span class=\"sr-only\">Close</span></button>
\t\t\t  <strong><i class=\"fa fa-warning\"></i>Zone privé ! </strong> <marquee><p style=\"font-family: Impact; font-size: 18pt\">Vous n'est pas le bienvenue ici ! </p> <a href=\"{{ path('cj_offres_index') }}\">Rétour à l'accueil</a> </marquee>
\t\t\t  </div>
\t\t\t  </div>
\t\t\t</h1>
 
          {% endif %}

{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
