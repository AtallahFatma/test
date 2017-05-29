<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35857ee1311a28a3bc68d6cb688f4573a483378ff1d1ae838e53d4742bfcaab extends Twig_Template
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
        $__internal_339e20899dc906d21cabfd047c4bd4fe93e8d917bee8de2a451131adf7061846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339e20899dc906d21cabfd047c4bd4fe93e8d917bee8de2a451131adf7061846->enter($__internal_339e20899dc906d21cabfd047c4bd4fe93e8d917bee8de2a451131adf7061846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4c120511080fbecf0fa5ec32e13b45596f33e623d5a188bec2a07e1b472d1372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c120511080fbecf0fa5ec32e13b45596f33e623d5a188bec2a07e1b472d1372->enter($__internal_4c120511080fbecf0fa5ec32e13b45596f33e623d5a188bec2a07e1b472d1372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_339e20899dc906d21cabfd047c4bd4fe93e8d917bee8de2a451131adf7061846->leave($__internal_339e20899dc906d21cabfd047c4bd4fe93e8d917bee8de2a451131adf7061846_prof);

        
        $__internal_4c120511080fbecf0fa5ec32e13b45596f33e623d5a188bec2a07e1b472d1372->leave($__internal_4c120511080fbecf0fa5ec32e13b45596f33e623d5a188bec2a07e1b472d1372_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
