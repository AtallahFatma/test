<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_71135c85904bf810169f521ea4d0867221d786b90dd265c188d9d9c524cb0214 extends Twig_Template
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
        $__internal_920be0795f9357b2475cee6d8f4480d0a69a2a0d1d6a5a5c8240d1b8cbdd79a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920be0795f9357b2475cee6d8f4480d0a69a2a0d1d6a5a5c8240d1b8cbdd79a4->enter($__internal_920be0795f9357b2475cee6d8f4480d0a69a2a0d1d6a5a5c8240d1b8cbdd79a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_af7f7db2c4dbd55007d713a494f3d9438184f57e8311e709ce18cf9db546a9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7f7db2c4dbd55007d713a494f3d9438184f57e8311e709ce18cf9db546a9b1->enter($__internal_af7f7db2c4dbd55007d713a494f3d9438184f57e8311e709ce18cf9db546a9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_920be0795f9357b2475cee6d8f4480d0a69a2a0d1d6a5a5c8240d1b8cbdd79a4->leave($__internal_920be0795f9357b2475cee6d8f4480d0a69a2a0d1d6a5a5c8240d1b8cbdd79a4_prof);

        
        $__internal_af7f7db2c4dbd55007d713a494f3d9438184f57e8311e709ce18cf9db546a9b1->leave($__internal_af7f7db2c4dbd55007d713a494f3d9438184f57e8311e709ce18cf9db546a9b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
