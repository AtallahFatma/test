<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8bbc625140afc72c8b19f38f0f24da0557ba3863bbb77bb63a619b97bc881b85 extends Twig_Template
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
        $__internal_5ed313005b3bb314d1c60e008007dc8f4b9e52a5babab5b70f764f8a544180ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed313005b3bb314d1c60e008007dc8f4b9e52a5babab5b70f764f8a544180ae->enter($__internal_5ed313005b3bb314d1c60e008007dc8f4b9e52a5babab5b70f764f8a544180ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_47515eedb29101104731912e48008accd27d157942e600694eceba2c9762f7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47515eedb29101104731912e48008accd27d157942e600694eceba2c9762f7c2->enter($__internal_47515eedb29101104731912e48008accd27d157942e600694eceba2c9762f7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5ed313005b3bb314d1c60e008007dc8f4b9e52a5babab5b70f764f8a544180ae->leave($__internal_5ed313005b3bb314d1c60e008007dc8f4b9e52a5babab5b70f764f8a544180ae_prof);

        
        $__internal_47515eedb29101104731912e48008accd27d157942e600694eceba2c9762f7c2->leave($__internal_47515eedb29101104731912e48008accd27d157942e600694eceba2c9762f7c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
