<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f6ec7f51f2d51e10ad09ad7f2f36fcd1e8d01be6d18aa5fbd82ae21ca0f6871 extends Twig_Template
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
        $__internal_203d35894565703df3538edbe233d627ab0304b2ab3b0b722abaa83f4233040f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_203d35894565703df3538edbe233d627ab0304b2ab3b0b722abaa83f4233040f->enter($__internal_203d35894565703df3538edbe233d627ab0304b2ab3b0b722abaa83f4233040f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9b0f4acb0530851059a108908ec85c6c88059c2a89a14bf5cf777906aebb7185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0f4acb0530851059a108908ec85c6c88059c2a89a14bf5cf777906aebb7185->enter($__internal_9b0f4acb0530851059a108908ec85c6c88059c2a89a14bf5cf777906aebb7185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_203d35894565703df3538edbe233d627ab0304b2ab3b0b722abaa83f4233040f->leave($__internal_203d35894565703df3538edbe233d627ab0304b2ab3b0b722abaa83f4233040f_prof);

        
        $__internal_9b0f4acb0530851059a108908ec85c6c88059c2a89a14bf5cf777906aebb7185->leave($__internal_9b0f4acb0530851059a108908ec85c6c88059c2a89a14bf5cf777906aebb7185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
