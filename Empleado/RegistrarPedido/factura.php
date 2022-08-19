<?php
    require_once("../../Database.php");
    $conn = conectardb();
    //consulta para obtener el usuario que realizo la venta
    $queryVenta = "SELECT u.nombre_usuario, u.tipo_usuario, u.id_usuario from (SELECT * from venta order by Fecha desc limit 1)z, usuarios u where z.id_usuario=u.id_usuario;";
    $consultaVenta = pg_query($conn, $queryVenta);
    $ventaNombreUsuario= pg_fetch_array($consultaVenta);
    $usuario=$ventaNombreUsuario['nombre_usuario'];
    $tipo=$ventaNombreUsuario['tipo_usuario'];
    $idU=$ventaNombreUsuario['id_usuario'];
    //consulta para traer la ultima venta realizada
    $queryVenta2 = "SELECT * from venta order by Fecha desc limit 1;";
    $consultaVenta2 = pg_query($conn, $queryVenta2);
    $venta= pg_fetch_array($consultaVenta2);
    $id_venta = $venta['id_venta'];
    //consulta para traer los datos de la venta realizada
    $queryVenta3 = "SELECT p.nombreProducto, p.Precio, a.cantidad, a.total_producto from asigna a, Productos p where p.codProducto=a.codProducto and a.id_venta= '$id_venta';";
    $consultaVenta3 = pg_query($conn, $queryVenta3);
   
	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Facturación
    </title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="icon" href="../../img/icon.png">
</head>

<body>
    <div class="control-bar">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="slogan">Facturación </div>

                    <label for="config_tax">IVA:
                        <input type="checkbox" id="config_tax" />
                    </label>
                    <label for="config_tax_rate" class="taxrelated">Tasa:
                        <input type="text" id="config_tax_rate" value="19" />%
                    </label>
                    <label for="config_note">Nota:
                        <input type="checkbox" id="config_note" />
                    </label>

                </div>
                <div class="col-6 text-right">
                    <a
                        href="../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>&id_usuario=<?php echo $idU?>">Volver</a>
                   
                    <a href="javascript:window.print()">Imprimir</a>
                </div>
                <!--.col-->
            </div>
            <!--.row-->
        </div>
        <!--.container-->
    </div>
    <!--.control-bar-->


    <header class="row">
        <div class="logoholder text-center">
            <img src="assets/img/logo.png">
        </div>
        <!--.logoholder-->

        <div class="me">
            <p>
                <strong>Generado por: Easy bill</strong><br>
                Colombia<br>
            </p>
        </div>
        <!--.me-->

        <div class="info">
            <p>
                Empresa: <br>
                Restaurante Orquídea<br>
                Nit: 405.127.228-4
            </p>
        </div>
        <!--.bank-->

    </header>


    <div class="row section">

        <div class="col-2">
            <h1>Factura</h1>
        </div>
        <!--.col-->

        <div class="col-2 text-right details">
            <p>
                Fecha: <?php echo  $venta['fecha'];?><br>
                Factura #: <?php echo  $venta['id_venta'];?><br>
            </p>
        </div>
        <!--.col-->

        <div class="col-2">

            <p class="client">
                <strong>Facturar a Cliente</strong><br>
                <?php echo  $venta['nombrecliente'];?><br>
                <?php echo  $venta['id_cliente'];?><br>
            </p>
        </div>
        <!--.col-->


        <div class="col-2">
            <p class="client">
                <strong>Empresa</strong><br>
                Orquídea del llano<br>
                Restaurante<br>
                Calle 7 No.45-185, La Esperanza, Villavicencio, Meta<br>
            </p>
        </div>
        <!--.col-->



    </div>
    <!--.row-->

    <div class="row section" style="margin-top:-1rem">
        <div class="col-1">
            <table style='width:100%'>
                <thead>
                    <tr class="invoice_detail">
                        <th width="25%" style='text-align: center;'>Vendedor</th>
                        <th width="25%">Orden de compra </th>

                        <th width="30%">Medio de pago</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="invoice_detail">
                        <td width="25%" style="text-align"><?php echo  $ventaNombreUsuario['nombre_usuario'];?></td>
                        <td width="25%"><?php echo $id_venta;?> </td>

                        <td width="30%"><?php echo  $venta['metodopago'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!--.row-->

    <div class="invoicelist-body">
        <table>
            <thead>
                <th width="5%">Código</th>
                <th width="60%">Producto</th>

                <th width="10%">Cant.</th>
                <th width="15%">Precio</th>
                <th class="taxrelated">IVA</th>
                <th width="10%">Total</th>
            </thead>

            <tbody>
            <?php
                        //recorre los productos vendidos y muestra sus atributos
                    while($row = pg_fetch_array($consultaVenta3)){
                ?>
                <tr>
                    <td width='5%'><a class="control removeRow" href="#">x</a> <span><?php echo  $venta['id_venta'];?></span></td>
                    <td width='60%'><span><?php echo  $row['nombreproducto'];?></span></td>
                    
                    <td class="amount"><input type="text" value="<?php echo $row['cantidad'];?>" /></td>
                    <td class="rate"><input type="text" value="<?php echo $row['precio'];?>" /></td>
                    <td class="tax taxrelated"></td>
                    <td class="sum"> <?php echo $row['total_producto'];?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!--.invoice-body-->

    <div class="invoicelist-footer">
        <table>
            <tr class="taxrelated">
                <td>IVA:</td>
                <td id="total_tax"></td>
            </tr>
            <tr>
                <td><strong>Total:</strong></td>
                <td id="total_price"></td>
            </tr>
        </table>
    </div>

    <div class="note" contenteditable>
        <h2>Nota:</h2>
    </div>
    <!--.note-->

    <footer class="row">
        <div class="col-1 text-center">
            <p class="notaxrelated" contenteditable>El monto de la factura no incluye el impuesto sobre las ventas.</p>

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')
    </script>
    <script src="assets/js/main.js"></script>

</body>

</html>