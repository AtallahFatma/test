<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed598f64c3eaa249ab8e1cd012263774744fd2aae7a0bb9f4357007b645c5fd8 extends Twig_Template
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
        $__internal_6f7fed3fde4e8a164c2e40b8f37e8d51982556a1effc37a6cbd1af750e7dae4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7fed3fde4e8a164c2e40b8f37e8d51982556a1effc37a6cbd1af750e7dae4e->enter($__internal_6f7fed3fde4e8a164c2e40b8f37e8d51982556a1effc37a6cbd1af750e7dae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d56760baa4fe82b772f01c88b8083a13ce26fc60d7a0358225b85730269ce90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56760baa4fe82b772f01c88b8083a13ce26fc60d7a0358225b85730269ce90b->enter($__internal_d56760baa4fe82b772f01c88b8083a13ce26fc60d7a0358225b85730269ce90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6f7fed3fde4e8a164c2e40b8f37e8d51982556a1effc37a6cbd1af750e7dae4e->leave($__internal_6f7fed3fde4e8a164c2e40b8f37e8d51982556a1effc37a6cbd1af750e7dae4e_prof);

        
        $__internal_d56760baa4fe82b772f01c88b8083a13ce26fc60d7a0358225b85730269ce90b->leave($__internal_d56760baa4fe82b772f01c88b8083a13ce26fc60d7a0358225b85730269ce90b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
