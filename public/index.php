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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Autoload: Carga automática de clases
spl_autoload_register(function ($class) {
    $paths = array(
        __DIR__ . '/../core/',
        __DIR__ . '/../app/controllers/',
        __DIR__ . '/../app/models/'
    );
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

set_exception_handler(function ($exception) {
    // Log del error para el programador (opcional)
    // error_log($exception->getMessage());
    // Mostramos la vista de error neutra con código 500
    ErrorController::show(500, "Lo sentimos, ha ocurrido un error interno en el servidor.");
});

$router = new Router();

require_once __DIR__ . '/../app/config/routes.php';

$router->dispatch(function() {
    ErrorController::show(404, "Vaya, parece que esta página no existe.");
});
