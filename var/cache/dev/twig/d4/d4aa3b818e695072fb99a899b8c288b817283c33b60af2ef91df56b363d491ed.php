<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b637723b582a7979b4b36d8b8f86a06c12f6affa9919a773d7bb7ead0fa50a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afad5dbd86b5cd878081bc4c4259ac05b60678c31f9e08e81497834e2973f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afad5dbd86b5cd878081bc4c4259ac05b60678c31f9e08e81497834e2973f40->enter($__internal_6afad5dbd86b5cd878081bc4c4259ac05b60678c31f9e08e81497834e2973f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7f9b71f1ab1f23d5655c06431cfccc3bc9a7358d2b63c2a0a22d0042e9391fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9b71f1ab1f23d5655c06431cfccc3bc9a7358d2b63c2a0a22d0042e9391fcc->enter($__internal_7f9b71f1ab1f23d5655c06431cfccc3bc9a7358d2b63c2a0a22d0042e9391fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afad5dbd86b5cd878081bc4c4259ac05b60678c31f9e08e81497834e2973f40->leave($__internal_6afad5dbd86b5cd878081bc4c4259ac05b60678c31f9e08e81497834e2973f40_prof);

        
        $__internal_7f9b71f1ab1f23d5655c06431cfccc3bc9a7358d2b63c2a0a22d0042e9391fcc->leave($__internal_7f9b71f1ab1f23d5655c06431cfccc3bc9a7358d2b63c2a0a22d0042e9391fcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8029bbddd4a3826781943d3e0c2fa30f1e2846aa66d623ed0d516ffe8a2d4676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8029bbddd4a3826781943d3e0c2fa30f1e2846aa66d623ed0d516ffe8a2d4676->enter($__internal_8029bbddd4a3826781943d3e0c2fa30f1e2846aa66d623ed0d516ffe8a2d4676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d12a4275b741807c1094901c7b7aea7c5ab1d3c026074ff1ff4ac99604808c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12a4275b741807c1094901c7b7aea7c5ab1d3c026074ff1ff4ac99604808c03->enter($__internal_d12a4275b741807c1094901c7b7aea7c5ab1d3c026074ff1ff4ac99604808c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d12a4275b741807c1094901c7b7aea7c5ab1d3c026074ff1ff4ac99604808c03->leave($__internal_d12a4275b741807c1094901c7b7aea7c5ab1d3c026074ff1ff4ac99604808c03_prof);

        
        $__internal_8029bbddd4a3826781943d3e0c2fa30f1e2846aa66d623ed0d516ffe8a2d4676->leave($__internal_8029bbddd4a3826781943d3e0c2fa30f1e2846aa66d623ed0d516ffe8a2d4676_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ae570b977ef45631e36852d6afc3d6a614965cee81a340f7b8d158462be0b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae570b977ef45631e36852d6afc3d6a614965cee81a340f7b8d158462be0b4e->enter($__internal_0ae570b977ef45631e36852d6afc3d6a614965cee81a340f7b8d158462be0b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_359c49db0a7cf815bcb5082b718c6ee757ec505dd637206fdce0a7b6f1d4acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359c49db0a7cf815bcb5082b718c6ee757ec505dd637206fdce0a7b6f1d4acc6->enter($__internal_359c49db0a7cf815bcb5082b718c6ee757ec505dd637206fdce0a7b6f1d4acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_359c49db0a7cf815bcb5082b718c6ee757ec505dd637206fdce0a7b6f1d4acc6->leave($__internal_359c49db0a7cf815bcb5082b718c6ee757ec505dd637206fdce0a7b6f1d4acc6_prof);

        
        $__internal_0ae570b977ef45631e36852d6afc3d6a614965cee81a340f7b8d158462be0b4e->leave($__internal_0ae570b977ef45631e36852d6afc3d6a614965cee81a340f7b8d158462be0b4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
