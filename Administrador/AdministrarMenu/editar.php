<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$codproducto=$_GET['codproducto'];
$nombreproducto=$_POST['nombreproducto'];
$precio=$_POST['precio'];

$queryPlatos = "UPDATE productos SET  nombreproducto='$nombreproducto',precio='$precio' WHERE codproducto='$codproducto';";
$editarPlatos = pg_query($conn, $queryPlatos);

header("location:./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>