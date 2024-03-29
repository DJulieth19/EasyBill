<?php 
require_once("../../Database.php");
$conn = conectardb();
//se traen los productos que esten activos 
$queryPlatos = "SELECT * from productos where producto_activo='true'";
$consultaPlatos = pg_query($conn, $queryPlatos);
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
                <h3 class="text-white">Administrar Menú</h3>
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
                                        <a class="btn btn-dark" href="https://sites.google.com/unillanos.edu.co/wikibill/inicio/administrador/administrar-men%C3%BA" role="button">
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
            <div class="row  justify-content-between">
                <div class="col col-8">
                    <!-- Empieza contenedor de platos -->
                    <section class="store ">
                        <div class="container">
                            <div class="items">
                                <!-- Contenedor de platos -->
                                <div class="row justify-content-center">
                                    <?php
                                        //muestra los productos que estan activos
                                        while($cantidadProductos=pg_fetch_array($consultaPlatos)){
                                        ?>
                                    <div class="col-lg-3">
                                        <div class="item shadow mb-4">
                                            <h3 class="item-title">
                                                <?php echo $cantidadProductos['nombreproducto'] ?></h3>
                                            <img class="item-image me-3"
                                                src="<?php echo $cantidadProductos['ruta_imagen'] ?>">
                                            <div class="p-2">
                                                <div class="col-md-8 ms-3">
                                                    <h5 class="item-price text-center">$
                                                        <?php echo $cantidadProductos['precio'] ?>
                                                    </h5>
                                                    <!-- Aquí está el cod de producto oculto -->
                                                    <p hidden><?php echo $cantidadProductos['codproducto'] ?></p>
                                                </div>
                                                <div class="d-flex ms-3 justify-content-center">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-warning btn-sm mr-2"
                                                            name="editar" data-bs-toggle="modal" data-bs-target="#editar"
                                                            onClick='getDataRow("<?php echo $cantidadProductos['nombreproducto'] ?>","<?php echo $cantidadProductos['precio'] ?>","<?php echo $cantidadProductos['codproducto'] ?>")'>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger btn-sm mr-2"
                                                            name="borrar"
                                                            onclick="location.href='borrarPlato.php?nombreproducto=<?php echo $cantidadProductos['nombreproducto'] ?>&precio=<?php echo $cantidadProductos['precio'] ?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /.col-lg-4 -->
                                    <?php
                            }
                            ?>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Termina seccion de platos -->

                </div>
                <div class="col col-3">
                    <div class="row">
                        <div class="col ms-4 functions" data-bs-toggle="modal" data-bs-target="#añadir">
                            <button type="button" class="btn btn-info">
                                <h5 class="text-white">Añadir plato</h5>
                                <img src="./img/plato2.png">
                            </button>
                        </div>
                        <!-- Modals -->
                        <div class="modal py-5" tabindex="-1" id="añadir">
                            <div class="modal-dialog">
                                <div class="modal-content rounded-4 ">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <!-- <h5 class="modal-AÑADIR"</h5> -->
                                        <img width="50px" height="50px" src="../img/icon.png" class="me-4">
                                        <h2 class="fw-bold mb-0">Añadir plato</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form
                                            action="añadir.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>"
                                            method="POST" enctype="multipart/form-data" onSubmit="Swal.fire({ icon: 'success',title: 'Guardado correctamente',showConfirmButton: false,
                                                    timer: 1700})">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="nombreProducto"
                                                    placeholder="Nombre" required>
                                                <label for="Nombre">Nombre del plato</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" min="50" class="form-control rounded-3"
                                                    name="Precio" placeholder="Precio en pesos" required maxlength="10"
                                                    minlength="8">
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
                        <div class="modal py-5" tabindex="-1" id="editar">
                            <div class="modal-dialog">
                                <div class="modal-content rounded-4 ">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <!-- <h5 class="modal-Editar"</h5> -->
                                        <img width="50px" height="50px" src="../img/icon.png" class="me-4">
                                        <h2 class="fw-bold mb-0">Editar plato</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form
                                            action="editar.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>"
                                            method="POST" enctype="multipart/form-data" onSubmit="Swal.fire({ icon: 'success',title: 'Guardado correctamente',showConfirmButton: false,
                                                    timer: 1700})">
                                            <div hidden class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" id="codProducto"
                                                    name="codProducto" placeholder="codigo" required>
                                                <label for="codigo">codigo del plato</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" id="nombreProducto"
                                                    name="nombreProducto" placeholder="Nombre" required>
                                                <label for="Nombre">Nombre del plato</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="number" min="50" class="form-control rounded-3" id="Precio"
                                                    name="Precio" placeholder="Precio en pesos" required maxlength="10"
                                                    minlength="8">
                                                <label>Precio $ </label>
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
                        <div class="Acceso">
                            <table class="table table-hover border border-primary table-striped table-responsive p-4 ">
                                <h5 class="mt-4 text-center">Acceso Rápido</h5>
                                <tbody>
                                    <tr>
                                        <th>
                                            <a
                                                href="../ConsultaVentas/Ventas.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Hoy">
                                                Consulta de Ventas
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a
                                                href="../AdministrarUsuarios/usuarios.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                                Administrar Usuarios
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a
                                            href="../Reportes/reportes.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                                Reportes Administrativos
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a
                                                href="../ConsultaActividad/Actividad.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                                Consulta de Actividad
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a
                                                href="../HistorialPedidos/Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&consulta=Hoy">
                                                Historial de pedidos
                                            </a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    //obtiene los datos por cada producto activo    
    const getDataRow = (nombre, precio, cod) => {
        const platos = {
            nombre: nombre,
            precio: precio,
            cod: cod
        }
        console.table(platos)
        document.getElementById('nombreProducto').value = platos.nombre;
        document.getElementById('Precio').value = platos.precio;
        document.getElementById('codProducto').value = platos.cod;
    }
    </script>
</body>

</html>
