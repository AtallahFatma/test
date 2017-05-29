<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f95cc52884f1e1fc3f59cf29d804ae00326e9c7855e29cd2cb9bf7f2b0bd4ed extends Twig_Template
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
        $__internal_daacb7a82a56e256b363e8be2b7da8bfa36ade19f1c40aaac9baa236bc5e13d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daacb7a82a56e256b363e8be2b7da8bfa36ade19f1c40aaac9baa236bc5e13d4->enter($__internal_daacb7a82a56e256b363e8be2b7da8bfa36ade19f1c40aaac9baa236bc5e13d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_14548f2616db3c7d7013836bc34a66e6b27e851f7bdff18f209c854456d542f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14548f2616db3c7d7013836bc34a66e6b27e851f7bdff18f209c854456d542f2->enter($__internal_14548f2616db3c7d7013836bc34a66e6b27e851f7bdff18f209c854456d542f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_daacb7a82a56e256b363e8be2b7da8bfa36ade19f1c40aaac9baa236bc5e13d4->leave($__internal_daacb7a82a56e256b363e8be2b7da8bfa36ade19f1c40aaac9baa236bc5e13d4_prof);

        
        $__internal_14548f2616db3c7d7013836bc34a66e6b27e851f7bdff18f209c854456d542f2->leave($__internal_14548f2616db3c7d7013836bc34a66e6b27e851f7bdff18f209c854456d542f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
