<?php
session_start();
include_once("../conexion/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los valores enviados por el usuario desde el formulario
    $usuario = trim($_POST['email']);
    $password = trim($_POST['password']);

    // $query = "SELECT * FROM usuarios_normales WHERE email = ? AND contraseña = ?";

    // PREPARAR LAS CONSULTAS 
    // $querys = [
    //     "SELECT * FROM usuarios_normales WHERE email = ? AND contraseña = ?",
    //     "SELECT * FROM refugios WHERE email = ? AND contraseña = ?",
    //     "SELECT * FROM tiendas WHERE email = ? AND contraseña = ?",
    //     "SELECT * FROM paseadores WHERE email = ? AND contraseña = ?",
    //     "SELECT * FROM veterinarias WHERE email = ? AND contraseña = ?"
    // ];
    $querys = [
        "SELECT tipo_usuario FROM usuarios_normales WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM refugios WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM tiendas WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM paseadores WHERE email = ? AND contraseña = ?",
        "SELECT tipo_usuario FROM veterinarias WHERE email = ? AND contraseña = ?"
    ];

    $redirecciones = [
        'normal' => '/AnimApp/index.php',
        'refugio' => '/AnimApp/views/home/refugio.php',
        'tienda' => '/AnimApp/views/home/tienda.php',
        'paseador' => '/AnimApp/views/home/paseador.php',
        'veterinaria' => '/AnimApp/views/home/veterinaria.php',
    ];

    foreach ($querys as $query) {
        $stmt = mysqli_prepare($mysqli, $query); // Preparar la consulta
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $password); // Enlazar parámetros
        mysqli_stmt_execute($stmt); // Ejecutar la consulta
        $resultado = mysqli_stmt_get_result($stmt); // Obtener resultados

        // Si se encuentra al menos un usuario que coincide
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado); // Obtener la fila encontrada
        $tipo = $fila['tipo_usuario']; // Extraer el tipo de usuario

        // Guardar el email en sesión
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo_usuario'] = $tipo;

        // Redirigir según el tipo de usuario
        if (array_key_exists($tipo, $redirecciones)) {
            header("Location: " . $redirecciones[$tipo]);
        } else {
            // Si el tipo no está definido, redirigir a una página genérica
            header("Location: /AnimApp/index.php");
        }
        exit(); // Finalizar el script después de redirigir
    }
    }

    $error = "Usuario o contraseña incorrectos.";

    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);
}

include("../views/login/loginVista.php");
