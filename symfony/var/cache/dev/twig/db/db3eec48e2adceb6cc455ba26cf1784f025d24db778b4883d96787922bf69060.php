<?php

/* base.html.twig */
class __TwigTemplate_85e1cd9db41130f0827dd0abe3643eb6b7192bf49a26e7fa51b3e6c73589086e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1a719864e8c51deb88c46e91154a8b35997c8fad332de05689fd11ce9dcea80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a719864e8c51deb88c46e91154a8b35997c8fad332de05689fd11ce9dcea80->enter($__internal_d1a719864e8c51deb88c46e91154a8b35997c8fad332de05689fd11ce9dcea80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3272004611700aa9ae635d5168ac2c2583c8f23c4f0b70b8ca0a919adc91dbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3272004611700aa9ae635d5168ac2c2583c8f23c4f0b70b8ca0a919adc91dbeb->enter($__internal_3272004611700aa9ae635d5168ac2c2583c8f23c4f0b70b8ca0a919adc91dbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d1a719864e8c51deb88c46e91154a8b35997c8fad332de05689fd11ce9dcea80->leave($__internal_d1a719864e8c51deb88c46e91154a8b35997c8fad332de05689fd11ce9dcea80_prof);

        
        $__internal_3272004611700aa9ae635d5168ac2c2583c8f23c4f0b70b8ca0a919adc91dbeb->leave($__internal_3272004611700aa9ae635d5168ac2c2583c8f23c4f0b70b8ca0a919adc91dbeb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d182f392a66622696d157e198d8fafff9dc84b73900d0731288c0767454a506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d182f392a66622696d157e198d8fafff9dc84b73900d0731288c0767454a506->enter($__internal_8d182f392a66622696d157e198d8fafff9dc84b73900d0731288c0767454a506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34e1e00acc1c7942c0f9bcf0c33bc7bd87969ae18906ef2f68c252c3c4a6a1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e1e00acc1c7942c0f9bcf0c33bc7bd87969ae18906ef2f68c252c3c4a6a1d9->enter($__internal_34e1e00acc1c7942c0f9bcf0c33bc7bd87969ae18906ef2f68c252c3c4a6a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34e1e00acc1c7942c0f9bcf0c33bc7bd87969ae18906ef2f68c252c3c4a6a1d9->leave($__internal_34e1e00acc1c7942c0f9bcf0c33bc7bd87969ae18906ef2f68c252c3c4a6a1d9_prof);

        
        $__internal_8d182f392a66622696d157e198d8fafff9dc84b73900d0731288c0767454a506->leave($__internal_8d182f392a66622696d157e198d8fafff9dc84b73900d0731288c0767454a506_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_68b5d398f5c3348943ae2f6530041975e79a56e654bb37ec998f4a19635fc305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b5d398f5c3348943ae2f6530041975e79a56e654bb37ec998f4a19635fc305->enter($__internal_68b5d398f5c3348943ae2f6530041975e79a56e654bb37ec998f4a19635fc305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8682abcfb16cbeda09d178f21b3cb5a49274f76703756ea8b77ad664f49c2665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8682abcfb16cbeda09d178f21b3cb5a49274f76703756ea8b77ad664f49c2665->enter($__internal_8682abcfb16cbeda09d178f21b3cb5a49274f76703756ea8b77ad664f49c2665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8682abcfb16cbeda09d178f21b3cb5a49274f76703756ea8b77ad664f49c2665->leave($__internal_8682abcfb16cbeda09d178f21b3cb5a49274f76703756ea8b77ad664f49c2665_prof);

        
        $__internal_68b5d398f5c3348943ae2f6530041975e79a56e654bb37ec998f4a19635fc305->leave($__internal_68b5d398f5c3348943ae2f6530041975e79a56e654bb37ec998f4a19635fc305_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd23f20aa625e321881a74b0a8de75e3ef7d81b788992807a319b751abeaa6a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd23f20aa625e321881a74b0a8de75e3ef7d81b788992807a319b751abeaa6a1->enter($__internal_cd23f20aa625e321881a74b0a8de75e3ef7d81b788992807a319b751abeaa6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d59fdeb63d74911c200cb40fde7ceba675f1e45f5a38b60736df49d31cdca493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59fdeb63d74911c200cb40fde7ceba675f1e45f5a38b60736df49d31cdca493->enter($__internal_d59fdeb63d74911c200cb40fde7ceba675f1e45f5a38b60736df49d31cdca493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d59fdeb63d74911c200cb40fde7ceba675f1e45f5a38b60736df49d31cdca493->leave($__internal_d59fdeb63d74911c200cb40fde7ceba675f1e45f5a38b60736df49d31cdca493_prof);

        
        $__internal_cd23f20aa625e321881a74b0a8de75e3ef7d81b788992807a319b751abeaa6a1->leave($__internal_cd23f20aa625e321881a74b0a8de75e3ef7d81b788992807a319b751abeaa6a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b831900c2472b7c7f265fec1e6bba5a7cb968e50f44628bf7cbb7854d4c5b91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b831900c2472b7c7f265fec1e6bba5a7cb968e50f44628bf7cbb7854d4c5b91f->enter($__internal_b831900c2472b7c7f265fec1e6bba5a7cb968e50f44628bf7cbb7854d4c5b91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5a81f780ca5df7ccb39f1dd9b131875ee2f1c9ca0f72cb03467ca2e726c91dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a81f780ca5df7ccb39f1dd9b131875ee2f1c9ca0f72cb03467ca2e726c91dc->enter($__internal_d5a81f780ca5df7ccb39f1dd9b131875ee2f1c9ca0f72cb03467ca2e726c91dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5a81f780ca5df7ccb39f1dd9b131875ee2f1c9ca0f72cb03467ca2e726c91dc->leave($__internal_d5a81f780ca5df7ccb39f1dd9b131875ee2f1c9ca0f72cb03467ca2e726c91dc_prof);

        
        $__internal_b831900c2472b7c7f265fec1e6bba5a7cb968e50f44628bf7cbb7854d4c5b91f->leave($__internal_b831900c2472b7c7f265fec1e6bba5a7cb968e50f44628bf7cbb7854d4c5b91f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/nathan/Documents/Projects/agata/app/Resources/views/base.html.twig");
    }
}
