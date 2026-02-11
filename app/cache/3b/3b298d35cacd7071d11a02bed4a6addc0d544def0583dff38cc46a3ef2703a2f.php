<?php

/* error.twig */
class __TwigTemplate_2877d6d4d8cdd7a6b92e477ef861fd1f4e6c366e49fdc2f762d218155bb299b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "error.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
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
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div style=\"text-align: center; padding: 100px 20px; font-family: sans-serif; color: #555;\">
    <h1 style=\"font-size: 80px; margin: 0; color: #ddd;\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["codigo"] ?? null), "html", null, true);
        echo "</h1>
    <p style=\"font-size: 20px;\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["mensaje"] ?? null), "html", null, true);
        echo "</p>
    <a href=\"./\" style=\"display: inline-block; margin-top: 20px; padding: 10px 20px; background: #333; color: #fff; text-decoration: none; border-radius: 5px;\">
        Volver al inicio
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}Error {{ codigo }}{% endblock %}

{% block content %}
<div style=\"text-align: center; padding: 100px 20px; font-family: sans-serif; color: #555;\">
    <h1 style=\"font-size: 80px; margin: 0; color: #ddd;\">{{ codigo }}</h1>
    <p style=\"font-size: 20px;\">{{ mensaje }}</p>
    <a href=\"./\" style=\"display: inline-block; margin-top: 20px; padding: 10px 20px; background: #333; color: #fff; text-decoration: none; border-radius: 5px;\">
        Volver al inicio
    </a>
</div>
{% endblock %}
", "error.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\error.twig");
    }
}
