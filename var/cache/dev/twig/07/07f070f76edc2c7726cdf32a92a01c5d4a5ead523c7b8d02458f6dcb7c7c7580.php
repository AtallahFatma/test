<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_2624a0030c03f7af891a1f482e9bfbc58e214a56988bb7c2486f5b5c9075919e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2624a0030c03f7af891a1f482e9bfbc58e214a56988bb7c2486f5b5c9075919e->enter($__internal_2624a0030c03f7af891a1f482e9bfbc58e214a56988bb7c2486f5b5c9075919e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_243567441266a445bed9d642e9eace850c451df3ee49280a8e409b8f657d38ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243567441266a445bed9d642e9eace850c451df3ee49280a8e409b8f657d38ff->enter($__internal_243567441266a445bed9d642e9eace850c451df3ee49280a8e409b8f657d38ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2624a0030c03f7af891a1f482e9bfbc58e214a56988bb7c2486f5b5c9075919e->leave($__internal_2624a0030c03f7af891a1f482e9bfbc58e214a56988bb7c2486f5b5c9075919e_prof);

        
        $__internal_243567441266a445bed9d642e9eace850c451df3ee49280a8e409b8f657d38ff->leave($__internal_243567441266a445bed9d642e9eace850c451df3ee49280a8e409b8f657d38ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
