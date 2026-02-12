<?php

/* landings/papel_home.twig */
class __TwigTemplate_a207ac25100fde1d4933f4719ea21f2f1c9121b58d0a757fe8dcd325613d4669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("remote_layout.twig", "landings/papel_home.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "remote_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <!-- block content -->
  <style>
    .voc-landing {
      max-width: 960px;
      margin: 0 auto;
      background-color: #F9F9F9;
    }

    /* HERO */
    .voc-hero {
      background: linear-gradient(180deg, #DE0429 0%, #97001A 100%);
      padding: 24px;
    }

    .voc-hero-title {
      font-family: \"Guardian Sans Semibold\";
      font-size: 22px;
      color: #FFFFFF;
      margin-bottom: 8px;
    }

    .voc-hero-text {
      font-family: \"Guardian TextSans Regular\";
      font-size: 15px;
      color: #FFFFFF;
      max-width: 720px;
    }

    /* SECCIÓN VENTAJAS */
    .voc-benefits {
      padding: 24px;
    }

    .voc-benefit-item {
      display: flex;
      gap: 16px;
      padding: 16px 0;
      border-bottom: 1px solid #D7D7D7;
    }

    .voc-benefit-icon {
      flex: 0 0 40px;
      height: 40px;
      background-color: #DE0429;
      color: #FFFFFF;
      font-family: \"Guardian TextSans Medium\";
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .voc-benefit-content {
      flex: 1;
    }

    .voc-benefit-title {
      font-family: \"Guardian TextSans Semibold\";
      font-size: 15px;
      color: #C90022;
      margin-bottom: 4px;
    }

    .voc-benefit-text {
      font-family: \"Guardian TextSans Regular\";
      font-size: 14px;
      color: #202020;
    }

    /* INFO FINAL */
    .voc-info {
      padding: 16px 24px;
      font-family: \"Guardian TextSans Regular\";
      font-size: 14px;
      color: #6B6B6B;
    }

    /* CONTACTO */
    .voc-contact {
      background-color: #C90022;
      color: #FFFFFF;
      padding: 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: space-between;
    }

    .voc-contact-title {
      font-family: \"Guardian Sans Semibold\";
      font-size: 18px;
    }

    .voc-contact-item {
      font-family: \"Guardian TextSans Medium\";
      font-size: 18px;
    }

    @media (max-width: 699px) {
      .voc-benefit-item {
        flex-direction: column;
      }
    }
  </style>

  <div class=\"v-w\">
    <div class=\"v-c v-c--m\">
      <div class=\"v-ps v-ps--t8\">
        <h1 class=\"v-ps__t\">Suscriptores Edición Impresa</h1>

        <header class=\"v-sub-m \">
          <div class=\"v-m-und v-sld v-sld--t2 v-sld--t2-a not-touch not-sld\" data-voc-component=\"slider-arrow\">
            <nav class=\"v-m-und__nav v-sld__c\">
                <div class=\"v-sld__w\">
                  <ul class=\"v-m-und__list v-sld__g\">
                    <li class=\"v-m-und__item is-active v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-home\">Inicio</a>
                    </li>
                    <li class=\"v-m-und__item v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-faq\">Preguntas Frecuentes</a>
                    </li>
                    <li class=\"v-m-und__item v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-contacto\">Contactar</a>
                    </li>
                  </ul>
                </div>
            </nav>
          </div>
        </header>

        <img class=\"v-ps__img\" src=\"assets/img/img1.jpg\" alt=\"Suscriptores Edición Impresa\">
        <p class=\"v-p v-p--t1 v-p--t4\">
          DIARIO HOY te acompaña al comienzo del día y comparte contigo el ritual de
          informarse con calma. Para nosotros, que sostengas este papel en tus manos es el
          mejor impulso para seguir contando historias que importan. Gracias por formar
          parte de nuestra comunidad y por confiar en el periodismo que se hace con mimo y
          honestidad.
        </p>
        <p class=\"v-p v-p--t1\">
          Si tienes cualquier duda o simplemente quieres darnos una idea para mejorar, llámanos a nuestro
          <strong>Teléfono de Atención al Suscriptor: 924214302</strong>.
          Nos encanta escucharte y
          estamos aquí para solucionar cualquier problema que puedas tener con tu suscripción.
          Recuerda que, además de recibir el diario en tu casa, o recogerlo en el punto de venta
          que tu elijas, tienes acceso total a
          <a href=\"https://www.hoy.es\" title=\"Diario HOY\"><strong>hoy.es</strong></a>.
          <i>Queremos que disfrutes de todas las ventajas de ser \"de la casa\" y que sientas que este periódico
          es, hoy más que nunca,</i> tuyo.
        </p>

        <div class=\"voc-landing\" role=\"main\">
          <div class=\"voc-hero\">
            <div class=\"voc-hero-title\">TODO VENTAJAS</div>
            <div class=\"voc-hero-text\">
              Como suscriptor del Diario HOY no sólo recibirás el periódico en tu domicilio a primera hora sin gastos de envío,
              sino que podrás gozar de otras grandes ventajas:
            </div>
          </div>

          <div class=\"voc-benefits\" role=\"list\">
            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">🕖</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">COMODIDAD</div>
                <div class=\"voc-benefit-text\">
                  Entrega a primera hora de la mañana en tu domicilio<sup>*</sup>, en tu oficina o en tu kiosco, sin gastos de envíos.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">📅</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">FLEXIBILIDAD</div>
                <div class=\"voc-benefit-text\">
                  Recepción de lunes a viernes en tu empresa y fines de semana en tu domicilio. Posibilidad de cambio temporal,
                  envío a otra dirección.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">€</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">FACILIDAD DE PAGO</div>
                <div class=\"voc-benefit-text\">
                  Mensual, trimestral, semestral o anual, con posibilidad de cancelación cuando tu quieras.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">🏢</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">DESGRAVACIÓN FISCAL</div>
                <div class=\"voc-benefit-text\">
                  Beneficios especiales para empresas y autónomos.
                </div>
              </div>
            </div>
          </div>

          <div class=\"voc-info\">
            <sup>*</sup>Consultar zonas de reparto y horarios de entrega.
          </div>

          <div class=\"voc-contact\" role=\"contentinfo\">
            <div>
              <div class=\"voc-contact-title\">Servicio de atención al suscriptor</div>
            </div>
            <div class=\"voc-contact-item\">
              Badajoz: <strong>924 214 302</strong>
            </div>
            <div class=\"voc-contact-item\">
              Cáceres: <strong>927 301 550</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    /* tu JS */
  </script>
  <!-- endblock content -->
";
    }

    public function getTemplateName()
    {
        return "landings/papel_home.twig";
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
        return new Twig_Source("{% extends 'remote_layout.twig' %}

{% block content %}
  <!-- block content -->
  <style>
    .voc-landing {
      max-width: 960px;
      margin: 0 auto;
      background-color: #F9F9F9;
    }

    /* HERO */
    .voc-hero {
      background: linear-gradient(180deg, #DE0429 0%, #97001A 100%);
      padding: 24px;
    }

    .voc-hero-title {
      font-family: \"Guardian Sans Semibold\";
      font-size: 22px;
      color: #FFFFFF;
      margin-bottom: 8px;
    }

    .voc-hero-text {
      font-family: \"Guardian TextSans Regular\";
      font-size: 15px;
      color: #FFFFFF;
      max-width: 720px;
    }

    /* SECCIÓN VENTAJAS */
    .voc-benefits {
      padding: 24px;
    }

    .voc-benefit-item {
      display: flex;
      gap: 16px;
      padding: 16px 0;
      border-bottom: 1px solid #D7D7D7;
    }

    .voc-benefit-icon {
      flex: 0 0 40px;
      height: 40px;
      background-color: #DE0429;
      color: #FFFFFF;
      font-family: \"Guardian TextSans Medium\";
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .voc-benefit-content {
      flex: 1;
    }

    .voc-benefit-title {
      font-family: \"Guardian TextSans Semibold\";
      font-size: 15px;
      color: #C90022;
      margin-bottom: 4px;
    }

    .voc-benefit-text {
      font-family: \"Guardian TextSans Regular\";
      font-size: 14px;
      color: #202020;
    }

    /* INFO FINAL */
    .voc-info {
      padding: 16px 24px;
      font-family: \"Guardian TextSans Regular\";
      font-size: 14px;
      color: #6B6B6B;
    }

    /* CONTACTO */
    .voc-contact {
      background-color: #C90022;
      color: #FFFFFF;
      padding: 24px;
      display: flex;
      flex-wrap: wrap;
      gap: 24px;
      justify-content: space-between;
    }

    .voc-contact-title {
      font-family: \"Guardian Sans Semibold\";
      font-size: 18px;
    }

    .voc-contact-item {
      font-family: \"Guardian TextSans Medium\";
      font-size: 18px;
    }

    @media (max-width: 699px) {
      .voc-benefit-item {
        flex-direction: column;
      }
    }
  </style>

  <div class=\"v-w\">
    <div class=\"v-c v-c--m\">
      <div class=\"v-ps v-ps--t8\">
        <h1 class=\"v-ps__t\">Suscriptores Edición Impresa</h1>

        <header class=\"v-sub-m \">
          <div class=\"v-m-und v-sld v-sld--t2 v-sld--t2-a not-touch not-sld\" data-voc-component=\"slider-arrow\">
            <nav class=\"v-m-und__nav v-sld__c\">
                <div class=\"v-sld__w\">
                  <ul class=\"v-m-und__list v-sld__g\">
                    <li class=\"v-m-und__item is-active v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-home\">Inicio</a>
                    </li>
                    <li class=\"v-m-und__item v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-faq\">Preguntas Frecuentes</a>
                    </li>
                    <li class=\"v-m-und__item v-sld__s\">
                      <a class=\"v-m-und__link\" href=\"/papel-contacto\">Contactar</a>
                    </li>
                  </ul>
                </div>
            </nav>
          </div>
        </header>

        <img class=\"v-ps__img\" src=\"assets/img/img1.jpg\" alt=\"Suscriptores Edición Impresa\">
        <p class=\"v-p v-p--t1 v-p--t4\">
          DIARIO HOY te acompaña al comienzo del día y comparte contigo el ritual de
          informarse con calma. Para nosotros, que sostengas este papel en tus manos es el
          mejor impulso para seguir contando historias que importan. Gracias por formar
          parte de nuestra comunidad y por confiar en el periodismo que se hace con mimo y
          honestidad.
        </p>
        <p class=\"v-p v-p--t1\">
          Si tienes cualquier duda o simplemente quieres darnos una idea para mejorar, llámanos a nuestro
          <strong>Teléfono de Atención al Suscriptor: 924214302</strong>.
          Nos encanta escucharte y
          estamos aquí para solucionar cualquier problema que puedas tener con tu suscripción.
          Recuerda que, además de recibir el diario en tu casa, o recogerlo en el punto de venta
          que tu elijas, tienes acceso total a
          <a href=\"https://www.hoy.es\" title=\"Diario HOY\"><strong>hoy.es</strong></a>.
          <i>Queremos que disfrutes de todas las ventajas de ser \"de la casa\" y que sientas que este periódico
          es, hoy más que nunca,</i> tuyo.
        </p>

        <div class=\"voc-landing\" role=\"main\">
          <div class=\"voc-hero\">
            <div class=\"voc-hero-title\">TODO VENTAJAS</div>
            <div class=\"voc-hero-text\">
              Como suscriptor del Diario HOY no sólo recibirás el periódico en tu domicilio a primera hora sin gastos de envío,
              sino que podrás gozar de otras grandes ventajas:
            </div>
          </div>

          <div class=\"voc-benefits\" role=\"list\">
            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">🕖</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">COMODIDAD</div>
                <div class=\"voc-benefit-text\">
                  Entrega a primera hora de la mañana en tu domicilio<sup>*</sup>, en tu oficina o en tu kiosco, sin gastos de envíos.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">📅</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">FLEXIBILIDAD</div>
                <div class=\"voc-benefit-text\">
                  Recepción de lunes a viernes en tu empresa y fines de semana en tu domicilio. Posibilidad de cambio temporal,
                  envío a otra dirección.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">€</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">FACILIDAD DE PAGO</div>
                <div class=\"voc-benefit-text\">
                  Mensual, trimestral, semestral o anual, con posibilidad de cancelación cuando tu quieras.
                </div>
              </div>
            </div>

            <div class=\"voc-benefit-item\" role=\"listitem\">
              <div class=\"voc-benefit-icon\">🏢</div>
              <div class=\"voc-benefit-content\">
                <div class=\"voc-benefit-title\">DESGRAVACIÓN FISCAL</div>
                <div class=\"voc-benefit-text\">
                  Beneficios especiales para empresas y autónomos.
                </div>
              </div>
            </div>
          </div>

          <div class=\"voc-info\">
            <sup>*</sup>Consultar zonas de reparto y horarios de entrega.
          </div>

          <div class=\"voc-contact\" role=\"contentinfo\">
            <div>
              <div class=\"voc-contact-title\">Servicio de atención al suscriptor</div>
            </div>
            <div class=\"voc-contact-item\">
              Badajoz: <strong>924 214 302</strong>
            </div>
            <div class=\"voc-contact-item\">
              Cáceres: <strong>927 301 550</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    /* tu JS */
  </script>
  <!-- endblock content -->
{% endblock %}
", "landings/papel_home.twig", "C:\\Proyectos\\github\\Belta\\app\\views\\landings\\papel_home.twig");
    }
}
