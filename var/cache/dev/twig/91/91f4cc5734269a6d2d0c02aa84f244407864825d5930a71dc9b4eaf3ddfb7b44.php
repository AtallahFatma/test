<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d4c5d5b9839090f0f95dc9e4ead398f24279c7e7449556493f11c84b7b05c3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c5d5b9839090f0f95dc9e4ead398f24279c7e7449556493f11c84b7b05c3ea->enter($__internal_d4c5d5b9839090f0f95dc9e4ead398f24279c7e7449556493f11c84b7b05c3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c5738c9608593ae54480e99960b291ef2c427a470eb6eb9705da3d9c9cc98a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5738c9608593ae54480e99960b291ef2c427a470eb6eb9705da3d9c9cc98a4d->enter($__internal_c5738c9608593ae54480e99960b291ef2c427a470eb6eb9705da3d9c9cc98a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c5d5b9839090f0f95dc9e4ead398f24279c7e7449556493f11c84b7b05c3ea->leave($__internal_d4c5d5b9839090f0f95dc9e4ead398f24279c7e7449556493f11c84b7b05c3ea_prof);

        
        $__internal_c5738c9608593ae54480e99960b291ef2c427a470eb6eb9705da3d9c9cc98a4d->leave($__internal_c5738c9608593ae54480e99960b291ef2c427a470eb6eb9705da3d9c9cc98a4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5569bd4e56d11d2b7a8d681cd4d9bb6552fee8a722aad9a1fc2c92d0e043d78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5569bd4e56d11d2b7a8d681cd4d9bb6552fee8a722aad9a1fc2c92d0e043d78d->enter($__internal_5569bd4e56d11d2b7a8d681cd4d9bb6552fee8a722aad9a1fc2c92d0e043d78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9be0c0c5653e272329afa30244769efab12fd13e804ecb98ce32ba4feb7451f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be0c0c5653e272329afa30244769efab12fd13e804ecb98ce32ba4feb7451f4->enter($__internal_9be0c0c5653e272329afa30244769efab12fd13e804ecb98ce32ba4feb7451f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9be0c0c5653e272329afa30244769efab12fd13e804ecb98ce32ba4feb7451f4->leave($__internal_9be0c0c5653e272329afa30244769efab12fd13e804ecb98ce32ba4feb7451f4_prof);

        
        $__internal_5569bd4e56d11d2b7a8d681cd4d9bb6552fee8a722aad9a1fc2c92d0e043d78d->leave($__internal_5569bd4e56d11d2b7a8d681cd4d9bb6552fee8a722aad9a1fc2c92d0e043d78d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56ebba0186b6e0bbd0cf854c7dcb71d5fe0b23ae1aadd0454dd28269a86ea3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ebba0186b6e0bbd0cf854c7dcb71d5fe0b23ae1aadd0454dd28269a86ea3ea->enter($__internal_56ebba0186b6e0bbd0cf854c7dcb71d5fe0b23ae1aadd0454dd28269a86ea3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ceed1a734b99b5a8ab0c3477839c6048cb25b73a2e67644d4475373e9b1c1791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceed1a734b99b5a8ab0c3477839c6048cb25b73a2e67644d4475373e9b1c1791->enter($__internal_ceed1a734b99b5a8ab0c3477839c6048cb25b73a2e67644d4475373e9b1c1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ceed1a734b99b5a8ab0c3477839c6048cb25b73a2e67644d4475373e9b1c1791->leave($__internal_ceed1a734b99b5a8ab0c3477839c6048cb25b73a2e67644d4475373e9b1c1791_prof);

        
        $__internal_56ebba0186b6e0bbd0cf854c7dcb71d5fe0b23ae1aadd0454dd28269a86ea3ea->leave($__internal_56ebba0186b6e0bbd0cf854c7dcb71d5fe0b23ae1aadd0454dd28269a86ea3ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ac1447cda73ff3cb015eebac29462775fd8f9ee14c747d6530a4e26c110579f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac1447cda73ff3cb015eebac29462775fd8f9ee14c747d6530a4e26c110579f->enter($__internal_8ac1447cda73ff3cb015eebac29462775fd8f9ee14c747d6530a4e26c110579f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_687d67070db18211fcb41ff8ccbaafaa08efb11a6128c279e3fa7a5e7031f164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687d67070db18211fcb41ff8ccbaafaa08efb11a6128c279e3fa7a5e7031f164->enter($__internal_687d67070db18211fcb41ff8ccbaafaa08efb11a6128c279e3fa7a5e7031f164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_687d67070db18211fcb41ff8ccbaafaa08efb11a6128c279e3fa7a5e7031f164->leave($__internal_687d67070db18211fcb41ff8ccbaafaa08efb11a6128c279e3fa7a5e7031f164_prof);

        
        $__internal_8ac1447cda73ff3cb015eebac29462775fd8f9ee14c747d6530a4e26c110579f->leave($__internal_8ac1447cda73ff3cb015eebac29462775fd8f9ee14c747d6530a4e26c110579f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
