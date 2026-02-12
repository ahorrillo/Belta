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

class Landing {
    public static function getBySlug($slug) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM landings WHERE slug = ? LIMIT 1");
        $stmt->execute(array($slug));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
