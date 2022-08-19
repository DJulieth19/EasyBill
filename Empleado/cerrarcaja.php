<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
	$id_usuario=$_GET['id_usuario'];
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
				<h2 class="fw-bold text-center py-2">Jornada Finalizada</h2>

				<!-- LOGIN -->
				<?php
                    require_once("../Database.php");
                    date_default_timezone_set('America/Bogota');
                    $conn = conectardb();
                    //obtencion de la fecha del dia actual
                    $inicioDia = date('Y-m-d 00:00:00 ', time());
                    $finDia = date('Y-m-d 23:59:59 ', time());
                    //consulta para obtener el historial de pedidos del dia actual
                    $querytotal = "SELECT sum(c.total) from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto  and v.Fecha BETWEEN '$inicioDia' AND '$finDia' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha and u.nombre_usuario='$usuario' and v.MetodoPago='efectivo'";
					$consultaTotal = pg_query($conn, $querytotal);
					$suma= pg_fetch_array($consultaTotal);
					$Total = $suma['sum'];

					$queryinicio = "SELECT dinero from caja where fecha='$inicioDia' and id_usuario='$id_usuario'";
					$consultaTotal = pg_query($conn, $queryinicio);
					$apertura= pg_fetch_array($consultaTotal);
					$inicio = $apertura['dinero'];

					$arqueo= $Total-$inicio;
                ?>
				<div class="mb-3">
					<label for="dinero" class="form-label"> El saldo total obtenido del arqueo de caja es de <?php echo $arqueo?> COP</label>
				</div>
				<div class="d-grid py-2">
						<div class="row">
							<div class="col d-grid">
								<button type="button" onclick="location.href='./index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $id_usuario?>'" class="btn btn-primary">Volver</button>
							</div>
							<div class="col d-grid">
							<button type="button" onclick="location.href='../index.php'" class="btn btn-primary">Finalizar</button>
							</div>
						</div>
					</div>
			</div>	
	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>