<?php
// core/View.php

require_once __DIR__ . '/../vendor/Twig/Autoloader.php';
Twig_Autoloader::register();

class View {
    private static $twig = null;
    public static function render($viewName, $data = array()) {
        if (self::$twig === null) {
            // Definimos dónde están las plantillas
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../app/views');
            // Opciones de Twig
            self::$twig = new Twig_Environment($loader, array(
                'cache' => __DIR__ . '/../app/cache', // Asegúrate de crear esta carpeta con permisos de escritura
                'auto_reload' => true, // Para que refresque la caché al editar el .twig
                'debug' => true
            ));
        }
        // Twig usa extensiones .twig por convención
        echo self::$twig->render($viewName . '.twig', $data);
    }
}
