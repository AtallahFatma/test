<?php

/* ::fields.html.twig */
class __TwigTemplate_b61a425545d0c35bf19493f9ce679b95ff2640297ec67a4298a7dfdadd2ac9e1 extends Twig_Template
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
        $__internal_3834164509b89f48fb7e2227d3b323b71c002d64470a04390e8fc050ba30e205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3834164509b89f48fb7e2227d3b323b71c002d64470a04390e8fc050ba30e205->enter($__internal_3834164509b89f48fb7e2227d3b323b71c002d64470a04390e8fc050ba30e205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_53c04069f2b2b40de9ee1252d09ec336c75da6865547a44e8c001268d6bfb9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c04069f2b2b40de9ee1252d09ec336c75da6865547a44e8c001268d6bfb9fb->enter($__internal_53c04069f2b2b40de9ee1252d09ec336c75da6865547a44e8c001268d6bfb9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

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
        
        $__internal_3834164509b89f48fb7e2227d3b323b71c002d64470a04390e8fc050ba30e205->leave($__internal_3834164509b89f48fb7e2227d3b323b71c002d64470a04390e8fc050ba30e205_prof);

        
        $__internal_53c04069f2b2b40de9ee1252d09ec336c75da6865547a44e8c001268d6bfb9fb->leave($__internal_53c04069f2b2b40de9ee1252d09ec336c75da6865547a44e8c001268d6bfb9fb_prof);

    }

    // line 2
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a6fe17dd3fe00b1d400401a7036a8aff8192dc4380fa7c24721913262e9f856c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fe17dd3fe00b1d400401a7036a8aff8192dc4380fa7c24721913262e9f856c->enter($__internal_a6fe17dd3fe00b1d400401a7036a8aff8192dc4380fa7c24721913262e9f856c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2a5d75d2215bdb19104e902ef26b079c1fcfd1e354cf80617315099fccd4abfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5d75d2215bdb19104e902ef26b079c1fcfd1e354cf80617315099fccd4abfc->enter($__internal_2a5d75d2215bdb19104e902ef26b079c1fcfd1e354cf80617315099fccd4abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 3
        ob_start();
        // line 4
        echo "    ";
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 5
            echo "        ";
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 6
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
                // line 7
                echo "        ";
            }
            // line 8
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 9
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 10
                echo "        ";
            }
            // line 11
            echo "        ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 12
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 13
                echo "        ";
            }
            // line 14
            echo "        <label class=\"col-sm-2 control-label\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                echo " <span style=\"color: red;\"> * </span> ";
            }
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a5d75d2215bdb19104e902ef26b079c1fcfd1e354cf80617315099fccd4abfc->leave($__internal_2a5d75d2215bdb19104e902ef26b079c1fcfd1e354cf80617315099fccd4abfc_prof);

        
        $__internal_a6fe17dd3fe00b1d400401a7036a8aff8192dc4380fa7c24721913262e9f856c->leave($__internal_a6fe17dd3fe00b1d400401a7036a8aff8192dc4380fa7c24721913262e9f856c_prof);

    }

    // line 19
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6adba69c9cf0a74d56436b517e8406c80c8b339989cfc464f79dfde8cb7b562a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adba69c9cf0a74d56436b517e8406c80c8b339989cfc464f79dfde8cb7b562a->enter($__internal_6adba69c9cf0a74d56436b517e8406c80c8b339989cfc464f79dfde8cb7b562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3ccbbe4ad9af7b8211bb82406a3e6e5381e83018f295ae72ef2b1127efecf0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccbbe4ad9af7b8211bb82406a3e6e5381e83018f295ae72ef2b1127efecf0e0->enter($__internal_3ccbbe4ad9af7b8211bb82406a3e6e5381e83018f295ae72ef2b1127efecf0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 20
        ob_start();
        // line 21
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 22
        echo "    ";
        if ((($context["type"] ?? $this->getContext($context, "type")) == "number")) {
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
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>

    ";
        } elseif ((        // line 42
($context["type"] ?? $this->getContext($context, "type")) == "file")) {
            // line 43
            echo "        <div class=\"col-sm-10\">
            <input class=\"form-control\" type=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
            ";
            // line 45
            if (((array_key_exists("id", $context) && (($context["id"] ?? $this->getContext($context, "id")) == "app_form_actualite_pieceJointe")) &&  !twig_test_empty(($context["data"] ?? $this->getContext($context, "data"))))) {
                // line 46
                echo "                <span class=\"align-btn bloc\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("download_file", array("file" => ($context["data"] ?? $this->getContext($context, "data")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
                echo "</a></span>
            ";
            }
            // line 48
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 51
            echo "      <div class=\"col-sm-10\">
          <input class=\"form-control\" type=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
          ";
            // line 54
            echo "      </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3ccbbe4ad9af7b8211bb82406a3e6e5381e83018f295ae72ef2b1127efecf0e0->leave($__internal_3ccbbe4ad9af7b8211bb82406a3e6e5381e83018f295ae72ef2b1127efecf0e0_prof);

        
        $__internal_6adba69c9cf0a74d56436b517e8406c80c8b339989cfc464f79dfde8cb7b562a->leave($__internal_6adba69c9cf0a74d56436b517e8406c80c8b339989cfc464f79dfde8cb7b562a_prof);

    }

    // line 59
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_84dad7ef3be00fd0290f9223642b99f565c7c74d22eca57dac65a4435d77e7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dad7ef3be00fd0290f9223642b99f565c7c74d22eca57dac65a4435d77e7e3->enter($__internal_84dad7ef3be00fd0290f9223642b99f565c7c74d22eca57dac65a4435d77e7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5bae59995dbd3272481d4b5027fede19ffbd2420f1737c0696e1d5c98ec5e43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bae59995dbd3272481d4b5027fede19ffbd2420f1737c0696e1d5c98ec5e43b->enter($__internal_5bae59995dbd3272481d4b5027fede19ffbd2420f1737c0696e1d5c98ec5e43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 64
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 65
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        
        $__internal_5bae59995dbd3272481d4b5027fede19ffbd2420f1737c0696e1d5c98ec5e43b->leave($__internal_5bae59995dbd3272481d4b5027fede19ffbd2420f1737c0696e1d5c98ec5e43b_prof);

        
        $__internal_84dad7ef3be00fd0290f9223642b99f565c7c74d22eca57dac65a4435d77e7e3->leave($__internal_84dad7ef3be00fd0290f9223642b99f565c7c74d22eca57dac65a4435d77e7e3_prof);

    }

    // line 73
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_12fe8f90c765c7558c2ebe0ca6c172a9a5505dcb85a12af8a3d92aa6ed0fedd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fe8f90c765c7558c2ebe0ca6c172a9a5505dcb85a12af8a3d92aa6ed0fedd5->enter($__internal_12fe8f90c765c7558c2ebe0ca6c172a9a5505dcb85a12af8a3d92aa6ed0fedd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_903ec9aa63afa6282a4ee6b3fc59ecce6ef34a0bbf66230bdbe82a6a126bba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903ec9aa63afa6282a4ee6b3fc59ecce6ef34a0bbf66230bdbe82a6a126bba4f->enter($__internal_903ec9aa63afa6282a4ee6b3fc59ecce6ef34a0bbf66230bdbe82a6a126bba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 74
        ob_start();
        // line 75
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 76
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
        
        $__internal_903ec9aa63afa6282a4ee6b3fc59ecce6ef34a0bbf66230bdbe82a6a126bba4f->leave($__internal_903ec9aa63afa6282a4ee6b3fc59ecce6ef34a0bbf66230bdbe82a6a126bba4f_prof);

        
        $__internal_12fe8f90c765c7558c2ebe0ca6c172a9a5505dcb85a12af8a3d92aa6ed0fedd5->leave($__internal_12fe8f90c765c7558c2ebe0ca6c172a9a5505dcb85a12af8a3d92aa6ed0fedd5_prof);

    }

    // line 84
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_e8e965ea4b318c908dacd4498c89698c3e6ded15a14c8130d6e7ef107ecc307c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e965ea4b318c908dacd4498c89698c3e6ded15a14c8130d6e7ef107ecc307c->enter($__internal_e8e965ea4b318c908dacd4498c89698c3e6ded15a14c8130d6e7ef107ecc307c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_b87bf75eafa45dcc7b57ce0e7166d708c02bea8eaa976fef59cfd66bd79d79bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87bf75eafa45dcc7b57ce0e7166d708c02bea8eaa976fef59cfd66bd79d79bd->enter($__internal_b87bf75eafa45dcc7b57ce0e7166d708c02bea8eaa976fef59cfd66bd79d79bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 85
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 86
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 88
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_b87bf75eafa45dcc7b57ce0e7166d708c02bea8eaa976fef59cfd66bd79d79bd->leave($__internal_b87bf75eafa45dcc7b57ce0e7166d708c02bea8eaa976fef59cfd66bd79d79bd_prof);

        
        $__internal_e8e965ea4b318c908dacd4498c89698c3e6ded15a14c8130d6e7ef107ecc307c->leave($__internal_e8e965ea4b318c908dacd4498c89698c3e6ded15a14c8130d6e7ef107ecc307c_prof);

    }

    // line 93
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fcc045a3025198d6d5db63f85fc264f2be91596137022e64b682664912064338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc045a3025198d6d5db63f85fc264f2be91596137022e64b682664912064338->enter($__internal_fcc045a3025198d6d5db63f85fc264f2be91596137022e64b682664912064338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e3f0373c1011e70352a87c3a52a1cc160b84a6fdf5ecb67b9125ecde0ca572c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f0373c1011e70352a87c3a52a1cc160b84a6fdf5ecb67b9125ecde0ca572c5->enter($__internal_e3f0373c1011e70352a87c3a52a1cc160b84a6fdf5ecb67b9125ecde0ca572c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 94
        ob_start();
        // line 95
        echo "    ";
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) &&  !($context["empty_value_in_choices"] ?? $this->getContext($context, "empty_value_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 96
            echo "        ";
            $context["required"] = false;
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo "<div class=\"col-md-9\">";
        } else {
            echo "<div class=\"col-lg-10\">";
        }
        // line 99
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " class=\"multi-select\" multiple=\"multiple\"";
        } else {
            echo " class=\"form-control m-bot15\"";
        }
        echo ">
        ";
        // line 100
        if ( !(null === ($context["empty_value"] ?? $this->getContext($context, "empty_value")))) {
            // line 101
            echo "            <option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? $this->getContext($context, "empty_value")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 103
        echo "        ";
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 104
            echo "            ";
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 105
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 106
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 107
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 109
            echo "        ";
        }
        // line 110
        echo "        ";
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 111
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
    ";
        // line 113
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo "</div>";
        } else {
            echo "</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e3f0373c1011e70352a87c3a52a1cc160b84a6fdf5ecb67b9125ecde0ca572c5->leave($__internal_e3f0373c1011e70352a87c3a52a1cc160b84a6fdf5ecb67b9125ecde0ca572c5_prof);

        
        $__internal_fcc045a3025198d6d5db63f85fc264f2be91596137022e64b682664912064338->leave($__internal_fcc045a3025198d6d5db63f85fc264f2be91596137022e64b682664912064338_prof);

    }

    // line 117
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_66a64d72df357208c1f5e01c1cb1df0eb8964dc43de9084232fb9c8618bbc3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a64d72df357208c1f5e01c1cb1df0eb8964dc43de9084232fb9c8618bbc3a8->enter($__internal_66a64d72df357208c1f5e01c1cb1df0eb8964dc43de9084232fb9c8618bbc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b6918cfa506ebffd5fa2879df52525b99e36e8f52d75ccde4bb15f1b0800b376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6918cfa506ebffd5fa2879df52525b99e36e8f52d75ccde4bb15f1b0800b376->enter($__internal_b6918cfa506ebffd5fa2879df52525b99e36e8f52d75ccde4bb15f1b0800b376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 118
        echo "<div class=\"checkboxes col-lg-10\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    </div>";
        
        $__internal_b6918cfa506ebffd5fa2879df52525b99e36e8f52d75ccde4bb15f1b0800b376->leave($__internal_b6918cfa506ebffd5fa2879df52525b99e36e8f52d75ccde4bb15f1b0800b376_prof);

        
        $__internal_66a64d72df357208c1f5e01c1cb1df0eb8964dc43de9084232fb9c8618bbc3a8->leave($__internal_66a64d72df357208c1f5e01c1cb1df0eb8964dc43de9084232fb9c8618bbc3a8_prof);

    }

    // line 130
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c592ea27661232aa8682b7043285524b584796ca845ac65e3c3145485ed1ee07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c592ea27661232aa8682b7043285524b584796ca845ac65e3c3145485ed1ee07->enter($__internal_c592ea27661232aa8682b7043285524b584796ca845ac65e3c3145485ed1ee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_73dfd5d52890ce10f9d6127b1c3a48e17b81fd5ea0c5c376f558b074e95f3524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dfd5d52890ce10f9d6127b1c3a48e17b81fd5ea0c5c376f558b074e95f3524->enter($__internal_73dfd5d52890ce10f9d6127b1c3a48e17b81fd5ea0c5c376f558b074e95f3524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 131
        ob_start();
        // line 132
        echo "    <div class=\"col-sm-10\">
    <input type=\"checkbox\" ";
        // line 133
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_73dfd5d52890ce10f9d6127b1c3a48e17b81fd5ea0c5c376f558b074e95f3524->leave($__internal_73dfd5d52890ce10f9d6127b1c3a48e17b81fd5ea0c5c376f558b074e95f3524_prof);

        
        $__internal_c592ea27661232aa8682b7043285524b584796ca845ac65e3c3145485ed1ee07->leave($__internal_c592ea27661232aa8682b7043285524b584796ca845ac65e3c3145485ed1ee07_prof);

    }

    // line 138
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_219f707544666f5b920f702ec30969addf81694543c4a8aabb58a2757bd46482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219f707544666f5b920f702ec30969addf81694543c4a8aabb58a2757bd46482->enter($__internal_219f707544666f5b920f702ec30969addf81694543c4a8aabb58a2757bd46482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_651d9a4bc97c494e25783afa4030b70940d8501673849812f0c0b4d39a167fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651d9a4bc97c494e25783afa4030b70940d8501673849812f0c0b4d39a167fbf->enter($__internal_651d9a4bc97c494e25783afa4030b70940d8501673849812f0c0b4d39a167fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 139
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 140
            $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
        }
        // line 142
        if ((($context["type"] ?? $this->getContext($context, "type")) == "submit")) {
            // line 143
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo " class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
    ";
        } else {
            // line 145
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
    ";
        }
        
        $__internal_651d9a4bc97c494e25783afa4030b70940d8501673849812f0c0b4d39a167fbf->leave($__internal_651d9a4bc97c494e25783afa4030b70940d8501673849812f0c0b4d39a167fbf_prof);

        
        $__internal_219f707544666f5b920f702ec30969addf81694543c4a8aabb58a2757bd46482->leave($__internal_219f707544666f5b920f702ec30969addf81694543c4a8aabb58a2757bd46482_prof);

    }

    // line 149
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3c2029de220350b16ab58db62d22afeac889b97f23bd905df952d843aa732140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2029de220350b16ab58db62d22afeac889b97f23bd905df952d843aa732140->enter($__internal_3c2029de220350b16ab58db62d22afeac889b97f23bd905df952d843aa732140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cd40c20d52a79f25f5e35b195fba73e9f9ea803a9d437633bb385ce849af4809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd40c20d52a79f25f5e35b195fba73e9f9ea803a9d437633bb385ce849af4809->enter($__internal_cd40c20d52a79f25f5e35b195fba73e9f9ea803a9d437633bb385ce849af4809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 150
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 151
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 152
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 154
            $context["form_method"] = "POST";
        }
        // line 156
        echo "<form class=\"form-horizontal tasi-form cmxform\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 157
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 158
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_cd40c20d52a79f25f5e35b195fba73e9f9ea803a9d437633bb385ce849af4809->leave($__internal_cd40c20d52a79f25f5e35b195fba73e9f9ea803a9d437633bb385ce849af4809_prof);

        
        $__internal_3c2029de220350b16ab58db62d22afeac889b97f23bd905df952d843aa732140->leave($__internal_3c2029de220350b16ab58db62d22afeac889b97f23bd905df952d843aa732140_prof);

    }

    // line 162
    public function block_form($context, array $blocks = array())
    {
        $__internal_402d386237eccd4a62efa2f0dea6c49ca19af28f9a0f768b6e2dc9d0cdea9f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402d386237eccd4a62efa2f0dea6c49ca19af28f9a0f768b6e2dc9d0cdea9f15->enter($__internal_402d386237eccd4a62efa2f0dea6c49ca19af28f9a0f768b6e2dc9d0cdea9f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0e0e2c08fc4217a44ac420fbf72299a0e76a87f7446651a7fa26d94ef6560409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0e2c08fc4217a44ac420fbf72299a0e76a87f7446651a7fa26d94ef6560409->enter($__internal_0e0e2c08fc4217a44ac420fbf72299a0e76a87f7446651a7fa26d94ef6560409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 163
        echo "<div class=\"panel-body\">
    ";
        // line 164
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 166
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_0e0e2c08fc4217a44ac420fbf72299a0e76a87f7446651a7fa26d94ef6560409->leave($__internal_0e0e2c08fc4217a44ac420fbf72299a0e76a87f7446651a7fa26d94ef6560409_prof);

        
        $__internal_402d386237eccd4a62efa2f0dea6c49ca19af28f9a0f768b6e2dc9d0cdea9f15->leave($__internal_402d386237eccd4a62efa2f0dea6c49ca19af28f9a0f768b6e2dc9d0cdea9f15_prof);

    }

    // line 170
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b4e1108fa4bf9255b2b5c339cb91a188aaa33068ba8c9960897360e52738861d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e1108fa4bf9255b2b5c339cb91a188aaa33068ba8c9960897360e52738861d->enter($__internal_b4e1108fa4bf9255b2b5c339cb91a188aaa33068ba8c9960897360e52738861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_99a0a5cfe08c7a640ddb74f9b2d36577c6412fea7cb1a5d032407fb719e995c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a0a5cfe08c7a640ddb74f9b2d36577c6412fea7cb1a5d032407fb719e995c2->enter($__internal_99a0a5cfe08c7a640ddb74f9b2d36577c6412fea7cb1a5d032407fb719e995c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 171
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 172
            echo "        <div class=\"col-md-4\">
            <div class=\"input-group date form_datetime-component\">
                <input type=\"text\" class=\"form-control\" size=\"16\" type=\"text\" ";
            // line 174
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo ">
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-danger date-set\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
            </div>
            ";
            // line 179
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>

    ";
        } else {
            // line 183
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 184
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 185
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 187
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 188
            echo "</div>";
        }
        
        $__internal_99a0a5cfe08c7a640ddb74f9b2d36577c6412fea7cb1a5d032407fb719e995c2->leave($__internal_99a0a5cfe08c7a640ddb74f9b2d36577c6412fea7cb1a5d032407fb719e995c2_prof);

        
        $__internal_b4e1108fa4bf9255b2b5c339cb91a188aaa33068ba8c9960897360e52738861d->leave($__internal_b4e1108fa4bf9255b2b5c339cb91a188aaa33068ba8c9960897360e52738861d_prof);

    }

    // line 192
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2e7dcfdae36938c3625f19a719aaf832e76fefc9c2ca36b2021042591b78106d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7dcfdae36938c3625f19a719aaf832e76fefc9c2ca36b2021042591b78106d->enter($__internal_2e7dcfdae36938c3625f19a719aaf832e76fefc9c2ca36b2021042591b78106d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ead36153358e4b8093f0c5f824d79fb2a124ae19355370d2ab93454f8aa9240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead36153358e4b8093f0c5f824d79fb2a124ae19355370d2ab93454f8aa9240c->enter($__internal_ead36153358e4b8093f0c5f824d79fb2a124ae19355370d2ab93454f8aa9240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 193
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 194
            echo "<div class=\"col-md-4\">
            <div class=\"input-group bootstrap-timepicker\">
                <input type=\"text\" class=\"form-control timepicker-24\"  ";
            // line 196
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
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
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 204
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"col-lg-2\">
                ";
            // line 206
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            echo "<span style=\"line-height: 35px;\">h</span>
            </div>
        ";
            // line 208
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                // line 209
                echo "            <div class=\"col-lg-2\">
                ";
                // line 210
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
                echo "<span style=\"line-height: 35px;\">min</span>
            </div>
        ";
            }
            // line 213
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 214
                echo "            <div class=\"col-lg-2\">
                ";
                // line 215
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
                echo "<span style=\"line-height: 35px;\">s</span>
            </div>
        ";
            }
            // line 218
            echo "        </div>";
        }
        
        $__internal_ead36153358e4b8093f0c5f824d79fb2a124ae19355370d2ab93454f8aa9240c->leave($__internal_ead36153358e4b8093f0c5f824d79fb2a124ae19355370d2ab93454f8aa9240c_prof);

        
        $__internal_2e7dcfdae36938c3625f19a719aaf832e76fefc9c2ca36b2021042591b78106d->leave($__internal_2e7dcfdae36938c3625f19a719aaf832e76fefc9c2ca36b2021042591b78106d_prof);

    }

    // line 223
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5e73b193df5c1a7289aa566527f8a107fdbb5d6f8cf194737372858b4dfcce24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e73b193df5c1a7289aa566527f8a107fdbb5d6f8cf194737372858b4dfcce24->enter($__internal_5e73b193df5c1a7289aa566527f8a107fdbb5d6f8cf194737372858b4dfcce24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9d198f4cfd09409509ca8175d77e16e33b95e79eeb3f7570e26e0e8d5acc8289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d198f4cfd09409509ca8175d77e16e33b95e79eeb3f7570e26e0e8d5acc8289->enter($__internal_9d198f4cfd09409509ca8175d77e16e33b95e79eeb3f7570e26e0e8d5acc8289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 224
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 226
            echo "<div class=\"col-md-3 custom-input-date\">
            <div data-date-viewmode=\"years\" data-date-format=\"dd/mm/yyyy\"";
            // line 227
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo " data-date=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "\"  class=\"input-append date dpYears\">
            <input type=\"text\" readonly=\"\" size=\"16\" class=\"form-control\" ";
            // line 228
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo ">
              <span class=\"input-group-btn add-on\">
                <button class=\"btn btn-danger\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
              </span>
        </div>
        ";
            // line 233
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>";
        } else {
            // line 237
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 238
            echo twig_escape_filter($this->env, twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 239
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 240
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 241
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget'))));
            // line 243
            echo "</div>
        ";
        }
        
        $__internal_9d198f4cfd09409509ca8175d77e16e33b95e79eeb3f7570e26e0e8d5acc8289->leave($__internal_9d198f4cfd09409509ca8175d77e16e33b95e79eeb3f7570e26e0e8d5acc8289_prof);

        
        $__internal_5e73b193df5c1a7289aa566527f8a107fdbb5d6f8cf194737372858b4dfcce24->leave($__internal_5e73b193df5c1a7289aa566527f8a107fdbb5d6f8cf194737372858b4dfcce24_prof);

    }

    // line 247
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_69d2113c5c024cad0dae9a003ecf8039d74404379947e109c4b1df90a8c40ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d2113c5c024cad0dae9a003ecf8039d74404379947e109c4b1df90a8c40ea7->enter($__internal_69d2113c5c024cad0dae9a003ecf8039d74404379947e109c4b1df90a8c40ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6eabb649741490747ae685f2eb954bd103a2ab0a96325a3c5a08a1abb655b1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eabb649741490747ae685f2eb954bd103a2ab0a96325a3c5a08a1abb655b1e2->enter($__internal_6eabb649741490747ae685f2eb954bd103a2ab0a96325a3c5a08a1abb655b1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 248
        echo "<div class=\"col-sm-10\">
        <textarea ";
        // line 249
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
    </div>";
        
        $__internal_6eabb649741490747ae685f2eb954bd103a2ab0a96325a3c5a08a1abb655b1e2->leave($__internal_6eabb649741490747ae685f2eb954bd103a2ab0a96325a3c5a08a1abb655b1e2_prof);

        
        $__internal_69d2113c5c024cad0dae9a003ecf8039d74404379947e109c4b1df90a8c40ea7->leave($__internal_69d2113c5c024cad0dae9a003ecf8039d74404379947e109c4b1df90a8c40ea7_prof);

    }

    public function getTemplateName()
    {
        return "::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  944 => 249,  941 => 248,  932 => 247,  920 => 243,  918 => 241,  917 => 240,  916 => 239,  915 => 238,  911 => 237,  906 => 233,  892 => 228,  884 => 227,  881 => 226,  879 => 224,  870 => 223,  859 => 218,  853 => 215,  850 => 214,  847 => 213,  841 => 210,  838 => 209,  836 => 208,  831 => 206,  825 => 204,  823 => 203,  808 => 196,  804 => 194,  802 => 193,  793 => 192,  782 => 188,  780 => 187,  778 => 186,  776 => 185,  774 => 184,  770 => 183,  763 => 179,  749 => 174,  745 => 172,  743 => 171,  734 => 170,  722 => 166,  720 => 165,  718 => 164,  715 => 163,  706 => 162,  693 => 158,  691 => 157,  669 => 156,  666 => 154,  663 => 152,  661 => 151,  659 => 150,  650 => 149,  632 => 145,  622 => 143,  620 => 142,  617 => 140,  615 => 139,  606 => 138,  584 => 133,  581 => 132,  579 => 131,  570 => 130,  557 => 126,  548 => 123,  546 => 121,  544 => 120,  540 => 119,  535 => 118,  526 => 117,  511 => 113,  505 => 111,  502 => 110,  499 => 109,  493 => 107,  491 => 106,  486 => 105,  483 => 104,  480 => 103,  470 => 101,  468 => 100,  458 => 99,  451 => 98,  448 => 97,  445 => 96,  442 => 95,  440 => 94,  431 => 93,  420 => 88,  417 => 86,  415 => 85,  406 => 84,  394 => 79,  385 => 77,  380 => 76,  377 => 75,  375 => 74,  366 => 73,  354 => 69,  351 => 68,  342 => 66,  337 => 65,  335 => 64,  331 => 63,  327 => 62,  320 => 61,  318 => 60,  309 => 59,  296 => 54,  284 => 52,  281 => 51,  274 => 48,  266 => 46,  264 => 45,  252 => 44,  249 => 43,  247 => 42,  241 => 39,  224 => 31,  214 => 23,  211 => 22,  208 => 21,  206 => 20,  197 => 19,  166 => 14,  163 => 13,  160 => 12,  157 => 11,  154 => 10,  151 => 9,  148 => 8,  145 => 7,  142 => 6,  139 => 5,  136 => 4,  134 => 3,  125 => 2,  112 => 252,  110 => 247,  108 => 223,  104 => 221,  102 => 192,  99 => 191,  97 => 170,  94 => 169,  92 => 162,  89 => 161,  87 => 149,  84 => 148,  82 => 138,  79 => 137,  77 => 130,  74 => 129,  72 => 117,  69 => 116,  67 => 93,  63 => 91,  61 => 84,  57 => 82,  55 => 73,  52 => 72,  50 => 59,  47 => 58,  45 => 19,  42 => 18,  40 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig #}
{% block form_label %}
{% spaceless %}
    {% if label is not sameas(false) %}
        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label class=\"col-sm-2 control-label\" {% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ label|trans({}, translation_domain) }}{% if required %} <span style=\"color: red;\"> * </span> {% endif %}</label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    {% if type == 'number' %}
        <div class=\"col-sm-10\">
        <div class=\"spinner4\">
            <div class=\"input-group\" style=\"width:150px;\">
                <div class=\"spinner-buttons input-group-btn\">
                    <button type=\"button\" class=\"btn spinner-up btn-warning\">
                        <i class=\"fa fa-plus\"></i>
                    </button>
                </div>
                <input class=\"spinner-input form-control\" type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
                <div class=\"spinner-buttons input-group-btn\">
                    <button type=\"button\" class=\"btn spinner-down btn-danger\">
                        <i class=\"fa fa-minus\"></i>
                    </button>
                </div>
            </div>
        </div>
        {{ form_errors(form) }}
        </div>

    {% elseif type == 'file'%}
        <div class=\"col-sm-10\">
            <input class=\"form-control\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            {% if(id is defined and id == 'app_form_actualite_pieceJointe' and data is not empty) %}
                <span class=\"align-btn bloc\"><a href=\"{{ path('download_file', {'file': data}) }}\">{{ data }}</a></span>
            {% endif %}
            {{ form_errors(form) }}
        </div>
    {% else %}
      <div class=\"col-sm-10\">
          <input class=\"form-control\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
          {#{{ form_errors(form) }}#}
      </div>
    {% endif %}
{% endspaceless %}
{% endblock form_widget_simple %}

{% block form_row %}
{% spaceless %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\">
        {{ form_label(form) }}
        {{ form_widget(form) }}
        {% if errors|length > 0 %}
            {% for error in errors %}
                <label class=\"error\">{{ error.message }}</label>
            {% endfor %}
        {% endif %}
    </div>
{% endspaceless %}
{% endblock form_row %}

{% block form_errors %}
{% spaceless %}
    {% if errors|length > 0 %}
        {% for error in errors %}
            <label class=\"error\">{{ error.message }}</label>
        {% endfor %}
    {% endif %}
{% endspaceless %}
{% endblock form_errors %}


{% block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget %}


{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}
    {% if multiple %}<div class=\"col-md-9\">{% else %}<div class=\"col-lg-10\">{% endif %}
    <select {{ block('widget_attributes') }}{% if multiple %} class=\"multi-select\" multiple=\"multiple\"{% else %} class=\"form-control m-bot15\"{% endif %}>
        {% if empty_value is not none %}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
    {% if multiple %}</div>{% else %}</div>{% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    <div class=\"checkboxes col-lg-10\" {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <label class=\"label_check\">
                {{- form_widget(child) -}}

            {{ child.vars.label }}
            </label>
        {% endfor %}
        {{ form_errors(form) }}
    </div>
{%- endblock choice_widget_expanded %}

{% block checkbox_widget %}
{% spaceless %}
    <div class=\"col-sm-10\">
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}/>
    </div>
{% endspaceless %}
{% endblock checkbox_widget %}

{% block button_widget -%}
    {% if label is empty -%}
        {% set label = name|humanize %}
    {%- endif -%}
    {% if type == \"submit\" %}
        <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }} class=\"btn btn-success\">{{ label|trans({}, translation_domain) }}</button>
    {% else %}
        <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>
    {% endif %}
{%- endblock button_widget %}

{% block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form class=\"form-horizontal tasi-form cmxform\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif %}
{%- endblock form_start %}

{% block form -%}
<div class=\"panel-body\">
    {{ form_start(form) }}
    {{- form_widget(form) -}}
    {{ form_end(form) }}
</div>
{%- endblock form %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        <div class=\"col-md-4\">
            <div class=\"input-group date form_datetime-component\">
                <input type=\"text\" class=\"form-control\" size=\"16\" type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-danger date-set\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
            </div>
            {{ form_errors(form) }}
        </div>

    {% else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' -%}
        <div class=\"col-md-4\">
            <div class=\"input-group bootstrap-timepicker\">
                <input type=\"text\" class=\"form-control timepicker-24\"  {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-clock-o\"></i></button>
                </span>
            </div>
        </div>
    {%- else -%}
        {% set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"col-lg-2\">
                {{ form_widget(form.hour, vars)}}<span style=\"line-height: 35px;\">h</span>
            </div>
        {% if with_minutes %}
            <div class=\"col-lg-2\">
                {{ form_widget(form.minute, vars) }}<span style=\"line-height: 35px;\">min</span>
            </div>
        {% endif %}
        {% if with_seconds %}
            <div class=\"col-lg-2\">
                {{ form_widget(form.second, vars) }}<span style=\"line-height: 35px;\">s</span>
            </div>
        {% endif %}
        </div>
    {%- endif %}
{%- endblock time_widget %}


{% block date_widget -%}
    {% if widget == 'single_text' -%}

        <div class=\"col-md-3 custom-input-date\">
            <div data-date-viewmode=\"years\" data-date-format=\"dd/mm/yyyy\"{% if value is not empty %} data-date=\"{{ value }}\" {% endif %}\"  class=\"input-append date dpYears\">
            <input type=\"text\" readonly=\"\" size=\"16\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}>
              <span class=\"input-group-btn add-on\">
                <button class=\"btn btn-danger\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
              </span>
        </div>
        {{ form_errors(form) }}
        </div>
    {%- else -%}
        {% autoescape 'html' %}
            <div {{ block('widget_container_attributes') }}>
                {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
                })|e -}}
            </div>
        {% endautoescape %}
    {%- endif %}
{%- endblock date_widget %}
{% block textarea_widget -%}
    <div class=\"col-sm-10\">
        <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
    </div>
{%- endblock textarea_widget %}



", "::fields.html.twig", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/app/Resources/views/fields.html.twig");
    }
}
