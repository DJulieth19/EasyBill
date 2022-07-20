<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$imagen=false;

$queryPlatos = "INSERT INTO productos (nombreproducto,precio,imagen)  values ('Arroz chino','18000','false');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location: ./menu.php");
exit();
?>