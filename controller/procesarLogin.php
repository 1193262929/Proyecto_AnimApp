<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['tipo_usuario']) && count($_POST['tipo_usuario']) == 1) {
        $dato = $_POST['tipo_usuario'][0];
        echo $dato;
        switch ($dato) {
            case 'usuario_normal':
                header("Location: /AnimApp/views/registroUsuario.php");
                exit;
            case 'refugio':
                header("Location: /AnimApp/views/registroRefugio.php");
                exit;
            case 'usuarioTienda':
                header("Location: /AnimApp/views/registroTienda.php");
                exit;
            case 'usuarioPaseador':
                header("Location: /AnimApp/views/registroPaseador.php");
                exit;
            case 'veterinaria':
                header("Location: /AnimApp/views/registroVeterinaria.php");
                exit;

            default:
                echo "usuario no valido"; // Aqui deberiamos mostrar una ventana modal con un mesnaje de error
                break;
        }
    } else {
        echo "<p>Por favor selecciona solo una opción</p>"; // Aqui deberiamos mostrar una ventana modal con mensaje de error
    }
}
