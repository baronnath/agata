<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e7c359efb39799d64ffb70cb0cbc72c1d3f76c80fcd65d7367a0169bfd0b0e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ab402d46ea196d173142a2a0a899fc1fbf95648ac1ce5c02389896f01d3d0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab402d46ea196d173142a2a0a899fc1fbf95648ac1ce5c02389896f01d3d0c0->enter($__internal_5ab402d46ea196d173142a2a0a899fc1fbf95648ac1ce5c02389896f01d3d0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_95c55f60d8eccd9246c1881ad83c875369f5d2d12ce97f6eff5be7f37b6c5f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c55f60d8eccd9246c1881ad83c875369f5d2d12ce97f6eff5be7f37b6c5f3c->enter($__internal_95c55f60d8eccd9246c1881ad83c875369f5d2d12ce97f6eff5be7f37b6c5f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab402d46ea196d173142a2a0a899fc1fbf95648ac1ce5c02389896f01d3d0c0->leave($__internal_5ab402d46ea196d173142a2a0a899fc1fbf95648ac1ce5c02389896f01d3d0c0_prof);

        
        $__internal_95c55f60d8eccd9246c1881ad83c875369f5d2d12ce97f6eff5be7f37b6c5f3c->leave($__internal_95c55f60d8eccd9246c1881ad83c875369f5d2d12ce97f6eff5be7f37b6c5f3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c96ef3b2bf6d26166ca5e4759ff903d7ddfac2012425cbf8c9c81ad87ff63da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c96ef3b2bf6d26166ca5e4759ff903d7ddfac2012425cbf8c9c81ad87ff63da->enter($__internal_3c96ef3b2bf6d26166ca5e4759ff903d7ddfac2012425cbf8c9c81ad87ff63da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72271e8f9c4ec8ca34acc400f85a93499a21a813c1672f31f2047dc4f83b6f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72271e8f9c4ec8ca34acc400f85a93499a21a813c1672f31f2047dc4f83b6f85->enter($__internal_72271e8f9c4ec8ca34acc400f85a93499a21a813c1672f31f2047dc4f83b6f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_72271e8f9c4ec8ca34acc400f85a93499a21a813c1672f31f2047dc4f83b6f85->leave($__internal_72271e8f9c4ec8ca34acc400f85a93499a21a813c1672f31f2047dc4f83b6f85_prof);

        
        $__internal_3c96ef3b2bf6d26166ca5e4759ff903d7ddfac2012425cbf8c9c81ad87ff63da->leave($__internal_3c96ef3b2bf6d26166ca5e4759ff903d7ddfac2012425cbf8c9c81ad87ff63da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/nathan/Documents/Projects/agata/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
