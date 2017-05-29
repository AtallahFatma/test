<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ab1fb4a0aa09ee5535a80573bc6497da13d5b38022c26061960146fcaea2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_626964d446a222e78ad8e9d36ad0cae2692bb49eedc7d93cdc73014e832ad9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626964d446a222e78ad8e9d36ad0cae2692bb49eedc7d93cdc73014e832ad9af->enter($__internal_626964d446a222e78ad8e9d36ad0cae2692bb49eedc7d93cdc73014e832ad9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_095ffa5a74ab2dd4f2b0302fdda026ed079781fd49b334d435faac38fc4c6e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095ffa5a74ab2dd4f2b0302fdda026ed079781fd49b334d435faac38fc4c6e1f->enter($__internal_095ffa5a74ab2dd4f2b0302fdda026ed079781fd49b334d435faac38fc4c6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626964d446a222e78ad8e9d36ad0cae2692bb49eedc7d93cdc73014e832ad9af->leave($__internal_626964d446a222e78ad8e9d36ad0cae2692bb49eedc7d93cdc73014e832ad9af_prof);

        
        $__internal_095ffa5a74ab2dd4f2b0302fdda026ed079781fd49b334d435faac38fc4c6e1f->leave($__internal_095ffa5a74ab2dd4f2b0302fdda026ed079781fd49b334d435faac38fc4c6e1f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0da5df7e52d4fcdc673ccb8826e07e004142a2f2673c35b35aa349a002ebd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0da5df7e52d4fcdc673ccb8826e07e004142a2f2673c35b35aa349a002ebd7b->enter($__internal_e0da5df7e52d4fcdc673ccb8826e07e004142a2f2673c35b35aa349a002ebd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffef77821ffff753f798aadd0ca6e647ebfbb1e50d348829461a27343a2e7f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffef77821ffff753f798aadd0ca6e647ebfbb1e50d348829461a27343a2e7f01->enter($__internal_ffef77821ffff753f798aadd0ca6e647ebfbb1e50d348829461a27343a2e7f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffef77821ffff753f798aadd0ca6e647ebfbb1e50d348829461a27343a2e7f01->leave($__internal_ffef77821ffff753f798aadd0ca6e647ebfbb1e50d348829461a27343a2e7f01_prof);

        
        $__internal_e0da5df7e52d4fcdc673ccb8826e07e004142a2f2673c35b35aa349a002ebd7b->leave($__internal_e0da5df7e52d4fcdc673ccb8826e07e004142a2f2673c35b35aa349a002ebd7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_048707fb9936d7a6a31b124daa6856c21ce5038953004798042fcac15e76fc8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048707fb9936d7a6a31b124daa6856c21ce5038953004798042fcac15e76fc8a->enter($__internal_048707fb9936d7a6a31b124daa6856c21ce5038953004798042fcac15e76fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68439e1c6165b01383b304394301b2b64a8ab914e10ece8ac0db82d52d97df5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68439e1c6165b01383b304394301b2b64a8ab914e10ece8ac0db82d52d97df5f->enter($__internal_68439e1c6165b01383b304394301b2b64a8ab914e10ece8ac0db82d52d97df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68439e1c6165b01383b304394301b2b64a8ab914e10ece8ac0db82d52d97df5f->leave($__internal_68439e1c6165b01383b304394301b2b64a8ab914e10ece8ac0db82d52d97df5f_prof);

        
        $__internal_048707fb9936d7a6a31b124daa6856c21ce5038953004798042fcac15e76fc8a->leave($__internal_048707fb9936d7a6a31b124daa6856c21ce5038953004798042fcac15e76fc8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9a69267c0e7ff2b20d1f2073f8105ec2b548c73357f7e9420278d95e02d29c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a69267c0e7ff2b20d1f2073f8105ec2b548c73357f7e9420278d95e02d29c4->enter($__internal_a9a69267c0e7ff2b20d1f2073f8105ec2b548c73357f7e9420278d95e02d29c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2a3b14c9433b860f000d9f3a083cd0619457d37674ee8d1a0909952e6373b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a3b14c9433b860f000d9f3a083cd0619457d37674ee8d1a0909952e6373b0f->enter($__internal_d2a3b14c9433b860f000d9f3a083cd0619457d37674ee8d1a0909952e6373b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2a3b14c9433b860f000d9f3a083cd0619457d37674ee8d1a0909952e6373b0f->leave($__internal_d2a3b14c9433b860f000d9f3a083cd0619457d37674ee8d1a0909952e6373b0f_prof);

        
        $__internal_a9a69267c0e7ff2b20d1f2073f8105ec2b548c73357f7e9420278d95e02d29c4->leave($__internal_a9a69267c0e7ff2b20d1f2073f8105ec2b548c73357f7e9420278d95e02d29c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
