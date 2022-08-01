<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
$Precio=$_POST['Precio'];
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen)  values ('$nombreProducto','$Precio','nohayfoto');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location: ./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>