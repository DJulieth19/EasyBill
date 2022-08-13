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
$nombre_usuario=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$ciudad=$_POST['ciudad'];
$nombreFamiliar=$_POST['nombreFamiliar'];
$comidaFavorita = $_POST['comida'];

$queryUsuarios = "INSERT INTO usuarios (tipo_usuario,nombre_usuario,contraseña,ruta_imagen) values ('Empleado','$nombre_usuario','$contraseña','$direccion');";
$insertarUsuarios = pg_query($conn, $queryUsuarios);

$queryUsuarios = "SELECT id_usuario from usuarios WHERE nombre_usuario='$nombre_usuario' AND contraseña='$contraseña' AND tipo_usuario='$tipo_usuario';";
$consultaUsuarios = pg_query($conn, $queryUsuarios);
$usuario1= pg_fetch_array($consultaUsuarios);
$id_usuario=$usuario1['id_usuario'];

$queryRecuperacion = "INSERT INTO Recuperacion (id_usuario,respuesta1,respuesta2,respuesta3) values ('$id_usuario','$cedula','$fexpedicion','$celular');";
$insertarRecuperacion= pg_query($conn, $queryRecuperacion);

header("location:./usuarios.php?nombre=$usuario&tipoUsuario=$tipo");
exit();
?>