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
//consulta para traer la ruta de la imagen del producto a editar
$queryPlatos = "SELECT ruta_imagen from productos WHERE codProducto='$codproducto';";
$consultaPlatos = pg_query($conn, $queryPlatos);
$usuario1= pg_fetch_array($consultaPlatos);
$direccion=$usuario1['ruta_imagen'];
//actualizacion en la base de datos del producto a inactivo para que no vuelva a aparecer en el menú
$queryPlatos = "UPDATE productos SET producto_activo='false' WHERE codproducto='$codproducto';";
$editarPlatos = pg_query($conn, $queryPlatos);
//insercion a la base de datos un nuevo producto con los nuevo atributos del producto
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen,producto_activo)  values ('$nombreproducto','$precio','$direccion','true');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location:./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>