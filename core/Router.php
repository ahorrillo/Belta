<?php
/**
 * BellotaFW - Router Engine
 */

class Router {
    private $routes = array();

    // Registra una ruta en el sistema
    public function get($uri, $callback) {
        // Limpiamos la ruta para que 'contacto/' y 'contacto' sean lo mismo
        $this->routes[trim($uri, '/')] = $callback;
    }

    // Busca coincidencia y ejecuta la acción
    public function dispatch($notFoundCallback) {
        // 1. Obtenemos la URL actual y limpiamos parámetros GET (?id=1...)
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // 2. Ajuste para subcarpetas (si el proyecto no está en la raíz del dominio)
        $scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
        $uri = substr($uri, strlen($scriptName));

        // 3. Limpieza final de la URI
        $uri = trim($uri, '/');
        if ($uri === '') { $uri = '/'; }

        // 4. Buscar si la URI existe en nuestro mapa de rutas
        foreach ($this->routes as $route => $callback) {
            // Si la ruta coincide con lo que el usuario escribió
            if ($route === $uri || ($route === '/' && $uri === '')) {
                // Ejecutamos la función asociada a esa ruta
                return call_user_func($callback);
            }
        }

        // 5. Si no hubo coincidencia, ejecutamos el error 404
        return call_user_func($notFoundCallback);
    }
}
