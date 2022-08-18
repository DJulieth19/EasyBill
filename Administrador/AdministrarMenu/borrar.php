<?php 
require_once("../../Database.php");
$conn = conectardb();
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
$codproducto =$_GET['codproducto'];
$nombreproducto=$_POST['nombreproducto'];
$precio=$_POST['precio'];
//inactiva el producto para que no lo muestre en el menú
$queryProductos = "UPDATE productos SET  producto_activo='false' WHERE codproducto='$codproducto';";
$borrarProductos = pg_query($conn, $queryProductos);

header("location: ./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>
