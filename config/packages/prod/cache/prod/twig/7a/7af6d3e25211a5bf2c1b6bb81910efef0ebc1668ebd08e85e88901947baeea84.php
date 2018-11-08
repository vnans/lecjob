<?php

/* client/index.html.twig */
class __TwigTemplate_577b640f14d4eebfc9667339f1c9de41e0c32b2ae19e0b0f6c008e419dfae4a8 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion client";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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

<div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-heading\">
        <h2 class=\"text-center\"> Connectez-vous</h2>
      </div>
      <div class=\"modal-body\"> 
      \t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client");
        echo "\" method=\"POST\">
          ";
        // line 29
        echo "          <div class=\"form-group\">
          \t<label for=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Numero de téléphone"), "html", null, true);
        echo "</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-user\"></span>
              </span>
              ";
        // line 37
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", array()), 'widget');
        echo "
            </div>
          </div>
          <div class=\"form-group\">
          \t<label for=\"username\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mot de passe"), "html", null, true);
        echo "</label>
          
            <div class=\"input-group\">
              <span class=\"input-group-addon\">
              <span class=\"glyphicon glyphicon-lock\"></span>
              </span>
              ";
        // line 48
        echo "              ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", array()), 'widget');
        echo "
            </div>

          </div>
          <div class=\"form-group\">
           ";
        // line 54
        echo "           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "remenber", array()), 'widget');
        echo " 
           <label for=\"remember_me\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se souvenir de moi"), "html", null, true);
        echo "</label>
          </div>       

          <div class=\"form-group text-center\">
            <input type=\"submit\" id=\"_submit\" name=\"submit\" class=\"btn btn-primary btn-lg\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connexion"), "html", null, true);
        echo "\" />
          </div>
          <p class=\"text-primary text-center\" >Vous n'avez pas de compte ? envoyer simplement par SMS </p>
          <p class=\"text-primary text-center\" ><mark>CJOB au 98025</mark> 206 Fcfa/15 Jours</p>

          ";
        // line 68
        echo "          <p class=\"text-center\" > <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/orangeMTN.jpg"), "html", null, true);
        echo "\" alt=\"operateurs\"> </p>
        </form>
        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>
 

</body>
</html>


";
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
        return array (  134 => 70,  128 => 68,  120 => 59,  113 => 55,  108 => 54,  99 => 48,  90 => 41,  82 => 37,  73 => 30,  70 => 29,  66 => 25,  62 => 24,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "client/index.html.twig", "/home/mosercic/cjob.alcalis.tech/templates/client/index.html.twig");
    }
}
