<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_87c54b94642b5acb5f8392769c9f7cda27b8679021e0bbdc2603da56cb6339b7 extends Twig_Template
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
        $__internal_9c6be7aed6fe5dfbdae10959bb748958bc16f72cd6b5a329077784c8ff7b3e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6be7aed6fe5dfbdae10959bb748958bc16f72cd6b5a329077784c8ff7b3e4f->enter($__internal_9c6be7aed6fe5dfbdae10959bb748958bc16f72cd6b5a329077784c8ff7b3e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_044923cef5129500501f88bf7c62be6359c73568eb618614c5d0500f30d665a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044923cef5129500501f88bf7c62be6359c73568eb618614c5d0500f30d665a1->enter($__internal_044923cef5129500501f88bf7c62be6359c73568eb618614c5d0500f30d665a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9c6be7aed6fe5dfbdae10959bb748958bc16f72cd6b5a329077784c8ff7b3e4f->leave($__internal_9c6be7aed6fe5dfbdae10959bb748958bc16f72cd6b5a329077784c8ff7b3e4f_prof);

        
        $__internal_044923cef5129500501f88bf7c62be6359c73568eb618614c5d0500f30d665a1->leave($__internal_044923cef5129500501f88bf7c62be6359c73568eb618614c5d0500f30d665a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
