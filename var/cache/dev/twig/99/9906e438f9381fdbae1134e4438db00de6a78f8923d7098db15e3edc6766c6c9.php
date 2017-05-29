<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9da4296c33e4a2507a8266e721232d10f3a1b58beaa68b6875203d4e982a6302 extends Twig_Template
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
        $__internal_cf56910651382c184d4fc7c6604e4d07ccb140604618944cc44761341eb47efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf56910651382c184d4fc7c6604e4d07ccb140604618944cc44761341eb47efa->enter($__internal_cf56910651382c184d4fc7c6604e4d07ccb140604618944cc44761341eb47efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0169102ac800b47b96ac01d76728bebffdab0e5843af5551ef34d396edafc645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0169102ac800b47b96ac01d76728bebffdab0e5843af5551ef34d396edafc645->enter($__internal_0169102ac800b47b96ac01d76728bebffdab0e5843af5551ef34d396edafc645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cf56910651382c184d4fc7c6604e4d07ccb140604618944cc44761341eb47efa->leave($__internal_cf56910651382c184d4fc7c6604e4d07ccb140604618944cc44761341eb47efa_prof);

        
        $__internal_0169102ac800b47b96ac01d76728bebffdab0e5843af5551ef34d396edafc645->leave($__internal_0169102ac800b47b96ac01d76728bebffdab0e5843af5551ef34d396edafc645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
