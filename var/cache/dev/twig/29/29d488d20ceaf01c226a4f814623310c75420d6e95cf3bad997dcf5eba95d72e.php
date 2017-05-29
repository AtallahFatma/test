<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76bf0ac26a99047ff29b3263e88c04869e0cc34ac959f274dce6eaae3620a324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3e727644b964f9c7e2fa1eb7e84cfa731d9b224c6290e84e53b66fe17901748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e727644b964f9c7e2fa1eb7e84cfa731d9b224c6290e84e53b66fe17901748->enter($__internal_b3e727644b964f9c7e2fa1eb7e84cfa731d9b224c6290e84e53b66fe17901748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4734e8dff3bbba9d4aa86907f5b7c9d0d5380c54ed02c92a86e9b331151d217d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4734e8dff3bbba9d4aa86907f5b7c9d0d5380c54ed02c92a86e9b331151d217d->enter($__internal_4734e8dff3bbba9d4aa86907f5b7c9d0d5380c54ed02c92a86e9b331151d217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b3e727644b964f9c7e2fa1eb7e84cfa731d9b224c6290e84e53b66fe17901748->leave($__internal_b3e727644b964f9c7e2fa1eb7e84cfa731d9b224c6290e84e53b66fe17901748_prof);

        
        $__internal_4734e8dff3bbba9d4aa86907f5b7c9d0d5380c54ed02c92a86e9b331151d217d->leave($__internal_4734e8dff3bbba9d4aa86907f5b7c9d0d5380c54ed02c92a86e9b331151d217d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
