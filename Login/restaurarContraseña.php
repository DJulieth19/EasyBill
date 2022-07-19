<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyBill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
	body{
		background: #ffee23;
		background: linear-gradient(to right, #00D594, #00B2FA);
	}
	.bg{
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

				<form action="verificar.php" method="POST">
					<div class="mb-4">
						<label for="username" class="form-label">Nombre de Usuario</label>
						<input type="text" class="form-control" name="usuario" placeholder="">	
					</div>
					<div class="mb-4">
						<label for="pregunta" class="form-label">Pregunta 1</label>
						<input type="text" class="form-control" name="pregunta1" placeholder="">						
					</div>
					<div class="mb-4">
						<label for="pregunta" class="form-label">Pregunta 2</label>
						<input type="text" class="form-control" name="pregunta2" placeholder="">	
					</div>
					<div class="mb-4">
						<label for="pregunta" class="form-label">Pregunta 3</label>
						<input type="text" class="form-control" name="pregunta3" placeholder="">	
					</div>
					<div class="d-grid py-4">
						<button type="submit" class="btn btn-primary">Iniciar sesión</button>
					</div>

				</form>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>












<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./estilos.css">
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
	 	<div class="login-box">
		    <img src="../../Imagenes/logol.png" class="avatar" alt="Avatar Image">
		    <h1>Recuperación de contraseña</h1>
		    <form>
		      <label for="username">Usuario</label>
		      <input type="text" name="user" placeholder="Ingrese su usuario">
		      <label for="preguntas">Pregunta 1</label>
		      <input type="text" name="texto" placeholder="Ingrese su respuesta">
           		<label for="preguntas">Pregunta 2</label>
		      <input type="text" name="texto" placeholder="Ingrese su respuesta">
           		<label for="preguntas">Pregunta 3</label>
		      <input type="text" name="texto" placeholder="Ingrese su respuesta">
		      <br><br>
		      <input type="submit" value="Validar">
		    </form>
		  </div>		
</body>
</html>


