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
				<div class="text-center">
					<img src="./img/logo.png" class="rounded mx-auto d-block" alt="">
				</div>
				<h2 class="fw-bold text-center py-2">Bienvenido.</h2>

				<!-- LOGIN -->

				<form action="sesion.php" method="POST">
					<div class="mb-4">
						<label for="username" class="form-label">Nombre de Usuario</label>
						<input type="text" class="form-control" name="usuario" placeholder="">	
					</div>
					<div class="mb-4">
						<label for="password" class="form-label">Contraseña</label>
						<input type="password" class="form-control" name="contraseña" placeholder="">						
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
