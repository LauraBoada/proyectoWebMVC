-- PARTE 1: script base que entrega la guía (Paso 5)
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- PARTE 2: Reto calificable (punto 1) -> agregar correo y comentario
ALTER TABLE contactos
    ADD COLUMN correo VARCHAR(150) NOT NULL AFTER nombre,
    ADD COLUMN comentario TEXT NOT NULL AFTER correo;
