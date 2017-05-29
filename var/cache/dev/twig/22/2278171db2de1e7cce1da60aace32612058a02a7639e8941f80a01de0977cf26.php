<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a36dad82158789959d9353abb049e3bb361e6d82c87d5cbb9dae18e8d3c92758 extends Twig_Template
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
        $__internal_7bc1586770d2ac4d1cd8d56adc1a10a4fed7e5c159d77b1727dc9911b1c27c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc1586770d2ac4d1cd8d56adc1a10a4fed7e5c159d77b1727dc9911b1c27c4f->enter($__internal_7bc1586770d2ac4d1cd8d56adc1a10a4fed7e5c159d77b1727dc9911b1c27c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_43b287cdc8acbfc46414f7bb02972550d64ce6f60c23b898b357d0a753e0deb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b287cdc8acbfc46414f7bb02972550d64ce6f60c23b898b357d0a753e0deb7->enter($__internal_43b287cdc8acbfc46414f7bb02972550d64ce6f60c23b898b357d0a753e0deb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7bc1586770d2ac4d1cd8d56adc1a10a4fed7e5c159d77b1727dc9911b1c27c4f->leave($__internal_7bc1586770d2ac4d1cd8d56adc1a10a4fed7e5c159d77b1727dc9911b1c27c4f_prof);

        
        $__internal_43b287cdc8acbfc46414f7bb02972550d64ce6f60c23b898b357d0a753e0deb7->leave($__internal_43b287cdc8acbfc46414f7bb02972550d64ce6f60c23b898b357d0a753e0deb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
