# Contexto del Proyecto Laravel

## Bootcamp
- **Ciclo**: DAM / Desarrollo de Aplicaciones Multiplataforma
- **Módulo**: Desarrollo Web en Entorno Servidor (Laravel)
- **Duración**: 15 días lectivos

## Temas del curso
1. Entorno de Desarrollo
2. Empezando con Laravel
3. View
4. Formularios y Validaciones
5. Bases de Datos
6. Autenticación Laravel
7. Emails
8. Livewire
9. Capa de Servicio
10. Próximos pasos

## Nivel 1 (Obligatorio) - Entregable
- [ ] MER - Diagrama Entidad Relación
- [ ] Proyecto Laravel instalado
- [ ] Rutas CRUD para equipos y partidos
- [ ] Migraciones y modelos de equipos y partidos
- [ ] Controladores con métodos necesarios
- [ ] Vistas Blade + Tailwind.css
- [ ] Formularios con validación
- [ ] Repositorio GitHub con GitFlow

## Nivel 2 (Opcional)
- [ ] Autenticación con Breeze/Jetstream
- [ ] Envío de emails (registro, recuperación contraseña)
- [ ] Página 404 personalizada

## Nivel 3 (Opcional)
- [ ] Livewire - funcionalidad dinámica
- [ ] Capa de Servicio (Service Layer)

## Tema del proyecto
**App de comunidad de vecinos (corchoApp)**

## Tech Stack
- macOS
- XAMPP (MySQL)
- Composer
- Laravel
- VS Code
- GitHub

## Base de Datos

### Tablas del proyecto

```sql
Table communities {
  id int [pk, increment]
  name varchar
  adress varchar
  postal_code varchar
  created_at timestamp
}

Table users {
  id int [pk, increment]
  community_id int [ref: > communities.id]
  name varchar
  email varchar
  password varchar
  apartment_number varchar
  created_at timestamp
}

Table categories {
  id int [pk, increment]
  name varchar
  created_at timestamp
}

Table posts {
  id int [pk, increment]
  user_id int [ref: > users.id]
  category_id int [ref: > categories.id]
  title varchar
  description text
  event_date date
  is_pinned boolean
  status boolean
  created_at timestamp
}

Table comments {
  id int [pk, increment]
  post_id int [ref: > posts.id]
  user_id int [ref: > users.id]
  content text
  created_at timestamp
}

Table thanks {
  id int [pk, increment]
  post_id int [ref: > posts.id]
  giver_id int [ref: > users.id]
  created_at timestamp
}
```

### Relaciones
- `users` → `communities` (many-to-one)
- `posts` → `users` + `categories` (many-to-one)
- `comments` → `posts` + `users` (many-to-one)
- `thanks` → `posts` + `users` (many-to-one)

## Notas
- Primer proyecto Laravel (vengo de MVC con framework OMR)
- Objetivo: aprender, no que haga todo el código
- **Prefferencia**: Escribir todo el código yo mismo. No pedir confirmación para editar, ejecutar directamente.
- **Recordatorio**: Hacer commit en GitHub cuando sea conveniente (antes de instalar Breeze, antes de cambios importantes, etc.)

## Ejercicios del Sprint

### Nivel 1 (Obligatorio)

**Ejercicio 1**
- Diseña el modelo completo de la base de datos del proyecto (MER). Define entidades, atributos y relaciones.
- Crea un nuevo proyecto con Laravel. Soluciona los errores que aparezcan.
- Define las rutas del proyecto. Debe tener CRUD completo para gestionar equipos y partidos.
- Define las migraciones y los modelos de datos de equipos y partidos.
- Crea los controladores y los métodos necesarios para gestionar equipos y partidos.
- Establece las vistas usando Blade y Tailwind.css.
- Crea los formularios necesarios para hacer los CRUDs. Valida la información tanto en la vista como en el controlador.
- Usa un repositorio GitHub siguiendo la secuencia gitflow y utilizando pull-request.

### Nivel 2 (Opcional)

- Implementa el sistema de autenticación con Breeze o Jetstream y habilita el envío de correo electrónico para recuperar contraseña y registro de usuario.
- Crea un sistema que adapte la vista del error 404 a nivel de proyecto.

**Importante**: Las rutas que Breeze o Jetstream usan para login/registro están en `routes/auth.php` y las que no requieren autenticación en `routes/web.php`. Ves con cuidado, ya que podría sobreescribir estas rutas.

### Nivel 3 (Opcional)

- Instala la librería LiveWire y pensa en algún uso práctico dentro de la aplicación.
- Implementa la capa de Servicio en la aplicación.
