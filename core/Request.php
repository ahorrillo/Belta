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

class Request {
    private $get;
    private $post;
    private $server;
    private $uri;
    private $method;

    public function __construct() {
        $this->get    = $_GET;
        $this->post   = $_POST;
        $this->server = $_SERVER;
        $this->uri    = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $this->method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
    }

    /**
     * Limpia los datos de entrada para evitar XSS
     */
    private function sanitize($data) {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = $this->sanitize($value);
            }
        } else {
            $data = strip_tags($data);
            $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
            $data = trim($data);
        }
        return $data;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getUri() {
        return $this->uri;
    }

    // Obtener datos de POST sanitizados
    public function input($key, $default = null) {
        return isset($this->post[$key]) ? $this->sanitize($this->post[$key]) : $default;
    }

    // Obtener datos de GET sanitizados
    public function query($key, $default = null) {
        return isset($this->get[$key]) ? $this->sanitize($this->get[$key]) : $default;
    }

    public function getReferer() {
        return isset($this->server['HTTP_REFERER']) ? $this->server['HTTP_REFERER'] : '/';
    }
}
