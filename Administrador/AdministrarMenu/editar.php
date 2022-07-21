<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreproducto=$_GET['nombreproducto'];
$precio=$_POST['precio'];

$queryPlatos = "UPDATE productos SET nombreproducto='$nombreproducto',precio='$precio' ";
$editarPlatos = pg_query($conn, $queryPlatos);

echo nombreproducto;
echo precio;
##header("location:./menu.php?nombre=$usuario&tipoUsuario=$tipo");
##exit();
?>