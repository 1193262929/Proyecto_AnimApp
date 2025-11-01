<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!isset($_SESSION['usuario'])) {
    // Si no hay usuario logueado, redirige al login
    header("Location: /AnimApp/controller/login.php");
    exit();
}

?>