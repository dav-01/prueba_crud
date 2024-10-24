# Proyecto CRUD con Laravel

Este es un proyecto básico de CRUD desarrollado en Laravel. A continuación se detallan los pasos para configurar y levantar la aplicación en el entorno local

## Requisitos Previos

Asegúrate de tener instalados los siguientes programas en tu sistema:

- **PHP** >= 8.0
- **Composer** (https://getcomposer.org/)
- **Node.js** y **npm** (https://nodejs.org/)
- **MySQL** o MariaDB
- **Git**

## Instalación en Local
php artisan serve

Sigue estos pasos para ejecutar el proyecto en tu entorno local.

### 1. Clonar el Repositorio
```bash
git clone https://github.com/dav-01/prueba_crud.git
cd prueba_crud

```

### 2. Instalar Dependencias de PHP
```bash
composer install

```

### 3. Instalar Dependencias de Node.js
```bash
npm install && npm run build
```

### 4. Configurar el Archivo .env
```bash
Copia el archivo .env.example como .env:

Edita el archivo .env y configura las variables:

APP_NAME="Laravel"
APP_ENV="local"
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

```

### 5. Generar la Clave de Aplicación
```bash
php artisan key:generate
```

### 6. Ejecutar las Migraciones y Seeders
```bash
php artisan migrate 
php artisan db:seed
```
### 7. Levantar el Servidor Local
```bash
php artisan serve
```
### 8. Usuario inical para logearse

Correo: admin@example.com
Clave: password123