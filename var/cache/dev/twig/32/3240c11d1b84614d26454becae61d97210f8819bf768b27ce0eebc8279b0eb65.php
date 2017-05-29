<?php

/* :test3:edit.html.twig */
class __TwigTemplate_a6cf6c5f9850fa2100e1004b531ece2e555beeeb607c06d98d20f94a03a0c4d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.html.twig", ":test3:edit.html.twig", 2);
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
        $__internal_2680cbf560630802ea0a803b9f8f0def1625161da339ce43eacbf033d5be4984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2680cbf560630802ea0a803b9f8f0def1625161da339ce43eacbf033d5be4984->enter($__internal_2680cbf560630802ea0a803b9f8f0def1625161da339ce43eacbf033d5be4984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:edit.html.twig"));

        $__internal_abac6b711fbdfb6152120e2a8cf60b890322d8c2b094a658e2770149030a757f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac6b711fbdfb6152120e2a8cf60b890322d8c2b094a658e2770149030a757f->enter($__internal_abac6b711fbdfb6152120e2a8cf60b890322d8c2b094a658e2770149030a757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "fields.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2680cbf560630802ea0a803b9f8f0def1625161da339ce43eacbf033d5be4984->leave($__internal_2680cbf560630802ea0a803b9f8f0def1625161da339ce43eacbf033d5be4984_prof);

        
        $__internal_abac6b711fbdfb6152120e2a8cf60b890322d8c2b094a658e2770149030a757f->leave($__internal_abac6b711fbdfb6152120e2a8cf60b890322d8c2b094a658e2770149030a757f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c2d6ab0bdf86afd4c97bbdd93bbeb50dc6aebd4d9dd0bf2772799736c333c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c2d6ab0bdf86afd4c97bbdd93bbeb50dc6aebd4d9dd0bf2772799736c333c3->enter($__internal_22c2d6ab0bdf86afd4c97bbdd93bbeb50dc6aebd4d9dd0bf2772799736c333c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f54dcd417ac5b4cd5ad5412bdb7c38ca1e1c9157bbb8e0cb093659def0e1fd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54dcd417ac5b4cd5ad5412bdb7c38ca1e1c9157bbb8e0cb093659def0e1fd4c->enter($__internal_f54dcd417ac5b4cd5ad5412bdb7c38ca1e1c9157bbb8e0cb093659def0e1fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Post edit</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-warning pull-right\"><i class=\"icon-fixed-width icon-book\"></i> Edit </button>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "



            <a  href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_index");
        echo "\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_f54dcd417ac5b4cd5ad5412bdb7c38ca1e1c9157bbb8e0cb093659def0e1fd4c->leave($__internal_f54dcd417ac5b4cd5ad5412bdb7c38ca1e1c9157bbb8e0cb093659def0e1fd4c_prof);

        
        $__internal_22c2d6ab0bdf86afd4c97bbdd93bbeb50dc6aebd4d9dd0bf2772799736c333c3->leave($__internal_22c2d6ab0bdf86afd4c97bbdd93bbeb50dc6aebd4d9dd0bf2772799736c333c3_prof);

    }

    public function getTemplateName()
    {
        return ":test3:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  72 => 15,  65 => 11,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 2,  31 => 3,  11 => 2,);
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
{% form_theme edit_form 'fields.html.twig' %}

{% block body %}
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <button type=\"submit\" class=\"btn btn-warning pull-right\"><i class=\"icon-fixed-width icon-book\"></i> Edit </button>
    {{ form_end(edit_form) }}



            <a  href=\"{{ path('test3_index') }}\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

            {{ form_start(delete_form) }}
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>
            {{ form_end(delete_form) }}

{% endblock %}

", ":test3:edit.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test3/edit.html.twig");
    }
}
