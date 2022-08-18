<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$id_usuario =$_GET['id_usuario'];
//El usuario pasara de activo a inactivo para que no tenga acceso una vez se haya eliminado
$queryUsuarios = "UPDATE usuarios SET usuario_activo = 'false' WHERE id_usuario = '$id_usuario'";
$borrarUsuarios = pg_query($conn, $queryUsuarios);
header("location: ./usuarios.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>