<?php 
require_once("../../Database.php");
$conn = conectardb();
$queryPlatos = "SELECT * from productos";
$consultaPlatos = pg_query($conn, $queryPlatos);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Administrador</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../styles.css" rel="stylesheet">
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
                <h3>Administrar Menú</h3>
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
    <main>

        <body>
            <h1> &nbsp </h1>
            <div class="container marketing">
                <!-- Contenedor de platos -->
                <div class="row justify-content-center">
                    <?php
                        while($cantidadProductos=pg_fetch_array($consultaPlatos)){
                        ?>
                    <div class="col-lg-4">
                        <h6 class="fw-normal d-flex justify-content-md-center">
                            <?php echo $cantidadProductos['nombreproducto'] ?></h6>
                        <a
                            href="../Administrador/AdministrarMenu/menu.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                            <img src="./img/plato.png" href=class="bd-placeholder-img" width="155" height="160"
                                role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                                dy=".3em"></text></svg>
                        </a>
                        <div class="d-flex justify-content-md-center">
                            <h7 class="fw-normal"> <?php echo $cantidadProductos['precio'] ?></h7>
                        </div>
                        <div class="d-flex justify-content-md-center">
                            <button type="button" class="btn btn-warning btn-sm mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>
                            <h4>&nbsp</h4>
                            <button type="button" class="btn btn-danger btn-sm" name="borrar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div><!-- /.col-lg-4 -->
                    <?php
                            }
                            ?>
                </div>
            </div>
            <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
        </body>
    </main>
    <footer>
        <div class="row justify-content-end">
            <div class="col-4 functions" data-bs-toggle="modal" data-bs-target="#añadir">
                <button type="button" class="btn btn-primary">Añadir plato</button>
            </div>
            <!-- Modals -->
            <div class="modal py-5" tabindex="-1" id="añadir">
                <div class="modal-dialog">
                    <div class="modal-content rounded-4 ">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <!-- <h5 class="modal-AÑADIR"</h5> -->
                            <h3 class="text-white">espacio</h3>
                            <h2 class="fw-bold mb-0">Añadir plato</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-5 pt-0">
                            <form action="añadir.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-3" name="nombreProducto"
                                        placeholder="Nombre" required>
                                    <label for="Nombre">Nombre del plato</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" min="50" class="form-control rounded-3" name="Precio"
                                        placeholder="Precio en pesos" required maxlength="10" minlength="8">
                                    <label>Precio $ </label>
                                </div>
                                <div class="form-group">
                                    <input type="file" id="archivo" name="archivo" class="form-control-file"
                                        accept="image/*">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn rounded-3 btn-primary" id="btn-save" name="btn-save"
                                        type="submit">Guardar</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>

</html>