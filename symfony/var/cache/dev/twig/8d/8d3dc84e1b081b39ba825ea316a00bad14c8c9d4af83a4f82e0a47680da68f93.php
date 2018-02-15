<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7e71c1043e0b1f59fc3e0c6718ec1dd66847c68b4e800da2e25420f2560746b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_66d872b02ba65f67e8724a117fa2e14b33589eb2921f236dd3c896884e762a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d872b02ba65f67e8724a117fa2e14b33589eb2921f236dd3c896884e762a1b->enter($__internal_66d872b02ba65f67e8724a117fa2e14b33589eb2921f236dd3c896884e762a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_06281f230e9a53c974dc6fbd6dc54ea2f0e5c8c02503327860a73fe699bdc4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06281f230e9a53c974dc6fbd6dc54ea2f0e5c8c02503327860a73fe699bdc4f3->enter($__internal_06281f230e9a53c974dc6fbd6dc54ea2f0e5c8c02503327860a73fe699bdc4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d872b02ba65f67e8724a117fa2e14b33589eb2921f236dd3c896884e762a1b->leave($__internal_66d872b02ba65f67e8724a117fa2e14b33589eb2921f236dd3c896884e762a1b_prof);

        
        $__internal_06281f230e9a53c974dc6fbd6dc54ea2f0e5c8c02503327860a73fe699bdc4f3->leave($__internal_06281f230e9a53c974dc6fbd6dc54ea2f0e5c8c02503327860a73fe699bdc4f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6931be71c3e5db5307b051c4e72d721166a76fa5e78131f468e557550521675c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6931be71c3e5db5307b051c4e72d721166a76fa5e78131f468e557550521675c->enter($__internal_6931be71c3e5db5307b051c4e72d721166a76fa5e78131f468e557550521675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2c55ada5de89a259441383c059d507f370e6707141e92d78aec142c8b8917d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c55ada5de89a259441383c059d507f370e6707141e92d78aec142c8b8917d5->enter($__internal_a2c55ada5de89a259441383c059d507f370e6707141e92d78aec142c8b8917d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a2c55ada5de89a259441383c059d507f370e6707141e92d78aec142c8b8917d5->leave($__internal_a2c55ada5de89a259441383c059d507f370e6707141e92d78aec142c8b8917d5_prof);

        
        $__internal_6931be71c3e5db5307b051c4e72d721166a76fa5e78131f468e557550521675c->leave($__internal_6931be71c3e5db5307b051c4e72d721166a76fa5e78131f468e557550521675c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c70dcd5aff1179c0d7ad0f874165baef1e9ee62f38158fa40f5750bddcf05d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70dcd5aff1179c0d7ad0f874165baef1e9ee62f38158fa40f5750bddcf05d3d->enter($__internal_c70dcd5aff1179c0d7ad0f874165baef1e9ee62f38158fa40f5750bddcf05d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a94a3f546a6242c9507a65fbc98a962e9af01d5e4a272f522a7304133b035f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94a3f546a6242c9507a65fbc98a962e9af01d5e4a272f522a7304133b035f41->enter($__internal_a94a3f546a6242c9507a65fbc98a962e9af01d5e4a272f522a7304133b035f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a94a3f546a6242c9507a65fbc98a962e9af01d5e4a272f522a7304133b035f41->leave($__internal_a94a3f546a6242c9507a65fbc98a962e9af01d5e4a272f522a7304133b035f41_prof);

        
        $__internal_c70dcd5aff1179c0d7ad0f874165baef1e9ee62f38158fa40f5750bddcf05d3d->leave($__internal_c70dcd5aff1179c0d7ad0f874165baef1e9ee62f38158fa40f5750bddcf05d3d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5d887580257897c985864f36f2353980d820ae98702ebd79a5669ca19a60a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d887580257897c985864f36f2353980d820ae98702ebd79a5669ca19a60a1f->enter($__internal_b5d887580257897c985864f36f2353980d820ae98702ebd79a5669ca19a60a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a7eb5a4a74856d8c9546960dd7527f87c528da493fa0cdcfc05091807756e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7eb5a4a74856d8c9546960dd7527f87c528da493fa0cdcfc05091807756e07->enter($__internal_6a7eb5a4a74856d8c9546960dd7527f87c528da493fa0cdcfc05091807756e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6a7eb5a4a74856d8c9546960dd7527f87c528da493fa0cdcfc05091807756e07->leave($__internal_6a7eb5a4a74856d8c9546960dd7527f87c528da493fa0cdcfc05091807756e07_prof);

        
        $__internal_b5d887580257897c985864f36f2353980d820ae98702ebd79a5669ca19a60a1f->leave($__internal_b5d887580257897c985864f36f2353980d820ae98702ebd79a5669ca19a60a1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/nathan/Documents/Projects/agata/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
