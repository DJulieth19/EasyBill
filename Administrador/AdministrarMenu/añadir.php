<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,imagen)  values ('$nombreProducto','$Precio','false');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location: ./menu.php");
exit();
?>