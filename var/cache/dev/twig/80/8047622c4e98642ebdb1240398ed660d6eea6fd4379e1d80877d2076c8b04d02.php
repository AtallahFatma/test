<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2047749632772e78fc479fb789b20bfbae028baf86d5e829db4bd4947a1e2e3 extends Twig_Template
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
        $__internal_c928e82c32d9be2828ffd9aabe5ce195f893c7b6f48053d4fda399d1096138e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c928e82c32d9be2828ffd9aabe5ce195f893c7b6f48053d4fda399d1096138e2->enter($__internal_c928e82c32d9be2828ffd9aabe5ce195f893c7b6f48053d4fda399d1096138e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_292b8f3400772e124697e64967f683fc01db0f9f59942194f85ac4b79e6b1260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292b8f3400772e124697e64967f683fc01db0f9f59942194f85ac4b79e6b1260->enter($__internal_292b8f3400772e124697e64967f683fc01db0f9f59942194f85ac4b79e6b1260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c928e82c32d9be2828ffd9aabe5ce195f893c7b6f48053d4fda399d1096138e2->leave($__internal_c928e82c32d9be2828ffd9aabe5ce195f893c7b6f48053d4fda399d1096138e2_prof);

        
        $__internal_292b8f3400772e124697e64967f683fc01db0f9f59942194f85ac4b79e6b1260->leave($__internal_292b8f3400772e124697e64967f683fc01db0f9f59942194f85ac4b79e6b1260_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
