<?php

/* layout.twig */
class __TwigTemplate_5510faf060d0e580e6ddc3faec76842af5f25bae070e4a019e65da8a707e0411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>
    <header>
        <h1>HOY - Badajoz</h1>
    </header>

    <main>
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </main>

    <footer>
        <p>&copy; 2026 Framework Badajoz</p>
    </footer>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Carnaval de Badajoz";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 5,  41 => 15,  39 => 14,  27 => 5,  21 => 1,);
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
    <meta charset=\"UTF-8\">
    <title>{% block title %}Carnaval de Badajoz{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>
    <header>
        <h1>HOY - Badajoz</h1>
    </header>

    <main>
        {% block content %}{% endblock %}
    </main>

    <footer>
        <p>&copy; 2026 Framework Badajoz</p>
    </footer>
</body>
</html>
", "layout.twig", "C:\\Proyectos\\github\\BellotaFW\\app\\views\\layout.twig");
    }
}
