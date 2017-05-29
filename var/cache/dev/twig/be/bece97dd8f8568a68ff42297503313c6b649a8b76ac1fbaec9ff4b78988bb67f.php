<?php

/* :test3:new.html.twig */
class __TwigTemplate_f4ae0b7c8adcfb869f415cc6deece18323b0b0e8e6caecd68ec556103eae0892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.html.twig", ":test3:new.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfa07ff97425dd841e9a61ef9b5d475291ada887e8fb99ab8987dc20e1da8a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa07ff97425dd841e9a61ef9b5d475291ada887e8fb99ab8987dc20e1da8a24->enter($__internal_bfa07ff97425dd841e9a61ef9b5d475291ada887e8fb99ab8987dc20e1da8a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:new.html.twig"));

        $__internal_7cf2948a78d76c402b7efce8acafb7b1f93c18fcf7cda3a1b6c4605b1416bc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf2948a78d76c402b7efce8acafb7b1f93c18fcf7cda3a1b6c4605b1416bc4c->enter($__internal_7cf2948a78d76c402b7efce8acafb7b1f93c18fcf7cda3a1b6c4605b1416bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:new.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "fields.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa07ff97425dd841e9a61ef9b5d475291ada887e8fb99ab8987dc20e1da8a24->leave($__internal_bfa07ff97425dd841e9a61ef9b5d475291ada887e8fb99ab8987dc20e1da8a24_prof);

        
        $__internal_7cf2948a78d76c402b7efce8acafb7b1f93c18fcf7cda3a1b6c4605b1416bc4c->leave($__internal_7cf2948a78d76c402b7efce8acafb7b1f93c18fcf7cda3a1b6c4605b1416bc4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da4e3f16d26986e548f09e311e7bf4ed50bc112428b88e3a0bb4e76d6f71c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da4e3f16d26986e548f09e311e7bf4ed50bc112428b88e3a0bb4e76d6f71c4d->enter($__internal_7da4e3f16d26986e548f09e311e7bf4ed50bc112428b88e3a0bb4e76d6f71c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bffd3fb8bb0d1505249b806cce46d3fd0569f75964661300ef9a33d9e5c5f470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffd3fb8bb0d1505249b806cce46d3fd0569f75964661300ef9a33d9e5c5f470->enter($__internal_bffd3fb8bb0d1505249b806cce46d3fd0569f75964661300ef9a33d9e5c5f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Test3 creation</h1>


    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <section class=\"panel\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    <div class=\"col-md-12\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_index");
        echo "\" class=\"btn btn-shadow btn-default\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
        <button type=\"submit\" class=\"btn btn-shadow btn-success pull-right\"><i class=\"fa fa-save\"></i> Enregister </button>
    </div>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_bffd3fb8bb0d1505249b806cce46d3fd0569f75964661300ef9a33d9e5c5f470->leave($__internal_bffd3fb8bb0d1505249b806cce46d3fd0569f75964661300ef9a33d9e5c5f470_prof);

        
        $__internal_7da4e3f16d26986e548f09e311e7bf4ed50bc112428b88e3a0bb4e76d6f71c4d->leave($__internal_7da4e3f16d26986e548f09e311e7bf4ed50bc112428b88e3a0bb4e76d6f71c4d_prof);

    }

    public function getTemplateName()
    {
        return ":test3:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 16,  64 => 13,  57 => 9,  52 => 6,  43 => 5,  33 => 2,  31 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends 'base.html.twig' %}#}
{% extends 'admin.html.twig' %}
{% form_theme form 'fields.html.twig' %}

{% block body %}
    <h1>Test3 creation</h1>


    {{ form_start(form) }}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <section class=\"panel\">
                {{ form_widget(form) }}

    <div class=\"col-md-12\">
        <a href=\"{{ path('test3_index') }}\" class=\"btn btn-shadow btn-default\"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>
        <button type=\"submit\" class=\"btn btn-shadow btn-success pull-right\"><i class=\"fa fa-save\"></i> Enregister </button>
    </div>
    {{ form_end(form) }}
{% endblock %}
", ":test3:new.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test3/new.html.twig");
    }
}
