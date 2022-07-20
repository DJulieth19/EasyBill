<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$id_usuario =$_GET['id_usuario'];
$nombre_usuario=$_POST['nombre_usuario'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tipo_usuario'];
$cedula=$_POST['cedula'];
$fexpedicion = $_POST['fexpedicion'];
$celular = $_POST['celular'];
$queryUsuarios = "INSERT INTO usuarios (nombre_usuario,contrasenia,tipo_usuario) values ('$nombre_usuario','$contraseña','$tipo_usuario');";
$insertarUsuarios = pg_query($conn, $queryUsuarios);
$queryRecuperacion = "INSERT INTO recuperacion (id_usuario,cedula,fexpedicion,celular) values ('$id_usuario','$cedula','$fexpedicion','$celular');";
$insertarRecuperacion= pg_query($conn, $queryRecuperacion);
header("location: ./usuarios.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'");
exit();
?>