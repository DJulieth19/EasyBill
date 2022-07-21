<?php 
require_once("../../Database.php");
$conn = conectardb();
$codproducto =$_GET['codproducto'];

$nombreproducto=$_POST['nombreproducto'];
$precio=$_POST['precio'];

$queryProductos = "DELETE FROM productos WHERE codproducto = '$codproducto'";
$borrarProductos = pg_query($conn, $queryProductos);

echo $codproducto;
echo $nombreproducto;
echo $precio;

##header("location: ./menu.php");
##exit();
?>
