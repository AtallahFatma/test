<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4215492859ff851dd46248b460e126b3fb360a785635db52ff03b10fe3f09c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6efef5487a336a5cb7f0d69d254199d093d5272d93690446bcb4afe2e133ef03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efef5487a336a5cb7f0d69d254199d093d5272d93690446bcb4afe2e133ef03->enter($__internal_6efef5487a336a5cb7f0d69d254199d093d5272d93690446bcb4afe2e133ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7e4f86540ea34e47e5e8728202fdbde56dc9415d862dfa8bc438fa58a95aa920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4f86540ea34e47e5e8728202fdbde56dc9415d862dfa8bc438fa58a95aa920->enter($__internal_7e4f86540ea34e47e5e8728202fdbde56dc9415d862dfa8bc438fa58a95aa920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efef5487a336a5cb7f0d69d254199d093d5272d93690446bcb4afe2e133ef03->leave($__internal_6efef5487a336a5cb7f0d69d254199d093d5272d93690446bcb4afe2e133ef03_prof);

        
        $__internal_7e4f86540ea34e47e5e8728202fdbde56dc9415d862dfa8bc438fa58a95aa920->leave($__internal_7e4f86540ea34e47e5e8728202fdbde56dc9415d862dfa8bc438fa58a95aa920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a2f565da03999aaab42a481ec871db3fe81d89f3912552738221849198dedab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2f565da03999aaab42a481ec871db3fe81d89f3912552738221849198dedab->enter($__internal_3a2f565da03999aaab42a481ec871db3fe81d89f3912552738221849198dedab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10841a0273ad17e1a7196ae9d9ed0a3b1ea7f13d0e8d0a3f298c8481ee5903ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10841a0273ad17e1a7196ae9d9ed0a3b1ea7f13d0e8d0a3f298c8481ee5903ec->enter($__internal_10841a0273ad17e1a7196ae9d9ed0a3b1ea7f13d0e8d0a3f298c8481ee5903ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_10841a0273ad17e1a7196ae9d9ed0a3b1ea7f13d0e8d0a3f298c8481ee5903ec->leave($__internal_10841a0273ad17e1a7196ae9d9ed0a3b1ea7f13d0e8d0a3f298c8481ee5903ec_prof);

        
        $__internal_3a2f565da03999aaab42a481ec871db3fe81d89f3912552738221849198dedab->leave($__internal_3a2f565da03999aaab42a481ec871db3fe81d89f3912552738221849198dedab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_536f9a51cc9623f3fdda22d99f9c0a19332997b7f711c6d9a3f294faf23bed7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536f9a51cc9623f3fdda22d99f9c0a19332997b7f711c6d9a3f294faf23bed7c->enter($__internal_536f9a51cc9623f3fdda22d99f9c0a19332997b7f711c6d9a3f294faf23bed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_114a128b9fb072f84da3bdd5b2b94ee8edf2ec9fdadf280bc00531ed9242a4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114a128b9fb072f84da3bdd5b2b94ee8edf2ec9fdadf280bc00531ed9242a4b2->enter($__internal_114a128b9fb072f84da3bdd5b2b94ee8edf2ec9fdadf280bc00531ed9242a4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_114a128b9fb072f84da3bdd5b2b94ee8edf2ec9fdadf280bc00531ed9242a4b2->leave($__internal_114a128b9fb072f84da3bdd5b2b94ee8edf2ec9fdadf280bc00531ed9242a4b2_prof);

        
        $__internal_536f9a51cc9623f3fdda22d99f9c0a19332997b7f711c6d9a3f294faf23bed7c->leave($__internal_536f9a51cc9623f3fdda22d99f9c0a19332997b7f711c6d9a3f294faf23bed7c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
