<?php
// app/controllers/HomeController.php

class FormController {

    public function index() {
        // Le pedimos los datos al Modelo
        $forms = Form::todas();
        $data = array(
            'titulo' => 'Gestor de Carnaval - MVC Real',
            'imagenes_db' => $forms
        );
        return View::render('form', $data);
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // El controlador valida y el modelo guarda
            if (Imagen::crear($_POST['titulo'], $_POST['ruta'])) {
                header("Location: ./");
                exit();
            }
        }
    }

    public function eliminar() {
        // Obtenemos el ID de la URL (ej: /eliminar?id=5)
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            Imagen::borrar($id);
        }
        // Volvemos al inicio
        header("Location: ./");
        exit();
    }

}
