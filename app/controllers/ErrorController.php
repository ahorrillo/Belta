<?php
class ErrorController {
    public static function show($code = 404, $message = "Página no encontrada") {
        header("HTTP/1.0 $code");

        $data = array(
            'codigo' => $code,
            'mensaje' => $message
        );

        return View::render('error', $data);
    }
}
