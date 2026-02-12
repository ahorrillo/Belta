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

class Response {
    private $content;
    private $status = 200;
    private $headers = array('Content-Type' => 'text/html; charset=UTF-8');

    public function __construct($content = '', $status = 200) {
        $this->content = $content;
        $this->status = $status;
    }

    public function setStatus($code) {
        $this->status = $code;
        return $this;
    }

    public function setHeader($name, $value) {
        $this->headers[$name] = $value;
        return $this;
    }

    // Código de estado compatible con PHP 5.3+
    public function send() {
        header("HTTP/1.1 " . $this->status);
        foreach ($this->headers as $name => $value) {
            header("$name: $value");
        }
        echo $this->content;
        return $this;
    }

    // Respuesta de redirección (HTTP 302)
    public static function redirect($url) {
        $response = new self();
        $response->setStatus(302);
        $response->setHeader('Location', $url);
        return $response;
    }
}
