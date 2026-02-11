<?php
class Lead {
    public static function guardar($datos) {
        $db = Database::getConnection();
        $sql = "INSERT INTO leads (nombre, email, mensaje, landing_slug) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        return $stmt->execute(array($datos['nombre'], $datos['email'], $datos['mensaje'], $datos['slug']));
    }
}
