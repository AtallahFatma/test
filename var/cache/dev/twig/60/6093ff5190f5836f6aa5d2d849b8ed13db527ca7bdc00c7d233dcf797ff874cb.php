<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d9bc5a1bb8762ed25834758f597841d3eaf69286b6a4035a4c51c908446a74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96fcf55bd81798fbe37d6341aa25d8cfd4e1018726495848f509282c562f8e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fcf55bd81798fbe37d6341aa25d8cfd4e1018726495848f509282c562f8e06->enter($__internal_96fcf55bd81798fbe37d6341aa25d8cfd4e1018726495848f509282c562f8e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b603a7da2a41de757ee58c6b5b34c58e229c2223508e33607ed68b7c3868b6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b603a7da2a41de757ee58c6b5b34c58e229c2223508e33607ed68b7c3868b6f1->enter($__internal_b603a7da2a41de757ee58c6b5b34c58e229c2223508e33607ed68b7c3868b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96fcf55bd81798fbe37d6341aa25d8cfd4e1018726495848f509282c562f8e06->leave($__internal_96fcf55bd81798fbe37d6341aa25d8cfd4e1018726495848f509282c562f8e06_prof);

        
        $__internal_b603a7da2a41de757ee58c6b5b34c58e229c2223508e33607ed68b7c3868b6f1->leave($__internal_b603a7da2a41de757ee58c6b5b34c58e229c2223508e33607ed68b7c3868b6f1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6e46f655cfca236a2ec0e17bb4432428d1d41b0ff22be18938a121dd222043be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e46f655cfca236a2ec0e17bb4432428d1d41b0ff22be18938a121dd222043be->enter($__internal_6e46f655cfca236a2ec0e17bb4432428d1d41b0ff22be18938a121dd222043be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_260278efb34d802cf3a18301362872c9a2282d87a30d964387772f5b3a56b2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260278efb34d802cf3a18301362872c9a2282d87a30d964387772f5b3a56b2fb->enter($__internal_260278efb34d802cf3a18301362872c9a2282d87a30d964387772f5b3a56b2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_260278efb34d802cf3a18301362872c9a2282d87a30d964387772f5b3a56b2fb->leave($__internal_260278efb34d802cf3a18301362872c9a2282d87a30d964387772f5b3a56b2fb_prof);

        
        $__internal_6e46f655cfca236a2ec0e17bb4432428d1d41b0ff22be18938a121dd222043be->leave($__internal_6e46f655cfca236a2ec0e17bb4432428d1d41b0ff22be18938a121dd222043be_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ca3a8faf148bb2a03b652b01ad53cf2963963f510966ead0ec758af9cccefea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca3a8faf148bb2a03b652b01ad53cf2963963f510966ead0ec758af9cccefea->enter($__internal_0ca3a8faf148bb2a03b652b01ad53cf2963963f510966ead0ec758af9cccefea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01e5669818ebe267583fc5ec2d3e719f5515484fb392ae744ee8bd33e3eea77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e5669818ebe267583fc5ec2d3e719f5515484fb392ae744ee8bd33e3eea77b->enter($__internal_01e5669818ebe267583fc5ec2d3e719f5515484fb392ae744ee8bd33e3eea77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_01e5669818ebe267583fc5ec2d3e719f5515484fb392ae744ee8bd33e3eea77b->leave($__internal_01e5669818ebe267583fc5ec2d3e719f5515484fb392ae744ee8bd33e3eea77b_prof);

        
        $__internal_0ca3a8faf148bb2a03b652b01ad53cf2963963f510966ead0ec758af9cccefea->leave($__internal_0ca3a8faf148bb2a03b652b01ad53cf2963963f510966ead0ec758af9cccefea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
