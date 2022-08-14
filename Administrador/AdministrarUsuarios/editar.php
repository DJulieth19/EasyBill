<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();

$nombre_usuario=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$ciudad=$_POST['ciudad'];
$Nombre_familiar = $_POST['nombreFamiliar'];
$Comida_favorita = $_POST['comida'];

$queryUsuariosC = "SELECT * from usuarios WHERE nombre_usuario = '$nombre_usuario' AND contraseña = '$contraseña'";
$consultaUsuarios = pg_query($conn, $queryUsuariosC);
$tipo= pg_fetch_array($consultaUsuarios);
$id_usuario=$tipo['id_usuario'];

$queryUsuarios = "UPDATE usuarios SET nombre_usuario='$nombre_usuario',contraseña='$contraseña' WHERE id_usuario='$id_usuario'";
$editarUsuarios = pg_query($conn, $queryUsuarios);
$queryRecuperacion = "UPDATE recuperacion SET respuesta1='$ciudad',respuesta2='$Nombre_familiar',respuesta3='$Comida_favorita' WHERE id_usuario='$id_usuario'";
$editarRecuperacion= pg_query($conn, $queryRecuperacion);
header("location:./usuarios.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>