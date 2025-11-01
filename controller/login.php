<?php
session_start();
include_once("../models/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los valores enviados por el usuario desde el formulario
    $usuario = trim($_POST['email']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM usuarios_normales WHERE email = ? AND contraseña = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    // Usuario y Contraseña de prueba
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: /AnimApp/index.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);
}

include("../views/loginVista.php")
?>
