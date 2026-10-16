<?php
// Parámetros ajustados a la red de contenedores de Docker Compose
$host = "db-mysql"; // <- Nombre EXACTO del servicio de la base de datos en docker-compose.yml
$dbname = "db_proyecto_mvc";
$usuario = "root";
$contrasena = "clave_secreta_nube";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
