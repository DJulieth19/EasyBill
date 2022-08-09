<!--VERIFICACION DE DATOS EN LA BASE DE DATOS-->
<?php 

// Conexion con la base de datos
require_once("Database.php"); 
$conn = conectardb();
//se traen los datos de la fecha actual
date_default_timezone_set('America/Bogota');
$fecha=(date('d-m-y'));
//trae los datos que fueron ingresados en el formulario anterior
$usuario = $_POST['usuario'];			
$contraseña = $_POST['contraseña'];
//Se realiza la consulta para verificar que es usuario exista y que tipo de dato es
$queryUsuarios = "SELECT * from usuarios WHERE nombre_usuario = '$usuario' AND contraseña = '$contraseña'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$tipo= pg_fetch_array($consultaUsuarios);
$tipoU=$tipo['tipo_usuario'];
$nombreU=$tipo['nombre_usuario'];
$id_usuario=$tipo['id_usuario'];

//se verifica apertura de caja

$queryCaja = "SELECT * from caja WHERE id_usuario = '$id_usuario' AND fecha = '$fecha'";
$consultaCaja = pg_query($conn, $queryCaja);
$caja= pg_fetch_array($consultaCaja);
$estado=$caja['estado'];

//se redirige a home administrador o home empleado segun sea el caso
if($tipoU == "Administrador"){
	header("location: ./Administrador/index.php?nombre=$nombreU&tipoUsuario=$tipoU");
	exit();
}else {
	if($tipoU == "Empleado" && $estado == "Cerrado"){
		header("location: ./Empleado/apertura.php?nombre=$nombreU&tipoUsuario=$tipoU&id_usuario=$id_usuario");
		exit();
	}elseif($tipoU == "Empleado" && $estado == "Abierto"){
		header("location: ./Empleado/index.php?nombre=$nombreU&tipoUsuario=$tipoU&id_usuario=$id_usuario");
		exit();       
    }else{
		header("location: ./Empleado/apertura.php?nombre=$nombreU&tipoUsuario=$tipoU&id_usuario=$id_usuario");
		exit();       
    }
}

?>
<!--En caso de que los datos sean incorrectos se despliega el login con la opcion de recuperar contraseña-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyBill</title>
    <link rel="icon" href="./img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    body {
        background: #ffee23;
        background: linear-gradient(to right, #00D594, #00B2FA);
    }

    .bg {
        background-image: url(./img/imagen.png);
        background-position: center center;
    }
    </style>
</head>

<body>
    <div class="container w-75 bg-purple mt-5 rounded-lg shadow-lg">
        <div class="row aling-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-lg">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-center d-none d-sm-block rounded-lg w-12">
                    <img src="./img/logo.png" width="250" alt="">
                </div>
                <div class="text-center d-block d-sm-none rounded-lg w-12">
                    <img src="./img/logo.png" width="100" alt="">
                </div>
                <h2 class="fw-bold text-center py-2">Bienvenido</h2>

                <!-- LOGIN -->

                <form action="sesion.php" method="POST">
                    <div class="mb-4">
                        <label for="username" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña" placeholder="" required>
                    </div>
                    <div class="d-grid py-4">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                    <div= class="my-3">
                        <span><a href="./Login/restaurarContraseña.php">¿Olvidaste tu contraseña?</a></span>
            </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>