<?php

/* :test4:show.html.twig */
class __TwigTemplate_fb374a0be20c4724991d2419f4bc659e5a5225dfd1beda8f64e4de1cad89807e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":test4:show.html.twig", 1);
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
        $__internal_12b4490fc5c6d98bd358591d4bf68b962ec1b78a25c84392694463fac2fc5ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b4490fc5c6d98bd358591d4bf68b962ec1b78a25c84392694463fac2fc5ee1->enter($__internal_12b4490fc5c6d98bd358591d4bf68b962ec1b78a25c84392694463fac2fc5ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:show.html.twig"));

        $__internal_0a0c713f7df8194df4dcad15b0ec0b9342f5d8b0b1ec63fff75ac8c9f4607516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0c713f7df8194df4dcad15b0ec0b9342f5d8b0b1ec63fff75ac8c9f4607516->enter($__internal_0a0c713f7df8194df4dcad15b0ec0b9342f5d8b0b1ec63fff75ac8c9f4607516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b4490fc5c6d98bd358591d4bf68b962ec1b78a25c84392694463fac2fc5ee1->leave($__internal_12b4490fc5c6d98bd358591d4bf68b962ec1b78a25c84392694463fac2fc5ee1_prof);

        
        $__internal_0a0c713f7df8194df4dcad15b0ec0b9342f5d8b0b1ec63fff75ac8c9f4607516->leave($__internal_0a0c713f7df8194df4dcad15b0ec0b9342f5d8b0b1ec63fff75ac8c9f4607516_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95434a0acc42b95d5b81ce476dd33a04815b824489bafb30d65b27eb4ee3dcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95434a0acc42b95d5b81ce476dd33a04815b824489bafb30d65b27eb4ee3dcd5->enter($__internal_95434a0acc42b95d5b81ce476dd33a04815b824489bafb30d65b27eb4ee3dcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3ae94827279fd2f05721aacfa2eef60382bb7d4e3a746b7b3202e6cf5cc040b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ae94827279fd2f05721aacfa2eef60382bb7d4e3a746b7b3202e6cf5cc040b->enter($__internal_e3ae94827279fd2f05721aacfa2eef60382bb7d4e3a746b7b3202e6cf5cc040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"panel\">
    <h1>Test4</h1>
    <div class=\"panel-body\">
        <div class=\"adv-table editable-table\">
            <div class=\"clearfix\">
                <table class=\"display table table-striped table-hover table-bordered\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["test4"] ?? $this->getContext($context, "test4")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["test4"] ?? $this->getContext($context, "test4")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                 </table>
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
                        <a  href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_edit", array("id" => $this->getAttribute(($context["test4"] ?? $this->getContext($context, "test4")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning pull-right\"><i class=\"icon-fixed-width icon-book\"></i> Edit</a>

        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>

            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e3ae94827279fd2f05721aacfa2eef60382bb7d4e3a746b7b3202e6cf5cc040b->leave($__internal_e3ae94827279fd2f05721aacfa2eef60382bb7d4e3a746b7b3202e6cf5cc040b_prof);

        
        $__internal_95434a0acc42b95d5b81ce476dd33a04815b824489bafb30d65b27eb4ee3dcd5->leave($__internal_95434a0acc42b95d5b81ce476dd33a04815b824489bafb30d65b27eb4ee3dcd5_prof);

    }

    public function getTemplateName()
    {
        return ":test4:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  94 => 35,  87 => 31,  80 => 27,  67 => 17,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'admin.html.twig' %}

{% block body %}
<section class=\"panel\">
    <h1>Test4</h1>
    <div class=\"panel-body\">
        <div class=\"adv-table editable-table\">
            <div class=\"clearfix\">
                <table class=\"display table table-striped table-hover table-bordered\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ test4.id }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ test4.nom }}</td>
                        </tr>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>
</section>
    <ul>
        <li>
                        <a  href=\"{{ path('test4_index') }}\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

        </li>
        <li>
                        <a  href=\"{{ path('test4_edit', { 'id': test4.id }) }}\" class=\"btn btn-warning pull-right\"><i class=\"icon-fixed-width icon-book\"></i> Edit</a>

        </li>
        <li>
            {{ form_start(delete_form) }}
                                <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-trash icon-large\"></i> Delete </button>

            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":test4:show.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test4/show.html.twig");
    }
}
