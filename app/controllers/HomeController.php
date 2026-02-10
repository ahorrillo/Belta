<?php
class HomeController {

    public function index() {
        // Base de datos
        // $db = Database::getConnection();
        // $stmt = $db->query("SELECT * FROM imagenes_carnaval");
        // $data['imagenes_db'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // $this->view('home', $data);

        // Datos para la vista
        $data = array(
            'titulo' => 'Campaña Carnaval de Badajoz',
            'imagenes' => array(
                'hero' => 'unica.webp',
                'gallery' => array('slide1.jpg', 'pareja_terraza.jpg')
            )
        );
        return View::render('home', $data);
    }
}
