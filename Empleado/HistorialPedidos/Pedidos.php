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
    $idU = $_GET['id_usuario'];
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
                            <div class="NombreUser bg-dark">
                                <thead>
                                    <th>
                                    <td><?php echo $tipo ?> &nbsp &nbsp <br>&nbsp &nbsp <?php echo $usuario ?> </td>
                                    </th>
                                </thead>
                            </div>
                            <div class="bg-dark">

                                <a class="btn btn-custom bg-white"
                                    href="../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $idU?>">Volver</a>
                                <a type="button" class="nav-bar-icons">
                            </div>

                            <div class="dropdown bg-dark">
                                <a class="btn " href="https://sites.google.com/unillanos.edu.co/wikibill/inicio/empleado/historial-de-pedidos-empleado" role="button">
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
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $idU?>&consulta=Hoy'">Hoy</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $idU?>&consulta=Semana'">Semana</button>
                    <button type="button" class="btn btn-outline-primary"
                        onclick="location.href='Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $idU?>&consulta=Mes'">Mes</button>
                    <h4 class="text-white col-md-1">space </h4>
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
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="table-responsive table-striped table-bordered">
                    <table class="table table-hover">
                        <?php
                        require_once("../../Database.php");
                        date_default_timezone_set('America/Bogota');
                        $conn = conectardb();
                        //validacion de la fecha a la cual se desea obtner informacion de historial de pedidos
                        if($TipoConsulta == "Hoy"){
                            //obtencion de la fecha del dia actual
                            $inicioDia = date('Y-m-d 00:00:00 ', time());
                            $finDia = date('Y-m-d 23:59:59 ', time());
                            //consulta para obtener el historial de pedidos del dia actual
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto  and v.Fecha BETWEEN '$inicioDia' AND '$finDia' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha and u.nombre_usuario='$usuario'";
                        }
                        if($TipoConsulta == "Semana"){
                            //obtencion de la fecha de la semana actual
                            $inicio = date("Y-m-d");
                            $SemanaAntes = strtotime('-7 day', strtotime($inicio));
                            $SemanaAntes = date('Y-m-d', $SemanaAntes);
                            //consulta para obtener el historial de pedidos de la semana actual         
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto and v.Fecha BETWEEN '2022-08-12 00:00:00' AND '2022-08-19 23:59:59' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha and u.nombre_usuario='$usuario'";
                        }
                        if($TipoConsulta == "Mes"){
                            //obtencion de la fecha del mes actual
                            $inicio = date("Y-m-01");
                            $fin = date("Y-m-t");
                            //consulta para obtener el historial de pedidos del mes actual 
                            $query = "SELECT u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto and v.Fecha BETWEEN '$inicio' AND '$fin' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha and u.nombre_usuario='$usuario'";
                        }
                        $consulta = pg_query($conn, $query);
                        ?>
                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="table-responsive table-striped table-bordered">
                                    <table class="table table-hover">
                                        <thead class="table-primary">
                                            <tr>
                                                <th class="col-1 text-center">Nombre cliente</th>
                                                <th class="col-3 text-center">Total</th>
                                                <th class="col-3 text-center">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                //muestra los datos traidos por la consulta de historial de pedidos
                              while($row = pg_fetch_array($consulta)){
                            ?>
                                            <tr>
                                                <td class="col-2 text-center"><?php echo $row['nombrecliente'] ?></td>
                                                <td class="col-3 text-center"><?php echo $row['total'] ?></td>
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
                            //validacion de la fecha a la cual se desea obtner informacion del total en historial de pedidos
                            if($TipoConsulta == "Hoy"){
                                //obtencion de la fecha del dia actual
                                $inicioDia = date('Y-m-d 00:00:00 ', time());
                                $finDia = date('Y-m-d 23:59:59 ', time());
                                //consulta para obtener el total de historial de pedidos del dia actual
                                $query = "SELECT sum(c.total) from (select u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto and u.nombre_usuario='$usuario' and v.Fecha BETWEEN '$inicioDia' AND '$finDia' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha) c";
                            }
                            if($TipoConsulta == "Semana"){
                                //obtencion de la fecha de la semana actual
                                $inicio = date("Y-m-d");
                                $SemanaAntes = strtotime('-7 day', strtotime($inicio));
                                $SemanaAntes = date('Y-m-d', $SemanaAntes);
                                //consulta para obtener el total de historial de pedidos de la semana actual         
                                $query = "SELECT sum(c.total) from (select u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto and u.nombre_usuario='$usuario' and v.Fecha BETWEEN '2022-08-12 00:00:00' AND '2022-08-19 23:59:59' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha) c";
                            }
                            if($TipoConsulta == "Mes"){
                                //obtencion de la fecha del mes actual
                                $inicio = date("Y-m-01");
                                $fin = date("Y-m-t");
                                //consulta para obtener el total de historial de pedidos del mes actual
                                $query = "SELECT sum(c.total) from (select u.nombre_usuario,v.nombreCliente,c.total,c.fecha from Usuarios u, Venta v, (select v.Fecha,sum(a.total_producto) AS total from Usuarios u, Venta v, asigna a, Productos p where u.id_usuario=v.id_usuario and v.id_venta=a.id_venta and p.codProducto=a.codProducto and u.nombre_usuario='$usuario' and v.Fecha BETWEEN '$inicio' AND '$fin' GROUP BY v.Fecha) c where u.id_usuario=v.id_usuario and v.Fecha=c.Fecha) c";
                            }
                            $consulta = pg_query($conn, $query);          
                            $consultaTotal = pg_query($conn, $query);
                            $suma= pg_fetch_array($consultaTotal);
                            $Total = $suma['sum']
            ?>


                            <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</main>

</html>