<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8f1dff7425525bc87243459f0b0f971b5749a6178d6594a893ed00cecfe44dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc86d164369c49a64c820173f823930161e218a0e3fd362849a3dad5b43f9f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc86d164369c49a64c820173f823930161e218a0e3fd362849a3dad5b43f9f70->enter($__internal_cc86d164369c49a64c820173f823930161e218a0e3fd362849a3dad5b43f9f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa0661d7aafe06ff239967ee23d48efefc1a290a9151d42224fdf5c44387f365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0661d7aafe06ff239967ee23d48efefc1a290a9151d42224fdf5c44387f365->enter($__internal_aa0661d7aafe06ff239967ee23d48efefc1a290a9151d42224fdf5c44387f365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc86d164369c49a64c820173f823930161e218a0e3fd362849a3dad5b43f9f70->leave($__internal_cc86d164369c49a64c820173f823930161e218a0e3fd362849a3dad5b43f9f70_prof);

        
        $__internal_aa0661d7aafe06ff239967ee23d48efefc1a290a9151d42224fdf5c44387f365->leave($__internal_aa0661d7aafe06ff239967ee23d48efefc1a290a9151d42224fdf5c44387f365_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e318c51602bf6f2278cf21a46b485ace4febf55f500ae971871d752c66d082c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e318c51602bf6f2278cf21a46b485ace4febf55f500ae971871d752c66d082c->enter($__internal_4e318c51602bf6f2278cf21a46b485ace4febf55f500ae971871d752c66d082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f189a30e1695b3db06ed3c1a952be92b4067be224773eb7b329a2371b0affb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f189a30e1695b3db06ed3c1a952be92b4067be224773eb7b329a2371b0affb4->enter($__internal_6f189a30e1695b3db06ed3c1a952be92b4067be224773eb7b329a2371b0affb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f189a30e1695b3db06ed3c1a952be92b4067be224773eb7b329a2371b0affb4->leave($__internal_6f189a30e1695b3db06ed3c1a952be92b4067be224773eb7b329a2371b0affb4_prof);

        
        $__internal_4e318c51602bf6f2278cf21a46b485ace4febf55f500ae971871d752c66d082c->leave($__internal_4e318c51602bf6f2278cf21a46b485ace4febf55f500ae971871d752c66d082c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c44f2ce0e4373a4461a7442e9ccfb2c75d8974cd42ed05881bf2c993fdac9a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44f2ce0e4373a4461a7442e9ccfb2c75d8974cd42ed05881bf2c993fdac9a0b->enter($__internal_c44f2ce0e4373a4461a7442e9ccfb2c75d8974cd42ed05881bf2c993fdac9a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cef5be2603e3756e37a2c6f076c3f355d2fed032946ee369e3f15a65c3591700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef5be2603e3756e37a2c6f076c3f355d2fed032946ee369e3f15a65c3591700->enter($__internal_cef5be2603e3756e37a2c6f076c3f355d2fed032946ee369e3f15a65c3591700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cef5be2603e3756e37a2c6f076c3f355d2fed032946ee369e3f15a65c3591700->leave($__internal_cef5be2603e3756e37a2c6f076c3f355d2fed032946ee369e3f15a65c3591700_prof);

        
        $__internal_c44f2ce0e4373a4461a7442e9ccfb2c75d8974cd42ed05881bf2c993fdac9a0b->leave($__internal_c44f2ce0e4373a4461a7442e9ccfb2c75d8974cd42ed05881bf2c993fdac9a0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20f2fb3e205c2c51417309a3aee845c285e7a3be74627750307cc1c1d60e55a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f2fb3e205c2c51417309a3aee845c285e7a3be74627750307cc1c1d60e55a1->enter($__internal_20f2fb3e205c2c51417309a3aee845c285e7a3be74627750307cc1c1d60e55a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e8c55a7d2d4da069ad36697d43df0222d4ff673212d6c2a990b01d34b59410a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8c55a7d2d4da069ad36697d43df0222d4ff673212d6c2a990b01d34b59410a->enter($__internal_5e8c55a7d2d4da069ad36697d43df0222d4ff673212d6c2a990b01d34b59410a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e8c55a7d2d4da069ad36697d43df0222d4ff673212d6c2a990b01d34b59410a->leave($__internal_5e8c55a7d2d4da069ad36697d43df0222d4ff673212d6c2a990b01d34b59410a_prof);

        
        $__internal_20f2fb3e205c2c51417309a3aee845c285e7a3be74627750307cc1c1d60e55a1->leave($__internal_20f2fb3e205c2c51417309a3aee845c285e7a3be74627750307cc1c1d60e55a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/nathan/Documents/Projects/agata/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
