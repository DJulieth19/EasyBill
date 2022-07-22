<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HistorialPedidos</title>
    <link rel="icon" href="../img/icon.png">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- Custom styles for this template -->
    <link href="../styles.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">

</head>
<header>
    <?php
	$usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
    $TipoConsulta = $_GET['consulta'];
	?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <div class="col-md-4">
                <h3>&nbsp &nbsp</h3>
            </div>
            <h2>Historial de Pedidos de <?php echo $TipoConsulta ?></h2>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="nav-bar">
                        <form class="d-flex" role="search">
                            <div class="NombreUser">
                                <thead>
                                    <th>
                                    <td><?php echo $tipo ?> &nbsp &nbsp <br>&nbsp &nbsp <?php echo $usuario ?> </td>
                                    </th>
                                </thead>
                            </div>
                            <a class="btn btn-custom "
                                href="../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">Volver</a>
                            <a type="button" class="nav-bar-icons">
                                <div class="dropdown">
                                    <a class="btn btn-dark" href="#" role="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" color="white" width="25" height="25"
                                            fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                        </svg>
                                    </a>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>

    <body>
        <div class="container container-1">
            <div class="row justify-content-md-center col-md-10">
                <div class="btn-group" role="group">
                    <h4 class="text-white col-md-3 space">space </h4>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Hoy'">Hoy</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Semana'">Semana</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Mes'">Mes</button>
                    <h4 class="text-white col-md-1">space </h4>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" color="blue" width="25" height="25" fill="currentColor"
                            class="bi bi-calendar-date" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z">
                            </path>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container container-2">
            <div class="row justify-content-md-center">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Hoy'">Hoy</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Semana'">Semana</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Mes'">Mes</button>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" color="blue" width="25" height="25" fill="currentColor"
                            class="bi bi-calendar-date ml-2" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z">
                            </path>
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="table-responsive table-striped table-bordered">
                    <table class="table table-hover">
                        <?php
                        require_once("../../Database.php");
                        $conn = conectardb();
                        if($TipoConsulta == "Hoy"){
                            $inicioDia = date('Y-m-d 00:00:00 ', time());
                            $finDia = date('Y-m-d 23:59:59 ', time());
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,v.valorVenta,v.fecha from usuarios u, ventas v where v.id_usuario=u.id_usuario and v.fecha BETWEEN '$inicioDia' AND '$finDia'";
                        }
                        if($TipoConsulta == "Semana"){
                            $inicio = date("Y-m-d");
                            $SemanaAntes = strtotime('-7 day', strtotime($inicio));
                            $SemanaAntes = date('Y-m-d', $SemanaAntes);         
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,v.valorVenta,v.fecha from usuarios u, ventas v where v.id_usuario=u.id_usuario and v.fecha BETWEEN '$SemanaAntes' AND '$inicio'";
                        }
                        if($TipoConsulta == "Mes"){
                            $inicio = date("Y-m-01");
                            $fin = date("Y-m-t");
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,v.valorVenta,v.fecha from usuarios u, ventas v where v.id_usuario=u.id_usuario and v.fecha BETWEEN '$inicio' AND '$fin'";
                        }
                        $consulta = pg_query($conn, $query);
                        ?>
                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="table-responsive table-striped table-bordered">
                                    <table class="table table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th class="col-4 text-center">Nombre empleado</th>
                                                <th class="col-1 text-center">Nombre cliente</th>
                                                <th class="col-3 text-center">Total</th>
                                                <th class="col-3 text-center">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                              while($row = pg_fetch_array($consulta)){
                            ?>
                                            <tr>
                                                <td class="col-4" scope="row"><?php echo $row['nombre_usuario'] ?></td>
                                                <td class="col-2 text-center"><?php echo $row['nombrecliente'] ?></td>
                                                <td class="col-3 text-center"><?php echo $row['valorventa'] ?></td>
                                                <td class="col-3 text-center"><?php echo $row['fecha'] ?></td>
                                            </tr>
                                            <?php
                              }
                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
              $query = 'SELECT sum(v.valorVenta) from productos p, asigna a, ventas v where p.codProducto=a.codProducto and v.idVenta=a.idVenta';
              $consultaTotal = pg_query($conn, $query);
              $suma= pg_fetch_array($consultaTotal);
              $Total = $suma['sum']
            ?>


                            <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</main>

</html>