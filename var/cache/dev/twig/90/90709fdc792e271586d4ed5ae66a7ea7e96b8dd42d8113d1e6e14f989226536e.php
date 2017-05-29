<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e297c640960503a899ae115cebef317122a0fecdcd1671665a4e9527d4b3f59c extends Twig_Template
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
        $__internal_dfff6acac2b0949ee538a3e1cda229f1180f5446b7c7d5fbbea97528ad969fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfff6acac2b0949ee538a3e1cda229f1180f5446b7c7d5fbbea97528ad969fad->enter($__internal_dfff6acac2b0949ee538a3e1cda229f1180f5446b7c7d5fbbea97528ad969fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d2ab8608c464f0234284cfef53212105a9898ec8bd4faf930cfc0c0eee96efca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ab8608c464f0234284cfef53212105a9898ec8bd4faf930cfc0c0eee96efca->enter($__internal_d2ab8608c464f0234284cfef53212105a9898ec8bd4faf930cfc0c0eee96efca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_dfff6acac2b0949ee538a3e1cda229f1180f5446b7c7d5fbbea97528ad969fad->leave($__internal_dfff6acac2b0949ee538a3e1cda229f1180f5446b7c7d5fbbea97528ad969fad_prof);

        
        $__internal_d2ab8608c464f0234284cfef53212105a9898ec8bd4faf930cfc0c0eee96efca->leave($__internal_d2ab8608c464f0234284cfef53212105a9898ec8bd4faf930cfc0c0eee96efca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
