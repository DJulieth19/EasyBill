<?php 

require_once("../Database.php");
$conn = conectardb();

$usuario =$_POST['usuario'];
$cedula=$_POST['pregunta1'];
$fexpedicion = $_POST['pregunta2'];
$celular = $_POST['pregunta3'];

$queryVerificar = "select u.contrasenia from usuarios u,recuperacion r where u.nombre_usuario='$usuario' and r.cedula='$cedula' and r.fexpedicion='$fexpedicion' and r.celular='$celular' and u.id_usuario=r.id_usuario";
$consultaVerificar = pg_query($conn, $queryVerificar);
$contraseña= pg_fetch_array($consultaVerificar);
$contrasenia=$contraseña['contrasenia'];
echo $contrasenia;
$queryUsuarios = "SELECT * from usuarios WHERE nombre_usuario = '$usuario' AND contrasenia = '$contrasenia'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$tipo= pg_fetch_array($consultaUsuarios);
$tipoU=$tipo['tipo_usuario'];
$nombreU=$tipo['nombre_usuario'];
if($tipoU == "Administrador"){
	header("location: ../Administrador/index.php?nombre=$nombreU&tipoUsuario=$tipoU");
	exit();
}else {
	if($tipoU == "Empleado"){
		header("location: ../Empleado/index.php?nombre=$nombreU&tipoUsuario=$tipoU");
		exit();
	}
}
?>