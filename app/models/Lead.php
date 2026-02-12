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

class Lead {
    public static function guardar($datos) {
        $db = Database::getConnection();
        $sql = "INSERT INTO leads (nombre, email, mensaje, landing_slug) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        return $stmt->execute(array($datos['nombre'], $datos['email'], $datos['mensaje'], $datos['slug']));
    }
}
