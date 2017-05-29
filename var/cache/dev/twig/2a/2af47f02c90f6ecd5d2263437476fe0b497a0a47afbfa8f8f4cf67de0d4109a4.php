<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2722426e46d50e4e427c4443770abf2394fe69258026c8e8f06233e47d4f859b extends Twig_Template
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
        $__internal_7d11ba44495ec27c9158dba0bba932f8d0107f3aef3a0c65d447924574427c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d11ba44495ec27c9158dba0bba932f8d0107f3aef3a0c65d447924574427c3d->enter($__internal_7d11ba44495ec27c9158dba0bba932f8d0107f3aef3a0c65d447924574427c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fc00f6660804b3c88db1eb48996ea0cd5625e8ec5437c5645f63ac7357a6a086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc00f6660804b3c88db1eb48996ea0cd5625e8ec5437c5645f63ac7357a6a086->enter($__internal_fc00f6660804b3c88db1eb48996ea0cd5625e8ec5437c5645f63ac7357a6a086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7d11ba44495ec27c9158dba0bba932f8d0107f3aef3a0c65d447924574427c3d->leave($__internal_7d11ba44495ec27c9158dba0bba932f8d0107f3aef3a0c65d447924574427c3d_prof);

        
        $__internal_fc00f6660804b3c88db1eb48996ea0cd5625e8ec5437c5645f63ac7357a6a086->leave($__internal_fc00f6660804b3c88db1eb48996ea0cd5625e8ec5437c5645f63ac7357a6a086_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
