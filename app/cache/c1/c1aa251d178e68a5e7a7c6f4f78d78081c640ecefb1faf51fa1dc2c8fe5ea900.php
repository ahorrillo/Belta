<?php

/* landings/banca_static.twig */
class __TwigTemplate_5533f5de7a6d71efeacdc0d9735f8ca9795d9777cad71d982fcdb6ebeedbcbf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/landing_base.twig", "landings/banca_static.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'custom_css' => array($this, 'block_custom_css'),
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
        echo "Soluciones Financieras | Belta Corp";
    }

    // line 5
    public function block_custom_css($context, array $blocks = array())
    {
        // line 6
        echo "<style>
    /* Estilos específicos para esta landing */
    .hero-section {
        /* Fondo degradado elegante en lugar de imagen por ahora */
        background: linear-gradient(135deg, var(--bank-primary) 0%, #0056b3 100%);
        color: white;
        padding: 100px 0;
    }
    .feature-icon {
        font-size: 2.5rem;
        color: var(--bank-primary);
        margin-bottom: 15px;
    }
</style>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <section class=\"hero-section text-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-4\">El futuro de sus finanzas empresariales</h1>
                    <p class=\"lead mb-5 opacity-75\">Gestionamos su patrimonio con la solidez y la tecnología que su empresa merece. Sin comisiones ocultas, con total transparencia.</p>
                    <a href=\"#\" class=\"btn btn-light btn-lg px-5 shadow-sm text-primary fw-bold\">Solicitar Asesoría</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"py-5 bg-white section-features\">
        <div class=\"container py-4\">
            <div class=\"row text-center\">
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-shield-lock-fill feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Seguridad Bancaria</h3>
                        <p class=\"text-muted\">Protocolos de encriptación de grado militar y autenticación de doble factor para proteger sus activos.</p>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-graph-up-arrow feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Rentabilidad Sostenida</h3>
                        <p class=\"text-muted\">Acceso a fondos de inversión exclusivos y análisis de mercado en tiempo real por expertos.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-globe-europe-africa feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Operativa Global</h3>
                        <p class=\"text-muted\">Gestione cuentas multidivisa y realice transferencias internacionales SWIFT con tarifas preferentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "landings/banca_static.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  57 => 22,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block title %}Soluciones Financieras | Belta Corp{% endblock %}

{% block custom_css %}
<style>
    /* Estilos específicos para esta landing */
    .hero-section {
        /* Fondo degradado elegante en lugar de imagen por ahora */
        background: linear-gradient(135deg, var(--bank-primary) 0%, #0056b3 100%);
        color: white;
        padding: 100px 0;
    }
    .feature-icon {
        font-size: 2.5rem;
        color: var(--bank-primary);
        margin-bottom: 15px;
    }
</style>
{% endblock %}

{% block content %}
    <section class=\"hero-section text-center\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <h1 class=\"display-4 fw-bold mb-4\">El futuro de sus finanzas empresariales</h1>
                    <p class=\"lead mb-5 opacity-75\">Gestionamos su patrimonio con la solidez y la tecnología que su empresa merece. Sin comisiones ocultas, con total transparencia.</p>
                    <a href=\"#\" class=\"btn btn-light btn-lg px-5 shadow-sm text-primary fw-bold\">Solicitar Asesoría</a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"py-5 bg-white section-features\">
        <div class=\"container py-4\">
            <div class=\"row text-center\">
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-shield-lock-fill feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Seguridad Bancaria</h3>
                        <p class=\"text-muted\">Protocolos de encriptación de grado militar y autenticación de doble factor para proteger sus activos.</p>
                    </div>
                </div>
                <div class=\"col-md-4 mb-4 mb-md-0\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-graph-up-arrow feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Rentabilidad Sostenida</h3>
                        <p class=\"text-muted\">Acceso a fondos de inversión exclusivos y análisis de mercado en tiempo real por expertos.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"p-3\">
                        <i class=\"bi bi-globe-europe-africa feature-icon\"></i>
                        <h3 class=\"h5 fw-bold mb-3\">Operativa Global</h3>
                        <p class=\"text-muted\">Gestione cuentas multidivisa y realice transferencias internacionales SWIFT con tarifas preferentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "landings/banca_static.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\landings\\banca_static.twig");
    }
}
