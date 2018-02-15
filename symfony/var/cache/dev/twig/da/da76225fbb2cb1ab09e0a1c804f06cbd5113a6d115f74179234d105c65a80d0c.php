<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0ce51991d99f1d7c16e2e96b7dfc9b2c923ea183868fe03e146b406f90bc13f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_8bf809d80e8743d17c611de7c3c99727bb6618faba2d2821d8eb0f430329ee45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf809d80e8743d17c611de7c3c99727bb6618faba2d2821d8eb0f430329ee45->enter($__internal_8bf809d80e8743d17c611de7c3c99727bb6618faba2d2821d8eb0f430329ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_92fe7401ff04b6e5b07e6e28254ef81c3680d66945eee38ee230270179f8098b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fe7401ff04b6e5b07e6e28254ef81c3680d66945eee38ee230270179f8098b->enter($__internal_92fe7401ff04b6e5b07e6e28254ef81c3680d66945eee38ee230270179f8098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bf809d80e8743d17c611de7c3c99727bb6618faba2d2821d8eb0f430329ee45->leave($__internal_8bf809d80e8743d17c611de7c3c99727bb6618faba2d2821d8eb0f430329ee45_prof);

        
        $__internal_92fe7401ff04b6e5b07e6e28254ef81c3680d66945eee38ee230270179f8098b->leave($__internal_92fe7401ff04b6e5b07e6e28254ef81c3680d66945eee38ee230270179f8098b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4959933c610fda5b2ad25ca8afb6d5969444c4eee61049aaede0db62ffeaf6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4959933c610fda5b2ad25ca8afb6d5969444c4eee61049aaede0db62ffeaf6c9->enter($__internal_4959933c610fda5b2ad25ca8afb6d5969444c4eee61049aaede0db62ffeaf6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c62b14d264f94df84dad19a5ebe4e398c18537f1c4fd158b52bd1029ec6d0556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62b14d264f94df84dad19a5ebe4e398c18537f1c4fd158b52bd1029ec6d0556->enter($__internal_c62b14d264f94df84dad19a5ebe4e398c18537f1c4fd158b52bd1029ec6d0556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c62b14d264f94df84dad19a5ebe4e398c18537f1c4fd158b52bd1029ec6d0556->leave($__internal_c62b14d264f94df84dad19a5ebe4e398c18537f1c4fd158b52bd1029ec6d0556_prof);

        
        $__internal_4959933c610fda5b2ad25ca8afb6d5969444c4eee61049aaede0db62ffeaf6c9->leave($__internal_4959933c610fda5b2ad25ca8afb6d5969444c4eee61049aaede0db62ffeaf6c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/nathan/Documents/Projects/agata/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
