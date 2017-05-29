<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdbb904837e962a19dfec90805919a0d29ba78968ddf9c258e4cd106724570ae extends Twig_Template
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
        $__internal_6268d45eca4b82080e1f985954f6d3928d057332ec472c99932f32fc281da7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6268d45eca4b82080e1f985954f6d3928d057332ec472c99932f32fc281da7be->enter($__internal_6268d45eca4b82080e1f985954f6d3928d057332ec472c99932f32fc281da7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3c3d8b31410419208ed30af5d06fbd79dcb7b39e5b10781ea62eccdbfd013cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3d8b31410419208ed30af5d06fbd79dcb7b39e5b10781ea62eccdbfd013cf2->enter($__internal_3c3d8b31410419208ed30af5d06fbd79dcb7b39e5b10781ea62eccdbfd013cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_6268d45eca4b82080e1f985954f6d3928d057332ec472c99932f32fc281da7be->leave($__internal_6268d45eca4b82080e1f985954f6d3928d057332ec472c99932f32fc281da7be_prof);

        
        $__internal_3c3d8b31410419208ed30af5d06fbd79dcb7b39e5b10781ea62eccdbfd013cf2->leave($__internal_3c3d8b31410419208ed30af5d06fbd79dcb7b39e5b10781ea62eccdbfd013cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
