<?php 
require_once("../Database.php");
$conn = conectardb();
$usuario =$_GET['nombre'];
$contraseña =$_GET['contraseña'];
?>

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
				<h2 class="fw-bold text-center py-2">Hola <?php echo $usuario?></h2>

				<!-- LOGIN -->

				<form action="./enviar.php?nombre=<?php echo $usuario?>&contraseña=<?php echo $contraseña ?>" method="POST">
					<div class="mb-1">
						<label for="email" class="form-label">Por favor ingresa una direccion de correo electronico para enviarte la información solicitada:</label>
						<input type="email" class="form-control" name="correo" placeholder="" required >	
					</div>
					<div class="d-grid py-2">
						<div class="row">
							<div class="col d-grid">
								<button type="button" class="btn btn-primary" onclick="location.href='./restaurarContraseña.php'">Volver</button>
							</div>
							<div class="col d-grid">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</div>

				</form>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>