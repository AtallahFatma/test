<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ee860a2cff957446f4e9e2481079c3f6a949a8e6a353099fa77fd7770c2b433 extends Twig_Template
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
        $__internal_e4ee98ec16699bf76a3b6654c83194c9f48916082171874f3dad6e4bef2b8407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ee98ec16699bf76a3b6654c83194c9f48916082171874f3dad6e4bef2b8407->enter($__internal_e4ee98ec16699bf76a3b6654c83194c9f48916082171874f3dad6e4bef2b8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6ce17e0a22e64a9e135164540eec089e2a208f6cd7abc0238c3beb8397d0e44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce17e0a22e64a9e135164540eec089e2a208f6cd7abc0238c3beb8397d0e44f->enter($__internal_6ce17e0a22e64a9e135164540eec089e2a208f6cd7abc0238c3beb8397d0e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e4ee98ec16699bf76a3b6654c83194c9f48916082171874f3dad6e4bef2b8407->leave($__internal_e4ee98ec16699bf76a3b6654c83194c9f48916082171874f3dad6e4bef2b8407_prof);

        
        $__internal_6ce17e0a22e64a9e135164540eec089e2a208f6cd7abc0238c3beb8397d0e44f->leave($__internal_6ce17e0a22e64a9e135164540eec089e2a208f6cd7abc0238c3beb8397d0e44f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
