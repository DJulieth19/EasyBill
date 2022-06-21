<?php 

require_once("Database.php");
$conn = conectardb();

$usuario = $_POST['user'];
$contraseña = $_POST['contra'];

$queryUsuarios = "SELECT tipo_usuario from usuarios WHERE nombre_usuario = '$usuario' AND contrasenia = '$contraseña'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);

if($usuario == "Derly Varón"){
	header("location: ../Administrador/index.php");
	exit();
}else {
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./logi.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
	<link rel="shortcut icon" href="./img/icon.png" type="image/png">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title>EasyBill</title>
</head>
<body>
	<header>
	 	<div class="login-box">
		    <img src="./logol.png" class="avatar" alt="Avatar Image">
		    <h1>Login</h1>
		    <form action = "sesion.php" method = "POST">
		      <label for="username">Usuario</label>
		      <input type="text" name="user" placeholder="Ingrese el usuario">
		      <label for="password">Contraseña</label>
		      <input type="password" name="contra" placeholder="Ingrese la contraseña">
		      <br><br>
		      <input type="submit" value="Ingresa">
  		      <ul class="center" ><a href="https://example.com">Olvidé mi contraseña</a></ul>
		    </form>
		  </div>		
	</header>
</body>
</html>
