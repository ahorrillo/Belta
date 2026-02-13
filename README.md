# **🌰 Belta Framework**

![PHP](https://img.shields.io/badge/PHP-5.3-%23777bb3)
![Coverage](https://img.shields.io/badge/Coverage-95%25-brightgreen)
![License](https://img.shields.io/badge/License-Vocento-informational)
![GitHub Tag](https://img.shields.io/github/v/tag/ahorrillo/Belta)
![Website](https://img.shields.io/website?url=http://servicios.hoy.es/landings/)

---

## **🚀 Descripción General del Proyecto**

Belta es un micro-framework escrito en PHP, diseñado para modernizar entornos Legacy (PHP 5.3+). Implementa una arquitectura MVC estricta, inyección de dependencias ligera, base de datos SQLite y un sistema único de herencia de plantillas TWIG y remotas vía API, Skeleton, optimizado para la gestión de landings y microsites corporativos de Vocento.

---

## **📂 Estructura del Proyecto**

Plaintext

```
/
├── app/
│   ├── controllers/    # Lógica de las rutas
│   ├── models/         # Clases de datos y lógica de negocio
│   ├── views/          # Plantillas Twig locales (.twig)
│   ├── config/         # Contiene routes.php para el manejo de URLs.
│   ├── db/             # Almacén de caché de la API (JSON/HTML)
│   └── cache/          # Almacena logs y la compilación de Twig
├── core/
│   ├── Router.php      # Sistema de rutas
│   ├── Request.php     # Captura y limpieza de datos (XSS protection)
│   ├── Response.php    # Manejo de salidas y cabeceras
│   ├── View.php        # Renderizador estándar
│   ├── Curl.php        # Cliente HTTP para peticiones externas
│   └── ViewSkeleton.php# Renderizador con Skeleton
├── public/
│   ├── assets/         # Activos estáticos (CSS, JS, IMG)
│   └── index.php       # Punto de entrada único
└── vendor/             # Librerías externas (Twig 1.x)
```

---

## **✨ Componentes Estrella**

### **1\. Sistema de "Remote Skeleton"**

Permite que el diseño base (cabeceras, menús, footers) se gestione externamente mediante una API.

* **Clase `ViewSkeleton`**: Orquestador que une el HTML remoto con las vistas locales.
* **Estrategia de Caché**:
  1. **Caché de Red**: El HTML de la API se guarda en `app/cache` por 1 hora.
  2. **Caché de Twig**: Las vistas se compilan a PHP en `app/cache/` para rendimiento máximo.

### **2\. Clase `Request` (Blindada)**

Gestiona la entrada de datos asegurando que nada "sucio" llegue a la lógica:

* **Sanitización automática**: Uso de `strip_tags` y `htmlspecialchars` en todos los métodos `input()` y `query()`.
* **Persistencia**: Mantenimiento del estado del método HTTP y la URI.

### **3\. Clase `Curl` (Interoperabilidad)**

Diseñada para superar las limitaciones de PHP 5.3 con protocolos HTTPS modernos (TLS 1.2+):

* **SSL Bypass**: Configurada para ignorar validaciones de certificados locales desactualizados.
* **Resiliencia**: Tiempos de espera configurados para no bloquear el servidor si la API externa falla.

### **4\. Clase `Database` (Persistencia)**

Soporta almacenamiento de datos mediante una base de datos SQLite:

* **Models**: Genera un modelo de datos para cada tabla.
* **Integración**: utiliza los datos almacenados en las tablas, en las visualizaciones Twig.

---

## **🛠️ Configuración e Instalación**

### **Requisitos**

* PHP 5.3.
* Extensión `php_curl` habilitada.
* Permisos de escritura en `app/cache/`.
* Apache con mod_rewrite.c.

### **El Autoloader (`public/index.php`)**

Es vital registrar el sistema de carga de Belta:

PHP

```
spl_autoload_register(function ($class) use ($baseDir) {
    $paths = array(
        $baseDir . '/core/',
        $baseDir . '/app/controllers/',
        $baseDir . '/app/models/'
    );
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
```

---

## **💻 Ejemplo de Implementación**

### **1\. Definir Ruta**

PHP

```
$router->get('/', function($request) {
    $controller = new HomeController();
    return $controller->index($request);
});
```

### **2\. El Controlador**

PHP

```
class HomeController {
    public function index($request) {
        // Aquí podrías llamar a un modelo, por ejemplo:
        // $novedades = Landing::getRecent();
        $data = array(
            'version' => 'v1.0.5 Stable',
            'titulo' => 'Belta Framework',
            'descripcion' => 'La solución micro-framework MVC ultra-ligero desarrollado en PHP 5.3.'
        );
        // Usamos View para la Home
        return View::render('landings/home_belta', $data);
    }
}
```

### **3\. La Vista (`app/views/landings/home_belta.twig`)**

Twig

```
{% extends "layouts/landing_base.twig" %}

{% block content %}
{% endblock %}
```

---

## **🛡️ Seguridad y Rendimiento**

* **Protección XSS**: Activada por defecto en la clase `Request`.
* **Zero Latency**: Tras la primera carga, la aplicación no realiza peticiones externas de red hasta que expire la caché del skeleton, sirviendo la página desde el sistema de archivos local.

---

## **✒️ Autor**

Desarrollado por **Antonio Horrillo Horrillo**.
<ahorrillo@hoy.es> | <tuanhorrillo@gmail.com> | [GitHub](https://github.com/ahorrillo) | [LinkedIn](https://www.linkedin.com/in/antoniohh)

Proyecto creado y mantenido por Antonio Horrillo Horrillo, responsable Analista, SEO Técnico y Desarrollo.

---

## **📄 Licencia y Términos de Uso**

Este software ha sido desarrollado por y para el uso exclusivo de las cabeceras y servicios del grupo **Vocento**.

-**Propiedad:** © 2026 **Vocento**. Todos los derechos reservados.
-**Licencia:** Privativa (uso interno).

Queda estrictamente prohibida la reproducción, distribución, modificación o comunicación pública, total o parcial, de este código fuente a terceros ajenos al Grupo Vocento sin el consentimiento expreso y por escrito de la dirección tecnológica.
