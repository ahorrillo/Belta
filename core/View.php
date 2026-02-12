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

require_once __DIR__ . '/../vendor/Twig/Autoloader.php';
Twig_Autoloader::register();

class View {
    private static $twig = null;
    public static function render($viewName, $data = array()) {
        // Variables para las rutas de vistas y caché
        $baseDir   = dirname(__DIR__);
        $viewsDir  = $baseDir . '/app/views';
        $cacheDir  = $baseDir . '/app/cache';
        if (self::$twig === null) {
            // Definimos dónde están las plantillas
            $loader = new Twig_Loader_Filesystem($viewsDir);
            // Opciones de Twig
            $twig = new Twig_Environment($loader, array(
                'cache' => $cacheDir,
                'auto_reload' => true,
                'debug' => true
            ));
            // Renderizamos el HTML
            $html = $twig->render($viewName . '.twig', $data);
        }
        // Devolvemos un objeto Response en lugar de imprimirlo
        return new Response($html);
    }
}
