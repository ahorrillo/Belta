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

class ViewSkeleton {
    public static function render($template, $data = array()) {
        // Variables para las rutas de vistas y caché
        $baseDir   = dirname(__DIR__);
        $viewsDir  = $baseDir . '/app/views';
        $cacheDir  = $baseDir . '/app/cache';
        $cacheFile = $cacheDir . '/skeleton_cache.html';
        // Tenemos el HTML de la API guardado y es reciente (menos de 1 hora)
        if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < 3600)) {
            $skeleton = file_get_contents($cacheFile);
        } else {
            // Si no, llamamos a la API y lo guardamos
            $url = "https://www.hoy.es/api/v2/headers/skeleton.twig?type=responsive22&section=badajoz";
            $skeleton = Curl::get($url);
            if ($skeleton) {
                file_put_contents($cacheFile, $skeleton);
            } else {
                // Fallback si la API está caída: leer lo que hubiera en el archivo aunque sea viejo
                $skeleton = file_exists($cacheFile) ? file_get_contents($cacheFile) : "{% block content %}{% endblock %}";
            }
        }
        // Configurar Twig localmente solo para esta petición
        $fileLoader = new Twig_Loader_Filesystem($viewsDir);
        $arrayLoader = new Twig_Loader_Array(array(
            'remote_layout.twig' => $skeleton
        ));
        $loader = new Twig_Loader_Chain(array($arrayLoader, $fileLoader));
        $twig = new Twig_Environment($loader, array(
            'cache'       => $cacheDir,
            'auto_reload' => true,
            'debug'       => true
        ));
        // Retornar la Response estándar de Belta
        $html = $twig->render($template . '.twig', $data);
        return new Response($html);
    }
}
