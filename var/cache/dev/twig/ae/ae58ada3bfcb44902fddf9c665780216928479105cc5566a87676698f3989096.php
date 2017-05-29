<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b010cb35fb9a71259ebd5f4d9945690d6bc2df7d5bb357e7184efe2193ab1b2 extends Twig_Template
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
        $__internal_8204590312db685c59f1e86824fb438b7f27e2d5605e238450c65ad635c766ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8204590312db685c59f1e86824fb438b7f27e2d5605e238450c65ad635c766ad->enter($__internal_8204590312db685c59f1e86824fb438b7f27e2d5605e238450c65ad635c766ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d3d0c93ebf128ff584dfed3ffade61d038f2aca51bb14f4bb2ba107b4afbb0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d0c93ebf128ff584dfed3ffade61d038f2aca51bb14f4bb2ba107b4afbb0cf->enter($__internal_d3d0c93ebf128ff584dfed3ffade61d038f2aca51bb14f4bb2ba107b4afbb0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8204590312db685c59f1e86824fb438b7f27e2d5605e238450c65ad635c766ad->leave($__internal_8204590312db685c59f1e86824fb438b7f27e2d5605e238450c65ad635c766ad_prof);

        
        $__internal_d3d0c93ebf128ff584dfed3ffade61d038f2aca51bb14f4bb2ba107b4afbb0cf->leave($__internal_d3d0c93ebf128ff584dfed3ffade61d038f2aca51bb14f4bb2ba107b4afbb0cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
