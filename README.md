# **🌰 Belta Framework 🚀**

### ***Legacy compatibility, Modern architecture***

**Belta** es un micro-framework PHP diseñado para entornos **PHP 5.3+**. Sigue el patrón **MVC** (Modelo-Vista-Controlador) y está optimizado para la gestión dinámica de landings mediante la inyección de layouts remotos a través de API.

---

## **📂 Estructura del Proyecto**

Plaintext

```
/
├── app/
│   ├── controllers/    # Lógica de las rutas
│   ├── models/         # Clases de datos y lógica de negocio
│   ├── views/          # Plantillas Twig locales (.twig)
│   ├── utils/          # Herramientas (RemoteView, Validadores...)
│   ├── db/             # Almacén de caché de la API (JSON/HTML)
│   └── cache/          # Caché de compilación nativa de Twig (PHP)
├── core/               # Núcleo del Framework
│   ├── Router.php      # Sistema de rutas
│   ├── Request.php     # Captura y limpieza de datos (XSS protection)
│   ├── Response.php    # Manejo de salidas y cabeceras
│   ├── View.php        # Renderizador estándar
│   ├── Curl.php        # Cliente HTTP para peticiones externas
│   └── Controller.php  # Clase base opcional
├── public/             # Directorio raíz del servidor
│   └── index.php       # Punto de entrada único
└── vendor/             # Librerías externas (Twig)
```

---

## **✨ Componentes Estrella**

### **1\. Sistema de "Remote Skeleton"**

Permite que el diseño base (cabeceras, menús, footers) se gestione externamente mediante una API.

* **Clase `RemoteView`**: Orquestador que une el HTML remoto con las vistas locales.
* **Estrategia de Caché**:
  1. **Caché de Red**: El HTML de la API se guarda en `app/db/` por 1 hora.
  2. **Caché de Twig**: Las vistas se compilan a PHP en `app/cache/` para rendimiento máximo.

### **2\. Clase `Request` (Blindada)**

Gestiona la entrada de datos asegurando que nada "sucio" llegue a la lógica:

* **Sanitización automática**: Uso de `strip_tags` y `htmlspecialchars` en todos los métodos `input()` y `query()`.
* **Persistencia**: Mantenimiento del estado del método HTTP y la URI.

### **3\. Clase `Curl` (Interoperabilidad)**

Diseñada para superar las limitaciones de PHP 5.3 con protocolos HTTPS modernos (TLS 1.2+):

* **SSL Bypass**: Configurada para ignorar validaciones de certificados locales desactualizados.
* **Resiliencia**: Tiempos de espera configurados para no bloquear el servidor si la API externa falla.

---

## **🛠️ Configuración e Instalación**

### **Requisitos**

* PHP 5.3 o superior.
* Extensión `php_curl` habilitada.
* Permisos de escritura en `app/db/` y `app/cache/`.

### **El Autoloader (`public/index.php`)**

Es vital registrar tanto Twig como el sistema de carga de Belta:

PHP

```
require_once __DIR__ . '/../vendor/Twig/Autoloader.php';
Twig_Autoloader::register();

spl_autoload_register(function ($class) {
    $folders = array('../core/', '../app/controllers/', '../app/models/', '../app/utils/');
    foreach ($folders as $folder) {
        $file = __DIR__ . '/' . $folder . $class . '.php';
        if (file_exists($file)) { require_once $file; return; }
    }
});
```

---

## **💻 Ejemplo de Implementación**

### **1\. Definir Ruta**

PHP

```
$router->get('landing/:slug', function($request, $slug) {
    $c = new LandingController();
    return $c->show($request, $slug);
});
```

### **2\. El Controlador**

PHP

```
public function show($request, $slug) {
    $data = Landing::find($slug);

    // Se envía el nombre de la vista y los datos
    return RemoteView::render('landings/promo', array(
        'info' => $data
    ));
}
```

### **3\. La Vista (`app/views/landings/promo.twig`)**

Twig

```
{% extends 'remote_layout.twig' %}

{% block content %}
    <main>
        <h1>{{ info.title }}</h1>
        <div class="body">{{ info.content | raw }}</div>
    </main>
{% endblock %}
```

---

## **🛡️ Seguridad y Rendimiento**

* **Protección XSS**: Activada por defecto en la clase `Request`.
* **Zero Latency**: Tras la primera carga, la aplicación no realiza peticiones externas de red hasta que expire la caché del skeleton, sirviendo la página desde el sistema de archivos local.

---

## **✒️ Autoría y Propiedad Intelectual**

Desarrollado por **Antonio Horrillo Horrillo**.
<ahorrillo@hoy.es> | <tuanhorrillo@gmail.com> | [GitHub](https://github.com/ahorrillo) | [LinkedIn](https://www.linkedin.com/in/antoniohh)

Proyecto creado y mantenido por Antonio Horrillo Horrillo, responsable Analista, SEO Técnico y Desarrollo.

* **Propiedad**: © 2026 **Vocento**. Todos los derechos reservados.
* **Departamento**: Área de Tecnología / Desarrollo Editorial.
* **Proyecto**: Belta Framework (Core Engine).

Este software ha sido desarrollado por y para el uso exclusivo de las cabeceras y servicios del grupo **Vocento**.

## **📄 Licencia y Términos de Uso**

-**Propiedad:** Grupo Vocento.
-**Licencia:** Privativa (uso interno).

Queda estrictamente prohibida la reproducción, distribución, modificación o comunicación pública, total o parcial, de este código fuente a terceros ajenos al Grupo Vocento sin el consentimiento expreso y por escrito de la dirección tecnológica.

