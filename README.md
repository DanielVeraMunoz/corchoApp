# corchoApp: Red vecinal comunitaria

## Descripción

Aplicación web para comunidades de vecinos que permite compartir anuncios, pedir ayuda, vender objetos y organizar eventos comunitarios. Inspirado en plataformas como Nextdoor, diseñado para bloques residenciales pequeños.

## Stack Técnico

- Laravel 11 (PHP 8.2+)
- Blade + Alpine.js + Tailwind CSS
- MySQL
- Laravel Breeze

## Instalación

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

**Requisitos**: XAMPP (Apache + MySQL), Node.js, Composer

## Cuenta Demo

| Email | Contraseña |
|-------|------------|
| demo@corcho.com | password |

## Funcionalidades

- CRUD completo: notas, comunidades, categorías, comentarios
- Sistema de agradecimientos entre vecinos
- Panel de usuario con perfil
- Validación de formularios
- Diseño responsive

## Screenshots

![Pantalla principal](docs/images/screenshot1.png)

![Dashboard](docs/images/screenshot2.png)

![Notas](docs/images/screenshot3.png)

![Crear nota](docs/images/screenshot4.png)

![Categorías](docs/images/screenshot5.png)

![Comunidades](docs/images/screenshot6.png)

## Metodología

- GitFlow con ramas feature y Pull Requests
- Migraciones y seeders
- Modelo Vista Controlador (MVC)
