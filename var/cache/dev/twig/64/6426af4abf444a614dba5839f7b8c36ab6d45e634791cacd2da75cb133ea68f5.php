<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d53658b15e56fd14b303884d834c3407f4d01ff2e637535840b08a37fb3d1798 extends Twig_Template
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
        $__internal_2fdaef7934e5c45ff911edf1aac8287063077e70bd8db246fb2f46b34f12cb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdaef7934e5c45ff911edf1aac8287063077e70bd8db246fb2f46b34f12cb25->enter($__internal_2fdaef7934e5c45ff911edf1aac8287063077e70bd8db246fb2f46b34f12cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f0334c9cd3514f2eeaedd6fa9de978d5823d743865ccaf87bd99ab84e1b0bba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0334c9cd3514f2eeaedd6fa9de978d5823d743865ccaf87bd99ab84e1b0bba1->enter($__internal_f0334c9cd3514f2eeaedd6fa9de978d5823d743865ccaf87bd99ab84e1b0bba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2fdaef7934e5c45ff911edf1aac8287063077e70bd8db246fb2f46b34f12cb25->leave($__internal_2fdaef7934e5c45ff911edf1aac8287063077e70bd8db246fb2f46b34f12cb25_prof);

        
        $__internal_f0334c9cd3514f2eeaedd6fa9de978d5823d743865ccaf87bd99ab84e1b0bba1->leave($__internal_f0334c9cd3514f2eeaedd6fa9de978d5823d743865ccaf87bd99ab84e1b0bba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
