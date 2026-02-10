<?php
// Aquí solo definimos qué URL va a qué función
$router->get('/', function() {
    $controller = new HomeController();
    $controller->index();
});

$router->get('form', function() {
    $controller = new FormController();
    $controller->index();
});

// Ruta para procesar el formulario
$router->get('guardar', function() {
    $controller = new HomeController();
    $controller->guardar();
});

// Ruta Home alternativa (cadena vacía)
$router->get('', function() {
    $controller = new HomeController();
    $controller->index();
});

$router->get('eliminar', function() {
    $controller = new HomeController();
    $controller->eliminar();
});
