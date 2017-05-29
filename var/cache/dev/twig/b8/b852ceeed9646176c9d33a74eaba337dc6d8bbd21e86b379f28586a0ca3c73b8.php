<?php

/* :test3:show.html.twig */
class __TwigTemplate_c24b34236fa12b61b3166fd22c457ed0c4c0326ec0a8c69fb317064f7fc39571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.html.twig", ":test3:show.html.twig", 2);
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
        $__internal_e31cb853556442553436c410dc7c1849688ad22e62840c7a5416d5c8f3689540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31cb853556442553436c410dc7c1849688ad22e62840c7a5416d5c8f3689540->enter($__internal_e31cb853556442553436c410dc7c1849688ad22e62840c7a5416d5c8f3689540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:show.html.twig"));

        $__internal_854dd80cf127fa94424756c61e8f0d3a9c974fa157d420105eeb34f54335c8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854dd80cf127fa94424756c61e8f0d3a9c974fa157d420105eeb34f54335c8cb->enter($__internal_854dd80cf127fa94424756c61e8f0d3a9c974fa157d420105eeb34f54335c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test3:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e31cb853556442553436c410dc7c1849688ad22e62840c7a5416d5c8f3689540->leave($__internal_e31cb853556442553436c410dc7c1849688ad22e62840c7a5416d5c8f3689540_prof);

        
        $__internal_854dd80cf127fa94424756c61e8f0d3a9c974fa157d420105eeb34f54335c8cb->leave($__internal_854dd80cf127fa94424756c61e8f0d3a9c974fa157d420105eeb34f54335c8cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b35f37f578dc98d6433649bbcff02aded7620e3369f23925fb46c32c8b7ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b35f37f578dc98d6433649bbcff02aded7620e3369f23925fb46c32c8b7ec7->enter($__internal_a6b35f37f578dc98d6433649bbcff02aded7620e3369f23925fb46c32c8b7ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_792648dedde419803c6966cadd1e66802256f1c049d5a8443a20603bba2e4cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792648dedde419803c6966cadd1e66802256f1c049d5a8443a20603bba2e4cc5->enter($__internal_792648dedde419803c6966cadd1e66802256f1c049d5a8443a20603bba2e4cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section class=\"panel\">
        <h1>Test3</h1>
    <div class=\"panel-body\">
        <div class=\"adv-table editable-table\">
            <div class=\"clearfix\">
                <table class=\"display table table-striped table-hover table-bordered\">

                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["test3"] ?? $this->getContext($context, "test3")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["test3"] ?? $this->getContext($context, "test3")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["test3"] ?? $this->getContext($context, "test3")), "prenom", array()), "html", null, true);
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
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test3_edit", array("id" => $this->getAttribute(($context["test3"] ?? $this->getContext($context, "test3")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_792648dedde419803c6966cadd1e66802256f1c049d5a8443a20603bba2e4cc5->leave($__internal_792648dedde419803c6966cadd1e66802256f1c049d5a8443a20603bba2e4cc5_prof);

        
        $__internal_a6b35f37f578dc98d6433649bbcff02aded7620e3369f23925fb46c32c8b7ec7->leave($__internal_a6b35f37f578dc98d6433649bbcff02aded7620e3369f23925fb46c32c8b7ec7_prof);

    }

    public function getTemplateName()
    {
        return ":test3:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  101 => 41,  95 => 38,  89 => 35,  75 => 24,  68 => 20,  61 => 16,  49 => 6,  40 => 5,  11 => 2,);
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
        <h1>Test3</h1>
    <div class=\"panel-body\">
        <div class=\"adv-table editable-table\">
            <div class=\"clearfix\">
                <table class=\"display table table-striped table-hover table-bordered\">

                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ test3.id }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ test3.nom }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ test3.prenom }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    <ul>
        <li>
            <a href=\"{{ path('test3_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('test3_edit', { 'id': test3.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":test3:show.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test3/show.html.twig");
    }
}
