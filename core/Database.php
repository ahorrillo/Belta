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

class Database {
    private static $instance = null;
    public static function getConnection() {
        if (self::$instance === null) {
            try {
                // El archivo se encuentra en app/db/database.sqlite
                $path = __DIR__ . '/../app/db/database.sqlite';
                self::$instance = new PDO("sqlite:" . $path);
                // Configuración de errores para desarrollo
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // Opcional: Forzar codificación UTF-8 si fuera necesario
                // self::$instance->exec("PRAGMA encoding = 'UTF-8';");
                // $query = "CREATE TABLE IF NOT EXISTS XXXXXXXXXXX (
                //             id INTEGER PRIMARY KEY AUTOINCREMENT,
                //             nombre TEXT NOT NULL,
                //             apellidos TEXT NOT NULL,
                //             fecha DATETIME DEFAULT CURRENT_TIMESTAMP
                //           )";
                // self::$instance->exec($query);
            } catch (PDOException $e) {
                // En producción, podrías loguear esto en lugar de hacer un die
                die("Error de conexión con SQLite: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}

// core/Database.php
// Base de datos usando PDO con MySQL (comentado para usar SQLite más simple)
// class Database {
//     private static $instance = null;
//     public static function getConnection() {
//         if (self::$instance === null) {
//             try {
//                 // Ajusta los datos de tu DB aquí
//                 $host = 'localhost';
//                 $db   = 'nombre_tu_bd';
//                 $user = 'usuario';
//                 $pass = 'contraseña';
//                 self::$instance = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
//                 self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             } catch (PDOException $e) {
//                 die("Error de conexión: " . $e->getMessage());
//             }
//         }
//         return self::$instance;
//     }
// }
