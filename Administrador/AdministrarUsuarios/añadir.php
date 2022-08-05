<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombre_usuario=$_POST['nombre_usuario'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tipo_usuario'];
$cedula=$_POST['cedula'];
$fexpedicion = $_POST['fexpedicion'];
$celular = $_POST['celular'];

$queryUsuarios = "INSERT INTO usuarios (nombre_usuario,contraseña,tipo_usuario) values ('$nombre_usuario','$contraseña','$tipo_usuario');";
$insertarUsuarios = pg_query($conn, $queryUsuarios);

$queryUsuarios = "SELECT id_usuario from usuarios WHERE nombre_usuario='$nombre_usuario' AND contraseña='$contraseña' AND tipo_usuario='$tipo_usuario';";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$usuario1= pg_fetch_array($consultaUsuarios);
$id_usuario=$usuario1['id_usuario'];

$queryRecuperacion = "INSERT INTO recuperacion (id_usuario,cedula,fexpedicion,celular) values ('$id_usuario','$cedula','$fexpedicion','$celular');";
$insertarRecuperacion= pg_query($conn, $queryRecuperacion);

header("location:./usuarios.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>