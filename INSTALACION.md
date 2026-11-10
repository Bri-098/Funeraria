# Funeraria (CodeIgniter 4)

Proyecto académico de Arquitectura Web: sitio público de una funeraria (Inicio, Servicios, Nosotros y Contacto).

Requisitos: PHP 8.1+ (con `intl` y `mbstring`), Composer y, más adelante, MySQL (Laragon los trae).

## Cómo ejecutarlo

1. Clona el repositorio y entra a la carpeta del proyecto.
2. Instala las dependencias: `composer install`
3. Copia `.env.example` como `.env` y ajusta los valores (URL, teléfono, WhatsApp, base de datos).
4. Arranca el servidor: `php spark serve` y abre http://localhost:8080

## Base de datos (aún no se usa en esta etapa)

1. Crea la base vacía:
   `CREATE DATABASE funeraria CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;`
2. Escribe en `.env` el correo y la contraseña del administrador (`admin.email`, `admin.password`).
3. Ejecuta:
   ```
   php spark migrate
   php spark db:seed AdminSeeder
   ```
