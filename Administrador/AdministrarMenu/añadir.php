<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$ruta=$_POST['archivo'];
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen)  values ('$nombreProducto','$Precio','$ruta');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location: ./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>