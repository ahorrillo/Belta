<?php
class ErrorController {
    public static function show($code, $mensaje) {
        // Enviamos el código de estado real al navegador
        http_response_code($code);
        View::render('landings/error_belta', array(
            'codigo' => $code,
            'mensaje' => $mensaje
        ));
        exit;
    }
}
