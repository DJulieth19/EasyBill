<?php 
require_once("../../Database.php");
$conn = conectardb();
$queryPlatos = "SELECT * from productos";
$consultaPlatos = pg_query($conn, $queryPlatos);
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Empleado</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <header>
        <h1 class="text-white"> espacio</h1>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col col-md-6 ml-4">
                <div>
                    <!-- START SECTION STORE -->
                    <section class="store ">
                        <div class="container">
                            <div class="items">
                                <div class="row">
                                    <div class="col-6 col-md-4" >
                                        <div class="item shadow mb-4">
                                            <h3 class="item-title">Plato 1</h3>
                                            <img class="item-image " src="./img/plato.png">
                                            <h4 class="item-price text-center">$ 10.000</h4>
                                            <div class="display-flex">
                                                <button class="item-button btn-lg btn-info align-items-center addToCart">Añadir al carrito</button>
                                            </div>
                                        </div>
                                    </div>                   
                                    <div class="col-6 col-md-4" >
                                        <div class="item shadow mb-4">
                                            <h3 class="item-title">Plato 2</h3>
                                            <img class="item-image " src="./img/plato.png">
                                            <h4 class="item-price text-center">$ 10.000</h4>
                                            <div class="display-flex">
                                                <button class="item-button btn-lg btn-info align-items-center addToCart">Añadir al carrito</button>
                                            </div>
                                        </div>
                                    </div>   
                    
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END SECTION STORE -->
                </div>
            </div>
            <div class="col col-md-5">
                    <!-- START SECTION SHOPPING CART -->
                    <section class="shopping-cart shadow">
                        <div class="container">
                                <h1 class="text-center">
                                    Carrito
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
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
                                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                                            data-delay="2000">
                                            <div class="toast-header">
                                                <span>✅</span>
                                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body text-white">
                                                Se aumentó correctamente la cantidad
                                            </div>
                                        </div>
                                        <button class="btn btn-success ml-auto comprarButton" type="button" 
                                            >Finalizar compra</button>
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
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script src="./tienda.js"></script>

</body>

</html>