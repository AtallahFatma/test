<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4797223814f9f4baf13dd6b3e4d12709f6698e41d16f53c7b98f05ee42b19e32 extends Twig_Template
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
        $__internal_8a6bdf519939c785a099e2bb5c48dd13265a8b55a4bfd92b5979c5d038f5256e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6bdf519939c785a099e2bb5c48dd13265a8b55a4bfd92b5979c5d038f5256e->enter($__internal_8a6bdf519939c785a099e2bb5c48dd13265a8b55a4bfd92b5979c5d038f5256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f5ccec984c26fdb4240f0867fb9a8f523d5657a6ddb82c248f198e38e1007976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ccec984c26fdb4240f0867fb9a8f523d5657a6ddb82c248f198e38e1007976->enter($__internal_f5ccec984c26fdb4240f0867fb9a8f523d5657a6ddb82c248f198e38e1007976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a6bdf519939c785a099e2bb5c48dd13265a8b55a4bfd92b5979c5d038f5256e->leave($__internal_8a6bdf519939c785a099e2bb5c48dd13265a8b55a4bfd92b5979c5d038f5256e_prof);

        
        $__internal_f5ccec984c26fdb4240f0867fb9a8f523d5657a6ddb82c248f198e38e1007976->leave($__internal_f5ccec984c26fdb4240f0867fb9a8f523d5657a6ddb82c248f198e38e1007976_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
