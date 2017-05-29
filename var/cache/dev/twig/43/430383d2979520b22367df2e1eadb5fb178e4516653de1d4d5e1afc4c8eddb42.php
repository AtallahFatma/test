<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_31b4dbacaa75b32fe087894727345b3276da107eb281b3d4fdd33195cfe56426 extends Twig_Template
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
        $__internal_a5eaad7960e87dc74b1d98d5d59c87ea0bc397320285df2ac3b06c4004568fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eaad7960e87dc74b1d98d5d59c87ea0bc397320285df2ac3b06c4004568fc3->enter($__internal_a5eaad7960e87dc74b1d98d5d59c87ea0bc397320285df2ac3b06c4004568fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_576d7c5c8d3d03523b966e52daeca317bd011682d029b78d17170a620ebd3989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576d7c5c8d3d03523b966e52daeca317bd011682d029b78d17170a620ebd3989->enter($__internal_576d7c5c8d3d03523b966e52daeca317bd011682d029b78d17170a620ebd3989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a5eaad7960e87dc74b1d98d5d59c87ea0bc397320285df2ac3b06c4004568fc3->leave($__internal_a5eaad7960e87dc74b1d98d5d59c87ea0bc397320285df2ac3b06c4004568fc3_prof);

        
        $__internal_576d7c5c8d3d03523b966e52daeca317bd011682d029b78d17170a620ebd3989->leave($__internal_576d7c5c8d3d03523b966e52daeca317bd011682d029b78d17170a620ebd3989_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
