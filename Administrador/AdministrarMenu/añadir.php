<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];

$queryPlatos = "INSERT INTO productos (nombreProducto,Precio) values ('$nombreProducto','$Precio','$contraseña');";
$insertarPlatos = pg_query($conn, $queryUsuarios);

header("location: ./menu.php");
exit();
?>