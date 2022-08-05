<!--VERIFICACION DE DATOS EN LA BASE DE DATOS-->
<?php 
//se conecta con la base de datos
require_once("../Database.php");
$conn = conectardb();
//trae los datos que fueron ingresados en el formulario anterior
$usuario =$_POST['usuario'];
$cedula=$_POST['pregunta1'];
$fexpedicion = $_POST['pregunta2'];
$celular = $_POST['pregunta3'];
//se hace la consulta con la base de datos para poder encontrar la contraseña
$queryVerificar = "select u.contraseña from usuarios u,recuperacion r where u.nombre_usuario='$usuario' and r.cedula='$cedula' and r.fexpedicion='$fexpedicion' and r.celular='$celular' and u.id_usuario=r.id_usuario";
$consultaVerificar = pg_query($conn, $queryVerificar);
$contraseña= pg_fetch_array($consultaVerificar);
$contraseña=$contraseña['contraseña'];
echo $contraseña;
$queryUsuarios = "SELECT * from usuarios WHERE nombre_usuario = '$usuario' AND contraseña = '$contraseña'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$tipo= pg_fetch_array($consultaUsuarios);
$tipoU=$tipo['tipo_usuario'];
$nombreU=$tipo['nombre_usuario'];
//Si los datos son correctos redirige una ventana que muestra la contraseña
if($tipoU == "Administrador"){
	header("location: ./enviar.php?nombre=$nombreU&contraseña=$contraseña");
	exit();
}else {
	if($tipoU == "Empleado"){
		header("location: ./enviar.php?nombre=$nombreU&contraseña=$contraseña");
		exit();
	}
}
//si los datos son incorrecto redirige al login otra vez
header("location: ../sesion.php");
exit();
?>