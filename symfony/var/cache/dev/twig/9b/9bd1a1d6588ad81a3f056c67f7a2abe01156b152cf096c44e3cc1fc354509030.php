<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e5017f31966419d02168fc17c9a9e043d841c8bf25168791f01efb6cb34043c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ab76e202da91982dce20bb6fe1f0200eee27a6285f2787ab7733dafa9bf4212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab76e202da91982dce20bb6fe1f0200eee27a6285f2787ab7733dafa9bf4212->enter($__internal_8ab76e202da91982dce20bb6fe1f0200eee27a6285f2787ab7733dafa9bf4212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_407963033e08b3b8d9273139d20eaa01bb942ffca29d93a4cd250e7f26001c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407963033e08b3b8d9273139d20eaa01bb942ffca29d93a4cd250e7f26001c46->enter($__internal_407963033e08b3b8d9273139d20eaa01bb942ffca29d93a4cd250e7f26001c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab76e202da91982dce20bb6fe1f0200eee27a6285f2787ab7733dafa9bf4212->leave($__internal_8ab76e202da91982dce20bb6fe1f0200eee27a6285f2787ab7733dafa9bf4212_prof);

        
        $__internal_407963033e08b3b8d9273139d20eaa01bb942ffca29d93a4cd250e7f26001c46->leave($__internal_407963033e08b3b8d9273139d20eaa01bb942ffca29d93a4cd250e7f26001c46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_359019325c3cf966b445525b7bce3a80961ee4b1d9ff310ab9940b5c606f8d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359019325c3cf966b445525b7bce3a80961ee4b1d9ff310ab9940b5c606f8d23->enter($__internal_359019325c3cf966b445525b7bce3a80961ee4b1d9ff310ab9940b5c606f8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_407b6193689ef286b293e1b154e3cd3c9e24ad65e90d417dce148926c0ca530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407b6193689ef286b293e1b154e3cd3c9e24ad65e90d417dce148926c0ca530b->enter($__internal_407b6193689ef286b293e1b154e3cd3c9e24ad65e90d417dce148926c0ca530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_407b6193689ef286b293e1b154e3cd3c9e24ad65e90d417dce148926c0ca530b->leave($__internal_407b6193689ef286b293e1b154e3cd3c9e24ad65e90d417dce148926c0ca530b_prof);

        
        $__internal_359019325c3cf966b445525b7bce3a80961ee4b1d9ff310ab9940b5c606f8d23->leave($__internal_359019325c3cf966b445525b7bce3a80961ee4b1d9ff310ab9940b5c606f8d23_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/nathan/Documents/Projects/agata/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
