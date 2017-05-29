<?php

/* fields.html.twig */
class __TwigTemplate_7a7af937fcd5c272cc4696c881b8535e966e3bd82981d0856ca8fa0d49a56df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'form_start' => array($this, 'block_form_start'),
            'form' => array($this, 'block_form'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_errors', $context, $blocks);
        // line 82
        echo "

";
        // line 84
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 91
        echo "

";
        // line 93
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('button_widget', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('form_start', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('form', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('time_widget', $context, $blocks);
        // line 221
        echo "

";
        // line 223
        $this->displayBlock('date_widget', $context, $blocks);
        // line 247
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 252
        echo "


";
    }

    // line 2
    public function block_form_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 5
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 6
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 7
                echo "        ";
            }
            // line 8
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 9
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 10
                echo "        ";
            }
            // line 11
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 12
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <label class=\"col-sm-2 control-label\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " <span style=\"color: red;\"> * </span> ";
            }
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 22
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "number")) {
            // line 23
            echo "        <div class=\"col-sm-10\">
        <div class=\"spinner4\">
            <div class=\"input-group\" style=\"width:150px;\">
                <div class=\"spinner-buttons input-group-btn\">
                    <button type=\"button\" class=\"btn spinner-up btn-warning\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
                </div>
                <input class=\"spinner-input form-control\" type=\"text\" ";
            // line 31
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "/>
                <div class=\"spinner-buttons input-group-btn\">
                    <button type=\"button\" class=\"btn spinner-down btn-danger\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
        </div>
        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>

    ";
        } elseif ((        // line 42
(isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 43
            echo "        <div class=\"col-sm-10\">
            <input class=\"form-control\" type=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "/>
            ";
            // line 45
            if (((array_key_exists("id", $context) && ((isset($context["id"]) ? $context["id"] : null) == "app_form_actualite_pieceJointe")) &&  !twig_test_empty((isset($context["data"]) ? $context["data"] : null)))) {
                // line 46
                echo "                <span class=\"align-btn bloc\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_file", array("file" => (isset($context["data"]) ? $context["data"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
                echo "</a></span>
            ";
            }
            // line 48
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 51
            echo "      <div class=\"col-sm-10\">
          <input class=\"form-control\" type=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "/>
          ";
            // line 54
            echo "      </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_form_row($context, array $blocks = array())
    {
        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 65
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 66
                echo "                <label class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</label>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        ";
        }
        // line 69
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_form_errors($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 76
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 77
                echo "            <label class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</label>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 84
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 85
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 86
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 88
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 93
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 96
            echo "        ";
            $context["required"] = false;
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo "<div class=\"col-md-9\">";
        } else {
            echo "<div class=\"col-lg-10\">";
        }
        // line 99
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " class=\"multi-select\" multiple=\"multiple\"";
        } else {
            echo " class=\"form-control m-bot15\"";
        }
        echo ">
        ";
        // line 100
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) {
            // line 101
            echo "            <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
        ";
        }
        // line 103
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 104
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 105
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 106
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 107
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
            ";
            }
            // line 109
            echo "        ";
        }
        // line 110
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 111
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
    ";
        // line 113
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo "</div>";
        } else {
            echo "</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 117
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 118
        echo "<div class=\"checkboxes col-lg-10\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 120
            echo "            <label class=\"label_check\">";
            // line 121
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), "html", null, true);
            echo "
            </label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>";
    }

    // line 130
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    <div class=\"col-sm-10\">
    <input type=\"checkbox\" ";
        // line 133
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_button_widget($context, array $blocks = array())
    {
        // line 139
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 140
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
        }
        // line 142
        if (((isset($context["type"]) ? $context["type"] : null) == "submit")) {
            // line 143
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo " class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</button>
    ";
        } else {
            // line 145
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</button>
    ";
        }
    }

    // line 149
    public function block_form_start($context, array $blocks = array())
    {
        // line 150
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 151
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 152
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
        } else {
            // line 154
            $context["form_method"] = "POST";
        }
        // line 156
        echo "<form class=\"form-horizontal tasi-form cmxform\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 157
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 158
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />";
        }
    }

    // line 162
    public function block_form($context, array $blocks = array())
    {
        // line 163
        echo "<div class=\"panel-body\">
    ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 166
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>";
    }

    // line 170
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 171
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 172
            echo "        <div class=\"col-md-4\">
            <div class=\"input-group date form_datetime-component\">
                <input type=\"text\" class=\"form-control\" size=\"16\" type=\"text\" ";
            // line 174
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo ">
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-danger date-set\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
            </div>
            ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>

    ";
        } else {
            // line 183
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            // line 185
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            // line 187
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            // line 188
            echo "</div>";
        }
    }

    // line 192
    public function block_time_widget($context, array $blocks = array())
    {
        // line 193
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 194
            echo "<div class=\"col-md-4\">
            <div class=\"input-group bootstrap-timepicker\">
                <input type=\"text\" class=\"form-control timepicker-24\"  ";
            // line 196
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo ">
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button>
                </span>
            </div>
        </div>";
        } else {
            // line 203
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 204
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"col-lg-2\">
                ";
            // line 206
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo "<span style=\"line-height: 35px;\">h</span>
            </div>
        ";
            // line 208
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                // line 209
                echo "            <div class=\"col-lg-2\">
                ";
                // line 210
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
                echo "<span style=\"line-height: 35px;\">min</span>
            </div>
        ";
            }
            // line 213
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 214
                echo "            <div class=\"col-lg-2\">
                ";
                // line 215
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
                echo "<span style=\"line-height: 35px;\">s</span>
            </div>
        ";
            }
            // line 218
            echo "        </div>";
        }
    }

    // line 223
    public function block_date_widget($context, array $blocks = array())
    {
        // line 224
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 226
            echo "<div class=\"col-md-3 custom-input-date\">
            <div data-date-viewmode=\"years\" data-date-format=\"dd/mm/yyyy\"";
            // line 227
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "\"  class=\"input-append date dpYears\">
            <input type=\"text\" readonly=\"\" size=\"16\" class=\"form-control\" ";
            // line 228
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo ">
              <span class=\"input-group-btn add-on\">
                <button class=\"btn btn-danger\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
              </span>
        </div>
        ";
            // line 233
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>";
        } else {
            // line 237
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 238
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 239
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 240
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 241
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget'))));
            // line 243
            echo "</div>
        ";
        }
    }

    // line 247
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 248
        echo "<div class=\"col-sm-10\">
        <textarea ";
        // line 249
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
    </div>";
    }

    public function getTemplateName()
    {
        return "fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  758 => 249,  755 => 248,  752 => 247,  746 => 243,  744 => 241,  743 => 240,  742 => 239,  741 => 238,  737 => 237,  732 => 233,  718 => 228,  710 => 227,  707 => 226,  705 => 224,  702 => 223,  697 => 218,  691 => 215,  688 => 214,  685 => 213,  679 => 210,  676 => 209,  674 => 208,  669 => 206,  663 => 204,  661 => 203,  646 => 196,  642 => 194,  640 => 193,  637 => 192,  632 => 188,  630 => 187,  628 => 186,  626 => 185,  624 => 184,  620 => 183,  613 => 179,  599 => 174,  595 => 172,  593 => 171,  590 => 170,  584 => 166,  582 => 165,  580 => 164,  577 => 163,  574 => 162,  567 => 158,  565 => 157,  543 => 156,  540 => 154,  537 => 152,  535 => 151,  533 => 150,  530 => 149,  518 => 145,  508 => 143,  506 => 142,  503 => 140,  501 => 139,  498 => 138,  482 => 133,  479 => 132,  477 => 131,  474 => 130,  467 => 126,  458 => 123,  456 => 121,  454 => 120,  450 => 119,  445 => 118,  442 => 117,  433 => 113,  427 => 111,  424 => 110,  421 => 109,  415 => 107,  413 => 106,  408 => 105,  405 => 104,  402 => 103,  392 => 101,  390 => 100,  380 => 99,  373 => 98,  370 => 97,  367 => 96,  364 => 95,  362 => 94,  359 => 93,  354 => 88,  351 => 86,  349 => 85,  346 => 84,  340 => 79,  331 => 77,  326 => 76,  323 => 75,  321 => 74,  318 => 73,  312 => 69,  309 => 68,  300 => 66,  295 => 65,  293 => 64,  289 => 63,  285 => 62,  278 => 61,  276 => 60,  273 => 59,  266 => 54,  254 => 52,  251 => 51,  244 => 48,  236 => 46,  234 => 45,  222 => 44,  219 => 43,  217 => 42,  211 => 39,  194 => 31,  184 => 23,  181 => 22,  178 => 21,  176 => 20,  173 => 19,  148 => 14,  145 => 13,  142 => 12,  139 => 11,  136 => 10,  133 => 9,  130 => 8,  127 => 7,  124 => 6,  121 => 5,  118 => 4,  116 => 3,  113 => 2,  106 => 252,  104 => 247,  102 => 223,  98 => 221,  96 => 192,  93 => 191,  91 => 170,  88 => 169,  86 => 162,  83 => 161,  81 => 149,  78 => 148,  76 => 138,  73 => 137,  71 => 130,  68 => 129,  66 => 117,  63 => 116,  61 => 93,  57 => 91,  55 => 84,  51 => 82,  49 => 73,  46 => 72,  44 => 59,  41 => 58,  39 => 19,  36 => 18,  34 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "fields.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/fields.html.twig");
    }
}
