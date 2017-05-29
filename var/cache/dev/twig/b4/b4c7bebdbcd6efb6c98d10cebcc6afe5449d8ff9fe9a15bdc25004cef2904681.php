<?php

/* :test3:index.html.twig */
class __TwigTemplate_99a93edf214f4492f828237d69daec4eded082fca0aa55e714d1f3c40a1eda89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.html.twig", ":test3:index.html.twig", 2);
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
        $__internal_f906838fa4e4df3d7e21b5b0bef3ac73561dbb43fd5a6ea8de5b489133e46717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f906838fa4e4df3d7e21b5b0bef3ac73561dbb43fd5a6ea8de5b489133e46717->enter($__internal_f906838fa4e4df3d7e21b5b0bef3ac73561dbb43fd5a6ea8de5b489133e46717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:index.html.twig"));

        $__internal_1b66b700dd53129bcff6fe3441b7fb011c5b4916e82afe2389c131c938b8fc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b66b700dd53129bcff6fe3441b7fb011c5b4916e82afe2389c131c938b8fc85->enter($__internal_1b66b700dd53129bcff6fe3441b7fb011c5b4916e82afe2389c131c938b8fc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f906838fa4e4df3d7e21b5b0bef3ac73561dbb43fd5a6ea8de5b489133e46717->leave($__internal_f906838fa4e4df3d7e21b5b0bef3ac73561dbb43fd5a6ea8de5b489133e46717_prof);

        
        $__internal_1b66b700dd53129bcff6fe3441b7fb011c5b4916e82afe2389c131c938b8fc85->leave($__internal_1b66b700dd53129bcff6fe3441b7fb011c5b4916e82afe2389c131c938b8fc85_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_423d62599608b4e142f29777cd9f5d3c65adfa2533a521a83e027103ed763ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423d62599608b4e142f29777cd9f5d3c65adfa2533a521a83e027103ed763ea4->enter($__internal_423d62599608b4e142f29777cd9f5d3c65adfa2533a521a83e027103ed763ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c9902445474aaf796e13041db10d63692b1ca8b0ea25eecc459633d304a6fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9902445474aaf796e13041db10d63692b1ca8b0ea25eecc459633d304a6fbc->enter($__internal_9c9902445474aaf796e13041db10d63692b1ca8b0ea25eecc459633d304a6fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h1>Test3s list</h1>
        </header>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">
                    ";
        // line 14
        echo "                        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_new");
        echo "\">
                            <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-primary\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_new");
        echo "\"><i class=\"fa fa-plus\"></i>Create a new test3</a> </button>
                            </div>
                        </a>
                    ";
        // line 20
        echo "                </div>
                <br>
                <div class=\"space15\"></div>
                <table class=\"display table table-striped table-hover table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Noms</th>
                        <th>Prenom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tfoot>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test3s"] ?? $this->getContext($context, "test3s")));
        foreach ($context['_seq'] as $context["_key"] => $context["test3"]) {
            // line 34
            echo "                        <tr>
                            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_show", array("id" => $this->getAttribute($context["test3"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test3"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["test3"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["test3"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_show", array("id" => $this->getAttribute($context["test3"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_edit", array("id" => $this->getAttribute($context["test3"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </tfoot>
                </table>
            </div>
        </div>
    </section>




";
        
        $__internal_9c9902445474aaf796e13041db10d63692b1ca8b0ea25eecc459633d304a6fbc->leave($__internal_9c9902445474aaf796e13041db10d63692b1ca8b0ea25eecc459633d304a6fbc_prof);

        
        $__internal_423d62599608b4e142f29777cd9f5d3c65adfa2533a521a83e027103ed763ea4->leave($__internal_423d62599608b4e142f29777cd9f5d3c65adfa2533a521a83e027103ed763ea4_prof);

    }

    public function getTemplateName()
    {
        return ":test3:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  116 => 44,  110 => 41,  103 => 37,  99 => 36,  93 => 35,  90 => 34,  86 => 33,  71 => 20,  65 => 16,  59 => 14,  49 => 5,  40 => 4,  11 => 2,);
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

{% block body %}

    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h1>Test3s list</h1>
        </header>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">
                    {#{% if is_granted(\"ROLE_ADMINISTRATEUR\") %}#}
                        <a href=\"{{ path('test3_new') }}\">
                            <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-primary\"><a href=\"{{ path('test3_new') }}\"><i class=\"fa fa-plus\"></i>Create a new test3</a> </button>
                            </div>
                        </a>
                    {#{% endif %}#}
                </div>
                <br>
                <div class=\"space15\"></div>
                <table class=\"display table table-striped table-hover table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Noms</th>
                        <th>Prenom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tfoot>
                    {% for test3 in test3s %}
                        <tr>
                            <td><a href=\"{{ path('test3_show', { 'id': test3.id }) }}\">{{ test3.id }}</a></td>
                            <td>{{ test3.nom }}</td>
                            <td>{{ test3.prenom }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('test3_show', { 'id': test3.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('test3_edit', { 'id': test3.id }) }}\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tfoot>
                </table>
            </div>
        </div>
    </section>




{% endblock %}
", ":test3:index.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test3/index.html.twig");
    }
}
