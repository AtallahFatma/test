<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd9138c75d34683d1be6dab69d393fcdf5948f03f5be714a6a2d77b604181883 extends Twig_Template
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
        $__internal_38f328d7b7df8f876d818e22c1b038e4d3af3e7699481702429c2f46471cb52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f328d7b7df8f876d818e22c1b038e4d3af3e7699481702429c2f46471cb52b->enter($__internal_38f328d7b7df8f876d818e22c1b038e4d3af3e7699481702429c2f46471cb52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_81f8bc67b16ccaa391e80a5a55c2b1b8f86358d6f2fe96a4cc295d3d1f45e334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f8bc67b16ccaa391e80a5a55c2b1b8f86358d6f2fe96a4cc295d3d1f45e334->enter($__internal_81f8bc67b16ccaa391e80a5a55c2b1b8f86358d6f2fe96a4cc295d3d1f45e334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_38f328d7b7df8f876d818e22c1b038e4d3af3e7699481702429c2f46471cb52b->leave($__internal_38f328d7b7df8f876d818e22c1b038e4d3af3e7699481702429c2f46471cb52b_prof);

        
        $__internal_81f8bc67b16ccaa391e80a5a55c2b1b8f86358d6f2fe96a4cc295d3d1f45e334->leave($__internal_81f8bc67b16ccaa391e80a5a55c2b1b8f86358d6f2fe96a4cc295d3d1f45e334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
