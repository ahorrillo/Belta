<?php
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
