<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3411c5459fefde02e42888849cf135634fc31cb04d7e7c42d1794b2b3424f2ec extends Twig_Template
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
        $__internal_982f9ab655bd9b4ede00ecc9183e51a4e4c077fa097509bd6266cea463d4f1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982f9ab655bd9b4ede00ecc9183e51a4e4c077fa097509bd6266cea463d4f1e2->enter($__internal_982f9ab655bd9b4ede00ecc9183e51a4e4c077fa097509bd6266cea463d4f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_eb612f450e4a4be205f77772e758f868c75aacea7bf915092b6093d17110c244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb612f450e4a4be205f77772e758f868c75aacea7bf915092b6093d17110c244->enter($__internal_eb612f450e4a4be205f77772e758f868c75aacea7bf915092b6093d17110c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_982f9ab655bd9b4ede00ecc9183e51a4e4c077fa097509bd6266cea463d4f1e2->leave($__internal_982f9ab655bd9b4ede00ecc9183e51a4e4c077fa097509bd6266cea463d4f1e2_prof);

        
        $__internal_eb612f450e4a4be205f77772e758f868c75aacea7bf915092b6093d17110c244->leave($__internal_eb612f450e4a4be205f77772e758f868c75aacea7bf915092b6093d17110c244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
