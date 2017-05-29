<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_831d6045f5f7e57b672f77b45a30282bdbdc2f4d734edd3fbfaeb309409bb625 extends Twig_Template
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
        $__internal_b80eddd2e598a4a393f3d49e022646bd3b8311de6f1e075457e6549d08832e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80eddd2e598a4a393f3d49e022646bd3b8311de6f1e075457e6549d08832e68->enter($__internal_b80eddd2e598a4a393f3d49e022646bd3b8311de6f1e075457e6549d08832e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3c6850a8cb7fb330c7d3219a8e60f7d96ca978960a042fc52179b81a105b1801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6850a8cb7fb330c7d3219a8e60f7d96ca978960a042fc52179b81a105b1801->enter($__internal_3c6850a8cb7fb330c7d3219a8e60f7d96ca978960a042fc52179b81a105b1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b80eddd2e598a4a393f3d49e022646bd3b8311de6f1e075457e6549d08832e68->leave($__internal_b80eddd2e598a4a393f3d49e022646bd3b8311de6f1e075457e6549d08832e68_prof);

        
        $__internal_3c6850a8cb7fb330c7d3219a8e60f7d96ca978960a042fc52179b81a105b1801->leave($__internal_3c6850a8cb7fb330c7d3219a8e60f7d96ca978960a042fc52179b81a105b1801_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
