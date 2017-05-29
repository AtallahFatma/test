<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a850b9d28cdb48dc986b07263c05526f4999b31edacc9ce6e365ca366872178 extends Twig_Template
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
        $__internal_f3f5d43729e636376a21d93613b12a36d1db47574c56ea4e3990efc4edb2e712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f5d43729e636376a21d93613b12a36d1db47574c56ea4e3990efc4edb2e712->enter($__internal_f3f5d43729e636376a21d93613b12a36d1db47574c56ea4e3990efc4edb2e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a12ff7dbbdc678702d6ee5b05bd1dd85f026a10ac1f8f6c3b87292b23468410c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12ff7dbbdc678702d6ee5b05bd1dd85f026a10ac1f8f6c3b87292b23468410c->enter($__internal_a12ff7dbbdc678702d6ee5b05bd1dd85f026a10ac1f8f6c3b87292b23468410c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f3f5d43729e636376a21d93613b12a36d1db47574c56ea4e3990efc4edb2e712->leave($__internal_f3f5d43729e636376a21d93613b12a36d1db47574c56ea4e3990efc4edb2e712_prof);

        
        $__internal_a12ff7dbbdc678702d6ee5b05bd1dd85f026a10ac1f8f6c3b87292b23468410c->leave($__internal_a12ff7dbbdc678702d6ee5b05bd1dd85f026a10ac1f8f6c3b87292b23468410c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
