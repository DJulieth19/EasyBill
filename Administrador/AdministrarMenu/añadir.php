<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];

$queryUsuarios = "INSERT INTO productos (nombreProducto,Precio) values ('$nombreProducto','$Precio','$contraseña');";
$insertarUsuarios = pg_query($conn, $queryUsuarios);

header("location: ./menu.php");
exit();
?>