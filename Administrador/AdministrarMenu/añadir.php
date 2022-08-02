<?php 
require_once("../../Database.php");
require 'vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance([
    'cloud' => [
      'cloud_name' => 'unillanos', 
      'api_key' => '595771922239292', 
      'api_secret' => 'YVupB_KXv4liHPlq_MJWZ9vFfdE'],
    'url' => [
      'secure' => true]]);

      $ruta=$_FILES['archivo']['tmp_name'];
      $data = (new UploadApi())->upload($ruta);
      $direccion = $data['secure_url'];

$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
$queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen)  values ('$nombreProducto','$Precio','$direccion');";
$insertarPlatos = pg_query($conn, $queryPlatos);

header("location: ./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>