<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $edad = isset($_POST['edad']) ? $_POST['edad'] : '';

    echo "Recibido: Nombre es $nombre y Edad es $edad";
} else {
    echo "Método no permitido";
}
?>
