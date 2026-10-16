<!-- views/header.php -->
<?php $url = $url ?? 'inicio'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua Cloud · Lift and Shift con Docker</title>

    <!-- Tipografías (si no hay internet, el navegador usa las de respaldo) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <!-- Vinculación del archivo CSS externo -->
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <div class="fondo-orbes" aria-hidden="true"><span></span><span></span><span></span></div>

    <header>
        <a class="marca" href="inicio">
            <span class="marca-logo">☁</span>
            <span class="marca-texto">Aqua<strong>Cloud</strong></span>
        </a>
        <nav>
            <ul>
                <li><a href="inicio"    class="<?= $url === 'inicio'    ? 'activo' : '' ?>">Inicio</a></li>
                <li><a href="servicios" class="<?= $url === 'servicios' ? 'activo' : '' ?>">Servicios</a></li>
                <li><a href="gustos"    class="<?= $url === 'gustos'    ? 'activo' : '' ?>">Mis gustos</a></li>
                <li><a href="contacto"  class="<?= $url === 'contacto'  ? 'activo' : '' ?>">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div id="contenedor-principal">
