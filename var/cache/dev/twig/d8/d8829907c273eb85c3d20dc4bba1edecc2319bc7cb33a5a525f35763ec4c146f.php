<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b918401ba5047419850820a761e6317ab607b6abb9c74a6dc58abf830a4e6a4c extends Twig_Template
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
        $__internal_8f75745577f7e7a29c1ef58f622ddf78013a7be80827e2c32e8b37ef5931f6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f75745577f7e7a29c1ef58f622ddf78013a7be80827e2c32e8b37ef5931f6d3->enter($__internal_8f75745577f7e7a29c1ef58f622ddf78013a7be80827e2c32e8b37ef5931f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_69c958ed01a4db1a82d454c3da7e51c015e273b24ea0942ee78bafe9ea510ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c958ed01a4db1a82d454c3da7e51c015e273b24ea0942ee78bafe9ea510ae3->enter($__internal_69c958ed01a4db1a82d454c3da7e51c015e273b24ea0942ee78bafe9ea510ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_8f75745577f7e7a29c1ef58f622ddf78013a7be80827e2c32e8b37ef5931f6d3->leave($__internal_8f75745577f7e7a29c1ef58f622ddf78013a7be80827e2c32e8b37ef5931f6d3_prof);

        
        $__internal_69c958ed01a4db1a82d454c3da7e51c015e273b24ea0942ee78bafe9ea510ae3->leave($__internal_69c958ed01a4db1a82d454c3da7e51c015e273b24ea0942ee78bafe9ea510ae3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
