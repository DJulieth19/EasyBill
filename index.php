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
		background: linear-gradient(to right, #9F70DC, #6211F0);
	}
	.bg{
		background-image: url(./img/fondo.png);
		background-position: center center;
	}
</style>
</head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col bg">
			</div>
			<div class="col">
				<div class="text-end">
					<img src="./img/logo.png" width="48" alt=""> 
				</div>
				<h2 class="fw-bold text-center py-5">Bienvenido</h2>

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
					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Iniciar sesión</button>
					</div>

				</form>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
