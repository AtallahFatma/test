<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4cd3c0a952a2a819f5f39c3904ceaf3e68e9f659f876be58dc8bc9275f87ecf5 extends Twig_Template
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
        $__internal_e622aab40fda8d544ea18af833ad7d124b4e017d13c30cde9434f80e31dd21a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e622aab40fda8d544ea18af833ad7d124b4e017d13c30cde9434f80e31dd21a6->enter($__internal_e622aab40fda8d544ea18af833ad7d124b4e017d13c30cde9434f80e31dd21a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a723932eb6a91b87645467738ce950a7c4a7c95429741b873dfe4787dbfbab35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a723932eb6a91b87645467738ce950a7c4a7c95429741b873dfe4787dbfbab35->enter($__internal_a723932eb6a91b87645467738ce950a7c4a7c95429741b873dfe4787dbfbab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e622aab40fda8d544ea18af833ad7d124b4e017d13c30cde9434f80e31dd21a6->leave($__internal_e622aab40fda8d544ea18af833ad7d124b4e017d13c30cde9434f80e31dd21a6_prof);

        
        $__internal_a723932eb6a91b87645467738ce950a7c4a7c95429741b873dfe4787dbfbab35->leave($__internal_a723932eb6a91b87645467738ce950a7c4a7c95429741b873dfe4787dbfbab35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
