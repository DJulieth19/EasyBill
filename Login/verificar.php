<!--VERIFICACION DE DATOS EN LA BASE DE DATOS-->
<?php 
//se conecta con la base de datos
require_once("../Database.php");
$conn = conectardb();
//trae los datos que fueron ingresados en el formulario anterior
$usuario =$_POST['usuario'];
$respuesta1=$_POST['respuesta1'];
$respuesta2= $_POST['respuesta2'];
$respuesta3= $_POST['respuesta3'];
//se hace la consulta con la base de datos para poder encontrar la contraseña
$queryVerificar = "select u.contraseña from usuarios u,recuperacion r where u.nombre_usuario='$usuario' and r.respuesta1='$respuesta1' and r.respuesta2='$respuesta2' and r.respuesta3='$respuesta3' and u.id_usuario=r.id_usuario";
$consultaVerificar = pg_query($conn, $queryVerificar);
$contraseña= pg_fetch_array($consultaVerificar);
$contrasenia=$contraseña['contraseña'];
echo $contrasenia;
$queryUsuarios = "SELECT * from usuarios WHERE nombre_usuario = '$usuario' AND contraseña = '$contrasenia'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$tipo= pg_fetch_array($consultaUsuarios);
$tipoU=$tipo['tipo_usuario'];
$nombreU=$tipo['nombre_usuario'];
//Si los datos son correctos redirige una ventana que muestra la contraseña
if($tipoU == "Administrador"){
	header("location: ./enviar.php?nombre=$nombreU&contraseña=$contrasenia");
	exit();
}else {
	if($tipoU == "Empleado"){
		header("location: ./enviar.php?nombre=$nombreU&contraseña=$contrasenia");
		exit();
	}
}
//si los datos son incorrecto redirige al login otra vez
header("location: ../sesion.php");
exit();
?>