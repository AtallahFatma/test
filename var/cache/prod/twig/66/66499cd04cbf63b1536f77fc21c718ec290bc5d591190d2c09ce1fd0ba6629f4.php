<?php

/* admin.html.twig */
class __TwigTemplate_22ce01422213b2ed2070e5bd23c328b84c9b699f73e4bcc1fe31b67543e269cb extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    <!-- Bootstrap core CSS -->
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/demo_table.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jcrop/css/jquery.Jcrop.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/fancybox/fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/gallery.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "            ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery-multi-select/js/jquery.quicksearch.js"), "html", null, true);
        echo "\"></script>

    <!-- --- BOOTSTRAP --- -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/bootstrap-datepicker/locales/bootstrap-datepicker.locales.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- WYSIYYG --- -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>

    <!-- --- DATATABLE --- -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.dataTables.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/DT_bootstrap.js"), "html", null, true);
        echo "\" ></script>

    <!-- --- OTHER --- -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/count.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/spinner.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jcrop/js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/select2.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appadmin/js/scripts.js"), "html", null, true);
        echo "\" ></script>

";
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
        return array (  348 => 126,  344 => 125,  340 => 124,  336 => 123,  332 => 122,  328 => 121,  324 => 120,  320 => 119,  316 => 118,  310 => 115,  306 => 114,  300 => 111,  294 => 108,  290 => 107,  286 => 106,  282 => 105,  278 => 104,  272 => 101,  268 => 100,  264 => 99,  260 => 98,  256 => 97,  252 => 95,  248 => 93,  243 => 91,  239 => 90,  235 => 88,  233 => 87,  231 => 86,  229 => 85,  226 => 83,  223 => 82,  219 => 69,  216 => 68,  210 => 25,  206 => 24,  202 => 23,  198 => 22,  194 => 21,  190 => 20,  186 => 19,  182 => 18,  178 => 17,  174 => 16,  170 => 15,  166 => 14,  162 => 13,  158 => 12,  155 => 11,  152 => 10,  146 => 129,  144 => 82,  130 => 70,  128 => 68,  125 => 67,  116 => 64,  110 => 60,  105 => 59,  96 => 56,  90 => 52,  85 => 51,  76 => 48,  70 => 44,  66 => 43,  62 => 41,  50 => 31,  46 => 30,  41 => 27,  39 => 10,  32 => 6,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/admin.html.twig");
    }
}
