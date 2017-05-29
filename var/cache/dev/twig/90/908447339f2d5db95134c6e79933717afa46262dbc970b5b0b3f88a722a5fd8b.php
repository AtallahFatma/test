<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_f00fbed8c8612022e4bc8cb06ef23a8efaae9a7af15d3273cf5e5e39250a8975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00fbed8c8612022e4bc8cb06ef23a8efaae9a7af15d3273cf5e5e39250a8975->enter($__internal_f00fbed8c8612022e4bc8cb06ef23a8efaae9a7af15d3273cf5e5e39250a8975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2bde43e916e125c33834b6ed28d4ddd61e0eee474bcd8af1008ebe5eb428da9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bde43e916e125c33834b6ed28d4ddd61e0eee474bcd8af1008ebe5eb428da9f->enter($__internal_2bde43e916e125c33834b6ed28d4ddd61e0eee474bcd8af1008ebe5eb428da9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f00fbed8c8612022e4bc8cb06ef23a8efaae9a7af15d3273cf5e5e39250a8975->leave($__internal_f00fbed8c8612022e4bc8cb06ef23a8efaae9a7af15d3273cf5e5e39250a8975_prof);

        
        $__internal_2bde43e916e125c33834b6ed28d4ddd61e0eee474bcd8af1008ebe5eb428da9f->leave($__internal_2bde43e916e125c33834b6ed28d4ddd61e0eee474bcd8af1008ebe5eb428da9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
