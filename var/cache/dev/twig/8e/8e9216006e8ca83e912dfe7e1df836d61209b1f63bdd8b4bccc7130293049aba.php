<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8379bf755200ba199f8eb9a135bc2640ad66bbe1df70a5c176ed8cec89bf1992 extends Twig_Template
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
        $__internal_77410d25aec1ff1676d987841d85b27760e7ca1177b7bdabfabc6006d5834045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77410d25aec1ff1676d987841d85b27760e7ca1177b7bdabfabc6006d5834045->enter($__internal_77410d25aec1ff1676d987841d85b27760e7ca1177b7bdabfabc6006d5834045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_cf9168d38aac16c226809df982280842c48573b7dbc7f07a8ca75e73eb1d2270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9168d38aac16c226809df982280842c48573b7dbc7f07a8ca75e73eb1d2270->enter($__internal_cf9168d38aac16c226809df982280842c48573b7dbc7f07a8ca75e73eb1d2270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_77410d25aec1ff1676d987841d85b27760e7ca1177b7bdabfabc6006d5834045->leave($__internal_77410d25aec1ff1676d987841d85b27760e7ca1177b7bdabfabc6006d5834045_prof);

        
        $__internal_cf9168d38aac16c226809df982280842c48573b7dbc7f07a8ca75e73eb1d2270->leave($__internal_cf9168d38aac16c226809df982280842c48573b7dbc7f07a8ca75e73eb1d2270_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
