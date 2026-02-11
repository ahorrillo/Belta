<?php

class LandingController {
    /** Método para la landing estática
     * Aunque es estática, pasamos datos para ver el potencial de Twig
     */
    public function banca() {
        // Aunque es estática, pasamos datos para ver el potencial de Twig
        $data = array(
            'fecha_actual' => date('Y'),
            'meta_description' => 'Landing page corporativa para servicios financieros.'
        );
        // Renderizamos la vista que está dentro de la subcarpeta 'landings'
        View::render('landings/banca_static', $data);
    }

    /**
     * Método para la landing dinámica
     * Recibe un slug para identificar qué contenido cargar desde la BD
     */
    public function dinamica($slug) {
        // Buscamos los datos en la BD
        $contenido = Landing::getBySlug($slug);
        if (!$contenido) {
            return ErrorController::show(404, "La landing especificada no existe.");
        }
        // Renderizamos una vista dinámica
        View::render('landings/banca_dynamic', array(
            'paina' => $contenido,
            'status' => isset($_GET['exito']) ? $_GET['exito'] : null
        ));
    }

    /**
     * Método para procesar el formulario de contacto
     * Recibe los datos del formulario, los guarda en la BD y redirige con un mensaje de éxito
     */
    public function procesarContacto() {
        $datos = array(
            'nombre'  => $_POST['nombre'],
            'email'   => $_POST['email'],
            'mensaje' => $_POST['mensaje'],
            'slug'    => $_POST['landing_slug']
        );
        if (Lead::guardar($datos)) {
            // Redirigimos a la misma página añadiendo ?exito=1
            // $_SERVER['HTTP_REFERER'] es la página de donde venía el usuario
            $urlDeVuelta = $_SERVER['HTTP_REFERER'];
            // Limpiamos si ya tenía parámetros para no duplicar
            if (strpos($urlDeVuelta, '?') !== false) {
                $urlDeVuelta = substr($urlDeVuelta, 0, strpos($urlDeVuelta, '?'));
            }
            Redirect::to($urlDeVuelta . "?exito=1");
        } else {
            ErrorController::show(500, "No pudimos guardar sus datos.");
        }
    }
}
