<?php

/* :test4:new.html.twig */
class __TwigTemplate_4844215e3c8da8f363f7ed809717e6c88336fe74a2c0703aa1a2cc08744f4402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":test4:new.html.twig", 1);
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
        $__internal_e0ff5ecd4d39e231bc7d4b7611f57e661f2166ea8ef010ca203971ca9da0601e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ff5ecd4d39e231bc7d4b7611f57e661f2166ea8ef010ca203971ca9da0601e->enter($__internal_e0ff5ecd4d39e231bc7d4b7611f57e661f2166ea8ef010ca203971ca9da0601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:new.html.twig"));

        $__internal_7fa660b5f5cbd038aa92aedc7cb5b070ab25493e1d2ecee1c3793dd1c035185b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa660b5f5cbd038aa92aedc7cb5b070ab25493e1d2ecee1c3793dd1c035185b->enter($__internal_7fa660b5f5cbd038aa92aedc7cb5b070ab25493e1d2ecee1c3793dd1c035185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":test4:new.html.twig"));

        // line 2
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ff5ecd4d39e231bc7d4b7611f57e661f2166ea8ef010ca203971ca9da0601e->leave($__internal_e0ff5ecd4d39e231bc7d4b7611f57e661f2166ea8ef010ca203971ca9da0601e_prof);

        
        $__internal_7fa660b5f5cbd038aa92aedc7cb5b070ab25493e1d2ecee1c3793dd1c035185b->leave($__internal_7fa660b5f5cbd038aa92aedc7cb5b070ab25493e1d2ecee1c3793dd1c035185b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_279869402f1e7d498a647cf2f98248a569fb4122a68da4ad4d3babb0ef2d8c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279869402f1e7d498a647cf2f98248a569fb4122a68da4ad4d3babb0ef2d8c8b->enter($__internal_279869402f1e7d498a647cf2f98248a569fb4122a68da4ad4d3babb0ef2d8c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b476da2b06e03a66122092d49b1682ed08a3f24b5a93ebcae51ca6877672b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b476da2b06e03a66122092d49b1682ed08a3f24b5a93ebcae51ca6877672b7->enter($__internal_e5b476da2b06e03a66122092d49b1682ed08a3f24b5a93ebcae51ca6877672b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Test4 creation</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <section class=\"panel\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                    </section>
            </div>
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-shadow btn-success pull-right\"><i class=\"fa fa-save\"></i> Create </button>
                                    <ul>
        <li>
                        <a  href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test4_index");
        echo "\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

        </li>
    </ul>
</div>

        </div>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_e5b476da2b06e03a66122092d49b1682ed08a3f24b5a93ebcae51ca6877672b7->leave($__internal_e5b476da2b06e03a66122092d49b1682ed08a3f24b5a93ebcae51ca6877672b7_prof);

        
        $__internal_279869402f1e7d498a647cf2f98248a569fb4122a68da4ad4d3babb0ef2d8c8b->leave($__internal_279869402f1e7d498a647cf2f98248a569fb4122a68da4ad4d3babb0ef2d8c8b_prof);

    }

    public function getTemplateName()
    {
        return ":test4:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  73 => 18,  63 => 11,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    {% extends 'admin.html.twig' %}
    {% form_theme form 'fields.html.twig' %}

{% block body %}
    <h1>Test4 creation</h1>

    {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <section class=\"panel\">
                    {{ form_widget(form) }}
                                    </section>
            </div>
            <div class=\"col-md-12\">
                <button type=\"submit\" class=\"btn btn-shadow btn-success pull-right\"><i class=\"fa fa-save\"></i> Create </button>
                                    <ul>
        <li>
                        <a  href=\"{{ path('test4_index') }}\" class=\"btn btn-shadow btn-default \"><i class=\"fa fa-arrow-left\"></i> Back to the list</a>

        </li>
    </ul>
</div>

        </div>
    {{ form_end(form) }}


{% endblock %}
", ":test4:new.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/test4/new.html.twig");
    }
}
