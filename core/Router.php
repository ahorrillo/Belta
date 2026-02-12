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

class Router {
    private $routes = array();
    public function get($uri, $callback) { $this->addRoute('GET', $uri, $callback); }
    public function post($uri, $callback) { $this->addRoute('POST', $uri, $callback); }
    private function addRoute($method, $uri, $callback) {
        $path = trim($uri, '/');
        if ($path === '') { $path = '/'; }
        // Convertimos :slug en regex
        $pattern = preg_replace('/\:([a-zA-Z0-9\-\_]+)/', '([a-zA-Z0-9\-\_]+)', $path);
        $this->routes[] = array(
            'method'   => $method,
            'pattern'  => '#^' . $pattern . '$#',
            'callback' => $callback
        );
    }

    public function dispatch($notFound) {
        $request = new Request();
        // Limpieza de URL (Detectar si estamos en /Belta/public/)
        $uri = $_SERVER['REQUEST_URI'];
        if (strpos($uri, '?') !== false) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        $base = dirname($_SERVER['SCRIPT_NAME']);
        $url = substr($uri, strlen($base));
        // IMPORTANTE: Dejamos la URL limpia sin barras en los extremos para comparar
        $url = trim($url, '/');
        if ($url === '') { $url = '/'; }
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['pattern'], $url, $matches)) {
                array_shift($matches); // Quitamos la coincidencia completa
                // Inyectamos Request y luego los parámetros (como el slug)
                $params = array_merge(array($request), $matches);
                $response = call_user_func_array($route['callback'], $params);
                if ($response instanceof Response) {
                    return $response->send();
                }
                return;
            }
        }
        // Si nada coincide, lanzamos el 404
        return call_user_func($notFound);
    }
}
