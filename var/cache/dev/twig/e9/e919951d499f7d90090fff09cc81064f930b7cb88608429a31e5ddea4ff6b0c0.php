<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_632777faee52521f52599050204e98e151d10f6d29fd60284f7ce50b679bef62 extends Twig_Template
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
        $__internal_758917bfd8241f859612a771ef1c55141ed49ce969a01bfdff962f78c51b24bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758917bfd8241f859612a771ef1c55141ed49ce969a01bfdff962f78c51b24bc->enter($__internal_758917bfd8241f859612a771ef1c55141ed49ce969a01bfdff962f78c51b24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2cfdb5a7ca409626f131fc81721f0b3b85cf68eef08f91d1949d01b30bb2e899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfdb5a7ca409626f131fc81721f0b3b85cf68eef08f91d1949d01b30bb2e899->enter($__internal_2cfdb5a7ca409626f131fc81721f0b3b85cf68eef08f91d1949d01b30bb2e899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_758917bfd8241f859612a771ef1c55141ed49ce969a01bfdff962f78c51b24bc->leave($__internal_758917bfd8241f859612a771ef1c55141ed49ce969a01bfdff962f78c51b24bc_prof);

        
        $__internal_2cfdb5a7ca409626f131fc81721f0b3b85cf68eef08f91d1949d01b30bb2e899->leave($__internal_2cfdb5a7ca409626f131fc81721f0b3b85cf68eef08f91d1949d01b30bb2e899_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/fatmaAtallah/CrudPHP/CRUD-PHP/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
