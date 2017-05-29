<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9046808e27c36790ca18a8628a79f8f94789e1b5843bba95c3e7ceeb83d157c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9046808e27c36790ca18a8628a79f8f94789e1b5843bba95c3e7ceeb83d157c2->enter($__internal_9046808e27c36790ca18a8628a79f8f94789e1b5843bba95c3e7ceeb83d157c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9268cd3b2aa710cbef3435913e1cd1173e07f7a76a4cef73013098a4c5bbc928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9268cd3b2aa710cbef3435913e1cd1173e07f7a76a4cef73013098a4c5bbc928->enter($__internal_9268cd3b2aa710cbef3435913e1cd1173e07f7a76a4cef73013098a4c5bbc928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9046808e27c36790ca18a8628a79f8f94789e1b5843bba95c3e7ceeb83d157c2->leave($__internal_9046808e27c36790ca18a8628a79f8f94789e1b5843bba95c3e7ceeb83d157c2_prof);

        
        $__internal_9268cd3b2aa710cbef3435913e1cd1173e07f7a76a4cef73013098a4c5bbc928->leave($__internal_9268cd3b2aa710cbef3435913e1cd1173e07f7a76a4cef73013098a4c5bbc928_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aefa46863586ed1c0351dad1559c51d75063396581671f3d6ae59ec9cae1c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aefa46863586ed1c0351dad1559c51d75063396581671f3d6ae59ec9cae1c63->enter($__internal_8aefa46863586ed1c0351dad1559c51d75063396581671f3d6ae59ec9cae1c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_583d0526d028b82bde28f8851677869edfc7fb8c1afe10f7094c1414abf9cf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583d0526d028b82bde28f8851677869edfc7fb8c1afe10f7094c1414abf9cf98->enter($__internal_583d0526d028b82bde28f8851677869edfc7fb8c1afe10f7094c1414abf9cf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_583d0526d028b82bde28f8851677869edfc7fb8c1afe10f7094c1414abf9cf98->leave($__internal_583d0526d028b82bde28f8851677869edfc7fb8c1afe10f7094c1414abf9cf98_prof);

        
        $__internal_8aefa46863586ed1c0351dad1559c51d75063396581671f3d6ae59ec9cae1c63->leave($__internal_8aefa46863586ed1c0351dad1559c51d75063396581671f3d6ae59ec9cae1c63_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8644139ee834d5fd50206251e5f4b3c4f982d13a2195818ca0ad862ffdb8d876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8644139ee834d5fd50206251e5f4b3c4f982d13a2195818ca0ad862ffdb8d876->enter($__internal_8644139ee834d5fd50206251e5f4b3c4f982d13a2195818ca0ad862ffdb8d876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3571dca266b936609a7aefc7b626456f0a6d5f79c13c9217d97575bdedc25a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3571dca266b936609a7aefc7b626456f0a6d5f79c13c9217d97575bdedc25a7c->enter($__internal_3571dca266b936609a7aefc7b626456f0a6d5f79c13c9217d97575bdedc25a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3571dca266b936609a7aefc7b626456f0a6d5f79c13c9217d97575bdedc25a7c->leave($__internal_3571dca266b936609a7aefc7b626456f0a6d5f79c13c9217d97575bdedc25a7c_prof);

        
        $__internal_8644139ee834d5fd50206251e5f4b3c4f982d13a2195818ca0ad862ffdb8d876->leave($__internal_8644139ee834d5fd50206251e5f4b3c4f982d13a2195818ca0ad862ffdb8d876_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ae456aa0d589e93b366ccc04d2006d14ca438d27f9bc1d21613340c7751fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ae456aa0d589e93b366ccc04d2006d14ca438d27f9bc1d21613340c7751fa0->enter($__internal_13ae456aa0d589e93b366ccc04d2006d14ca438d27f9bc1d21613340c7751fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0f3f7b77cafec45d15d650722365c6afe72f357c7bbd79014e53b8e0ff5a1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f3f7b77cafec45d15d650722365c6afe72f357c7bbd79014e53b8e0ff5a1db->enter($__internal_f0f3f7b77cafec45d15d650722365c6afe72f357c7bbd79014e53b8e0ff5a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0f3f7b77cafec45d15d650722365c6afe72f357c7bbd79014e53b8e0ff5a1db->leave($__internal_f0f3f7b77cafec45d15d650722365c6afe72f357c7bbd79014e53b8e0ff5a1db_prof);

        
        $__internal_13ae456aa0d589e93b366ccc04d2006d14ca438d27f9bc1d21613340c7751fa0->leave($__internal_13ae456aa0d589e93b366ccc04d2006d14ca438d27f9bc1d21613340c7751fa0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a536d987111a176b2f5e1b2d4066d1ae91913ab23c2c85acd4788c58a5b2962a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a536d987111a176b2f5e1b2d4066d1ae91913ab23c2c85acd4788c58a5b2962a->enter($__internal_a536d987111a176b2f5e1b2d4066d1ae91913ab23c2c85acd4788c58a5b2962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd55e6eb8695271e503ce4b5179f4ad59d85cb2a3f3f23a8be71b5954d22d3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd55e6eb8695271e503ce4b5179f4ad59d85cb2a3f3f23a8be71b5954d22d3f7->enter($__internal_fd55e6eb8695271e503ce4b5179f4ad59d85cb2a3f3f23a8be71b5954d22d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd55e6eb8695271e503ce4b5179f4ad59d85cb2a3f3f23a8be71b5954d22d3f7->leave($__internal_fd55e6eb8695271e503ce4b5179f4ad59d85cb2a3f3f23a8be71b5954d22d3f7_prof);

        
        $__internal_a536d987111a176b2f5e1b2d4066d1ae91913ab23c2c85acd4788c58a5b2962a->leave($__internal_a536d987111a176b2f5e1b2d4066d1ae91913ab23c2c85acd4788c58a5b2962a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/base.html.twig");
    }
}
