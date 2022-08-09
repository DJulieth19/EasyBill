<?php 
require_once("../../Database.php");
$conn = conectardb();
$queryUsuarios = "SELECT * from usuarios where tipo_usuario='Empleado'";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Administrar usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/icon.png">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>


    <header>
        <?php
                $usuario = $_GET['nombre'];
                $tipo = $_GET['tipoUsuario'];
            ?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <h3>&nbsp &nbsp</h3>
                <h3 class="text-white">Administrar Usuarios</h3>
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
                                                fill="currentColor" class="bi bi-question-circle-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                            </svg>
                                        </a>
                                    </div>
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
                <!-- Empieza contenedor de usuarios -->
                     <div class="container">
                        <div class="items">
                            <!-- Contenedor usuarios -->
                            <div class="row justify-content-center">
                                <?php
                                while($user=pg_fetch_array($consultaUsuarios)){
                                 ?>
                                    <div class="col-lg-3">
                                        <div class="item shadow mb-4">
                                            <h3 class="item-title"><?php echo $user['nombre_usuario'] ?></h3>
                                            <img class="item-image me-5"
                                                src="<?php echo $user['ruta_imagen'] ?>">
                                            <div class="p-2">
                                                    <div class="col-md-8 ms-4">
                                                        <h5 class="text-center">
                                                               Contraseña: <?php echo $user['contraseña'] ?>
                                                        </h5>
                                                        <h5 class="text-center">
                                                               <?php echo $user['tipo_usuario'] ?>
                                                        </h5>
                                                    </div>
                                                <div class="d-flex ms-4 justify-content-center">
                                                    <div class="col">
                                                    <button type="button" class="btn btn-warning"
                                                      onclick="location.href='editarUsuario.php?id_usuario=<?php echo $user['id_usuario']?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-pencil-square"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                            
                                                    </div>
                                                    <div class="col">
                                                        <button type="button" class="btn btn-danger"
                                                        onclick="location.href='borrarUsuario.php?id_usuario=<?php echo $user['id_usuario']?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                 <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                        </svg>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /.col-lg-3 -->
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
             </div>
             <div class="col col-3">
                    <div class="row">
                        <button type="button" class="btn btn-info col-md-6 ms-4" data-bs-toggle="modal" data-bs-target="#añadir">
                            <h5 class="text-white">Añadir usuario</h5>
                            <img src="./img/addUser.png">
                        </button>
                        <!-- Modals -->
                        <div class="modal py-5" tabindex="-1" id="añadir">
                            <div class="modal-dialog">
                                <div class="modal-content rounded-4 ">
                                    <div class="modal-header p-5 pb-4 border-bottom-0">
                                        <!-- <h5 class="modal-AÑADIR"</h5> -->
                                        <h3 class="text-white">espacio</h3>
                                        <h2 class="fw-bold mb-0">Añadir plato</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5 pt-0">
                                        <form
                                            action="añadir.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3" name="nombreProducto"
                                                     required>
                                                <label for="Nombre">Nombre del plato</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-3"
                                                    name="contraseña"  required maxlength="10"
                                                    minlength="4">
                                                <label>Contraseña </label>
                                            </div>
                                            <form action="../../form-result.php" target="_blank">
                                              <p>

                                                Tipo de empleado:

                                                <select name="tipo">

                                                  <option>Administrador</option>

                                                  <option>Empleado</option>
                                                </select>

                                              </p>
                                            </form>
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
                        <!-- <button onClick="imprimirPagina();" class="col-md-4">
                            Imprimir
                        </button>-->
                        <div class="Acceso">
                            <table class="table table-hover border border-primary table-striped table-responsive p-4 ">
                                <h5 class="mt-4 text-center">Acceso Rápido</h5>
                                <tbody>
                                    <tr>
                                        <th>
                                            <a href="../ConsultaVentas/Ventas.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                            Consulta de Ventas
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a href="../AdministrarUsuarios/usuarios.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                            Administrar Usuarios
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a href="../AdministrarUsuarios/usuarios.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                            Reportes Administrativos
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <a href="../ConsultaActividad/Actividad.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
                                            Consulta de Actividad
                                            </a>
                                        </th>
                                    </tr>
                                    <tr>
                                         <th>
                                            <a href="../HistorialPedidos/Pedidos.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">
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
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script>
        function imprimirPagina(){
            window.print();
        }
    </script>
</body>

</html>
