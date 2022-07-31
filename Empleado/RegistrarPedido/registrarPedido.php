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
    <title>Empleado</title>
    <link rel="icon" href="../img/icon.png">
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
                <h3>Registrar Pedido</h3>
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
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col col-md-6 ml-4">
                        <div>
                            <!-- Empieza sección de platos -->

                            <div class="container">
                                <div class="items">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <?php
                                                while($cantidadProductos=pg_fetch_array($consultaPlatos)){
                                                ?>

                                            <div class="item shadow mb-4">
                                                <h3 class="item-title">
                                                    <?php echo $cantidadProductos['nombreproducto'] ?></h3>
                                                <img class="item-image " src="./img/plato.png">
                                                <h4 class="item-price text-center">$
                                                    <?php echo $cantidadProductos['precio'] ?></h4>
                                                <div class="display-flex">
                                                    <button class="btn-lg btn-info align-items-center addToCart">Añadir
                                                        al carrito</button>
                                                </div>
                                            </div>

                                            <?php
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Termina sección de platos -->
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <!-- START SECTION SHOPPING CART -->
                        <section class="shopping-cart shadow">
                            <div class="container">
                                <h1 class="text-center">
                                    Carrito
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </h1>

                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="shopping-cart-header">
                                            <h6>Producto</h6>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="shopping-cart-header">
                                            <h6 class="text-truncate">Precio</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="shopping-cart-header">
                                            <h6>Cantidad</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- ? START SHOPPING CART ITEMS -->
                                <div class="shopping-cart-items shoppingCartItemsContainer">
                                </div>
                                <!-- ? END SHOPPING CART ITEMS -->

                                <!-- START TOTAL -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shopping-cart-total d-flex align-items-center">
                                            <p class="mb-0">Total</p>
                                            <p class="ml-4 mb-0 shoppingCartTotal">$0</p>
                                            <div class="toast ml-auto bg-info" role="alert" aria-live="assertive"
                                                aria-atomic="true" data-delay="2000">
                                                <div class="toast-header">
                                                    <span>✅</span>
                                                    <strong class="mr-auto ml-1 text-secondary">Elemento en el
                                                        carrito</strong>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="toast-body text-white">
                                                    Se aumentó correctamente la cantidad
                                                </div>
                                            </div>
                                            <button class="btn btn-success ml-auto comprarButton"
                                                type="button">Finalizar compra</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- END TOTAL -->


                            </div>

                        </section>
                        <!-- END SECTION SHOPPING CART -->
                    </div>
                </div>

            </div>
            <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
        </body>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="./tienda.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>


</body>

</html>