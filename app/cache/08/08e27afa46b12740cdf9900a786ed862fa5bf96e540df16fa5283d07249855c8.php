<?php

/* layouts/landing_base.twig */
class __TwigTemplate_c9281c4845a11e442ee6cb21c773f770b9600e4941657e61029e60eeb5a1694e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'custom_css' => array($this, 'block_custom_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">

    <style>
        /* Estilos corporativos base */
        :root {
            --bank-primary: #0d2e69; /* Azul oscuro corporativo */
            --bank-secondary: #f8f9fa; /* Gris claro */
        }
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #333;
        }
        .btn-bank-primary {
            background-color: var(--bank-primary);
            color: white;
            border: none;
            padding: 10px 25px;
        }
        .btn-bank-primary:hover { background-color: #0a2350; color: white; }

        /* Bloque para CSS específico de cada landing */
        ";
        // line 31
        $this->displayBlock('custom_css', $context, $blocks);
        // line 32
        echo "    </style>
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3\">
        <div class=\"container\">
            <a class=\"navbar-brand fw-bold text-primary\" href=\"#\" style=\"color: var(--bank-primary) !important;\">
                <i class=\"bi bi-bank2 me-2\"></i>Belta Corp.
            </a>
            <div class=\"d-flex\">
                 <a href=\"#\" class=\"btn btn-outline-primary me-2\">Acceso Clientes</a>
                 <a href=\"#\" class=\"btn btn-bank-primary\">Abrir Cuenta</a>
            </div>
        </div>
    </nav>

    <main>
        ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "    </main>

    <footer class=\"bg-light py-4 mt-5 text-center text-muted border-top\">
        <div class=\"container\">
            <small>&copy; 2026 Belta Financial Services. Todos los derechos reservados. Regulación CSSF.</small>
        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Belta Bank";
    }

    // line 31
    public function block_custom_css($context, array $blocks = array())
    {
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/landing_base.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  100 => 31,  94 => 6,  79 => 49,  77 => 48,  59 => 32,  57 => 31,  29 => 6,  22 => 1,);
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
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Belta Bank{% endblock %}</title>

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">

    <style>
        /* Estilos corporativos base */
        :root {
            --bank-primary: #0d2e69; /* Azul oscuro corporativo */
            --bank-secondary: #f8f9fa; /* Gris claro */
        }
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: #333;
        }
        .btn-bank-primary {
            background-color: var(--bank-primary);
            color: white;
            border: none;
            padding: 10px 25px;
        }
        .btn-bank-primary:hover { background-color: #0a2350; color: white; }

        /* Bloque para CSS específico de cada landing */
        {% block custom_css %}{% endblock %}
    </style>
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3\">
        <div class=\"container\">
            <a class=\"navbar-brand fw-bold text-primary\" href=\"#\" style=\"color: var(--bank-primary) !important;\">
                <i class=\"bi bi-bank2 me-2\"></i>Belta Corp.
            </a>
            <div class=\"d-flex\">
                 <a href=\"#\" class=\"btn btn-outline-primary me-2\">Acceso Clientes</a>
                 <a href=\"#\" class=\"btn btn-bank-primary\">Abrir Cuenta</a>
            </div>
        </div>
    </nav>

    <main>
        {% block content %}{% endblock %}
    </main>

    <footer class=\"bg-light py-4 mt-5 text-center text-muted border-top\">
        <div class=\"container\">
            <small>&copy; 2026 Belta Financial Services. Todos los derechos reservados. Regulación CSSF.</small>
        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "layouts/landing_base.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\layouts\\landing_base.twig");
    }
}
