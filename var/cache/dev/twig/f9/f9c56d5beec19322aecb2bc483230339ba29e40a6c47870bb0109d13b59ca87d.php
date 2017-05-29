<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_501d28dc35d0a9b0ae7d99ecd9c7f941fdfb54f813d14dd33122c1bdc5b0b10d extends Twig_Template
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
        $__internal_a998db8ee0029916d3f1c8c18ff1dabb004dbf92c5126b11931296902993714b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a998db8ee0029916d3f1c8c18ff1dabb004dbf92c5126b11931296902993714b->enter($__internal_a998db8ee0029916d3f1c8c18ff1dabb004dbf92c5126b11931296902993714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f9a439433220bc184d81bdf7e9ed3a6c053572a47bc30e4fc14bf19baed93d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a439433220bc184d81bdf7e9ed3a6c053572a47bc30e4fc14bf19baed93d83->enter($__internal_f9a439433220bc184d81bdf7e9ed3a6c053572a47bc30e4fc14bf19baed93d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a998db8ee0029916d3f1c8c18ff1dabb004dbf92c5126b11931296902993714b->leave($__internal_a998db8ee0029916d3f1c8c18ff1dabb004dbf92c5126b11931296902993714b_prof);

        
        $__internal_f9a439433220bc184d81bdf7e9ed3a6c053572a47bc30e4fc14bf19baed93d83->leave($__internal_f9a439433220bc184d81bdf7e9ed3a6c053572a47bc30e4fc14bf19baed93d83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
