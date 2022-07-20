<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$imagen=false;

$queryPlatos = "INSERT INTO productos (nombreProducto,Precio,imagen) 
values ('$nombreProducto','$Precio','$imagen');";
$insertarPlatos = pg_query($conn, $queryPlatos);


?>