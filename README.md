# **🌰 Belta Framework v1.0 🚀**

**Belta** es un micro-framework MVC ultra-ligero desarrollado en PHP 5.3+, diseñado para la creación rápida de landing pages dinámicas y corporativas con una arquitectura limpia y segura.

## **📋 Características Principales**

* **Motor de Rutas Híbrido:** Soporte para rutas fijas (`/contacto`) y dinámicas con parámetros (`/p/:slug`) mediante detección inteligente de la ruta del servidor.  
* **Gestión de Vistas con Twig:** Separación total de lógica y diseño mediante herencia de plantillas (`.twig`) y layouts base.  
* **Persistencia en SQLite:** Base de datos integrada en un único archivo, eliminando la necesidad de servidores de base de datos externos.  
* **Captura de Leads:** Sistema de procesamiento de formularios `POST` con almacenamiento automático de contactos en base de datos.  
* **Diseño Corporativo:** Layouts base optimizados con Bootstrap 5 para una estética del sector financiero y mercantil.  
* **Compatible con PHP 5.3:** Optimizado para funcionar en entornos legacy sin sacrificar una estructura moderna.

---

## **📂 Estructura del Proyecto**

Plaintext

```
/Belta
├── /app
│   ├── /config       # Configuración de rutas (routes.php)
│   ├── /controllers  # Lógica de negocio (Home, Landing, Error)
│   ├── /db           # Base de datos SQLite (database.sqlite)
│   ├── /models       # Modelos de datos (Lead.php, Landing.php)
│   └── /views        # Plantillas Twig (layouts/, landings/, home...)
├── /core             # Núcleo del Framework
│   ├── Router.php    # Enrutador con soporte para parámetros :slug
│   ├── Database.php  # Conexión Singleton PDO SQLite
│   ├── View.php      # Renderizador de Twig
│   └── Redirect.php  # Helper de redirección
├── /public           # Única carpeta pública (Web Root)
│   ├── .htaccess     # Reescritura de URLs para Apache
│   └── index.php     # Front Controller (Entrada única)
└── README.md
```

---

## **🚦 Sistema de Rutas (`app/config/routes.php`)**

Belta utiliza un enrutador explícito. Las rutas se definen de la siguiente manera:

1. **Ruta de Inicio (Home):**  
   PHP

```
$router->get('/', function() {
    View::render('home_belta');
});
```

2.   
3. **Ruta con Parámetros Dinámicos:**  
   PHP

```
// Captura URLs como: /p/banca-privada o /p/inversiones
$router->get('p/:slug', function($slug) {
    $controller = new LandingController();
    $controller->dinamica($slug);
});
```

4.   
5. **Ruta de Acción (POST):**  
   PHP

```
$router->post('contacto', function() {
    $controller = new LandingController();
    $controller->procesarContacto();
});
```

6. 

---

## **💾 Base de Datos (SQLite)**

El framework utiliza un archivo SQLite ubicado en `/app/db/database.sqlite`.

* **Tabla `landings`**: Contiene el contenido que se inyecta en las plantillas dinámicas (títulos, subtítulos, colores, etc.).  
* **Tabla `leads`**: Registra los datos de los usuarios que completan los formularios de contacto en las landings.

---

## **⚙️ Requisitos e Instalación**

### **Requisitos:**

* Servidor Apache con `mod_rewrite` habilitado.  
* PHP 5.3 o superior.  
* Extensión `pdo_sqlite` activa en PHP.

### **Instalación Rápida:**

1. Sube la carpeta del proyecto a tu servidor.  
2. Asegúrate de que la carpeta `/app/db/` y `/app/cache/` (si Twig lo requiere) tengan permisos de escritura.  
3. Accede vía navegador a la carpeta `/public/`.  
   * Ejemplo: `http://localhost/Belta/public/`

---

## **🛡️ Seguridad y Diseño**

* **Aislamiento de Lógica:** Solo el directorio `public` es accesible desde la web. El núcleo y los datos están protegidos en niveles superiores.  
* **Manejo de Errores:** Incluye un `ErrorController` que renderiza páginas de error 404 y 500 con el mismo diseño corporativo que el resto del sitio.

---

**Belta Framework** \- Simplicidad, orden y rendimiento para proyectos rápidos.

