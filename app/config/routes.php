<?php
// Raíz (Home de Belta)
$router->get('/', function() {
    View::render('landings/home_belta');
});

// Landing Estática
$router->get('/soluciones-financieras', function() {
    $controller = new LandingController();
    $controller->banca();
});

// Landing Dinámica con Variable (Ej: /p/banca-privada)
$router->get('/p/:slug', function($slug) {
    $controller = new LandingController();
    $controller->dinamica($slug);
});

// Formulario
$router->post('/contacto', function() {
    $controller = new LandingController();
    $controller->procesarContacto();
});
