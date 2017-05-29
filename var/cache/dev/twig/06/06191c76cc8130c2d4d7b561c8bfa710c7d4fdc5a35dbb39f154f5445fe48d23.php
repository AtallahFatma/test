<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa6bd2481d66fdd5789e0caadd34435f8cd00429cc4eba167e2751625fd9a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa6bd2481d66fdd5789e0caadd34435f8cd00429cc4eba167e2751625fd9a94->enter($__internal_efa6bd2481d66fdd5789e0caadd34435f8cd00429cc4eba167e2751625fd9a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_13fad0f2ecaed970959b109cc7937099ed0d8bf4017746a64a47e056ea670a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fad0f2ecaed970959b109cc7937099ed0d8bf4017746a64a47e056ea670a39->enter($__internal_13fad0f2ecaed970959b109cc7937099ed0d8bf4017746a64a47e056ea670a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa6bd2481d66fdd5789e0caadd34435f8cd00429cc4eba167e2751625fd9a94->leave($__internal_efa6bd2481d66fdd5789e0caadd34435f8cd00429cc4eba167e2751625fd9a94_prof);

        
        $__internal_13fad0f2ecaed970959b109cc7937099ed0d8bf4017746a64a47e056ea670a39->leave($__internal_13fad0f2ecaed970959b109cc7937099ed0d8bf4017746a64a47e056ea670a39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc15c67f744fd51a8c334a2efcc26fe4eb9a73df5cf0ef72039f0fe55d25af8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc15c67f744fd51a8c334a2efcc26fe4eb9a73df5cf0ef72039f0fe55d25af8f->enter($__internal_bc15c67f744fd51a8c334a2efcc26fe4eb9a73df5cf0ef72039f0fe55d25af8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_976e86132244bf8c33086bdc8af49d4c45bf85e291f52a8ffd10bc33f8104240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976e86132244bf8c33086bdc8af49d4c45bf85e291f52a8ffd10bc33f8104240->enter($__internal_976e86132244bf8c33086bdc8af49d4c45bf85e291f52a8ffd10bc33f8104240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_976e86132244bf8c33086bdc8af49d4c45bf85e291f52a8ffd10bc33f8104240->leave($__internal_976e86132244bf8c33086bdc8af49d4c45bf85e291f52a8ffd10bc33f8104240_prof);

        
        $__internal_bc15c67f744fd51a8c334a2efcc26fe4eb9a73df5cf0ef72039f0fe55d25af8f->leave($__internal_bc15c67f744fd51a8c334a2efcc26fe4eb9a73df5cf0ef72039f0fe55d25af8f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64d893f14dd25d08d2a874e8f30ec50dbe80a9974477ab196de03fc8ba778be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d893f14dd25d08d2a874e8f30ec50dbe80a9974477ab196de03fc8ba778be4->enter($__internal_64d893f14dd25d08d2a874e8f30ec50dbe80a9974477ab196de03fc8ba778be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32b56b00ff441b72e92a250930115870865755a1fad64cb25d8c194bc0ba1477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b56b00ff441b72e92a250930115870865755a1fad64cb25d8c194bc0ba1477->enter($__internal_32b56b00ff441b72e92a250930115870865755a1fad64cb25d8c194bc0ba1477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32b56b00ff441b72e92a250930115870865755a1fad64cb25d8c194bc0ba1477->leave($__internal_32b56b00ff441b72e92a250930115870865755a1fad64cb25d8c194bc0ba1477_prof);

        
        $__internal_64d893f14dd25d08d2a874e8f30ec50dbe80a9974477ab196de03fc8ba778be4->leave($__internal_64d893f14dd25d08d2a874e8f30ec50dbe80a9974477ab196de03fc8ba778be4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_571a1ab1ca0127726062cd5cb6927c2978e5d7bffe9eace807c9330640fded81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571a1ab1ca0127726062cd5cb6927c2978e5d7bffe9eace807c9330640fded81->enter($__internal_571a1ab1ca0127726062cd5cb6927c2978e5d7bffe9eace807c9330640fded81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3edfeef0f95da0fca8b26529855fadb09d1b69c9f9f448e134f8c45ae9a62add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edfeef0f95da0fca8b26529855fadb09d1b69c9f9f448e134f8c45ae9a62add->enter($__internal_3edfeef0f95da0fca8b26529855fadb09d1b69c9f9f448e134f8c45ae9a62add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3edfeef0f95da0fca8b26529855fadb09d1b69c9f9f448e134f8c45ae9a62add->leave($__internal_3edfeef0f95da0fca8b26529855fadb09d1b69c9f9f448e134f8c45ae9a62add_prof);

        
        $__internal_571a1ab1ca0127726062cd5cb6927c2978e5d7bffe9eace807c9330640fded81->leave($__internal_571a1ab1ca0127726062cd5cb6927c2978e5d7bffe9eace807c9330640fded81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
