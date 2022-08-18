<?php
date_default_timezone_set('America/Bogota');
    $fecha=(date('Y-m-d'));
    $usuario = $_GET['usuario'];
    $tipo = $_GET['tipoUsuario'];
    $id_usuario = $_GET['id_usuario']
?>
<?php 
require_once("../Database.php");
$conn = conectardb();
$dinero=$_POST['dinero'];
$queryCaja = "INSERT INTO caja (estado,fecha,dinero,id_usuario) values ('Abierto','$fecha','$dinero','$id_usuario');";
$insertarCaja = pg_query($conn, $queryCaja);

header("location:./index.php?nombre=$usuario&tipoUsuario=$tipo&id_usuario=$id_usuario");
exit();
?>