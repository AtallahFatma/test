<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_60a773e919b85c004fef7d9d5588ae8716d68d509cc767fcbf7a12e19ca9f884 extends Twig_Template
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
        $__internal_7276f966e6112e89f1241d531c44d88850d281453b0c3db3fce5e4df5aa64584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7276f966e6112e89f1241d531c44d88850d281453b0c3db3fce5e4df5aa64584->enter($__internal_7276f966e6112e89f1241d531c44d88850d281453b0c3db3fce5e4df5aa64584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_4b2a72dacc8fb2ec88e905fc31a2d5f1d0d23f0782ef173cd7c4badf2021b9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2a72dacc8fb2ec88e905fc31a2d5f1d0d23f0782ef173cd7c4badf2021b9d0->enter($__internal_4b2a72dacc8fb2ec88e905fc31a2d5f1d0d23f0782ef173cd7c4badf2021b9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_7276f966e6112e89f1241d531c44d88850d281453b0c3db3fce5e4df5aa64584->leave($__internal_7276f966e6112e89f1241d531c44d88850d281453b0c3db3fce5e4df5aa64584_prof);

        
        $__internal_4b2a72dacc8fb2ec88e905fc31a2d5f1d0d23f0782ef173cd7c4badf2021b9d0->leave($__internal_4b2a72dacc8fb2ec88e905fc31a2d5f1d0d23f0782ef173cd7c4badf2021b9d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
