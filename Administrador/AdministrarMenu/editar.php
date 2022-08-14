<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$codproducto=$_POST['codProducto'];
$nombreproducto=$_POST['nombreProducto'];
$precio=$_POST['Precio'];
$queryPlatos = "SELECT ruta_imagen from productos WHERE codProducto='$codproducto';";
$consultaPlatos = pg_query($conn, $queryPlatos);
$usuario1= pg_fetch_array($consultaPlatos);
$direccion=$usuario1['ruta_imagen'];
$queryPlatos = "UPDATE productos SET producto_activo='false' WHERE codproducto='$codproducto';";
$editarPlatos = pg_query($conn, $queryPlatos);
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen,producto_activo)  values ('$nombreproducto','$precio','$direccion','true');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location:./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>