<?php 
require_once("../../Database.php");
$conn = conectardb();
$id_usuario =$_GET['id_usuario'];
echo $id_usuario;
$queryRecuperacion = "DELETE FROM recuperacion WHERE id_usuario = '$id_usuario'";
$borrarRecuperacion = pg_query($conn, $queryRecuperacion);
$queryUsuarios = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
$borrarUsuarios = pg_query($conn, $queryUsuarios);
header("location: ./usuarios.php");
exit();
?>