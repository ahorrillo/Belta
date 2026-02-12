<?php

/* landings/home_belta.twig */
class __TwigTemplate_96bba416fee56b39883adc476381cf990ecb199903039d3bd797822ee9b78efa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/landing_base.twig", "landings/home_belta.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container py-5 mt-5\">
    <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
            <span class=\"badge bg-primary mb-3\">v1.0.0 Stable</span>
            <h1 class=\"display-3 fw-bold\">Belta Framework</h1>
            <p class=\"lead text-muted\">La solución MVC ultra-ligera y segura optimizada para entornos PHP 5.3.</p>
            <div class=\"mt-4\">
                <a href=\"soluciones-financieras\" class=\"btn btn-bank-primary btn-lg me-2\">Ver Demo Banca</a>
                <a href=\"#docs\" class=\"btn btn-outline-secondary btn-lg\">Documentación</a>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"bg-light p-5 rounded-4 shadow-sm border\">
                <code class=\"text-dark\">
                    \$router->get('/', function() { <br>
                    &nbsp;&nbsp; echo \"Hola Mundo con Belta\"; <br>
                    });
                </code>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "landings/home_belta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
<div class=\"container py-5 mt-5\">
    <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
            <span class=\"badge bg-primary mb-3\">v1.0.0 Stable</span>
            <h1 class=\"display-3 fw-bold\">Belta Framework</h1>
            <p class=\"lead text-muted\">La solución MVC ultra-ligera y segura optimizada para entornos PHP 5.3.</p>
            <div class=\"mt-4\">
                <a href=\"soluciones-financieras\" class=\"btn btn-bank-primary btn-lg me-2\">Ver Demo Banca</a>
                <a href=\"#docs\" class=\"btn btn-outline-secondary btn-lg\">Documentación</a>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"bg-light p-5 rounded-4 shadow-sm border\">
                <code class=\"text-dark\">
                    \$router->get('/', function() { <br>
                    &nbsp;&nbsp; echo \"Hola Mundo con Belta\"; <br>
                    });
                </code>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "landings/home_belta.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\landings\\home_belta.twig");
    }
}
