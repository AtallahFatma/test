<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d7ef667c2dc8dcd06ca6b753e004127d265f0a3acbd55eca9d7fa179e1e18b04 extends Twig_Template
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
        $__internal_03b0999f516e0e68b46a52f40123f28d8c2a43dbb6815ac8bd17e051313fcabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b0999f516e0e68b46a52f40123f28d8c2a43dbb6815ac8bd17e051313fcabc->enter($__internal_03b0999f516e0e68b46a52f40123f28d8c2a43dbb6815ac8bd17e051313fcabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_6c462b6250bae89150c40d2e507078c91abfe781b6523e3d19fcbc9183cb7608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c462b6250bae89150c40d2e507078c91abfe781b6523e3d19fcbc9183cb7608->enter($__internal_6c462b6250bae89150c40d2e507078c91abfe781b6523e3d19fcbc9183cb7608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_03b0999f516e0e68b46a52f40123f28d8c2a43dbb6815ac8bd17e051313fcabc->leave($__internal_03b0999f516e0e68b46a52f40123f28d8c2a43dbb6815ac8bd17e051313fcabc_prof);

        
        $__internal_6c462b6250bae89150c40d2e507078c91abfe781b6523e3d19fcbc9183cb7608->leave($__internal_6c462b6250bae89150c40d2e507078c91abfe781b6523e3d19fcbc9183cb7608_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
