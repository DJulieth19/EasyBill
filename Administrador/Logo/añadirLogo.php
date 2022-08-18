<?php 
require_once("../../Database.php");
require '../../APICloudinary/vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
//conexion a la API cloudinary
Configuration::instance([
    'cloud' => [
      'cloud_name' => 'unillanos', 
      'api_key' => '595771922239292', 
      'api_secret' => 'YVupB_KXv4liHPlq_MJWZ9vFfdE'],
    'url' => [
      'secure' => true]]);
      //obtencion de la ruta de la imagen subida
      $ruta=$_FILES['archivo']['tmp_name'];
      
$conn = conectardb();      
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
//validacion de insercion de la imagen
if($ruta == ""){
  //en caso de no haberse insertado ninguna imagen, se insertara una por defecto
  $queryUsuarios = "UPDATE logo SET ruta_imagen='../img/logo.png' WHERE id_logo='1'";
  $editarUsuarios = pg_query($conn, $queryUsuarios); 
}else{
  //envio de la imagen a la API cloudinary
  $data = (new UploadApi())->upload($ruta);
  //obtencion de la ruta donde se almacena la imagen
  $direccion = $data['secure_url'];
  //insercion del logo
  $queryUsuarios = "UPDATE logo SET ruta_imagen='$direccion' WHERE id_logo='1'";
  $editarUsuarios = pg_query($conn, $queryUsuarios);       
  }

header("location:../index.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>