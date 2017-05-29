<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_af0d7ffca172acc8290551e8da69fd63cb787d448b705003130cc80d19d83054 extends Twig_Template
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
        $__internal_e13694327ddb0128bd7e07c9f9f57ef8e28ba855b6add9da8613b644083e24e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13694327ddb0128bd7e07c9f9f57ef8e28ba855b6add9da8613b644083e24e9->enter($__internal_e13694327ddb0128bd7e07c9f9f57ef8e28ba855b6add9da8613b644083e24e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1a7f43bc5098222255eff28f0b478054e132697b85bd4a2a92e590b2d86c8594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7f43bc5098222255eff28f0b478054e132697b85bd4a2a92e590b2d86c8594->enter($__internal_1a7f43bc5098222255eff28f0b478054e132697b85bd4a2a92e590b2d86c8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e13694327ddb0128bd7e07c9f9f57ef8e28ba855b6add9da8613b644083e24e9->leave($__internal_e13694327ddb0128bd7e07c9f9f57ef8e28ba855b6add9da8613b644083e24e9_prof);

        
        $__internal_1a7f43bc5098222255eff28f0b478054e132697b85bd4a2a92e590b2d86c8594->leave($__internal_1a7f43bc5098222255eff28f0b478054e132697b85bd4a2a92e590b2d86c8594_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
