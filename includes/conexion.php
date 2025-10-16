<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "bd_animapp";

$conexion = new mysqli($host, $username, $password, $db_name);

if ($conexion->connect_error) {
    die ("Error:" . $conexion -> connect_error);
} else {
    echo "Conexion";
}




?>