<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d044b5b9fa6cb4e2bc707333177a330c48f7d931749ce4128e14fbce038de2c3 extends Twig_Template
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
        $__internal_dbd817ff2c77168c95262204eafe2beae64016e857b6c14d714a13554d69a3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd817ff2c77168c95262204eafe2beae64016e857b6c14d714a13554d69a3ef->enter($__internal_dbd817ff2c77168c95262204eafe2beae64016e857b6c14d714a13554d69a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3fbb1ee309c2fdaaf93fd8ef4013ec3680e2fd459faae2497a90be3cad0173cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbb1ee309c2fdaaf93fd8ef4013ec3680e2fd459faae2497a90be3cad0173cc->enter($__internal_3fbb1ee309c2fdaaf93fd8ef4013ec3680e2fd459faae2497a90be3cad0173cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_dbd817ff2c77168c95262204eafe2beae64016e857b6c14d714a13554d69a3ef->leave($__internal_dbd817ff2c77168c95262204eafe2beae64016e857b6c14d714a13554d69a3ef_prof);

        
        $__internal_3fbb1ee309c2fdaaf93fd8ef4013ec3680e2fd459faae2497a90be3cad0173cc->leave($__internal_3fbb1ee309c2fdaaf93fd8ef4013ec3680e2fd459faae2497a90be3cad0173cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
