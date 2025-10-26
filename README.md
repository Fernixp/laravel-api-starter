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
- [Base de Datos](#base-de-datos)
- [Configuración CORS](#configuración-cors)
- [Testing](#testing)

---

## ✨ Características

### 🔌 **API RESTful**
- ✅ CRUD completo de Categorías
- ✅ CRUD completo de Productos
- ✅ Relaciones Eloquent (Producto → Categoría)
- ✅ API Resources para serialización
- ✅ Form Requests para validación
- ✅ CORS habilitado para frontend Angular

### 🛡️ **Seguridad y Validación**
- ✅ Form Request Validation customizado
- ✅ Validación de reglas únicas
- ✅ Manejo de errores 422
- ✅ Mensajes de error descriptivos
- ✅ CORS configurado

### 🔧 **Arquitectura**
- ✅ Controllers API optimizados
- ✅ Form Requests personalizados
- ✅ API Resources para respuestas
- ✅ Relaciones Eloquent
- ✅ Seeders para datos de prueba

---

## 🛠️ Tecnologías

| Tecnología | Versión | Uso |
|-----------|---------|-----|
| **Laravel** | 12.x | Framework Backend |
| **PHP** | 8.2+ | Lenguaje de programación |
| **MySQL** | 8.x | Base de datos |
| **Sanctum** | 4.x | Autenticación API |
| **Spatie Permission** | 6.x | Sistema de roles |

---

## 📦 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP** >= 8.2
- **Composer** >= 2.x
- **MySQL** >= 8.x (o MariaDB)

```bash
# Verificar versiones instaladas
php --version
composer --version
mysql --version
```

---

## 🚀 Instalación

### 1️⃣ **Clonar el repositorio**

```bash
git clone git@github.com:Fernixp/laravel-api-starter.git
cd laravel-api-starter
```

### 2️⃣ **Instalar dependencias PHP**

```bash
composer install
```

### 3️⃣ **Configurar variables de entorno**

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

### 4️⃣ **Ejecutar migraciones y seeders**

```bash
# Crear tablas
php artisan migrate

# Poblar base de datos con datos de prueba
php artisan db:seed
```

### 5️⃣ **Iniciar servidor**

```bash
php artisan serve
```

La API estará disponible en: `http://localhost:8000/api`

---

## 📁 Estructura del Proyecto

```
.
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Api/
│   │   │       ├── CategoriaController.php
│   │   │       └── ProductoController.php
│   │   ├── Requests/
│   │   │   ├── BaseFormRequest.php      # Request base personalizado
│   │   │   ├── CategoriaStoreRequest.php
│   │   │   ├── CategoriaUpdateRequest.php
│   │   │   ├── ProductoStoreRequest.php
│   │   │   └── ProductoUpdateRequest.php
│   │   └── Resources/
│   │       └── ProductoResource.php     # API Resource
│   └── Models/
│       ├── Categoria.php
│       └── Producto.php
├── database/
│   ├── migrations/
│   │   ├── create_categorias_table.php
│   │   └── create_productos_table.php
│   └── seeders/
│       ├── CategoriaSeeder.php
│       └── ProductoSeeder.php
├── routes/
│   └── api.php                          # Rutas API
├── config/
│   └── cors.php                         # Configuración CORS
├── .env.example
└── composer.json
```

---

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

- [Laravel 12 Documentation](https://laravel.com/docs/12.x)
- [Eloquent ORM](https://laravel.com/docs/12.x/eloquent)
- [API Resources](https://laravel.com/docs/12.x/eloquent-resources)
- [Validation](https://laravel.com/docs/12.x/validation)

---

## 👨‍💻 Autor

Desarrollado por [Fernixp](https://github.com/Fernixp) con ❤️ usando Laravel 12

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
