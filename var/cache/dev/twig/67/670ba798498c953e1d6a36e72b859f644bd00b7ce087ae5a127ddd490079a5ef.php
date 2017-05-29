<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_4a8cb502ce03eb01aa88dca5569eaad5e8e0fed23f8a5247405e2da6207978b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8cb502ce03eb01aa88dca5569eaad5e8e0fed23f8a5247405e2da6207978b6->enter($__internal_4a8cb502ce03eb01aa88dca5569eaad5e8e0fed23f8a5247405e2da6207978b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_419c7e4297ffb74650280b685b21777b7b7adc77b1178f17c6a41f89178ebadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419c7e4297ffb74650280b685b21777b7b7adc77b1178f17c6a41f89178ebadc->enter($__internal_419c7e4297ffb74650280b685b21777b7b7adc77b1178f17c6a41f89178ebadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4a8cb502ce03eb01aa88dca5569eaad5e8e0fed23f8a5247405e2da6207978b6->leave($__internal_4a8cb502ce03eb01aa88dca5569eaad5e8e0fed23f8a5247405e2da6207978b6_prof);

        
        $__internal_419c7e4297ffb74650280b685b21777b7b7adc77b1178f17c6a41f89178ebadc->leave($__internal_419c7e4297ffb74650280b685b21777b7b7adc77b1178f17c6a41f89178ebadc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
