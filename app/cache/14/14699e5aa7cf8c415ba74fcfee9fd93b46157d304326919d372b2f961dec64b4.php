<?php

/* landings/error_belta.twig */
class __TwigTemplate_2e05242d55b84a483d96470d9557f01f56619b85f52392c12cd20445730cd3b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/landing_base.twig", "landings/error_belta.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/landing_base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Error ";
        echo twig_escape_filter($this->env, ($context["codigo"] ?? null), "html", null, true);
        echo " | Belta Corp";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container py-5 mt-5 text-center\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"mb-4\">
                <i class=\"bi bi-exclamation-octagon text-danger\" style=\"font-size: 5rem;\"></i>
            </div>
            <h1 class=\"display-1 fw-bold text-primary\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["codigo"] ?? null), "html", null, true);
        echo "</h1>
            <h2 class=\"h3 mb-4\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
        echo "</h2>
            <p class=\"text-muted mb-5\">
                Lo sentimos, parece que ha habido un problema en la gestión de su solicitud.
                Si cree que esto es un error, por favor contacte con soporte técnico.
            </p>
            <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                <a href=\"/\" class=\"btn btn-bank-primary btn-lg px-4 gap-3\">Volver a la Home</a>
                <a href=\"mailto:soporte@belta.com\" class=\"btn btn-outline-secondary btn-lg px-4\">Contactar Soporte</a>
            </div>
        </div>
    </div>
</div>

";
        // line 27
        echo "<style>
    body { background-color: #fcfcfc; }
    .bi-exclamation-octagon {
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "landings/error_belta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  52 => 13,  48 => 12,  40 => 6,  37 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/landing_base.twig\" %}

{% block title %}Error {{ codigo }} | Belta Corp{% endblock %}

{% block content %}
<div class=\"container py-5 mt-5 text-center\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6\">
            <div class=\"mb-4\">
                <i class=\"bi bi-exclamation-octagon text-danger\" style=\"font-size: 5rem;\"></i>
            </div>
            <h1 class=\"display-1 fw-bold text-primary\">{{ codigo }}</h1>
            <h2 class=\"h3 mb-4\">{{ mensaje }}</h2>
            <p class=\"text-muted mb-5\">
                Lo sentimos, parece que ha habido un problema en la gestión de su solicitud.
                Si cree que esto es un error, por favor contacte con soporte técnico.
            </p>
            <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                <a href=\"/\" class=\"btn btn-bank-primary btn-lg px-4 gap-3\">Volver a la Home</a>
                <a href=\"mailto:soporte@belta.com\" class=\"btn btn-outline-secondary btn-lg px-4\">Contactar Soporte</a>
            </div>
        </div>
    </div>
</div>

{# Un toque de diseño extra para que no parezca un error catastrófico #}
<style>
    body { background-color: #fcfcfc; }
    .bi-exclamation-octagon {
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }
</style>
{% endblock %}
", "landings/error_belta.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\landings\\error_belta.twig");
    }
}
