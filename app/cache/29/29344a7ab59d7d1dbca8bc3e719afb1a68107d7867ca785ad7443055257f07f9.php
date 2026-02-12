<?php

/* remote_layout.twig */
class __TwigTemplate_4eab3e9724e7135ddf191b499f9a99420ea6601ecf27455f688a02ed7a304c40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'microdata' => array($this, 'block_microdata'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'tracking' => array($this, 'block_tracking'),
            'advertising' => array($this, 'block_advertising'),
            'bodyAttr' => array($this, 'block_bodyAttr'),
            'noscripttracking' => array($this, 'block_noscripttracking'),
            'megabanner' => array($this, 'block_megabanner'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'preFooter' => array($this, 'block_preFooter'),
            'jsFooter' => array($this, 'block_jsFooter'),
            'trackingFooter' => array($this, 'block_trackingFooter'),
            'configDidomi' => array($this, 'block_configDidomi'),
            'rtimBlock' => array($this, 'block_rtimBlock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
<meta charset=\"utf-8\">
<meta name=\"lang\" content=\"es\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>";
        // line 7
        $this->displayBlock('metas', $context, $blocks);
        // line 11
        echo "<link rel=\"preconnect\" href=\"https://static.vocstatic.com\" />
<link rel=\"dns-prefetch\" href=\"https://static.vocstatic.com\" />  
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gss.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gtm.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gtr.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/ibmr.woff2\" as=\"font\" type=\"font/woff2\" crossorigin><link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/voonto2/latest/voonto.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/tag-manager/latest/vtm.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/vam/7.15.0/vam.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/loader.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/ev-em.min.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/rtim.js\" />";
        // line 22
        $this->displayBlock('microdata', $context, $blocks);
        // line 26
        echo "<!-- block externalCss -->
<!-- endblock externalCss -->
<!-- block css -->
<link rel=\"stylesheet\" href=\"//s1.ppllstatics.com/starfish/1.6.11/starfish.css\">
<link rel=\"stylesheet\" href=\"//s1.ppllstatics.com/starfish/1.6.11/starfish-detail.css\" data-voc-no-evolok-ads >
<!-- endblock css -->";
        // line 31
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "  
  



<script>function returnWebBrowserSafariOrFirefox() {
const userAgent = navigator.userAgent.toLowerCase();
return userAgent.includes(\"firefox\") || (userAgent.includes(\"safari\") && !userAgent.includes(\"chrome\"))
}
window.vocento = {
site: {
evolokMigrated: true,
env: 'pro',
group: 'ppll',
subdomain: 'www',
tlddomain: 'hoy.es',
media: 'hoy',
name: 'Hoy',
parent: '',
editions: {
hasEditions: false,
editions: [],
main: '',
current: '',
queryString: ''
},
gisEnabled : false,
gscEnabled : false,
swgEnabled : false,
vipDistrictEnabled : true,
},
config: {
vocuser: {
url: {
voccoreServiceUrl: '//voccore.hoy.es/',
prospectServiceUrl: '//newsletters.vocento.com/'
},
comments: {
premiumComments: true,
options: {categoryID: 'hoy'},
commentoVersion: '3.20.0',
commentoEnabled: 'true',
commentoPath: '//static.vocstatic.com/comments/4.3.0'
},
urls: {
catalog: 'https://catalogo-newsletters.vocento.com/',
voccore: 'https://voccore.',
commento: 'https://comments.vocento.com/',
voccoreDomain: \"https://voccore.hoy.es/\",
prospect: \"https://newsletters.vocento.com/\",
prospectDomain: \"//newsletters.hoy.es/\"
},
freezone: {
subscriptionUrl: 'https://areapersonal.hoy.es/suscripcion/',
newsletterUrl: 'https://areapersonal.hoy.es/servicios/newsletters.html'
}
},
multimedia: {
videoplayer: {
serviceUrl: \"//api-video-player.vocento.com\"
}
},
vtm: {
legacyTracker: false,
trackerUrl: '//metrics.hoy.es',
evdabEnabled: false,
utiq : {
enabled: returnWebBrowserSafariOrFirefox(),
}
},
relatedContent: {
recommendationId: '',
trackId: ''
},
lottery: {
serviceUrl: 'https://api-lottery.vocento.com'
},
widgets: {
serviceUrl: \"https://vocx.evolok.net/acd/api/3.0\"
,enableFrontalAuth: true,
jbEnabledGroups:[],
newRelicEnabled: true,
newRelicFull: true,
maxAuthResponseTime: 800
},
frontalLibraries: {
starredServiceUrl: 'https://areapersonal.hoy.es/servicios/api/v1/articulo',
apiUserPath: '',
apiAppUserPath: '',
newsId: '',
},
alerts: { pushServiceUrl: '//push.hoy.es/list_notificaciones.php', appKey: '107686777456cb4642379ec0.83790134', workerPath:'/comun/pushservice/ws/worker.min.js', editions: {} },
paywall: {
enabled: true,
options: {\"site\":\"hoy\",\"makeCall\":true,\"applyRestrictions\":true,\"isTrialActive\":false,\"maxConcurrentSessions\":\"2|4\",\"urlIosApp\":\"https://apps.apple.com/us/app/hoy-on/id323862816\",\"urlAndroidApp\":\"https://play.google.com/store/apps/details?id=com.vocento.hoy\",\"urlMoreInfo\":\"https://areapersonal.hoy.es/suscripcion/pack-on-tarifa-ampliada-hoy-78873.html\",\"urlFreeTest\":\"https://areapersonal.hoy.es/suscripcion/pack-on-hoy-59456/prueba.html\",\"urlSubscribe\":\"https://areapersonal.hoy.es/suscripcion\",\"urlNewsletter\":\"https://areapersonal.hoy.es/servicios/newsletters.html\",\"urlExtendedRate\":\"https://areapersonal.hoy.es/suscripcion/tarifa-ampliada.html\",\"labelButtonFreeTest\":\"\\u00a1 Lo quiero!\",\"labelButtonSubscribe\":\"\\u00a1 Lo quiero!\",\"v2\":true,\"mixedPaywall\":true}
},
}
};</script>
      
            <script type=\"text/javascript\">
  window.vocento.config.vam = {
    frontalVersion: \"ppll2022\",
        pageType: \"portada\",
            media: {\"lastUpdate\":\"12-02-2026 13:40:15\",\"lastUser\":\"cron\",\"dispositivos\":[\"desktop\"],\"enableTpag\":false,\"excepciones\":{\"\\/extremadura\\/celebra-aniversario-mejor-20230305232216-ntvo.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\",\"robapaginas\",\"megabanner\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[],\"robapaginas\":[],\"megabanner\":[]}},\"\\/extremadura\\/joan-roca-tono-perez-valores-alta-cocina-20230308222930-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/arquitectos-moneo-tunon-repasan-obras-iconicas-merida-20230324235118-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0},\"\\/extremadura\\/seis-estrellas-michelin-anos-hoy-20230308230520-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/joan-roca-tono-perez-celebran-anos-hoy-20230308223833-ga.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/periodismo-compromiso-20230102072511-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/opinion\\/periodismo-compromiso-20230331121940-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}}},\"headerBidding\":{\"alias\":[[\"richaudience\",\"exte\"]],\"timeout\":800,\"failsafeTimeout\":3000,\"prebidTimeout\":1200,\"offsetHbPixel\":100,\"offsetHbPercentage\":5,\"newRelic\":{\"enable\":false,\"devices\":[\"mobile\"],\"typePositions\":[\"pri\"]},\"disableBidders\":[],\"prebidConfig\":{\"userSync\":{\"filterSettings\":{\"all\":{\"bidders\":[\"appnexus\",\"rubicon\",\"criteo\",\"ix\",\"smartadserver\",\"pubmatic\",\"richaudience\",\"optidigital\",\"ttd\"],\"filter\":\"include\"}},\"syncsPerBidder\":1,\"syncDelay\":6000},\"debug\":false,\"priceGranularity\":\"dense\",\"consentManagement\":{\"timeout\":8000,\"cmpApi\":\"iab\",\"allowAuctionWithoutConsent\":true}},\"positionsPageType\":{\"desktop\":{\"noticia\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_dos\",\"megabanner_local\"],\"portada\":[\"megabanner\",\"megabanner_local\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_tres\",\"megabanner_tres_local\",\"megabanner_cuatro\",\"megabanner_cuatro_local\",\"megabanner_dos\",\"megabanner_cinco_local\",\"megabanner_dos_local\",\"megabanner_cinco\",\"robapaginas_tres\",\"robapaginas_cuatro\",\"robapaginas_cinco\",\"robapaginas_tres_local\",\"robapaginas_cuatro_local\",\"robapaginas_cinco_local\",\"robapaginas_seis_local\",\"robapaginas_siete_local\",\"robapaginas_ocho_local\",\"robapaginas_diez_local\",\"robapaginas_seis\",\"robapaginas_siete\",\"robapaginas_ocho\",\"robapaginas_nueve\",\"robapaginas_diez\"],\"galeria\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_dos\",\"robapaginas_tres\"]}},\"adUnits_desktop\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,251],[980,90],[980,250],[970,250],[970,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":[\"RSr02kE8hz\",\"0zVpHDhwUe\"],\"supplyType\":\"site\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"110047\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cj5KHEGHog\"],\"supplyType\":\"site\"}},{\"bidder\":\"optidigital\",\"params\":{\"publisherId\":\"p299\",\"placementId\":\"vocento.hoy_megabanner\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002288\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180732\",\"size\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109423\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"kYmE4FyUZP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_dos\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002290\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180737\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"g2JLCInHdx\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109426\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cj5KHEGHog\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002296\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180739\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"HlU7Ns2eRY\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109018\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002298\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180742\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"bXpmieEtDq\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109019\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"optidigital\",\"params\":{\"publisherId\":\"p299\",\"placementId\":\"vocento.hoy_robapaginas_dos\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_dos\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002304\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180749\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"ndpvc32E4A\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109427\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_dos_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002312\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180750\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0vfgo70vV3\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109422\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"1A2eZ3r3lh\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002310\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180751\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1aYJtoxW4Q\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109455\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"P09jAQghzr\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_tres_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002314\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180761\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0cmzWLRJSC\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109461\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"8JxluKO98O\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cuatro_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002316\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180746\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"Eh43YWYLiN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109431\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"SDnuBopZHH\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_tres\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002308\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180760\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0AvztrReve\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109430\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"v6zz8ytEoO\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_tres\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180740\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"a1WeQgJMIs\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109488\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cuatro\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180736\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"a1WeQgJMIs\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cinco-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109468\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"PhDemF1jrE\",\"supplyType\":\"site\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"j7dVu1keRq\"],\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180733\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cinco\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109460\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"kYmE4FyUZP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_dos_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180738\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"lyPSyJzrML\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_tres_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109467\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"oY2NoFkDrE\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_tres_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180741\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1pSdNnzEVE\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cuatro_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109475\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"mpVcpeNh4F\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cuatro_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180735\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"090i2XDMMo\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cinco_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109466\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"PcYQ5B4G9m\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cinco_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180734\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"onXur19VCG\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109436\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e3HzEcFYBl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cuatro\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180745\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0y5h1zSQhM\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cinco-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109441\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"wB21ArcVcP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cinco\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180743\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"vjU5Q2xHzZ\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_seis-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109458\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"5ABeNuNZEm\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_seis\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180756\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1P2Iz819Ug\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_siete-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109463\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1ul4vObNUg\",\"supplyType\":\"site\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"AW4SY5T57v\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_siete\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180758\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_ocho-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109485\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"7JaYcdUKv2\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_ocho\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180754\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"aSL49jqWfA\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_nueve-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109490\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"Urim4QVcia\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_nueve\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180752\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"EDcZFBxnhO\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_diez-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109489\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"iVSpLzWRya\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_diez\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180747\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"yYNMgCik4H\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cinco_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109470\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"nGAgawZqIT\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cinco_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180744\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1Dp3ow3sih\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_seis_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109471\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"TFi6L4WOIZ\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_seis_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180757\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"mR82q4uel6\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_siete_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109480\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"y3J8wSUPvk\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_siete_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180759\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0e1QW9ARgV\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_ocho_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109485\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"fnLxKcRRsV\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_ocho_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180755\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0b7WyMy2AT\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_nueve_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109493\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"k4xFexHNY4\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_nueve_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180753\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"2gZSvynYvN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_diez_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109493\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cdWOtPC0H1\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_diez_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180748\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"2gZSvynYvN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"skyscraper_der-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[120,600],[120,800]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109428\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_skyscrapper_der\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002318\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180762\",\"size\":[[120,600],[120,800]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0cjUyHfuSQ\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"skyscraper_izq-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[120,600],[120,800]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109429\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_skyscrapper_izq\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002320\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180763\",\"size\":[[120,600],[120,800]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"G0BH1US4W5\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}],\"biddersConfig\":{\"appnexus\":{\"percent\":0},\"smartadserver\":{\"percent\":0},\"rubicon\":{\"percent\":0},\"criteo\":{\"percent\":0},\"pubmatic\":{\"percent\":0},\"ix\":{\"percent\":0},\"ttd\":{\"percent\":0},\"optidigital\":{\"percent\":0},\"richaudience\":{\"percent\":0}},\"overwriteBidderSetting\":[{\"adUnitPath_desktop\":\"\\/4900\\/vocento.xlsemanal\\/\",\"adUnitPath_mobile\":\"\\/4900\\/webm.XLSEMANAL\\/\",\"adUnits_desktop\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,251],[980,90],[980,250],[970,250],[970,90]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_megabanner\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"110047\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495940\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"wD8Sy68YO2\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181513\",\"size\":[[970,250],[970,90],[980,250],[980,90]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109018\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495944\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0570ZFN5y5\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181516\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495946\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181516\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495948\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181518\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495948\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181519\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_megabanner_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109423\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495942\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"I5AWj2EogS\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181520\",\"size\":[[970,250],[970,90],[980,250],[980,90],[728,90]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}],\"adUnits_mobile\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[320,50],[320,100]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_megabanner\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507610\",\"pageId\":\"1583909\",\"formatId\":\"110047\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495928\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"wD8Sy68YO2\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181521\",\"size\":[[320,50],[320,100]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[320,50],[320,100]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_megabanner_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109423\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495930\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":[\"I5AWj2EogS\",\"le4cBaNozA\"],\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181522\",\"size\":[[320,50],[320,100]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109018\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495932\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0570ZFN5y5\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181523\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495934\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181524\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495934\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181526\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495936\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181525\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}]}],\"hbAmazon\":{\"pubId\":\"3470\",\"adServer\":\"googletag\",\"hb_timeout\":1200,\"timeoutJS\":1400,\"slots_desktop\":[{\"slotID\":\"megabanner-id\",\"slotName\":\"vocento.hoy-megabanner\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_dos-id\",\"slotName\":\"vocento.hoy-megabanner_dos\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_local-id\",\"slotName\":\"vocento.hoy-megabanner_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"robapaginas-id\",\"slotName\":\"vocento.hoy-robapaginas\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos-id\",\"slotName\":\"vocento.hoy-robapaginas_dos\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos_local-id\",\"slotName\":\"vocento.hoy-robapaginas_dos_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_local-id\",\"slotName\":\"vocento.hoy-robapaginas_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres_local-id\",\"slotName\":\"vocento.hoy-robapaginas_tres_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro_local-id\",\"slotName\":\"vocento.hoy-robapaginas_cuatro_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres-id\",\"slotName\":\"vocento.hoy-robapaginas_tres\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"megabanner_tres-id\",\"slotName\":\"vocento.hoy-megabanner_tres\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cuatro-id\",\"slotName\":\"vocento.hoy-megabanner_cuatro\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cinco-id\",\"slotName\":\"vocento.hoy-megabanner_cinco\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_dos_local-id\",\"slotName\":\"vocento.hoy-megabanner_dos_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_tres_local-id\",\"slotName\":\"vocento.hoy-megabanner_tres_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cuatro_local-id\",\"slotName\":\"vocento.hoy-megabanner_cuatro_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cinco_local-id\",\"slotName\":\"vocento.hoy-megabanner_cinco_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"robapaginas_cuatro-id\",\"slotName\":\"vocento.hoy-robapaginas_cuatro\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco-id\",\"slotName\":\"vocento.hoy-robapaginas_cinco\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis-id\",\"slotName\":\"vocento.hoy-robapaginas_seis\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete-id\",\"slotName\":\"vocento.hoy-robapaginas_siete\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho-id\",\"slotName\":\"vocento.hoy-robapaginas_ocho\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve-id\",\"slotName\":\"vocento.hoy-robapaginas_nueve\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez-id\",\"slotName\":\"vocento.hoy-robapaginas_diez\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco_local-id\",\"slotName\":\"vocento.hoy-robapaginas_cinco_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis_local-id\",\"slotName\":\"vocento.hoy-robapaginas_seis_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete_local-id\",\"slotName\":\"vocento.hoy-robapaginas_siete_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho_local-id\",\"slotName\":\"vocento.hoy-robapaginas_ocho_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez_local-id\",\"slotName\":\"vocento.hoy-robapaginas_diez_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"skyscraper_der-id\",\"slotName\":\"vocento.hoy-skyscraper_der\",\"sizes\":[[120,600],[120,800]]},{\"slotID\":\"skyscraper_izq-id\",\"slotName\":\"vocento.hoy-skyscraper_izq\",\"sizes\":[[120,600],[120,800]]}],\"slots_mobile\":[{\"slotID\":\"megabanner-id\",\"slotName\":\"webm.HOY-megabanner\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_dos-id\",\"slotName\":\"webm.HOY-megabanner_dos\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"robapaginas-id\",\"slotName\":\"webm.HOY-robapaginas\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos-id\",\"slotName\":\"webm.HOY-robapaginas_dos\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_local-id\",\"slotName\":\"webm.HOY-robapaginas_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos_local-id\",\"slotName\":\"webm.HOY-robapaginas_dos_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres_local-id\",\"slotName\":\"webm.HOY-robapaginas_tres_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro_local-id\",\"slotName\":\"webm.HOY-robapaginas_cuatro_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"megabanner_tres-id\",\"slotName\":\"webm.HOY-megabanner_tres\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cuatro-id\",\"slotName\":\"webm.HOY-megabanner_cuatro\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cinco-id\",\"slotName\":\"webm.HOY-megabanner_cinco\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_local-id\",\"slotName\":\"webm.HOY-megabanner_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_dos_local-id\",\"slotName\":\"webm.HOY-megabanner_dos_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_tres_local-id\",\"slotName\":\"webm.HOY-megabanner_tres_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cuatro_local-id\",\"slotName\":\"webm.HOY-megabanner_cuatro_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cinco_local-id\",\"slotName\":\"webm.HOY-megabanner_cinco_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"robapaginas_tres-id\",\"slotName\":\"webm.HOY-robapaginas_tres\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro-id\",\"slotName\":\"webm.HOY-robapaginas_cuatro\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco-id\",\"slotName\":\"webm.HOY-robapaginas_cinco\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis-id\",\"slotName\":\"webm.HOY-robapaginas_seis\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete-id\",\"slotName\":\"webm.HOY-robapaginas_siete\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho-id\",\"slotName\":\"webm.HOY-robapaginas_ocho\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve-id\",\"slotName\":\"webm.HOY-robapaginas_nueve\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez-id\",\"slotName\":\"webm.HOY-robapaginas_diez\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco_local-id\",\"slotName\":\"webm.HOY-robapaginas_cinco_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis_local-id\",\"slotName\":\"webm.HOY-robapaginas_seis_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete_local-id\",\"slotName\":\"webm.HOY-robapaginas_siete_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho_local-id\",\"slotName\":\"webm.HOY-robapaginas_ocho_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve_local-id\",\"slotName\":\"webm.HOY-robapaginas_nueve_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez_local-id\",\"slotName\":\"webm.HOY-robapaginas_diez_local\",\"sizes\":[[300,250],[300,600]]}],\"initTimeout\":1000}},\"medio\":\"hoy\",\"responsive\":{\"resoluciondesktop\":{\"resolucionMinima\":720,\"resolucionMaxima\":0},\"esResponsive\":true},\"vamConfig\":{\"featureFlag\":{\"enableGlobalPayWallPositions\":[{\"active\":false}],\"permutive\":[\"all\"],\"session\":[\"all\"],\"skins\":{\"Wemass\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"relevo\",\"recetasderechupete\",\"lagacetadesalamanca\"],\"RichAudience\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"relevo\",\"recetasderechupete\",\"lagacetadesalamanca\"]},\"interstitialAd\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"recetasderechupete\",\"relevo\",\"lagacetadesalamanca\"],\"logs\":{\"jsonSmart\":[\"all\"]},\"additionalKws\":[{\"name\":\"hoy\",\"kw\":{\"general\":{\"options\":{\"deviceType\":[\"all\"],\"pageType\":[\"noticia\"]},\"kws\":{\"noticia\":\"news2022\"}},\"positions\":{\"megabanner_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}},\"megacintillo_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"megacintillo1200\":1}},\"cintillo_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"cintillo1200\":1}},\"megabanner\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}},\"megabanner_dos\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}}}}}],\"refresh\":[{\"name\":\"hoy\",\"config\":{\"general\":{\"options\":{\"deviceType\":[\"all\"],\"pageType\":[\"all\"]},\"time\":20},\"positions\":{\"megabanner_dos\":{\"time\":15,\"options\":{\"pageType\":[\"all\"],\"deviceType\":[\"mobile\"]}},\"robapaginas_dos\":[],\"robapaginas_tres\":[],\"robapaginas_cuatro\":[],\"robapaginas_cinco\":[],\"robapaginas_seis\":[],\"robapaginas_siete\":[],\"robapaginas_ocho\":[],\"robapaginas_nueve\":[],\"robapaginas_diez\":[],\"robapaginas_once\":[],\"robapaginas_doce\":[],\"megabanner_tres\":[],\"megabanner_cuatro\":[],\"megabanner_cinco\":[],\"megabanner_local\":[],\"megabanner_dos_local\":[],\"megabanner_tres_local\":[],\"megabanner_cuatro_local\":[],\"robapaginas_local\":[],\"robapaginas_dos_local\":[],\"robapaginas_tres_local\":[],\"robapaginas_cuatro_local\":[],\"robapaginas_cinco_local\":[],\"robapaginas_seis_local\":[],\"robapaginas_siete_local\":[],\"robapaginas_ocho_local\":[],\"robapaginas_nueve_local\":[],\"robapaginas_diez_local\":[],\"robapaginas_once_local\":[],\"robapaginas_doce_local\":[]}}}],\"sponsorshipOrders\":[{\"adUnitNameList\":[\"\\/4900\\/vocento.larioja\\/\",\"\\/4900\\/webm.LARIOJA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337745587,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/\",\"\\/4900\\/webm.ABC\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.abc\\/player_video\\/\",\"\\/4900\\/webm.ABC\\/player_video\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337752073,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.xlsemanal\\/\",\"\\/4900\\/webm.XLSEMANAL\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337799158,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.burgosconecta\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338279116,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lasprovincias\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338542925,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariovasco\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338544866,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.canarias7\\/\",\"\\/4900\\/webm.CANARIAS7\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338545346,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.nortecastilla\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.nortecastilla\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada_resto\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338590949,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/\",\"\\/4900\\/webm.LAVERDAD\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338591327,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.elcorreodigital\\/\",\"\\/4900\\/webm.ELCORREO\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/webm.ELCORREO\\/deportes\\/aupaathletic\\/\",\"\\/4900\\/vocento.elcorreodigital\\/deportes\\/aupaathletic\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338591567,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.ideal\\/\",\"\\/4900\\/webm.IDEAL\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338593115,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariosur\\/\",\"\\/4900\\/webm.DIARIOSUR\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338593505,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.hoy\\/\",\"\\/4900\\/webm.HOY\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338895219,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.eldiariomontanes\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338896620,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/Vocento.Leonoticias\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338899797,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.elcomerciodigital\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338906226,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lavozdigital\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338913177,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.huelva24\\/\",\"\\/4900\\/webm.HUELVA24\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6329317101,\"startTimestamp\":1687168200000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.salamancahoy\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6331508158,\"startTimestamp\":1687168620000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lagacetadesalamanca\\/\",\"\\/4900\\/webm.LAGACETADESALAMANCA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6331517902,\"startTimestamp\":1687212000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.todoalicante\\/\",\"\\/4900\\/webm.TODOALICANTE\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6332114315,\"startTimestamp\":1687166460000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.canarias7\\/canarias\\/gran-canaria\\/las-palmas-de-gran-canaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/canarias\\/gran-canaria\\/las-palmas-de-gran-canaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":6337635073,\"startTimestamp\":1688421600000,\"endTimestamp\":1798761540000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/sociedad\\/salud\\/\",\"\\/4900\\/vocento.canarias7\\/sociedad\\/c7saludable\\/\",\"\\/4900\\/vocento.canarias7\\/sociedad\\/salud\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/c7-saludable\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/c7saludable\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/salud\\/\",\"\\/4900\\/app.CANARIAS7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/app.CANARIAS7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/cbgrancanaria\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/udlaspalmas\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/cbgrancanaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/udlaspalmas\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":6464919344,\"startTimestamp\":1704451800000,\"endTimestamp\":1801439940000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/economia\\/\",\"\\/4900\\/vocento.canarias7\\/economia\\/\",\"\\/4900\\/vocento.canarias7\\/economia\\/autonomos\\/\",\"\\/4900\\/webm.CANARIAS7\\/economia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":7018385442,\"startTimestamp\":1750327200000,\"endTimestamp\":1798720395000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\"],\"lineItemId\":7084853022,\"startTimestamp\":1774998000000,\"endTimestamp\":1777586340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/ciencia\\/portada_b\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\"],\"lineItemId\":7096473767,\"startTimestamp\":1769900400000,\"endTimestamp\":1772319540000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_dos_local\",\"robapaginas_dos_local_mobile\"],\"lineItemId\":7096677591,\"startTimestamp\":1759269600000,\"endTimestamp\":1790805540000},{\"adUnitNameList\":[\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\"],\"lineItemId\":7100067725,\"startTimestamp\":1759269600000,\"endTimestamp\":1790805540000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/agricultura\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/agricultura\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200126687,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/banca\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/banca\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200127371,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/formacion\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/formacion\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200128529,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/energia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200129813,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/tecnologia\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/tecnologia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202085514,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/asesorias\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/asesorias\\/\",\"\\/4900\\/webm.LAVERDAD\\/AMP\\/quienesquien\\/asesorias\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202085562,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/inmobiliaria\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/inmobiliaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202100436,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/sector\\/industria-agroalimentaria\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/sector\\/industria-agroalimentaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202102395,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/turismo\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/turismo\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202896926,\"startTimestamp\":1769416320000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/suministro\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/suministro\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203614819,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/comercio\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/comercio\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203618458,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/fabricacion\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/fabricacion\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203619142,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/AMP\\/carnaval\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada_b\\/\",\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/portada\\/\"],\"customCriteriaList\":[\"robapaginas\"],\"lineItemId\":7203648212,\"startTimestamp\":1769900400000,\"endTimestamp\":1771801140000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/cultura\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/cultura\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7206327743,\"startTimestamp\":1769416140000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariosur\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/motor\\/\",\"\\/4900\\/vocento.diariovasco\\/motor\\/\",\"\\/4900\\/vocento.eldiariomontanes\\/motor\\/\",\"\\/4900\\/vocento.hoy\\/motor\\/\",\"\\/4900\\/vocento.ideal\\/motor\\/\",\"\\/4900\\/vocento.elcomerciodigital\\/economia\\/motor\\/\",\"\\/4900\\/webm.DIARIOSUR\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/economia\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/motor\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/motor\\/\",\"\\/4900\\/webm.HOY\\/motor\\/\",\"\\/4900\\/webm.IDEAL\\/motor\\/\",\"\\/4900\\/vocento.larioja\\/motor\\/\",\"\\/4900\\/webm.LARIOJA\\/motor\\/\",\"\\/4900\\/vocento.lasprovincias\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/motor\\/\",\"\\/4900\\/Vocento.Leonoticias\\/motor\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/motor\\/\",\"\\/4900\\/vocento.nortecastilla\\/motor\\/\",\"\\/4900\\/vocento.burgosconecta\\/motor\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/motor\\/\",\"\\/4900\\/vocento.laverdad\\/motor\\/\",\"\\/4900\\/vocento.lasprovincias\\/valencia\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/valencia\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.LARIOJA\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOSUR\\/AMP\\/motor\\/\",\"\\/4900\\/webm.HOY\\/AMP\\/motor\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/motor\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/AMP\\/motor\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.IDEAL\\/AMP\\/motor\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/amp\\/motor\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/motor\\/\",\"\\/4900\\/webm.LAVERDAD\\/motor\\/\",\"\\/4900\\/webm.LAVERDAD\\/AMP\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/AMP\\/economia\\/motor\\/\",\"\\/4900\\/app.DIARIOMONTANES\\/motor\\/\",\"\\/4900\\/app.LARIOJA\\/motor\\/\",\"\\/4900\\/app.DIARIOSUR\\/motor\\/\",\"\\/4900\\/app.DIARIOVASCO\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/motor\\/\",\"\\/4900\\/app.IDEAL\\/motor\\/\",\"\\/4900\\/vocento.elcomerciodigital\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/bizkaia\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/bizkaia\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/bizkaia\\/motor\\/\",\"\\/4900\\/app.NORTEDECASTILLA\\/motor\\/\",\"\\/4900\\/app.LAVERDAD\\/motor\\/\",\"\\/4900\\/app.LASPROVINCIAS\\/motor\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/alava\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/alava\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/alava\\/motor\\/\",\"\\/4900\\/app.HOY\\/motor\\/\",\"\\/4900\\/app.LEONOTICIAS\\/motor\\/\",\"\\/4900\\/app.BURGOSCONECTA\\/motor\\/\",\"\\/4900\\/app.ELCOMERCIO\\/motor\\/\",\"\\/4900\\/vocento.salamancahoy\\/motor\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/motor\\/\",\"\\/4900\\/app.TODOALICANTE\\/motor\\/\",\"\\/4900\\/app.SALAMANCAHOY\\/motor\\/\",\"\\/4900\\/app.ELCOMERCIO\\/economia\\/motor\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/amp\\/motor\\/\",\"\\/4900\\/webm.TODOALICANTE\\/motor\\/\",\"\\/4900\\/vocento.todoalicante\\/motor\\/\",\"\\/4900\\/webm.TODOALICANTE\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/bizkaia\\/motor\\/\",\"\\/4900\\/webm.LAGACETADESALAMANCA\\/especiales\\/motor\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_der\",\"robapaginas\",\"skyscraper_izq\"],\"lineItemId\":7207052338,\"startTimestamp\":1771196400000,\"endTimestamp\":1771801140000},{\"adUnitNameList\":[\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/portada\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"cintillo\"],\"lineItemId\":7213274576,\"startTimestamp\":1770332400000,\"endTimestamp\":1771009200000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/espana\\/castilla-leon\\/\",\"\\/4900\\/webm.ABC\\/espana\\/castilla-leon\\/\",\"\\/4900\\/app.ABC\\/espana\\/castilla-leon\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas\"],\"lineItemId\":7217978383,\"startTimestamp\":1770678000000,\"endTimestamp\":1771109940000},{\"adUnitNameList\":[\"\\/4900\\/webm.ABC\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/portada\\/\",\"\\/4900\\/webm.ABCSEVILLA\\/portada\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/portada\\/\",\"\\/4900\\/webm.DIARIOSUR\\/portada\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/portada\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/portada\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/portada\\/\",\"\\/4900\\/webm.HOY\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.LAVERDAD\\/portada\\/\",\"\\/4900\\/webm.LARIOJA\\/portada\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/portada\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.XLSEMANAL\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/alava\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/almeria\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/jaen\\/portada\\/\",\"\\/4900\\/webm.MUJERHOY\\/portada\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/portada\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/portada\\/\",\"\\/4900\\/webm.HUELVA24\\/portada\\/\",\"\\/4900\\/webm.LAVOZDEAVILES\\/portada\\/\",\"\\/4900\\/webm.surinenglish\\/portada\\/\",\"\\/4900\\/webm.TODOALICANTE\\/portada\\/\",\"\\/4900\\/webm.WELIFE\\/portada\\/\",\"\\/4900\\/webm.SURDEUTSCH\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"patrocinio1\"],\"lineItemId\":7218256494,\"startTimestamp\":1771138800000,\"endTimestamp\":1771228800000},{\"adUnitNameList\":[\"\\/4900\\/vocento.xlsemanal\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[],\"lineItemId\":7220127097,\"startTimestamp\":1770822300000,\"endTimestamp\":1771228800000},{\"adUnitNameList\":[\"\\/4900\\/webm.ABC\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/portada\\/\",\"\\/4900\\/webm.ABCSEVILLA\\/portada\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/portada\\/\",\"\\/4900\\/webm.DIARIOSUR\\/portada\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/portada\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/portada\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/portada\\/\",\"\\/4900\\/webm.HOY\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.LAVERDAD\\/portada\\/\",\"\\/4900\\/webm.LARIOJA\\/portada\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/portada\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.XLSEMANAL\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/alava\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/almeria\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/jaen\\/portada\\/\",\"\\/4900\\/webm.MUJERHOY\\/portada\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/portada\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/portada\\/\",\"\\/4900\\/webm.HUELVA24\\/portada\\/\",\"\\/4900\\/webm.LAVOZDEAVILES\\/portada\\/\",\"\\/4900\\/webm.surinenglish\\/portada\\/\",\"\\/4900\\/webm.TODOALICANTE\\/portada\\/\",\"\\/4900\\/webm.WELIFE\\/portada\\/\",\"\\/4900\\/webm.SURDEUTSCH\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"patrocinio2\"],\"lineItemId\":7221290824,\"startTimestamp\":1771228800000,\"endTimestamp\":1771315200000}]}},\"uniqueCampaigns\":{\"media\":\"hoy\",\"schedules\":[{\"lineItemId\":7049418883,\"since\":1848607200000,\"until\":1848693540000},{\"lineItemId\":7193630520,\"since\":1768950000000,\"until\":1769036399000},{\"lineItemId\":7197244700,\"since\":1768863600000,\"until\":1768949999000},{\"lineItemId\":7196484607,\"since\":1769036400000,\"until\":1769122799000},{\"lineItemId\":7194847362,\"since\":1769209200000,\"until\":1769295599000},{\"lineItemId\":7194946794,\"since\":1768777200000,\"until\":1768863599000},{\"lineItemId\":7187914798,\"since\":1768690800000,\"until\":1768777199000},{\"lineItemId\":7199658618,\"since\":1769122800000,\"until\":1769209199000},{\"lineItemId\":7200190059,\"since\":1769382000000,\"until\":1769468399000},{\"lineItemId\":7200242067,\"since\":1769468400000,\"until\":1769554799000},{\"lineItemId\":7205078098,\"since\":1770159600000,\"until\":1770245999000},{\"lineItemId\":7206576170,\"since\":1770246000000,\"until\":1770332399000},{\"lineItemId\":7207544144,\"since\":1769727600000,\"until\":1769813999000},{\"lineItemId\":7204206465,\"since\":1769641200000,\"until\":1769727599000},{\"lineItemId\":7205027640,\"since\":1770418800000,\"until\":1770505199000},{\"lineItemId\":7210414209,\"since\":1770332400000,\"until\":1770418799000},{\"lineItemId\":7213276782,\"since\":1772060400000,\"until\":1772146799000}],\"type\":\"auto\"},\"enablePayWallPositions\":false,\"posicion_desktop\":{\"boton_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_diez_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_doble_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,250],[300,90]]\"},\"boton_doble_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_ocho_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_seis_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_siete_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,250],[300,90]]\"},\"boton_doble_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doce_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_dos\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100],[300,200]]\"},\"boton_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_lomas\":{\"outofpage\":false,\"dimensiones\":\"[[300,50]]\"},\"boton_native\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_data\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[300,250]]\"},\"boton_native_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[300,250]]\"},\"boton_native_extra\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_liga\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_local\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_terraza\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_nueve_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_ocho_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_once_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_seis_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_siete_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_terraza_universal\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_trece_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_tres\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_uno\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_uno_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"cintillo_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[660,60],[980,60]]\"},\"cintillo_local\":{\"outofpage\":false,\"dimensiones\":\"[[660,60],[800,60]]\"},\"inimage\":{\"outofpage\":true},\"interstitial\":{\"outofpage\":false,\"dimensiones\":\"[]\"},\"inter_adwall\":{\"outofpage\":true},\"inter_externo\":{\"outofpage\":false,\"dimensiones\":\"[[1,1]]\"},\"layer_inpage\":{\"outofpage\":true},\"megabanner\":{\"outofpage\":false,\"dimensiones\":\"[[728,90],[980,90],[970,250],[980,250],[1200,250],[1200,90],[980,251]]\"},\"megabanner_cinco\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_dos\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[980,90]]\"},\"megabanner_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90]]\"},\"megabanner_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_seis\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_tres\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[1200,250],[1200,90],[970,250],[970,90]]\"},\"megabanner_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megacintillo_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,60],[1200,60]]\"},\"noticia_patrocinada\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"patrocinio1\":{\"outofpage\":true},\"patrocinio2\":{\"outofpage\":true},\"patrocinio3\":{\"outofpage\":true},\"promociones\":{\"outofpage\":false,\"dimensiones\":\"[[300,130]]\"},\"robapaginas\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cinco\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_combinado_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,250]]\"},\"robapaginas_combinado_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,250]]\"},\"robapaginas_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_diez\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_diez_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_doce\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_doce_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_dos\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_inread\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_nueve\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_nueve_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[320,300],[300,250]]\"},\"robapaginas_ocho\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_ocho_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_once\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_once_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_seis\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_siete\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_siete_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_tres\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"seed_tag\":{\"outofpage\":true},\"skyscraper_der\":{\"outofpage\":false,\"dimensiones\":\"[[120,801],[120,800],[120,600],[450,1001]]\"},\"skyscraper_izq\":{\"outofpage\":false,\"dimensiones\":\"[[120,802],[120,800],[120,600],[450,1000]]\"}},\"version\":\"1.4\",\"adServer\":\"gam\"},
    options: {\"lastUpdate\":\"2026-02-12 16:00:06\",\"lastUser\":\"cron\",\"multimedia\":{\"formatId\":{\"prerolls\":117644,\"postrolls\":117646},\"ads\":{\"prerolls\":1,\"postrolls\":1},\"hb\":{\"enable\":true,\"adUnits\":{\"desktop\":[{\"code\":\"preroll\",\"mediaTypes\":{\"video\":{\"context\":\"instream\",\"playerSize\":[640,480]}},\"bids\":[{\"bidder\":\"exte\",\"params\":{\"pid\":\"s4Zer3hcRn\",\"supplyType\":\"video\"}},{\"bidder\":\"appnexus\",\"params\":{\"placementId\":18208847,\"video\":{\"skippable\":true,\"playback_methods\":[\"auto_play_sound_off\"]}}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"17vHcrZfeO\",\"supplyType\":\"video\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_preroll\"}}]},{\"code\":\"postroll\",\"mediaTypes\":{\"video\":{\"context\":\"instream\",\"playerSize\":[640,480],\"mimes\":[\"video\\/mp4\"]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"placementId\":18208848,\"video\":{\"skippable\":true,\"playback_methods\":[\"auto_play_sound_off\"]}}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0uZnKuFwgY\",\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_postroll\"}}]}]}}},\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/badajoz\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/badajoz\",\"galeria\":\"\\/4900\\/vocento.hoy\\/badajoz\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/badajoz\"}},\"posicion_desktop\":{\"layer_inpage\":{\"desactivadoen\":[\"portada\",\"galeria\",\"video\"]},\"megabanner\":[],\"megabanner_dos\":[],\"megabanner_local\":[],\"megabanner_tres\":[],\"robapaginas\":[],\"robapaginas_cuatro_local\":[],\"robapaginas_dos\":[],\"robapaginas_dos_local\":[],\"robapaginas_local\":[],\"robapaginas_tres\":[],\"robapaginas_tres_local\":{\"offset\":\"200\"},\"patrocinio1\":[],\"skyscraper_der\":[],\"skyscraper_izq\":[],\"boton_native\":[],\"boton_native_dos\":[],\"boton_native_tres\":[],\"boton_native_cuatro\":[],\"patrocinio2\":[],\"boton_diez_hiperlocal\":[],\"boton_dos_local\":[],\"megacintillo_local\":[],\"promociones\":{\"desactivadoen\":[\"portada\",\"galeria\",\"video\"]},\"megabanner_dos_local\":[],\"megabanner_tres_local\":[],\"boton_native_extra\":[],\"inter_externo\":[],\"inter_adwall\":[],\"inimage\":[]},\"priorizadas\":{\"desktop\":[\"megabanner\",\"megabanner_local\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"cintillo_local\",\"layer_inpage\",\"robapaginas_cuatro_local\",\"boton_local\",\"patrocinio1\",\"boton_native\",\"boton_native_data\",\"boton_trece_hiperlocal\",\"boton_cinco_local\",\"boton_cuatro_local\",\"boton_dos_local\",\"boton_native_local\",\"boton_seis_local\",\"boton_tres_local\",\"boton_uno_local\",\"megacintillo_local\",\"robapaginas_combinado_dos_local\",\"robapaginas_combinado_local\",\"promociones\",\"boton_lomas\",\"seed_tag\"]},\"retrasadas\":{\"desktop\":[\"megabanner_dos\",\"megabanner_tres\",\"robapaginas_dos\",\"robapaginas_dos_local\",\"robapaginas_tres\",\"robapaginas_tres_local\",\"boton_native_dos\",\"boton_native_tres\",\"boton_native_cuatro\",\"boton_doble_hiperlocal\",\"boton_doble_cinco_hiperlocal\",\"boton_doble_cuatro_hiperlocal\",\"boton_doble_dos_hiperlocal\",\"boton_doble_ocho_hiperlocal\",\"boton_doble_seis_hiperlocal\",\"boton_doble_siete_hiperlocal\",\"boton_doble_tres_hiperlocal\",\"boton_hiperlocal\",\"boton_cinco_hiperlocal\",\"boton_cuatro_hiperlocal\",\"boton_diez_hiperlocal\",\"boton_doce_hiperlocal\",\"boton_dos_hiperlocal\",\"boton_nueve_hiperlocal\",\"boton_ocho_hiperlocal\",\"boton_once_hiperlocal\",\"boton_seis_hiperlocal\",\"boton_siete_hiperlocal\",\"boton_tres_hiperlocal\",\"cintillo_hiperlocal\",\"megabanner_dos_hiperlocal\",\"robapaginas_cinco_hiperlocal\",\"robapaginas_cuatro_hiperlocal\",\"robapaginas_dos_hiperlocal\",\"robapaginas_hiperlocal\",\"robapaginas_tres_hiperlocal\",\"megabanner_dos_local\",\"megabanner_tres_local\"]},\"version\":\"1.4\"},
    smart_enabled: false
  };
</script>";
        // line 143
        $this->displayBlock('js', $context, $blocks);
        // line 147
        $this->displayBlock('tracking', $context, $blocks);
        // line 155
        $this->displayBlock('advertising', $context, $blocks);
        echo "    <link rel=\"icon\" href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon.ico\"/>
    <link rel=\"shortcut icon\" href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon.ico\"
          type=\"image/x-icon\"/>
    <link rel=\"apple-touch-icon\" sizes=\"57x57\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\"
          href=\"https://s1.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/android-chrome-192x192.png\"
          sizes=\"192x192\">
    <meta name=\"msapplication-square70x70logo\"
          content=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/smalltile.png\"/>
    <meta name=\"msapplication-square150x150logo\"
          content=\"https://s1.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/mediumtile.png\"/>
    <meta name=\"msapplication-wide310x150logo\"
          content=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/widetile.png\"/>
    <meta name=\"msapplication-square310x310logo\"
          content=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/largetile.png\"/>

<script type=\"text/javascript\" src=\"//static.vocstatic.com/widgets/4.30.2/accessctrl.js\"> </script>
  
</head>
<body class=\"hoy \"   data-frontal-libraries-loader
  ";
        // line 198
        $this->displayBlock('bodyAttr', $context, $blocks);
        // line 199
        echo " data-voc-component=\"close-modal-event-window\">";
        // line 201
        $this->displayBlock('noscripttracking', $context, $blocks);
        // line 208
        $this->displayBlock('megabanner', $context, $blocks);
        echo "    <header class=\"v-h   v-h--s
\" data-voc-component=\"header\">";
        // line 211
        $this->displayBlock('header', $context, $blocks);
        // line 1481
        echo "  
    </header>
    <script type=\"vocento/script\" src=\"//static.vocstatic.com/dab/latest/strategy.js\"></script>";
        // line 1483
        $this->displayBlock('content', $context, $blocks);
        // line 1484
        $this->displayBlock('preFooter', $context, $blocks);
        // line 1498
        echo "  
\t
  \t   <footer class=\"v-f    \">
  <div class=\"v-f__c v-c\">
\t<div class=\"v-f__w v-f__w--1\">
           <a class=\"v-f__logo-link\" href=\"https://www.hoy.es\" title=\"hoy\">
              <img loading=\"lazy\" class=\"v-f__logo-img\" src=\"//s1.ppllstatics.com/starfish/1.6.11/assets/images/logos/logo-hoy.svg\" alt=\"hoy\">
          </a>
          <div class=\"v-f__copy\">
  <p class=\"v-f__copy-p\">© Corporación de Medios de Extremadura S.A.</p>
  <p class=\"v-f__copy-p\">Avenida del Diario HOY, S/N. 06008 Badajoz</p>
</div>
            <nav class=\"v-f__sm\">
          <ul class=\"v-f__sm-list\">
                        <li class=\"v-f__sm-item v-f__sm-item--1\">
              <a class=\"v-f__sm-link\" href=\"https://www.facebook.com/hoyextremadura\" title=\"Facebook\" target=\"_blank\">
                 <span class=\"v-f__sm-img\">
                   <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4111\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2653\" clip-path=\"url(#clip-path)\">
                      <path id=\"Trazado_1648\" data-name=\"Trazado 1648\" d=\"M24,12.073A12,12,0,1,0,10.125,24V15.563H7.078V12.072h3.046V9.413c0-3.026,1.791-4.7,4.533-4.7a18.352,18.352,0,0,1,2.686.236V7.922H15.83a1.739,1.739,0,0,0-1.954,1.886v2.264H17.2l-.532,3.49h-2.8V24A12.053,12.053,0,0,0,24,12.073\"></path>
                    </g>
                   </svg>
                 </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--2\">
              <a class=\"v-f__sm-link\" href=\"https://twitter.com/hoyextremadura\" title=\"X\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"19.502\" viewBox=\"0 0 24 19.502\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4108\" width=\"24\" height=\"19.502\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2650\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1641\" d=\"M11.9,8.469,19.348,0H17.584L11.119,7.353,5.955,0H0L7.808,11.119,0,20H1.764l6.827-7.765L14.045,20H20L11.9,8.469ZM9.486,11.217,8.695,10.11,2.4,1.3H5.11l5.08,7.11.791,1.107,6.6,9.242h-2.71L9.486,11.218Z\" transform=\"translate(0 0)\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--3\">
              <a class=\"v-f__sm-link\" href=\"https://www.instagram.com/hoy_extremadura/\" title=\"Instagram\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4110\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2652\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1647\" d=\"M12,0c3.259,0,3.668.014,4.948.072A8.8,8.8,0,0,1,19.86.63a5.884,5.884,0,0,1,2.125,1.384A5.884,5.884,0,0,1,23.37,4.14a8.82,8.82,0,0,1,.557,2.912C23.986,8.332,24,8.741,24,12s-.014,3.668-.072,4.948a8.82,8.82,0,0,1-.557,2.912,6.131,6.131,0,0,1-3.51,3.51,8.8,8.8,0,0,1-2.913.558C15.667,23.986,15.258,24,12,24s-3.667-.014-4.947-.072a8.808,8.808,0,0,1-2.913-.558,6.131,6.131,0,0,1-3.51-3.51,8.82,8.82,0,0,1-.557-2.912C.014,15.668,0,15.259,0,12S.014,8.332.072,7.052A8.82,8.82,0,0,1,.629,4.14,5.884,5.884,0,0,1,2.014,2.014,5.884,5.884,0,0,1,4.139.63,8.808,8.808,0,0,1,7.052.072C8.332.014,8.74,0,12,0m4.85,2.232c-1.266-.058-1.645-.07-4.85-.07s-3.583.012-4.849.07a6.659,6.659,0,0,0-2.228.413,3.714,3.714,0,0,0-1.38.9,3.717,3.717,0,0,0-.9,1.38,6.622,6.622,0,0,0-.412,2.228C2.174,8.416,2.162,8.8,2.162,12s.012,3.584.071,4.849a6.622,6.622,0,0,0,.412,2.228,3.726,3.726,0,0,0,.9,1.38,3.721,3.721,0,0,0,1.38.9,6.64,6.64,0,0,0,2.228.413c1.266.058,1.645.07,4.849.07s3.584-.012,4.85-.07a6.64,6.64,0,0,0,2.228-.413,3.969,3.969,0,0,0,2.277-2.278,6.631,6.631,0,0,0,.413-2.228c.058-1.265.07-1.645.07-4.849s-.012-3.584-.07-4.849a6.631,6.631,0,0,0-.413-2.228,3.706,3.706,0,0,0-.9-1.38,3.72,3.72,0,0,0-1.38-.9,6.659,6.659,0,0,0-2.228-.413M12,16a4,4,0,1,0-4-4,4,4,0,0,0,4,4M12,5.838A6.162,6.162,0,1,1,5.838,12,6.162,6.162,0,0,1,12,5.838m7.846-.244a1.44,1.44,0,1,1-1.44-1.44,1.44,1.44,0,0,1,1.44,1.44\" transform=\"translate(0 0)\" fill-rule=\"evenodd\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--4\">
              <a class=\"v-f__sm-link\" href=\"https://es.linkedin.com/in/diariohoy\" title=\"Linkedin\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath id=\"clip-path\">
                        <rect id=\"Rectángulo_4113\" data-name=\"Rectángulo 4113\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2657\" clip-path=\"url(#clip-path)\">
                      <path id=\"Trazado_1650\" data-name=\"Trazado 1650\" d=\"M22.262,0H1.809A1.783,1.783,0,0,0,0,1.727V22.272A1.552,1.552,0,0,0,1.523,24H21.976A1.987,1.987,0,0,0,24,22.272V1.727A1.721,1.721,0,0,0,22.262,0M9.143,9.143h3.231V10.79h.035A4.39,4.39,0,0,1,16.155,9c3.453,0,4.416,1.833,4.416,5.229v6.343H17.143V14.854c0-1.52-.607-2.854-2.026-2.854-1.723,0-2.545,1.167-2.545,3.082v5.489H9.143ZM3.429,20.571H6.857V9.143H3.429ZM7.286,5.143A2.143,2.143,0,1,1,5.143,3,2.142,2.142,0,0,1,7.286,5.143\" fill-rule=\"evenodd\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                                <li class=\"v-f__sm-item v-f__sm-item--6\">
              <a class=\"v-f__sm-link\" href=\"https://www.tiktok.com/@hoyextremadura\" title=\"Tiktok\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"21\" height=\"24\" viewBox=\"0 0 21 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4107\" width=\"21\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2649\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1640\" d=\"M17.863,4.811a5.751,5.751,0,0,1-2.525-3.764A5.727,5.727,0,0,1,15.24,0H11.1l-.007,16.536a3.478,3.478,0,1,1-3.473-3.6,3.435,3.435,0,0,1,1.027.16V8.885a7.59,7.59,0,1,0,6.593,7.52V8.02A9.869,9.869,0,0,0,21,9.866V5.74a5.738,5.738,0,0,1-3.137-.93\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                                           </ul>
        </nav>
                    <a class=\"v-f__logo-v-link\" href=\"https://www.vocento.com/\" title=\"Vocento\">
          <img loading=\"lazy\" class=\"v-f__logo-v-img\" src=\"//s1.ppllstatics.com/starfish/latest/assets/images/logos/logo-vocento.svg\" alt=\"Vocento Logo\">
        </a>
          </div>
      <div class=\"v-f__w v-f__w--2\">
                   <div class=\"v-acc\" data-voc-component=\"accordion\">
            <div class=\"v-acc__c\">
            <div class=\"v-acc__h\">
              <button class=\"v-acc__b\">
                <p class=\"v-acc__t\">
                  Webs de Vocento
                </p>
                <span class=\"v-a-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
                    <path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
                  </svg>
                </span>
              </button>
            </div>
            <div class=\"v-acc__w\">
              <nav class=\"v-f__nav\">
                <ul class=\"v-f__nav-list\">
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.abc.es/\" title=\"ABC\">
                      ABC</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://sevilla.abc.es/\" title=\"ABC Sevilla\">
                      ABC Sevilla</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.hoy.es/\" title=\"Hoy\">
                      Hoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elcorreo.com/\" title=\"El Correo\">
                      El Correo</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.larioja.com/\" title=\"La Rioja\">
                      La Rioja</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elnortedecastilla.es/\" title=\"El Norte de Castilla\">
                      El Norte de Castilla</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.diariovasco.com/\" title=\"Diario Vasco\">
                      Diario Vasco</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elcomercio.es/\" title=\"El Comercio\">
                      El Comercio</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.ideal.es/\" title=\"Ideal\">
                      Ideal</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.diariosur.es/\" title=\"Sur\">
                      Sur</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.lasprovincias.es/\" title=\"Las Provincias\">
                      Las Provincias</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.eldiariomontanes.es/\" title=\"El Diario Montañés\">
                      El Diario Montañés</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.lavozdigital.es/\" title=\"La Voz Digital\">
                      La Voz Digital</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.laverdad.es/\" title=\"La Verdad\">
                      La Verdad</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.leonoticias.com/\" title=\"Leonoticias\">
                      Leonoticias</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.burgosconecta.es/\" title=\"Burgosconecta\">
                      Burgosconecta</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.salamancahoy.es/\" title=\"Salamancahoy\">
                      Salamancahoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.todoalicante.es/\" title=\"Todoalicante\">
                      Todoalicante</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.huelva24.com/\" title=\"Huelva 24\">
                      Huelva 24</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.abc.es/xlsemanal/\" title=\"XL Semanal\">
                      XL Semanal</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.mujerhoy.com/\" title=\"Mujerhoy\">
                      Mujerhoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.revistasix.es//\" title=\"Six\">
                      Six</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.welife.es/\" title=\"Welife\">
                      Welife</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.turium.es/\" title=\"Turium\">
                      Turium</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.autocasion.com/\" title=\"Autocasión\">
                      Autocasión</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://oferplan.com/\" title=\"Oferplan\">
                      Oferplan</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.pisos.com/\" title=\"Pisos.com\">
                      Pisos.com</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.topcomparativas.com/\" title=\"TopComparativas\">
                      TopComparativas</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.womennow.es/es/\" title=\"WomenNow\">
                      WomenNow</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://rentingcoches.com/\" title=\"Renting Coches\">
                      Renting Coches</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://localdigitalkit.com/\" title=\"Local Digital Kit\">
                      Local Digital Kit</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://utamed.es/\" title=\"Utamed\">
                      Utamed</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          </div>
                        <div class=\"v-f__legal\">
                                                    <p class=\"v-f__legal-p\">En lo posible, para la resolución de litigios en línea en materia de consumo conforme Reglamento (UE) 524/2013, se buscará la posibilidad que la Comisión Europea facilita como plataforma de resolución de litigios en línea y que se encuentra disponible en el enlace <a class=\"v-f__legal-link\" href=\"https://ec.europa.eu/consumers/odr\" title=\"Legal\">
              https://ec.europa.eu/consumers/odr</a>.</p>
          </div>
            <nav class=\"v-f__menu-nav\">
            <ul class=\"v-f__menu-list\">            
                  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"https://areapersonal.hoy.es/gestion/contacto.html\" title=\"Contactar\" target=\"_self\" >
        Contactar</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/quienes-somos.html\" title=\"Quiénes somos\" target=\"_self\" >
        Quiénes somos</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/aviso-legal.html\" title=\"Aviso legal\" target=\"_self\" >
        Aviso legal</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/reglamento-emfa.html\" title=\"Reglamento UE 2024/1083\" target=\"_self\" >
        Reglamento UE 2024/1083</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/condiciones-uso.html\" title=\"Condiciones de uso\" target=\"_self\" >
        Condiciones de uso</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"https://www.vocento.com/politica-privacidad/\" title=\"Política de privacidad\" target=\"_self\" >
        Política de privacidad</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/publicidad.html\" title=\"Publicidad\" target=\"_self\" >
        Publicidad</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/mapa-web.html\" title=\"Mapa web\" target=\"_self\" >
        Mapa web</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/compromisos-periodisticos.html\" title=\"Compromisos editoriales\" target=\"_self\" >
        Compromisos editoriales</a>
    </li>

      <li data-vtm-utiq class=\"v-f__menu-item\" style=\"display:none;\">
      <a href=\"/servicio-utiq.html\" title=\"Administrar Utiq\">Administrar Utiq</a>
    </li>
  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/\" title=\"Política de cookies\" target=\"_self\"  onClick=\"Voonto.cmp.show(); event.preventDefault();\" >
        Política de cookies</a>
    </li>

  

  </ul>
          </nav>
      </div>
      <div class=\"v-f__w v-f__w--3\">        <button class=\"v-f__link-go\" data-voc-component=\"go-top\">
          Volver arriba <span class=\"v-i\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
    <path data-name=\"Unión 42\" d=\"M0,12.009.009,12,0,11.991,11.9,0,14,2.12,4.2,12,14,21.88,11.9,24Z\" transform=\"translate(24) rotate(90)\"></path>
  </svg><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
    <path data-name=\"Unión 42\" d=\"M0,12.009.009,12,0,11.991,11.9,0,14,2.12,4.2,12,14,21.88,11.9,24Z\" transform=\"translate(24) rotate(90)\"></path>
  </svg></span></button>
  \t\t</div>
    </div>
  </footer>";
        // line 1843
        $this->displayBlock('jsFooter', $context, $blocks);
        // line 1881
        $this->displayBlock('trackingFooter', $context, $blocks);
        $this->displayBlock('configDidomi', $context, $blocks);
        // line 1883
        $this->displayBlock('rtimBlock', $context, $blocks);
        // line 1894
        echo "  </body>
</html>";
    }

    // line 7
    public function block_metas($context, array $blocks = array())
    {
        // line 8
        echo "  <!-- block metas -->
  <!-- endblock metas -->
  ";
    }

    // line 22
    public function block_microdata($context, array $blocks = array())
    {
        // line 23
        echo "  <!-- block microdata -->
  <!-- endblock microdata -->
  ";
    }

    // line 31
    public function block_css($context, array $blocks = array())
    {
        // line 32
        echo "  <!-- block css -->
  <!-- endblock css -->
  ";
    }

    // line 143
    public function block_js($context, array $blocks = array())
    {
        // line 144
        echo "  <!-- block js -->
  <!-- endblock js -->
  ";
    }

    // line 147
    public function block_tracking($context, array $blocks = array())
    {
        // line 148
        echo "   
  <!-- block tracking -->
  <link rel=\"dns-prefetch\" href=\"//www.googletagmanager.com\" />
    <!-- endblock tracking -->
  
       ";
    }

    // line 155
    public function block_advertising($context, array $blocks = array())
    {
        echo "<!-- block advertising --><!-- endblock advertising -->";
    }

    // line 198
    public function block_bodyAttr($context, array $blocks = array())
    {
    }

    // line 201
    public function block_noscripttracking($context, array $blocks = array())
    {
        // line 202
        echo "  
  <!-- block noscripttracking -->
    <!-- endblock noscripttracking -->
  
       ";
    }

    // line 208
    public function block_megabanner($context, array $blocks = array())
    {
        echo "<!-- block megabanner --><!-- endblock megabanner -->";
    }

    // line 211
    public function block_header($context, array $blocks = array())
    {
        // line 212
        echo "        
            <!-- block header -->
                

<div class=\"v-h__c\">
  <div class=\"v-h__g\">
    <div class=\"v-h__w v-h__w--2\">
      <div class=\"v-h__sub-c v-c\" data-mrf-recirculation=\"Apertura\">
        



<div class=\"v-h__sub-w v-h__sub-w--2\">
    
  
  <a class=\"v-h__logo-link\" href=\"https://www.hoy.es\" title=\"HOY - Diario con noticias y última hora de Extremadura\" data-mrf-link=\"https://www.hoy.es\">
    <img class=\"v-h__logo-img\" width=\"494\" height=\"48\" src=\"https://s1.ppllstatics.com/starfish/latest/assets/images/logos/logo-hoy.svg\" alt=\"HOY - Diario con noticias y última hora de Extremadura\">
    
  </a>
  
      
  </div>
        





  

<div class=\"v-h__sub-w v-h__sub-w--3\">
    <nav class=\"v-h__n v-h__n--1\" data-voc-profile>
                  <div class=\"v-h__btn v-h__btn--1\" hidden data-voc-profile-suscriber-button >
        <div class=\"v-slc v-slc--t2 v-slc--r \" >
          
                              <a class=\"v-slc__b v-btn v-btn-g v-btn-g--t1 v-btn--m\" href=\"https://secure.hoy.es/suscripcion#vca=suscribete&amp;vso=hoy&amp;vmc=on&amp;vli=cabecera\" data-mrf-link=\"https://secure.hoy.es/suscripcion#vca=suscribete&amp;vso=hoy&amp;vmc=on&amp;vli=cabecera\">                  <span class=\"v-slc__t\" >
                Suscríbete
              </span>
                </a>
              

                            </div>
      </div>
            <div class=\"v-h__btn v-h__btn--2\" hidden data-voc-profile-menu>
        <div class=\"v-drw v-drw--t5\" data-voc-component=\"dropdown\">
          <div class=\"v-drw__b-c \">
            <a class=\"v-drw__a\" href=\"https://areapersonal.hoy.es/gestion/mi-cuenta.html\" title=\"Área personal\">
               <span class=\"v-drw__b-i\">
                  <img class=\"v-drw__img\"
                       src=\"//s1.ppllstatics.com/starfish/latest/assets/images/placeholders/user-placeholder.png\"
                       alt=\"imagen perfil usuario\" data-voc-profile-img-menu>
               </span>
              <span class=\"v-drw__b-t\" data-voc-profile-name>Usuario</span>
            </a>
            <button class=\"v-drw__b \">
              <span class=\"v-a-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
                    <path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\"
                          transform=\"translate(0 14) rotate(-90)\"></path>
                 </svg>
              </span>
            </button>
          </div>
          <div class=\"v-drw__c \">
            <div class=\"v-drw__sub-c\">
              <div class=\"v-drw__h\">
                <button class=\"v-x\">
                   <span class=\"v-i\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.996\" viewBox=\"0 0 24 23.996\">
                         <path data-name=\"Unión 29\" d=\"M12,14.03,2.031,24,0,21.963,9.968,12,0,2.033,2.031,0,12,9.966,21.969,0,24,2.033,14.032,12,24,21.963,21.969,24Z\"></path>
                      </svg>
                   </span>
                </button>
              </div>
              <div class=\"v-drw__w\">
                <div class=\"v-h-u\">
                  <div class=\"v-h-u__c\">
                    <figure class=\"v-h-u__img-c\">
                      <img class=\"v-h-u__img\" src=\"//s1.ppllstatics.com/starfish/latest/assets/images/placeholders/user-placeholder.png\" alt=\"imagen perfil usuario\" data-voc-profile-img-button>
                    </figure>
                    <p class=\"v-h-u__p v-h-u__p--1\" data-voc-profile-full-name></p>
                    <p class=\"v-h-u__p v-h-u__p--2\" data-voc-profile-mail></p>
                  </div>
                  <div class=\"v-u-c v-u-c--1\">
                    <ul class=\"v-u v-u--t1\">
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://www.hoy.es/mi-seccion/\" title=\"MiHOY\" data-mrf-link=\"https://www.hoy.es/mi-seccion/\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23.998\" height=\"24\" viewBox=\"0 0 23.998 24\">
                                      <path data-name=\"Unión 84\" d=\"M10.5,22.5l13.5-9V15L10.5,24ZM0,18V16.5l10.5,6V24Zm10.5,1.5,13.5-9V12L10.5,21ZM0,15V13.5l10.5,6V21Zm10.5,1.5L24,7.5V9L10.5,18ZM0,12V10.5l10.5,6V18Zm10.5,1.5L24,4.5V6L10.5,15ZM0,9V7.5l10.5,6V15ZM0,7.5,13.5,0,24,4.5l-13.5,9Z\" transform=\"translate(-0.002 0)\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">MiHOY</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                            <li class=\"v-u__l\">
                        <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/favoritos.html\" title=\"Mis noticias\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/favoritos.html\">
                              <span class=\"v-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
                                    <path data-name=\"Trazado 1617\" d=\"M2585,856h18v24l-9-7.5-9,7.5Z\" transform=\"translate(-2585 -856)\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Mis noticias</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://www.hoy.es/mi-seccion/?openInterests=true\" title=\"Mis intereses\" data-mrf-link=\"https://www.hoy.es/mi-seccion/?openInterests=true\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"21\" viewBox=\"0 0 24 21\">
                                      <path data-name=\"211755_heart_icon\" d=\"M81.3,83A6.745,6.745,0,0,0,76,85.537,6.745,6.745,0,0,0,70.7,83,6.627,6.627,0,0,0,64,89.537a6.426,6.426,0,0,0,1.869,4.528l9.45,9.268L76,104l.681-.668L85.95,94.24a6.41,6.41,0,0,0,2.05-4.7A6.627,6.627,0,0,0,81.3,83Z\" transform=\"translate(-64 -83)\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Mis intereses</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                        <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/newsletters.html\" title=\"Newsletters\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.999\" viewBox=\"0 0 24 23.999\">
                                      <path data-name=\"Unión 54\" d=\"M24,24H0V10.5l12,9,12-9V24h0ZM12.036,18,4.5,12.475V3h15v9.476L12.038,18ZM7.5,12h9V10.5h-9Zm0-4.5h9V6h-9ZM21,11.247V6.75L24,9l-3,2.248h0Zm-18,0L0,9,3,6.75v4.5ZM14,1.5H10L12,0l2,1.5,0,0Z\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Newsletters</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                          </ul>
                  </div>
                                      <div class=\"v-u-c v-u-c--2\">
                      <ul class=\"v-u v-u--t1\">
                        <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/compras-suscripciones\" title=\"Mi suscripción\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/compras-suscripciones\">
                            <span class=\"v-i\">
                              <div class=\"v-op\">
                                <p class=\"v-op__c\">
                                    <span class=\"v-op__i\">
                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <path id=\"background\" d=\"M21,0H3A3,3,0,0,0,0,3V21a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V3a3,3,0,0,0-3-3\" fill=\"#000000\"></path>
                                        <path id=\"cross\" d=\"M28,18.286H21.714V12H18.286v6.286H12v3.429h6.286V28h3.429V21.714H28Z\" transform=\"translate(-8 -8)\" fill=\"#fff\"></path>
                                        <rect id=\"Rectángulo_4632\" data-name=\"Rectángulo 4632\" width=\"24\" height=\"24\" fill=\"none\"></rect>
                                      </svg>
                                    </span>
                                </p>
                              </div>
                            </span>
                            <p class=\"v-p\">Mi suscripción</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                                    <div class=\"v-u-c v-u-c--3\">
                    <ul class=\"v-u v-u--t1\">
                      <li class=\"v-u__l\">
                        <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/datos-personales.html\" title=\"Mi cuenta\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/datos-personales.html\">
                              <span class=\"v-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
                                    <path data-name=\"Unión 41\" d=\"M0,24V21a9,9,0,0,1,18,0v3ZM3.752,5.252A5.248,5.248,0,1,1,9,10.5,5.249,5.249,0,0,1,3.752,5.252Z\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Mi cuenta</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/dispositivos.html\" title=\"Mis dispositivos\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/dispositivos.html\">
                                <span class=\"v-i\">
                                   <svg id=\"icon-divices\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"18.004\" viewBox=\"0 0 24 18.004\">
                                      <path id=\"Unión_93\" data-name=\"Unión 93\" d=\"M-11454,911V896h9v15Zm3-1.5h3V908h-3Zm-1.5-3h6V897.5h-6ZM-11469,911v-3h3V894.5h1.5V908h9v3Zm6-4.5V896h7.5v10.5Zm-3-12V893h19.5v1.5Z\" transform=\"translate(11469 -892.999)\" fill=\"#202020\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Mis dispositivos</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                                                                          <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/contacto.html\" title=\"Ayuda / Contacto\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/contacto.html\">
                            <span class=\"v-i\">
                               <svg id=\"icon-help-desk\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.998\" viewBox=\"0 0 24 23.998\">
                                  <path id=\"Exclusión_40\" data-name=\"Exclusión 40\" d=\"M-11445,950l0,0-4.494-4.5h-13.5v-3h15V932h3v18Zm-24-6v0l0-4.5V926h18v13.5h-13.5l-4.5,4.5Z\" transform=\"translate(11469.001 -925.999)\" fill=\"#202020\"></path>
                               </svg>
                            </span>
                            <p class=\"v-p\">Ayuda / Contacto</p>
                            <span class=\"v-a-i\">
                               <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                  <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                               </svg>
                            </span>
                          </a>
                        </li>
                                          </ul>
                  </div>
                                    <div class=\"v-u-c v-u-c--4\">
                    <ul class=\"v-u v-u--t1\">
                        <li class=\"v-u__l\">
                                                    <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/mi-club.html\" title=\"El Club\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/mi-club.html\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"18\" viewBox=\"0 0 24 18\">
                                      <path data-name=\"Exclusión 42\" d=\"M7.5,18H0V10.5H6l-3,3L4.5,15l3-3v6ZM24,18H10.5V12l3,3L15,13.5l-3-3H24V18ZM3.4,7.5h0L0,7.5V0H7.5V3.4A3,3,0,0,0,3.4,7.5ZM24,7.5H14.6a3,3,0,0,0-4.1-4.1V0H24V7.5Zm-12,0A1.5,1.5,0,1,1,13.5,6,1.5,1.5,0,0,1,12,7.5Zm-6,0A1.5,1.5,0,1,1,7.5,6,1.5,1.5,0,0,1,6,7.5Z\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">El Club</p>
                            <span class=\"v-a-i\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\"><path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path></svg></span>
                          </a>
                        </li>
                    </ul>
                  </div>
                                    <div class=\"v-u-c v-u-c--5\">
                    <ul class=\"v-u v-u--t1\">
                      <li class=\"v-u__l\">
                        <a class=\"v-u__a gigya-logout-link\" href=\"#\" title=\"Cerrar sesión\" data-mrf-link=\"https://www.hoy.es/api/v2/headers/skeleton.twig\">
                              <span class=\"v-i\">
                                 <svg id=\"icon-logout\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                    <path id=\"Unión_96\" data-name=\"Unión 96\" d=\"M-11428,918v-3h12V897h-12v-3h15v24Zm0-10.5H-11437v-3h8.994V900l7.506,6-7.506,6Z\" transform=\"translate(11437 -894.001)\" fill=\"#202020\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Cerrar sesión</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

            <div class=\"v-h__btn v-h__btn--3\" id=\"btnUserContainer\" data-voc-profile-login>
        <a class=\"v-btn v-btn-i v-btn-i--l v-btn--m\" href=\"https://secure.hoy.es/identidad/inicio\" aria-label=\"boton-area-usuario\" data-mrf-link=\"https://secure.hoy.es/identidad/inicio\">
          <span class=\"v-i\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
              <path data-name=\"Unión 41\" d=\"M0,24V21a9,9,0,0,1,18,0v3ZM3.752,5.252A5.248,5.248,0,1,1,9,10.5,5.249,5.249,0,0,1,3.752,5.252Z\"></path>
            </svg>
          </span>
          <span class=\"v-btn__t\">Iniciar sesión</span>
        </a>
      </div>
          </nav>
</div>
                <div class=\"v-h__sub-w v-h__sub-w--5\">
    <button class=\"v-h__search\">
                   <span class=\"v-i\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                         <path data-name=\"Unión 28\" d=\"M17.153,19.321A10.728,10.728,0,0,1,3.143,3.143a10.728,10.728,0,0,1,16.178,14.01L24,21.833,21.832,24ZM3.065,10.731a7.665,7.665,0,1,0,7.664-7.664A7.673,7.673,0,0,0,3.065,10.731Z\"></path>
                      </svg>
                   </span>
    <p class=\"v-h__search-t\">Buscar en Hoy</p>
  </button>
</div>
        <div class=\"v-h__sub-w v-h__sub-w--7\">
  <div class=\"v-h__mh\">
    <button class=\"v-h__mh-btn\" aria-label=\"boton-menu\">
      <span class=\"v-h__mh-t\">Menú</span>
      <span class=\"v-h__mh-l-c\">
         <span class=\"v-h__mh-l v-h__mh-l--1\"></span>
         <span class=\"v-h__mh-l v-h__mh-l--2\"></span>
         <span class=\"v-h__mh-l v-h__mh-l--3\"></span>
      </span>
    </button>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class=\"v-h-mg-m\">
<div class=\"v-h-mg-m__c v-h-mg-m__c--1 v-c\">
</div>
<div class=\"v-h-mg-m__c v-h-mg-m__c--2 v-c\">
<div class=\"v-h-mg-m__w v-h-mg-m__w--1\">
<header class=\"v-cnt-m v-cnt-m--xs \">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Secciones
</p>
</div>
</div>
</header>
<div class=\"v-h-mg-m__list-c v-clp-xs-14\" data-voc-component=\"show-more\">
<ul class=\"v-h-mg-m__list v-clp__w\">
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/\" target=\"_self\" title=\"Portada\" data-mrf-link=\"http://www.hoy.es/\">
Portada
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/extremadura/\" class=\"v-drw__b-t\" title=\"Extremadura\" data-mrf-link=\"http://www.hoy.es/extremadura/\">Extremadura</a>
<button class=\"v-acc__b\" aria-label=\"Extremadura\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/elecciones/extremadura/\"
target=\"_self\" title=\"Elecciones en Extremadura\"
data-mrf-link=\"http://www.hoy.es/elecciones/extremadura/\">
Elecciones en Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/elecciones/extremadura/resultados/\"
target=\"_self\" title=\"Resultados Elecciones Extremadura\"
data-mrf-link=\"https://www.hoy.es/elecciones/extremadura/resultados/\">
Resultados Elecciones Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremadura/semana-santa/\"
target=\"_self\" title=\"Semana Santa en Extremadura\"
data-mrf-link=\"http://www.hoy.es/extremadura/semana-santa/\">
Semana Santa en Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremenos-de-hoy/\"
target=\"_self\" title=\"Premios Extremeños de HOY\"
data-mrf-link=\"http://www.hoy.es/extremenos-de-hoy/\">
Premios Extremeños de HOY
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremadura/cronica-negra/\"
target=\"_self\" title=\"Crónica Negra\"
data-mrf-link=\"http://www.hoy.es/extremadura/cronica-negra/\">
Crónica Negra
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/badajoz/\" class=\"v-drw__b-t\" title=\"Badajoz\" data-mrf-link=\"http://www.hoy.es/badajoz/\">Badajoz</a>
<button class=\"v-acc__b\" aria-label=\"Badajoz\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/carnaval/\"
target=\"_self\" title=\"Carnaval de Badajoz\"
data-mrf-link=\"http://www.hoy.es/carnaval/\">
Carnaval de Badajoz
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/prov-badajoz/\"
target=\"_self\" title=\"Provincia de Badajoz\"
data-mrf-link=\"http://www.hoy.es/prov-badajoz/\">
Provincia de Badajoz
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://donbenito.hoy.es\"
target=\"_self\" title=\"Don Benito\"
data-mrf-link=\"https://donbenito.hoy.es\">
Don Benito
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://villanueva.hoy.es\"
target=\"_self\" title=\"Villanueva de la Serena\"
data-mrf-link=\"https://villanueva.hoy.es\">
Villanueva de la Serena
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://almendralejo.hoy.es\"
target=\"_self\" title=\"Almendralejo\"
data-mrf-link=\"https://almendralejo.hoy.es\">
Almendralejo
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/caceres/\" class=\"v-drw__b-t\" title=\"Cáceres\" data-mrf-link=\"http://www.hoy.es/caceres/\">Cáceres</a>
<button class=\"v-acc__b\" aria-label=\"Cáceres\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/prov-caceres/\"
target=\"_self\" title=\"Provincia de Cáceres\"
data-mrf-link=\"http://www.hoy.es/prov-caceres/\">
Provincia de Cáceres
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://navalmoral.hoy.es/\"
target=\"_self\" title=\"Navalmoral de la Mata\"
data-mrf-link=\"https://navalmoral.hoy.es/\">
Navalmoral de la Mata
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://coria.hoy.es/\"
target=\"_blank\" title=\"Coria\"
data-mrf-link=\"https://coria.hoy.es/\">
Coria
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://trujillo.hoy.es/\"
target=\"_blank\" title=\"Trujillo\"
data-mrf-link=\"https://trujillo.hoy.es/\">
Trujillo
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/merida/\" target=\"_self\" title=\"Mérida\" data-mrf-link=\"http://www.hoy.es/merida/\">
Mérida
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/plasencia/\" target=\"_self\" title=\"Plasencia\" data-mrf-link=\"http://www.hoy.es/plasencia/\">
Plasencia
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/opinion/\" target=\"_self\" title=\"Opinión\" data-mrf-link=\"http://www.hoy.es/opinion/\">
Opinión
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/extremadura/hiperlocales/\" target=\"_self\" title=\"Hiperlocales\" data-mrf-link=\"http://www.hoy.es/extremadura/hiperlocales/\">
Hiperlocales
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/nacional/\" target=\"_self\" title=\"España\" data-mrf-link=\"http://www.hoy.es/nacional/\">
España
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/internacional/\" target=\"_self\" title=\"Internacional\" data-mrf-link=\"http://www.hoy.es/internacional/\">
Mundo
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/economia/\" target=\"_self\" title=\"Economía\" data-mrf-link=\"http://www.hoy.es/economia/\">
Economía
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/planes/\" class=\"v-drw__b-t\" title=\"Planes\" data-mrf-link=\"http://www.hoy.es/planes/\">Planes</a>
<button class=\"v-acc__b\" aria-label=\"Planes\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-musicales.html\"
target=\"_self\" title=\"Música\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-musicales.html\">
Música
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-teatrales.html\"
target=\"_self\" title=\"Teatro\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-teatrales.html\">
Teatro
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-literarios.html\"
target=\"_self\" title=\"Literatura\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-literarios.html\">
Literatura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-deportivos.html\"
target=\"_self\" title=\"Deporte\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-deportivos.html\">
Deporte
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-gastronomicos.html\"
target=\"_self\" title=\"Gastronomía\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-gastronomicos.html\">
Gastronomía
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/culturas/\" class=\"v-drw__b-t\" title=\"Culturas\" data-mrf-link=\"http://www.hoy.es/culturas/\">Culturas</a>
<button class=\"v-acc__b\" aria-label=\"Culturas\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/trazos/\"
target=\"_self\" title=\"Suplemento Trazos\"
data-mrf-link=\"http://www.hoy.es/culturas/trazos/\">
Suplemento Trazos
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/cine/\"
target=\"_self\" title=\"Cine\"
data-mrf-link=\"http://www.hoy.es/culturas/cine/\">
Cine
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/libros/\"
target=\"_self\" title=\"Libros\"
data-mrf-link=\"http://www.hoy.es/culturas/libros/\">
Libros
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/tv/\"
target=\"_self\" title=\"TV\"
data-mrf-link=\"http://www.hoy.es/culturas/tv/\">
TV
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/guia-tv/\"
target=\"_self\" title=\"Guía TV\"
data-mrf-link=\"http://www.hoy.es/guia-tv/\">
Guía TV
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/musica/\"
target=\"_self\" title=\"Música\"
data-mrf-link=\"http://www.hoy.es/culturas/musica/\">
Música
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/toros/\"
target=\"_self\" title=\"Toros\"
data-mrf-link=\"http://www.hoy.es/culturas/toros/\">
Toros
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/aula-hoy/\" target=\"_self\" title=\"Aula de Cultura HOY\" data-mrf-link=\"http://www.hoy.es/aula-hoy/\">
Aula de Cultura HOY
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/pantallas/\" target=\"_self\" title=\"Pantallas\" data-mrf-link=\"http://www.hoy.es/pantallas/\">
Pantallas
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/sociedad/\" class=\"v-drw__b-t\" title=\"Sociedad\" data-mrf-link=\"http://www.hoy.es/sociedad/\">Sociedad</a>
<button class=\"v-acc__b\" aria-label=\"Sociedad\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/ciencia/\"
target=\"_self\" title=\"Ciencia\"
data-mrf-link=\"http://www.hoy.es/ciencia/\">
Ciencia
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/sociedad/salud/\"
target=\"_self\" title=\"Salud\"
data-mrf-link=\"http://www.hoy.es/sociedad/salud/\">
Salud
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/tecnologia/\"
target=\"_self\" title=\"Tecnología\"
data-mrf-link=\"http://www.hoy.es/tecnologia/\">
Tecnología
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://blogs.hoy.es/escuela-de-padres/\"
target=\"_self\" title=\"Escuela de Padres\"
data-mrf-link=\"http://blogs.hoy.es/escuela-de-padres/\">
Escuela de Padres
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/vivir/\" target=\"_self\" title=\"Vivir\" data-mrf-link=\"http://www.hoy.es/vivir/\">
Vivir
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/antropia/\" target=\"_self\" title=\"Antropía\" data-mrf-link=\"http://www.hoy.es/antropia/\">
Antropía
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/deportes/\" class=\"v-drw__b-t\" title=\"Deportes\" data-mrf-link=\"http://www.hoy.es/deportes/\">Deportes</a>
<button class=\"v-acc__b\" aria-label=\"Deportes\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/\"
target=\"_self\" title=\"Fútbol\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/\">
Fútbol
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol-femenino\"
target=\"_self\" title=\"Fútbol femenino\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol-femenino\">
Fútbol femenino
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/liga-segunda\"
target=\"_self\" title=\"LaLiga Hypermotion\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/liga-segunda\">
LaLiga Hypermotion
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/primera-rfef/\"
target=\"_self\" title=\"Primera RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/primera-rfef/\">
Primera RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/segunda-rfef/\"
target=\"_self\" title=\"Segunda RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/segunda-rfef/\">
Segunda RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/tercera-rfef/\"
target=\"_self\" title=\"Tercera RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/tercera-rfef/\">
Tercera RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/baloncesto/\"
target=\"_self\" title=\"Baloncesto\"
data-mrf-link=\"http://www.hoy.es/deportes/baloncesto/\">
Baloncesto
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/tenis/\"
target=\"_self\" title=\"Tenis\"
data-mrf-link=\"http://www.hoy.es/deportes/tenis/\">
Tenis
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/ciclismo/\"
target=\"_self\" title=\"Ciclismo\"
data-mrf-link=\"http://www.hoy.es/deportes/ciclismo/\">
Ciclismo
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/motor/\"
target=\"_self\" title=\"Motor\"
data-mrf-link=\"http://www.hoy.es/deportes/motor/\">
Motor
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/mas-deportes/\"
target=\"_self\" title=\"Más Deporte\"
data-mrf-link=\"http://www.hoy.es/deportes/mas-deportes/\">
Más Deporte
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/mas-deportes/caza-federada/\"
target=\"_self\" title=\"Caza y Conservación\"
data-mrf-link=\"http://www.hoy.es/deportes/mas-deportes/caza-federada/\">
Caza y Conservación
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/motor/\" target=\"_self\" title=\"Motor\" data-mrf-link=\"https://www.hoy.es/motor/\">
Motor
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/gente-estilo/\" target=\"_self\" title=\"Gente y Estilo\" data-mrf-link=\"http://www.hoy.es/gente-estilo/\">
Gente y Estilo
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/xlsemanal/\" target=\"_self\" title=\"XLSemanal\" data-mrf-link=\"http://www.hoy.es/xlsemanal/\">
XLSemanal
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/podcast/\" target=\"_self\" title=\"Podcast\" data-mrf-link=\"http://www.hoy.es/podcast/\">
Podcast
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/fotos/\" target=\"_self\" title=\"Fotos\" data-mrf-link=\"http://www.hoy.es/fotos/\">
Fotos
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/videos/\" target=\"_self\" title=\"Vídeos\" data-mrf-link=\"http://www.hoy.es/videos/\">
Vídeos
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://quienesquien.hoy.es/\" target=\"_self\" title=\"Quién es Quién\" data-mrf-link=\"https://quienesquien.hoy.es/\">
Quién es Quién
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/agro/\" target=\"_self\" title=\"HOYAgro\" data-mrf-link=\"https://www.hoy.es/agro/\">
HOY Agro
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"https://www.hoy.es/ensalsa/\" class=\"v-drw__b-t\" title=\"EnSalsa\" data-mrf-link=\"https://www.hoy.es/ensalsa/\">EnSalsa</a>
<button class=\"v-acc__b\" aria-label=\"EnSalsa\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoyextremaduraesfuturo.es/\" target=\"_blank\" title=\"Extremadura es futuro\" data-mrf-link=\"https://www.hoyextremaduraesfuturo.es/\">
Extremadura es futuro
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://solidario.hoy.es/\" target=\"_self\" title=\"HOY Solidario\" data-mrf-link=\"https://solidario.hoy.es/\">
HOY Solidario
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-btn-c\">
<button class=\"v-clp__btn  v-h-mg-m__link v-btn v-btn-i v-btn-i--r\" aria-label=\"Ver más\">
<span class=\"v-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</li>
</ul>
</div>
</div>
<div class=\"v-h-mg-m__w v-h-mg-m__w--2\">
<header class=\"v-cnt-m v-cnt-m--xs\">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Servicios
</p>
</div>
</div>
</header>
<ul class=\"v-h-mg-m__list\">
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://esquelas.hoy.es/\"
target=\"_self\" title=\"Esquelas\"
data-mrf-link=\"https://esquelas.hoy.es/\">
Esquelas
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://oferplan.hoy.es/\"
target=\"_self\" title=\"Oferplan HOY\"
data-mrf-link=\"https://oferplan.hoy.es/\">
Oferplan
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/pasatiempos/\"
target=\"_self\" title=\"Pasatiempos\"
data-mrf-link=\"http://www.hoy.es/pasatiempos/\">
Pasatiempos
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/servicios/sorteos/\"
target=\"_self\" title=\"Resultados lotería\"
data-mrf-link=\"https://www.hoy.es/servicios/sorteos/\">
Resultados lotería
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/servicios/mi-club.html\"
target=\"_self\" title=\"El Club\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/mi-club.html\">
El Club
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/servicios/newsletters.html\"
target=\"_self\" title=\"Newsletters\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
Newsletters
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/promociones/\"
target=\"_self\" title=\"Promociones\"
data-mrf-link=\"https://www.hoy.es/promociones/\">
Promociones
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://hemeroteca.hoy.es\"
target=\"_self\" title=\"Hemeroteca del diario HOY edición impresa\"
data-mrf-link=\"https://hemeroteca.hoy.es\">
Hemeroteca impresa
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/hemeroteca\"
target=\"_self\" title=\"Hemeroteca del diario HOY edición digital\"
data-mrf-link=\"https://www.hoy.es/hemeroteca\">
Hemeroteca digital
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://blogs.hoy.es/\"
target=\"_self\" title=\"Blogs\"
data-mrf-link=\"https://blogs.hoy.es/\">
Blogs
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/de-tiendas/\"
target=\"_self\" title=\"De tiendas\"
data-mrf-link=\"http://www.hoy.es/de-tiendas/\">
De tiendas
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/guia-tv/\"
target=\"_self\" title=\"Guía/programación televisión\"
data-mrf-link=\"https://www.hoy.es/guia-tv/\">
Programación TV
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://empresas.hoy.es/\"
target=\"_self\" title=\"Local Digital Kit\"
data-mrf-link=\"https://empresas.hoy.es/\">
Negocios locales
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/suscripcion/app\"
target=\"_self\" title=\"Descargar APP HOY\"
data-mrf-link=\"https://areapersonal.hoy.es/suscripcion/app\">
Descárgate la APP
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/rss/\"
target=\"_self\" title=\"RSS\"
data-mrf-link=\"http://www.hoy.es/rss/\">
RSS
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.autocasion.com/coches-segunda-mano/badajoz\"
target=\"_blank\" title=\"Coches\"
data-mrf-link=\"https://www.autocasion.com/coches-segunda-mano/badajoz\">
Coches
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.pisos.com/viviendas/badajoz/\"
target=\"_blank\" title=\"Pisos\"
data-mrf-link=\"https://www.pisos.com/viviendas/badajoz/\">
Pisos
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.infoempleo.com/trabajo/en_badajoz/\"
target=\"_blank\" title=\"Empleo\"
data-mrf-link=\"http://www.infoempleo.com/trabajo/en_badajoz/\">
Empleo
</a>
</li>
</ul>
</div>
<div class=\"v-h-mg-m__w v-h-mg-m__w--3\">
<header class=\"v-cnt-m v-cnt-m--xs\">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Destacamos
</p>
</div>
</div>
</header>
<nav class=\"v-h-mg-m__nav\">
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://areapersonal.hoy.es/servicios/newsletters.html\" title=\"Newsletters\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
<span class=\"v-i\">              <img src=\"https://s3.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-newsletters.svg\" alt=\"Newsletters\">
</span>                    Newsletters          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://hemeroteca.hoy.es/\" title=\"Hemeroteca\"
data-mrf-link=\"https://hemeroteca.hoy.es/\">
<span class=\"v-i\">              <img src=\"https://s2.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-hemeroteca.svg\" alt=\"Hemeroteca\">
</span>                    Hemeroteca          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"http://www.hoy.es/pasatiempos/\" title=\"Pasatiempos\"
data-mrf-link=\"http://www.hoy.es/pasatiempos/\">
<span class=\"v-i\">              <img src=\"https://s3.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-pasatiempos.svg\" alt=\"Pasatiempos\">
</span>                    Pasatiempos          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://www.hoy.es/mi-seccion/\" title=\"Mi Sección\"
data-mrf-link=\"https://www.hoy.es/mi-seccion/\">
<img src=\"https://s1.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/logo-mi-hoy.svg\" alt=\"-\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
</nav>
</div>
</div>
<div class=\"v-h-mg-m__c v-h-mg-m__c--3\">
<div class=\"v-h-mg-m__w v-h-mg-m__w--6 v-c\">
<nav class=\"v-h__st \">
<ul class=\"v-h__st-list  \">
<li class=\"v-h__st-item \">
<p class=\"v-h__st-p\">Es noticia</p>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/temporal-en-extremadura.html\"
target=\"_self\" title=\"Temporal en Extremadura\"
data-mrf-link=\"https://www.hoy.es/temas/generales/temporal-en-extremadura.html\">
Temporal en Extremadura
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/carnaval/\"
target=\"_self\" title=\"Carnaval de Badajoz 2026\"
data-mrf-link=\"https://www.hoy.es/carnaval/\">
Carnaval de Badajoz 2026
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/accidente-ferroviario-adamuz.html\"
target=\"_self\" title=\"Accidente ferroviario en Adamuz\"
data-mrf-link=\"https://www.hoy.es/temas/generales/accidente-ferroviario-adamuz.html\">
Accidente ferroviario en Adamuz
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/hemeroteca/PP%20Vox%20y%20Extremadura.html?order=-fecha\"
target=\"_self\" title=\"Negociaciones PP-Vox en Extremadura\"
data-mrf-link=\"https://www.hoy.es/hemeroteca/PP%20Vox%20y%20Extremadura.html?order=-fecha\">
Negociaciones PP-Vox
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/personajes/david-sanchez-perez-castejon.html\"
target=\"_self\" title=\"Caso Azagra\"
data-mrf-link=\"https://www.hoy.es/temas/personajes/david-sanchez-perez-castejon.html\">
Caso Azagra
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/extremadura/anuario-2025-20251230130358-nt.html\"
target=\"_self\" title=\"Anuario 2025\"
data-mrf-link=\"https://www.hoy.es/extremadura/anuario-2025-20251230130358-nt.html\">
Anuario 2025
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/precio-de-la-luz-generales.html\"
target=\"_self\" title=\"Precio de la luz\"
data-mrf-link=\"https://www.hoy.es/temas/generales/precio-de-la-luz-generales.html\">
Precio de la luz
</a>
</li>
</ul>
</nav>    </div>
</div>
</div><span class=\"v-bdp\"></span>

<div class=\"v-h-sr-m\">
  <div class=\"v-h-sr-m__c v-c\">
    <button class=\"v-x\">
      <span class=\"v-i\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.996\" viewBox=\"0 0 24 23.996\">
            <path data-name=\"Unión 29\" d=\"M12,14.03,2.031,24,0,21.963,9.968,12,0,2.033,2.031,0,12,9.966,21.969,0,24,2.033,14.032,12,24,21.963,21.969,24Z\"></path>
         </svg>
      </span>
    </button>
    <div class=\"v-h-sr-m__w v-h-sr-m__w--1\">
      <div class=\"v-form-c v-form--bdr v-form--xxl\" data-voc-component=\"form-focus\">
                <form class=\"v-form\" data-voc-krammer-term action=\"https://www.hoy.es/hemeroteca/\" method=\"get\">
                    <div class=\"v-form__c\">
            <div class=\"v-form__g\">
              <div class=\"v-form__g-c\" data-voc-krammer-form>
               <span class=\"v-f-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                     <path data-name=\"Unión 28\" d=\"M17.153,19.321A10.728,10.728,0,0,1,3.143,3.143a10.728,10.728,0,0,1,16.178,14.01L24,21.833,21.832,24ZM3.065,10.731a7.665,7.665,0,1,0,7.664-7.664A7.673,7.673,0,0,0,3.065,10.731Z\"></path>
                  </svg>
               </span>
                <span class=\"v-form__rmv\">Borrar</span>
                <input placeholder=\"Buscar en Hoy\" type=\"text\" class=\"v-form__i\" id=\"search\"
                       data-voc-krammer-term-all-words data-voc-krammer-input-search autofocus required minlength=\"3\"/>
                <label class=\"v-form__l\" for=\"search\">Buscar en Hoy</label>
              </div>
              <div class=\"v-form__g-c\">
                <button class=\"v-form__btn v-btn v-btn-d v-btn--xxl\">Buscar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
            <!-- endblock header -->
        
       ";
    }

    // line 1483
    public function block_content($context, array $blocks = array())
    {
        echo "<!-- block content --><!-- endblock content -->";
    }

    // line 1484
    public function block_preFooter($context, array $blocks = array())
    {
        // line 1485
        echo "  
  <!-- block preFooter --><div class=\"v-adv v-adv--sky v-adv--sky--l\">
<div class=\"v-adv__item\">
<div data-voc-vam data-voc-vam-position=\"skyscraper_izq\"></div>
</div>
</div>
<div class=\"v-adv v-adv--sky v-adv--sky--r\">
<div class=\"v-adv__item\">
<div data-voc-vam data-voc-vam-position=\"skyscraper_der\"></div>
</div>
</div>  <!-- endblock preFooter -->
  
       ";
    }

    // line 1843
    public function block_jsFooter($context, array $blocks = array())
    {
        // line 1844
        echo "  
  <!-- block jsFooter -->
  <!-- endblock jsFooter -->
             
    <script src=\"//static.vocstatic.com/voonto2/latest/voonto.js\"
        data-experiment=\"vocento/script\" data-components=\"data-voc-component\"
         data-kangaroo=\"true\"  data-cmp=\"true\"  data-evolok=\"true\" data-evolok-terms=\"/aviso-legal.html\"  ></script>
    <script src=\"//static.vocstatic.com/tag-manager/latest/vtm.js\" data-analytics-id=\"ppll_pro\"     data-append=\"true\"
    data-legacy-tracker=\"true\"
    data-legacy-wemass=\"true\"
></script>                
    <script src=\"//static.vocstatic.com/frontal/5.47.1/most-read.js\"></script>   
   
 <script   async src=\"//static.vocstatic.com/widgets/4.30.2/loader.js\"></script>
\t<script type=\"vocento/script\" src=\"//static.vocento.com/comments-frontend/1.8.1/comments.js\"></script>
    <script type=\"cookiewall/script\" src=\"//static.vocstatic.com/vam/7.15.0/vam.js\"  onerror=\"
    if (window.Voonto && window.Voonto.getInstance) {
      const app = window.Voonto.getInstance();
      const payload = { message: 'No carga VAM', pageType: window.vocento.config.vam.pageType };
      if (app && typeof app.nrevent === 'function') {
      \tapp.nrevent('VamLoadEvent', payload, '7b4c4061424c49685b484359');
      }
    }
  \"></script>    
  \t<script type=\"vocento/script\" src=\"//s1.ppllstatics.com/starfish/1.6.11/starfish.js\"></script>
      <script type=\"vocento/script\" src=\"https://static.vocstatic.com/user-identity/1.63.0/user-identity-framework.js\"></script>
    <script type=\"cookiewall/script\" src=\"//static.vocstatic.com/video-player/2.4.0/video-player.js\"></script>
    <script type=\"vocento/script\" src=\"//static.vocstatic.com/frontal/5.47.1/frontal-libraries.js\"></script>
\t<script type=\"vocento/script\" src=\"//static.vocstatic.com/portalsjs/1.24.0/portals.js\"></script> <script type=\"cookiewall/script\" src=\"https://scripts.opti-digital.com/modules/?pubid=p299\"></script>
     <script type=\"vocento/script\" src=\"https://static.vocstatic.com/freezone-newsletter-subscriber/2.0.0/freezone-widget.js\"></script>    
    
  <!-- block jsFooterEnd -->
  <!-- endblock jsFooterEnd -->
  
       ";
    }

    // line 1881
    public function block_trackingFooter($context, array $blocks = array())
    {
        echo "<!-- block trackingFooter --><!-- endblock trackingFooter -->";
    }

    public function block_configDidomi($context, array $blocks = array())
    {
        echo "<!-- block configDidomi --><!-- endblock configDidomi -->";
    }

    // line 1883
    public function block_rtimBlock($context, array $blocks = array())
    {
        // line 1884
        echo "  
  <!-- block rtimBlock -->

  <!-- Evolok Notifier Tag -->
  <ev-engagement group-name=\"hoy\" modal-backdrop=\"false\"></ev-engagement>
  <!-- /Evolok Notifier Tag -->

  <!-- endblock rtimBlock -->
  
       ";
    }

    public function getTemplateName()
    {
        return "remote_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  2035 => 1884,  2032 => 1883,  2021 => 1881,  1983 => 1844,  1980 => 1843,  1964 => 1485,  1961 => 1484,  1955 => 1483,  683 => 212,  680 => 211,  674 => 208,  666 => 202,  663 => 201,  658 => 198,  652 => 155,  643 => 148,  640 => 147,  634 => 144,  631 => 143,  625 => 32,  622 => 31,  616 => 23,  613 => 22,  607 => 8,  604 => 7,  599 => 1894,  597 => 1883,  594 => 1881,  592 => 1843,  247 => 1498,  245 => 1484,  243 => 1483,  239 => 1481,  237 => 211,  233 => 208,  231 => 201,  229 => 199,  227 => 198,  181 => 155,  179 => 147,  177 => 143,  68 => 34,  66 => 31,  59 => 26,  57 => 22,  45 => 11,  43 => 7,  35 => 1,);
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
<meta charset=\"utf-8\">
<meta name=\"lang\" content=\"es\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>{%- block metas %}
  <!-- block metas -->
  <!-- endblock metas -->
  {% endblock metas %}
<link rel=\"preconnect\" href=\"https://static.vocstatic.com\" />
<link rel=\"dns-prefetch\" href=\"https://static.vocstatic.com\" />  
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gss.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gtm.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/gtr.woff2\" as=\"font\" type=\"font/woff2\" crossorigin>
<link rel=\"preload\" href=\"//s1.ppllstatics.com/starfish/1.6.11/assets/fonts/ibmr.woff2\" as=\"font\" type=\"font/woff2\" crossorigin><link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/voonto2/latest/voonto.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/tag-manager/latest/vtm.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/vam/7.15.0/vam.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/loader.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/ev-em.min.js\" />
<link rel=\"preload\" as=\"script\" href=\"//static.vocstatic.com/widgets/4.30.2/rtim.js\" />
  {%- block microdata %}
  <!-- block microdata -->
  <!-- endblock microdata -->
  {% endblock microdata %}
<!-- block externalCss -->
<!-- endblock externalCss -->
<!-- block css -->
<link rel=\"stylesheet\" href=\"//s1.ppllstatics.com/starfish/1.6.11/starfish.css\">
<link rel=\"stylesheet\" href=\"//s1.ppllstatics.com/starfish/1.6.11/starfish-detail.css\" data-voc-no-evolok-ads >
<!-- endblock css -->{%- block css %}
  <!-- block css -->
  <!-- endblock css -->
  {% endblock css %}  
  



<script>function returnWebBrowserSafariOrFirefox() {
const userAgent = navigator.userAgent.toLowerCase();
return userAgent.includes(\"firefox\") || (userAgent.includes(\"safari\") && !userAgent.includes(\"chrome\"))
}
window.vocento = {
site: {
evolokMigrated: true,
env: 'pro',
group: 'ppll',
subdomain: 'www',
tlddomain: 'hoy.es',
media: 'hoy',
name: 'Hoy',
parent: '',
editions: {
hasEditions: false,
editions: [],
main: '',
current: '',
queryString: ''
},
gisEnabled : false,
gscEnabled : false,
swgEnabled : false,
vipDistrictEnabled : true,
},
config: {
vocuser: {
url: {
voccoreServiceUrl: '//voccore.hoy.es/',
prospectServiceUrl: '//newsletters.vocento.com/'
},
comments: {
premiumComments: true,
options: {categoryID: 'hoy'},
commentoVersion: '3.20.0',
commentoEnabled: 'true',
commentoPath: '//static.vocstatic.com/comments/4.3.0'
},
urls: {
catalog: 'https://catalogo-newsletters.vocento.com/',
voccore: 'https://voccore.',
commento: 'https://comments.vocento.com/',
voccoreDomain: \"https://voccore.hoy.es/\",
prospect: \"https://newsletters.vocento.com/\",
prospectDomain: \"//newsletters.hoy.es/\"
},
freezone: {
subscriptionUrl: 'https://areapersonal.hoy.es/suscripcion/',
newsletterUrl: 'https://areapersonal.hoy.es/servicios/newsletters.html'
}
},
multimedia: {
videoplayer: {
serviceUrl: \"//api-video-player.vocento.com\"
}
},
vtm: {
legacyTracker: false,
trackerUrl: '//metrics.hoy.es',
evdabEnabled: false,
utiq : {
enabled: returnWebBrowserSafariOrFirefox(),
}
},
relatedContent: {
recommendationId: '',
trackId: ''
},
lottery: {
serviceUrl: 'https://api-lottery.vocento.com'
},
widgets: {
serviceUrl: \"https://vocx.evolok.net/acd/api/3.0\"
,enableFrontalAuth: true,
jbEnabledGroups:[],
newRelicEnabled: true,
newRelicFull: true,
maxAuthResponseTime: 800
},
frontalLibraries: {
starredServiceUrl: 'https://areapersonal.hoy.es/servicios/api/v1/articulo',
apiUserPath: '',
apiAppUserPath: '',
newsId: '',
},
alerts: { pushServiceUrl: '//push.hoy.es/list_notificaciones.php', appKey: '107686777456cb4642379ec0.83790134', workerPath:'/comun/pushservice/ws/worker.min.js', editions: {} },
paywall: {
enabled: true,
options: {\"site\":\"hoy\",\"makeCall\":true,\"applyRestrictions\":true,\"isTrialActive\":false,\"maxConcurrentSessions\":\"2|4\",\"urlIosApp\":\"https://apps.apple.com/us/app/hoy-on/id323862816\",\"urlAndroidApp\":\"https://play.google.com/store/apps/details?id=com.vocento.hoy\",\"urlMoreInfo\":\"https://areapersonal.hoy.es/suscripcion/pack-on-tarifa-ampliada-hoy-78873.html\",\"urlFreeTest\":\"https://areapersonal.hoy.es/suscripcion/pack-on-hoy-59456/prueba.html\",\"urlSubscribe\":\"https://areapersonal.hoy.es/suscripcion\",\"urlNewsletter\":\"https://areapersonal.hoy.es/servicios/newsletters.html\",\"urlExtendedRate\":\"https://areapersonal.hoy.es/suscripcion/tarifa-ampliada.html\",\"labelButtonFreeTest\":\"\\u00a1 Lo quiero!\",\"labelButtonSubscribe\":\"\\u00a1 Lo quiero!\",\"v2\":true,\"mixedPaywall\":true}
},
}
};</script>
      
            <script type=\"text/javascript\">
  window.vocento.config.vam = {
    frontalVersion: \"ppll2022\",
        pageType: \"portada\",
            media: {\"lastUpdate\":\"12-02-2026 13:40:15\",\"lastUser\":\"cron\",\"dispositivos\":[\"desktop\"],\"enableTpag\":false,\"excepciones\":{\"\\/extremadura\\/celebra-aniversario-mejor-20230305232216-ntvo.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\",\"robapaginas\",\"megabanner\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[],\"robapaginas\":[],\"megabanner\":[]}},\"\\/extremadura\\/joan-roca-tono-perez-valores-alta-cocina-20230308222930-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/arquitectos-moneo-tunon-repasan-obras-iconicas-merida-20230324235118-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0},\"\\/extremadura\\/seis-estrellas-michelin-anos-hoy-20230308230520-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/joan-roca-tono-perez-celebran-anos-hoy-20230308223833-ga.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/extremadura\\/periodismo-compromiso-20230102072511-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}},\"\\/opinion\\/periodismo-compromiso-20230331121940-nt.html\":{\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\",\"galeria\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/extremadura\\/90-aniversario-hoy\"}},\"fecha_fin\":0,\"fecha_in\":0,\"priorizadas\":{\"desktop\":[\"boton_local\",\"cintillo_local\",\"robapaginas_local\"]},\"posicion_desktop\":{\"boton_local\":[],\"cintillo_local\":[],\"robapaginas_local\":[]}}},\"headerBidding\":{\"alias\":[[\"richaudience\",\"exte\"]],\"timeout\":800,\"failsafeTimeout\":3000,\"prebidTimeout\":1200,\"offsetHbPixel\":100,\"offsetHbPercentage\":5,\"newRelic\":{\"enable\":false,\"devices\":[\"mobile\"],\"typePositions\":[\"pri\"]},\"disableBidders\":[],\"prebidConfig\":{\"userSync\":{\"filterSettings\":{\"all\":{\"bidders\":[\"appnexus\",\"rubicon\",\"criteo\",\"ix\",\"smartadserver\",\"pubmatic\",\"richaudience\",\"optidigital\",\"ttd\"],\"filter\":\"include\"}},\"syncsPerBidder\":1,\"syncDelay\":6000},\"debug\":false,\"priceGranularity\":\"dense\",\"consentManagement\":{\"timeout\":8000,\"cmpApi\":\"iab\",\"allowAuctionWithoutConsent\":true}},\"positionsPageType\":{\"desktop\":{\"noticia\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_dos\",\"megabanner_local\"],\"portada\":[\"megabanner\",\"megabanner_local\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_tres\",\"megabanner_tres_local\",\"megabanner_cuatro\",\"megabanner_cuatro_local\",\"megabanner_dos\",\"megabanner_cinco_local\",\"megabanner_dos_local\",\"megabanner_cinco\",\"robapaginas_tres\",\"robapaginas_cuatro\",\"robapaginas_cinco\",\"robapaginas_tres_local\",\"robapaginas_cuatro_local\",\"robapaginas_cinco_local\",\"robapaginas_seis_local\",\"robapaginas_siete_local\",\"robapaginas_ocho_local\",\"robapaginas_diez_local\",\"robapaginas_seis\",\"robapaginas_siete\",\"robapaginas_ocho\",\"robapaginas_nueve\",\"robapaginas_diez\"],\"galeria\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"robapaginas_dos_local\",\"robapaginas_dos\",\"megabanner_dos\",\"robapaginas_tres\"]}},\"adUnits_desktop\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,251],[980,90],[980,250],[970,250],[970,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":[\"RSr02kE8hz\",\"0zVpHDhwUe\"],\"supplyType\":\"site\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"110047\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cj5KHEGHog\"],\"supplyType\":\"site\"}},{\"bidder\":\"optidigital\",\"params\":{\"publisherId\":\"p299\",\"placementId\":\"vocento.hoy_megabanner\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002288\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180732\",\"size\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109423\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"kYmE4FyUZP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_dos\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002290\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180737\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"g2JLCInHdx\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109426\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cj5KHEGHog\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002296\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180739\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"HlU7Ns2eRY\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109018\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002298\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180742\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"bXpmieEtDq\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109019\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"optidigital\",\"params\":{\"publisherId\":\"p299\",\"placementId\":\"vocento.hoy_robapaginas_dos\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_dos\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002304\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180749\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"ndpvc32E4A\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109427\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_dos_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002312\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180750\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0vfgo70vV3\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109422\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"1A2eZ3r3lh\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002310\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180751\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1aYJtoxW4Q\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109455\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"P09jAQghzr\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_tres_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002314\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180761\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0cmzWLRJSC\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109461\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"8JxluKO98O\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cuatro_local\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002316\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180746\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"Eh43YWYLiN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109431\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"SDnuBopZHH\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_tres\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002308\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180760\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0AvztrReve\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109430\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"v6zz8ytEoO\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_tres\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180740\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"a1WeQgJMIs\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109488\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cuatro\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180736\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"a1WeQgJMIs\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cinco-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109468\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"PhDemF1jrE\",\"supplyType\":\"site\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"j7dVu1keRq\"],\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180733\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cinco\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109460\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"kYmE4FyUZP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_dos_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180738\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"lyPSyJzrML\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_tres_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109467\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"oY2NoFkDrE\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_tres_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180741\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1pSdNnzEVE\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cuatro_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109475\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"mpVcpeNh4F\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cuatro_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180735\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"090i2XDMMo\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_cinco_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109466\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"PcYQ5B4G9m\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_megabanner_cinco_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180734\",\"size\":[[980,90],[980,250],[970,90],[970,250],[728,90],[1200,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"onXur19VCG\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109436\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e3HzEcFYBl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cuatro\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180745\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0y5h1zSQhM\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cinco-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109441\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"wB21ArcVcP\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cinco\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180743\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"vjU5Q2xHzZ\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_seis-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109458\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"5ABeNuNZEm\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_seis\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180756\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1P2Iz819Ug\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_siete-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109463\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1ul4vObNUg\",\"supplyType\":\"site\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"AW4SY5T57v\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_siete\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180758\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_ocho-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109485\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"7JaYcdUKv2\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_ocho\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180754\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"aSL49jqWfA\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_nueve-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109490\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"Urim4QVcia\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_nueve\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180752\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"EDcZFBxnhO\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_diez-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109489\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"iVSpLzWRya\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_diez\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180747\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"yYNMgCik4H\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cinco_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109470\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"nGAgawZqIT\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_cinco_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180744\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"1Dp3ow3sih\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_seis_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109471\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"TFi6L4WOIZ\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_seis_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180757\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"mR82q4uel6\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_siete_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109480\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"y3J8wSUPvk\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_siete_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180759\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0e1QW9ARgV\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_ocho_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109485\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"fnLxKcRRsV\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_ocho_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180755\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0b7WyMy2AT\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_nueve_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109493\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"k4xFexHNY4\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_nueve_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180753\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"2gZSvynYvN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_diez_local-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109493\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1260808\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"cdWOtPC0H1\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_robapaginas_diez_local\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180748\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"2gZSvynYvN\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"skyscraper_der-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[120,600],[120,800]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109428\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_skyscrapper_der\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002318\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180762\",\"size\":[[120,600],[120,800]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0cjUyHfuSQ\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"skyscraper_izq-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[120,600],[120,800]]}},\"bids\":[{\"bidder\":\"ttd\",\"params\":{\"supplySourceId\":\"direct8jkusmbq\",\"publisherId\":\"1\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"508342\",\"pageId\":\"1595566\",\"formatId\":\"109429\"}},{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"109154\",\"networkId\":\"12101\"}},{\"bidder\":\"exte\",\"params\":{\"pid\":[\"e8tLWJmsEl\"],\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_skyscrapper_izq\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"203260\",\"zoneId\":\"1002320\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1180763\",\"size\":[[120,600],[120,800]]}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"G0BH1US4W5\",\"supplyType\":\"site\"}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}],\"biddersConfig\":{\"appnexus\":{\"percent\":0},\"smartadserver\":{\"percent\":0},\"rubicon\":{\"percent\":0},\"criteo\":{\"percent\":0},\"pubmatic\":{\"percent\":0},\"ix\":{\"percent\":0},\"ttd\":{\"percent\":0},\"optidigital\":{\"percent\":0},\"richaudience\":{\"percent\":0}},\"overwriteBidderSetting\":[{\"adUnitPath_desktop\":\"\\/4900\\/vocento.xlsemanal\\/\",\"adUnitPath_mobile\":\"\\/4900\\/webm.XLSEMANAL\\/\",\"adUnits_desktop\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,251],[980,90],[980,250],[970,250],[970,90]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_megabanner\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"110047\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495940\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"wD8Sy68YO2\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181513\",\"size\":[[970,250],[970,90],[980,250],[980,90]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109018\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495944\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0570ZFN5y5\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181516\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495946\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181516\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495948\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181518\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495948\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181519\",\"size\":[[300,250],[300,600]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[980,90],[980,250],[970,90],[970,250]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_web_megabanner_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109423\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"296718\",\"zoneId\":\"1495942\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"I5AWj2EogS\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181520\",\"size\":[[970,250],[970,90],[980,250],[980,90],[728,90]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}],\"adUnits_mobile\":[{\"code\":\"megabanner-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[320,50],[320,100]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_megabanner\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507610\",\"pageId\":\"1583909\",\"formatId\":\"110047\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495928\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"wD8Sy68YO2\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181521\",\"size\":[[320,50],[320,100]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"megabanner_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[320,50],[320,100]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_megabanner_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109423\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495930\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":[\"I5AWj2EogS\",\"le4cBaNozA\"],\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181522\",\"size\":[[320,50],[320,100]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109018\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495932\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0570ZFN5y5\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181523\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_dos-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas_dos\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495934\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181524\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_cuatro-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"1583909\",\"formatId\":\"109019\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495934\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0JT1opTxBs\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181526\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]},{\"code\":\"robapaginas_tres-id\",\"mediaTypes\":{\"banner\":{\"sizes\":[[300,250],[300,600]]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"member\":\"10535\"}},{\"bidder\":\"criteo\",\"params\":{\"pubId\":\"929841\",\"networkId\":\"12101\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"XLSEMANAL_mweb_robapaginas_tres\"}},{\"bidder\":\"smartadserver\",\"params\":{\"domain\":\"\\/\\/prg.smartadserver.com\",\"siteId\":\"507609\",\"pageId\":\"507610\",\"formatId\":\"109431\"}},{\"bidder\":\"rubicon\",\"params\":{\"accountId\":\"18554\",\"siteId\":\"287644\",\"zoneId\":\"1495936\"}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"136maNKKSi\",\"supplyType\":\"site\"}},{\"bidder\":\"ix\",\"params\":{\"siteId\":\"1181525\",\"size\":[[300,600],[300,250]]}},{\"bidder\":\"ias\",\"params\":{\"pubId\":\"929841\"}}]}]}],\"hbAmazon\":{\"pubId\":\"3470\",\"adServer\":\"googletag\",\"hb_timeout\":1200,\"timeoutJS\":1400,\"slots_desktop\":[{\"slotID\":\"megabanner-id\",\"slotName\":\"vocento.hoy-megabanner\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_dos-id\",\"slotName\":\"vocento.hoy-megabanner_dos\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_local-id\",\"slotName\":\"vocento.hoy-megabanner_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"robapaginas-id\",\"slotName\":\"vocento.hoy-robapaginas\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos-id\",\"slotName\":\"vocento.hoy-robapaginas_dos\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos_local-id\",\"slotName\":\"vocento.hoy-robapaginas_dos_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_local-id\",\"slotName\":\"vocento.hoy-robapaginas_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres_local-id\",\"slotName\":\"vocento.hoy-robapaginas_tres_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro_local-id\",\"slotName\":\"vocento.hoy-robapaginas_cuatro_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres-id\",\"slotName\":\"vocento.hoy-robapaginas_tres\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"megabanner_tres-id\",\"slotName\":\"vocento.hoy-megabanner_tres\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cuatro-id\",\"slotName\":\"vocento.hoy-megabanner_cuatro\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cinco-id\",\"slotName\":\"vocento.hoy-megabanner_cinco\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_dos_local-id\",\"slotName\":\"vocento.hoy-megabanner_dos_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_tres_local-id\",\"slotName\":\"vocento.hoy-megabanner_tres_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cuatro_local-id\",\"slotName\":\"vocento.hoy-megabanner_cuatro_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"megabanner_cinco_local-id\",\"slotName\":\"vocento.hoy-megabanner_cinco_local\",\"sizes\":[[980,90],[980,250],[970,90],[970,250]]},{\"slotID\":\"robapaginas_cuatro-id\",\"slotName\":\"vocento.hoy-robapaginas_cuatro\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco-id\",\"slotName\":\"vocento.hoy-robapaginas_cinco\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis-id\",\"slotName\":\"vocento.hoy-robapaginas_seis\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete-id\",\"slotName\":\"vocento.hoy-robapaginas_siete\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho-id\",\"slotName\":\"vocento.hoy-robapaginas_ocho\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve-id\",\"slotName\":\"vocento.hoy-robapaginas_nueve\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez-id\",\"slotName\":\"vocento.hoy-robapaginas_diez\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco_local-id\",\"slotName\":\"vocento.hoy-robapaginas_cinco_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis_local-id\",\"slotName\":\"vocento.hoy-robapaginas_seis_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete_local-id\",\"slotName\":\"vocento.hoy-robapaginas_siete_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho_local-id\",\"slotName\":\"vocento.hoy-robapaginas_ocho_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez_local-id\",\"slotName\":\"vocento.hoy-robapaginas_diez_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"skyscraper_der-id\",\"slotName\":\"vocento.hoy-skyscraper_der\",\"sizes\":[[120,600],[120,800]]},{\"slotID\":\"skyscraper_izq-id\",\"slotName\":\"vocento.hoy-skyscraper_izq\",\"sizes\":[[120,600],[120,800]]}],\"slots_mobile\":[{\"slotID\":\"megabanner-id\",\"slotName\":\"webm.HOY-megabanner\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_dos-id\",\"slotName\":\"webm.HOY-megabanner_dos\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"robapaginas-id\",\"slotName\":\"webm.HOY-robapaginas\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos-id\",\"slotName\":\"webm.HOY-robapaginas_dos\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_local-id\",\"slotName\":\"webm.HOY-robapaginas_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_dos_local-id\",\"slotName\":\"webm.HOY-robapaginas_dos_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_tres_local-id\",\"slotName\":\"webm.HOY-robapaginas_tres_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro_local-id\",\"slotName\":\"webm.HOY-robapaginas_cuatro_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"megabanner_tres-id\",\"slotName\":\"webm.HOY-megabanner_tres\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cuatro-id\",\"slotName\":\"webm.HOY-megabanner_cuatro\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cinco-id\",\"slotName\":\"webm.HOY-megabanner_cinco\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_local-id\",\"slotName\":\"webm.HOY-megabanner_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_dos_local-id\",\"slotName\":\"webm.HOY-megabanner_dos_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_tres_local-id\",\"slotName\":\"webm.HOY-megabanner_tres_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cuatro_local-id\",\"slotName\":\"webm.HOY-megabanner_cuatro_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"megabanner_cinco_local-id\",\"slotName\":\"webm.HOY-megabanner_cinco_local\",\"sizes\":[[320,50],[320,100]]},{\"slotID\":\"robapaginas_tres-id\",\"slotName\":\"webm.HOY-robapaginas_tres\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cuatro-id\",\"slotName\":\"webm.HOY-robapaginas_cuatro\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco-id\",\"slotName\":\"webm.HOY-robapaginas_cinco\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis-id\",\"slotName\":\"webm.HOY-robapaginas_seis\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete-id\",\"slotName\":\"webm.HOY-robapaginas_siete\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho-id\",\"slotName\":\"webm.HOY-robapaginas_ocho\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve-id\",\"slotName\":\"webm.HOY-robapaginas_nueve\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez-id\",\"slotName\":\"webm.HOY-robapaginas_diez\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_cinco_local-id\",\"slotName\":\"webm.HOY-robapaginas_cinco_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_seis_local-id\",\"slotName\":\"webm.HOY-robapaginas_seis_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_siete_local-id\",\"slotName\":\"webm.HOY-robapaginas_siete_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_ocho_local-id\",\"slotName\":\"webm.HOY-robapaginas_ocho_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_nueve_local-id\",\"slotName\":\"webm.HOY-robapaginas_nueve_local\",\"sizes\":[[300,250],[300,600]]},{\"slotID\":\"robapaginas_diez_local-id\",\"slotName\":\"webm.HOY-robapaginas_diez_local\",\"sizes\":[[300,250],[300,600]]}],\"initTimeout\":1000}},\"medio\":\"hoy\",\"responsive\":{\"resoluciondesktop\":{\"resolucionMinima\":720,\"resolucionMaxima\":0},\"esResponsive\":true},\"vamConfig\":{\"featureFlag\":{\"enableGlobalPayWallPositions\":[{\"active\":false}],\"permutive\":[\"all\"],\"session\":[\"all\"],\"skins\":{\"Wemass\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"relevo\",\"recetasderechupete\",\"lagacetadesalamanca\"],\"RichAudience\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"relevo\",\"recetasderechupete\",\"lagacetadesalamanca\"]},\"interstitialAd\":[\"mujerhoy\",\"hoy\",\"burgosconecta\",\"diariosur\",\"diariovasco\",\"elcomercio\",\"elcorreo\",\"eldiariomontanes\",\"elnortedecastilla\",\"ideal\",\"larioja\",\"lasprovincias\",\"laverdad\",\"leonoticias\",\"salamancahoy\",\"todoalicante\",\"canarias7\",\"abc\",\"abcdesevilla\",\"lavozdigital\",\"huelva24\",\"recetasderechupete\",\"relevo\",\"lagacetadesalamanca\"],\"logs\":{\"jsonSmart\":[\"all\"]},\"additionalKws\":[{\"name\":\"hoy\",\"kw\":{\"general\":{\"options\":{\"deviceType\":[\"all\"],\"pageType\":[\"noticia\"]},\"kws\":{\"noticia\":\"news2022\"}},\"positions\":{\"megabanner_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}},\"megacintillo_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"megacintillo1200\":1}},\"cintillo_local\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"cintillo1200\":1}},\"megabanner\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}},\"megabanner_dos\":{\"options\":{\"deviceType\":[\"desktop\"],\"pageType\":[\"all\"]},\"kws\":{\"mega1200\":1}}}}}],\"refresh\":[{\"name\":\"hoy\",\"config\":{\"general\":{\"options\":{\"deviceType\":[\"all\"],\"pageType\":[\"all\"]},\"time\":20},\"positions\":{\"megabanner_dos\":{\"time\":15,\"options\":{\"pageType\":[\"all\"],\"deviceType\":[\"mobile\"]}},\"robapaginas_dos\":[],\"robapaginas_tres\":[],\"robapaginas_cuatro\":[],\"robapaginas_cinco\":[],\"robapaginas_seis\":[],\"robapaginas_siete\":[],\"robapaginas_ocho\":[],\"robapaginas_nueve\":[],\"robapaginas_diez\":[],\"robapaginas_once\":[],\"robapaginas_doce\":[],\"megabanner_tres\":[],\"megabanner_cuatro\":[],\"megabanner_cinco\":[],\"megabanner_local\":[],\"megabanner_dos_local\":[],\"megabanner_tres_local\":[],\"megabanner_cuatro_local\":[],\"robapaginas_local\":[],\"robapaginas_dos_local\":[],\"robapaginas_tres_local\":[],\"robapaginas_cuatro_local\":[],\"robapaginas_cinco_local\":[],\"robapaginas_seis_local\":[],\"robapaginas_siete_local\":[],\"robapaginas_ocho_local\":[],\"robapaginas_nueve_local\":[],\"robapaginas_diez_local\":[],\"robapaginas_once_local\":[],\"robapaginas_doce_local\":[]}}}],\"sponsorshipOrders\":[{\"adUnitNameList\":[\"\\/4900\\/vocento.larioja\\/\",\"\\/4900\\/webm.LARIOJA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337745587,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/\",\"\\/4900\\/webm.ABC\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.abc\\/player_video\\/\",\"\\/4900\\/webm.ABC\\/player_video\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337752073,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.xlsemanal\\/\",\"\\/4900\\/webm.XLSEMANAL\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5337799158,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.burgosconecta\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338279116,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lasprovincias\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338542925,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariovasco\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338544866,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.canarias7\\/\",\"\\/4900\\/webm.CANARIAS7\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338545346,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.nortecastilla\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.nortecastilla\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada_resto\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338590949,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/\",\"\\/4900\\/webm.LAVERDAD\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338591327,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.elcorreodigital\\/\",\"\\/4900\\/webm.ELCORREO\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/webm.ELCORREO\\/deportes\\/aupaathletic\\/\",\"\\/4900\\/vocento.elcorreodigital\\/deportes\\/aupaathletic\\/\"],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338591567,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.ideal\\/\",\"\\/4900\\/webm.IDEAL\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338593115,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariosur\\/\",\"\\/4900\\/webm.DIARIOSUR\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338593505,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.hoy\\/\",\"\\/4900\\/webm.HOY\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338895219,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.eldiariomontanes\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338896620,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/Vocento.Leonoticias\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338899797,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.elcomerciodigital\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338906226,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lavozdigital\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":5338913177,\"startTimestamp\":1585692000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.huelva24\\/\",\"\\/4900\\/webm.HUELVA24\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6329317101,\"startTimestamp\":1687168200000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.salamancahoy\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6331508158,\"startTimestamp\":1687168620000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.lagacetadesalamanca\\/\",\"\\/4900\\/webm.LAGACETADESALAMANCA\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6331517902,\"startTimestamp\":1687212000000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.todoalicante\\/\",\"\\/4900\\/webm.TODOALICANTE\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"layer_inpage\"],\"lineItemId\":6332114315,\"startTimestamp\":1687166460000,\"endTimestamp\":1861916340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.canarias7\\/canarias\\/gran-canaria\\/las-palmas-de-gran-canaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/canarias\\/gran-canaria\\/las-palmas-de-gran-canaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":6337635073,\"startTimestamp\":1688421600000,\"endTimestamp\":1798761540000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/sociedad\\/salud\\/\",\"\\/4900\\/vocento.canarias7\\/sociedad\\/c7saludable\\/\",\"\\/4900\\/vocento.canarias7\\/sociedad\\/salud\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/c7-saludable\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/c7saludable\\/\",\"\\/4900\\/webm.CANARIAS7\\/sociedad\\/salud\\/\",\"\\/4900\\/app.CANARIAS7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/app.CANARIAS7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/cbgrancanaria\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/vocento.canarias7\\/deportes\\/udlaspalmas\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/cb-gran-canaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/cbgrancanaria\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/ud-las-palmas\\/\",\"\\/4900\\/webm.CANARIAS7\\/deportes\\/udlaspalmas\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":6464919344,\"startTimestamp\":1704451800000,\"endTimestamp\":1801439940000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/economia\\/\",\"\\/4900\\/vocento.canarias7\\/economia\\/\",\"\\/4900\\/vocento.canarias7\\/economia\\/autonomos\\/\",\"\\/4900\\/webm.CANARIAS7\\/economia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megacintillo_local\"],\"lineItemId\":7018385442,\"startTimestamp\":1750327200000,\"endTimestamp\":1798720395000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\"],\"lineItemId\":7084853022,\"startTimestamp\":1774998000000,\"endTimestamp\":1777586340000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/ciencia\\/portada_b\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\"],\"lineItemId\":7096473767,\"startTimestamp\":1769900400000,\"endTimestamp\":1772319540000},{\"adUnitNameList\":[\"\\/4900\\/app.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/app.CANARIAS7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_dos_local\",\"robapaginas_dos_local_mobile\"],\"lineItemId\":7096677591,\"startTimestamp\":1759269600000,\"endTimestamp\":1790805540000},{\"adUnitNameList\":[\"\\/4900\\/webm.CANARIAS7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/gastronomia-c7\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/vocento.canarias7\\/servicios\\/gastronomia\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/guia-restaurantes\\/\",\"\\/4900\\/webm.CANARIAS7\\/servicios\\/gastronomia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_izq\",\"skyscraper_der\"],\"lineItemId\":7100067725,\"startTimestamp\":1759269600000,\"endTimestamp\":1790805540000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/agricultura\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/agricultura\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200126687,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/banca\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/banca\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200127371,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/formacion\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/formacion\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200128529,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/energia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7200129813,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/tecnologia\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/tecnologia\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202085514,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/asesorias\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/asesorias\\/\",\"\\/4900\\/webm.LAVERDAD\\/AMP\\/quienesquien\\/asesorias\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202085562,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/inmobiliaria\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/inmobiliaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202100436,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/sector\\/industria-agroalimentaria\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/sector\\/industria-agroalimentaria\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202102395,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/turismo\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/turismo\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7202896926,\"startTimestamp\":1769416320000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/suministro\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/suministro\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203614819,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/comercio\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/comercio\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203618458,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/fabricacion\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/fabricacion\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7203619142,\"startTimestamp\":1769382000000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/AMP\\/carnaval\\/\"],\"excludedAdUnitNameList\":[\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada_b\\/\",\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/portada\\/\"],\"customCriteriaList\":[\"robapaginas\"],\"lineItemId\":7203648212,\"startTimestamp\":1769900400000,\"endTimestamp\":1771801140000},{\"adUnitNameList\":[\"\\/4900\\/vocento.laverdad\\/quienesquien\\/cultura\\/\",\"\\/4900\\/webm.LAVERDAD\\/quienesquien\\/cultura\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas_local\"],\"lineItemId\":7206327743,\"startTimestamp\":1769416140000,\"endTimestamp\":1798757940000},{\"adUnitNameList\":[\"\\/4900\\/vocento.diariosur\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/motor\\/\",\"\\/4900\\/vocento.diariovasco\\/motor\\/\",\"\\/4900\\/vocento.eldiariomontanes\\/motor\\/\",\"\\/4900\\/vocento.hoy\\/motor\\/\",\"\\/4900\\/vocento.ideal\\/motor\\/\",\"\\/4900\\/vocento.elcomerciodigital\\/economia\\/motor\\/\",\"\\/4900\\/webm.DIARIOSUR\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/economia\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/motor\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/motor\\/\",\"\\/4900\\/webm.HOY\\/motor\\/\",\"\\/4900\\/webm.IDEAL\\/motor\\/\",\"\\/4900\\/vocento.larioja\\/motor\\/\",\"\\/4900\\/webm.LARIOJA\\/motor\\/\",\"\\/4900\\/vocento.lasprovincias\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/motor\\/\",\"\\/4900\\/Vocento.Leonoticias\\/motor\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/motor\\/\",\"\\/4900\\/vocento.nortecastilla\\/motor\\/\",\"\\/4900\\/vocento.burgosconecta\\/motor\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/motor\\/\",\"\\/4900\\/vocento.laverdad\\/motor\\/\",\"\\/4900\\/vocento.lasprovincias\\/valencia\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/valencia\\/motor\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.LARIOJA\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOSUR\\/AMP\\/motor\\/\",\"\\/4900\\/webm.HOY\\/AMP\\/motor\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/AMP\\/motor\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/motor\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/AMP\\/motor\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/motor\\/\",\"\\/4900\\/webm.IDEAL\\/AMP\\/motor\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/amp\\/motor\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/motor\\/\",\"\\/4900\\/webm.LAVERDAD\\/motor\\/\",\"\\/4900\\/webm.LAVERDAD\\/AMP\\/motor\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/AMP\\/economia\\/motor\\/\",\"\\/4900\\/app.DIARIOMONTANES\\/motor\\/\",\"\\/4900\\/app.LARIOJA\\/motor\\/\",\"\\/4900\\/app.DIARIOSUR\\/motor\\/\",\"\\/4900\\/app.DIARIOVASCO\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/motor\\/\",\"\\/4900\\/app.IDEAL\\/motor\\/\",\"\\/4900\\/vocento.elcomerciodigital\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/bizkaia\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/bizkaia\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/bizkaia\\/motor\\/\",\"\\/4900\\/app.NORTEDECASTILLA\\/motor\\/\",\"\\/4900\\/app.LAVERDAD\\/motor\\/\",\"\\/4900\\/app.LASPROVINCIAS\\/motor\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/AMP\\/alava\\/motor\\/\",\"\\/4900\\/vocento.elcorreodigital\\/alava\\/motor\\/\",\"\\/4900\\/app.ELCORREO\\/alava\\/motor\\/\",\"\\/4900\\/app.HOY\\/motor\\/\",\"\\/4900\\/app.LEONOTICIAS\\/motor\\/\",\"\\/4900\\/app.BURGOSCONECTA\\/motor\\/\",\"\\/4900\\/app.ELCOMERCIO\\/motor\\/\",\"\\/4900\\/vocento.salamancahoy\\/motor\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/motor\\/\",\"\\/4900\\/app.TODOALICANTE\\/motor\\/\",\"\\/4900\\/app.SALAMANCAHOY\\/motor\\/\",\"\\/4900\\/app.ELCOMERCIO\\/economia\\/motor\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/amp\\/motor\\/\",\"\\/4900\\/webm.TODOALICANTE\\/motor\\/\",\"\\/4900\\/vocento.todoalicante\\/motor\\/\",\"\\/4900\\/webm.TODOALICANTE\\/amp\\/motor\\/\",\"\\/4900\\/webm.ELCORREO\\/bizkaia\\/motor\\/\",\"\\/4900\\/webm.LAGACETADESALAMANCA\\/especiales\\/motor\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"megabanner\",\"skyscraper_der\",\"robapaginas\",\"skyscraper_izq\"],\"lineItemId\":7207052338,\"startTimestamp\":1771196400000,\"endTimestamp\":1771801140000},{\"adUnitNameList\":[\"\\/4900\\/app.LAVOZDECADIZ\\/carnaval\\/portada\\/\",\"\\/4900\\/vocento.lavozdigital\\/carnaval\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/carnaval\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"cintillo\"],\"lineItemId\":7213274576,\"startTimestamp\":1770332400000,\"endTimestamp\":1771009200000},{\"adUnitNameList\":[\"\\/4900\\/vocento.abc\\/espana\\/castilla-leon\\/\",\"\\/4900\\/webm.ABC\\/espana\\/castilla-leon\\/\",\"\\/4900\\/app.ABC\\/espana\\/castilla-leon\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"robapaginas\"],\"lineItemId\":7217978383,\"startTimestamp\":1770678000000,\"endTimestamp\":1771109940000},{\"adUnitNameList\":[\"\\/4900\\/webm.ABC\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/portada\\/\",\"\\/4900\\/webm.ABCSEVILLA\\/portada\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/portada\\/\",\"\\/4900\\/webm.DIARIOSUR\\/portada\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/portada\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/portada\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/portada\\/\",\"\\/4900\\/webm.HOY\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.LAVERDAD\\/portada\\/\",\"\\/4900\\/webm.LARIOJA\\/portada\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/portada\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.XLSEMANAL\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/alava\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/almeria\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/jaen\\/portada\\/\",\"\\/4900\\/webm.MUJERHOY\\/portada\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/portada\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/portada\\/\",\"\\/4900\\/webm.HUELVA24\\/portada\\/\",\"\\/4900\\/webm.LAVOZDEAVILES\\/portada\\/\",\"\\/4900\\/webm.surinenglish\\/portada\\/\",\"\\/4900\\/webm.TODOALICANTE\\/portada\\/\",\"\\/4900\\/webm.WELIFE\\/portada\\/\",\"\\/4900\\/webm.SURDEUTSCH\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"patrocinio1\"],\"lineItemId\":7218256494,\"startTimestamp\":1771138800000,\"endTimestamp\":1771228800000},{\"adUnitNameList\":[\"\\/4900\\/vocento.xlsemanal\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[],\"lineItemId\":7220127097,\"startTimestamp\":1770822300000,\"endTimestamp\":1771228800000},{\"adUnitNameList\":[\"\\/4900\\/webm.ABC\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/portada\\/\",\"\\/4900\\/webm.ABCSEVILLA\\/portada\\/\",\"\\/4900\\/webm.DIARIOMONTANES\\/portada\\/\",\"\\/4900\\/webm.DIARIOSUR\\/portada\\/\",\"\\/4900\\/webm.LASPROVINCIAS\\/portada\\/\",\"\\/4900\\/webm.ELCOMERCIO\\/portada\\/\",\"\\/4900\\/webm.DIARIOVASCO\\/portada\\/\",\"\\/4900\\/webm.HOY\\/portada\\/\",\"\\/4900\\/webm.NORTEDECASTILLA\\/portada\\/\",\"\\/4900\\/webm.LAVERDAD\\/portada\\/\",\"\\/4900\\/webm.LARIOJA\\/portada\\/\",\"\\/4900\\/webm.LEONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.LAVOZDECADIZ\\/portada\\/\",\"\\/4900\\/webm.ELBIERZONOTICIAS\\/portada\\/\",\"\\/4900\\/webm.XLSEMANAL\\/portada\\/\",\"\\/4900\\/webm.ELCORREO\\/alava\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/almeria\\/portada\\/\",\"\\/4900\\/webm.IDEAL\\/jaen\\/portada\\/\",\"\\/4900\\/webm.MUJERHOY\\/portada\\/\",\"\\/4900\\/webm.BURGOSCONECTA\\/portada\\/\",\"\\/4900\\/webm.SALAMANCAHOY\\/portada\\/\",\"\\/4900\\/webm.HUELVA24\\/portada\\/\",\"\\/4900\\/webm.LAVOZDEAVILES\\/portada\\/\",\"\\/4900\\/webm.surinenglish\\/portada\\/\",\"\\/4900\\/webm.TODOALICANTE\\/portada\\/\",\"\\/4900\\/webm.WELIFE\\/portada\\/\",\"\\/4900\\/webm.SURDEUTSCH\\/portada\\/\"],\"excludedAdUnitNameList\":[],\"customCriteriaList\":[\"patrocinio2\"],\"lineItemId\":7221290824,\"startTimestamp\":1771228800000,\"endTimestamp\":1771315200000}]}},\"uniqueCampaigns\":{\"media\":\"hoy\",\"schedules\":[{\"lineItemId\":7049418883,\"since\":1848607200000,\"until\":1848693540000},{\"lineItemId\":7193630520,\"since\":1768950000000,\"until\":1769036399000},{\"lineItemId\":7197244700,\"since\":1768863600000,\"until\":1768949999000},{\"lineItemId\":7196484607,\"since\":1769036400000,\"until\":1769122799000},{\"lineItemId\":7194847362,\"since\":1769209200000,\"until\":1769295599000},{\"lineItemId\":7194946794,\"since\":1768777200000,\"until\":1768863599000},{\"lineItemId\":7187914798,\"since\":1768690800000,\"until\":1768777199000},{\"lineItemId\":7199658618,\"since\":1769122800000,\"until\":1769209199000},{\"lineItemId\":7200190059,\"since\":1769382000000,\"until\":1769468399000},{\"lineItemId\":7200242067,\"since\":1769468400000,\"until\":1769554799000},{\"lineItemId\":7205078098,\"since\":1770159600000,\"until\":1770245999000},{\"lineItemId\":7206576170,\"since\":1770246000000,\"until\":1770332399000},{\"lineItemId\":7207544144,\"since\":1769727600000,\"until\":1769813999000},{\"lineItemId\":7204206465,\"since\":1769641200000,\"until\":1769727599000},{\"lineItemId\":7205027640,\"since\":1770418800000,\"until\":1770505199000},{\"lineItemId\":7210414209,\"since\":1770332400000,\"until\":1770418799000},{\"lineItemId\":7213276782,\"since\":1772060400000,\"until\":1772146799000}],\"type\":\"auto\"},\"enablePayWallPositions\":false,\"posicion_desktop\":{\"boton_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_diez_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_doble_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,250],[300,90]]\"},\"boton_doble_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_ocho_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_seis_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doble_siete_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,250],[300,90]]\"},\"boton_doble_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,90]]\"},\"boton_doce_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_dos\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100],[300,200]]\"},\"boton_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_lomas\":{\"outofpage\":false,\"dimensiones\":\"[[300,50]]\"},\"boton_native\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_data\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[300,250]]\"},\"boton_native_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[300,250]]\"},\"boton_native_extra\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_liga\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_local\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_native_terraza\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_terraza_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_native_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"boton_nueve_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_ocho_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_once_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_seis_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_siete_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_terraza_universal\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_dos\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_terraza_universal_tres\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\",[320,300]]\"},\"boton_trece_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_tres\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,60]]\"},\"boton_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_uno\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"boton_uno_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,100]]\"},\"cintillo_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[660,60],[980,60]]\"},\"cintillo_local\":{\"outofpage\":false,\"dimensiones\":\"[[660,60],[800,60]]\"},\"inimage\":{\"outofpage\":true},\"interstitial\":{\"outofpage\":false,\"dimensiones\":\"[]\"},\"inter_adwall\":{\"outofpage\":true},\"inter_externo\":{\"outofpage\":false,\"dimensiones\":\"[[1,1]]\"},\"layer_inpage\":{\"outofpage\":true},\"megabanner\":{\"outofpage\":false,\"dimensiones\":\"[[728,90],[980,90],[970,250],[980,250],[1200,250],[1200,90],[980,251]]\"},\"megabanner_cinco\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_dos\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megabanner_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[980,90]]\"},\"megabanner_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90]]\"},\"megabanner_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_seis\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,250],[970,90],[1200,250],[1200,90]]\"},\"megabanner_tres\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[1200,250],[1200,90],[970,250],[970,90]]\"},\"megabanner_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,250],[980,90],[728,90],[970,90],[970,250],[1200,250],[1200,90]]\"},\"megacintillo_local\":{\"outofpage\":false,\"dimensiones\":\"[[980,60],[1200,60]]\"},\"noticia_patrocinada\":{\"outofpage\":false,\"dimensiones\":\"[\\\"fluid\\\"]\"},\"patrocinio1\":{\"outofpage\":true},\"patrocinio2\":{\"outofpage\":true},\"patrocinio3\":{\"outofpage\":true},\"promociones\":{\"outofpage\":false,\"dimensiones\":\"[[300,130]]\"},\"robapaginas\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cinco\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cinco_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_cinco_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_combinado_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,250]]\"},\"robapaginas_combinado_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,250]]\"},\"robapaginas_cuatro\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_cuatro_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_cuatro_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_diez\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_diez_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_doce\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_doce_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_dos\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_dos_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_dos_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_inread\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_nueve\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_nueve_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[320,300],[300,250]]\"},\"robapaginas_ocho\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_ocho_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_once\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_once_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_seis\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_seis_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_siete\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_siete_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"robapaginas_tres\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,250]]\"},\"robapaginas_tres_hiperlocal\":{\"outofpage\":false,\"dimensiones\":\"[[300,300],[300,250]]\"},\"robapaginas_tres_local\":{\"outofpage\":false,\"dimensiones\":\"[[300,600],[300,300],[300,250]]\"},\"seed_tag\":{\"outofpage\":true},\"skyscraper_der\":{\"outofpage\":false,\"dimensiones\":\"[[120,801],[120,800],[120,600],[450,1001]]\"},\"skyscraper_izq\":{\"outofpage\":false,\"dimensiones\":\"[[120,802],[120,800],[120,600],[450,1000]]\"}},\"version\":\"1.4\",\"adServer\":\"gam\"},
    options: {\"lastUpdate\":\"2026-02-12 16:00:06\",\"lastUser\":\"cron\",\"multimedia\":{\"formatId\":{\"prerolls\":117644,\"postrolls\":117646},\"ads\":{\"prerolls\":1,\"postrolls\":1},\"hb\":{\"enable\":true,\"adUnits\":{\"desktop\":[{\"code\":\"preroll\",\"mediaTypes\":{\"video\":{\"context\":\"instream\",\"playerSize\":[640,480]}},\"bids\":[{\"bidder\":\"exte\",\"params\":{\"pid\":\"s4Zer3hcRn\",\"supplyType\":\"video\"}},{\"bidder\":\"appnexus\",\"params\":{\"placementId\":18208847,\"video\":{\"skippable\":true,\"playback_methods\":[\"auto_play_sound_off\"]}}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"17vHcrZfeO\",\"supplyType\":\"video\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_preroll\"}}]},{\"code\":\"postroll\",\"mediaTypes\":{\"video\":{\"context\":\"instream\",\"playerSize\":[640,480],\"mimes\":[\"video\\/mp4\"]}},\"bids\":[{\"bidder\":\"appnexus\",\"params\":{\"placementId\":18208848,\"video\":{\"skippable\":true,\"playback_methods\":[\"auto_play_sound_off\"]}}},{\"bidder\":\"richaudience\",\"params\":{\"pid\":\"0uZnKuFwgY\",\"supplyType\":\"site\"}},{\"bidder\":\"pubmatic\",\"params\":{\"publisherId\":\"164388\",\"adSlot\":\"HOY_web_postroll\"}}]}]}}},\"OAS\":{\"desktop\":{\"portada\":\"\\/4900\\/vocento.hoy\\/badajoz\\/portada\",\"noticia\":\"\\/4900\\/vocento.hoy\\/badajoz\",\"galeria\":\"\\/4900\\/vocento.hoy\\/badajoz\\/galerias\",\"video\":\"\\/4900\\/vocento.hoy\\/badajoz\"}},\"posicion_desktop\":{\"layer_inpage\":{\"desactivadoen\":[\"portada\",\"galeria\",\"video\"]},\"megabanner\":[],\"megabanner_dos\":[],\"megabanner_local\":[],\"megabanner_tres\":[],\"robapaginas\":[],\"robapaginas_cuatro_local\":[],\"robapaginas_dos\":[],\"robapaginas_dos_local\":[],\"robapaginas_local\":[],\"robapaginas_tres\":[],\"robapaginas_tres_local\":{\"offset\":\"200\"},\"patrocinio1\":[],\"skyscraper_der\":[],\"skyscraper_izq\":[],\"boton_native\":[],\"boton_native_dos\":[],\"boton_native_tres\":[],\"boton_native_cuatro\":[],\"patrocinio2\":[],\"boton_diez_hiperlocal\":[],\"boton_dos_local\":[],\"megacintillo_local\":[],\"promociones\":{\"desactivadoen\":[\"portada\",\"galeria\",\"video\"]},\"megabanner_dos_local\":[],\"megabanner_tres_local\":[],\"boton_native_extra\":[],\"inter_externo\":[],\"inter_adwall\":[],\"inimage\":[]},\"priorizadas\":{\"desktop\":[\"megabanner\",\"megabanner_local\",\"skyscraper_izq\",\"skyscraper_der\",\"robapaginas\",\"robapaginas_local\",\"cintillo_local\",\"layer_inpage\",\"robapaginas_cuatro_local\",\"boton_local\",\"patrocinio1\",\"boton_native\",\"boton_native_data\",\"boton_trece_hiperlocal\",\"boton_cinco_local\",\"boton_cuatro_local\",\"boton_dos_local\",\"boton_native_local\",\"boton_seis_local\",\"boton_tres_local\",\"boton_uno_local\",\"megacintillo_local\",\"robapaginas_combinado_dos_local\",\"robapaginas_combinado_local\",\"promociones\",\"boton_lomas\",\"seed_tag\"]},\"retrasadas\":{\"desktop\":[\"megabanner_dos\",\"megabanner_tres\",\"robapaginas_dos\",\"robapaginas_dos_local\",\"robapaginas_tres\",\"robapaginas_tres_local\",\"boton_native_dos\",\"boton_native_tres\",\"boton_native_cuatro\",\"boton_doble_hiperlocal\",\"boton_doble_cinco_hiperlocal\",\"boton_doble_cuatro_hiperlocal\",\"boton_doble_dos_hiperlocal\",\"boton_doble_ocho_hiperlocal\",\"boton_doble_seis_hiperlocal\",\"boton_doble_siete_hiperlocal\",\"boton_doble_tres_hiperlocal\",\"boton_hiperlocal\",\"boton_cinco_hiperlocal\",\"boton_cuatro_hiperlocal\",\"boton_diez_hiperlocal\",\"boton_doce_hiperlocal\",\"boton_dos_hiperlocal\",\"boton_nueve_hiperlocal\",\"boton_ocho_hiperlocal\",\"boton_once_hiperlocal\",\"boton_seis_hiperlocal\",\"boton_siete_hiperlocal\",\"boton_tres_hiperlocal\",\"cintillo_hiperlocal\",\"megabanner_dos_hiperlocal\",\"robapaginas_cinco_hiperlocal\",\"robapaginas_cuatro_hiperlocal\",\"robapaginas_dos_hiperlocal\",\"robapaginas_hiperlocal\",\"robapaginas_tres_hiperlocal\",\"megabanner_dos_local\",\"megabanner_tres_local\"]},\"version\":\"1.4\"},
    smart_enabled: false
  };
</script>

    {%- block js %}
  <!-- block js -->
  <!-- endblock js -->
  {% endblock js %}  
      {%- block tracking %}
   
  <!-- block tracking -->
  <link rel=\"dns-prefetch\" href=\"//www.googletagmanager.com\" />
    <!-- endblock tracking -->
  
       {% endblock tracking %}
  
{%- block advertising %}<!-- block advertising --><!-- endblock advertising -->{% endblock advertising %}    <link rel=\"icon\" href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon.ico\"/>
    <link rel=\"shortcut icon\" href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon.ico\"
          type=\"image/x-icon\"/>
    <link rel=\"apple-touch-icon\" sizes=\"57x57\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-57x57.png\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-60x60.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\"
          href=\"https://s1.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-76x76.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-120x120.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-144x144.png\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-152x152.png\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/apple-touch-icon-180x180.png\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-16x16.png\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-32x32.png\" sizes=\"32x32\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/favicon-96x96.png\" sizes=\"96x96\">
    <link rel=\"icon\" type=\"image/png\"
          href=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/android-chrome-192x192.png\"
          sizes=\"192x192\">
    <meta name=\"msapplication-square70x70logo\"
          content=\"https://s2.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/smalltile.png\"/>
    <meta name=\"msapplication-square150x150logo\"
          content=\"https://s1.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/mediumtile.png\"/>
    <meta name=\"msapplication-wide310x150logo\"
          content=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/widetile.png\"/>
    <meta name=\"msapplication-square310x310logo\"
          content=\"https://s3.ppllstatics.com/starfish/latest/assets/images/favicon/hoy/largetile.png\"/>

<script type=\"text/javascript\" src=\"//static.vocstatic.com/widgets/4.30.2/accessctrl.js\"> </script>
  
</head>
<body class=\"hoy \"   data-frontal-libraries-loader
  {% block bodyAttr %}{% endblock bodyAttr %}
 data-voc-component=\"close-modal-event-window\">
  
      {%- block noscripttracking %}
  
  <!-- block noscripttracking -->
    <!-- endblock noscripttracking -->
  
       {% endblock noscripttracking %}
  
{%- block megabanner %}<!-- block megabanner --><!-- endblock megabanner -->{% endblock megabanner %}    <header class=\"v-h   v-h--s
\" data-voc-component=\"header\">  
  
      {%- block header %}
        
            <!-- block header -->
                

<div class=\"v-h__c\">
  <div class=\"v-h__g\">
    <div class=\"v-h__w v-h__w--2\">
      <div class=\"v-h__sub-c v-c\" data-mrf-recirculation=\"Apertura\">
        



<div class=\"v-h__sub-w v-h__sub-w--2\">
    
  
  <a class=\"v-h__logo-link\" href=\"https://www.hoy.es\" title=\"HOY - Diario con noticias y última hora de Extremadura\" data-mrf-link=\"https://www.hoy.es\">
    <img class=\"v-h__logo-img\" width=\"494\" height=\"48\" src=\"https://s1.ppllstatics.com/starfish/latest/assets/images/logos/logo-hoy.svg\" alt=\"HOY - Diario con noticias y última hora de Extremadura\">
    
  </a>
  
      
  </div>
        





  

<div class=\"v-h__sub-w v-h__sub-w--3\">
    <nav class=\"v-h__n v-h__n--1\" data-voc-profile>
                  <div class=\"v-h__btn v-h__btn--1\" hidden data-voc-profile-suscriber-button >
        <div class=\"v-slc v-slc--t2 v-slc--r \" >
          
                              <a class=\"v-slc__b v-btn v-btn-g v-btn-g--t1 v-btn--m\" href=\"https://secure.hoy.es/suscripcion#vca=suscribete&amp;vso=hoy&amp;vmc=on&amp;vli=cabecera\" data-mrf-link=\"https://secure.hoy.es/suscripcion#vca=suscribete&amp;vso=hoy&amp;vmc=on&amp;vli=cabecera\">                  <span class=\"v-slc__t\" >
                Suscríbete
              </span>
                </a>
              

                            </div>
      </div>
            <div class=\"v-h__btn v-h__btn--2\" hidden data-voc-profile-menu>
        <div class=\"v-drw v-drw--t5\" data-voc-component=\"dropdown\">
          <div class=\"v-drw__b-c \">
            <a class=\"v-drw__a\" href=\"https://areapersonal.hoy.es/gestion/mi-cuenta.html\" title=\"Área personal\">
               <span class=\"v-drw__b-i\">
                  <img class=\"v-drw__img\"
                       src=\"//s1.ppllstatics.com/starfish/latest/assets/images/placeholders/user-placeholder.png\"
                       alt=\"imagen perfil usuario\" data-voc-profile-img-menu>
               </span>
              <span class=\"v-drw__b-t\" data-voc-profile-name>Usuario</span>
            </a>
            <button class=\"v-drw__b \">
              <span class=\"v-a-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
                    <path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\"
                          transform=\"translate(0 14) rotate(-90)\"></path>
                 </svg>
              </span>
            </button>
          </div>
          <div class=\"v-drw__c \">
            <div class=\"v-drw__sub-c\">
              <div class=\"v-drw__h\">
                <button class=\"v-x\">
                   <span class=\"v-i\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.996\" viewBox=\"0 0 24 23.996\">
                         <path data-name=\"Unión 29\" d=\"M12,14.03,2.031,24,0,21.963,9.968,12,0,2.033,2.031,0,12,9.966,21.969,0,24,2.033,14.032,12,24,21.963,21.969,24Z\"></path>
                      </svg>
                   </span>
                </button>
              </div>
              <div class=\"v-drw__w\">
                <div class=\"v-h-u\">
                  <div class=\"v-h-u__c\">
                    <figure class=\"v-h-u__img-c\">
                      <img class=\"v-h-u__img\" src=\"//s1.ppllstatics.com/starfish/latest/assets/images/placeholders/user-placeholder.png\" alt=\"imagen perfil usuario\" data-voc-profile-img-button>
                    </figure>
                    <p class=\"v-h-u__p v-h-u__p--1\" data-voc-profile-full-name></p>
                    <p class=\"v-h-u__p v-h-u__p--2\" data-voc-profile-mail></p>
                  </div>
                  <div class=\"v-u-c v-u-c--1\">
                    <ul class=\"v-u v-u--t1\">
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://www.hoy.es/mi-seccion/\" title=\"MiHOY\" data-mrf-link=\"https://www.hoy.es/mi-seccion/\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23.998\" height=\"24\" viewBox=\"0 0 23.998 24\">
                                      <path data-name=\"Unión 84\" d=\"M10.5,22.5l13.5-9V15L10.5,24ZM0,18V16.5l10.5,6V24Zm10.5,1.5,13.5-9V12L10.5,21ZM0,15V13.5l10.5,6V21Zm10.5,1.5L24,7.5V9L10.5,18ZM0,12V10.5l10.5,6V18Zm10.5,1.5L24,4.5V6L10.5,15ZM0,9V7.5l10.5,6V15ZM0,7.5,13.5,0,24,4.5l-13.5,9Z\" transform=\"translate(-0.002 0)\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">MiHOY</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                            <li class=\"v-u__l\">
                        <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/favoritos.html\" title=\"Mis noticias\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/favoritos.html\">
                              <span class=\"v-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
                                    <path data-name=\"Trazado 1617\" d=\"M2585,856h18v24l-9-7.5-9,7.5Z\" transform=\"translate(-2585 -856)\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Mis noticias</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://www.hoy.es/mi-seccion/?openInterests=true\" title=\"Mis intereses\" data-mrf-link=\"https://www.hoy.es/mi-seccion/?openInterests=true\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"21\" viewBox=\"0 0 24 21\">
                                      <path data-name=\"211755_heart_icon\" d=\"M81.3,83A6.745,6.745,0,0,0,76,85.537,6.745,6.745,0,0,0,70.7,83,6.627,6.627,0,0,0,64,89.537a6.426,6.426,0,0,0,1.869,4.528l9.45,9.268L76,104l.681-.668L85.95,94.24a6.41,6.41,0,0,0,2.05-4.7A6.627,6.627,0,0,0,81.3,83Z\" transform=\"translate(-64 -83)\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Mis intereses</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                        <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/newsletters.html\" title=\"Newsletters\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.999\" viewBox=\"0 0 24 23.999\">
                                      <path data-name=\"Unión 54\" d=\"M24,24H0V10.5l12,9,12-9V24h0ZM12.036,18,4.5,12.475V3h15v9.476L12.038,18ZM7.5,12h9V10.5h-9Zm0-4.5h9V6h-9ZM21,11.247V6.75L24,9l-3,2.248h0Zm-18,0L0,9,3,6.75v4.5ZM14,1.5H10L12,0l2,1.5,0,0Z\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Newsletters</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                          </ul>
                  </div>
                                      <div class=\"v-u-c v-u-c--2\">
                      <ul class=\"v-u v-u--t1\">
                        <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/compras-suscripciones\" title=\"Mi suscripción\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/compras-suscripciones\">
                            <span class=\"v-i\">
                              <div class=\"v-op\">
                                <p class=\"v-op__c\">
                                    <span class=\"v-op__i\">
                                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                        <path id=\"background\" d=\"M21,0H3A3,3,0,0,0,0,3V21a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V3a3,3,0,0,0-3-3\" fill=\"#000000\"></path>
                                        <path id=\"cross\" d=\"M28,18.286H21.714V12H18.286v6.286H12v3.429h6.286V28h3.429V21.714H28Z\" transform=\"translate(-8 -8)\" fill=\"#fff\"></path>
                                        <rect id=\"Rectángulo_4632\" data-name=\"Rectángulo 4632\" width=\"24\" height=\"24\" fill=\"none\"></rect>
                                      </svg>
                                    </span>
                                </p>
                              </div>
                            </span>
                            <p class=\"v-p\">Mi suscripción</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                                    <div class=\"v-u-c v-u-c--3\">
                    <ul class=\"v-u v-u--t1\">
                      <li class=\"v-u__l\">
                        <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/datos-personales.html\" title=\"Mi cuenta\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/datos-personales.html\">
                              <span class=\"v-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
                                    <path data-name=\"Unión 41\" d=\"M0,24V21a9,9,0,0,1,18,0v3ZM3.752,5.252A5.248,5.248,0,1,1,9,10.5,5.249,5.249,0,0,1,3.752,5.252Z\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Mi cuenta</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                                              <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/dispositivos.html\" title=\"Mis dispositivos\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/dispositivos.html\">
                                <span class=\"v-i\">
                                   <svg id=\"icon-divices\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"18.004\" viewBox=\"0 0 24 18.004\">
                                      <path id=\"Unión_93\" data-name=\"Unión 93\" d=\"M-11454,911V896h9v15Zm3-1.5h3V908h-3Zm-1.5-3h6V897.5h-6ZM-11469,911v-3h3V894.5h1.5V908h9v3Zm6-4.5V896h7.5v10.5Zm-3-12V893h19.5v1.5Z\" transform=\"translate(11469 -892.999)\" fill=\"#202020\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">Mis dispositivos</p>
                            <span class=\"v-a-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                      <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                   </svg>
                                </span>
                          </a>
                        </li>
                                                                                          <li class=\"v-u__l\">
                          <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/gestion/contacto.html\" title=\"Ayuda / Contacto\" data-mrf-link=\"https://areapersonal.hoy.es/gestion/contacto.html\">
                            <span class=\"v-i\">
                               <svg id=\"icon-help-desk\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.998\" viewBox=\"0 0 24 23.998\">
                                  <path id=\"Exclusión_40\" data-name=\"Exclusión 40\" d=\"M-11445,950l0,0-4.494-4.5h-13.5v-3h15V932h3v18Zm-24-6v0l0-4.5V926h18v13.5h-13.5l-4.5,4.5Z\" transform=\"translate(11469.001 -925.999)\" fill=\"#202020\"></path>
                               </svg>
                            </span>
                            <p class=\"v-p\">Ayuda / Contacto</p>
                            <span class=\"v-a-i\">
                               <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                  <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                               </svg>
                            </span>
                          </a>
                        </li>
                                          </ul>
                  </div>
                                    <div class=\"v-u-c v-u-c--4\">
                    <ul class=\"v-u v-u--t1\">
                        <li class=\"v-u__l\">
                                                    <a class=\"v-u__a\" href=\"https://areapersonal.hoy.es/servicios/mi-club.html\" title=\"El Club\" data-mrf-link=\"https://areapersonal.hoy.es/servicios/mi-club.html\">
                                <span class=\"v-i\">
                                   <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"18\" viewBox=\"0 0 24 18\">
                                      <path data-name=\"Exclusión 42\" d=\"M7.5,18H0V10.5H6l-3,3L4.5,15l3-3v6ZM24,18H10.5V12l3,3L15,13.5l-3-3H24V18ZM3.4,7.5h0L0,7.5V0H7.5V3.4A3,3,0,0,0,3.4,7.5ZM24,7.5H14.6a3,3,0,0,0-4.1-4.1V0H24V7.5Zm-12,0A1.5,1.5,0,1,1,13.5,6,1.5,1.5,0,0,1,12,7.5Zm-6,0A1.5,1.5,0,1,1,7.5,6,1.5,1.5,0,0,1,6,7.5Z\"></path>
                                   </svg>
                                </span>
                            <p class=\"v-p\">El Club</p>
                            <span class=\"v-a-i\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\"><path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path></svg></span>
                          </a>
                        </li>
                    </ul>
                  </div>
                                    <div class=\"v-u-c v-u-c--5\">
                    <ul class=\"v-u v-u--t1\">
                      <li class=\"v-u__l\">
                        <a class=\"v-u__a gigya-logout-link\" href=\"#\" title=\"Cerrar sesión\" data-mrf-link=\"https://www.hoy.es/api/v2/headers/skeleton.twig\">
                              <span class=\"v-i\">
                                 <svg id=\"icon-logout\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                                    <path id=\"Unión_96\" data-name=\"Unión 96\" d=\"M-11428,918v-3h12V897h-12v-3h15v24Zm0-10.5H-11437v-3h8.994V900l7.506,6-7.506,6Z\" transform=\"translate(11437 -894.001)\" fill=\"#202020\"></path>
                                 </svg>
                              </span>
                          <p class=\"v-p\">Cerrar sesión</p>
                          <span class=\"v-a-i\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
                                    <path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
                                 </svg>
                              </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

            <div class=\"v-h__btn v-h__btn--3\" id=\"btnUserContainer\" data-voc-profile-login>
        <a class=\"v-btn v-btn-i v-btn-i--l v-btn--m\" href=\"https://secure.hoy.es/identidad/inicio\" aria-label=\"boton-area-usuario\" data-mrf-link=\"https://secure.hoy.es/identidad/inicio\">
          <span class=\"v-i\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"24\" viewBox=\"0 0 18 24\">
              <path data-name=\"Unión 41\" d=\"M0,24V21a9,9,0,0,1,18,0v3ZM3.752,5.252A5.248,5.248,0,1,1,9,10.5,5.249,5.249,0,0,1,3.752,5.252Z\"></path>
            </svg>
          </span>
          <span class=\"v-btn__t\">Iniciar sesión</span>
        </a>
      </div>
          </nav>
</div>
                <div class=\"v-h__sub-w v-h__sub-w--5\">
    <button class=\"v-h__search\">
                   <span class=\"v-i\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                         <path data-name=\"Unión 28\" d=\"M17.153,19.321A10.728,10.728,0,0,1,3.143,3.143a10.728,10.728,0,0,1,16.178,14.01L24,21.833,21.832,24ZM3.065,10.731a7.665,7.665,0,1,0,7.664-7.664A7.673,7.673,0,0,0,3.065,10.731Z\"></path>
                      </svg>
                   </span>
    <p class=\"v-h__search-t\">Buscar en Hoy</p>
  </button>
</div>
        <div class=\"v-h__sub-w v-h__sub-w--7\">
  <div class=\"v-h__mh\">
    <button class=\"v-h__mh-btn\" aria-label=\"boton-menu\">
      <span class=\"v-h__mh-t\">Menú</span>
      <span class=\"v-h__mh-l-c\">
         <span class=\"v-h__mh-l v-h__mh-l--1\"></span>
         <span class=\"v-h__mh-l v-h__mh-l--2\"></span>
         <span class=\"v-h__mh-l v-h__mh-l--3\"></span>
      </span>
    </button>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class=\"v-h-mg-m\">
<div class=\"v-h-mg-m__c v-h-mg-m__c--1 v-c\">
</div>
<div class=\"v-h-mg-m__c v-h-mg-m__c--2 v-c\">
<div class=\"v-h-mg-m__w v-h-mg-m__w--1\">
<header class=\"v-cnt-m v-cnt-m--xs \">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Secciones
</p>
</div>
</div>
</header>
<div class=\"v-h-mg-m__list-c v-clp-xs-14\" data-voc-component=\"show-more\">
<ul class=\"v-h-mg-m__list v-clp__w\">
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/\" target=\"_self\" title=\"Portada\" data-mrf-link=\"http://www.hoy.es/\">
Portada
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/extremadura/\" class=\"v-drw__b-t\" title=\"Extremadura\" data-mrf-link=\"http://www.hoy.es/extremadura/\">Extremadura</a>
<button class=\"v-acc__b\" aria-label=\"Extremadura\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/elecciones/extremadura/\"
target=\"_self\" title=\"Elecciones en Extremadura\"
data-mrf-link=\"http://www.hoy.es/elecciones/extremadura/\">
Elecciones en Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/elecciones/extremadura/resultados/\"
target=\"_self\" title=\"Resultados Elecciones Extremadura\"
data-mrf-link=\"https://www.hoy.es/elecciones/extremadura/resultados/\">
Resultados Elecciones Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremadura/semana-santa/\"
target=\"_self\" title=\"Semana Santa en Extremadura\"
data-mrf-link=\"http://www.hoy.es/extremadura/semana-santa/\">
Semana Santa en Extremadura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremenos-de-hoy/\"
target=\"_self\" title=\"Premios Extremeños de HOY\"
data-mrf-link=\"http://www.hoy.es/extremenos-de-hoy/\">
Premios Extremeños de HOY
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/extremadura/cronica-negra/\"
target=\"_self\" title=\"Crónica Negra\"
data-mrf-link=\"http://www.hoy.es/extremadura/cronica-negra/\">
Crónica Negra
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/badajoz/\" class=\"v-drw__b-t\" title=\"Badajoz\" data-mrf-link=\"http://www.hoy.es/badajoz/\">Badajoz</a>
<button class=\"v-acc__b\" aria-label=\"Badajoz\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/carnaval/\"
target=\"_self\" title=\"Carnaval de Badajoz\"
data-mrf-link=\"http://www.hoy.es/carnaval/\">
Carnaval de Badajoz
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/prov-badajoz/\"
target=\"_self\" title=\"Provincia de Badajoz\"
data-mrf-link=\"http://www.hoy.es/prov-badajoz/\">
Provincia de Badajoz
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://donbenito.hoy.es\"
target=\"_self\" title=\"Don Benito\"
data-mrf-link=\"https://donbenito.hoy.es\">
Don Benito
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://villanueva.hoy.es\"
target=\"_self\" title=\"Villanueva de la Serena\"
data-mrf-link=\"https://villanueva.hoy.es\">
Villanueva de la Serena
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://almendralejo.hoy.es\"
target=\"_self\" title=\"Almendralejo\"
data-mrf-link=\"https://almendralejo.hoy.es\">
Almendralejo
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/caceres/\" class=\"v-drw__b-t\" title=\"Cáceres\" data-mrf-link=\"http://www.hoy.es/caceres/\">Cáceres</a>
<button class=\"v-acc__b\" aria-label=\"Cáceres\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/prov-caceres/\"
target=\"_self\" title=\"Provincia de Cáceres\"
data-mrf-link=\"http://www.hoy.es/prov-caceres/\">
Provincia de Cáceres
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://navalmoral.hoy.es/\"
target=\"_self\" title=\"Navalmoral de la Mata\"
data-mrf-link=\"https://navalmoral.hoy.es/\">
Navalmoral de la Mata
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://coria.hoy.es/\"
target=\"_blank\" title=\"Coria\"
data-mrf-link=\"https://coria.hoy.es/\">
Coria
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://trujillo.hoy.es/\"
target=\"_blank\" title=\"Trujillo\"
data-mrf-link=\"https://trujillo.hoy.es/\">
Trujillo
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/merida/\" target=\"_self\" title=\"Mérida\" data-mrf-link=\"http://www.hoy.es/merida/\">
Mérida
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/plasencia/\" target=\"_self\" title=\"Plasencia\" data-mrf-link=\"http://www.hoy.es/plasencia/\">
Plasencia
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/opinion/\" target=\"_self\" title=\"Opinión\" data-mrf-link=\"http://www.hoy.es/opinion/\">
Opinión
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/extremadura/hiperlocales/\" target=\"_self\" title=\"Hiperlocales\" data-mrf-link=\"http://www.hoy.es/extremadura/hiperlocales/\">
Hiperlocales
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/nacional/\" target=\"_self\" title=\"España\" data-mrf-link=\"http://www.hoy.es/nacional/\">
España
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/internacional/\" target=\"_self\" title=\"Internacional\" data-mrf-link=\"http://www.hoy.es/internacional/\">
Mundo
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/economia/\" target=\"_self\" title=\"Economía\" data-mrf-link=\"http://www.hoy.es/economia/\">
Economía
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/planes/\" class=\"v-drw__b-t\" title=\"Planes\" data-mrf-link=\"http://www.hoy.es/planes/\">Planes</a>
<button class=\"v-acc__b\" aria-label=\"Planes\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-musicales.html\"
target=\"_self\" title=\"Música\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-musicales.html\">
Música
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-teatrales.html\"
target=\"_self\" title=\"Teatro\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-teatrales.html\">
Teatro
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-literarios.html\"
target=\"_self\" title=\"Literatura\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-literarios.html\">
Literatura
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-deportivos.html\"
target=\"_self\" title=\"Deporte\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-deportivos.html\">
Deporte
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"https://www.hoy.es/temas/generales/planes-gastronomicos.html\"
target=\"_self\" title=\"Gastronomía\"
data-mrf-link=\"https://www.hoy.es/temas/generales/planes-gastronomicos.html\">
Gastronomía
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/culturas/\" class=\"v-drw__b-t\" title=\"Culturas\" data-mrf-link=\"http://www.hoy.es/culturas/\">Culturas</a>
<button class=\"v-acc__b\" aria-label=\"Culturas\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/trazos/\"
target=\"_self\" title=\"Suplemento Trazos\"
data-mrf-link=\"http://www.hoy.es/culturas/trazos/\">
Suplemento Trazos
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/cine/\"
target=\"_self\" title=\"Cine\"
data-mrf-link=\"http://www.hoy.es/culturas/cine/\">
Cine
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/libros/\"
target=\"_self\" title=\"Libros\"
data-mrf-link=\"http://www.hoy.es/culturas/libros/\">
Libros
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/tv/\"
target=\"_self\" title=\"TV\"
data-mrf-link=\"http://www.hoy.es/culturas/tv/\">
TV
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/guia-tv/\"
target=\"_self\" title=\"Guía TV\"
data-mrf-link=\"http://www.hoy.es/guia-tv/\">
Guía TV
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/musica/\"
target=\"_self\" title=\"Música\"
data-mrf-link=\"http://www.hoy.es/culturas/musica/\">
Música
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/culturas/toros/\"
target=\"_self\" title=\"Toros\"
data-mrf-link=\"http://www.hoy.es/culturas/toros/\">
Toros
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/aula-hoy/\" target=\"_self\" title=\"Aula de Cultura HOY\" data-mrf-link=\"http://www.hoy.es/aula-hoy/\">
Aula de Cultura HOY
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/pantallas/\" target=\"_self\" title=\"Pantallas\" data-mrf-link=\"http://www.hoy.es/pantallas/\">
Pantallas
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/sociedad/\" class=\"v-drw__b-t\" title=\"Sociedad\" data-mrf-link=\"http://www.hoy.es/sociedad/\">Sociedad</a>
<button class=\"v-acc__b\" aria-label=\"Sociedad\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/ciencia/\"
target=\"_self\" title=\"Ciencia\"
data-mrf-link=\"http://www.hoy.es/ciencia/\">
Ciencia
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/sociedad/salud/\"
target=\"_self\" title=\"Salud\"
data-mrf-link=\"http://www.hoy.es/sociedad/salud/\">
Salud
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/tecnologia/\"
target=\"_self\" title=\"Tecnología\"
data-mrf-link=\"http://www.hoy.es/tecnologia/\">
Tecnología
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://blogs.hoy.es/escuela-de-padres/\"
target=\"_self\" title=\"Escuela de Padres\"
data-mrf-link=\"http://blogs.hoy.es/escuela-de-padres/\">
Escuela de Padres
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/vivir/\" target=\"_self\" title=\"Vivir\" data-mrf-link=\"http://www.hoy.es/vivir/\">
Vivir
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/antropia/\" target=\"_self\" title=\"Antropía\" data-mrf-link=\"http://www.hoy.es/antropia/\">
Antropía
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"http://www.hoy.es/deportes/\" class=\"v-drw__b-t\" title=\"Deportes\" data-mrf-link=\"http://www.hoy.es/deportes/\">Deportes</a>
<button class=\"v-acc__b\" aria-label=\"Deportes\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/\"
target=\"_self\" title=\"Fútbol\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/\">
Fútbol
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol-femenino\"
target=\"_self\" title=\"Fútbol femenino\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol-femenino\">
Fútbol femenino
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/liga-segunda\"
target=\"_self\" title=\"LaLiga Hypermotion\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/liga-segunda\">
LaLiga Hypermotion
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/primera-rfef/\"
target=\"_self\" title=\"Primera RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/primera-rfef/\">
Primera RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/segunda-rfef/\"
target=\"_self\" title=\"Segunda RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/segunda-rfef/\">
Segunda RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/futbol/tercera-rfef/\"
target=\"_self\" title=\"Tercera RFEF\"
data-mrf-link=\"http://www.hoy.es/deportes/futbol/tercera-rfef/\">
Tercera RFEF
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/baloncesto/\"
target=\"_self\" title=\"Baloncesto\"
data-mrf-link=\"http://www.hoy.es/deportes/baloncesto/\">
Baloncesto
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/tenis/\"
target=\"_self\" title=\"Tenis\"
data-mrf-link=\"http://www.hoy.es/deportes/tenis/\">
Tenis
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/ciclismo/\"
target=\"_self\" title=\"Ciclismo\"
data-mrf-link=\"http://www.hoy.es/deportes/ciclismo/\">
Ciclismo
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/motor/\"
target=\"_self\" title=\"Motor\"
data-mrf-link=\"http://www.hoy.es/deportes/motor/\">
Motor
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/mas-deportes/\"
target=\"_self\" title=\"Más Deporte\"
data-mrf-link=\"http://www.hoy.es/deportes/mas-deportes/\">
Más Deporte
</a>
</li>
<li class=\"v-u__l\">
<a class=\"v-u__a\" href=\"http://www.hoy.es/deportes/mas-deportes/caza-federada/\"
target=\"_self\" title=\"Caza y Conservación\"
data-mrf-link=\"http://www.hoy.es/deportes/mas-deportes/caza-federada/\">
Caza y Conservación
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/motor/\" target=\"_self\" title=\"Motor\" data-mrf-link=\"https://www.hoy.es/motor/\">
Motor
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/gente-estilo/\" target=\"_self\" title=\"Gente y Estilo\" data-mrf-link=\"http://www.hoy.es/gente-estilo/\">
Gente y Estilo
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/xlsemanal/\" target=\"_self\" title=\"XLSemanal\" data-mrf-link=\"http://www.hoy.es/xlsemanal/\">
XLSemanal
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/podcast/\" target=\"_self\" title=\"Podcast\" data-mrf-link=\"http://www.hoy.es/podcast/\">
Podcast
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/fotos/\" target=\"_self\" title=\"Fotos\" data-mrf-link=\"http://www.hoy.es/fotos/\">
Fotos
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/videos/\" target=\"_self\" title=\"Vídeos\" data-mrf-link=\"http://www.hoy.es/videos/\">
Vídeos
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://quienesquien.hoy.es/\" target=\"_self\" title=\"Quién es Quién\" data-mrf-link=\"https://quienesquien.hoy.es/\">
Quién es Quién
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/agro/\" target=\"_self\" title=\"HOYAgro\" data-mrf-link=\"https://www.hoy.es/agro/\">
HOY Agro
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-acc-xs\" data-voc-component=\"accordion\">
<div class=\"v-acc__c\">
<div class=\"v-drw-min-xs v-drw--a-l v-drw--t4 v-drw--t8\" data-voc-component=\"dropdown\">
<div class=\"v-acc__h\">
<div class=\"v-drw__b v-acc__b-c v-h-mg-m__link\">
<a href=\"https://www.hoy.es/ensalsa/\" class=\"v-drw__b-t\" title=\"EnSalsa\" data-mrf-link=\"https://www.hoy.es/ensalsa/\">EnSalsa</a>
<button class=\"v-acc__b\" aria-label=\"EnSalsa\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</div>
<div class=\"v-drw__c v-acc__w\">
<div class=\"v-drw__sub-c\">
<div class=\"v-drw__w\">
<div class=\"v-u-c\">
<ul class=\"v-u\">
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoyextremaduraesfuturo.es/\" target=\"_blank\" title=\"Extremadura es futuro\" data-mrf-link=\"https://www.hoyextremaduraesfuturo.es/\">
Extremadura es futuro
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<a class=\"v-h-mg-m__link\" href=\"https://solidario.hoy.es/\" target=\"_self\" title=\"HOY Solidario\" data-mrf-link=\"https://solidario.hoy.es/\">
HOY Solidario
</a>
</li>
<li class=\"v-h-mg-m__item v-clp__c\">
<div class=\"v-btn-c\">
<button class=\"v-clp__btn  v-h-mg-m__link v-btn v-btn-i v-btn-i--r\" aria-label=\"Ver más\">
<span class=\"v-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
<path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
</svg>
</span>
</button>
</div>
</li>
</ul>
</div>
</div>
<div class=\"v-h-mg-m__w v-h-mg-m__w--2\">
<header class=\"v-cnt-m v-cnt-m--xs\">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Servicios
</p>
</div>
</div>
</header>
<ul class=\"v-h-mg-m__list\">
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://esquelas.hoy.es/\"
target=\"_self\" title=\"Esquelas\"
data-mrf-link=\"https://esquelas.hoy.es/\">
Esquelas
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://oferplan.hoy.es/\"
target=\"_self\" title=\"Oferplan HOY\"
data-mrf-link=\"https://oferplan.hoy.es/\">
Oferplan
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/pasatiempos/\"
target=\"_self\" title=\"Pasatiempos\"
data-mrf-link=\"http://www.hoy.es/pasatiempos/\">
Pasatiempos
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/servicios/sorteos/\"
target=\"_self\" title=\"Resultados lotería\"
data-mrf-link=\"https://www.hoy.es/servicios/sorteos/\">
Resultados lotería
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/servicios/mi-club.html\"
target=\"_self\" title=\"El Club\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/mi-club.html\">
El Club
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/servicios/newsletters.html\"
target=\"_self\" title=\"Newsletters\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
Newsletters
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/promociones/\"
target=\"_self\" title=\"Promociones\"
data-mrf-link=\"https://www.hoy.es/promociones/\">
Promociones
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://hemeroteca.hoy.es\"
target=\"_self\" title=\"Hemeroteca del diario HOY edición impresa\"
data-mrf-link=\"https://hemeroteca.hoy.es\">
Hemeroteca impresa
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/hemeroteca\"
target=\"_self\" title=\"Hemeroteca del diario HOY edición digital\"
data-mrf-link=\"https://www.hoy.es/hemeroteca\">
Hemeroteca digital
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://blogs.hoy.es/\"
target=\"_self\" title=\"Blogs\"
data-mrf-link=\"https://blogs.hoy.es/\">
Blogs
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/de-tiendas/\"
target=\"_self\" title=\"De tiendas\"
data-mrf-link=\"http://www.hoy.es/de-tiendas/\">
De tiendas
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.hoy.es/guia-tv/\"
target=\"_self\" title=\"Guía/programación televisión\"
data-mrf-link=\"https://www.hoy.es/guia-tv/\">
Programación TV
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://empresas.hoy.es/\"
target=\"_self\" title=\"Local Digital Kit\"
data-mrf-link=\"https://empresas.hoy.es/\">
Negocios locales
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://areapersonal.hoy.es/suscripcion/app\"
target=\"_self\" title=\"Descargar APP HOY\"
data-mrf-link=\"https://areapersonal.hoy.es/suscripcion/app\">
Descárgate la APP
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.hoy.es/rss/\"
target=\"_self\" title=\"RSS\"
data-mrf-link=\"http://www.hoy.es/rss/\">
RSS
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.autocasion.com/coches-segunda-mano/badajoz\"
target=\"_blank\" title=\"Coches\"
data-mrf-link=\"https://www.autocasion.com/coches-segunda-mano/badajoz\">
Coches
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"https://www.pisos.com/viviendas/badajoz/\"
target=\"_blank\" title=\"Pisos\"
data-mrf-link=\"https://www.pisos.com/viviendas/badajoz/\">
Pisos
</a>
</li>
<li class=\"v-h-mg-m__item\">
<a class=\"v-h-mg-m__link\" href=\"http://www.infoempleo.com/trabajo/en_badajoz/\"
target=\"_blank\" title=\"Empleo\"
data-mrf-link=\"http://www.infoempleo.com/trabajo/en_badajoz/\">
Empleo
</a>
</li>
</ul>
</div>
<div class=\"v-h-mg-m__w v-h-mg-m__w--3\">
<header class=\"v-cnt-m v-cnt-m--xs\">
<div class=\"v-cnt-m__c\">
<div class=\"v-cnt-m__w v-cnt-m__w--1\">
<p class=\"v-cnt-m__t\">
Destacamos
</p>
</div>
</div>
</header>
<nav class=\"v-h-mg-m__nav\">
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://areapersonal.hoy.es/servicios/newsletters.html\" title=\"Newsletters\"
data-mrf-link=\"https://areapersonal.hoy.es/servicios/newsletters.html\">
<span class=\"v-i\">              <img src=\"https://s3.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-newsletters.svg\" alt=\"Newsletters\">
</span>                    Newsletters          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://hemeroteca.hoy.es/\" title=\"Hemeroteca\"
data-mrf-link=\"https://hemeroteca.hoy.es/\">
<span class=\"v-i\">              <img src=\"https://s2.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-hemeroteca.svg\" alt=\"Hemeroteca\">
</span>                    Hemeroteca          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"http://www.hoy.es/pasatiempos/\" title=\"Pasatiempos\"
data-mrf-link=\"http://www.hoy.es/pasatiempos/\">
<span class=\"v-i\">              <img src=\"https://s3.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/icono-pasatiempos.svg\" alt=\"Pasatiempos\">
</span>                    Pasatiempos          <span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
<a class=\"v-btn v-btn-i v-btn-i--l v-btn-g v-btn-g--t3 v-btn--xl\"
href=\"https://www.hoy.es/mi-seccion/\" title=\"Mi Sección\"
data-mrf-link=\"https://www.hoy.es/mi-seccion/\">
<img src=\"https://s1.ppllstatics.com/hoy/www/multimedia/plantillas/modulos/logo-mi-hoy.svg\" alt=\"-\">
<span class=\"v-a-i\">
<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"24\" viewBox=\"0 0 14 24\">
<path data-name=\"Unión 31\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(14 24) rotate(180)\"></path>
</svg>
</span>
</a>
</nav>
</div>
</div>
<div class=\"v-h-mg-m__c v-h-mg-m__c--3\">
<div class=\"v-h-mg-m__w v-h-mg-m__w--6 v-c\">
<nav class=\"v-h__st \">
<ul class=\"v-h__st-list  \">
<li class=\"v-h__st-item \">
<p class=\"v-h__st-p\">Es noticia</p>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/temporal-en-extremadura.html\"
target=\"_self\" title=\"Temporal en Extremadura\"
data-mrf-link=\"https://www.hoy.es/temas/generales/temporal-en-extremadura.html\">
Temporal en Extremadura
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/carnaval/\"
target=\"_self\" title=\"Carnaval de Badajoz 2026\"
data-mrf-link=\"https://www.hoy.es/carnaval/\">
Carnaval de Badajoz 2026
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/accidente-ferroviario-adamuz.html\"
target=\"_self\" title=\"Accidente ferroviario en Adamuz\"
data-mrf-link=\"https://www.hoy.es/temas/generales/accidente-ferroviario-adamuz.html\">
Accidente ferroviario en Adamuz
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/hemeroteca/PP%20Vox%20y%20Extremadura.html?order=-fecha\"
target=\"_self\" title=\"Negociaciones PP-Vox en Extremadura\"
data-mrf-link=\"https://www.hoy.es/hemeroteca/PP%20Vox%20y%20Extremadura.html?order=-fecha\">
Negociaciones PP-Vox
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/personajes/david-sanchez-perez-castejon.html\"
target=\"_self\" title=\"Caso Azagra\"
data-mrf-link=\"https://www.hoy.es/temas/personajes/david-sanchez-perez-castejon.html\">
Caso Azagra
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/extremadura/anuario-2025-20251230130358-nt.html\"
target=\"_self\" title=\"Anuario 2025\"
data-mrf-link=\"https://www.hoy.es/extremadura/anuario-2025-20251230130358-nt.html\">
Anuario 2025
</a>
</li>
<li class=\"v-h__st-item  \">
<a class=\"v-h__st-link\" href=\"https://www.hoy.es/temas/generales/precio-de-la-luz-generales.html\"
target=\"_self\" title=\"Precio de la luz\"
data-mrf-link=\"https://www.hoy.es/temas/generales/precio-de-la-luz-generales.html\">
Precio de la luz
</a>
</li>
</ul>
</nav>    </div>
</div>
</div><span class=\"v-bdp\"></span>

<div class=\"v-h-sr-m\">
  <div class=\"v-h-sr-m__c v-c\">
    <button class=\"v-x\">
      <span class=\"v-i\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"23.996\" viewBox=\"0 0 24 23.996\">
            <path data-name=\"Unión 29\" d=\"M12,14.03,2.031,24,0,21.963,9.968,12,0,2.033,2.031,0,12,9.966,21.969,0,24,2.033,14.032,12,24,21.963,21.969,24Z\"></path>
         </svg>
      </span>
    </button>
    <div class=\"v-h-sr-m__w v-h-sr-m__w--1\">
      <div class=\"v-form-c v-form--bdr v-form--xxl\" data-voc-component=\"form-focus\">
                <form class=\"v-form\" data-voc-krammer-term action=\"https://www.hoy.es/hemeroteca/\" method=\"get\">
                    <div class=\"v-form__c\">
            <div class=\"v-form__g\">
              <div class=\"v-form__g-c\" data-voc-krammer-form>
               <span class=\"v-f-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                     <path data-name=\"Unión 28\" d=\"M17.153,19.321A10.728,10.728,0,0,1,3.143,3.143a10.728,10.728,0,0,1,16.178,14.01L24,21.833,21.832,24ZM3.065,10.731a7.665,7.665,0,1,0,7.664-7.664A7.673,7.673,0,0,0,3.065,10.731Z\"></path>
                  </svg>
               </span>
                <span class=\"v-form__rmv\">Borrar</span>
                <input placeholder=\"Buscar en Hoy\" type=\"text\" class=\"v-form__i\" id=\"search\"
                       data-voc-krammer-term-all-words data-voc-krammer-input-search autofocus required minlength=\"3\"/>
                <label class=\"v-form__l\" for=\"search\">Buscar en Hoy</label>
              </div>
              <div class=\"v-form__g-c\">
                <button class=\"v-form__btn v-btn v-btn-d v-btn--xxl\">Buscar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
            <!-- endblock header -->
        
       {% endblock header %}
  
    </header>
    <script type=\"vocento/script\" src=\"//static.vocstatic.com/dab/latest/strategy.js\"></script>{%- block content %}<!-- block content --><!-- endblock content -->{% endblock content %}  
      {%- block preFooter %}
  
  <!-- block preFooter --><div class=\"v-adv v-adv--sky v-adv--sky--l\">
<div class=\"v-adv__item\">
<div data-voc-vam data-voc-vam-position=\"skyscraper_izq\"></div>
</div>
</div>
<div class=\"v-adv v-adv--sky v-adv--sky--r\">
<div class=\"v-adv__item\">
<div data-voc-vam data-voc-vam-position=\"skyscraper_der\"></div>
</div>
</div>  <!-- endblock preFooter -->
  
       {% endblock preFooter %}
  
\t
  \t   <footer class=\"v-f    \">
  <div class=\"v-f__c v-c\">
\t<div class=\"v-f__w v-f__w--1\">
           <a class=\"v-f__logo-link\" href=\"https://www.hoy.es\" title=\"hoy\">
              <img loading=\"lazy\" class=\"v-f__logo-img\" src=\"//s1.ppllstatics.com/starfish/1.6.11/assets/images/logos/logo-hoy.svg\" alt=\"hoy\">
          </a>
          <div class=\"v-f__copy\">
  <p class=\"v-f__copy-p\">© Corporación de Medios de Extremadura S.A.</p>
  <p class=\"v-f__copy-p\">Avenida del Diario HOY, S/N. 06008 Badajoz</p>
</div>
            <nav class=\"v-f__sm\">
          <ul class=\"v-f__sm-list\">
                        <li class=\"v-f__sm-item v-f__sm-item--1\">
              <a class=\"v-f__sm-link\" href=\"https://www.facebook.com/hoyextremadura\" title=\"Facebook\" target=\"_blank\">
                 <span class=\"v-f__sm-img\">
                   <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4111\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2653\" clip-path=\"url(#clip-path)\">
                      <path id=\"Trazado_1648\" data-name=\"Trazado 1648\" d=\"M24,12.073A12,12,0,1,0,10.125,24V15.563H7.078V12.072h3.046V9.413c0-3.026,1.791-4.7,4.533-4.7a18.352,18.352,0,0,1,2.686.236V7.922H15.83a1.739,1.739,0,0,0-1.954,1.886v2.264H17.2l-.532,3.49h-2.8V24A12.053,12.053,0,0,0,24,12.073\"></path>
                    </g>
                   </svg>
                 </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--2\">
              <a class=\"v-f__sm-link\" href=\"https://twitter.com/hoyextremadura\" title=\"X\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"19.502\" viewBox=\"0 0 24 19.502\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4108\" width=\"24\" height=\"19.502\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2650\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1641\" d=\"M11.9,8.469,19.348,0H17.584L11.119,7.353,5.955,0H0L7.808,11.119,0,20H1.764l6.827-7.765L14.045,20H20L11.9,8.469ZM9.486,11.217,8.695,10.11,2.4,1.3H5.11l5.08,7.11.791,1.107,6.6,9.242h-2.71L9.486,11.218Z\" transform=\"translate(0 0)\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--3\">
              <a class=\"v-f__sm-link\" href=\"https://www.instagram.com/hoy_extremadura/\" title=\"Instagram\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4110\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2652\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1647\" d=\"M12,0c3.259,0,3.668.014,4.948.072A8.8,8.8,0,0,1,19.86.63a5.884,5.884,0,0,1,2.125,1.384A5.884,5.884,0,0,1,23.37,4.14a8.82,8.82,0,0,1,.557,2.912C23.986,8.332,24,8.741,24,12s-.014,3.668-.072,4.948a8.82,8.82,0,0,1-.557,2.912,6.131,6.131,0,0,1-3.51,3.51,8.8,8.8,0,0,1-2.913.558C15.667,23.986,15.258,24,12,24s-3.667-.014-4.947-.072a8.808,8.808,0,0,1-2.913-.558,6.131,6.131,0,0,1-3.51-3.51,8.82,8.82,0,0,1-.557-2.912C.014,15.668,0,15.259,0,12S.014,8.332.072,7.052A8.82,8.82,0,0,1,.629,4.14,5.884,5.884,0,0,1,2.014,2.014,5.884,5.884,0,0,1,4.139.63,8.808,8.808,0,0,1,7.052.072C8.332.014,8.74,0,12,0m4.85,2.232c-1.266-.058-1.645-.07-4.85-.07s-3.583.012-4.849.07a6.659,6.659,0,0,0-2.228.413,3.714,3.714,0,0,0-1.38.9,3.717,3.717,0,0,0-.9,1.38,6.622,6.622,0,0,0-.412,2.228C2.174,8.416,2.162,8.8,2.162,12s.012,3.584.071,4.849a6.622,6.622,0,0,0,.412,2.228,3.726,3.726,0,0,0,.9,1.38,3.721,3.721,0,0,0,1.38.9,6.64,6.64,0,0,0,2.228.413c1.266.058,1.645.07,4.849.07s3.584-.012,4.85-.07a6.64,6.64,0,0,0,2.228-.413,3.969,3.969,0,0,0,2.277-2.278,6.631,6.631,0,0,0,.413-2.228c.058-1.265.07-1.645.07-4.849s-.012-3.584-.07-4.849a6.631,6.631,0,0,0-.413-2.228,3.706,3.706,0,0,0-.9-1.38,3.72,3.72,0,0,0-1.38-.9,6.659,6.659,0,0,0-2.228-.413M12,16a4,4,0,1,0-4-4,4,4,0,0,0,4,4M12,5.838A6.162,6.162,0,1,1,5.838,12,6.162,6.162,0,0,1,12,5.838m7.846-.244a1.44,1.44,0,1,1-1.44-1.44,1.44,1.44,0,0,1,1.44,1.44\" transform=\"translate(0 0)\" fill-rule=\"evenodd\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                    <li class=\"v-f__sm-item v-f__sm-item--4\">
              <a class=\"v-f__sm-link\" href=\"https://es.linkedin.com/in/diariohoy\" title=\"Linkedin\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
                    <defs>
                      <clipPath id=\"clip-path\">
                        <rect id=\"Rectángulo_4113\" data-name=\"Rectángulo 4113\" width=\"24\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2657\" clip-path=\"url(#clip-path)\">
                      <path id=\"Trazado_1650\" data-name=\"Trazado 1650\" d=\"M22.262,0H1.809A1.783,1.783,0,0,0,0,1.727V22.272A1.552,1.552,0,0,0,1.523,24H21.976A1.987,1.987,0,0,0,24,22.272V1.727A1.721,1.721,0,0,0,22.262,0M9.143,9.143h3.231V10.79h.035A4.39,4.39,0,0,1,16.155,9c3.453,0,4.416,1.833,4.416,5.229v6.343H17.143V14.854c0-1.52-.607-2.854-2.026-2.854-1.723,0-2.545,1.167-2.545,3.082v5.489H9.143ZM3.429,20.571H6.857V9.143H3.429ZM7.286,5.143A2.143,2.143,0,1,1,5.143,3,2.142,2.142,0,0,1,7.286,5.143\" fill-rule=\"evenodd\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                                <li class=\"v-f__sm-item v-f__sm-item--6\">
              <a class=\"v-f__sm-link\" href=\"https://www.tiktok.com/@hoyextremadura\" title=\"Tiktok\" target=\"_blank\">
                <span class=\"v-f__sm-img\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"21\" height=\"24\" viewBox=\"0 0 21 24\">
                    <defs>
                      <clipPath>
                        <rect data-name=\"Rectángulo 4107\" width=\"21\" height=\"24\"></rect>
                      </clipPath>
                    </defs>
                    <g data-name=\"Grupo 2649\" clip-path=\"url(#clip-path)\">
                      <path data-name=\"Trazado 1640\" d=\"M17.863,4.811a5.751,5.751,0,0,1-2.525-3.764A5.727,5.727,0,0,1,15.24,0H11.1l-.007,16.536a3.478,3.478,0,1,1-3.473-3.6,3.435,3.435,0,0,1,1.027.16V8.885a7.59,7.59,0,1,0,6.593,7.52V8.02A9.869,9.869,0,0,0,21,9.866V5.74a5.738,5.738,0,0,1-3.137-.93\"></path>
                    </g>
                  </svg>
                </span>
              </a>
            </li>
                                                           </ul>
        </nav>
                    <a class=\"v-f__logo-v-link\" href=\"https://www.vocento.com/\" title=\"Vocento\">
          <img loading=\"lazy\" class=\"v-f__logo-v-img\" src=\"//s1.ppllstatics.com/starfish/latest/assets/images/logos/logo-vocento.svg\" alt=\"Vocento Logo\">
        </a>
          </div>
      <div class=\"v-f__w v-f__w--2\">
                   <div class=\"v-acc\" data-voc-component=\"accordion\">
            <div class=\"v-acc__c\">
            <div class=\"v-acc__h\">
              <button class=\"v-acc__b\">
                <p class=\"v-acc__t\">
                  Webs de Vocento
                </p>
                <span class=\"v-a-i\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
                    <path data-name=\"Unión 43\" d=\"M0,11.991.009,12,0,12.009,11.9,24,14,21.88,4.2,12,14,2.12,11.9,0Z\" transform=\"translate(0 14) rotate(-90)\"></path>
                  </svg>
                </span>
              </button>
            </div>
            <div class=\"v-acc__w\">
              <nav class=\"v-f__nav\">
                <ul class=\"v-f__nav-list\">
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.abc.es/\" title=\"ABC\">
                      ABC</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://sevilla.abc.es/\" title=\"ABC Sevilla\">
                      ABC Sevilla</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.hoy.es/\" title=\"Hoy\">
                      Hoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elcorreo.com/\" title=\"El Correo\">
                      El Correo</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.larioja.com/\" title=\"La Rioja\">
                      La Rioja</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elnortedecastilla.es/\" title=\"El Norte de Castilla\">
                      El Norte de Castilla</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.diariovasco.com/\" title=\"Diario Vasco\">
                      Diario Vasco</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.elcomercio.es/\" title=\"El Comercio\">
                      El Comercio</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.ideal.es/\" title=\"Ideal\">
                      Ideal</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.diariosur.es/\" title=\"Sur\">
                      Sur</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.lasprovincias.es/\" title=\"Las Provincias\">
                      Las Provincias</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.eldiariomontanes.es/\" title=\"El Diario Montañés\">
                      El Diario Montañés</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.lavozdigital.es/\" title=\"La Voz Digital\">
                      La Voz Digital</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.laverdad.es/\" title=\"La Verdad\">
                      La Verdad</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.leonoticias.com/\" title=\"Leonoticias\">
                      Leonoticias</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.burgosconecta.es/\" title=\"Burgosconecta\">
                      Burgosconecta</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.salamancahoy.es/\" title=\"Salamancahoy\">
                      Salamancahoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.todoalicante.es/\" title=\"Todoalicante\">
                      Todoalicante</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.huelva24.com/\" title=\"Huelva 24\">
                      Huelva 24</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.abc.es/xlsemanal/\" title=\"XL Semanal\">
                      XL Semanal</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.mujerhoy.com/\" title=\"Mujerhoy\">
                      Mujerhoy</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.revistasix.es//\" title=\"Six\">
                      Six</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.welife.es/\" title=\"Welife\">
                      Welife</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.turium.es/\" title=\"Turium\">
                      Turium</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.autocasion.com/\" title=\"Autocasión\">
                      Autocasión</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://oferplan.com/\" title=\"Oferplan\">
                      Oferplan</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.pisos.com/\" title=\"Pisos.com\">
                      Pisos.com</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.topcomparativas.com/\" title=\"TopComparativas\">
                      TopComparativas</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://www.womennow.es/es/\" title=\"WomenNow\">
                      WomenNow</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://rentingcoches.com/\" title=\"Renting Coches\">
                      Renting Coches</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://localdigitalkit.com/\" title=\"Local Digital Kit\">
                      Local Digital Kit</a>
                  </li>
                  <li class=\"v-f__nav-item\">
                    <a class=\"v-f__nav-link\" target=\"_blank\" href=\"https://utamed.es/\" title=\"Utamed\">
                      Utamed</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          </div>
                        <div class=\"v-f__legal\">
                                                    <p class=\"v-f__legal-p\">En lo posible, para la resolución de litigios en línea en materia de consumo conforme Reglamento (UE) 524/2013, se buscará la posibilidad que la Comisión Europea facilita como plataforma de resolución de litigios en línea y que se encuentra disponible en el enlace <a class=\"v-f__legal-link\" href=\"https://ec.europa.eu/consumers/odr\" title=\"Legal\">
              https://ec.europa.eu/consumers/odr</a>.</p>
          </div>
            <nav class=\"v-f__menu-nav\">
            <ul class=\"v-f__menu-list\">            
                  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"https://areapersonal.hoy.es/gestion/contacto.html\" title=\"Contactar\" target=\"_self\" >
        Contactar</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/quienes-somos.html\" title=\"Quiénes somos\" target=\"_self\" >
        Quiénes somos</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/aviso-legal.html\" title=\"Aviso legal\" target=\"_self\" >
        Aviso legal</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/reglamento-emfa.html\" title=\"Reglamento UE 2024/1083\" target=\"_self\" >
        Reglamento UE 2024/1083</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/condiciones-uso.html\" title=\"Condiciones de uso\" target=\"_self\" >
        Condiciones de uso</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"https://www.vocento.com/politica-privacidad/\" title=\"Política de privacidad\" target=\"_self\" >
        Política de privacidad</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/publicidad.html\" title=\"Publicidad\" target=\"_self\" >
        Publicidad</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/mapa-web.html\" title=\"Mapa web\" target=\"_self\" >
        Mapa web</a>
    </li>

  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/compromisos-periodisticos.html\" title=\"Compromisos editoriales\" target=\"_self\" >
        Compromisos editoriales</a>
    </li>

      <li data-vtm-utiq class=\"v-f__menu-item\" style=\"display:none;\">
      <a href=\"/servicio-utiq.html\" title=\"Administrar Utiq\">Administrar Utiq</a>
    </li>
  

    <li class=\"v-f__menu-item\">
      <a class=\"v-f__menu-link\" href=\"/\" title=\"Política de cookies\" target=\"_self\"  onClick=\"Voonto.cmp.show(); event.preventDefault();\" >
        Política de cookies</a>
    </li>

  

  </ul>
          </nav>
      </div>
      <div class=\"v-f__w v-f__w--3\">        <button class=\"v-f__link-go\" data-voc-component=\"go-top\">
          Volver arriba <span class=\"v-i\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
    <path data-name=\"Unión 42\" d=\"M0,12.009.009,12,0,11.991,11.9,0,14,2.12,4.2,12,14,21.88,11.9,24Z\" transform=\"translate(24) rotate(90)\"></path>
  </svg><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"14\" viewBox=\"0 0 24 14\">
    <path data-name=\"Unión 42\" d=\"M0,12.009.009,12,0,11.991,11.9,0,14,2.12,4.2,12,14,21.88,11.9,24Z\" transform=\"translate(24) rotate(90)\"></path>
  </svg></span></button>
  \t\t</div>
    </div>
  </footer>
    
      {%- block jsFooter %}
  
  <!-- block jsFooter -->
  <!-- endblock jsFooter -->
             
    <script src=\"//static.vocstatic.com/voonto2/latest/voonto.js\"
        data-experiment=\"vocento/script\" data-components=\"data-voc-component\"
         data-kangaroo=\"true\"  data-cmp=\"true\"  data-evolok=\"true\" data-evolok-terms=\"/aviso-legal.html\"  ></script>
    <script src=\"//static.vocstatic.com/tag-manager/latest/vtm.js\" data-analytics-id=\"ppll_pro\"     data-append=\"true\"
    data-legacy-tracker=\"true\"
    data-legacy-wemass=\"true\"
></script>                
    <script src=\"//static.vocstatic.com/frontal/5.47.1/most-read.js\"></script>   
   
 <script   async src=\"//static.vocstatic.com/widgets/4.30.2/loader.js\"></script>
\t<script type=\"vocento/script\" src=\"//static.vocento.com/comments-frontend/1.8.1/comments.js\"></script>
    <script type=\"cookiewall/script\" src=\"//static.vocstatic.com/vam/7.15.0/vam.js\"  onerror=\"
    if (window.Voonto && window.Voonto.getInstance) {
      const app = window.Voonto.getInstance();
      const payload = { message: 'No carga VAM', pageType: window.vocento.config.vam.pageType };
      if (app && typeof app.nrevent === 'function') {
      \tapp.nrevent('VamLoadEvent', payload, '7b4c4061424c49685b484359');
      }
    }
  \"></script>    
  \t<script type=\"vocento/script\" src=\"//s1.ppllstatics.com/starfish/1.6.11/starfish.js\"></script>
      <script type=\"vocento/script\" src=\"https://static.vocstatic.com/user-identity/1.63.0/user-identity-framework.js\"></script>
    <script type=\"cookiewall/script\" src=\"//static.vocstatic.com/video-player/2.4.0/video-player.js\"></script>
    <script type=\"vocento/script\" src=\"//static.vocstatic.com/frontal/5.47.1/frontal-libraries.js\"></script>
\t<script type=\"vocento/script\" src=\"//static.vocstatic.com/portalsjs/1.24.0/portals.js\"></script> <script type=\"cookiewall/script\" src=\"https://scripts.opti-digital.com/modules/?pubid=p299\"></script>
     <script type=\"vocento/script\" src=\"https://static.vocstatic.com/freezone-newsletter-subscriber/2.0.0/freezone-widget.js\"></script>    
    
  <!-- block jsFooterEnd -->
  <!-- endblock jsFooterEnd -->
  
       {% endblock jsFooter %}
  
 
    {%- block trackingFooter %}<!-- block trackingFooter --><!-- endblock trackingFooter -->{% endblock trackingFooter %}  {%- block configDidomi %}<!-- block configDidomi --><!-- endblock configDidomi -->{% endblock configDidomi %}    
  
      {%- block rtimBlock %}
  
  <!-- block rtimBlock -->

  <!-- Evolok Notifier Tag -->
  <ev-engagement group-name=\"hoy\" modal-backdrop=\"false\"></ev-engagement>
  <!-- /Evolok Notifier Tag -->

  <!-- endblock rtimBlock -->
  
       {% endblock rtimBlock %}
  </body>
</html>", "remote_layout.twig", "");
    }
}
