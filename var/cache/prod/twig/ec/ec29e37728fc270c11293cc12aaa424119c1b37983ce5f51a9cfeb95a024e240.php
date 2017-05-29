<?php

/* test3/index.html.twig */
class __TwigTemplate_ac052baa2e1a1839870768e7768dda78ab4f367e75576502fe97ac2eec666851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("admin.html.twig", "test3/index.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["test3s"]) ? $context["test3s"] : null));
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
    }

    public function getTemplateName()
    {
        return "test3/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  98 => 44,  92 => 41,  85 => 37,  81 => 36,  75 => 35,  72 => 34,  68 => 33,  53 => 20,  47 => 16,  41 => 14,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "test3/index.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test3/index.html.twig");
    }
}
