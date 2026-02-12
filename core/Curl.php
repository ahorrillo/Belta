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

class Curl {
    /**
     * Realiza una petición GET de forma segura y sencilla
     */
    public static function get($url) {
        if (!function_exists('curl_init')) {
            return @file_get_contents($url);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Blindaje para PHP 5.3 y certificados modernos
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // Identificarse para evitar bloqueos
        curl_setopt($ch, CURLOPT_USERAGENT, 'Belta-Framework/1.0');

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            // Log del error si fuera necesario: curl_error($ch)
            curl_close($ch);
            return false;
        }

        curl_close($ch);
        return $result;
    }
}
