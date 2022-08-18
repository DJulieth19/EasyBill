<?php
$codProducto = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$id_usuario = $_POST['id_usuario'];
$medioPago = $_POST['medioPago'];
$nombreCliente = $_POST['nombreCliente'];
$identificacion =  $_POST['identificacion'];
$nombre_usuario = $_POST['nombre_usuario'];
$tipo_usuario = $_POST['tipo_usuario'];
$total = $cantidad * $precio;
require_once("../../Database.php");
$conn = conectardb();
    //consulta para obtener la ultima venta realizada para obtener el id_venta para insertar a asigna
    $queryConsulta = "SELECT * from venta order by Fecha desc limit 1";
    $consulta = pg_query($conn, $queryConsulta);
    $venta= pg_fetch_array($consulta);
    $id_venta=$venta['id_venta'];  
    //insercion de los productos vendidos a la tabla asigna
    $queryAsigna = "INSERT INTO asigna (cantidad,total_producto,id_venta,codProducto) values ('$cantidad','$total','$id_venta','$codProducto');";
    $insertarPlatos = pg_query($conn, $queryAsigna);

   
$datos[] = [$codProducto,$cantidad,$precio,$id_usuario,$medioPago,$nombreCliente,$identificacion,$nombre_usuario,$tipo_usuario];
echo json_encode($datos);
?>