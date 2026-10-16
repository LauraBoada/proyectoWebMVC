<h2 class="titulo-seccion">Página de Contacto</h2>
<p class="subtitulo">Déjame tus datos y tu comentario; se guardan de forma persistente en MySQL.</p>

<!-- El controlador inyecta esta variable aquí si existe un mensaje -->
<?php echo $mensaje_db; ?>

<form action="" method="POST" class="formulario">
    <div class="campo">
        <label for="nombre">Tu nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ej: Laura Gómez" maxlength="100"
               value="<?= htmlspecialchars($datos['nombre'], ENT_QUOTES, 'UTF-8') ?>" required>
    </div>

    <div class="campo">
        <label for="correo">Tu correo</label>
        <input type="email" id="correo" name="correo" placeholder="nombre@dominio.com" maxlength="150"
               value="<?= htmlspecialchars($datos['correo'], ENT_QUOTES, 'UTF-8') ?>" required>
    </div>

    <div class="campo">
        <label for="comentario">Tu comentario</label>
        <textarea id="comentario" name="comentario" rows="5" placeholder="Cuéntame qué piensas..." required><?= htmlspecialchars($datos['comentario'], ENT_QUOTES, 'UTF-8') ?></textarea>
    </div>

    <button type="submit" class="btn btn-primario btn-grande">Enviar Mensaje</button>
</form>
