<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e6d8e1cba424947a5cf174f88a6fc7a213ef53e91314f356edb134ff237ed23f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7f026b7ffa7e37d83e35cf3f367eb8300b347a9913b645a1ed29b02a72a8bc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f026b7ffa7e37d83e35cf3f367eb8300b347a9913b645a1ed29b02a72a8bc7a->enter($__internal_7f026b7ffa7e37d83e35cf3f367eb8300b347a9913b645a1ed29b02a72a8bc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d178b2c2f5448168d35a2753e49408277809e9f44af206d7655a18ab5691dec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d178b2c2f5448168d35a2753e49408277809e9f44af206d7655a18ab5691dec1->enter($__internal_d178b2c2f5448168d35a2753e49408277809e9f44af206d7655a18ab5691dec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f026b7ffa7e37d83e35cf3f367eb8300b347a9913b645a1ed29b02a72a8bc7a->leave($__internal_7f026b7ffa7e37d83e35cf3f367eb8300b347a9913b645a1ed29b02a72a8bc7a_prof);

        
        $__internal_d178b2c2f5448168d35a2753e49408277809e9f44af206d7655a18ab5691dec1->leave($__internal_d178b2c2f5448168d35a2753e49408277809e9f44af206d7655a18ab5691dec1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e04f2f4094c346b528f82215e166229f197dbef61e1493fbc3724c6d21454f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04f2f4094c346b528f82215e166229f197dbef61e1493fbc3724c6d21454f5e->enter($__internal_e04f2f4094c346b528f82215e166229f197dbef61e1493fbc3724c6d21454f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3a2853265816dda8afd29cfcba323b4ff9d34c106f128a031e747ec620b708f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a2853265816dda8afd29cfcba323b4ff9d34c106f128a031e747ec620b708f->enter($__internal_c3a2853265816dda8afd29cfcba323b4ff9d34c106f128a031e747ec620b708f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c3a2853265816dda8afd29cfcba323b4ff9d34c106f128a031e747ec620b708f->leave($__internal_c3a2853265816dda8afd29cfcba323b4ff9d34c106f128a031e747ec620b708f_prof);

        
        $__internal_e04f2f4094c346b528f82215e166229f197dbef61e1493fbc3724c6d21454f5e->leave($__internal_e04f2f4094c346b528f82215e166229f197dbef61e1493fbc3724c6d21454f5e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/nathan/Documents/Projects/agata/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
