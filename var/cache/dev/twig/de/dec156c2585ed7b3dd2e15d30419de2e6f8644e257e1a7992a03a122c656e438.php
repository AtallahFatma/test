<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8cffbb1fe8b1699a05e879eb7aef88e3bd574f3762956b7656e4af077bb583d3 extends Twig_Template
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
        $__internal_df962aaf15e797df9b3d313fdd8b6de50875a858460a1f0965eabbff51f9d72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df962aaf15e797df9b3d313fdd8b6de50875a858460a1f0965eabbff51f9d72a->enter($__internal_df962aaf15e797df9b3d313fdd8b6de50875a858460a1f0965eabbff51f9d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_02d2e57b4de997dec8518cc3968b8470ee0f7c47cbd19f6c0f7ad17bbf737497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d2e57b4de997dec8518cc3968b8470ee0f7c47cbd19f6c0f7ad17bbf737497->enter($__internal_02d2e57b4de997dec8518cc3968b8470ee0f7c47cbd19f6c0f7ad17bbf737497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_df962aaf15e797df9b3d313fdd8b6de50875a858460a1f0965eabbff51f9d72a->leave($__internal_df962aaf15e797df9b3d313fdd8b6de50875a858460a1f0965eabbff51f9d72a_prof);

        
        $__internal_02d2e57b4de997dec8518cc3968b8470ee0f7c47cbd19f6c0f7ad17bbf737497->leave($__internal_02d2e57b4de997dec8518cc3968b8470ee0f7c47cbd19f6c0f7ad17bbf737497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
