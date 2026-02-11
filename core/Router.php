<?php
class Router {
    private $routes = array();
    public function get($uri, $callback) { $this->addRoute('GET', $uri, $callback); }
    public function post($uri, $callback) { $this->addRoute('POST', $uri, $callback); }
    private function addRoute($method, $uri, $callback) {
        $path = trim($uri, '/');
        if ($path === '') { $path = '/'; }
        // Convertimos :slug en una expresión regular que PHP entienda
        // Ejemplo: p/:slug -> p/([a-zA-Z0-9\-\_]+)
        $pattern = preg_replace('/\:([a-zA-Z0-9\-\_]+)/', '([a-zA-Z0-9\-\_]+)', $path);
        $this->routes[] = array(
            'method'   => $method,
            'pattern'  => '#^' . $pattern . '$#',
            'callback' => $callback
        );
    }

    public function dispatch($notFound) {
        // 1. Detección de URL (Lo que ya nos funcionaba)
        $uri = $_SERVER['REQUEST_URI'];
        if (strpos($uri, '?') !== false) { $uri = substr($uri, 0, strpos($uri, '?')); }
        $base = dirname($_SERVER['SCRIPT_NAME']);
        $url = substr($uri, strlen($base));
        $url = trim($url, '/');
        if ($url === '') { $url = '/'; }
        $method = $_SERVER['REQUEST_METHOD'];
        // 2. Buscamos por patrón
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && preg_match($route['pattern'], $url, $matches)) {
                // Quitamos el primer elemento (es la URL completa)
                array_shift($matches);
                // Ejecutamos pasando los parámetros encontrados (como el slug)
                return call_user_func_array($route['callback'], $matches);
            }
        }
        return call_user_func($notFound);
    }
}
