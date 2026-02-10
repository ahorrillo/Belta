<?php
/**
 * BellotaFW - Front Controller (Versión Final)
 */

// 1. Configuración de errores para el desarrollador
ini_set('display_errors', 1);
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

// 3. RED DE SEGURIDAD: Manejo de Excepciones Globales
set_exception_handler(function ($exception) {
    // Log del error para el programador (opcional)
    // error_log($exception->getMessage());

    // Mostramos la vista de error neutra con código 500
    ErrorController::show(500, "Lo sentimos, ha ocurrido un error interno en el servidor.");
});

// 4. Inicializar el Router
$router = new Router();

// 5. Cargar las rutas definidas por el usuario
require_once __DIR__ . '/../app/routes.php';

// 6. Ejecutar el Router
// Si no encuentra la ruta, disparamos el Error 404
$router->dispatch(function() {
    ErrorController::show(404, "Vaya, parece que esta página no existe.");
});
