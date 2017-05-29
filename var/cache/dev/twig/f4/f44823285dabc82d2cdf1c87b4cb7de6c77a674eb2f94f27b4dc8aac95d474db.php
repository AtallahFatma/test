<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fdef7b3cbc51627ddf34b13ab6fe79909f3fb2aa9aacdf2b43b9e2fe712f399f extends Twig_Template
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
        $__internal_912da0013ce97cd858a47183cd19e971b52af32292f6024cd8170d09ad82c7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912da0013ce97cd858a47183cd19e971b52af32292f6024cd8170d09ad82c7b9->enter($__internal_912da0013ce97cd858a47183cd19e971b52af32292f6024cd8170d09ad82c7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b2adc1f7bb5dd5dbf97719760ee4af12f213e59f0f216e59863fc930e6fbf5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2adc1f7bb5dd5dbf97719760ee4af12f213e59f0f216e59863fc930e6fbf5e1->enter($__internal_b2adc1f7bb5dd5dbf97719760ee4af12f213e59f0f216e59863fc930e6fbf5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_912da0013ce97cd858a47183cd19e971b52af32292f6024cd8170d09ad82c7b9->leave($__internal_912da0013ce97cd858a47183cd19e971b52af32292f6024cd8170d09ad82c7b9_prof);

        
        $__internal_b2adc1f7bb5dd5dbf97719760ee4af12f213e59f0f216e59863fc930e6fbf5e1->leave($__internal_b2adc1f7bb5dd5dbf97719760ee4af12f213e59f0f216e59863fc930e6fbf5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
