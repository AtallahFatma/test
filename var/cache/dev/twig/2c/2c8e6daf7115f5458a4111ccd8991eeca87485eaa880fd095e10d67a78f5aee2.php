<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_73735ef2de69645ebcdeac65c950fbb0f088f50adae5df3c40ef4d9100a786c6 extends Twig_Template
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
        $__internal_716c44c6a769085bf22e7d5bc6cc88342891685275f4a97e4f108e6c64aa2bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716c44c6a769085bf22e7d5bc6cc88342891685275f4a97e4f108e6c64aa2bb2->enter($__internal_716c44c6a769085bf22e7d5bc6cc88342891685275f4a97e4f108e6c64aa2bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6edb96a3ef470113596284a902966298dcaf915e77da87101d335741757451cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edb96a3ef470113596284a902966298dcaf915e77da87101d335741757451cc->enter($__internal_6edb96a3ef470113596284a902966298dcaf915e77da87101d335741757451cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_716c44c6a769085bf22e7d5bc6cc88342891685275f4a97e4f108e6c64aa2bb2->leave($__internal_716c44c6a769085bf22e7d5bc6cc88342891685275f4a97e4f108e6c64aa2bb2_prof);

        
        $__internal_6edb96a3ef470113596284a902966298dcaf915e77da87101d335741757451cc->leave($__internal_6edb96a3ef470113596284a902966298dcaf915e77da87101d335741757451cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
