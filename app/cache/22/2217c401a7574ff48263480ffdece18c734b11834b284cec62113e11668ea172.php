<?php

/* layout.twig */
class __TwigTemplate_d7eba118e74b24d8fb2f57f9fb1acb501e6f6b5d449b39510eaeb7cc03a5019a extends Twig_Template
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
</head>
<body>
    <header>
        <h1>HOY - Badajoz</h1>
    </header>

    <main>
        ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "    </main>

    <footer>
        <p>&copy; 2026 Belta</p>
    </footer>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 5,  40 => 14,  38 => 13,  27 => 5,  21 => 1,);
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
    <title>{% block title %}Home{% endblock %}</title>
</head>
<body>
    <header>
        <h1>HOY - Badajoz</h1>
    </header>

    <main>
        {% block content %}{% endblock %}
    </main>

    <footer>
        <p>&copy; 2026 Belta</p>
    </footer>
</body>
</html>
", "layout.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\layout.twig");
    }
}
