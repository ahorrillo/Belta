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

class ErrorController {
    public static function show($code, $mensaje) {
        // Enviamos el código de estado real al navegador
        http_response_code($code);
        return View::render('landings/error_belta', array(
            'codigo' => $code,
            'mensaje' => $mensaje
        ));
    }
}
