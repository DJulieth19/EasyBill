<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
    $id_usuario=  $_GET['id_usuario'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyBill</title>
	<link rel="icon" href="../img/icon.png">
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
    <div class="container w-25 bg-purple my-5 rounded-lg shadow-lg">
		<div class="row aling-items-stretch">
			<div class="col bg-white p-5 rounded-end">
				<div class="text-center d-none d-sm-block rounded-lg w-12">
					<img src="./img/logo.png" width="250" alt="">
				</div>
				<div class="text-center d-block d-sm-none rounded-lg w-12">
					<img src="./img/logo.png" width="100" alt="">
				</div>
				<h2 class="fw-bold text-center py-2">Apertura de caja</h2>

				<!-- LOGIN -->

				<form action="añadircaja.php?usuario=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $id_usuario?>" method="POST">
					<div class="mb-3">
						<label for="dinero" class="form-label">Valor inicial</label>
						<input type="number" class="form-control" name="dinero" placeholder="Ingrese el valor total del dinero actual en la caja" required>	
					</div>
					<div class="d-grid py-2">
						<div class="row">
							<div class="col d-grid">
								<button type="button" onclick="location.href='../index.php'" class="btn btn-primary">Volver</button>
							</div>
							<div class="col d-grid">
								<button type="submit" class="btn btn-primary">Abrir caja</button>
							</div>
						</div>
					</div>
				</form>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>