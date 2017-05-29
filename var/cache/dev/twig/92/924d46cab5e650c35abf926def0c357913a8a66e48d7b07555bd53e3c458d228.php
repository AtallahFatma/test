<?php

/* admin.html.twig */
class __TwigTemplate_994fa16ad00cbcb1e9d0a9ac2bafb1fea46910c63652f9745f58ea3920852448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29253a57626506bedf0edf84511c1a8e9892a8904767a46101b5d6203b3de383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29253a57626506bedf0edf84511c1a8e9892a8904767a46101b5d6203b3de383->enter($__internal_29253a57626506bedf0edf84511c1a8e9892a8904767a46101b5d6203b3de383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_d89e215c95252fbe59b77f5c15056d0af98f66968278a388232844c9d3a19f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89e215c95252fbe59b77f5c15056d0af98f66968278a388232844c9d3a19f98->enter($__internal_d89e215c95252fbe59b77f5c15056d0af98f66968278a388232844c9d3a19f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appfront/img/viseo1.gif"), "html", null, true);
        echo "\">

    <title>BackOffice</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appfront/js/libs/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appfront/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
  </head>
  <body>
  <section id=\"container\" class=\"\">
      <!--header start-->
      <header class=\"header white-bg\">
            <a href=\"/\" class=\"logo\"> Backoffice </a>
      </header>
      ";
        // line 41
        echo "      <section id=\"main-content\">
          <section class=\"wrapper site-min-height\">
              ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "                  <div class=\"alert alert-block alert-danger fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "                  <div class=\"alert alert-success fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 60
            echo "                  <div class=\"alert alert-info fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                  </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "          </section>
      </section>
      <footer class=\"site-footer\">
          <div class=\"text-center\">
              2017 &copy; BackOffice Viseo
              <a href=\"#\" class=\"go-top\">
                  <i class=\"fa fa-angle-up\"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "  </body>
</html>
";
        
        $__internal_29253a57626506bedf0edf84511c1a8e9892a8904767a46101b5d6203b3de383->leave($__internal_29253a57626506bedf0edf84511c1a8e9892a8904767a46101b5d6203b3de383_prof);

        
        $__internal_d89e215c95252fbe59b77f5c15056d0af98f66968278a388232844c9d3a19f98->leave($__internal_d89e215c95252fbe59b77f5c15056d0af98f66968278a388232844c9d3a19f98_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5e6efad0bd78b32cb7ed643e03f7c4c77003a2e2a472c06b71b0f08e75ea2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e6efad0bd78b32cb7ed643e03f7c4c77003a2e2a472c06b71b0f08e75ea2c4->enter($__internal_f5e6efad0bd78b32cb7ed643e03f7c4c77003a2e2a472c06b71b0f08e75ea2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eae669a0ad93dbfb5c438a124ba9c4273f0c151d445d0daace50597958518e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae669a0ad93dbfb5c438a124ba9c4273f0c151d445d0daace50597958518e11->enter($__internal_eae669a0ad93dbfb5c438a124ba9c4273f0c151d445d0daace50597958518e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <!-- Bootstrap core CSS -->
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jcrop/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/fancybox/fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   ";
        
        $__internal_eae669a0ad93dbfb5c438a124ba9c4273f0c151d445d0daace50597958518e11->leave($__internal_eae669a0ad93dbfb5c438a124ba9c4273f0c151d445d0daace50597958518e11_prof);

        
        $__internal_f5e6efad0bd78b32cb7ed643e03f7c4c77003a2e2a472c06b71b0f08e75ea2c4->leave($__internal_f5e6efad0bd78b32cb7ed643e03f7c4c77003a2e2a472c06b71b0f08e75ea2c4_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_15211e723f3ee0bfe9ef85f94b46519be0ca56be4ee752b6d1d522270cbac81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15211e723f3ee0bfe9ef85f94b46519be0ca56be4ee752b6d1d522270cbac81e->enter($__internal_15211e723f3ee0bfe9ef85f94b46519be0ca56be4ee752b6d1d522270cbac81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd680327d14277fb7a8f935ba930e1721c66cdb6405ec6bc090bcd92c24ef638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd680327d14277fb7a8f935ba930e1721c66cdb6405ec6bc090bcd92c24ef638->enter($__internal_bd680327d14277fb7a8f935ba930e1721c66cdb6405ec6bc090bcd92c24ef638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "            ";
        
        $__internal_bd680327d14277fb7a8f935ba930e1721c66cdb6405ec6bc090bcd92c24ef638->leave($__internal_bd680327d14277fb7a8f935ba930e1721c66cdb6405ec6bc090bcd92c24ef638_prof);

        
        $__internal_15211e723f3ee0bfe9ef85f94b46519be0ca56be4ee752b6d1d522270cbac81e->leave($__internal_15211e723f3ee0bfe9ef85f94b46519be0ca56be4ee752b6d1d522270cbac81e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f53ab091ad1733abbe0165e289c4b0b958b3b8287ee30dc6f4e4681657b623d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f53ab091ad1733abbe0165e289c4b0b958b3b8287ee30dc6f4e4681657b623d->enter($__internal_5f53ab091ad1733abbe0165e289c4b0b958b3b8287ee30dc6f4e4681657b623d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ff8c04dbc61d8f799f7ecef91e021d5ca4785093cbad9a5820a6f43c0ea5d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff8c04dbc61d8f799f7ecef91e021d5ca4785093cbad9a5820a6f43c0ea5d1f->enter($__internal_4ff8c04dbc61d8f799f7ecef91e021d5ca4785093cbad9a5820a6f43c0ea5d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "
    ";
        // line 85
        echo "        ";
        // line 86
        echo "        ";
        // line 87
        echo "    ";
        // line 88
        echo "
    <!-- --- JQUERY --- -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 95
        echo "
    <!-- --- JQUERY PLUGINS --- -->
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery-multi-select/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

    <!-- --- BOOTSTRAP --- -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/bootstrap-datepicker/locales/bootstrap-datepicker.locales.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- WYSIYYG --- -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>

    <!-- --- DATATABLE --- -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.dataTables.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/DT_bootstrap.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- OTHER --- -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/count.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jcrop/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/select2.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/crud/js/scripts.js"), "html", null, true);
        echo "\" ></script>

";
        
        $__internal_4ff8c04dbc61d8f799f7ecef91e021d5ca4785093cbad9a5820a6f43c0ea5d1f->leave($__internal_4ff8c04dbc61d8f799f7ecef91e021d5ca4785093cbad9a5820a6f43c0ea5d1f_prof);

        
        $__internal_5f53ab091ad1733abbe0165e289c4b0b958b3b8287ee30dc6f4e4681657b623d->leave($__internal_5f53ab091ad1733abbe0165e289c4b0b958b3b8287ee30dc6f4e4681657b623d_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 126,  386 => 125,  382 => 124,  378 => 123,  374 => 122,  370 => 121,  366 => 120,  362 => 119,  358 => 118,  352 => 115,  348 => 114,  342 => 111,  336 => 108,  332 => 107,  328 => 106,  324 => 105,  320 => 104,  314 => 101,  310 => 100,  306 => 99,  302 => 98,  298 => 97,  294 => 95,  290 => 93,  285 => 91,  281 => 90,  277 => 88,  275 => 87,  273 => 86,  271 => 85,  268 => 83,  259 => 82,  249 => 69,  240 => 68,  228 => 25,  224 => 24,  220 => 23,  216 => 22,  212 => 21,  208 => 20,  204 => 19,  200 => 18,  196 => 17,  192 => 16,  188 => 15,  184 => 14,  180 => 13,  176 => 12,  173 => 11,  164 => 10,  152 => 129,  150 => 82,  136 => 70,  134 => 68,  131 => 67,  122 => 64,  116 => 60,  111 => 59,  102 => 56,  96 => 52,  91 => 51,  82 => 48,  76 => 44,  72 => 43,  68 => 41,  56 => 31,  52 => 30,  47 => 27,  45 => 10,  38 => 6,  31 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale}}\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/appfront/img/viseo1.gif') }}\">

    <title>BackOffice</title>

    {% block stylesheets %}
    <!-- Bootstrap core CSS -->
      <link href=\"{{ asset('bundles/crud/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('bundles/crud/css/bootstrap-reset.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('bundles/crud/css/font-awesome/font-awesome.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('bundles/crud/css/style-responsive.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('bundles/crud/css/multi-select.css') }}\" rel=\"stylesheet\"/>
      <link href=\"{{ asset('bundles/crud/css/demo_table.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/js/jcrop/css/jquery.Jcrop.min.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/fancybox/fancybox.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/gallery.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/datepicker.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/datetimepicker.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/timepicker.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('bundles/crud/css/select2.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('bundles/crud/css/style.css') }}\" rel=\"stylesheet\">
   {% endblock %}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src=\"{{ asset('bundles/appfront/js/libs/modernizr-2.6.2.min.js') }}\"></script>
      <script src=\"{{ asset('bundles/appfront/js/respond.min.js') }}\"></script>
    <![endif]-->
  </head>
  <body>
  <section id=\"container\" class=\"\">
      <!--header start-->
      <header class=\"header white-bg\">
            <a href=\"/\" class=\"logo\"> Backoffice </a>
      </header>
      {#{% include \"crudBundle:Menu:main.html.twig\" %}#}
      <section id=\"main-content\">
          <section class=\"wrapper site-min-height\">
              {% for flashMessage in app.session.flashbag.get('error') %}
                  <div class=\"alert alert-block alert-danger fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      {{ flashMessage }}
                  </div>
              {% endfor %}
              {% for flashMessage in app.session.flashbag.get('success') %}
                  <div class=\"alert alert-success fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      {{ flashMessage }}
                  </div>
              {% endfor %}
              {% for flashMessage in app.session.flashbag.get('notice') %}
                  <div class=\"alert alert-info fade in\">
                      <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                          <i class=\"fa fa-times\"></i>
                      </button>
                      {{ flashMessage }}
                  </div>
              {% endfor %}

            {% block body %}
            {% endblock %}
          </section>
      </section>
      <footer class=\"site-footer\">
          <div class=\"text-center\">
              2017 &copy; BackOffice Viseo
              <a href=\"#\" class=\"go-top\">
                  <i class=\"fa fa-angle-up\"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
{% block javascripts %}

    {#<script>#}
        {#window.locale       = '{{ locale }}';#}
        {#window.country      = '{{ country }}';#}
    {#</script>#}

    <!-- --- JQUERY --- -->
    <script src=\"{{ asset('bundles/crud/js/jquery-1.8.3.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/jquery-ui-1.9.2.custom.min.js') }}\" ></script>

    <script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>
    {#<script src=\"{{ url('bazinga_jstranslation_js') }}\"></script>#}

    <!-- --- JQUERY PLUGINS --- -->
    <script src=\"{{ asset('bundles/crud/js/jquery.nicescroll.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/jquery.scrollTo.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/jquery.customSelect.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/jquery-multi-select/js/jquery.multi-select.js') }}\"></script>
    <script src=\"{{ asset('bundles/crud/js/jquery-multi-select/js/jquery.quicksearch.js') }}\"></script>

    <!-- --- BOOTSTRAP --- -->
    <script src=\"{{ asset('bundles/crud/js/bootstrap.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/bootstrap-datepicker/bootstrap-datepicker.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/bootstrap-datepicker/locales/bootstrap-datepicker.locales.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/bootstrap-timepicker.js') }}\" ></script>

    <!-- --- WYSIYYG --- -->
    <script src=\"{{ asset('bundles/crud/js/tinymce/tinymce.min.js') }}\"></script>

    <!-- --- DATATABLE --- -->
    <script src=\"{{ asset('bundles/crud/js/jquery.dataTables.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/DT_bootstrap.js') }}\" ></script>

    <!-- --- OTHER --- -->
    <script src=\"{{ asset('bundles/crud/js/count.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/common-scripts.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/spinner.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/crud/js/jcrop/js/jquery.Jcrop.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/crud/js/jquery.fancybox.pack.js') }}\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"{{ asset('bundles/crud/js/jquery.dcjqaccordion.2.7.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/modernizr.custom.js') }}\"></script>
    <script src=\"{{ asset('bundles/crud/js/select2.min.js') }}\" ></script>
    <script src=\"{{ asset('bundles/crud/js/scripts.js') }}\" ></script>

{% endblock %}
  </body>
</html>
", "admin.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/admin.html.twig");
    }
}
