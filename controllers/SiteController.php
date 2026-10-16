<?php
// controllers/SiteController.php
require_once 'models/ContactoModel.php';

class SiteController {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function manejarPeticion() {
        // Capturar sección actual
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'inicio';
        $mensaje_db = "";

        // Valores del formulario (para no perderlos si hay un error de validación)
        $datos = ['nombre' => '', 'correo' => '', 'comentario' => ''];

        // Procesar formulario si es la sección contacto y viene por POST
        if ($url === 'contacto' && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
            $datos['nombre']     = trim($_POST['nombre'] ?? '');
            $datos['correo']     = trim($_POST['correo'] ?? '');
            $datos['comentario'] = trim($_POST['comentario'] ?? '');

            if ($datos['nombre'] === '' || $datos['correo'] === '' || $datos['comentario'] === '') {
                $mensaje_db = "<div class='alerta alerta-error' role='alert'><strong>Faltan datos.</strong> Completa nombre, correo y comentario.</div>";
            } elseif (!filter_var($datos['correo'], FILTER_VALIDATE_EMAIL)) {
                $mensaje_db = "<div class='alerta alerta-error' role='alert'><strong>Correo no válido.</strong> Revisa que tenga el formato nombre@dominio.com</div>";
            } else {
                $modelo = new ContactoModel($this->conexion);
                $exito = $modelo->guardarContacto($datos['nombre'], $datos['correo'], $datos['comentario']);

                if ($exito) {
                    $nombre_seguro = htmlspecialchars($datos['nombre'], ENT_QUOTES, 'UTF-8');
                    $mensaje_db = "<div class='alerta alerta-exito' role='alert'><strong>¡Mensaje guardado con éxito, $nombre_seguro!</strong> Tu correo y tu comentario ya quedaron almacenados en la base de datos MySQL.</div>";
                    $datos = ['nombre' => '', 'correo' => '', 'comentario' => ''];
                } else {
                    $mensaje_db = "<div class='alerta alerta-error' role='alert'><strong>Error al guardar.</strong> Verifica que la tabla contactos tenga las columnas correo y comentario.</div>";
                }
            }
        }

        // Cargar los componentes visuales (Vistas)
        require_once 'views/header.php';

        switch ($url) {
            case 'inicio':
                require_once 'views/inicio.php';
                break;
            case 'servicios':
                require_once 'views/servicios.php';
                break;
            case 'gustos':
                require_once 'views/gustos.php';
                break;
            case 'contacto':
                require_once 'views/contacto.php';
                break;
            default:
                require_once 'views/404.php';
                break;
        }

        require_once 'views/footer.php';
    }
}
