<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7e9fb8c553ceba07c16f6b53d9a357d4438a6f032b3d8a6a173a8544d2bca212 extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/var/www/lecjob/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
