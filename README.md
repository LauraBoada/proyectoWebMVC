# Laboratorio #4 · Lift and Shift (PHP MVC + Docker)

Aplicación web PHP (patrón MVC) modernizada con Docker Compose:
Apache + PHP 8.2, MySQL 8.0 y phpMyAdmin.

## Despliegue
```bash
docker compose up --build
```
- Aplicación: http://localhost:8080
- phpMyAdmin: http://localhost:8085  (usuario `root`, contraseña `clave_secreta_nube`)

Crea la tabla `contactos` ejecutando `database/contactos.sql` en phpMyAdmin
(base de datos `db_proyecto_mvc`).
