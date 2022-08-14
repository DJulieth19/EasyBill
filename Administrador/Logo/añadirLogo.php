<?php 
require_once("../../Database.php");
require '../../APICloudinary/vendor/autoload.php';
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
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];

$queryUsuarios = "UPDATE logo SET ruta_imagen='$direccion' WHERE id_logo='1'";
$editarUsuarios = pg_query($conn, $queryUsuarios);

header("location:../index.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>