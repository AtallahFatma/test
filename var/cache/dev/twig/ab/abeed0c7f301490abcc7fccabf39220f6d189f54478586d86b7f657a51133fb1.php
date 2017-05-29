<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_3cddecadab2b00f30c2dc9cf0426ba136574b4734fb77d2024c07d50d6617602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cddecadab2b00f30c2dc9cf0426ba136574b4734fb77d2024c07d50d6617602->enter($__internal_3cddecadab2b00f30c2dc9cf0426ba136574b4734fb77d2024c07d50d6617602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_af2dc073d7ce3c01afa50cef84b3cb16a4e189b7818419b4913f95abd450e774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2dc073d7ce3c01afa50cef84b3cb16a4e189b7818419b4913f95abd450e774->enter($__internal_af2dc073d7ce3c01afa50cef84b3cb16a4e189b7818419b4913f95abd450e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3cddecadab2b00f30c2dc9cf0426ba136574b4734fb77d2024c07d50d6617602->leave($__internal_3cddecadab2b00f30c2dc9cf0426ba136574b4734fb77d2024c07d50d6617602_prof);

        
        $__internal_af2dc073d7ce3c01afa50cef84b3cb16a4e189b7818419b4913f95abd450e774->leave($__internal_af2dc073d7ce3c01afa50cef84b3cb16a4e189b7818419b4913f95abd450e774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
