<?php
    $usuario = $_GET['nombre'];
    $tipo = $_GET['tipoUsuario'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyBill</title>
    <link rel="icon" href="../img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    body {
        background: #ffee23;
        background: linear-gradient(to right, #00D594, #00B2FA);
    }

    .bg {
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
                <h2 class="fw-bold text-center py-2">Cambiar contraseña</h2>

                <!-- LOGIN -->

                <form action="contraseña.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>" method="POST">
                    <div class="mb-1">
                        <label for="username" class="form-label">Ingrese su contraseña actual</label>
                        <input type="text" class="form-control" name="contraseñaactual" placeholder="" required>
                    </div>
                    <div class="mb-1">
                        <label for="username" class="form-label">Ingrese su nueva contraseña</label>
                        <input type="text" class="form-control" name="nuevacontraseña" placeholder="" required>
                    </div>
                    <div class="d-grid py-2">
                        <div class="row">
                            <div class="col d-grid">
                                <button type="button"
                                    onclick="location.href='../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>"
                                    class="btn btn-primary">Volver</button>
                            </div>
                            <div class="col d-grid">
                                <button type="submit" class="btn btn-primary">Cambiar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>