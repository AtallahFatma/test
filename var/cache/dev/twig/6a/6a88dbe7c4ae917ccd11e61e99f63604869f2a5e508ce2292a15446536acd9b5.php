<?php

/* :test4:index.html.twig */
class __TwigTemplate_0e9ba1ae332b9c46dba067c30804c1239e0710af756c74c7f70ad939fa81f1a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":test4:index.html.twig", 1);
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
        $__internal_dde97165e557bde25db4d18924bd18e81cc867a0e71430280b0fa48f8dfbdc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde97165e557bde25db4d18924bd18e81cc867a0e71430280b0fa48f8dfbdc8b->enter($__internal_dde97165e557bde25db4d18924bd18e81cc867a0e71430280b0fa48f8dfbdc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:index.html.twig"));

        $__internal_442fefa5a9947993d66ac6983a376440b78941e40fa35fcd0edd6400a25b7023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442fefa5a9947993d66ac6983a376440b78941e40fa35fcd0edd6400a25b7023->enter($__internal_442fefa5a9947993d66ac6983a376440b78941e40fa35fcd0edd6400a25b7023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde97165e557bde25db4d18924bd18e81cc867a0e71430280b0fa48f8dfbdc8b->leave($__internal_dde97165e557bde25db4d18924bd18e81cc867a0e71430280b0fa48f8dfbdc8b_prof);

        
        $__internal_442fefa5a9947993d66ac6983a376440b78941e40fa35fcd0edd6400a25b7023->leave($__internal_442fefa5a9947993d66ac6983a376440b78941e40fa35fcd0edd6400a25b7023_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82c31fd69b54aff58d1808fff0312b1658d3fbca3078123310986a14ffa08917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c31fd69b54aff58d1808fff0312b1658d3fbca3078123310986a14ffa08917->enter($__internal_82c31fd69b54aff58d1808fff0312b1658d3fbca3078123310986a14ffa08917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d952b228b083278a3d356dc4dcbeafa2443e256d360bdf8e8280c733de9abf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d952b228b083278a3d356dc4dcbeafa2443e256d360bdf8e8280c733de9abf9->enter($__internal_8d952b228b083278a3d356dc4dcbeafa2443e256d360bdf8e8280c733de9abf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <h1>Test4s list</h1>
        </header>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">
                                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_new");
        echo "\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-primary\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_new");
        echo "\">Create a newtest4</a> </button>
                        </div>
                    </a>
                                    </div>
                <br>
                    <table class=\"display table table-striped table-hover table-bordered\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                            <tfoot>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test4s"] ?? $this->getContext($context, "test4s")));
        foreach ($context['_seq'] as $context["_key"] => $context["test4"]) {
            // line 30
            echo "                            <tr>
                                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_show", array("id" => $this->getAttribute($context["test4"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test4"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["test4"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_show", array("id" => $this->getAttribute($context["test4"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_edit", array("id" => $this->getAttribute($context["test4"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test4'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </tfoot>

                    </table>
                </div>
            </div>
    </section>
    <ul>
        <li>
                    </li>
    </ul>
";
        
        $__internal_8d952b228b083278a3d356dc4dcbeafa2443e256d360bdf8e8280c733de9abf9->leave($__internal_8d952b228b083278a3d356dc4dcbeafa2443e256d360bdf8e8280c733de9abf9_prof);

        
        $__internal_82c31fd69b54aff58d1808fff0312b1658d3fbca3078123310986a14ffa08917->leave($__internal_82c31fd69b54aff58d1808fff0312b1658d3fbca3078123310986a14ffa08917_prof);

    }

    public function getTemplateName()
    {
        return ":test4:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  108 => 39,  102 => 36,  95 => 32,  89 => 31,  86 => 30,  82 => 29,  64 => 14,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <header class=\"panel-heading\">
            <h1>Test4s list</h1>
        </header>
        <div class=\"panel-body\">
            <div class=\"adv-table editable-table\">
                <div class=\"clearfix\">
                                        <a href=\"{{ path('test4_new') }}\">
                        <div class=\"btn-group\">
                            <button type=\"button\" class=\"btn btn-primary\"><a href=\"{{ path('test4_new') }}\">Create a newtest4</a> </button>
                        </div>
                    </a>
                                    </div>
                <br>
                    <table class=\"display table table-striped table-hover table-bordered\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                            <tfoot>
                        {% for test4 in test4s %}
                            <tr>
                                <td><a href=\"{{ path('test4_show', { 'id': test4.id }) }}\">{{ test4.id }}</a></td>
                                <td>{{ test4.nom }}</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('test4_show', { 'id': test4.id }) }}\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"{{ path('test4_edit', { 'id': test4.id }) }}\">edit</a>
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
    <ul>
        <li>
                    </li>
    </ul>
{% endblock %}
", ":test4:index.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test4/index.html.twig");
    }
}
