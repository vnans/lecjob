<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9081aa5269c44caa6b1b330287beb3d4c1694826a0f54343bb71592f9330842d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
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
        return array (  59 => 17,  50 => 11,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:register.html.twig", "/var/www/lecjob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
