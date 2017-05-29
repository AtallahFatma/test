<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e8da47c82bdbf50e78aef30bcc8d459ea0b2d9469dfc5aab66ef267e1403fcc8 extends Twig_Template
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
        $__internal_c53c73628c8117eaed4debc408eba4cc309e81731eef3c5517c79c5928e2f85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53c73628c8117eaed4debc408eba4cc309e81731eef3c5517c79c5928e2f85f->enter($__internal_c53c73628c8117eaed4debc408eba4cc309e81731eef3c5517c79c5928e2f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9d14663a181f65b1b8e6aa7c6e60cb0804f7ab517d6898a192c69ad0e689e022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d14663a181f65b1b8e6aa7c6e60cb0804f7ab517d6898a192c69ad0e689e022->enter($__internal_9d14663a181f65b1b8e6aa7c6e60cb0804f7ab517d6898a192c69ad0e689e022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c53c73628c8117eaed4debc408eba4cc309e81731eef3c5517c79c5928e2f85f->leave($__internal_c53c73628c8117eaed4debc408eba4cc309e81731eef3c5517c79c5928e2f85f_prof);

        
        $__internal_9d14663a181f65b1b8e6aa7c6e60cb0804f7ab517d6898a192c69ad0e689e022->leave($__internal_9d14663a181f65b1b8e6aa7c6e60cb0804f7ab517d6898a192c69ad0e689e022_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
