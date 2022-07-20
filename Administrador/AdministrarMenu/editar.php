<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreProducto=$_GET['nombreproducto'];
$nombreProducto=$_POST['nombreproducto'];
$Precio=$_POST['precio'];

$queryPlato = "UPDATE productos SET nombreproducto = '$nombreProducto',precio = '$Precio'";
$consultaPlato = pg_query($conn, $queryPlato);
$plato= pg_fetch_array($consultaPlato);
$Precio=$plato['precio'];

header("location: ./usuarios.php");
exit();
?>