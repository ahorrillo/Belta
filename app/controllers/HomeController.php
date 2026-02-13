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

class HomeController {
    public function index($request) {
        // Aquí podrías llamar a un modelo, por ejemplo:
        // $novedades = Landing::getRecent();
        $data = array(
            'version' => 'v1.0.5 Stable',
            'titulo' => 'Belta Framework',
            'descripcion' => 'La solución micro-framework MVC ultra-ligero desarrollado en PHP 5.3.'
        );
        // Usamos View para la Home
        return View::render('landings/home_belta', $data);
    }
}
