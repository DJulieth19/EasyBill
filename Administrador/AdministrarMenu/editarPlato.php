<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<?php 
require_once("../../Database.php");
$conn = conectardb();
$nombreproducto=$_GET['nombreproducto'];
$precio=$_GET['precio'];

$queryPlatos = "SELECT codproducto from productos WHERE nombreproducto='$nombreproducto' AND precio='$precio';";
$consultaPlatos = pg_query($conn, $queryPlatos);
$usuario1= pg_fetch_array($consultaPlatos);

$codproducto=$usuario1['codproducto'];
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
				<h2 class="fw-bold text-center py-2">Editar Platos</h2>

				<!-- EDITAR -->

				<form action="editar.php?codproducto=<?php echo $codproducto?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>" method="POST">
                    <div class="mb-1">
						<label for="username" class="form-label">Nombre de Plato</label>
						<input type="text" class="form-control" value="<?php echo $nombreproducto ?>" name="nombreproducto" placeholder="" required>	
					</div>
					<div class="mb-1">
						<label for="username" class="form-label">Precio</label>
						<input type="text" class="form-control" name="precio" value="<?php echo $precio ?>" placeholder="" required>	
					</div>

					<div class="d-grid py-2">
						<div class="row">
							<div class="col d-grid">
								<button type="button" onclick="location.href='./menu.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'" class="btn btn-primary">Volver</button>
							</div>
							<div class="col d-grid">
								<button type="submit" class="btn btn-primary" onsubmit="Swal.fire({
									icon: 'success',
									title: 'Editado correctamente',
									showConfirmButton: false,
									timer: 1500
									})" >Editar</button>
							</div>
						</div>
					</div>
				</form>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>						
</body>
</html>