<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aaefabb95fdb057edc91b57e65ad07320397beccb8b0c0616689c51bac6073bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45e155778dd1a36bed811579d22fa283ccd7b1f83abfe6e6431e9e3634c10269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e155778dd1a36bed811579d22fa283ccd7b1f83abfe6e6431e9e3634c10269->enter($__internal_45e155778dd1a36bed811579d22fa283ccd7b1f83abfe6e6431e9e3634c10269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4b6c0735edadcd8eb48d0b224cd21b918f687b72dcc26dc846575caad6992fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6c0735edadcd8eb48d0b224cd21b918f687b72dcc26dc846575caad6992fe9->enter($__internal_4b6c0735edadcd8eb48d0b224cd21b918f687b72dcc26dc846575caad6992fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_45e155778dd1a36bed811579d22fa283ccd7b1f83abfe6e6431e9e3634c10269->leave($__internal_45e155778dd1a36bed811579d22fa283ccd7b1f83abfe6e6431e9e3634c10269_prof);

        
        $__internal_4b6c0735edadcd8eb48d0b224cd21b918f687b72dcc26dc846575caad6992fe9->leave($__internal_4b6c0735edadcd8eb48d0b224cd21b918f687b72dcc26dc846575caad6992fe9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de98ca8e15e22e885c8b572c2557a8df65fcb2c1ae07a778bb13a6552f2fba9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de98ca8e15e22e885c8b572c2557a8df65fcb2c1ae07a778bb13a6552f2fba9c->enter($__internal_de98ca8e15e22e885c8b572c2557a8df65fcb2c1ae07a778bb13a6552f2fba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41800e7b75b166f1ed0da583ec9746e7aa8f42483f67887465d64e7331372862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41800e7b75b166f1ed0da583ec9746e7aa8f42483f67887465d64e7331372862->enter($__internal_41800e7b75b166f1ed0da583ec9746e7aa8f42483f67887465d64e7331372862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_41800e7b75b166f1ed0da583ec9746e7aa8f42483f67887465d64e7331372862->leave($__internal_41800e7b75b166f1ed0da583ec9746e7aa8f42483f67887465d64e7331372862_prof);

        
        $__internal_de98ca8e15e22e885c8b572c2557a8df65fcb2c1ae07a778bb13a6552f2fba9c->leave($__internal_de98ca8e15e22e885c8b572c2557a8df65fcb2c1ae07a778bb13a6552f2fba9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
