<?php
class Redirect {
    public static function to($url) {
        // Si la URL no empieza por http, asumimos que es interna
        // y le pegamos la ruta base si fuera necesario,
        // pero para Belta lo haremos simple:
        header("Location: " . $url);
        exit;
    }
}
