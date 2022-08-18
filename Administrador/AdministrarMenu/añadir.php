<?php 
require_once("../../Database.php");
require '../../APICloudinary/vendor/autoload.php';
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
//conexión a la API cloudinary para el envio de imagenes
Configuration::instance([
    'cloud' => [
      'cloud_name' => 'unillanos', 
      'api_key' => '595771922239292', 
      'api_secret' => 'YVupB_KXv4liHPlq_MJWZ9vFfdE'],
    'url' => [
      'secure' => true]]);
      //obtención de la dirección de el archivo subido
      $ruta=$_FILES['archivo']['tmp_name'];
      

$conn = conectardb();
$nombreProducto =$_POST['nombreProducto'];
$Precio=$_POST['Precio'];
$usuario = $_GET['nombre'];
$tipo = $_GET['tipoUsuario'];
//validación para ingresarle la imagen subida
if($ruta == ""){
  //No se subio una imgagen entonces inserta una imagen por defecto
  $queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen,producto_activo)  values ('$nombreProducto','$Precio','./img/plato.png','true');";
  $insertarPlatos = pg_query($conn, $queryPlatos); 
}else{
  //envia la imagen subida a cloudinary
  $data = (new UploadApi())->upload($ruta);
  //obtiene la ruta donde se va a alojar la imagen
  $direccion = $data['secure_url'];
  $queryPlatos = "INSERT INTO productos (nombreproducto,precio,ruta_imagen,producto_activo)  values ('$nombreProducto','$Precio','$direccion','true');";
  $insertarPlatos = pg_query($conn, $queryPlatos);       
  }


header("location: ./menu.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>