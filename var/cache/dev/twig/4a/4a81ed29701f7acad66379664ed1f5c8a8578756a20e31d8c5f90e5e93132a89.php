<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_e8f5870f84c5e541219488355f7a564e72f9b57a41f3c54d62130339f5f333a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f5870f84c5e541219488355f7a564e72f9b57a41f3c54d62130339f5f333a3->enter($__internal_e8f5870f84c5e541219488355f7a564e72f9b57a41f3c54d62130339f5f333a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_973e35e7dbaed70f9cefce95e30dc6d12c143c351a6672a670b09fd4af6e3410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973e35e7dbaed70f9cefce95e30dc6d12c143c351a6672a670b09fd4af6e3410->enter($__internal_973e35e7dbaed70f9cefce95e30dc6d12c143c351a6672a670b09fd4af6e3410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e8f5870f84c5e541219488355f7a564e72f9b57a41f3c54d62130339f5f333a3->leave($__internal_e8f5870f84c5e541219488355f7a564e72f9b57a41f3c54d62130339f5f333a3_prof);

        
        $__internal_973e35e7dbaed70f9cefce95e30dc6d12c143c351a6672a670b09fd4af6e3410->leave($__internal_973e35e7dbaed70f9cefce95e30dc6d12c143c351a6672a670b09fd4af6e3410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
