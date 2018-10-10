<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ec4e7dfd0c4e1cf6ea540ad2ee9e5ff0ae0482c4b3c4d134c410081545bb71ae extends Twig_Template
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
        echo "<tr>
    <?php \$widgetAttr = empty(\$help) ? array() : array('attr' => array('aria-describedby' => \$id.'_help')); ?>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form, \$widgetAttr); ?>
        <?php echo \$view['form']->help(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/form_row.html.php", "/var/www/lecjob/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
