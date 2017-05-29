<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09e58aa86ce3d976437b97981c6f0265045c4b681929ec0e7b739731b77c43fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e58aa86ce3d976437b97981c6f0265045c4b681929ec0e7b739731b77c43fb->enter($__internal_09e58aa86ce3d976437b97981c6f0265045c4b681929ec0e7b739731b77c43fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a3d5abe5faa5a035727ffbcafcbb16a7a684466b4610a38966b23dad27dab93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d5abe5faa5a035727ffbcafcbb16a7a684466b4610a38966b23dad27dab93c->enter($__internal_a3d5abe5faa5a035727ffbcafcbb16a7a684466b4610a38966b23dad27dab93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e58aa86ce3d976437b97981c6f0265045c4b681929ec0e7b739731b77c43fb->leave($__internal_09e58aa86ce3d976437b97981c6f0265045c4b681929ec0e7b739731b77c43fb_prof);

        
        $__internal_a3d5abe5faa5a035727ffbcafcbb16a7a684466b4610a38966b23dad27dab93c->leave($__internal_a3d5abe5faa5a035727ffbcafcbb16a7a684466b4610a38966b23dad27dab93c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6db231d74e4bad14644454689777913e5d18ce80789949f84d2fabf7a81ca311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db231d74e4bad14644454689777913e5d18ce80789949f84d2fabf7a81ca311->enter($__internal_6db231d74e4bad14644454689777913e5d18ce80789949f84d2fabf7a81ca311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f201b87f92c9f480ab6cc882bec7a0928891f17ac3c04a87144d63368be3d376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f201b87f92c9f480ab6cc882bec7a0928891f17ac3c04a87144d63368be3d376->enter($__internal_f201b87f92c9f480ab6cc882bec7a0928891f17ac3c04a87144d63368be3d376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f201b87f92c9f480ab6cc882bec7a0928891f17ac3c04a87144d63368be3d376->leave($__internal_f201b87f92c9f480ab6cc882bec7a0928891f17ac3c04a87144d63368be3d376_prof);

        
        $__internal_6db231d74e4bad14644454689777913e5d18ce80789949f84d2fabf7a81ca311->leave($__internal_6db231d74e4bad14644454689777913e5d18ce80789949f84d2fabf7a81ca311_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30e96f64b522540182ce7520643185b873e0b51c3bc99371d7b913ecf27489d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e96f64b522540182ce7520643185b873e0b51c3bc99371d7b913ecf27489d7->enter($__internal_30e96f64b522540182ce7520643185b873e0b51c3bc99371d7b913ecf27489d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7380c077fa914126a2cdae568877a031641659a8134e9ee7464474bd0678e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7380c077fa914126a2cdae568877a031641659a8134e9ee7464474bd0678e16->enter($__internal_b7380c077fa914126a2cdae568877a031641659a8134e9ee7464474bd0678e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b7380c077fa914126a2cdae568877a031641659a8134e9ee7464474bd0678e16->leave($__internal_b7380c077fa914126a2cdae568877a031641659a8134e9ee7464474bd0678e16_prof);

        
        $__internal_30e96f64b522540182ce7520643185b873e0b51c3bc99371d7b913ecf27489d7->leave($__internal_30e96f64b522540182ce7520643185b873e0b51c3bc99371d7b913ecf27489d7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f01c8fd8ce142c4b8a06539869e473e892d01cd4abcaf5cd57fcc62fa15a019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f01c8fd8ce142c4b8a06539869e473e892d01cd4abcaf5cd57fcc62fa15a019->enter($__internal_1f01c8fd8ce142c4b8a06539869e473e892d01cd4abcaf5cd57fcc62fa15a019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5361ddd2ad0fb6cf2f0fabf08f331669887caa26b1592425eaa012fdbe4c14ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5361ddd2ad0fb6cf2f0fabf08f331669887caa26b1592425eaa012fdbe4c14ba->enter($__internal_5361ddd2ad0fb6cf2f0fabf08f331669887caa26b1592425eaa012fdbe4c14ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5361ddd2ad0fb6cf2f0fabf08f331669887caa26b1592425eaa012fdbe4c14ba->leave($__internal_5361ddd2ad0fb6cf2f0fabf08f331669887caa26b1592425eaa012fdbe4c14ba_prof);

        
        $__internal_1f01c8fd8ce142c4b8a06539869e473e892d01cd4abcaf5cd57fcc62fa15a019->leave($__internal_1f01c8fd8ce142c4b8a06539869e473e892d01cd4abcaf5cd57fcc62fa15a019_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
