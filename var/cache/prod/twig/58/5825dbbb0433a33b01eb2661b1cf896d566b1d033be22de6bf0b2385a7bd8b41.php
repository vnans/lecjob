<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f0a8f03b16199ee52cc485bdc4fbabfff61f96fec7c21acddb7eda2f03b33035 extends Twig_Template
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
        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/repeated_row.html.php", "/var/www/lecjob/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
