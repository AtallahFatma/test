<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4474f74cada0a5e75a6dd5b3cdda12cf897c90f75a32f1281201f0c9fa22ecb9 extends Twig_Template
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
        $__internal_5967b1ae31e387f71dfecc0f4a9a43aad26796b86673dabda910a90442d1dcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5967b1ae31e387f71dfecc0f4a9a43aad26796b86673dabda910a90442d1dcd5->enter($__internal_5967b1ae31e387f71dfecc0f4a9a43aad26796b86673dabda910a90442d1dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4626305b4813d60460cb02f973168db6a5ef62a37d236595d2d515fd472d972d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4626305b4813d60460cb02f973168db6a5ef62a37d236595d2d515fd472d972d->enter($__internal_4626305b4813d60460cb02f973168db6a5ef62a37d236595d2d515fd472d972d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5967b1ae31e387f71dfecc0f4a9a43aad26796b86673dabda910a90442d1dcd5->leave($__internal_5967b1ae31e387f71dfecc0f4a9a43aad26796b86673dabda910a90442d1dcd5_prof);

        
        $__internal_4626305b4813d60460cb02f973168db6a5ef62a37d236595d2d515fd472d972d->leave($__internal_4626305b4813d60460cb02f973168db6a5ef62a37d236595d2d515fd472d972d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
