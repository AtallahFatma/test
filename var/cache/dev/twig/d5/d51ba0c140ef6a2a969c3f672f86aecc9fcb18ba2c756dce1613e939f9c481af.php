<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f5a0aa3844d9600030e9ac735f4890a4de59c0b76ee05fadb7af494b20f0708d extends Twig_Template
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
        $__internal_d0984d85cfa99ef7f6b37ed6b2b3b7be1d949214d66f1a8545a51d47f10ea555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0984d85cfa99ef7f6b37ed6b2b3b7be1d949214d66f1a8545a51d47f10ea555->enter($__internal_d0984d85cfa99ef7f6b37ed6b2b3b7be1d949214d66f1a8545a51d47f10ea555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e342cbcccb2d7f1e495c1ff0e1279c08452830e1a92d0601f290ce65276c9e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e342cbcccb2d7f1e495c1ff0e1279c08452830e1a92d0601f290ce65276c9e86->enter($__internal_e342cbcccb2d7f1e495c1ff0e1279c08452830e1a92d0601f290ce65276c9e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d0984d85cfa99ef7f6b37ed6b2b3b7be1d949214d66f1a8545a51d47f10ea555->leave($__internal_d0984d85cfa99ef7f6b37ed6b2b3b7be1d949214d66f1a8545a51d47f10ea555_prof);

        
        $__internal_e342cbcccb2d7f1e495c1ff0e1279c08452830e1a92d0601f290ce65276c9e86->leave($__internal_e342cbcccb2d7f1e495c1ff0e1279c08452830e1a92d0601f290ce65276c9e86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
