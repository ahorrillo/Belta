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

class LandingController {
    /**
     * Método para la landing estática
     */
    public function banca() {
        $data = array(
            'fecha_actual' => date('Y'),
            'meta_description' => 'Landing page corporativa para servicios financieros.'
        );
        // Renderizamos la vista que está dentro de la subcarpeta 'landings'
        return View::render('landings/banca_static', $data);
    }

    /**
     * Método para la landing dinámica
     * Recibe un slug para identificar qué contenido cargar desde la BD
     */
    public function dinamica(Request $request, $slug) {
        // Buscamos los datos en la BD
        $contenido = Landing::getBySlug($slug);
        if (!$contenido) {
            $res = new Response("La landing especificada no existe.", 404);
            return $res;
        }
        // Renderizamos una vista dinámica
        return View::render('landings/banca_dynamic', array(
            'paina' => $contenido,
            'status' => isset($_GET['exito']) ? $_GET['exito'] : null
        ));
    }

    /**
     * Método para procesar el formulario de contacto
     */
    public function procesarContacto(Request $request) {
        $datos = array(
            'nombre'  => $request->input('nombre'),
            'email'   => $request->input('email'),
            'mensaje' => $request->input('mensaje'),
            'slug'    => $request->input('landing_slug')
        );
        if (Lead::guardar($datos)) {
            $urlDeVuelta = $request->getReferer();
            if (strpos($urlDeVuelta, '?') !== false) {
                $urlDeVuelta = substr($urlDeVuelta, 0, strpos($urlDeVuelta, '?'));
            }
            // Rendireccionamos de vuelta a la landing con un parámetro de éxito
            return Response::redirect($urlDeVuelta . "?exito=1");
        } else {
            return new Response("Error: No pudimos guardar sus datos", 500);
        }
    }
}
