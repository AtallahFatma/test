<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b899594e1a4af6ec732f205dc84f98eb52b7baa8fd2d88f5bc1115b4936d23ad extends Twig_Template
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
        $__internal_e4549b9e509057a6d9c3743c8328fb170093068c9c3aa0757c20025bd204dcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4549b9e509057a6d9c3743c8328fb170093068c9c3aa0757c20025bd204dcff->enter($__internal_e4549b9e509057a6d9c3743c8328fb170093068c9c3aa0757c20025bd204dcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cb87cfb89aef5f7ca7c47f75fdfe658d97f5941494ff9c63b162223322eac4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb87cfb89aef5f7ca7c47f75fdfe658d97f5941494ff9c63b162223322eac4ed->enter($__internal_cb87cfb89aef5f7ca7c47f75fdfe658d97f5941494ff9c63b162223322eac4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e4549b9e509057a6d9c3743c8328fb170093068c9c3aa0757c20025bd204dcff->leave($__internal_e4549b9e509057a6d9c3743c8328fb170093068c9c3aa0757c20025bd204dcff_prof);

        
        $__internal_cb87cfb89aef5f7ca7c47f75fdfe658d97f5941494ff9c63b162223322eac4ed->leave($__internal_cb87cfb89aef5f7ca7c47f75fdfe658d97f5941494ff9c63b162223322eac4ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
