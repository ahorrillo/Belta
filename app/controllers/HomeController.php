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
    // Entrada
    public function index() {
        // Datos para la vista
        $data = array(
            'titulo' => 'Campaña Carnaval de Badajoz',
            'descripcion' => '¡Bienvenidos a la campaña del Carnaval de Badajoz! Aquí encontrarás toda la información sobre eventos, actividades y noticias relacionadas con esta festividad tan especial. Únete a nosotros para celebrar juntos el espíritu del carnaval con alegría y diversión.',
        );
        return View::render('home', $data);
    }
}
