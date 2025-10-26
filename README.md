# 🚀 Sistema de Gestión - Backend Laravel 12

API RESTful y aplicación MVC construida con Laravel 12, Livewire 3, Mary UI v2 y Tailwind CSS 4.

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?style=flat-square&logo=php)
![Livewire](https://img.shields.io/badge/Livewire-3-purple?style=flat-square)
![Mary UI](https://img.shields.io/badge/Mary_UI-v2-pink?style=flat-square)

## 📋 Tabla de Contenidos

- [Características](#características)
- [Tecnologías](#tecnologías)
- [Requisitos Previos](#requisitos-previos)
- [Instalación](#instalación)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [API Endpoints](#api-endpoints)
- [Arquitectura MVC](#arquitectura-mvc)
- [Base de Datos](#base-de-datos)
- [Comandos Artisan Personalizados](#comandos-artisan-personalizados)
- [Testing](#testing)

---

## ✨ Características

### 🔌 **API RESTful**
- ✅ CRUD completo de Categorías
- ✅ CRUD completo de Productos
- ✅ Relaciones Eloquent (Producto → Categoría)
- ✅ API Resources para serialización
- ✅ Form Requests para validación
- ✅ CORS habilitado para frontend

### 🖥️ **Aplicación MVC con Livewire**
- ✅ Dashboard administrativo
- ✅ Gestión de usuarios
- ✅ Autenticación con Livewire Volt
- ✅ Mary UI v2 components
- ✅ Tailwind CSS 4
- ✅ Alpine.js para interactividad

### 🛡️ **Seguridad y Validación**
- ✅ Sanctum para autenticación API
- ✅ Form Request Validation
- ✅ Middleware de autenticación
- ✅ Permisos con Spatie Laravel Permission
- ✅ CSRF Protection

### 🔧 **Herramientas de Desarrollo**
- ✅ Comandos Artisan personalizados
- ✅ Seeders para datos de prueba
- ✅ Factories para testing
- ✅ Custom plural helper (español)
- ✅ Query debugging

---

## 🛠️ Tecnologías

| Tecnología | Versión | Uso |
|-----------|---------|-----|
| **Laravel** | 12.x | Framework Backend |
| **PHP** | 8.2+ | Lenguaje de programación |
| **Livewire** | 3.x | Componentes reactivos |
| **Mary UI** | v2 | Biblioteca de componentes |
| **Tailwind CSS** | 4.x | Framework CSS |
| **Alpine.js** | 3.x | JavaScript reactivo |
| **MySQL** | 8.x | Base de datos |
| **Sanctum** | 4.x | Autenticación API |
| **Spatie Permission** | 6.x | Sistema de roles |

---

## 📦 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP** >= 8.2
- **Composer** >= 2.x
- **MySQL** >= 8.x (o MariaDB)
- **Node.js** >= 18.x
- **npm** >= 9.x

```bash
# Verificar versiones instaladas
php --version
composer --version
mysql --version
node --version
npm --version
```

---

## 🚀 Instalación

### 1️⃣ **Clonar el repositorio**

```bash
git clone git@github.com:Fernixp/laravel-mvc-starter.git
cd laravel-mvc-starter
```

### 2️⃣ **Instalar dependencias PHP**

```bash
composer install
```

### 3️⃣ **Instalar dependencias JavaScript**

```bash
npm install
```

### 4️⃣ **Configurar variables de entorno**

```bash
# Copiar archivo de ejemplo
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

Edita el archivo `.env` con tus credenciales:

```env
APP_NAME="Sistema de Gestión"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

# CORS para frontend Angular
SANCTUM_STATEFUL_DOMAINS=localhost:4200
SESSION_DOMAIN=localhost
```

### 5️⃣ **Ejecutar migraciones y seeders**

```bash
# Crear tablas
php artisan migrate

# Poblar base de datos con datos de prueba
php artisan db:seed
```

### 6️⃣ **Compilar assets**

```bash
# Desarrollo
npm run dev

# Producción
npm run build
```

### 7️⃣ **Iniciar servidor**

```bash
php artisan serve
```

La aplicación estará disponible en: `http://localhost:8000`

---

## 📁 Estructura del Proyecto

```
.
├── app/
│   ├── Console/
│   │   ├── Commands/                    # Comandos Artisan personalizados
│   │   │   ├── MakeFullCrudCommand.php  # Generar CRUD completo
│   │   │   ├── MakeFullCrudWeb.php      # Generar CRUD web
│   │   │   ├── MakeLivewireCrearCommand.php
│   │   │   ├── MakeLivewireEditarCommand.php
│   │   │   └── MakeLivewireMostrarCommand.php
│   │   └── Helpers/
│   │       └── SpanishPluralizer.php    # Pluralización en español
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── CategoriaController.php
│   │   │   │   └── ProductoController.php
│   │   │   └── UsuarioController.php
│   │   ├── Requests/
│   │   │   ├── BaseFormRequest.php      # Request base personalizado
│   │   │   ├── CategoriaStoreRequest.php
│   │   │   ├── CategoriaUpdateRequest.php
│   │   │   ├── ProductoStoreRequest.php
│   │   │   └── ProductoUpdateRequest.php
│   │   └── Resources/
│   │       └── ProductoResource.php     # API Resource
│   ├── Livewire/
│   │   └── Usuario/
│   │       ├── CrearUsuario.php
│   │       ├── EditarUsuario.php
│   │       └── MostrarUsuarios.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── Categoria.php
│   │   └── Producto.php
│   └── View/
│       └── Components/
│           └── AppBrand.php
├── database/
│   ├── migrations/
│   │   ├── create_categorias_table.php
│   │   ├── create_productos_table.php
│   │   └── create_permission_tables.php
│   ├── seeders/
│   │   ├── CategoriaSeeder.php
│   │   ├── ProductoSeeder.php
│   │   ├── UserSeeder.php
│   │   ├── RoleSeeder.php
│   │   └── PermisosSeeder.php
│   └── factories/
│       └── UserFactory.php
├── resources/
│   ├── views/
│   │   ├── livewire/
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   ├── dashboard.blade.php
│   │   │   └── usuario/
│   │   ├── components/
│   │   │   ├── layouts/
│   │   │   │   ├── app.blade.php
│   │   │   │   └── empty.blade.php
│   │   │   └── app/
│   │   │       ├── navbar.blade.php
│   │   │       ├── sidebar.blade.php
│   │   │       └── 404.blade.php
│   │   └── welcome.blade.php
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── css/
│       └── app.css
├── routes/
│   ├── api.php                          # Rutas API
│   ├── web.php                          # Rutas web
│   └── console.php
├── config/
│   ├── cors.php
│   ├── sanctum.php
│   ├── permission.php
│   └── mary.php                         # Configuración Mary UI
├── .env.example
├── composer.json
├── package.json
└── vite.config.js
```

### **Migraciones**

```bash
# Crear tabla categorías
php artisan make:migration create_categorias_table

# Crear tabla productos
php artisan make:migration create_productos_table

# Ejecutar migraciones
php artisan migrate

# Rollback
php artisan migrate:rollback

# Refrescar (drop all + migrate)
php artisan migrate:fresh --seed
```

### **Seeders**

```bash
# Ejecutar todos los seeders
php artisan db:seed

# Ejecutar seeder específico
php artisan db:seed --class=CategoriaSeeder
php artisan db:seed --class=ProductoSeeder
php artisan db:seed --class=UserSeeder
```

---

## ⚙️ Comandos Artisan Personalizados

Este proyecto incluye comandos personalizados para acelerar el desarrollo:

### **Generar CRUD Completo API**

```bash
php artisan make:full-crud NombreModelo
```

Genera automáticamente:
- ✅ Modelo
- ✅ Migración
- ✅ Controller API
- ✅ Form Requests (Store/Update)
- ✅ API Resource
- ✅ Seeder

### **Generar CRUD Web (Livewire)**

```bash
php artisan make:full-crud-web NombreModelo
```

Genera automáticamente:
- ✅ Modelo
- ✅ Migración
- ✅ Componente Livewire Crear
- ✅ Componente Livewire Mostrar
- ✅ Componente Livewire Editar
- ✅ Vistas Blade

### **Comandos Individuales**

```bash
# Generar solo componente Livewire Crear
php artisan make:livewire-crear NombreModelo

# Generar solo componente Livewire Mostrar
php artisan make:livewire-mostrar NombreModelo

# Generar solo componente Livewire Editar
php artisan make:livewire-editar NombreModelo
```

---

## 🔧 Configuración CORS

Para permitir requests desde el frontend Angular:

**`config/cors.php`**

```php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:4200'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
```

---

## 🧪 Testing

```bash
# Ejecutar todos los tests
php artisan test

# Ejecutar tests específicos
php artisan test --filter=ExampleTest

# Con cobertura
php artisan test --coverage
```

---

## 📚 Recursos y Documentación

- [Laravel 11 Documentation](https://laravel.com/docs/11.x)
- [Livewire 3 Documentation](https://livewire.laravel.com/docs)
- [Mary UI Documentation](https://mary-ui.com)
- [Tailwind CSS 4](https://tailwindcss.com)
- [Alpine.js](https://alpinejs.dev)
- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission)

---

## 🔍 Debugging

### **Activar Query Logging**

Descomentar en `routes/web.php`:

```php
DB::listen(function ($query){
    dump($query->sql);
});
```

### **Ver logs**

```bash
tail -f storage/logs/laravel.log
```

---

## 🚀 Despliegue en Producción

### **1. Optimizar aplicación**

```bash
# Cache de configuración
php artisan config:cache

# Cache de rutas
php artisan route:cache

# Cache de vistas
php artisan view:cache

# Optimizar autoload
composer install --optimize-autoloader --no-dev
```

### **2. Compilar assets**

```bash
npm run build
```

### **3. Configurar permisos**

```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## 👨‍💻 Autor

Desarrollado por [Fernixp](https://github.com/Fernixp) con ❤️ usando Laravel 12, Livewire 3 y Mary UI v2

---

## 📄 Licencia

Este proyecto está bajo la Licencia MIT.

---

## 🤝 Contribuir

1. Fork el proyecto
2. Crea una rama (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -m 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

---

## 🎉 ¡Gracias por usar este proyecto!

Si te fue útil, no olvides dejar una ⭐
