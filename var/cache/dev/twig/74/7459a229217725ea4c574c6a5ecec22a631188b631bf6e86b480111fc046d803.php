<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_a84a043de6a62c2cb2bdc8c68fd9b5f0a17f6de7b7e14033ed0a2250d75bf83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84a043de6a62c2cb2bdc8c68fd9b5f0a17f6de7b7e14033ed0a2250d75bf83c->enter($__internal_a84a043de6a62c2cb2bdc8c68fd9b5f0a17f6de7b7e14033ed0a2250d75bf83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5133bfee65b590797582a075e2ce487a615d135e9457bfa136473a46aca96598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5133bfee65b590797582a075e2ce487a615d135e9457bfa136473a46aca96598->enter($__internal_5133bfee65b590797582a075e2ce487a615d135e9457bfa136473a46aca96598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a84a043de6a62c2cb2bdc8c68fd9b5f0a17f6de7b7e14033ed0a2250d75bf83c->leave($__internal_a84a043de6a62c2cb2bdc8c68fd9b5f0a17f6de7b7e14033ed0a2250d75bf83c_prof);

        
        $__internal_5133bfee65b590797582a075e2ce487a615d135e9457bfa136473a46aca96598->leave($__internal_5133bfee65b590797582a075e2ce487a615d135e9457bfa136473a46aca96598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
