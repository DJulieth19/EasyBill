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
                <h3>Administrar Usuarios</h3>
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

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="table-responsive table-striped table-bordered">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="col text-center">ID usuario</th>
                            <th class="col text-center">Nombre de usuario</th>
                            <th class="col text-center">Contrasenia</th>
                            <th class="col text-center">Tipo de usuario</th>
                            <th class="col text-center">Opciones</th>
                        </tr>
                    </thead>
                    <?php
                            while($user=pg_fetch_array($consultaUsuarios)){
                        ?>
                    <tbody>
                        <tr>
                            <td class="col text-center"><?php echo $user['id_usuario'] ?></td>
                            <td class="col text-center"><?php echo $user['nombre_usuario'] ?></td>
                            <td class="col text-center"><?php echo $user['contrasenia'] ?></td>
                            <td class="col text-center"><?php echo $user['tipo_usuario'] ?></td>
                            <td>
                                <button type="button" class="btn btn-info"
                                    onclick="location.href='borrarUsuario.php?id_usuario=<?php echo $user['id_usuario']?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">Borrar</button>
                                <button type="button" class="btn btn-info"
                                    onclick="location.href='editarUsuario.php?id_usuario=<?php echo $user['id_usuario']?>&nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                    <?php 
                            }
                        ?>
                </table>
            </div>
        </div>
        <div class="row justify-content-end">
            <button type="button" class="btn btn-info col-2"
                onclick="location.href='añadirUsuario.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>'">Añadir
            </button>
            <button onClick="imprimirPagina();">
                Imprimir
            </button>
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