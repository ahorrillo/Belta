<?php
// app/models/Form.php

class Imagen {

    public static function todas() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM imagenes ORDER BY fecha DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($titulo, $ruta) {
        $db = Database::getConnection();
        $sql = "INSERT INTO imagenes (titulo, ruta) VALUES (:titulo, :ruta)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':ruta', $ruta);
        return $stmt->execute();
    }

    public static function borrar($id) {
        $db = Database::getConnection();
        $sql = "DELETE FROM imagenes WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
