<?php

require_once 'Database.php';

session_start();
$usuario = $_POST['user'];
$clave = $_POST['contra'];

$query = "SELECT * FROM usuarios WHERE nombre_usuario ='$usuario' AND contrasenia = '$clave'";
$consulta = pg_query($conexion, $query);
$cantidad = pg_num_rows($consulta);

if ($cantidad > 0) {
	header("location: ../Administrador/index.php");
} else {
	//
	header("location: login.php");
};