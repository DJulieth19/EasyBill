<?php
$id_usuario = $_POST['id_usuario'];
$medioPago = $_POST['medioPago'];
$nombreCliente = $_POST['nombreCliente'];
$identificacion =  $_POST['identificacion'];
$nombre_usuario = $_POST['nombre_usuario'];
$tipo_usuario = $_POST['tipo_usuario'];


require_once("../../Database.php");
$conn = conectardb();

date_default_timezone_set('America/Bogota');
$fecha1 = date("Y-m-d H:i:00");
$fecha2 =date('Y-m-d H:i:59');
$fechaActual =date('Y-m-d H:i:s');
   
    $queryVenta = "INSERT INTO venta (Metodopago,nombreCliente,Fecha,id_usuario,id_cliente) values ('$medioPago','$nombreCliente','$fechaActual','$id_usuario','$identificacion');";
    $insertarPlatos = pg_query($conn, $queryVenta); 
    
$datos[] = [$id_usuario,$medioPago,$nombreCliente,$identificacion,$nombre_usuario,$tipo_usuario];
echo json_encode($datos);
?>