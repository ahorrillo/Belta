<?php
/*
 * BELTA es un micro-framework MVC ultra-ligero desarrollado en PHP 5.3
 *
 * Copyright (c) 2026 Vocento Diario HOY Antonio Horrillo <ahorrillo@hoy.es>
 * Todos los derechos reservados.
 *
 * Este software es propiedad de HOY del Grupo Vocento y está protegido por las leyes de propiedad intelectual.
 * Queda prohibida su copia, distribución o modificación sin autorización expresa y por escrito.
 */

// Raíz (Home de Belta)
$router->get('/', function($request) {
    return View::render('landings/home_belta');
});

// Landing Estática
$router->get('/soluciones-financieras', function($request) {
    $controller = new LandingController();
    return $controller->banca($request);
});

// Landing Dinámica con Variable (Ej: /p/banca-privada)
$router->get('/p/:slug', function($request, $slug) {
    $controller = new LandingController();
    return $controller->dinamica($request, $slug);
});

// Formulario
$router->post('/contacto', function($request) {
    $controller = new LandingController();
    return $controller->procesarContacto($request);
});

// Papel Home
$router->get('/papel-home', function($request) {
    $controller = new EmeryController();
    return $controller->home($request);
});
