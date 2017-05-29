<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_155338f577dcd8d5588b125f3737a4cfe73eed1beeb6a86d478e9dedc22b472b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155338f577dcd8d5588b125f3737a4cfe73eed1beeb6a86d478e9dedc22b472b->enter($__internal_155338f577dcd8d5588b125f3737a4cfe73eed1beeb6a86d478e9dedc22b472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3252bd06ea85068e8f77ab4f51b3e0c9a0bf656d07a55734cf004052f93cce95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3252bd06ea85068e8f77ab4f51b3e0c9a0bf656d07a55734cf004052f93cce95->enter($__internal_3252bd06ea85068e8f77ab4f51b3e0c9a0bf656d07a55734cf004052f93cce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_155338f577dcd8d5588b125f3737a4cfe73eed1beeb6a86d478e9dedc22b472b->leave($__internal_155338f577dcd8d5588b125f3737a4cfe73eed1beeb6a86d478e9dedc22b472b_prof);

        
        $__internal_3252bd06ea85068e8f77ab4f51b3e0c9a0bf656d07a55734cf004052f93cce95->leave($__internal_3252bd06ea85068e8f77ab4f51b3e0c9a0bf656d07a55734cf004052f93cce95_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e730324c86ea3854d2438bcf5ea4c58f108f9a41adcdb05c7bdf6ddb989a63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e730324c86ea3854d2438bcf5ea4c58f108f9a41adcdb05c7bdf6ddb989a63e->enter($__internal_2e730324c86ea3854d2438bcf5ea4c58f108f9a41adcdb05c7bdf6ddb989a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c58992be6f381b02b55eeed20424aeb91182402e0fe7deaa18897b5c5bf4e1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58992be6f381b02b55eeed20424aeb91182402e0fe7deaa18897b5c5bf4e1e5->enter($__internal_c58992be6f381b02b55eeed20424aeb91182402e0fe7deaa18897b5c5bf4e1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c58992be6f381b02b55eeed20424aeb91182402e0fe7deaa18897b5c5bf4e1e5->leave($__internal_c58992be6f381b02b55eeed20424aeb91182402e0fe7deaa18897b5c5bf4e1e5_prof);

        
        $__internal_2e730324c86ea3854d2438bcf5ea4c58f108f9a41adcdb05c7bdf6ddb989a63e->leave($__internal_2e730324c86ea3854d2438bcf5ea4c58f108f9a41adcdb05c7bdf6ddb989a63e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5f4bb3c380588e4cc1b6e1662a281ea2ed4e7b4761f4a80368ab01315cd8ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f4bb3c380588e4cc1b6e1662a281ea2ed4e7b4761f4a80368ab01315cd8ecf->enter($__internal_e5f4bb3c380588e4cc1b6e1662a281ea2ed4e7b4761f4a80368ab01315cd8ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c04e298b2675655bb2ce05b927f69ff3c0e7acfc1dc37237957690b7c670dcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04e298b2675655bb2ce05b927f69ff3c0e7acfc1dc37237957690b7c670dcbb->enter($__internal_c04e298b2675655bb2ce05b927f69ff3c0e7acfc1dc37237957690b7c670dcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c04e298b2675655bb2ce05b927f69ff3c0e7acfc1dc37237957690b7c670dcbb->leave($__internal_c04e298b2675655bb2ce05b927f69ff3c0e7acfc1dc37237957690b7c670dcbb_prof);

        
        $__internal_e5f4bb3c380588e4cc1b6e1662a281ea2ed4e7b4761f4a80368ab01315cd8ecf->leave($__internal_e5f4bb3c380588e4cc1b6e1662a281ea2ed4e7b4761f4a80368ab01315cd8ecf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2cd78ee415c0b379abb0fd07b52588baf3e77d6268da03a46d5f420f8e0b79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cd78ee415c0b379abb0fd07b52588baf3e77d6268da03a46d5f420f8e0b79b->enter($__internal_e2cd78ee415c0b379abb0fd07b52588baf3e77d6268da03a46d5f420f8e0b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edd813adbe9f37dcc3a475590483ba0984fbf026cde08ac7632025b7e387bee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd813adbe9f37dcc3a475590483ba0984fbf026cde08ac7632025b7e387bee5->enter($__internal_edd813adbe9f37dcc3a475590483ba0984fbf026cde08ac7632025b7e387bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_edd813adbe9f37dcc3a475590483ba0984fbf026cde08ac7632025b7e387bee5->leave($__internal_edd813adbe9f37dcc3a475590483ba0984fbf026cde08ac7632025b7e387bee5_prof);

        
        $__internal_e2cd78ee415c0b379abb0fd07b52588baf3e77d6268da03a46d5f420f8e0b79b->leave($__internal_e2cd78ee415c0b379abb0fd07b52588baf3e77d6268da03a46d5f420f8e0b79b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
