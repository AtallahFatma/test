<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3f4c9cade32f53675f5d1507ee1007bd799aa5f57b44c2fc2f6931c09424bd7f extends Twig_Template
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
        $__internal_6704d6e85554a9852d7c3fb8e9f86a76be8d30b6735732dd51902644ad93201b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6704d6e85554a9852d7c3fb8e9f86a76be8d30b6735732dd51902644ad93201b->enter($__internal_6704d6e85554a9852d7c3fb8e9f86a76be8d30b6735732dd51902644ad93201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_658c6fd78b511db3a713bb67795e0c2070f2790169195e690d74d3a77fcd9969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658c6fd78b511db3a713bb67795e0c2070f2790169195e690d74d3a77fcd9969->enter($__internal_658c6fd78b511db3a713bb67795e0c2070f2790169195e690d74d3a77fcd9969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6704d6e85554a9852d7c3fb8e9f86a76be8d30b6735732dd51902644ad93201b->leave($__internal_6704d6e85554a9852d7c3fb8e9f86a76be8d30b6735732dd51902644ad93201b_prof);

        
        $__internal_658c6fd78b511db3a713bb67795e0c2070f2790169195e690d74d3a77fcd9969->leave($__internal_658c6fd78b511db3a713bb67795e0c2070f2790169195e690d74d3a77fcd9969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
