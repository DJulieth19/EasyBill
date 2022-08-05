<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$id_usuario=$_GET['id_usuario'];
$nombre_usuario=$_POST['nombre_usuario'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tipo_usuario'];
$cedula=$_POST['cedula'];
$fexpedicion = $_POST['fexpedicion'];
$celular = $_POST['celular'];
$queryUsuarios = "UPDATE usuarios SET nombre_usuario='$nombre_usuario',contraseña='$contraseña',tipo_usuario='$tipo_usuario' WHERE id_usuario='$id_usuario'";
$editarUsuarios = pg_query($conn, $queryUsuarios);
$queryRecuperacion = "UPDATE recuperacion SET cedula='$cedula',fexpedicion='$fexpedicion',celular='$celular' WHERE id_usuario='$id_usuario'";
$editarRecuperacion= pg_query($conn, $queryRecuperacion);
header("location:./usuarios.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>