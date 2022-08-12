<?php 
require_once("../../Database.php");
$conn = conectardb();
$queryPlatos = "select  p.nombreproducto, sum(a.total_producto) as total from asigna a, productos p where a.codproducto=p.codproducto group by p.nombreproducto order by total desc limit 1";
$consultaPlatos = pg_query($conn, $queryPlatos);

$queryUsuarios = "select u.nombre_usuario,c.total from usuarios u,(select u.id_usuario, sum(l.total_producto) as total from usuarios u, Venta v,asigna l where u.id_usuario=v.id_usuario and v.id_venta=l.id_venta group by u.id_usuario) c where u.id_usuario=c.id_usuario order by total desc limit 1";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link rel="icon" href="../img/icon.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <?php
		$usuario = $_GET['nombre'];
        $tipo = $_GET['tipoUsuario'];

	?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <h3>&nbsp &nbsp</h3>
                <h3 class="text-white">Reportes Administrativos</h3>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="ml-auto">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="nav-bar">
                            <form class="d-flex">
                                <div class="NombreUser">
                                    <thead>
                                        <th>
                                        <td>
                                            <?php echo $tipo ?> &nbsp &nbsp <br>&nbsp &nbsp
                                            <?php echo $usuario ?>
                                        </td>
                                        </th>
                                    </thead>
                                </div>
                                <a class="btn btn-custom "
                                    href="../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">Volver</a>
                                <a type="button" class="nav-bar-icons">
                                    <div class="dropdown">
                                        <a class="btn btn-dark" href="#" role="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" color="white" width="25" height="25"
                                                fill="currentColor" class="bi bi-question-circle-fill"
                                                viewBox="0 0 16 16">
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

    <body>
        <h1 class="text-white">space</h1>
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col col-md-8">
                    <div class="row justify-content-center ms-5">
                        <?php
                            $Productos=pg_fetch_array($consultaPlatos);
                            $users=pg_fetch_array($consultaUsuarios)
                        ?>
                        <div class="col">
                            <h5 class="border ms-5 rounded-pill shadow bg-warning border-warning col-md-6 text-center">
                                Producto más vendido
                            </h5>
                            <div class="col-lg-3">
                                <div class="boton4 btn hover-zoom rounded-circle shadow btn-info mt-2">
                                    <img src="img/mejorPlato.png">
                                    <h3 class=" text-center"><?php echo $Productos['nombreproducto'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="border ms-5 rounded-pill shadow bg-warning border-warning col-md-6 text-center">
                                Mejor vendedor
                            </h4>
                            <div class="col-lg-3">
                                <div class="boton4 btn hover-zoom rounded-circle shadow btn-info mt-2">
                                    <img src="img/mejorVendedor.png">
                                    <h3 class=" text-center"><?php echo $users['nombre_usuario'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="border ms-5 rounded-pill shadow bg-warning border-warning col-md-6 text-center">
                                Mejor día de ventas
                            </h5>
                            <div class="col-lg-3 ms-4">
                                <div class="boton4  btn hover-zoom rounded-circle shadow btn-info mt-2">
                                    <img src="img/mejorDia.png">
                                    <h3 class=" text-center"><?php echo $Productos['nombreproducto'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>

        </section>

        <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    < /body>

    <
    /html>