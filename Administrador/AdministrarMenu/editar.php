<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreproducto=$_GET['nombreproducto'];
$precio=$_GET['precio'];

$queryUsuarios = "SELECT codproducto from productos WHERE nombreproducto='$nombreproducto' AND precio='$precio';";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$usuario1= pg_fetch_array($consultaUsuarios);
$codproducto=$usuario1['codproducto'];

$queryPlatos = "UPDATE productos SET  codproducto='$codproducto',nombreproducto='$nombreproducto',precio='$precio'";
$editarPlatos = pg_query($conn, $queryPlatos);

echo $nombreproducto;
echo $precio;

##header("location:./menu.php?nombre=$usuario&tipoUsuario=$tipo");
##exit();
?>