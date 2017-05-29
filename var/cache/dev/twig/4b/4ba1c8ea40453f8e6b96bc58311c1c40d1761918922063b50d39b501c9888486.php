<?php

/* :test4:edit.html.twig */
class __TwigTemplate_c2fb5838db2cfb8c3723b44ede350c062f1370f48dcdd14a75d933f5ad07c3f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("admin.html.twig", ":test4:edit.html.twig", 3);
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
        $__internal_a10903d9330e115259b308867249ccbc987b1f140ecd53e8236a9459f3520f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10903d9330e115259b308867249ccbc987b1f140ecd53e8236a9459f3520f2c->enter($__internal_a10903d9330e115259b308867249ccbc987b1f140ecd53e8236a9459f3520f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:edit.html.twig"));

        $__internal_138498aa3ed51d70e6bd3aff9fb85570818394291ccd0244f1b6d754283d93cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138498aa3ed51d70e6bd3aff9fb85570818394291ccd0244f1b6d754283d93cc->enter($__internal_138498aa3ed51d70e6bd3aff9fb85570818394291ccd0244f1b6d754283d93cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:edit.html.twig"));

        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "fields.html.twig"));
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10903d9330e115259b308867249ccbc987b1f140ecd53e8236a9459f3520f2c->leave($__internal_a10903d9330e115259b308867249ccbc987b1f140ecd53e8236a9459f3520f2c_prof);

        
        $__internal_138498aa3ed51d70e6bd3aff9fb85570818394291ccd0244f1b6d754283d93cc->leave($__internal_138498aa3ed51d70e6bd3aff9fb85570818394291ccd0244f1b6d754283d93cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee00cf182effc56aed05b41cd374baca35263f437b3c2ae06fd0bd072454fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee00cf182effc56aed05b41cd374baca35263f437b3c2ae06fd0bd072454fc6->enter($__internal_3ee00cf182effc56aed05b41cd374baca35263f437b3c2ae06fd0bd072454fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_835e1500a9c814af7536e6bd03dc7ac24a864c254eb68bdd3cf78e52fddce928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835e1500a9c814af7536e6bd03dc7ac24a864c254eb68bdd3cf78e52fddce928->enter($__internal_835e1500a9c814af7536e6bd03dc7ac24a864c254eb68bdd3cf78e52fddce928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <section class=\"panel\">
        <h1>Test4 edit</h1>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">

                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                                        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </section>

            <ul>
        <li>
                        <a  href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_index");
        echo "\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>

            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_835e1500a9c814af7536e6bd03dc7ac24a864c254eb68bdd3cf78e52fddce928->leave($__internal_835e1500a9c814af7536e6bd03dc7ac24a864c254eb68bdd3cf78e52fddce928_prof);

        
        $__internal_3ee00cf182effc56aed05b41cd374baca35263f437b3c2ae06fd0bd072454fc6->leave($__internal_3ee00cf182effc56aed05b41cd374baca35263f437b3c2ae06fd0bd072454fc6_prof);

    }

    public function getTemplateName()
    {
        return ":test4:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  87 => 31,  80 => 27,  68 => 18,  64 => 17,  60 => 16,  52 => 10,  43 => 9,  33 => 3,  31 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    
    {% extends 'admin.html.twig' %}

    {% form_theme edit_form 'fields.html.twig' %}



    {% block body %}
    <section class=\"panel\">
        <h1>Test4 edit</h1>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">

                    {{ form_start(edit_form) }}
                    {{ form_widget(edit_form) }}
                                        {{ form_end(edit_form) }}

                </div>
            </div>
        </div>
    </section>

            <ul>
        <li>
                        <a  href=\"{{ path('test4_index') }}\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

        </li>
        <li>
            {{ form_start(delete_form) }}
                                <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>

            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":test4:edit.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test4/edit.html.twig");
    }
}
