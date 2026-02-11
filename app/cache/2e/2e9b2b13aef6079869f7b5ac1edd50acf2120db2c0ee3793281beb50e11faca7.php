<?php

/* landings/banca_dynamic.twig */
class __TwigTemplate_2aa642dd7db19af1bf4afe919904adb9221079b5a5238bf835917ca54f3841a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/landing_base.twig", "landings/banca_dynamic.twig", 1);
        $this->blocks = array(
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
    public function block_custom_css($context, array $blocks = array())
    {
        // line 4
        echo "<style>
    .hero-section {
        background: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paina"] ?? null), "color_fondo", array()), "html", null, true);
        echo ";
        color: white;
        padding: 100px 0;
    }
</style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <section class=\"hero-section text-center\">
        <div class=\"container\">
            <h1 class=\"display-4 fw-bold mb-4\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paina"] ?? null), "titulo", array()), "html", null, true);
        echo "</h1>
            <p class=\"lead mb-5\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paina"] ?? null), "subtitulo", array()), "html", null, true);
        echo "</p>
            <a href=\"#\" class=\"btn btn-light btn-lg px-5\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paina"] ?? null), "texto_boton", array()), "html", null, true);
        echo "</a>
        </div>
    </section>
    <section class=\"container my-5\">
        <h2 class=\"mb-4\">Contáctanos</h2>
        ";
        // line 23
        if ((($context["status"] ?? null) == "1")) {
            // line 24
            echo "            <div class=\"alert alert-success border-0 shadow-sm mb-4\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                ¡Solicitud enviada con éxito! Nos pondremos en contacto con usted en breve.
            </div>
        ";
        }
        // line 29
        echo "        <form action=\"/contacto\" method=\"POST\" class=\"p-4 border rounded bg-light\">
            <input type=\"hidden\" name=\"landing_slug\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["paina"] ?? null), "slug", array()), "html", null, true);
        echo "\">
            <div class=\"mb-3\">
                <label>Nombre</label>
                <input type=\"text\" name=\"nombre\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label>Email</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label>Mensaje</label>
                <textarea name=\"mensaje\" class=\"form-control\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary w-100\">Enviar Información</button>

            ";
        // line 45
        if ($this->getAttribute(($context["_get"] ?? null), "exito", array())) {
            // line 46
            echo "                <div class=\"alert alert-success mt-3\">¡Gracias! Nos pondremos en contacto pronto.</div>
            ";
        }
        // line 48
        echo "        </form>
    </section>

";
    }

    public function getTemplateName()
    {
        return "landings/banca_dynamic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  101 => 46,  99 => 45,  81 => 30,  78 => 29,  71 => 24,  69 => 23,  61 => 18,  57 => 17,  53 => 16,  49 => 14,  46 => 13,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
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

{% block custom_css %}
<style>
    .hero-section {
        background: {{ paina.color_fondo }};
        color: white;
        padding: 100px 0;
    }
</style>
{% endblock %}

{% block content %}
    <section class=\"hero-section text-center\">
        <div class=\"container\">
            <h1 class=\"display-4 fw-bold mb-4\">{{ paina.titulo }}</h1>
            <p class=\"lead mb-5\">{{ paina.subtitulo }}</p>
            <a href=\"#\" class=\"btn btn-light btn-lg px-5\">{{ paina.texto_boton }}</a>
        </div>
    </section>
    <section class=\"container my-5\">
        <h2 class=\"mb-4\">Contáctanos</h2>
        {% if status == '1' %}
            <div class=\"alert alert-success border-0 shadow-sm mb-4\">
                <i class=\"bi bi-check-circle-fill me-2\"></i>
                ¡Solicitud enviada con éxito! Nos pondremos en contacto con usted en breve.
            </div>
        {% endif %}
        <form action=\"/contacto\" method=\"POST\" class=\"p-4 border rounded bg-light\">
            <input type=\"hidden\" name=\"landing_slug\" value=\"{{ paina.slug }}\">
            <div class=\"mb-3\">
                <label>Nombre</label>
                <input type=\"text\" name=\"nombre\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label>Email</label>
                <input type=\"email\" name=\"email\" class=\"form-control\" required>
            </div>
            <div class=\"mb-3\">
                <label>Mensaje</label>
                <textarea name=\"mensaje\" class=\"form-control\" rows=\"3\"></textarea>
            </div>
            <button type=\"submit\" class=\"btn btn-primary w-100\">Enviar Información</button>

            {% if _get.exito %}
                <div class=\"alert alert-success mt-3\">¡Gracias! Nos pondremos en contacto pronto.</div>
            {% endif %}
        </form>
    </section>

{% endblock %}
", "landings/banca_dynamic.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\landings\\banca_dynamic.twig");
    }
}
