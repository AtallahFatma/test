<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_613178b24aef7e1dee0e3cd93f8393d1524d06bae56091fd1630ad3aeb8204b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db32052316e7af969dc6f933befb1f33bff3c4600fdd11b0741dfd8b1a9eac9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db32052316e7af969dc6f933befb1f33bff3c4600fdd11b0741dfd8b1a9eac9d->enter($__internal_db32052316e7af969dc6f933befb1f33bff3c4600fdd11b0741dfd8b1a9eac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d3b16f37cc5c1bcb7da93596fc6466498fe7f851bf2639624344369ef8348910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b16f37cc5c1bcb7da93596fc6466498fe7f851bf2639624344369ef8348910->enter($__internal_d3b16f37cc5c1bcb7da93596fc6466498fe7f851bf2639624344369ef8348910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_db32052316e7af969dc6f933befb1f33bff3c4600fdd11b0741dfd8b1a9eac9d->leave($__internal_db32052316e7af969dc6f933befb1f33bff3c4600fdd11b0741dfd8b1a9eac9d_prof);

        
        $__internal_d3b16f37cc5c1bcb7da93596fc6466498fe7f851bf2639624344369ef8348910->leave($__internal_d3b16f37cc5c1bcb7da93596fc6466498fe7f851bf2639624344369ef8348910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
