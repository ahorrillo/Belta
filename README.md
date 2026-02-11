# **🌰 BELTA BELloTA Micro Framework MVC PHP**

**Belta** es un micro-framework basado en el patrón **MVC** (Modelo-Vista-Controlador), diseñado para ser ligero, seguro y compatible con **PHP 5.3**, diseñado especialmente para aquellos entornos de producción antiguos, imposibles de actualizar, y que dependemos de ellos para publicar landigs sencillas de eventos.

---

## **📂 Estructura de Carpetas**

* **/app**: El corazón de tu aplicación.
  * `/controllers`: Lógica de control (`HomeController.php`, `ErrorController.php`).
  * `/models`: Gestión de datos con SQLite (`Imagen.php`).
  * `/views`: Plantillas de Twig (`layout.twig`, `home.twig`, `error.twig`).
  * `/cache`: Archivos temporales de Twig (requiere permisos de escritura).
  * `/config`: Archivos de rutas (`routes.php`).
  * `/db`: El mapa de navegación (`database.sqlite`).
* **/core**: Los motores del sistema.
  * `Database.php`: Conexión PDO (Singleton).
  * `Router.php`: Gestor de URLs.
  * `View.php`: Adaptador de Twig.
* **/public**: La única carpeta visible desde internet.
  * `index.php`: El Front Controller.
  * `/.htaccess`: Protege el acceso directo.
  * `/css`, `/img`, `/js`: Archivos estáticos.
* **/README.md**: Este documento de información.

---

## **🛠️ Configuración del Core (Motores)**

### **1\. El Portero (`public/index.php`)**

El Front Controller. Configura el autoloader, el manejo de errores y arranca el Router.

PHP

```
// 1. Configuración de errores para el desarrollador
ini_set('display_errors', 1);
error_reporting(E_ALL);
// 2. Autoload: Carga automática de clases
spl_autoload_register(function ($class) {
    $paths = array(
        __DIR__ . '/../core/',
        __DIR__ . '/../app/controllers/',
        __DIR__ . '/../app/models/'
    );
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
// 3. RED DE SEGURIDAD: Manejo de Excepciones Globales
set_exception_handler(function ($exception) {
    // Log del error para el programador (opcional)
    // error_log($exception->getMessage());
    // Mostramos la vista de error neutra con código 500
    ErrorController::show(500, "Lo sentimos, ha ocurrido un error interno en el servidor.");
});
// 4. Inicializar el Router
$router = new Router();
// 5. Cargar las rutas definidas por el usuario (no se puede en autoload porque no es una clase)
require_once __DIR__ . '/../app/config/routes.php';
// 6. Ejecutar el Router
// Si no encuentra la ruta, disparamos el Error 404
$router->dispatch(function() {
    ErrorController::show(404, "Vaya, parece que esta página no existe.");
});
```

### **2\. El Motor de Rutas (`core/Router.php`)**

Limpia la URL y busca coincidencias con lo definido en `routes.php`.

PHP

```
<?php
class Router {
    private $routes = array();

    public function get($uri, $callback) {
        $this->routes[trim($uri, '/')] = $callback;
    }

    public function dispatch($notFoundCallback) {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
        $uri = trim(substr($uri, strlen($scriptName)), '/');
        if ($uri === '') $uri = '/';

        foreach ($this->routes as $route => $callback) {
            if ($route === $uri || ($route === '/' && $uri === '')) {
                return call_user_func($callback);
            }
        }
        return call_user_func($notFoundCallback);
    }
}
```

---

## **📊 Capa de Datos (Modelo y DB)**

### **3\. Conexión SQLite (`core/Database.php`)**

Usa el patrón Singleton para no abrir múltiples conexiones innecesariamente.

PHP

```
<?php
class Database {
    private static $instance = null;
    public static function getConnection() {
        if (self::$instance === null) {
            $path = __DIR__ . '/../app/database.sqlite';
            self::$instance = new PDO("sqlite:" . $path);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
```

### **4\. El Modelo (`app/models/Imagen.php`)**

Sabe cómo hablar con la tabla de la base de datos.

PHP

```
<?php
class Imagen {
    public static function todas() {
        $db = Database::getConnection();
        return $db->query("SELECT * FROM imagenes ORDER BY fecha DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($t, $r) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO imagenes (titulo, ruta) VALUES (?, ?)");
        return $stmt->execute(array($t, $r));
    }

    public static function borrar($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM imagenes WHERE id = ?");
        return $stmt->execute(array($id));
    }
}
```

---

## **🎨 Capa de Vista (Twig 1.x)**

### **5\. Adaptador de Vista (`core/View.php`)**

Carga Twig y renderiza las plantillas `.twig`.

PHP

```
<?php
require_once __DIR__ . '/../vendor/Twig/Autoloader.php';
Twig_Autoloader::register();

class View {
    public static function render($view, $data = array()) {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../app/views');
        $twig = new Twig_Environment($loader, array('cache' => __DIR__.'/../app/cache', 'auto_reload' => true));
        echo $twig->render($view . '.twig', $data);
    }
}
```

### **6\. Layout Base (`app/views/layout.twig`)**

El molde neutro para todas tus páginas.

Twig

```
<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}Mi Web{% endblock %}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header><h1>BellotaFW</h1></header>
    <main>{% block content %}{% endblock %}</main>
    <footer>© 2026 Reutilizable</footer>
</body>
</html>
```

---

## **🛡️ Seguridad (.htaccess)**

### **Raíz del Proyecto (`/.htaccess`)**

Apache

```
RewriteEngine On
Options -Indexes
RewriteRule ^(.*)$ public/$1 [L]
```

### **Carpeta App (`/app/.htaccess`)**

Apache

```
Deny from all
```

